<?php
class Db {
    public static $connection;
    public $configfile="/home/j/Sites/sites/storeconfig.ini";
    public $x=0;
    public function connect() {
        if(!isset(self::$connection)) {
            $config = parse_ini_file($this->configfile);
            self::$connection = new mysqli('localhost',$config['username'],$config['password'],$config['dbname']);
        }

        if(self::$connection === false) {
          print 'connection error';
            return false;
        }
        return self::$connection;
    }


    public function query($query) {
        $connection = $this -> connect();
        $result = $connection -> query($query);
        return $result;
    }

    public function select($n,$query) {

      $count=0;
      $rows = array();
      $result = $this -> query($query);
      if($n==0)
      {
        if($result === false) {
            return false;
        }
        return $result;
      }

      if($n==1)
      {

        if($result === false) {
            return false;
        }

      $rows[] = $result -> fetch_assoc();
      $count=$result -> num_rows;
      }


      if($n>1)
      {
        if($result === false) {
            return false;
        }

        while ($row = $result -> fetch_assoc()) {
            $rows[] = $row;
        }
        $count=$result -> num_rows;
      }

        return array($count,$rows);
    }

     public function error() {
         $connection = $this -> connect();
         return $connection -> error;
     }
     public function serror() {
         $connection = $this -> connect();
         if(!$connection){
           return 0;
         }
         else{
           return 1;
         }
     }

    /**
     * Quote and escape value for use in a database query
     *
     * @param string $value The value to be quoted and escaped
     * @return string The quoted and escaped string
     */
    public function quote($value) {
        $connection = $this -> connect();
        return "'" . $connection -> real_escape_string($value) . "'";
    }




}
?>
