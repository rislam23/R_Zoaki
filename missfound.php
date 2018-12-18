<!DOCTYPE html>
<html lang="en">
<?php include 'php_includes/database_connection.php'; ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>Bootstrap Theme</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="fixed-top navbar navbar-expand-sm bg-light navbar-light scroll-navbar" id="main-nav" style="box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
    <div class="container">
      <a href="index.php" class="navbar-logo"><img src="img/Zoaki.png" width="15%" height="15%" alt="" class="logo-img logo-img2"></a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto" data-spy="affix" data-offset-top="200">
          <li class="nav-item">
            <a href="index.php" class="nav-link active">Home</a>
          </li>
          <li class="nav-item">
            <a href="missfound.php" class="nav-link">Missing & Found</a>
          </li>
          <li class="nav-item">
            <a href="adopt.php" class="nav-link">Adoption</a>
          </li>
          <li class="nav-item">
            <a href="info.html" class="nav-link">Information</a>
          </li>
          <li class="nav-item">
            <a href="about/about.html" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="https://github.com/Nnamezie/Zoaki" style="color:purple" class="nav-link">
              GitHub
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- START HERE -->
  <!-- Type Your code below. -->
  <div class="jumbotron" style="margin-top:40px">
 
    <h1 class="text-center"><i class="fas fa-paw jumb-icon mr-2"></i>They need your help<i class="fas fa-paw jumb-icon"></i></h1>
      <p class="text-center">there are approximately 770 million pet dogs and 74.1 million pet cats in the U.S. where 20 men and women are assaulted per minute.<br>
        In one survey, <span class="text-gradient-1 text-bold-1">71 percent of demostic violence victims</span> reported that their abuser also targeted pets</p>
  </div>

  <div class="container" style="margin-top:30px">
    <div class="row mb-2">
      <div class="col-md-3">
          <span class="mb-2 position-fixed btn-sub" style="z-index: 999; right: 30px; bottom: 30px" data-toggle="modal" data-target="#formModal">
              <button type="button" class="btn btn-primary pull-right  btn-sub" style="">
                  <i class="fas fa-edit"></i>
              </button>
          </span>
      </div>
      <div class="col-md-9"></div>
    </div>
    <div class="row">
    <?php include 'php_includes/print_card.php'; ?>     
    </div>
  </div>       


  <div class="container">
    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center">
      <?php include 'php_includes/pagination.php'; ?>   
      </ul>
    </nav>
  </div>

    <!-- Contact Modal -->
    <div id="formModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title float-left">Contact</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <?php include 'php_includes/missfound.php'; ?>
          </div>
        </div>
      </div>
</div>


  <!-- Footer -->
  <footer id="main-footer" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col text-center py-4">
          <h3>Demo1</h3>
          <p>Copyright &copy; <span id="year"></span></p>
        </div>
      </div>
    </div>
  </footer>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    //configure slider
    $('.carousel').carousel({
      interval: 6000,
      pause: 'hover'
    });

    //comfirmation alert
    function confirmalert(){
      alert("Thanks For Your Help!!!");
    }


  </script>
</body>

</html>
