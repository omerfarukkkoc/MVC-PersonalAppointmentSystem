<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of randevuListeleModel
 *
 * @author omerf
 */
class randevuListeleModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function randevuSaatleriCek()
    {
        $sql = "SELECT randevusaatleri.saat,randevusaatleri.id FROM randevusaatleri WHERE randevusaatleri.id not IN(select randevular.saat from randevular)";  
        return $this->db->select($sql);
        
    }
    
    public function randevuListele($kullaniciid)
    {
        $sql = "SELECT randevuAciklama,tarih,randevusaatleri.saat FROM randevular INNER JOIN randevusaatleri ON randevusaatleri.id=randevular.saat where kullaniciid='$kullaniciid'";  
        return $this->db->select($sql);
        
    }
    
    public function adminRandevuListele()
    {
        $sql = "SELECT randevular.id,randevuAciklama,tarih,randevusaatleri.saat,tc FROM randevular INNER JOIN randevusaatleri ON randevusaatleri.id=randevular.saat INNER JOIN kullanicilar ON kullanicilar.id=randevular.kullaniciid" ;  
        return $this->db->select($sql);
        
    }
    
}
