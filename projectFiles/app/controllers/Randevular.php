<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Randevular
 *
 * @author omerf
 */
class Randevular extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    
    public function randevuAl()
    {
        $aciklama = $_POST['aciklama'];
        $tarih= $_POST['tarih'];
        $saat= $_POST['saat'];
        
        
        $randevuAlModel = $this->load->model("randevuAlModel");
        session_start();
        $kullaniciid=$_SESSION["kullaniciID"];
        $sonuc=$randevuAlModel->randevuAl($kullaniciid,$aciklama,$tarih,$saat);
        
        if($sonuc == 1){
            print '<script>alert("Randevuyu Başarıyla Aldınız - Randevularınız Listeleniyor");</script>';
            $randevuListeleModel = $this->load->model("randevuListeleModel");
            $data["randevulistesi"] = $randevuListeleModel->randevuListele($kullaniciid);
            $this->load->view("randevularim",$data);
        }else{ 
            print '<script>alert("Randevu Alınırken Bir Hata Oluştu - Lütfen Tekrar Deneyin");</script>';
            $randevuListeleModel = $this->load->model("randevuListeleModel");
            $data["randevuSaatleri"] = $randevuListeleModel->randevuSaatleriCek();
            $this->load->view("randevuAl",$data);
        }
    }
    
    public function randevuListele() 
    {
        session_start();
        $kullaniciid=$_SESSION["kullaniciID"];
        $randevuListeleModel = $this->load->model("randevuListeleModel");
        $data["randevulistesi"] = $randevuListeleModel->randevuListele($kullaniciid);
        $this->load->view("randevularim",$data);
    }
    
    public function randevuGuncelle()
    {
        $url = isset($_GET["url"]) ? $_GET["url"] : NULL ;

        if($url != null){

        $url = rtrim($url,"/");
        $url = explode("/",$url);
        }
        else{
            unset($url);
        }
        
       $id = $url[2];
       
        $aciklama = $_POST['aciklama'];
        $tarih= $_POST['tarih'];
        $saat= $_POST['saat'];
        
        
        $randevuSilGuncelle = $this->load->model("randevuSilGuncelleModel");
        
        
        $sonuc=$randevuSilGuncelle->randevuGuncelle($aciklama,$tarih,$saat,$id);
        if($sonuc == 1){
            print '<script>alert("Bilgileriniz Başarıyla Güncellenmiştir");</script>';
                $randevuListeleModel = $this->load->model("randevuListeleModel");
                $data["adminRandevuListesi"] = $randevuListeleModel->adminRandevuListele();
                $this->load->view("adminAnaSayfa",$data);
        }else{ 
            print '<script>alert("Güncelleme Yapılırken Bir Hata Oluştu - Lütfen Tekrar Deneyin");</script>';
            $randevuListeleModel = $this->load->model("randevuListeleModel");
                $data["adminRandevuListesi"] = $randevuListeleModel->adminRandevuListele();
                $this->load->view("adminAnaSayfa",$data);
        }
       
               
    }
    
    public function randevuSil()
    {
        $url = isset($_GET["url"]) ? $_GET["url"] : NULL ;

        if($url != null){

        $url = rtrim($url,"/");
        $url = explode("/",$url);
        }
        else{
            unset($url);
        }
        
       $id = $url[2];
       
       $randevuSilGuncelle = $this->load->model("randevuSilGuncelleModel");
        
        
        $sonuc=$randevuSilGuncelle->randevuSil($id);
        if($sonuc == 1){
            print '<script>alert("Randevu Başarıyla Silinmiştir");</script>';
                $randevuListeleModel = $this->load->model("randevuListeleModel");
                $data["adminRandevuListesi"] = $randevuListeleModel->adminRandevuListele();
                $this->load->view("adminAnaSayfa",$data);
        }else{ 
            print '<script>alert("Silme Yapılırken Bir Hata Oluştu - Lütfen Tekrar Deneyin");</script>';
            $randevuListeleModel = $this->load->model("randevuListeleModel");
                $data["adminRandevuListesi"] = $randevuListeleModel->adminRandevuListele();
                $this->load->view("adminAnaSayfa",$data);
        }
       
       
    }
    
}
