

<div class="card shadow mb-5">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Dokter</h6>
  </div>
  <div class="card-body">
    <!-- <div class="row"> -->
    <a href="?page=datapegawai-add" class="btn btn-primary mb-2">Tambah Data</a>
    <a href="datapegawai/datapegawai_laporan.php" target="_blank" class="btn btn-success  mb-2">Cetak</a>
    <form action="#" method="POST">
      <div class=" input-group mb-4">
        <input type="text" class="form-control" placeholder="Masukan nama" name="keyword">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit" value="Cari" id="button-search" name="search">Cari !</button>
        </div>
      </div>
    </form>
    <!-- </div> -->
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $limit = 10;
          $page = isset($_GET["halaman"]) ? (int) $_GET["halaman"] : 1;
          $mulai = ($page > 1) ? ($page * $limit) - $limit : 0;

          $query = mysqli_query($con, "SELECT * FROM datapegawai where idpegawai=idpegawai");

          if (isset($_POST['search'])) {
            $keyword = trim($_POST['keyword']);
            if (!empty($keyword)) {
              $query = mysqli_query($con, "SELECT * FROM datapegawai WHERE idpegawai LIKE '%" . $keyword . "%' OR nama LIKE '%" . $keyword . "%'");
            }
          }

          $no = $mulai + 1;

          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $data['nip'] ?></td>
              <td><?php echo $data['nama'] ?></td>
              <td><?php echo $data['jabatan'] ?></td>
              <td><?php echo $data['alamat'] ?></td>
              <td>
                <a href="?page=datapegawai-edit&id=<?php echo $data['idpegawai']; ?>" class="btn btn-sm btn-link mr-1"><i class="fa fa-edit"></i></a>
                <a href="?page=datapegawai-delete&idpegawai=<?php echo $data['idpegawai']; ?>" class="btn btn-sm btn-link text-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fa fa-trash"></i></a>

              </td>
            </tr>
          <?php
            $no++;
          }
          ?>

        </tbody>
      </table>
    </div>
    <?php
    $result = mysqli_query($con, "SELECT * FROM datapegawai");
    $total_records = mysqli_num_rows($result);
    ?>

    <div class="row">
      <div class="col-md-6 col-sm-12">
        <p class="m-0">Jumlah Data : <?php echo $total_records; ?></p>
      </div>
      <div class="col-md-6 col-sm-12">
        <nav>
          <ul class="pagination justify-content-end">
            <?php
            $jumlah_page = ceil($total_records / $limit);
            $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif 
            $start_number = ($page > $jumlah_number) ? $page - $jumlah_number : 1;
            $end_number = ($page < ($jumlah_page - $jumlah_number)) ? $page + $jumlah_number : $jumlah_page;
            if ($page == 1) {
              echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
              echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
            } else {
              $link_prev = ($page > 1) ? $page - 1 : 1;
              echo '<li class="page-item"><a class="page-link" href="?page=kategori-show&halaman=1">First</a></li>';
              echo '<li class="page-item"><a class="page-link" href="?page=kategori-show&halaman=' . $link_prev . '"aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
            }
            for ($i = $start_number; $i <= $end_number; $i++) {
              $link_active = ($page == $i) ? ' active' : '';
              echo '<li class="page-item ' . $link_active . '"><a class="page-link"href="?page=kategori-show&halaman=' . $i . '">' . $i . '</a></li>';
            }
            if ($page == $jumlah_page) {
              echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
              echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
            } else {
              $link_next = ($page < $jumlah_page) ? $page + 1 : $jumlah_page;
              echo '<li class="page-item"><a class="page-link" href="?page=kategori-show&halaman=' . $link_next . '" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
              echo '<li class="page-item"><a class="page-link" href="?page=kategori-show&halaman='  . $jumlah_page . '">Last</a></li>';
            }
            ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
