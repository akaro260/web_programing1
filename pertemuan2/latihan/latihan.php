<?php
$Nama = "";
// if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
//     $Nama = $_POST['Nama'];
//     $jawaban1 = $_POST['jawaban1'];
//     $jawaban2 = $_POST['jawaban2'];
//     $jawaban3 = $_POST['jawaban3'];
//     $jawaban4 = $_POST['jawaban4'];
//     $jawaban5 = $_POST['jawaban5'];
//     $jawaban6 = $_POST['jawaban6'];
    
//     $poin1 = ($hasil1 == 'Benar') ;
//     $poin2 = ($hasil2 == 'Benar') ;
//     $poin3 = ($hasil3 == 'Benar') ;
//     $poin4 = ($hasil4 == 'Benar') ;
//     $poin5 = ($hasil5 == 'Benar') ;
//     $poin6 = ($hasil6 == 'Benar') ;



//     if ($jawaban1 == "4" ) {
//         $hasil1 = "Benar";
//     } else {
//         $hasil1 = "Salah";
//     }
//     if ($jawaban2 == "3" ) {
//         $hasil2 = "Benar";
//     } else {
//         $hasil2 = "Salah";
//     }
//     if ($jawaban3 == "8" ) {
//         $hasil3 = "Benar";
//     } else {
//         $hasil3 = "Salah";
//     }
//     if ($jawaban4 == "1" ) {
//         $hasil4 = "Benar";
//     } else {
//         $hasil4 = "Salah";
//     }
//     if ($jawaban5 == "9" ) {
//         $hasil5 = "Benar";
//     } else {
//         $hasil5 = "Salah";
//     }
//     if ($jawaban6 == "7" ) {
//         $hasil6 = "Benar";
//     } else {
//         $hasil6 = "Salah";
//     }
//     if ($poin1 = ($hasil1 == 'Benar')){
//         $poin1 = 2;
//     } else {
//         $poin1 = 0;
//     }
//     if ($poin2 = ($hasil2 == 'Benar')){
//         $poin2 = 2;
//     } else {
//         $poin2 = 0;
//     }
//     if ($poin3 = ($hasil3 == 'Benar')){
//         $poin3 = 2;
//     } else {
//         $poin3 = 0;
//     }
//     if ($poin4 = ($hasil4 == 'Benar')){
//         $poin4 = 2;
//     } else {
//         $poin4 = 0;
//     }
//     if ($poin5 = ($hasil5 == 'Benar')){
//         $poin5 = 2;
//     } else {
//         $poin5 = 0;
//     }
//     if ($poin6 = ($hasil6 == 'Benar')){
//         $poin6 = 2;
//     } else {
//         $poin6 = 0;
//     }
//     $totalPoin = $poin1 + $poin2 + $poin3 + $poin4 + $poin5 + $poin6;
// }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $Nama = $_POST['Nama'];
    $jawaban1 = $_POST['jawaban1'];
    $jawaban2 = $_POST['jawaban2'];
    $jawaban3 = $_POST['jawaban3'];
    $jawaban4 = $_POST['jawaban4'];
    $jawaban5 = $_POST['jawaban5'];
    $jawaban6 = $_POST['jawaban6'];

    // CEK JAWABAN
    if ($jawaban1 == "4") {
        $hasil1 = "Benar";
    } else {
        $hasil1 = "Salah";
    }

    if ($jawaban2 == "3") {
        $hasil2 = "Benar";
    } else {
        $hasil2 = "Salah";
    }

    if ($jawaban3 == "8") {
        $hasil3 = "Benar";
    } else {
        $hasil3 = "Salah";
    }

    if ($jawaban4 == "1") {
        $hasil4 = "Benar";
    } else {
        $hasil4 = "Salah";
    }

    if ($jawaban5 == "9") {
        $hasil5 = "Benar";
    } else {
        $hasil5 = "Salah";
    }

    if ($jawaban6 == "7") {
        $hasil6 = "Benar";
    } else {
        $hasil6 = "Salah";
    }

    // HITUNG POIN
    if ($hasil1 == "Benar") {
        $poin1 = 2;
    } else {
        $poin1 = 0;
    }

    if ($hasil2 == "Benar") {
        $poin2 = 2;
    } else {
        $poin2 = 0;
    }

    if ($hasil3 == "Benar") {
        $poin3 = 2;
    } else {
        $poin3 = 0;
    }

    if ($hasil4 == "Benar") {
        $poin4 = 2;
    } else {
        $poin4 = 0;
    }

    if ($hasil5 == "Benar") {
        $poin5 = 2;
    } else {
        $poin5 = 0;
    }

    if ($hasil6 == "Benar") {
        $poin6 = 2;
    } else {
        $poin6 = 0;
    }

    $totalPoin = $poin1 + $poin2 + $poin3 + $poin4 + $poin5 + $poin6;
}

    

?>




<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <title>colorblind</title>


    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>




