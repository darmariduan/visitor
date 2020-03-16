
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Visitor</title>
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="js/bootstrap.min.css">
  <link rel="stylesheet" href="js/bootstrapValidator.css">
  <link href="js/sweetalert.css" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="js/jquery-2.1.3.min.js"></script>
  <script src="js/sweetalert.min.js"></script>
  <script src="js/sweetalert-dev.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrapValidator.js"></script>
  <script type="text/javascript" src="chartjs/Chart.js"></script>

  <style type="text/css">
  body { background-color:#fafafa;}
.container { margin:50px auto;}

.phAnimate {
  position: relative;
  padding-top: 20px;
  margin-bottom: 10px;
}

.phAnimate input { padding-left: 15px; }

.phAnimate label {
  cursor: text;
  margin: 0;
  padding: 0;
  left: 15px;
  top: 27px;
  position: absolute;
  font-size: 14px;
  color: #ccc;
  font-weight: normal;
  transition: all 0.3s ease;
}

.phAnimate label.active {
  top: 0;
  left: 0;
  font-size: 12px;
}
.sweet-alert{

  position: fixed;
  z-index: 999999;
}
.modal-content{
  margin-top: 20%;
}
.judul{
  font-family: 'Ubuntu Condensed', sans-serif;
  font-size: 46px;
  font-weight: 700;
}

#contain {
  height: 230px;
  overflow-y: hidden;
}
#table_scroll {
  margin-top: 25px;
  margin-bottom: 50px;
  border-collapse: collapse;
}

