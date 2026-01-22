
<?php
include 'confi.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Tambah Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow mt-5">
        <div class="card-header text-center bg-primary text-white">
          <h5 class="mb-2">Tambah Siswa</h5>
        </div>

        <form method="POST">
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" name="Nama" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Kelas</label>
              <input type="text" name="Kelas" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Jurusan</label>
              <input type="text" name="Jurusan" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Alamat</label>
              <input type="text" name="Alamat" class="form-control" required>
            </div>

            <button class="btn btn-success w-100">Simpan</button>
          </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $nama    = $_POST['Nama'];
            $kelas   = $_POST['Kelas'];
            $jurusan = $_POST['Jurusan'];
            $alamat  = $_POST['Alamat'];

            $query = "INSERT INTO tbl_siswa (Nama, Kelas, Jurusan, Alamat)
                      VALUES ('$nama', '$kelas', '$jurusan', '$alamat')";

            if (mysqli_query($koneksi, $query)) {
                echo "<div class='alert alert-success text-center'>Data berhasil disimpan</div>";
            } else {
                echo "<div class='alert alert-danger text-center'>Gagal: " . mysqli_error($koneksi) . "</div>";
            }
        }
        ?>

      </div>
    </div>
  </div>
</div>

</body>
</html>
