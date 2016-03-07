<?php
  include_once('conf/config.inc.php');

  $data = array();

  $connection = config_db::connect();
  $query = "SELECT bank_code, name FROM bankcodes WHERE bank_code LIKE '%". $_GET['keyword'] ."%'";
  $result = mysqli_query($connection, $query);
  while ($row = mysqli_fetch_array($result)) {
    $data[]['bank_code'] = $row['bank_code'];
    $data[]['name'] = $row['name'];
  }
  
  for ($i=0; $i < count($data); $i++) {
    echo "<li onClick='selectValue(". $data[$i]['bank_code'] .")'>" . $data[$i]['bank_code'] . "</li>";
  }