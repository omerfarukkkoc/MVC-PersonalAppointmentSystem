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
                <li ><a href="<?php echo SITE_URL;?>/Index/login">Çıkış Yap</a></li>
            </ul>
        </nav>
        <div class="container">
    
    			<div class="span10 offset1">
    				<div class="row">
		    			<h3>Sizden Alınan Randevular</h3>
		    		</div>
			</div>
            <table class="table table-striped table-bordered" style="width: 900px;">
		              <thead>
		                <tr>
		                  <th>Randevu Nedeni</th>
		                  <th>Randevu Tarihi</th>
		                  <th>Randevu Saati</th>
                                  <th>Randevu Alan Kişi</th>
		                </tr>
		              </thead>
		              <tbody>
		              <?php 
					
	 				   foreach ($adminRandevuListesi as $key => $value) {
						   		echo '<tr>';
							   	echo '<td>'. $value['randevuAciklama'] . '</td>';
							   	echo '<td>'. $value['tarih'] . '</td>';
							   	echo '<td>'. $value['saat'] . '</td>';
                                                                echo '<td>'. $value['tc'] . '</td>';
                                                                echo '<td width=135>';
                                                                echo '<a class="btn btn-success" href="'.SITE_URL.'/Index/randevuGuncelle/'.$value['id'].'">Güncelle</a>';
                                                                echo '&nbsp;';
                                                                echo '<a class="btn btn-danger" href="'.SITE_URL.'/Randevular/randevuSil/'.$value['id'].'">Sil</a>';
                                                                echo '</td>';
							   	echo '</tr>';
					   }
					  ?>
				      </tbody>
                            </table>
				
    </div> <!-- /container -->
        
        <footer>Tüm Hakları Ömer Faruk KOÇ'a Aittir.</footer>
            
    </body>
</html>
