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
    <h2 style="text-align: center; margin-top: 10px;">Form nilai mahasiswa</h2>

<?php
  
?>

<form style="padding: 50px;" action="praktikum2.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label> 
    <div class="col-8">
      <input id="matkul" name="matkul" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Dasar-Dasar Pemrograman</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="pemweb">Pemrograman Web</option>
        <option value="ui/ux">Desain UI/UX</option>
        <option value="bd">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
    if (isset($_POST['submit'])) {
    $_nama = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $_uts = $_POST['uts'];
    $_uas = $_POST['uas'];
    $_tugas = $_POST['tugas'];
    $rata_rata = ($_uts * 0.3) + ($_uas * 0.3) + ($_tugas * 0.4);
    $keterangan = keterangan ($rata_rata);

    echo "Nama : $_nama <br>";
    echo "Mata Kuliah : $_matkul <br>";
    echo "Nilai UTS : $_uts <br>";
    echo "Nilai UAS : $_uas <br>";
    echo "Nilai Tugas : $_tugas <br>";
    echo "Nilai Rata-Rata : $rata_rata <br>";
    echo "keterangan : $keterangan <br>";
    echo "nilai grade : ".grade($rata_rata);
    }

    function keterangan ($rata_rata) {
        if ($rata_rata >= 60) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }

    function grade($rata_rata){
        if ($rata_rata >= 85 && $rata_rata <= 100) {
            return "A";
        } elseif ($rata_rata >= 70 && $rata_rata <= 100) {
            return "B";
        } elseif ($rata_rata >= 56 && $rata_rata <= 100) {
            return "C";
        } elseif ($rata_rata >= 36 && $rata_rata <= 100) {
            return "D ";
        } else {
            return "E (Tidak Lulus)";
        }
    }
?>
</body>
</html>

