<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="./p.css">
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
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
  <body>
      <div id="in" >
        <form action="rec.php" method="get">
    <div class="input-group mb-3 ">
        <span class="input-group-text" id="basic-addon1">Name</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="fm">
      </div>
      
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Email ID" aria-label="Recipient's username" aria-describedby="basic-addon2" name=" mail">
        <span class="input-group-text" id="basic-addon2">@example.com</span>
      </div>
      
      <label for="basic-url" class="form-label">CARD DETAILS</label>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon3">Card number</span>
        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
      </div>
      
      <div class="input-group mb-3">
        <span class="input-group-text">₹</span>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="am">
        <span class="input-group-text">.00</span>
      </div>
      
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="CVV" aria-label="Username">
        <span class="input-group-text"></span>
        <input type="text" class="form-control" placeholder="Expiry Date mm/yy" aria-label="Server">
      </div>
      
      <div class="input-group">
        <span class="input-group-text">Comments</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
      </div>
      <div class="b">
      <input class="mn" type="submit">
      </div>    

</form>
</div>
<style>
  body{
    background-color: beige;
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
</html>
