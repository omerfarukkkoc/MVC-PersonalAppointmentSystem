<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginModel
 *
 * @author omerf
 */
class LoginModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function girisKontrol($kullaniciAdi,$kullaniciSifre)
    {
        
        $sql = "select yetki from kullanicilar where tc='$kullaniciAdi' and sifre='$kullaniciSifre'"; 
        return $this->db->login($sql);
    }
    
    public function loginKullaniciId($kullaniciAdi,$kullaniciSifre)
    {
        $sql = "select id from kullanicilar where tc='$kullaniciAdi' and sifre='$kullaniciSifre'";   
        return $this->db->idAl($sql);
    }
}
