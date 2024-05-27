
  <!-- Content Wrapper. Contains page content -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Drivers</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br><br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Umur</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM data_driver");
                    while($usr = mysqli_fetch_array($query)){
                      $no++
                      ?>
                      <tr>
                        <td widht=5%><?php echo $no;?></td>
                        <td><?php echo $usr['nama'];?></td>
                        <td><?php echo $usr['alamat'];?></td>
                        <td><?php echo $usr['umur'];?></td>
                        <td>
                          <a onclick="hapusdata(<?php echo $usr['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                          <a href="index.php?page=edit-data&& id=<?php echo $usr['id'];?>" class="btn btn-sm btn-success">Edit</a>
                      </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </section>
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method = "get" action = "add/tambahdata.php" >
              <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama" required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
              </div>
              <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="text" class="form-control" placeholder="Umur" name="umur" required>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <script>
        function hapusdata(dataid){
          //alert('ok')
          //window.location=("delete/hapusdata.php?id="+dataid)
          // Swal.fire({
          //   title: "Apakah datanya akan dihapus?",
          //   icon: "warning",
          //   showCancelButton: true,
          //   confirmButtonColor: "#3085d6",
          //   cancelButtonColor: "#d33",
          //   confirmButtonText: "Yes, delete it!"
          // }).then((result) => {
          //   if (result.isConfirmed) {
          //     window.location=("delete/hapusdata.php?id="+dataid);
          //   }
          // });
          const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: "btn btn-success",
              cancelButton: "btn btn-danger"
            },
            buttonsStyling: true
          });
          swalWithBootstrapButtons.fire({
            title: "Apakah datanya akan dihapus?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Iya, Silahkan Hapus",
            cancelButtonText: "Tidak, Jangan Dulu!",
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              swalWithBootstrapButtons.fire({
                title: "Terhapus!",
                text: "Data telah terhapus.",
                icon: "success"
              });
              window.location=("delete/hapusdata.php?id="+dataid);
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
                ) {
                  swalWithBootstrapButtons.fire({
                    title: "Dibatalkan",
                    text: "Data anda masih ada :)",
                    icon: "error"
                  });
                }
              });
        }
      </script>
      <!-- /.container-fluid -->
    </section>