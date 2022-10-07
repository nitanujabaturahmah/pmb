<?php  
	//start the session
	session_start();

    $redirect = "";
    
    if (isset($_SESSION['is_data_parent_exist'])) {
        $redirect = "<script> window.location='daftar_syarat.php'; </script>";
    }else{
        $redirect = "<script> window.location='daftar_syarat.php'; </script>";
    }

    if(isset($_POST['submit'])){
        foreach ($_POST as $key => $val) {
            ${$key} = $val;
            $_SESSION[''.$key.''] = $val;
        }

        if (!empty($_SESSION)) {
            echo $redirect;
            print_r($_SESSION);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Penerimaan Siswa Baru</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
	<div class="container">

	    <div class="row">
	        <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">

				<div class="card" style="margin-top: 50px">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Data Orang Tua</h4>
                        <p class="category">Isi Form pendaftaran dengan benar</p>
                    </div>
                    <div class="card-content">
                        <form method="post" action="data_ortu.php">
                            
                            <fieldset class="the-fieldset">
                                <legend class="the-legend">Data Ayah</legend>
                                <!-- Father data form input -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nama Ayah</label>
                                        <input type="text" class="form-control" name="nama_ayah" required 
                                        value="<?php isset($_SESSION['nama_ayah'])  ?  print($_SESSION['nama_ayah']) : ""; ?>"
                                        autofocus>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan_ayah" required
                                        value="<?php isset($_SESSION['pekerjaan_ayah'])  ?  print($_SESSION['pekerjaan_ayah']) : ""; ?>"
                                        >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Penghasilan</label>
                                        <input type="text" class="form-control" name="penghasilan_ayah" required
                                        value="<?php isset($_SESSION['penghasilan_ayah'])  ?  print($_SESSION['penghasilan_ayah']) : ""; ?>"
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                            	<div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">NO HP</label>
                                        <input type="number" class="form-control" name="no_ayah" 
										value="<?php isset($_SESSION['no_ayah'])  ?  print($_SESSION['no_ayah']) : ""; ?>" 
                                        required>
                                    </div>
                                </div>
                            </div> 
                            <!-- END Father data form input -->
                            </fieldset>

                            

                            
                                
                            <fieldset class="the-fieldset" style="margin-top: 20px">
                                <legend class="the-legend">Data Ibu</legend>
                                <!-- Father data form input -->
                            <!-- Mother data form input -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nama Ibu</label>
                                        <input type="text" class="form-control" name="nama_ibu" required 
                                        value="<?php isset($_SESSION['nama_ibu'])  ?  print($_SESSION['nama_ibu']) : ""; ?>"
                                        autofocus>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Pekerjaan</label>
                                        <input type="text" class="form-control" name="pekerjaan_ibu" required
                                        value="<?php isset($_SESSION['pekerjaan_ibu'])  ?  print($_SESSION['pekerjaan_ibu']) : ""; ?>"
                                        >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Penghasilan</label>
                                        <input type="text" class="form-control" name="penghasilan_ibu" required
                                        value="<?php isset($_SESSION['penghasilan_ibu'])  ?  print($_SESSION['penghasilan_ibu']) : ""; ?>"
                                        >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                            	<div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">NO HP</label>
                                        <input type="number" class="form-control" name="no_ibu" 
										value="<?php isset($_SESSION['no_ibu'])  ?  print($_SESSION['no_ibu']) : ""; ?>" 
                                        required>
                                    </div>
                                </div>
                            </div>
                            <!-- END Mother data form input -->
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Alamat Orangtua</label>
                                        <input type="text" class="form-control" name="alamat_ortu" required
                                        value="<?php isset($_SESSION['alamat_ortu'])  ?  print($_SESSION['alamat_ortu']) : ""; ?>">
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                            
                            <?php  
                            if (isset($_SESSION['is_data_parent_exist'])) {
                            ?>
                                <button type="submit" name="submit" class="btn btn-primary pull-right">Kembali <i class="fa fa-arrow-right"></i></button>
                            <?php
                            }else{
                            ?>
                                <a href="daftar_mahasiswa.php" class="btn btn-warning pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" name="submit" class="btn btn-primary pull-right">Lanjut <i class="fa fa-arrow-right"></i></button>
                            <?php
                            }
                            ?>

                            
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
	    </div>
	</div>
</body>
</html>