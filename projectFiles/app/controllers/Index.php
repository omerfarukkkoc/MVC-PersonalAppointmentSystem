<?php

class Index extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function login()
    {
        $this->load->view("login");
    }
    
    public function uyeOl()
    {
        $this->load->view("uyeOl");
    }
    
    public function randevuGuncelle()
    {
        $randevuListeleModel = $this->load->model("randevuListeleModel");
        $data["randevuSaatleri"] = $randevuListeleModel->randevuSaatleriCek();
        $this->load->view("randevuGuncelle",$data);
    }
    public function uyeKaydet()
    {
        $tc = $_POST['tc'];
        
        $hesapDegisikligiModel = $this->load->model("hesapDegisikligiModel");
        
        $result=$hesapDegisikligiModel->kullaniciTCKontrol($tc);
        
        if($result==true)
        {
            print '<script> alert("Bu Kullanıcı Adı sistemimizde kayıtlıdır.!!!");</script>';
            $this->load->view("uyeOl");
        } 
        else 
        {
            $tc = $_POST['tc'];
            $email = $_POST['email'];
            $sifre= $_POST['sifre'];

            $sonuc=$hesapDegisikligiModel->kullaniciKaydet($tc,$email,$sifre);
            
                echo $sonuc;
            if($sonuc == 1){
                print '<script>alert("Başarıyla Üye Oldunuz Girişe Yönlendiriliyorsunuz.");</script>';
                $this->load->view("login");
            }else{ 
                print '<script>alert("Üye Olurken Bir Hata Oluştu - Lütfen Tekrar Deneyin");</script>';
                $this->load->view("uyeOl");
            }
        }
    }
    
    public function hesapDegisikligi()
    {
        session_start();
        $kullaniciid=$_SESSION["kullaniciID"];
        $hesapDegisikligiModel = $this->load->model("hesapDegisikligiModel");
        $data["kullaniciBilgileri"] = $hesapDegisikligiModel->kullaniciBilgileriGetir($kullaniciid);
        $this->load->view("hesapDegisikligi",$data);
    }
    
    
    public function kullaniciBilgileriGuncelle()
    {
        $kadi = $_POST['tc'];
        $sifre= $_POST['sifre'];
        $hesapDegisikligiModel = $this->load->model("hesapDegisikligiModel");
        session_start();
        $kullaniciid=$_SESSION["kullaniciID"];
        
        $sonuc=$hesapDegisikligiModel->kullaniciBilgileriGuncelle($kullaniciid,$kadi,$sifre);
        
        if($sonuc == 1){
            print '<script>alert("Bilgileriniz Başarıyla Güncellenmiştir");</script>';
            $data["kullaniciBilgileri"] = $hesapDegisikligiModel->kullaniciBilgileriGetir($kullaniciid);
            $this->load->view("hesapDegisikligi",$data);
        }else{ 
            print '<script>alert("Güncelleme Yapılırken Bir Hata Oluştu - Lütfen Tekrar Deneyin");</script>';
            $data["kullaniciBilgileri"] = $hesapDegisikligiModel->kullaniciBilgileriGetir($kullaniciid);
            $this->load->view("hesapDegisikligi",$data);
        }
       // Index::hesapDegisikligi();
    }
    
}

