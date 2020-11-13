<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Info Covid-19</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-light bg-primary">
      <a class="navbar-brand" href="index.php">
        <img src="img/home.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Home
      </a>
    </nav>

    <style type="text/css">
      .letak{
        margin-top: 10px;
        margin-left: 5px;
        margin-right: 5px;
        border-radius:5px;
      }
    </style>
        <div class="jumbotron jumbotron-fluid bg-warning text-center letak">
            <h1 class="display-4">Informasi Data Pemantauan Covid-19</h1>
            <p class="lead">
              <h3>GLOBAL</h3>
            </p>
    </div>

    <style type="text/css">
      .box{
        padding:30px 40px;
        border-radius:5px;
      }
    </style>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="bg-danger box">
            <div class="row">
              <div class="col-md-6">
                <h5>Positif</h5>
                <h2 id="data-covid"></h2>
                <h5>Orang</h5>
              </div>
              <div class="col-md-4">
                <img src="img/virus.png" style="width: 100px" >
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="bg-primary box">
            <div class="row">
              <div class="col-md-6">
                <h5>Meninggal </h5>
                <h2 id="data-mati"></h2>
                <h5>Orang</h5>
              </div>
              <div class="col-md-4">
                <img src="img/death.png" style="width: 100px" >
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class=" bg-success box">
            <div class="row">
              <div class="col-md-6">
                <h5>Sembuh</h5>
                <h2 id="data-sembuh"></h2>
                <h5>Orang</h5>
              </div>
              <div class="col-md-4">
                <img src="img/health.png" style="width: 100px" >
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  </body>
</html>

<script>
  $(document).ready(function(){

    semuaData();

    function semuaData(){
      $.ajax({
        url : 'http://coronavirus-19-api.herokuapp.com/all',
        success : function(data){
          try{
            var json = data;
            var positif = data.cases;
            var meninggal = data.deaths;
            var sembuh = data.recovered;

            $('#data-covid').html(positif);
            $('#data-mati').html(meninggal);
            $('#data-sembuh').html(sembuh);

          }catch{
            alert('error');
          }
        }
      });
    }
  });
</script>