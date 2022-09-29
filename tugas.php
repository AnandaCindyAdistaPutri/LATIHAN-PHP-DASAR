<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tugas PHP Dasar</title>

</head>

<body>
        <div class="container-fluid">
        <h2 style="width: 700px; margin-top: 20px; color:#A0522D;">Tugas PHP Dasar | Ananda Cindy Adista Putri FWD1</h2><br>
        <form method="POST" action="">
            <div class="form-group">
                <label for="kata">Masukkan String</label>
                <input type="text" class="form-control" id="kata" placeholder="......." name="kata">
            </div>
            <div class="form-group">
                <label for="jumlah">Masukan Pengulangan</label>
                <input type="text" class="form-control" id="jumlah" placeholder="......." name="jumlah" required>
            </div>
            <button type="submit" class="btn btn-success" style="color: white;">Tampilkan</button>
        </form><br>


        <?php

        if ($_POST) {
            for ($i = 1; $i <= $_POST['jumlah']; $i++) {

                echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>" .
                    $_POST['kata'] . " " . $i . "<br>"
                    . " <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>";
            }
            echo "<br>";
            if ($_POST['jumlah'] % 2 == 0) {
                echo "<div class='alert alert-success text-center' role='alert'>" .
                    $_POST['jumlah'] . " merupakan bilangan genap"
                    . "</div>";
            } else {
                echo "<div class='alert alert-primary text-center' role='alert'>" .
                    $_POST['jumlah'] . " merupakan bilangan ganjil"
                    . "</div>";
            }
        }



        ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>