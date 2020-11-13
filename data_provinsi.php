<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Covid-19 Provinsi</title>
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
  <div class="container">
    <div class="card mt-3">
      <div class="card-header bg-warning">
        <b>Data Covid-19 Provinsi</b>
      </div>
      <div class="card-body">
       <table class="table table-dark">
        <thead>
          <th scope="col">No</th>
          <th scope="col">Provinsi</th>
          <th scope="col">Positif</th>
          <th scope="col">Sembuh</th>
          <th scope="col">Meninggal</th>
        </thead>
        <tbody id= "table_data"></tbody>
      </table>
    </div>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"</script>
</script>
</body>
</html>

<script>

  $(document).ready(function(){

    dataProvinsi();

    function dataProvinsi(){
      $.ajax({
        url : 'curl.php',
        type : 'GET',
        success : function(data){
          try{
            $('#table_data').html(data);
          
          }catch{
            alert('error');
          }
        }
      });
    }
  });
</script>