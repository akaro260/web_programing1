<?php
$nilai = null;
$kategori = ""; 

if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $Nilai = $_POST['Nilai'];
    if ($Nilai > 75) {
        $kategori = "Lulus";
    } else {
        $kategori = "Tidak Lulus";
    }
}

?>

<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <title>Penjumlahan PHP</title>


    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>




<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow" style="width: 30%">
        <div class="card-body">
            <H5 class="card-title text-center">Kalkulator nilai siswa</h5>
            <form method="POST">
                <div class="mb-3">
                    <input class="form-control" type="number" name="Nilai" id="Nilai" placeholder="Masukkan nilai"
                        >
                </div>
                <button class=" btn btn-primary w-100"> Hitung </button>
            </form>
            <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
                <div class="mt-4 p-3 bg-light border rounded">
                    <h6>Hasil:</h6>
                    <p>Nilai: <?= htmlspecialchars($Nilai) ?></p>
                    <p>Kategori: <?= htmlspecialchars($kategori) ?></p>
                </div>
        </div>
</body>
</html>

            <?php  endif; ?>
        </div>
    </div>
