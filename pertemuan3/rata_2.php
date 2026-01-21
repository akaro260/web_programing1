<?php
$mtk = 0;
$indo = 0;
$produktif = 0;
$rata = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mtk = $_POST['mtk'];
    $indo = $_POST['indo'];
    $produktif = $_POST['produktif'];

    $rata = ($mtk + $indo + $produktif) / 3;
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rata-rata Nilai</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow mt-5">
        <div class="card-header text-center bg-primary text-white">
          <h5 class="mb-2">Menghitung Rata-rata Nilai</h5>
        </div>

        <form method="POST">
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label">Nilai MTK</label>
              <input type="number" name="mtk" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Nilai Bahasa Indonesia</label>
              <input type="number" name="indo" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Nilai Produktif RPL</label>
              <input type="number" name="produktif" class="form-control" required>
            </div>

            <button class="btn btn-success w-100">Hitung</button>
          </div>
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <div class="card-footer">
          <p>
            Nilai MTK : <?= $mtk ?><br>
            Nilai B. Indonesia : <?= $indo ?><br>
            Nilai Produktif : <?= $produktif ?><br>
            <strong>Rata-rata : <?= number_format($rata, 2) ?></strong>
          </p>
        </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</div>

</body>
</html>
