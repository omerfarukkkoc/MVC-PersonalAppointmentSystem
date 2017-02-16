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
class Login extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function girisKontrol()
    {
        $kullaniciTC = $_POST['tc'];
        $kullaniciSifre = $_POST['sifre'];
        
        
        $LoginModel = $this->load->model("LoginModel");
        
        $yetki = $LoginModel->girisKontrol($kullaniciTC,$kullaniciSifre);
        
        if($yetki != NULL)
        {
            if($yetki==1)
            {
                $this->load->view("kullaniciAnasayfa");
                
                /*Kullanıcının ID'sini Alıyo*/
                $ID = $LoginModel->loginKullaniciId($kullaniciTC,$kullaniciSifre);
                session_start();
                $_SESSION["kullaniciID"] = $ID;
            }
            else if($yetki==0)
            {
                $randevuListeleModel = $this->load->model("randevuListeleModel");
                $data["adminRandevuListesi"] = $randevuListeleModel->adminRandevuListele();
                $this->load->view("adminAnaSayfa",$data);
            }
        }
        else
        {
            print '<script>alert("Kullanıcı Adı Veya Şifre Yanlış!!");</script>';
            $this->load->view("login");
        }
    }
    
}

