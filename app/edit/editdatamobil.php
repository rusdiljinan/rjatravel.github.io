<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM data_mobil WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>    
    <section class="content">
        <div class="container-fluid">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="update/updatedatamobil.php">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" placeholder="nama" name="id" value="<?php echo $view['id'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Merek</label>
                        <input type="text" class="form-control" placeholder="Merek" name="merek" value="<?php echo $view['merek'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Plat Nomor</label>
                        <input type="text" class="form-control" placeholder="Plat Nomor" name="bm" value="<?php echo $view['bm'];?>">
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>