<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of randevuSilGuncelleModel
 *
 * @author omerf
 */
class randevuSilGuncelleModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function randevuGuncelle($aciklama,$tarih,$saat,$id)
    {
        return $this->db->randevuGuncelle($aciklama,$tarih,$saat,$id);
    }
    
    public function randevuSil($id)
    {
        return $this->db->delete($id);
    }
}
