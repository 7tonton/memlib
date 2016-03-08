
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="avicon.ico">

    <title>Student Form</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/custom_login.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <?php 
        if(isset($_POST['stu_id']) && !empty($_POST['stu_id'])) {
          require('API_stu.php');
          require('connect.php');

          $student_id = $_POST['stu_id'];

          $_POST['stu_id'] = '';

          $result = mlf_stu_get_by_id($student_id);
          $result = $result[0];

        }
          
        
      ?>

      <form class="form-signin" action="studentinfo.php" method="post">
        <h2 class="form-signin-heading">Student ID</h2>
        <label for="inputEmail" class="sr-only"></label>
        <input type="text" class="form-control" name="stu_id" style="margin-bottom: 5px;" required autofocus>
        <button class="btn btn-lg btn-primary btn-block" type="submit">GET INFORMATION</button>
      </form>

      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><h3><?php echo $result->stu_fname; ?>'s Information</h3></div>
        <table class="table table-hover">

          <tr>
            <th>Label</th>
            <th>Info</th>
          </tr>

          <tr><td>Student ID</td><td><?php echo $result->stu_id; ?></td></tr>
          <tr><td>Student Natinal ID</td><td><?php echo $result->stu_nid; ?></td></tr>
          <tr><td>Campus</td><td><?php echo $result->stu_cam; ?></td></tr>
          <tr><td>First Name</td><td><?php echo $result->stu_fname; ?></td></tr>
          <tr><td>Middle Name</td><td><?php echo $result->stu_mname; ?></td></tr>
          <tr><td>Last Name</td><td><?php echo $result->stu_lname; ?></td></tr>
          <tr><td>Department</td><td><?php echo $result->stu_dep; ?></td></tr>
          <tr><td>E-mail</td><td><?php echo $result->stu_email; ?></td></tr>
          <tr><td>Address</td><td><?php echo $result->stu_address; ?></td></tr>
          <tr><td>Mobile</td><td><?php echo $result->stu_mob; ?></td></tr>
          <tr><td>Date</td><td><?php echo $result->stu_date; ?></td></tr>

        </table>
      </div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
