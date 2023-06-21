<?php
if (isset($_POST['submit'])) {
 $nama = $_POST['nama'];
 $keterangan = $_POST['keterangan'];
 $insert = mysqli_query($con, "INSERT INTO kategori(nama_kategori,keterangan_kategori)
VALUES('$nama','$keterangan')");
 if ($insert) {
 echo "<script>window.location.href = '?page=kategori-show';</script>";
 }
}
?>
<div class="card shadow mb-4">
 <div class="card-header py-3">
 <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kategori</h6>
 </div>
 <div class="card-body">
 <form method="POST" class="needs-validation" novalidate>
 <div class="form-group">
 <label for="nama">Nama Kategori</label>
 <input type="text" name="nama" id="nama" class="form-control" placeholder="nama kategori" required>
 </div>
 <div class="form-group">
 <label for="keterangan">Keterangan</label>
 <input type="text" name="keterangan" id="keterangan" class="form-control"
placeholder="keterangan" required>
 </div>
 <input type="submit" name="submit" class="btn btn-success" value="Simpan">
 <a href="?page=kategori-show" class="btn btn-warning">Kembali</a>
 </form>
 </div>
</div>
<script>
 // Disable form submissions if there are invalid fields
 (function() {
 'use strict';
 window.addEventListener('load', function() {
 // Get the forms we want to add validation styles to
 var forms = document.getElementsByClassName('needs-validation');
 // Loop over them and prevent submission
 var validation = Array.prototype.filter.call(forms, function(form) {
 form.addEventListener('submit', function(event) {
 if (form.checkValidity() === false) {
 event.preventDefault();
 event.stopPropagation();
 }
 form.classList.add('was-validated');
 }, false);
 });
 }, false);
 })();
</script>