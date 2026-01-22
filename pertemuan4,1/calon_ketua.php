<?php
include'config.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h2>Data Siswa</h2>
    <table border="1"  cellpadding="10" >
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>jurusan</th>
            <th>alamat</th>
        </tr>
        <?php
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM tbl_calon_ketua");

            foreach ($data as $mom):?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $mom['nama_calon']; ?></td>
                <td><?php echo $mom['visi']; ?></td>
                <td><?php echo $mom['misi']; ?></td>
                <td><?php echo $mom['foto']; ?></td>
        <?php endforeach; ?>
  
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>