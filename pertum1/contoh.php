<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <?php

        $_nama = array("riski", "irpan", "tole", "babeh");
        $_umur = array("20", "21", "22", "23");
        $_berat = array("50", "60", "70", "80");
        $_prodi =  array("ti", "si", "mi", "tk");
        $_kampus = array("stt nf", "unpad", "itb", "unpad");
        
    
    ?>

    <h1 class="text-center">SELAMAT PUSING</h1>
    <marquee behavior="" direction=""><h3>HAHAHAHAHHAHA</h3></marquee>

    <table class="table table-striped table-hover ms-4">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">nama</th>
            <th scope="col">umur</th>
            <th scope="col">berat badan</th>
            <th scope="col">prodi</th>
            <th scope="col">kampus</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><?php print_r($_nama[0]); ?></td>
                <td><?php print_r($_umur[0]); ?></td>
                <td><?php print_r($_berat[0]); ?></td>
                <td><?php print_r($_prodi[0]); ?></td>
                <td><?php print_r($_kampus[0]); ?></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td><?php print_r($_nama[1]); ?></td>
                <td><?php print_r($_umur[1]); ?></td>
                <td><?php print_r($_berat[1]); ?></td>
                <td><?php print_r($_prodi[1]); ?></td>
                <td><?php print_r($_kampus[1]); ?></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td><?php print_r($_nama[2]); ?></td>
                <td><?php print_r($_umur[2]); ?></td>
                <td><?php print_r($_berat[2]); ?></td>
                <td><?php print_r($_prodi[2]); ?></td>
                <td><?php print_r($_kampus[2]); ?></td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td><?php print_r($_nama[3]); ?></td>
                <td><?php print_r($_umur[3]); ?></td>
                <td><?php print_r($_berat[3]); ?></td>
                <td><?php print_r($_prodi[3]); ?></td>
                <td><?php print_r($_kampus[3]); ?></td>
            </tr>
        </tbody>
    </table>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>