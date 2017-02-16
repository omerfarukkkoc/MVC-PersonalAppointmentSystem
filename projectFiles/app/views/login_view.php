

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>Ömer Faruk KOÇ - Kişisel Randevu Sistemi</title>
        
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_PUBLIC; ?>/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_PUBLIC; ?>/css/kullaniciAnasayfaStyle.css" media="screen" />
        <script src="<?php echo SITE_PUBLIC; ?>/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
        
    </head>
    
    <body>

        <header>
            <h1><font color="white" > Ömer Faruk KOÇ - Kişisel Randevu Sistemi</font></h1>
        </header>
    
        <div class="container">
    
            <form method="post" action="<?php echo SITE_URL; ?>/Login/girisKontrol" method="post">
                <div id="yonetim_giris_kapsayici" style="margin:0 auto;">
                    <div class="row" style="font-size: 20px;padding-left:100px;height: 30px;line-height: 20px;color: black;">
		    			<h3>Giriş Paneli</h3>
		    		</div>
                    <p>Kullanıcı Adı</p><input name="tc" type="text" placeholder="Kullanıcı Adı " required="required"/>
                    <p>Şifre</p><input name="sifre" type="password" placeholder="Şifre"  required="required" />
                    <input type="submit" value="Giriş Yap" required="html5Required.html"/>
                    <a style="padding-left: 60px;" href="<?php echo SITE_URL; ?>/Index/uyeOl">Üye Ol</a>
                </div>
            </form>
				
    </div> <!-- /container -->
        
        <footer>Tüm Hakları Ömer Faruk KOÇ'a Aittir.</footer>
            
    </body>
</html>

