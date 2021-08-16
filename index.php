<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>ARGOD BANK</title>
  </head>

  <body background="images/bank.jpg" style="background-size: 100% 100%;">
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid" >
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h1 >WELCOME </h1>
                </div>
              </div>
            </div>
          

      <!-- Activity section -->
      <br><br>
      <div class="container  text-center">
          <div class="row " >
               <div class="card col-md-3 mx-auto" style="width: 18rem;">
                    <img src="images/1.jpeg" width="200" height="250" class="card-img-top mt-3 i mg" alt="Responsive image">
                    <div class="card-body">
                        <h5 class="card-title">Transfer Money</h5>
                        <a href="transfermoney.php"><button style="background-color : #000000;">Transfer Money</button></a>
                  </div>
                </div>  
                  
                  
                  <div class="card col-md-3 mx-auto" style="width: 18rem;">
                    <img src="images/3.jpg" width="200" height="250"class="card-img-top mt-3 i mg"alt="Responsive image">
                    <div class="card-body">
                        <h5 class="card-title">View Transactions</h5>
                       <a href="transactionhistory.php"><button style="background-color : #000000;">View Transaction</button></a>
                  </div>
                </div>
          </div>
      </div>
      <br><br>
      <footer class="text-center mt-5 py-2" style= "background-color :lavendr;">
        <p>&copy 2021. Made by <b>Prince Dogra</b> 
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>