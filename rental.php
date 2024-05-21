<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>

    h2 {
       text-align: center;
    }
    form {
        margin-left: 20rem;
        margin-right: 20rem;
    }
</style>
<body>
    <div class="box">
        <h2>Rental Motor</h2>
        <form action="" method="post">
         <input class="form-control form-control-sm" type="text" placeholder="Nama Pelanggan" aria-label=".form-control-sm example" name="nama" required>
         <input class="form-control form-control-sm" type="text" placeholder="Lama Waktu rental (per hari)" aria-label=".form-control-sm example" name="waktuRental" required>
         <select class="form-select form-select-sm" aria-label="Small select example" name="jenis_motor" required>
            <option hidden>Jenis Motor</option>
            <option value="supra">supra</option>
            <option value="astrea">astrea</option>
            <option value="revo">revo</option>
            </select>
            
            <button type="submit" name="submit"  class="btn btn-secondary"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
        submit
</button>

</form>
    <?php
    if(isset($_POST['submit'])) {
        $nama = $_POST["nama"];
        $waktuRental = $_POST["waktuRental"];
        $jenis_motor = $_POST["jenis_motor"];

        $harga_sewa = [
            "supra" => 50000,
            "astrea" => 100000,
            "revo" => 150000
        ];

        $members = ["roy", "adit", "naufal"];


        $total_harga = $harga_sewa[$jenis_motor] * $waktuRental;

        if(in_array($nama, $members)) {
            $diskon = $total_harga * 0.05;
            $total_harga -= $diskon;
            echo "<div class='text-center'>";
            echo "<span class='border border-warning-subtle'>";
            echo "<b>$nama berstatus Member jadi mendapatkan potongan 5%</b> <br>";
          }
        echo "<b>Jenis Motor yang di rental adalah $jenis_motor selama $waktuRental hari</b> <br>";
        echo "<b>Harga yang harus dibayar: Rp." . number_format($total_harga,2,",",".") . "</b> <br>";
        echo "<b>harga sewa motor per hari nya adalah $harga_sewa[$jenis_motor]</b>";
        echo "</span>";
        echo "</div>";
    }
    
    ?>
    </div>
</body>
</html>