<?php
    require_once 'class_mhs.php';

    $hasil = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $matkul = $_POST['matkul'];
        $nilai = $_POST['nilai'];

        $mahasiswa = new Mahasiswa($nim, $nama, $matkul, $nilai);
        $hasil =  "<div>
        <h2> hasil input data mahasigma</h2>
        <strong>nama :</strong>{$mahasiswa->nama} <br>
        <strong>nim :</strong>{$mahasiswa->nim} <br>
        <strong>matkul :</strong>{$mahasiswa->matkul} <br>
        <strong>nilai :</strong>{$mahasiswa->nilai} <br>
        <strong>grade :</strong>{$mahasiswa->grade()} <br>
        <strong>hasil ujian :</strong>{$mahasiswa->kelulusan()}
        </div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <h2>Form Nilai Ujian</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="name" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">nim</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="mb-3">
                <label for="matkul" class="form-label">Pilih MK</label>
                <select class="form-select" id="matkul" name="matkul" required>
                    <option value="Data Warehouse">Dasar Dasar Pemrograman</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="Basis Data">Basis Data</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai</label>
                <input type="number" class="form-control" id="nilai" name="nilai" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>

     </div>
     <div>
        <?php echo $hasil; ?>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>