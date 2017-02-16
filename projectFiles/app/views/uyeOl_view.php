

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        
        <title>Ömer Faruk KOÇ - Kişisel Randevu Sistemi</title>
        
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_PUBLIC; ?>/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_PUBLIC; ?>/css/kullaniciAnasayfaStyle.css" media="screen" />
        <script src="<?php echo SITE_PUBLIC; ?>/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster" />
        <script type="text/javascript" src="<?php echo SITE_PUBLIC; ?>/js/login.js"></script>
        
    </head>
    
    <body>

        <header>
            <h1><font color="white" > Ömer Faruk KOÇ - Kişisel Randevu Sistemi</font></h1>
        </header>
    
        <div class="container">
    
            <form method="post" action="<?php echo SITE_URL; ?>/Index/uyeKaydet" method="post">
                <div id="yonetim_giris_kapsayici" style="margin:0 auto;">
                    <div class="row" style="font-size: 20px;padding-left:100px;height: 30px;line-height: 20px;color: black;">
		    			<h3>Üye Ol</h3>
		    		</div>
                    <p>E-Mail</p><input name="email" class="email"  id="email" type="text" placeholder="E-Mail"  required="required" /><h4 class="tch4" ></h4>
                    <p>Kullanıcı Adı</p><input name="tc" type="text" class="tc"  id="tc" placeholder="Kullanıcı Adı " required="required"/><h4 class="tch4" ></h4>
                    <p>Şifre</p><input name="sifre" type="password" placeholder="Şifre"  required="required" />
                    <input type="submit" name="login" class="login" id="login" value="Üye Ol" required="html5Required.html"/>
                </div>
            </form>
				
    </div> <!-- /container -->
        
        <footer>Tüm Hakları Ömer Faruk KOÇ'a Aittir.</footer>
            
    </body>
</html>

