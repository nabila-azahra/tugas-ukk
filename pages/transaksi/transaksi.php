<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TRANSAKSI
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TRANSAKSI</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- main content -->
    <div class="main-content bg-primary">
        <section class="section">
          <div class="section-header">
            <h1>TRANSAKSI</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item text-primary">Transaksi</div>
            </div>
        </div>
         <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
            <h3>TRANSAKSI PEMBAYARAN</h3> 
                    <div class="card-header-form">
              <form action="proses_transaksi.php" method="post">
            </div>
          </div>
            <div class="input-group mb-3">
             <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">id Petugas</span>
               </div>
                <input type="text" name="id_petugas" class="form-control" placeholder="id petugas" aria-label="masukkan id petugas" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
             <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">NISN</span>
               </div>
                <input type="text" name="nisn" class="form-control" placeholder="nisn" aria-label="masukkan nisn" aria-describedby="basic-addon1">
                </div>

               <div class="input-group mb-3">
             <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Tanggal Bayar</span>
               </div>
                <input type="date" name="tgl_bayar" class="form-control" placeholder="tgl_bayar" aria-label="tanggal" aria-describedby="basic-addon1">
                </div> 

              <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Bulan Bayar</label>
              </div>
              <select class="custom-select" name= "bulan_dibayar" id="inputGroupSelect01">
                <option selected>--pilih bulan--</option>
                <option value="januari">Januari</option>
                <option value="februari">Februari</option>
                <option value="maret">Maret</option>
                <option value="januari">April</option>
                <option value="februari">Mei</option>
                <option value="maret">Juni</option>
                <option value="januari">Juli</option>
                <option value="februari">Agustus</option>
                <option value="maret">September</option>
                <option value="januari">oktober</option>
                <option value="februari">november</option>
                <option value="maret">desember</option>
              </select>
            </div>  

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Tahun Bayar</label>
                </div>
                <select class="custom-select" name="tahun_dibayar" id="inputGroupSelect01">
                  <option selected>--pilih tahun--</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                </select>
              </div>

              <div class="input-group mb-3">
             <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">ID SPP</span>
               </div>
                <input type="text" name="id_spp" class="form-control" placeholder="id spp" aria-label="masukkan id" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
             <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">jumlah</span>
               </div>
                <input type="text" name="jumlah_bayar" class="form-control" placeholder="jumlah bayar" aria-label="masukkan nominal" aria-describedby="basic-addon1">
                </div>

            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-success">Bayar</button>


            </form>
            </div>


             




            <br/>   




                   <form action="" method="get">
                    <h2>DATA BAYAR SISWA SESUAI NISN</h2>
                      <table class="table">
                      <tr>
                      <td>NISN</td>
                      <td>:</td>
                      <td>
                      <input class="form-control" type="text" name="nisn" placeholder="--Data NISN Lihat Di Form Siswa--">
                      </td>
                      <td>
                      <button class="btn btn-success" type="submit" name="cari">Cari</button>
                      </td>
                      </tr>

                      </table>
                      </form>
                <?php 
                if (isset($_GET['nisn']) && $_GET['nisn']!='') {
                  $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn='$_GET[nisn]'");
                  $data = mysqli_fetch_array($query);
                  $nisn = $data['nisn'];
                
                ?>

                <h2>DATA SISWA</h2>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">NISN</th>
                      <th scope="col">NAMA SISWA</th>
                      <th scope="col">ID KELAS</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <td><?php echo $data['nisn']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['id_kelas']; ?></td>
                  </tbody>
                </table>

                <h2>DATA SPP SISWA</h2>
              <table class="table table-striped table-responsive">
                <thead> 
                  <tr>
                    <!-- <th scope="col">Id Pembayaran</th> -->
                <th scope="col">id petugas</th>
               <th scope="col"> NISN</th>
                <th scope="col">Tgl Bayar</th>
                <th scope="col">Bulan Bayar</th>
                <th scope="col">Tahun Bayar</th>
                <th scope="col">id spp</th>
                <th scope="col">Jumlah</th>
                
                  </tr>
                </thead>

                <tbody>
                  <?php 
                  $query = mysqli_query($koneksi,"SELECT * FROM pembayaran WHERE nisn='$data[nisn]' ORDER BY bulan_dibayar ASC");
                

                  while ($data=mysqli_fetch_array($query)) {
                    echo" <tr>
                          
                          <td>$data[id_petugas]</td>
                          <td>$data[nisn]</td>
                          <td>$data[tgl_bayar]</td>
                          <td>$data[bulan_dibayar]</td>
                          <td>$data[tahun_dibayar]</td>
                          <td>$data[id_spp]</td>
                          <td>$data[jumlah_bayar]</td>

                        </tr>";
                  }

                   ?>

                </tbody>

              </table>  
                
    <?php 
    }
    ?>  
      </div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#kelas').DataTable();
  });

  function hapusSpp(id) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
      window.location.href = "pages/spp/hapus_spp.php?id=" + id;
    }
  }
</script>    
        
        </div>
  </body>
</html>
