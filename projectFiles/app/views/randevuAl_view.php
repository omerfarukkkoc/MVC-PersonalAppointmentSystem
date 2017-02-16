<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>Ömer Faruk KOÇ - Kişisel Randevu Sistemi</title>
        
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_PUBLIC; ?>/css/kullaniciAnasayfaStyle.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_PUBLIC; ?>/css/bootstrap.min.css" media="screen" />
        <script src="<?php echo SITE_PUBLIC; ?>/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
        
    </head>
    
    <body>

        <header>
            <h1><font color="white" > Ömer Faruk KOÇ - Kişisel Randevu Sistemi</font></h1>
        </header>
    
        <nav>
            <ul class="fancyNav">
                <li ><a href="<?php echo SITE_URL;?>/MenuGecis/omerfarukkockimdir">Ömer Faruk KOÇ Kimdir ?</a></li>
                <li ><a href="<?php echo SITE_URL;?>/MenuGecis/randevuAl">Randevu Al</a></li>
                <li ><a href="<?php echo SITE_URL;?>/MenuGecis/randevularim">Randevularım</a></li>
                <li ><a href="<?php echo SITE_URL;?>/MenuGecis/hesapdegisikligi">Hesap Değişikliği</a></li>
                <li ><a href="<?php echo SITE_URL;?>/Index/login">Çıkış Yap</a></li>
            </ul>
        </nav>
        <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Randevu Al</h3>
		    		</div>
    		
	    			<form class="form-horizontal" action="<?php echo SITE_URL;?>/Randevular/randevuAl" method="post">
					  <div class="control-group">
					    <label class="control-label">Randevu Nedeni</label>
					    <div class="controls">
					      	<input name="aciklama" type="text"  placeholder="Randevu Nedeni" value="" required="required">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Tarih</label>
					    <div class="controls">
                                                <input type="date" name="tarih" style="height: 30px;width: 220px;text-align: center;" required="required"/>
					    </div>
					  </div>
					  <div class="control-group ">
					    <label class="control-label">Saat</label>
					    <div class="controls">
                                                <select name="saat" id="saat">
                                                <?php 
					
	 				   foreach ($randevuSaatleri as $key => $value) {
                                                $id=$value['id'];
                                                $saat=$value['saat'];
                                                echo "<option value=$id>$saat</option>";echo '<tr>';
					   }
					  ?>
                                                </select >
                                              </div>
					  </div>
					  <div class="form-actions">
						  <input type="submit" class="btn btn-success" value="Randevu Al"  style ="margin-left: 20px;" required="html5Required.html"/>
					  </div>
					</form>
				</div>
				
    </div> <!-- /container -->
        
        <footer>Tüm Hakları Ömer Faruk KOÇ'a Aittir.</footer>
            
    </body>
</html>
