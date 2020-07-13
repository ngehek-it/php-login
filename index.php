<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form Login</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
      body {
        background: rgba(231,56,39,1);
        background: -moz-linear-gradient(top, #3f768b 50%, rgba(255,255,255,1) 50%);
        background: -webkit-gradient(left top, left bottom, color-stop(50%, #3f768b), color-stop(50%, rgba(255,255,255,1)));
        background: -webkit-linear-gradient(top, #3f768b 50%, rgba(255,255,255,1) 50%);
        background: -o-linear-gradient(top, #3f768b 50%, rgba(255,255,255,1) 50%);
        background: -ms-linear-gradient(top, #3f768b 50%, rgba(255,255,255,1) 50%);
        background: linear-gradient(to bottom, #3f768b 50%, rgba(255,255,255,1) 50%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e73827', endColorstr='#ffffff', GradientType=0 );
      }
      .card {
        background-color: #305b6bbf;
      }
      .rounded-mine {
        border-radius: 20px;
      }

      .text-mine {
        color: white;
      }

      .btn-mine {
        color: #fff;
        background-color: #305b6bbf;
        border-color: #305b6bbf;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <?php if (isset($_SESSION['error'])): ?>
        <div class="row justify-content-center">
          <div class="toast mt-3" role="alert" data-delay="3000" aria-live="assertive" aria-atomic="true" style="position: absolute;">
            <div class="toast-header">
              <strong class="mr-auto">Notif</strong>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="toast-body">
              <?= $_SESSION['error'] ?>
            </div>
          </div>
        </div>
        <?php unset($_SESSION['error']); ?>
      <?php endif; ?>
      <div class="row vh-100 justify-content-center align-content-center">
        <div class="col-md-5">
          <div class="card rounded-mine">
            <div class="card-body p-5">
              <div class="card-title">
                <h2 class="font-weight-bold text-mine">Form Login</h2>
              </div>
              <form action="login.php" method="post">
                <div class="form-group">
                  <label for="username" class="font-weight-bold text-mine">Username</label>
                  <input id="username" class="form-control" type="text" name="username" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="password" class="font-weight-bold text-mine">Password</label>
                  <input id="password" class="form-control" type="password" name="password">
                  <small><a href="#" class="text-white text-underline"><u>Lupa password ?</u></a></small>
                </div>
                <div class="form-group pt-2">
                  <input type="submit" class="btn btn-mine float-right rounded-lg" value="Login">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $('.toast').toast('show');
    </script>
  </body>
</html>