.phAnimate label.active.focusIn { color: #66afe9; }
</style>
  </head>

  <body>
  <div id="jquery-script-menu">
<div class="jquery-script-center">
<ul>
</ul>
<h1 class="judul"><iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:120px;height:40px;"src="https://www.clocklink.com/html5embed.php?clock=004&timezone=ICT&color=blue&size=120&Title=&Message=&Target=&From=2020,1,1,0,0,0&Color=blue"></iframe></h1>
</div>
  <div class="container">

                <div class="page-header">

                </div>
                <a href="javascript:void(0)" class="btn btn-primary" data-target="#barang" data-toggle="modal"><i class="fa fa-user-plus" aria-hidden="true"></i> Tambah Visitor</a>
                <br/>
                <br/>

                <table class="table table-striped table-bordered kepala" border="0">
                    <thead>
                        <tr>

                            <td style="width: 20%; background-color: white"><b>Nama</b></td>
                            <td style="width: 20%; background-color: white"><b>Alamat</b></td>
                            <td style="width: 15%; background-color: white"><b>Jenis Kelamin</b></td>
                            <td style="width: 45%; background-color: white"><b>Pesan / Saran</b></td>

                            <!-- <td style="width: 30px; background-color: dark blue"><b>Aksi</b></td> -->

                        </tr>
                    </thead>
                  </table>
                  <div id="contain">

                    <table class="table table-striped table-bordered scroll-auto" border="0" id="table-scroll">

                        <?php
                        include "koneksi.php";
                        $res = $mysqli->query("SELECT * FROM siswa");
                        while ($data = $res->fetch_assoc()):
                        ?>
                        <tbody>
                            <tr>

                                <td style="width:20%"><?php echo $data['nim'] ?></td>
                                <td style="width:20%"><?php echo $data['nama'] ?></td>
                                  <td style="width:15%"><?php echo $data['email'] ?></td>
                                <td style="width:45%"><?php echo $data['alamat'] ?></td>

                                <!-- <td>

                                    <a href="#" data-target="#open_modal" data-toggle="modal" class='btn btn-warning' id='<?php echo $data['id']; ?>'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="index.php?id=<?php echo $data['id'] ?>" class='btn btn-danger delete-link' ><i class="fa fa-trash-o" aria-hidden="true"></i>
                                </td> -->

                            </tr>
                            <?php
                            endwhile;
                            ?>

                        </tbody>
                    </table>

                  </div>


                <?php
                include "koneksi.php";
                if(isset($_GET['id'])):
                     $stmt = $mysqli->prepare("DELETE FROM siswa WHERE id=?");
                     $stmt->bind_param('s', $id);

                     $id = $_GET['id'];

                     if($stmt->execute()):
                          echo "<script>location.href='index.php'</script>";
                     else:
                          echo "<script>alert('".$stmt->error."')</script>";
                     endif;
                endif;
                ?>

          <div class="modal fade" id="barang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Formulir Visitor</h4>
                    </div>
                    <div class="modal-body">

                    <?php
                      include "koneksi.php";
                      if(isset($_POST['bts'])):
                           $stmt = $mysqli->prepare("INSERT INTO siswa(nim,nama,alamat,email) VALUES (?,?,?,?)");
                           $stmt->bind_param('ssss', $nim, $nama, $alamat, $email);

                           $nim = $_POST['nim'];
                           $nama = $_POST['nama'];
                           $alamat = $_POST['alamat'];
                           $email = $_POST['email'];

                           if($stmt->execute()):

                                echo "<script language='javascript'>swal('Terimakasih Atas Kunjungan Anda', 'Saran / Pesan Anda Sudah Diterima', 'success');</script>" ;
                                echo '<meta http-equiv="Refresh" content="3; URL=index.php">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=index.php">';
                           endif;
                      endif;
                      ?>
                        <form action="index.php" class="form-horizontal" method="POST" id="form-save">
                        <div class="phAnimate">
                        <label for="firstname">Nama</label>
                        <input type="text" name="nim" class="form-control" id="firstname">
                      </div>
                      <div class="phAnimate">
                        <label for="lastname">Alamat</label>
                        <input type="text" name="nama" class="form-control" id="lastname">
                      </div>
                      <div class="phAnimate">

<input type="radio" name="email" value="Laki-laki">Laki-laki
<input type="radio" name="email" value="Perempuan">Perempuan
                        <!-- <input type="hidden" name="email" class="form-control"> -->

                      </div>
                      <div class="phAnimate">

                        <textarea name="alamat" rows="8" cols="80" class="form-control"></textarea>
                        <!-- <input type="text" name="alamat" class="form-control" id="password" placeholder="Alamat"> -->
                      </div>


                      <input type="submit" class="btn btn-primary" name="bts" value="Simpan">

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="open_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah</h4>
                    </div>
                    <div class="modal-body">
                    <?php
                        include "koneksi.php";
                        if(isset($_GET['id'])):
                             if(isset($_POST['bts'])):
                                  $stmt = $mysqli->prepare("UPDATE siswa SET nim=?, nama=?, alamat=?, email=? WHERE id=?");
                                  $stmt->bind_param('ssss', $nim, $nama, $alamat, $email, $id);

                                 $nim = $_POST['nim'];
                                 $nama = $_POST['nama'];
                                 $alamat = $_POST['alamat'];
                                 $email = $_POST['email'];
                                  $id = $_POST['id'];

                                  if($stmt->execute()):
                                       echo "<script>location.href='index.php'</script>";
                                  else:
                                       echo "<script>alert('".$stmt->error."')</script>";
                                  endif;
                             endif;
                             $res = $mysqli->query("SELECT * FROM siswa WHERE id=".$_GET['id']);
                             $row = $res->fetch_assoc();
                             endif;
                        ?>

                        <form class="form-horizontal" method="POST" id="form-save">
                        <div class="phAnimate">
                        <label for="firstname">NIM</label>
                        <input type="hidden" value="<?php echo $data['id'] ?>" name="id"/>
                        <input type="text" value="<?php echo $data['nim'] ?>" name="nim" class="form-control" id="firstname">
                      </div>
                      <div class="phAnimate">
                        <label for="lastname">Nama</label>
                        <input type="text" value="<?php echo $data['nama'] ?>" name="nama" class="form-control" id="lastname">
                      </div>
                      <div class="phAnimate">
                        <label for="password">Alamat</label>
                        <input type="text" value="<?php echo $data['alamat'] ?>" name="alamat" class="form-control" id="password" placeholder="Alamat">
                      </div>
                      <!-- <div class="phAnimate">
                        <label>Email</label>
                        <input type="email" value="<?php echo $data['email'] ?>" name="email" class="form-control" placeholder="email">
                      </div> -->
                      <input type="submit" value="Update" class="btn btn-primary" name="bts" value="save">

                        </form>
                    </div>
                </div>
            </div>
        </div>

  </div>
  <?php
$koneksi     = mysqli_connect("localhost", "root", "mysql", "visitor");
$siswa       = mysqli_query($koneksi, "SELECT email FROM siswa");
?>
  <canvas id="myChart" width="40" height="5"></canvas>
         </div>
         <script>
         var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Perempuan", "Laki-laki"],
				datasets: [{
					label: '',
					data: [
					<?php
					$jumlah_cewe = mysqli_query($koneksi,"select * from siswa where email='perempuan'");
					echo mysqli_num_rows($jumlah_cewe);
					?>,
					<?php
					$jumlah_cowo = mysqli_query($koneksi,"select * from siswa where email='laki-laki'");
					echo mysqli_num_rows($jumlah_cowo);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>



<!-- <script type="text/javascript" src="//cdn.popcash.net/pop.js"></script> -->
<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="js/phanimate.jquery.js"></script>
<script>
$(document).ready(function() {
	$('.phAnimate input').phAnim();
});
</script>
<script type="text/javascript">
  var uid = '171291';
  var wid = '374554';
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
  var my_time;
  $(document).ready(function() {
  pageScroll();
  $("#contain").mouseover(function() {
    clearTimeout(my_time);
  }).mouseout(function() {
    pageScroll();
  });
  });

  function pageScroll() {
  var objDiv = document.getElementById("contain");
  objDiv.scrollTop = objDiv.scrollTop + 1;
  // $('p:nth-of-type(1)').html('scrollTop : '+ objDiv.scrollTop);
  // $('p:nth-of-type(2)').html('scrollHeight : ' + objDiv.scrollHeight);
  if (objDiv.scrollTop == (objDiv.scrollHeight - 230)) {
    objDiv.scrollTop = 0;
  }
  my_time = setTimeout('pageScroll()', 60);
  }
</script>
 <script>
        jQuery(document).ready(function($){
            $('.delete-link').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: "Are you sure?",
                        text: 'Hapus Data?',
                        type: "warning",
                        html: true,
                        confirmButtonColor: '#d9534f',

                        confirmButtonColor: "#DD6B55",
                        showCancelButton: true,
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
    </script>

</body>
</html>
