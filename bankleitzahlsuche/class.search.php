<?php
 include_once('conf/config.inc.php');
 class search { 


  /**
   * function search_bank_code
   * @param   $code          post-param searchvalue
   * @return  array/boolean  if data found returns array, otherwise returns FALSE
   */
  public static function search_bank_code($code) {
  
    $data = array();
    $connection = config_db::connect();
    mysqli_query($connection, "SET NAMES UTF8");
    $query = "SELECT * FROM bankcodes 
               WHERE bank_code = '". mysqli_real_escape_string($connection, $_POST['blz']) . "'";
    $result = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_array($result)) {
	    $data = $row;
	  }
    // if something was found
	  if (!empty($data)) {
      error_log("[" . date('Y-m-d H:i:s')."] - result was found in Database \n", 3 , 'logfiles/log_'.date('Y-m-d').'.txt');
      return $data;
	  } else {
      error_log("[" . date('Y-m-d H:i:s')."] - could not find entries in Database. New Entry of bank-code must be created \n", 3 , 'logfiles/log_'.date('Y-m-d').'.txt');
      return false;
	  }

  }

  /**
   * function insert_bank_code
   * @param  $code          post-param searchvalue
   * @return void
   */
  public static function insert_bank_code($code) {
    
    $connection = config_db::connect();
    $code = $_POST['blz'];
    try {
      $client = new SoapClient(config_db::SOAP_URL);
      $result = $client->getBank(array('blz' => $code));
      $insert_query = "INSERT INTO bankcodes (name, bank_code, bic, location, zip_code) 
           VALUES('" . utf8_decode($result->details->bezeichnung) ."', 
           	      '" . trim($_POST['blz']) ."',
           	      '" . $result->details->bic ."',
           	      '" . utf8_decode($result->details->ort) ."',
           	      '" . $result->details->plz ."')";
      if (mysqli_query($connection, $insert_query) === true) {
      	echo "<div class='row'>
          <div class='container'>
           <div class='col-lg-10 col-lg-offset-1 col-md-12'>
             New entry was added into database by a SOAP-webservice request!
           </div></div></div>";
        error_log("[" . date('Y-m-d H:i:s')."] - Webservice called successfully.A new entry was created for " . $_POST['blz'] . " - " . utf8_decode($result->details->bezeichnung) . "\n", 3 , 'logfiles/log_'.date('Y-m-d').'.txt');
      }
      //print_r($result->details->bezeichnung);
      //print_r($result);
    } catch (SoapFault $exception) {
      error_log("[" . date('Y-m-d H:i:s')."] - SOAP-FaultException occurred" . $exception->getMessage() . "\n", 3 , 'logfiles/log_'.date('Y-m-d').'.txt');
      echo $exception->getMessage();
    }
  }

}