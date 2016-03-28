
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
          require('include/db_API_VIS.inc.php');
          require('include/connect.inc.php');

          $result = mlf_stu_get_by_id($_POST['stu_id']);
          $result = $result[0];
          
          $s_id = NULL;
          $s_nid = NULL;
          $s_cam = NULL;
          $s_fname = NULL;
          $s_mname = NULL;
          $s_lname = NULL;
          $s_dep = NULL;
          $s_email = NULL;
          $s_address = NULL;
          $s_mob = NULL;
          $s_date = NULL;
          
          if($result != NULL) {
          	
          	$s_id = $result->stu_id;
          	$s_nid = $result->stu_nid;
          	$s_cam = $result->stu_cam;
          	$s_fname = $result->stu_fname;
          	$s_mname = $result->stu_mname;
          	$s_lname = $result->stu_lname;
          	$s_dep = $result->stu_dep;
          	$s_email = $result->stu_email;
          	$s_address = $result->stu_address;
          	$s_mob = $result->stu_mob;
          	$s_date = $result->stu_date;
          	
          	$panel_msg = $s_fname."'s Information";
          	
          	// create sessions
          	session_start();
          	$_SESSION['s_id'] = $s_id;
          	$_SESSION['s_nid'] = $s_nid;
          	$_SESSION['s_cam'] = $s_cam;
          	$_SESSION['s_fname'] = $s_fname;
          	$_SESSION['s_mname'] = $s_mname;
          	$_SESSION['s_lname'] = $s_lname;
          	$_SESSION['s_dep'] = $s_dep;
          	$_SESSION['s_email'] = $s_email;
          	$_SESSION['s_address'] = $s_address;
          	$_SESSION['s_mob'] = $s_mob;
          	$_SESSION['s_date'] = $s_date;
          	
          } else {
          	?>
          		<div class="panel panel-default">
				  <div class="panel-body" style="text-align: center;">
				    No Result Found
				  </div>
				</div>
          	<?php 
          }
          
        } else {
        	$s_id = NULL;
        	$s_nid = NULL;
        	$s_cam = NULL;
        	$s_fname = NULL;
        	$s_mname = NULL;
        	$s_lname = NULL;
        	$s_dep = NULL;
        	$s_email = NULL;
        	$s_address = NULL;
        	$s_mob = NULL;
        	$s_date = NULL;
        }
          
        
      ?>

      <form class="form-signin" action="member_info.php" method="post">
        <h2 class="form-signin-heading">Memeber ID</h2>
        <label for="inputEmail" class="sr-only"></label>
        <input type="text" class="form-control" name="stu_id" style="margin-bottom: 5px;" required autofocus>
        <button class="btn btn-lg btn-primary btn-block" type="submit">GET INFORMATION</button>
      </form>

      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"><h3> Memeber Information </h3></div>
        <table class="table table-hover">

          <tr>
            <th>Label</th>
            <th>Info</th>
          </tr>

          <tr><td>Student ID</td>
          	<td><?php echo $s_id; ?></td>
          </tr>
          <tr><td>Student Natinal ID</td>
	          <td><?php echo $s_nid; ?></td>
          </tr>
          <tr><td>Campus</td>
	          <td><?php echo $s_cam; ?></td>
          </tr>
          <tr><td>First Name</td>
	          <td><?php echo $s_fname; ?></td>
          </tr>
          <tr><td>Middle Name</td>
	          <td><?php echo $s_mname; ?></td>
          </tr>
          <tr><td>Last Name</td>
	          <td><?php echo $s_lname; ?></td>
          </tr>
          <tr><td>Department</td>
	          <td><?php echo $s_dep; ?></td>
          </tr>
          <tr><td>E-mail</td>
	          <td><?php echo $s_email; ?></td>
          </tr>
          <tr><td>Address</td>
	          <td><?php echo $s_address; ?></td>
          </tr>
          <tr><td>Mobile</td>
	          <td><?php echo $s_mob; ?></td>
          </tr>
          <tr><td>Date</td>
	          <td><?php echo $s_date; ?></td>
          </tr>

        </table>
      </div>
      
      <form class="form-signin" action="member_add.php" method="post">
        <button class="btn btn-lg btn-primary btn-block" name="confirmBtn" type="submit">Confirm Membership</button>
      </form>
      

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
