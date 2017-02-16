<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuGecis
 *
 * @author omerf
 */
class MenuGecis extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function omerfarukkockimdir()
    {
        $this->load->view("kullaniciAnasayfa");
    }
    
    public function randevuAl()
    {
        $randevuListeleModel = $this->load->model("randevuListeleModel");
        $data["randevuSaatleri"] = $randevuListeleModel->randevuSaatleriCek();
        $this->load->view("randevuAl",$data);
    }
    
    public function randevularim()
    {
        session_start();
        $kullaniciid=$_SESSION["kullaniciID"];
        $randevuListeleModel = $this->load->model("randevuListeleModel");
        $data["randevulistesi"] = $randevuListeleModel->randevuListele($kullaniciid);
        $this->load->view("randevularim",$data);
    }
    
    public function hesapDegisikligi()
    {
        session_start();
        $kullaniciid=$_SESSION["kullaniciID"];
        $hesapDegisikligiModel = $this->load->model("hesapDegisikligiModel");
        $data["kullaniciBilgileri"] = $hesapDegisikligiModel->kullaniciBilgileriGetir($kullaniciid);
        $this->load->view("hesapDegisikligi",$data);
    }
}
