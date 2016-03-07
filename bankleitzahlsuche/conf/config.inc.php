<?php
  
  class config_db {
    
    const DB_USER = 'root';
    const DB_PASSW = '';
    const DB_HOST = 'localhost';
    const DATABASE = 'bank_codes';

    const SOAP_URL = 'http://www.thomas-bayer.com/axis2/services/BLZService?wsdl';


    /**
     * connects to a database - just returns mysqli_connect()
     */
    public static function connect() {
      return mysqli_connect(config_db::DB_HOST, config_db::DB_USER, config_db::DB_PASSW, config_db::DATABASE);
    }

  }