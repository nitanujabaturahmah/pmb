<?php  
    //start the session
    session_start();

    if (!isset($_SESSION)) {
        echo 'ada';
        exit();
        //echo'<script> window.location="index.php"; </script> ';
    }

    $_SESSION['is_data_parent_exist'] = "";
    $_SESSION['is_data_student_exist'] = "";
    $_SESSION['is_data_account_exist'] = "";

    if(isset($_POST['submit'])){
        foreach ($_POST as $key => $val) {
            ${$key} = $val;
            $_SESSION[''.$key.''] = $val;
        }

        if (!empty($_SESSION)) {
            echo'<script> window.location="data_ortu.php"; </script> ';
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
                        <h4 class="title">Syarat Pendaftaran</h4>
                        <p class="category">Isi Form pendaftaran dengan benar</p>
                    </div>
                    <div class="card-content">
                        <h3>Berikut adalah syarat pendaftaran Mahasiswa baru yang harus dipenuhi :</h3>
                        <ol>
                            <li><font color="#2ecc71">Mengisi Formulir Pendaftaran <i class="fa fa-check"></font></i></li>
                            <li>Fotocopy Akte kelahiran dan kartu keluarga</li>
                            <li>Pas Foto ukuran 4x6 dan Scan KTP</li>
                            <li>Scan Ijazah dan Scan Raport Terakhir</li>
                        </ol>

                        <h6><i><b>*Catatan : Pengembalian Formulir berikut persyaratannya paling lambar 2 minggu setelah pengisian formulir secara online</b></i></h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
                <div class="card" style="margin-top: 50px">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Data Pendaftar</h4>
                        <p class="category">Periksan data anda dibawah, pastikan sudah benar</p>
                    </div>
                    <div class="card-content table-responsive">
                        
                        <a href="daftar_mahasiswa.php" class="btn btn-primary pull-right" ><i class="fa fa-pencil"></i> Edit Data</a>
                        <h3 style="overflow: hidden;"><b>Data Calon Mahasiswa</b></h3>
                        <table class="table table-hover">
                        
                            <tbody>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td>:<?php isset($_SESSION['email'])  ?  print($_SESSION['email']) : ""; ?> <a href="daftar_akun.php" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a></td>
                                </tr>
                                <tr>
                                    <td><b>NISN</b></td>
                                    <td>: <?php isset($_SESSION['nisn'])  ?  print($_SESSION['nisn']) : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Nama Lengkap</b></td>
                                    <td>: <?php isset($_SESSION['nama'])  ?  print($_SESSION['nama']) : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Nama Panggil</b></td>
                                    <td>: <?php isset($_SESSION['nama_panggil'])  ?  print($_SESSION['nama_panggil']) : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Tempat Lahir</b></td>
                                    <td>: <?php isset($_SESSION['tempat_lahir'])  ?  print($_SESSION['tempat_lahir']) : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><b>TTL</b></td>
                                    <td>: <?php isset($_SESSION['tanggal_lahir'])  ?  print($_SESSION['tanggal_lahir']) : "2000-01-01"; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Jenis Kelamin</b></td>
                                    <td>: <?php isset($_SESSION['jenis_kelamin']) && $_SESSION['jenis_kelamin'] == "L" ? print("Laki-laki") : print("Perempuan") ?></td>
                                </tr>
                                <tr>
                                    <td><b>Jurusan</b></td>
                                    <td>: <?php isset($_SESSION['jurusan'])  ?  print($_SESSION['jurusan']) : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Alamat</b></td>
                                    <td>: <?php isset($_SESSION['alamat'])  ?  print($_SESSION['alamat']) : ""; ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <a href="data_ortu.php" class="btn btn-primary pull-right" style="margin-top: 30px;"><i class="fa fa-pencil"></i> Edit Data</a>


                        
                        
                        <h3><b>Data Orangtua</b></h3>
                        <table class="table table-hover">
                        
                            <tbody>
                                <tr>
                                    <td><b>Nama Ayah</b></td>
                                    <td>: <?php isset($_SESSION['nama_ayah'])  ?  print($_SESSION['nama_ayah']) : ""; ?></td>
                                </tr>

                                <tr>
                                    <td><b>Pekerjaan</b></td>
                                    <td>: <?php isset($_SESSION['pekerjaan_ayah'])  ?  print($_SESSION['pekerjaan_ayah']) : ""; ?></td>
                                </tr>
                               
                                <tr>
                                    <td><b>Penghasilan</b></td>
                                    <td>: <?php isset($_SESSION['penghasilan_ayah'])  ?  print($_SESSION['penghasilan_ayah']) : ""; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><b>No Hp</b></td>
                                    <td>: <?php isset($_SESSION['no_ayah'])  ?  print($_SESSION['no_ayah']) : ""; ?></td>
                                </tr>

                                <tr>
                                    <td><b>Nama Ibu</b></td>
                                    <td>: <?php isset($_SESSION['nama_ibu'])  ?  print($_SESSION['nama_ibu']) : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Pekerjaan</b></td>
                                    <td>: <?php isset($_SESSION['pekerjaan_ibu'])  ?  print($_SESSION['pekerjaan_ibu']) : ""; ?></td>
                                </tr>
                                <tr>
                                    <td><b>Peghasilan</b></td>
                                    <td>: <?php isset($_SESSION['penghasilan_ibu'])  ?  print($_SESSION['penghasilan_ibu']) : ""; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><b>No Hp</b></td>
                                    <td>: <?php isset($_SESSION['no_ibu'])  ?  print($_SESSION['no_ibu']) : ""; ?></td>
                                </tr>
                                
                                <tr>
                                    <td><b>Alamat Orangtua</b></td>
                                    <td>: <?php isset($_SESSION['alamat_ortu'])  ?  print($_SESSION['alamat_ortu']) : ""; ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <hr>
                        <h3>Anda yakin data diatas benar?</h3>
                        <a href="proses_simpan_pendaftaran.php" class="btn btn-primary pull-right">Yakin, kirim data pendaftaran</a>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

