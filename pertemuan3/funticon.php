<?php
function ambilinput($name){
    return isset($_POST[$name]) ? $_POST[$name] : 0;
}

function hitungtotal($jumlah, $harga){
    return $jumlah * $harga;
}

$nasi = $mie = $bakso = 0;
$total_nasi = $total_mie = $total_bakso = 0;
$total_semua = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nasi  = ambilinput('nasi_goreng');
    $mie   = ambilinput('mie_ayam');
    $bakso = ambilinput('bakso');

    $total_nasi  = hitungtotal($nasi, 12000);
    $total_mie   = hitungtotal($mie, 10000);
    $total_bakso = hitungtotal($bakso, 15000);

    $total_semua = $total_nasi + $total_mie + $total_bakso;
}
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
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card shadow">
            <div class="card-header text-center bg-primary text-white">
              <h5 class="mb-2">Kasir Kantin Sekolah (tanpa function)</h5>
            </div>
            <div class="card-body">
                    <div class="menu">Nasi goreng | Rp.12.000 <br>
                        Mie Ayam | Rp.10.000 <br>
                        Bakso | Rp.15.000
                    </div>
            </div>
            <form method="POST" >
                <div class="card-body">
                    <div class="mb-3">
                    <label for="menu" class="form-label">Nasi goreng</label>
                    <input type="number" class="form-control" id="jumlah" name="nasi_goreng" >
                    </div>
                    <div class="mb-3">
                    <label for="menu" class="form-label">Mie Ayam</label>
                    <input type="number" class="form-control" id="jumlah" name="mie_ayam" required>
                    </div>
                    <div class="mb-3">
                    <label for="menu" class="form-label">Bakso</label>
                    <input type="number" class="form-control" id="jumlah" name="bakso" required>
                    </div>
                    <button class="btn btn-success w-100">Cetak Struk</button>
                </div>
                    
            </form>
        <?php if ($total_semua !== 0):?>
            <div class="card-body">
              
                <div class="card-body">

                    <h6>Struk Pembelian</h6>
                    <p>
          
                     Nasi Goreng: <?= $nasi ?> x 12.000 = Rp. <?= number_format($total_nasi, 0, '.', '.')?><br>
                     Mie Ayam: <?= $mie ?> x 10.000 = Rp. <?= number_format($total_mie, 0, '.', '.')?><br>
                     Bakso: <?= $bakso ?> x 15.000 = Rp. <?= number_format($total_bakso, 0, '.', '.')?><br>
                        <strong>Total Bayar: Rp. <?= number_format($total_semua, 0, '.', '.') ?></strong>
                    </p>
                </div>
            </div>
            <?php endif; ?>



          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>