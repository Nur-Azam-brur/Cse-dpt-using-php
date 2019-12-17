<?php 
include "config.php";
include "database.php";
?>

<?php
$db = new Database();
if (isset($_POST['search'])) {
	$searchkey = $_POST['search'];
	$query = "SELECT * FROM teacher WHERE Name LIKE '%$searchkey%' OR
	Titulary LIKE '%$searchkey%' OR Email LIKE '%$searchkey%' OR Code LIKE '%$searchkey%'";
}
else
{
	$query = "SELECT * FROM teacher";
	$searchkey ="";
}
$read = $db->select($query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Wellcome To Begum Rokeya University</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <link rel="stylesheet" type="text/css" href="newstyle.css">
</head>
<body>
      <div class="head">
        <img class="head_one" src="img/Begum-Rokeya-University-logo_1111.jpg">
        <h1 class="head_two">বেগম রোকেয়া বিশ্ববিদ্যালয়, রংপুর</h1>
      <img class="head_three" src="img/brur.jpg">       
    </div>
    <div class="navbar navbar-inverse" id="hi">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="main.php">CSE BRUR</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="main.php">Home</a></li>
      <li class="p_m active"><a href="#">People</a></li>
      <li class="a_m"><a href="#">Academic</a></li>
      <li class="acti_m"><a href="#">Activities</a></li>
      <li><a href="admission.php">Admission 2017-18</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
    <form class="navbar-form navbar-left" method="post" action="teacher.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search" value="<?php echo("$searchkey");?>">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>  
      
<div class='p_l'>
    <div class='container'>
      <ul>
        <li><a  class="one" href="Students.php">Student's Information</a></li>
        <li><a class="one" href="teacher.php">Teacher's Information</a></li>
        <li><a class="one" href="Staff.php">Office's Staff </a></li>
      </ul>
      
    </div>
  </div>

 <div class='a_l'> 
    <div class='container'>
      <ul>
        <li><a  class="one" href="courses.php">Courses</a></li>
        <li><a class="one" href="facilities.php">Facilites</a></li>
        <li><a class="one" href="achievement.php">Achievments</a></li>
      </ul>
      
    </div>
  </div>

  <div class='acti_l'>
    <div class='container'>
      <ul>
        <li><a class="one" href="co_acti.php">Co-curricular Activities</a></li>
        <li><a class="one" href="gallery.php">Gallery</a></li>
      </ul>      
    </div>
  </div>

  <div>
    <h1 class="t_one">Honorable Teacher of CSE Department</h1><br><br>
  </div>

		<table class="s_d_one">
		<tr>
			<th >Photo</th>
			<th >Name</th>
			<th >Titulary</th>
			<th >Email</th>
			<th >Phone No.</th>
			<th >Code</th>
		</tr>
		<?php if($read){?>
		<?php while($row = $read->fetch_assoc()){?>
		<tr>
			<td><img src="<?php echo $row['Photo']; ?>" height="100" width="100"></td>
			<td><?php echo $row['Name']; ?></td>
			<td><?php echo $row['Titulary']; ?></td>
			<td><?php echo $row['Email']; ?></td>
			<td><?php echo $row['Phone No.']; ?></td>
			<td><?php echo $row['Code']; ?></td>
		</tr>
		<?php }?>
		<?php }
		else {?>
			
			<?php 
				header("Location: main.php?msg=".urlencode('Your searching data is not available!!'));

			?>
	    <?php }?>
		</table>
<br>
<br>
<?php include 'f.php';?>