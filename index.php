<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Check Username</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.css" rel="stylesheet">
    <script src="js/jquery-3.3.1.js"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        <h2 class="demo-headline" align="center">Registration Page</h2>
        <div id="main" style="width:500px">
          <h4>Enter Username</h4>
          <input type="text" id="username" class="form-control">
          <span id="response"></span>
        </div>
    </div>
    <!-- /.container -->


    <!-- Load JS here for greater good =============================-->
    
  </body>
</html>
<script>
  $(document).ready(function(){
    $('#username').keyup(function(){
      var username = $(this).val();
      $.ajax({
        url:"fetch.php",
        method:"post",
        data:{username:username},
        type:"text",
        success:function(html){
          $('#response').html(html);
        }
      });
    })
  });
</script>