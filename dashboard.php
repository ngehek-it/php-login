<?php
session_start();
if (!isset($_SESSION['auth'])) {
  $_SESSION['error'] = 'Harap login terlebih dahulu';
  header('Location: index.php');
}
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
        background: -moz-linear-gradient(top, rgba(231,56,39,1) 0%, rgba(231,56,39,1) 0%, rgba(240,47,23,1) 40%, rgba(246,41,12,1) 50%, rgba(255,255,255,1) 50%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(231,56,39,1)), color-stop(0%, rgba(231,56,39,1)), color-stop(40%, rgba(240,47,23,1)), color-stop(50%, rgba(246,41,12,1)), color-stop(50%, rgba(255,255,255,1)));
        background: -webkit-linear-gradient(top, rgba(231,56,39,1) 0%, rgba(231,56,39,1) 0%, rgba(240,47,23,1) 40%, rgba(246,41,12,1) 50%, rgba(255,255,255,1) 50%);
        background: -o-linear-gradient(top, rgba(231,56,39,1) 0%, rgba(231,56,39,1) 0%, rgba(240,47,23,1) 40%, rgba(246,41,12,1) 50%, rgba(255,255,255,1) 50%);
        background: -ms-linear-gradient(top, rgba(231,56,39,1) 0%, rgba(231,56,39,1) 0%, rgba(240,47,23,1) 40%, rgba(246,41,12,1) 50%, rgba(255,255,255,1) 50%);
        background: linear-gradient(to bottom, rgba(231,56,39,1) 0%, rgba(231,56,39,1) 0%, rgba(240,47,23,1) 40%, rgba(246,41,12,1) 50%, rgba(255,255,255,1) 50%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e73827', endColorstr='#ffffff', GradientType=0 );
      }
      .card {
        background-color: #310705bf;
      }
      .rounded-mine {
        border-radius: 20px;
      }

      .text-mine {
        color: white;
      }

      .btn-mine {
        color: #fff;
        background-color: #8824129c;
        border-color: #8824129c;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="toast mt-3" role="alert" data-delay="3000" aria-live="assertive" aria-atomic="true" style="position: absolute;">
          <div class="toast-header">
            <strong class="mr-auto">Notif</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body">
            Selamat Datang <?= $_SESSION['auth']['name'] ?>
          </div>
        </div>
      </div>
      <div class="row vh-100 justify-content-center align-content-center">
        <div class="col-md-5">
          <div class="card rounded-mine">
            <div class="card-body p-5">
              <div class="card-title">
                <h2 class="font-weight-bold text-mine">Profil</h2>
              </div>
              <form>
                <div class="form-group">
                  <label for="name" class="font-weight-bold text-mine">Name</label>
                  <input id="name" class="form-control" type="text" name="name" value="<?= $_SESSION['auth']['name'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="username" class="font-weight-bold text-mine">Username</label>
                  <input id="username" class="form-control" type="text" name="username" value="<?= $_SESSION['auth']['username'] ?>" readonly>
                </div>
                <div class="form-group">
                  <a href="logout.php" class="btn btn-mine float-right rounded-lg">Logout</a>
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
