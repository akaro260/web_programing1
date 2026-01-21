<?php

$total_belanja = 0;
$diskon = 0;
$total_bayar = 0;
$total = 0;


function ambilInput($name) {  
    $name = $_POST[$name] ??"";
    return $name;
}


function hitungDiskon($name) {
    $total = ambilInput($name);

    if ($total >= 200000) {
        $diskon = 0.2 * $total;
    } elseif ($total >= 100000) {
        $diskon = 0.1 * $total;
    } else {
        $diskon = 0;
    }

    // $total_bayar = $total_belanja - $diskon;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $total = hitungDiskon('total');
    $total_bayar = $total_belanja - $diskon;
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Diskon Belanja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow mt-5">
        <div class="card-header text-center bg-primary text-white">
          <h5 class="mb-2">Perhitungan Diskon Belanja</h5>
        </div>

        <form method="POST">
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label">Total Belanja</label>
              <input type="number" name="total" class="form-control" required>
            </div>
            <button class="btn btn-success w-100">Hitung</button>
          </div>
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <div class="card-footer">
          <p>
            Total Belanja : Rp <?= number_format($total,0,',','.') ?><br>
            Diskon : Rp <?= number_format($diskon,0,',','.') ?><br>
            <strong>Total Bayar : Rp <?= number_format($total_bayar,0,',','.') ?></strong>
          </p>
        </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</div>

</body>
</html>
