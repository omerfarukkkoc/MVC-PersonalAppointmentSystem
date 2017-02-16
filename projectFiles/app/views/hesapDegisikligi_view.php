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
		    			<h3>Hesabınızı Güncellemek İçin Aşağıdaki Alanları Kullanabilirsiniz</h3>
		    		</div>
                            
                            
                            <form class="form-horizontal" action="<?php echo SITE_URL;?>/Index/kullaniciBilgileriGuncelle" method="post">
					<?php 
					
	 				   foreach ($kullaniciBilgileri as $key => $value) {
							   	$kadi=$value['tc'];
							   	$sifre=$value['sifre'];
					   }
					  ?>  
                                
                                <div class="control-group">
					    <label class="control-label">Kullanıcı Adı</label>
					    <div class="controls">
					      	<input name="tc" type="text"  placeholder="Kullanıcı Adınız" value="<?php echo $kadi;?>" required="required">
					    </div>
					  </div>
					  <div class="control-group">
					    <label class="control-label">Şifre</label>
					    <div class="controls">
					      	<input name="sifre" type="text"  placeholder="Sifreniz" value="<?php echo $sifre;?>" required="required">
					    </div>
					  </div>
					  <div class="form-actions">
						  <input type="submit" class="btn btn-success" value="Güncelle"  style ="margin-left: 20px;" required="html5Required.html"/>
					  </div>
					</form>
                            
			</div>
				
    </div> <!-- /container -->
        
        <footer>Tüm Hakları Ömer Faruk KOÇ'a Aittir.</footer>
            
    </body>
</html>
