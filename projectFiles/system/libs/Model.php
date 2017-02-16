<?php

class Model{
    
    protected $db = array(); // türetilmiş sınıftan erişilsin diye böyle tanımladık
    public function __construct() {
        /*$dsn = 'mysql:dbname=2012123057final3;host=10.200.0.107';
        $user = 'intsinav';
        $password = '123456';*/
        
        $dsn = 'mysql:dbname=2012123057final;host=localhost';
        $user = 'root';
        $password = '';
        
        $this->db = new Database($dsn,$user,$password);
}
}


?>