<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th>First</th>
              <th>Last</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="number" name="num1" id="num1" class="num"></td>
              <td><input type="number" name="num2" id="num2" class="num2"></td>
            </tr>
            <tr>
              <td><input type="number" name="num2" id="num1" class="num"></td>
              <td><input type="number" name="num2" id="num2" class="num2"></td>
            </tr>
            <tr>
              <td><input type="number" name="num3" id="num1" class="num"></td>
              <td><input type="number" name="num2" id="num2" class="num2"></td>
            </tr>
            <tr>
              <td><input type="number" name="total" id="total"></td>
              <td><input type="number" name="num2" id="gtotal"></td>
            </tr>

            <tr>
              <td></td>
              <td><input type="number" name="fresult" id="fresult"></td>
            </tr>
          </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->




<script type="text/javascript">
    $('.num').keyup(function () {
      var result = 0;
      $('.num').each(function () {
        result += +$(this).val();
      });
      $('#total').val(result);



      $('.num2').keyup(function () {
        var result = 0;
        $('.num2').each(function () {
          result += +$(this).val();
        });
        $('#gtotal').val(result);

        

        var totalmarks = $('#total').val();
        var obtainmark = $('#gtotal').val();
        var percentage = (obtainmark/totalmarks)*100;
        $('#fresult').val(percentage);


      });

    });



    


    // if($('#gtotal').val()>0){
    //     var totalmarks = $('#total').val();
    //     var obtainmark = $('#gtotal').val();

    //     var percentage = (obtainmark/totalmarks)*100;
    //     $('#fresult').val(percentage);
    // }
    
    



     // $('#gtotal').on('change', '#gtotal', function(event) {
     //     var totalmarks = $('#total').val();
     //    var obtainmark = $('#gtotal').val();

     //    var percentage = (obtainmark/totalmarks)*100;
     //    $('#fresult').val(percentage);
     // });

    
</script>

  </body>
</html>