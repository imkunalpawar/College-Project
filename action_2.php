<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <link rel="stylesheet" type="text/css" href="action_2.css">
 <script type="text/javascript">
	 function showfields() {
		 
   $(".hide").toggle();

}
	 </script>
	   <script>
    $("a").click(function(event) {
     event.preventDefault(); 
      });
    </script>
</head>
<center>
<body>
<header><img src="header-new.png"/></header>
		<nav>
			<ul>
				<a href="index.html"><li>Home</li></a>
				<a href="student.html"><li>Student Registration</li></a>
				<a href="contact.html"><li>Contact Us</li></a>
			</ul>
		</nav>
	<!--	<footer>
		<div>
		<p>&copy; 2017, All rights reserved</p>
		</div>
		</footer> -->

<?php



$con=mysqli_connect("localhost","root","root","tg_report");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM student_registration");




while($row = mysqli_fetch_array($result))
{
	$eno = $row['eno'];
	$name = $row['name'];
	$branch = $row['branch'];
	$batch = $row['batch'];
	$bg = $row['bg'];
	$domicile = $row['domicile'];
	$category = $row['category'];
	$xboard = $row['xboard'];
	$xiiboard = $row['xiiboard'];
	$jeemains = $row['jeemains'];
	$hostler = $row['hostler'];
	$roomno = $row['roomno'];
	$xboardp = $row['xboardp'];
	$xiiboardp = $row['xiiboardp'];
	$xschool = $row['xschool'];
	$xiischool = $row['xiischool'];
	$localadd = $row['localadd'];
	$permanentadd = $row['permanentadd'];
	$contactno = $row['contactno'];
	$email = $row['email'];
	$fname = $row['fname'];
	$mname = $row['mname'];
	$designation = $row['designation'];
	$annualincome = $row['annualincome'];
	$mobileno = $row['mobileno'];
	$tg = $row['tg'];
	$minorpro = $row['minorpro'];
	$feedue = $row['feedue'];
	?>


<form action="action_2_update.php" method="post">
		<div class="show">
			<label for="eno.">Enrollment No.: </label> <input type="text" name="eno" value="<?php echo $eno; ?> " size=50> <br/><br/>
			<label for="name">Name: </label> <input type="text" name="name" value="<?php echo $name; ?> " size=50> <br/><br/> 
		</div>	
		<a href="#" onclick='showfields(); '>Click Here to Show more</a>
		<div class="hide" id="hiddenid">
			<label for="branch">Branch: </label> <input type="text" name="branch" value="<?php echo $branch; ?> " size=50><br/><br/>
			
			<label for="batch">Batch: </label> <input type="text" name="batch" value="<?php echo $batch; ?> " size=50><br/><br/>
			
			<label for="bg">Blood Group: </label> <input type="text" name="bg" value="<?php echo $bg; ?> " size=50> <br/><br/>
			
			<label for="domicile">Domicile: </label> <input type="text" name="domicile" value="<?php echo $domicile; ?> " size=50><br/><br/>
			
			<label for="category">Category: </label> <input type="text" name="category" value="<?php echo $category; ?> " size=50><br/><br/>
			
			<label for="xboard">x Board: </label> <input type="text" name="xboard" value="<?php echo $xboard; ?> " size=50><br/><br/>
			
			<label for="xiiboard">xii Board: </label> <input type="text" name="xiiboard" value="<?php echo $xiiboard; ?> " size=50><br/><br/>
			
			<label for="jeemains">PET/AIEEE: </label> <input type="text" name="jeemains" value="<?php echo $jeemains; ?> " size=50><br/><br/>
			
			<label for="hostler">Hostler: </label> <input type="text" name="hostler" value="<?php echo $hostler; ?> " size=50><br/><br/>
			
			<label for="roomno.">Room No.: </label> <input type="text" name="roomno" value="<?php echo $roomno; ?> " size=50><br/><br/>
			
			<label for="xboard%">x Board Percentage: </label> <input type="text" name="xboardp" value="<?php echo $xboardp; ?> " size=50><br/><br/>
			
			<label for="xiiboard%">xii Board Percentage: </label> <input type="text" name="xiiboardp" value="<?php echo $xiiboardp; ?> " size=50><br/><br/>
			
			<label for="xschool">x Board School: </label> <input type="text" name="xschool" value="<?php echo $xschool; ?> " size=50><br/><br/>
			
			<label for="xiischool">xii Board School: </label> <input type="text" name="xiischool" value="<?php echo $xiischool; ?> " size=50><br/><br/>
			
			<label for="localadd">Local Address: </label> <input type="text" name="localadd" value="<?php echo $localadd; ?> " size=50><br/><br/>
			
			<label for="permanentadd">Permanent Address: </label> <input type="text" name="permanentadd" value="<?php echo $permanentadd; ?> " size=50><br/><br/>
			 
			<label for="contactno">Contact No.: </label> <input type="text" name="contactno" value="<?php echo $contactno; ?> " size=50><br/><br/>
			
			<label for="email">Email ID: </label> <input type="text" name="email" value="<?php echo $email; ?> " size=50><br/><br/>
			
			<label for="fname">Father's Name: </label> <input type="text" name="fname" value="<?php echo $fname; ?> " size=50><br/><br/>
			
			<label for="mname">Mother's Name: </label> <input type="text" name="mname" value="<?php echo $mname; ?> " size=50><br/><br/>
			
			<label for="designation">Designation: </label> <input type="text" name="designation" value="<?php echo $designation; ?> " size=50><br/><br/>
			
			<label for="annualincome">Annual Income: </label> <input type="text" name="annualincome" value="<?php echo $annualincome; ?> " size=50><br/><br/>
			
			<label for="mobileno">Mobile No.: </label> <input type="text" name="mobileno" value="<?php echo $mobileno; ?> " size=50><br/><br/>
			
			<label for="tg">Tutor Guardian's Name: </label> <input type="text" name="tg" value="<?php echo $tg; ?> " size=50><br/><br/>
			
			<label for="minorpro">Minor Project Detail: </label> <input type="text" name="minorpro" value="<?php echo $minorpro; ?> " size=50><br/><br/>
			
			<label for="feedue">Fee Due: </label> <input type="text" name="feedue" value="<?php echo $feedue; ?> " size=50> 
		<br/><br/>
		
		</div>
			 <input type="submit" name="submit" value="Update">	&emsp; <input type="submit" name="submit" value="Delete" formaction="action_2_delete.php">	
		</div> 
		</form> 
		<?php }
mysqli_close($con);
?>
 </center>
</body>
</html>     