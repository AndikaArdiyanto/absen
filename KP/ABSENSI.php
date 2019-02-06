<html>
<head>
<title> Form Absensi Recruitmen</title>
<link rel="stylesheet" href="js-lib/jquery.signature.css" />
        <link rel="stylesheet" href="js-lib/jquery-ui.css" />
        <link rel="stylesheet" href="js-lib/jquery.signature.css" />
        
        <script src="js-lib/jquery.min.js" type="text/javascript" ></script>
        <script src="js-lib/jquery-ui.min.js" type="text/javascript" > </script>
        <script src="js-lib/jquery.signature.js" type="text/javascript" ></script>
        <script src="js-lib/jquery.ui.touch-punch.min.js" type="text/javascript" ></script>
        
        
        <!--[if IE]>
        <script type="text/javascript" src="js-lib/excanvas.js"></script>
        <![endif]-->
        
        <style>
            .kbw-signature{
                height: 200px;
                width: 300px;
            }
        </style>
        
        <script>
            $(function(){
                $('#tandatangan').signature({guideline: true});
                
                $('#hapus').click(function(){
                    $('#tandatangan').signature('clear');
                    $('#salinan').signature('clear');
                });
                
                $('#json').click(function(){
                    var pesan = $('#tandatangan').signature('toJSON');
                    alert(pesan);
                });
                
                $('#draw').click(function(){
                    var json = $('#tandatangan').signature('toJSON');
                    $('#salinan').signature('draw', json);
                });
                
                $('#salinan').signature({disabled: true, guideline: true}); 
                
            });
        </script>
    </head>

<body>

<p>
<img src="ish.png" style="float:left;width:200px;height:200px;">
</p>

</div>
<table width=10% height="10%" align="center">
<tr>

<td>
<hl><b>Absensi Kehadiran Recruitmen</b><hr size="5px"color="black"></hr></h1>

<form>
<table width="100%" align="left">
<?php
include("config.php");
?>
		<div class="form-group">
                <label class="col-sm-2 control-label">NAMA LENGKAP</label>
                <div class="col-sm-4">
                    <input type="text" name="nama" class="form-control" required>
                </div>
        </div>
			
		<div class="form-group">
                <label class="col-sm-2 control-label">EMAIL</label>
                <div class="col-sm-4">
                    <input type="email" name="email" class="form-control" placeholder="" required>
                </div>
         </div>
		<div class="form-group">
                <label class="col-sm-2 control-label">NO HP</label>
                <div class="col-sm-4">
                    <input type="text" name="telpon" class="form-control">
                </div>
        </div>
		 
		<div class="form-group">
                <label class="col-sm-2 control-label">ALAMAT</label>
                <div class="col-sm-8">
                    <textarea name="alamat" class="form-control"  required></textarea>
                </div>
        </div>




</table>
<h2>Tanda Tangan Anda</h2>
        
        <div id="tandatangan"></div>
        
        <p>
            <button id="hapus">Hapus</button>
            <button id="json">Format ke JSON</button>
        </p>
        
<div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-8">
                    <input type="submit" name="submit" class="btn btn-primary" value="KIRIM PESAN">
                </div>
            </div>
</form>
<?php
        //definisikan variabel untuk tiap-tiap inputan
        $nama       = $koneksi->real_escape_string($_POST['nama']);
        $email      = $koneksi->real_escape_string($_POST['email']);
        $telpon        = $koneksi->real_escape_string($_POST['telpon']);        
        $alamat      = $koneksi->real_escape_string($_POST['alamat']);       
        
		//jika di klik tombol kirim pesan menjalankan script di bawah ini
		if($_POST['submit']){
			$input = $koneksi->query("INSERT INTO bukutamu(nama,email,telpon,alamat) VALUES('$nama','$email','$telpon','$alamat')") or die($koneksi->error);
			if($input){
				echo '<div class="alert alert-success">Pesan anda berhasil di simpan!</div>';
			}else{
				echo '<div class="alert alert-warning">Gagal menyimpan pesan!</div>';
			}
		}
        ?>
</td>
</tr>

</table>
</body>
</html>