<body class="bg-light d-flex flex-wrap justify-content-center align-items-center min-vh-100">
    <div class="card shadow" style="width: 60%">
        <div class="card-body">
            <H5 class="card-title text-center">blindtest</h5>
            <form method="POST">
                <div class="mb-3 " style=""><input class="form-control" type="text" name="Nama" id="Nama" placeholder="Masukkan nama"></div>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="card " style="width: 300px; padding: 10px; margin-bottom: 15px;">
                        <h3 class="card-title text-center">Gambar 1</h3><img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/4-light2.png" alt="Color Blind Test Image" width="200px" class="card-img-top"><input type="text" class="form-control py-2 mt-2" name="jawaban1" id="jawaban1" placeholder="Masukkan jawaban"></div>

                    <div class="card " style="width: 300px; padding: 10px; margin-bottom: 15px;">
                        <h3 class="card-title text-center">Gambar 2</h3><img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/3-dark.png" alt="Color Blind Test Image" width="200px" class="card-img-top"><input type="text" class="form-control py-2 mt-2" name="jawaban2" id="jawaban2" placeholder="Masukkan jawaban"></div>

                    <div class="card " style="width: 300px; padding: 10px; margin-bottom: 15px;">
                        <h3 class="card-title text-center">Gambar 3</h3><img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/8-light.png" alt="Color Blind Test Image" width="200px" class="card-img-top"><input type="text" class="form-control py-2 mt-2" name="jawaban3" id="jawaban3" placeholder="Masukkan jawaban"></div>
                </div>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="card " style="width: 300px; padding: 10px; margin-bottom: 15px;">
                        <h3 class="card-title text-center">Gambar 4</h3><img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/1-dark.png" alt="Color Blind Test Image" width="200px" class="card-img-top"><input type="text" class="form-control py-2 mt-2" name="jawaban4" id="jawaban4" placeholder="Masukkan jawaban"></div>
                    <div class="card " style="width: 300px; padding: 10px; margin-bottom: 15px;">
                        <h3 class="card-title text-center">Gambar 5</h3><img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/9-dark.png" alt="Color Blind Test Image" width="200px" class="card-img-top"><input type="text" class="form-control py-2 mt-2" name="jawaban5" id="jawaban5" placeholder="Masukkan jawaban"></div>

                    <div class="card " style="width: 300px; padding: 10px; margin-bottom: 15px;">
                        <h3 class="card-title text-center">Gambar 6</h3><img src="https://www.colorblindnesstest.org/static/colorblindnesstest/img/ctest/7-dark.png" alt="Color Blind Test Image" width="200px" class="card-img-top"><input type="text" class="form-control py-2 mt-2" name="jawaban6" id="jawaban6" placeholder="Masukkan jawaban"></div>
                </div>
                <button class=" btn btn-primary w-100"> jawab </button>
            </form>
            
        </div>
    </div>
   <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
<div class="card shadow mt-4" style="width: 60%">
    <div class="card-body">
        <h5 class="card-title text-center">
            Hasil Test untuk : <?= htmlspecialchars($Nama) ?>
        </h5>

        <ul class="list-group gap-2">
            <li class="list-group-item d-flex justify-content-between">
                <span>
                    Jawaban 1: <?= htmlspecialchars($jawaban1) ?> -
                    <span class="<?= ($hasil1 == 'Benar') ? 'text-success' : 'text-danger' ?>">
                        <?= htmlspecialchars($hasil1) ?>
                    </span>
                </span>
                <strong><?= $poin1 ?> poin</strong>
            </li>

            <li class="list-group-item d-flex justify-content-between">
                <span>
                    Jawaban 2: <?= htmlspecialchars($jawaban2) ?> -
                    <span class="<?= ($hasil2 == 'Benar') ? 'text-success' : 'text-danger' ?>">
                        <?= htmlspecialchars($hasil2) ?>
                    </span>
                </span>
                <strong><?= $poin2 ?> poin</strong>
            </li>

            <li class="list-group-item d-flex justify-content-between">
                <span>
                    Jawaban 3: <?= htmlspecialchars($jawaban3) ?> -
                    <span class="<?= ($hasil3 == 'Benar') ? 'text-success' : 'text-danger' ?>">
                        <?= htmlspecialchars($hasil3) ?>
                    </span>
                </span>
                <strong><?= $poin3 ?> poin</strong>
            </li>

            <li class="list-group-item d-flex justify-content-between">
                <span>
                    Jawaban 4: <?= htmlspecialchars($jawaban4) ?> -
                    <span class="<?= ($hasil4 == 'Benar') ? 'text-success' : 'text-danger' ?>">
                        <?= htmlspecialchars($hasil4) ?>
                    </span>
                </span>
                <strong><?= $poin4 ?> poin</strong>
            </li>

            <li class="list-group-item d-flex justify-content-between">
                <span>
                    Jawaban 5: <?= htmlspecialchars($jawaban5) ?> -
                    <span class="<?= ($hasil5 == 'Benar') ? 'text-success' : 'text-danger' ?>">
                        <?= htmlspecialchars($hasil5) ?>
                    </span>
                </span>
                <strong><?= $poin5 ?> poin</strong>
            </li>

            <li class="list-group-item d-flex justify-content-between">
                <span>
                    Jawaban 6: <?= htmlspecialchars($jawaban6) ?> -
                    <span class="<?= ($hasil6 == 'Benar') ? 'text-success' : 'text-danger' ?>">
                        <?= htmlspecialchars($hasil6) ?>
                    </span>
                </span>
                <strong><?= $poin6 ?> poin</strong>
            </li>
        </ul>

        <div class="alert alert-info text-center mt-3">
            <strong>Total Poin: <?= $totalPoin ?> / 12</strong>
        </div>
    </div>
</div>
<?php endif; ?>

</body>
</html>


          