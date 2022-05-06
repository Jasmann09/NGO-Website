<?php 
$con = new mysqli("localhost","root","","ngo");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ngo</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><i><b>AJ</b></i> Foundation</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown"id="kk">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ach.php">Achivements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Projects link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="home.php">Home for homeless</a></li>
                  <li><a class="dropdown-item" href="edu.php">Education for poor</a></li>
                  <li><a class="dropdown-item" href="han.php">Help for handicap</a></li>
                  <li><a class="dropdown-item" href="cov.php">Covid help</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
  <body>
    <div id="in">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="4.jpg" class="d-block w-100 h-65 " id="ll"  alt="...">
                <style>
                  
                    #ll{
    height: 600px;
    width: auto ;

                  }
                  #in{

                    padding: 5em;
                  }

                  #l{
                    text-align: center;
                  }
                 
                 
                
                </style>
                <div class="carousel-caption d-none d-md-block">
                  
                  <h4 id="l">Donate To Add Smiles</h4>
                </div>
              </div>
              <div class="carousel-item">
                <img src="2.jpg" class="d-block w-100 h-65"  id="ll"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                  
                  <h4 id="l">Donate To Add Smiles</h4>
                </div>
              </div>
              <div class="carousel-item">
                <img src="3.jpg" class="d-block w-100 h-65" id="ll" alt="...">
                <div class="carousel-caption d-none d-md-block">
                
                  <h4 id="l">Donate To Add Smiles</h4>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    <hr>
    <h2>Our ongoing Projects</h2>
    <hr>

    <div class="cc">
        <div class="card" style="width: 18rem;">
            <img src="co.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Covid help</h5>
              <p class="card-text">Initiates related to this drive with the problem and steps which our ngo is taking for it.</p>
              <a href="cov.php" class="btn btn-primary bn">Explore</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="han.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Handicap People help</h5>
              <p class="card-text">Initiates related to this drive with the problem and steps which our ngo is taking for it.</p>
              <a href="han.php" class="btn btn-primary bn">Explore</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Homes for Homeless</h5>
              <p class="card-text">Initiates related to this drive with the problem and steps which our ngo is taking for it.</p>
              <a href="home.php" class="btn btn-primary bn">Explore</a>

              
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img src="e.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Education for poor</h5>
              <p class="card-text">Initiates related to this drive with the problem and steps which our ngo is taking for it.</p>
              <a href="edu.php" class="btn btn-primary bn">Explore</a>
            </div>
          </div>
    </div>
    <hr>
    
   
    <h3>Upcoming Activities:-</h3>
<hr>
<?php
$sql="SELECT * FROM `loc`";
$ress=mysqli_query($con,$sql);

?>
<table border="4" >
  <tr>
    <th>NO.</th>
    <th>Purpose</th>
    <th>Place</th>
    <th>Date</th>
    <th>Type</th>
    
</tr>


  <?php
  while($rm=mysqli_fetch_array($ress)){
    echo"<tr>";
    echo"<td>".$rm['no']."</td>";
    echo"<td>".$rm['pur']."</td>";
    echo"<td>".$rm['city']."</td>";
    echo"<td>".$rm['date']."</td>";
    echo"<td>".$rm['type']."</td>";
    echo"</tr>";
  }
  ?>
  </table>
  <style>
    th{
 
  padding: 1em;
}
tr{
 
  padding: 1em;
}
table{

  padding: 1em;
  font-size: large;
  margin-left: 26em;
  font-weight:bold;

  
}

td{
  padding: 1em;
}
  </style>
  
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <footer>
    <footer class="bd-footer py-5 mt-5 bg-light">
        <div class="container py-5">
          <div class="row">
            <div class="col-lg-3 mb-3" >
             <i><b>AJ</b></i>
                <span class="fs-5"> Foundation</span>
              
              <ul class="list-unstyled small text-muted">
                <li class="mb-2">Charity brings to life again those who are spiritually dead.</li>
                <li class="mb-2">Working Since 1994</li>
                <li class="mb-2">Non profit Organisation</li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 offset-lg-1 mb-3">
              <h5>Links</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="index.php">Home</a></li>
                <li class="mb-2"><a href="ach.php">Achivements</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5>Sponsars</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="#">Unicef</a></li>
                <li class="mb-2"><a href="#">Khalsa Aid</a></li>
                <li class="mb-2"><a href="#">IBM</a></li>
                
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5>Projects</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="#">Children education </a></li>
                <li class="mb-2"><a href="">Jobs for ueducated</a></li>
                <li class="mb-2"><a href="#">Food for poor</a></li>
                <li class="mb-2"><a href="#">COVID HELP</a></li>
                <li class="mb-2"><a href="#">Healthcare for poor</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5>Community</h5>
              <ul class="list-unstyled">
                  <div class="ic">
                <li class="mb-2"><a href="#">Instagram</a></li>
                <li class="mb-2"><a href="#">Mail</a></li>
                <li class="mb-2"><a href="#">Twitter</a></li>
                <li class="mb-2"><a href="#">Discord</a></li>
               
                  </div>
              </ul>
            </div>
          </div>
        </div>
      </footer>
  </footer>
  
</html>

 