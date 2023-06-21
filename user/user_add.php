<?php
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];
  $insert = mysqli_query($con, "INSERT INTO user(username,password,level) VALUES('$username','$password','$level')");

  if ($insert) {
    echo "<script>window.location.href = '?page=user-show';</script>";
  }
}
?>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Data User</h6>
  </div>
  <div class="card-body">
    <form class="needs-validation" method="POST" novalidate>
      <div class="form-group row">
        <label class="col-sm-2 col-for-label" for="username">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-for-label" for="password">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-for-label" for="level">Level</label>
        <div class="col-sm-10">
          <select class="form-control" id="level" name="level">
            <option value="0">Petugas</option>
            <option value="1">Dokter</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col offset-md-2">
          <input type="submit" name="submit" class="btn btn-success" value="Simpan">
          <a href="?page=user-show" class="btn btn-warning">Kembali</a>
        </div>
      </div>

    </form>

  </div>
</div>
<script src="validation.js"></script>


