<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hesapDegisikligiModel
 *
 * @author omerf
 */
class hesapDegisikligiModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function kullaniciTCKontrol($tc)
         {
             $sql="SELECT * FROM kullanicilar WHERE tc='$tc'";
             return $this->db->tcKontrol($sql);
         }
         
    public function kullaniciKaydet($tc,$email,$sifre)
    {
        $sql = "insert into kullanicilar(tc,email,sifre,yetki)values('$tc','$email','$sifre','1')"; 
        return $this->db->kullaniciKaydet($sql);
    }
    
    public function kullaniciBilgileriGuncelle($kullaniciid,$kadi,$sifre)
    {
        return $this->db->update($kullaniciid,$kadi,$sifre);
    }
    
    public function kullaniciBilgileriGetir($kullaniciid)
    {
        $sql = "select tc,sifre from kullanicilar where id='$kullaniciid'";  
        return $this->db->select($sql);
    }
}
