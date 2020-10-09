<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
      
      form{
        border: 5px dotted green;
        padding: 20px;
        width: 100%
      }
      form div.row div input{
        margin-bottom: 5px;
       /* outline: 2px solid blue;*/
        /*border-radius: 55px;*/
      } 
    </style>
  </head>
  <body>
    <div class="container">
      <div class="center-div">
      <form class="form-group" action="insert.php" method="POST">
        <div class="row">
          <div class="col-md-6 col-xl-6">
            <label>First Name</label>
            <input type="text" name="fname" class="form-control">
          </div>
          <div class="col-md-6 col-xl-6">
            <label>Last Name</label>
            <input type="text" name="lname" class="form-control">
          </div>
          <div class="col-md-4 col-xl-4" col-12>
            <label>Age</label>
            <input type="number" name="age" class="form-control">
          </div>
          <div class="col-md-4 col-xl-4" col-12>
            <label>DoB</label>
            <input type="date" name="dob" class="form-control">
          </div>
          <div class="col-md-4 col-xl-4" col-12>
            <label>Phone</label>
            <input type="number" name="phone" class="form-control">
          </div>
          <div class="col-md-12 col-xl-12" col-12>
            <input type="Submit" name="submit" class="btn btn-success btn-block mt-3" value="Submit">
          </div>

        </div>
        </div>
      </form>
    </div>
    </div>    














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>