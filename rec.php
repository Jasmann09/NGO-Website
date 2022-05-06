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

    <title>Hello, world!</title>
    <link rel="stylesheet" href="p.css">
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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Achivements</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Projects link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Home for homeless</a></li>
                  <li><a class="dropdown-item" href="#">Education for poor</a></li>
                  <li><a class="dropdown-item" href="#">Help for handicap</a></li>
                  <li><a class="dropdown-item" href="#">Food for poor</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
  <body>
<h3>Payment sucessfully done ✅</h3>

<hr>
<div class="c">
    <div class="container">
        <div class="hed">
          <?php
        $nm= $_GET['fm'];
   $mai=$_GET['mail']; 
   $amn= $_GET['am'];
   ?>
        <B><I>AJ</I></B><h4>Foundation</h4>
        <hr>
        <i>This is a recipt to certify that <b><?php echo $nm; ?> </b>have donate for this noble cause.This will bring smile to million hearts and will help humanity thanks for this kind gesture</i>
        <br>
        <br>
        <div class="a">
        <i>Amount -</i>  <b class="r">     <?php echo    $amn; ?></b></div>
        </div>
        <div class="d" id="d">
        <h5></h5>
        </div>
        <script>
          const d= new Date();
          document.getElementById("d").innerHTML=d          
        </script>

    </div>
</div>
<div class="counter">
  <h3>Donation so far -></h3>
  <h3>
    <?php
    $sum=0;
   $nm= $_GET['fm'];
   $mai=$_GET['mail']; 
   $amn= $_GET['am'];
   $sql="INSERT INTO `donator` ( `name`, `mail`, `amount`) VALUES ('$nm', '$mai', '$amn')";
   $result=mysqli_query($con,$sql);
   $sql="SELECT * FROM `donator`";
   $ress=mysqli_query($con,$sql);
   while($row =mysqli_fetch_assoc($ress)){
     $sum +=$row['amount'];
   }
   echo $sum;
  ?>
  </h3>
  <h3>No. of donators->
  </h3>
  <h3>
    <?php
     
      $sql="SELECT * FROM `donator`";
      $rss=mysqli_query($con,$sql);
      $num=mysqli_num_rows($rss);
      echo $num;
    



    ?>
  </h3>
</div>
<style>
  body{
    background-color: beige;

  }
  h3{
    text-align:center;
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
                <li class="mb-2"><a href="/">Home</a></li>
                <li class="mb-2"><a href="/docs/5.1/">Docs</a></li>
                <li class="mb-2"><a href="/docs/5.1/examples/">Examples</a></li>
                <li class="mb-2"><a href="https://themes.getbootstrap.com/">Themes</a></li>
                <li class="mb-2"><a href="https://blog.getbootstrap.com/">Blog</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5>Guides</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="/docs/5.1/getting-started/">Getting started</a></li>
                <li class="mb-2"><a href="/docs/5.1/examples/starter-template/">Starter template</a></li>
                <li class="mb-2"><a href="/docs/5.1/getting-started/webpack/">Webpack</a></li>
                <li class="mb-2"><a href="/docs/5.1/getting-started/parcel/">Parcel</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5>Projects</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="https://github.com/twbs/bootstrap">Children education </a></li>
                <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev">Jobs for ueducated</a></li>
                <li class="mb-2"><a href="https://github.com/twbs/icons">Food for poor</a></li>
                <li class="mb-2"><a href="https://github.com/twbs/rfs">COVID HELP</a></li>
                <li class="mb-2"><a href="https://github.com/twbs/bootstrap-npm-starter">Healthcare for poor</a></li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 mb-3">
              <h5>Community</h5>
              <ul class="list-unstyled">
                  <div class="ic">
                <li class="mb-2"><a href="https://github.com/twbs/bootstrap/issues">Instagram</a></li>
                <li class="mb-2"><a href="https://github.com/twbs/bootstrap/discussions">Mail</a></li>
                <li class="mb-2"><a href="https://github.com/sponsors/twbs">Twitter</a></li>
                <li class="mb-2"><a href="https://opencollective.com/bootstrap">Discord</a></li>
               
                  </div>
              </ul>
            </div>
          </div>
        </div>
      </footer>
  
  </footer>
</html>