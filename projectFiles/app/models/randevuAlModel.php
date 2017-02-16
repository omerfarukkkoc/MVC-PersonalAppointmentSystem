<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of randevuAl
 *
 * @author omerf
 */
class randevuAlModel extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function randevuAl($kullaniciid,$aciklama,$tarih,$saat)
    {
        return $this->db->insert($kullaniciid,$aciklama,$tarih,$saat);
    }
    
}
