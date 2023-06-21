<?php
$id = $_GET['id'];

$result = mysqli_query($con, "SELECT * FROM user WHERE id = $id");
while ($data = mysqli_fetch_array($result)) {
  $username = $data['username'];
  $password = $data['password'];
  $level = $data['level'];
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];
  $result = mysqli_query($con, "UPDATE user SET username='$username',password='$password',level='$level' WHERE id=$id");

  echo "<script>window.location.href ='?page=user-show';</script>";
}
?>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Data User</h6>
  </div>
  <div class="card-body">
    <form method="POST" class="needs-validation" novalidate>
      <div class="form-group row">
        <label class="col-sm-2 col-for-label" for="username">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="username" name="username" placeholder="username" value="<?php echo $username ?>" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-for-label" for="password">Password Baru</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
        </div>
      </div>

      <div class=" form-group row">
        <label class="col-sm-2 col-for-label" for="level">Level</label>
        <div class="col-sm-10">
          <select class="form-control" id="level" name="level">
            <option disabled>- pilih kategori -</option>
            <option <?php if ($level == 0) echo 'selected'; ?> value="0">Petugas</option>
            <option <?php if ($level == 1) echo 'selected'; ?> value="1">Dokter</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col offset-sm-2">
          <input type="submit" name="submit" class="btn btn-success" value="Simpan">
          <a href="?page=user-show" class="btn btn-warning">Kembali</a>
        </div>
      </div>
    </form>

  </div>
</div>
<script src="validation.js"></script>
