<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bank Code search</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- other CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<?php

  include_once("class.search.php");

  if (isset($_POST['blz']) && !empty($_POST['blz'])) {
    $results = search::search_bank_code($_POST['blz']);
    if (empty($results)) {
    	search::insert_bank_code($_POST['blz']);
    } else {
        echo "<div class='row'>
          <div class='container'>
           <div class='col-lg-10 col-lg-offset-1 col-md-12'>
       <h2>Bank Information</h2>
             
  <table class='table table-hover'>
    <thead> 
      <tr>
        <th>Identifier</th>
        <th>Name</th>
        <th>BIC</th>
        <th>Place</th>
        <th>ZIP-Code</th>
      </tr>
    </thead>
      <tbody>
        <tr>
          <td>" . $results['bank_code'] . "</td>
          <td>" . $results['name'] . "</td>
          <td>" . $results['bic'] . "</td>
          <td>" . $results['location'] ."</td>
          <td>" . $results['zip_code'] . "</td>
        </tr>
      </tbody>
     </table>
      </div>
     </div>
    </div>";

    }
  }

?>
  <div class="row">
  	 <div class="container">
        <div class="col-lg-10 col-lg-offset-1 col-md-12">
          <a href="index.html" class="btn btn-default" role="button">back to seach-form</a>
        </div>
    </div>
  </div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>