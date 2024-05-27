<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM data_pelanggan WHERE id='$id'");
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
                <form method="get" action="update/updatedatapelanggan.php">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tujuan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Tujuan" name="tujuan" value="<?php echo $view['tujuan'];?>">
                        <input type="hidden" name="id" value="<?php echo $view['id'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Posisi</label>
                        <input type="text" class="form-control" placeholder="Masukkan Posisi" name="posisi" value="<?php echo $view['posisi'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" class="form-control" placeholder="Masukkan Jumlah" name="jumlah" value="<?php echo $view['jumlah'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Lokasi</label>
                        <input type="text" class="form-control" placeholder="Masukkan Lokasi" name="lokasi" value="<?php echo $view['lokasi'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tipe</label>
                        <input type="text" class="form-control" placeholder="Masukkan Tipe" name="tipe" value="<?php echo $view['tipe'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" placeholder="Masukkan Harga" name="harga" value="<?php echo $view['harga'];?>">
                      </div>
                    </div>
                  <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>