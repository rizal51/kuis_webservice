<?php
$url = file_get_contents('https://api.kawalcorona.com/indonesia');
$data = json_decode($url, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Covid-19</title>
    <link rel ="shortcut icon" href=#img/virus.png type="image/x-icon">

    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"> 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="#">Info Covid-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="data_global.php">Covid-19 Global</a>
            </div>
        </div>
    </nav>
    <!-- <div class="container">  -->
        <div class ="col mt-4">
            <div class ="alert alert-primary" role="alert">
                <strong>Update</strong> Data Covid-19! 
            </div>
        </div>
    </div>

    <style type="text/css">
    .kotak{
        margin-left: 13px;
        margin-right: 13px;
    }
</style>

<div class="jumbotron kotak bg-info">
    <h1 class="display-15">Data Penyebaran Covid-19 Indonesia</h1>
    <p><strong>Positif : <?= $data[0]['positif'];?></strong> </p></strong>
    <p><strong>Meninggal : <?= $data[0]['meninggal'];?></strong></p>
    <p><strong>Sembuh : <?= $data[0]['sembuh'];?></strong></p>
    <p><strong>Di Rawat : <?= $data[0]['dirawat'];?></strong></p>
    <a class="btn btn-primary btn-lg" href="data_provinsi.php" role="button">Berdasarkan Provinsi</a>
</div>
</div>
</body>
</html>
