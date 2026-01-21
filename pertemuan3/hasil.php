<?php
$nilai = 0;
$status = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nilai = $_POST['nilai'];

    if ($nilai >= 75) {
        $status = "LULUS";
    } else {
        $status = "TIDAK LULUS";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Kelulusan Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header text-center">
                    <b>Status Kelulusan</b>
                </div>

                <div class="card-body">
                    <form method="POST">
                        <label class="form-label">Nilai</label>
                        <input type="number" name="nilai" class="form-control" required>
                        <button class="btn btn-primary w-100 mt-3">Cek</button>
                    </form>
                </div>

                <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
                <div class="card-footer text-center">
                    <b><?= $status ?></b>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

</body>
</html>
