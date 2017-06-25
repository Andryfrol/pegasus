<?php
/* Sitemaker Frolyonok AV
   Плагин подстановки городов https://harvesthq.github.io/chosen
 */
$phone1_tel = 'tel:7495337371';
$phone1 = '8 495 337 371';
$phone2_tel = 'tel:7969738737';
$phone2 = '8 969 738 737';

class database  {
    var $host = 'localhost';
    var $user = 'ce18538_pegas';
    var $pass = '5440';
    var $db = 'ce18538_pegas';
    var $myconn;

    public function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;
        }
        return $this->myconn;
    }
}

?>
