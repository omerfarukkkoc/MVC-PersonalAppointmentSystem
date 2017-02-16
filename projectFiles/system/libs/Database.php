<?php

class Database extends PDO{
    public function __construct($dsn,$user,$password) {
         
        parent::__construct($dsn,$user,$password);
        
        $this->query("SET NAMES 'utf8'");
        $this->query("SET CHARACTER SET utf8");   
    }
    
    public function tcKontrol($sql)
    {
        $sth = $this->prepare($sql);
        $sth->execute();
        if($sth->rowCount()>0)
        {
            return true;
        }
        else 
            {
                return false;
        }
    }
    
    public function login($sql,$array = array(),$fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->prepare($sql);
        $sth->execute();
        if($sth->rowCount())
        {
            $result = $this->query($sql)->fetch();
            $yetki = $result[0];
            return $yetki;
        }
    }
    
    public function idAl($sql,$array = array(),$fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->prepare($sql);
        $sth->execute();
        if($sth->rowCount())
        {
            $result = $this->query($sql)->fetch();
            $ID = $result[0];
            return $ID;
        }
    }
    
    public function insert($kullaniciid,$aciklama,$tarih,$saat){
       
        $sql = "insert into randevular(kullaniciid,randevuAciklama,tarih,saat)values('$kullaniciid','$aciklama','$tarih','$saat')";
        $sth=$this->prepare($sql);
        return $sth->execute();
    }
    public function kullaniciKaydet($sql)
    {
        $sth=$this->prepare($sql);
        return $sth->execute();
    }
    
    public function select($sql,$array = array(),$fetchMode = PDO::FETCH_ASSOC){
       
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value){
            $sth->bindValue($key, $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }
    
    public function randevuGuncelle($aciklama,$tarih,$saat,$id){
        
         $sql = "update randevular set randevuAciklama='$aciklama',tarih='$tarih',saat='$saat' where id='$id' ";
        $sth=$this->prepare($sql);
        return $sth->execute();
    }
    
    public function update($kullaniciid,$kadi,$sifre){
        
         $sql = "update kullanicilar set tc='$kadi',sifre='$sifre' where id='$kullaniciid' ";
        $sth=$this->prepare($sql);
        return $sth->execute();
    }
       
    public function delete($id){
        return $this->exec("DELETE FROM randevular WHERE id='$id'");
    }
}

?>