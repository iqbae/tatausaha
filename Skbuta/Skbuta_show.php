<?php include "function.php" ?>

<div class="card shadow mb-5">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Surat Keterangan Buta Warna</h6>
  </div>
  <div class="card-body">
    <!-- <div class="row"> -->
    <a href="?page=datapenduduk-show2" class="btn btn-primary mb-2">Tambah Data</a>
    <!-- <a href="Skbuta/Skbuta_laporan.php" target="_blank" class="btn btn-success  mb-2">Cetak</a> -->
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
            <th>Nomor Surat</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Pekerjaan</th>
            <th>Alamat</th>
            <th>Hasil Tes</th>
            <th>Keperluan</th>
            <th>Tanggal Surat</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $limit = 10;
          $page = isset($_GET["halaman"]) ? (int) $_GET["halaman"] : 1;
          $mulai = ($page > 1) ? ($page * $limit) - $limit : 0;

          $query = mysqli_query($con, "SELECT * FROM sk_buta where nik=nik");

          if (isset($_POST['search'])) {
            $keyword = trim($_POST['keyword']);
            if (!empty($keyword)) {
              $query = mysqli_query($con, "SELECT * FROM sk_buta WHERE nik LIKE '%" . $keyword . "%' OR nama LIKE '%" . $keyword . "%'");
            }
          }

          $no = $mulai + 1;

          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $data['nomor_surat'] ?></td>
              <td><?php echo $data['nik'] ?></td>
              <td><?php echo $data['nama'] ?></td>
              <td><?php echo $data['pekerjaan'] ?></td>
              <td><?php echo $data['alamat'] ?></td>
              <td><?php echo $data['hasil'] ?></td>
              <td><?php echo $data['keperluan'] ?></td>
              <td><?php echo $data['tanggal_surat'] ?></td>
              <td>
                <!-- <a href="?page=Skbuta-add&idsku=<?php echo $data['idsku']; ?>" class="btn btn-sm btn-link mr-1"><i class="fa fa-align-justify"></i></a> -->
                <a href="?page=Skbuta-edit&idsku=<?php echo $data['idsku']; ?>" class="btn btn-sm btn-link mr-1"><i class="fas fa-edit"></i></a>
                <a target="_BLANK" href="Skbuta/Skbuta_print.php?idsku=<?php echo $data['idsku']; ?>" class="btn btn-sm btn-link mr-1" onclick="return confirm('Cetak Surat <?php echo $data['nama']; ?> ( <?php echo $data['nomor_surat']; ?> ) ? ');"><i class="fa fa-print"></i></a>
                <a href="?page=Skbuta-delete&idsku=<?php echo $data['idsku']; ?>" class="btn btn-sm btn-link text-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fa fa-trash"></i></a>

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
    $result = mysqli_query($con, "SELECT * FROM sk_buta");
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
