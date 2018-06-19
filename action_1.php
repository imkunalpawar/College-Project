<?php

include 'config.php' ;


$eno = mysqli_real_escape_string($conn, $_REQUEST['eno']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$branch = mysqli_real_escape_string($conn, $_REQUEST['branch']);
$batch = mysqli_real_escape_string($conn, $_REQUEST['batch']);
$bg = mysqli_real_escape_string($conn, $_REQUEST['bg']);
$domicile = mysqli_real_escape_string($conn, $_REQUEST['domicile']);
$category = mysqli_real_escape_string($conn, $_REQUEST['category']);
$xboard = mysqli_real_escape_string($conn, $_REQUEST['xboard']);
$xiiboard = mysqli_real_escape_string($conn, $_REQUEST['xiiboard']);
$jeemains = mysqli_real_escape_string($conn, $_REQUEST['jeemains']);
$hostler = mysqli_real_escape_string($conn, $_REQUEST['hostler']);
$roomno = mysqli_real_escape_string($conn, $_REQUEST['roomno']);
$xboardp = mysqli_real_escape_string($conn, $_REQUEST['xboardp']);
$xiiboardp = mysqli_real_escape_string($conn, $_REQUEST['xiiboardp']);
$xschool = mysqli_real_escape_string($conn, $_REQUEST['xschool']);
$xiischool = mysqli_real_escape_string($conn, $_REQUEST['xiischool']);
$localadd = mysqli_real_escape_string($conn, $_REQUEST['localadd']);
$permanentadd = mysqli_real_escape_string($conn, $_REQUEST['permanentadd']);
$contactno = mysqli_real_escape_string($conn, $_REQUEST['contactno']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$mname = mysqli_real_escape_string($conn, $_REQUEST['mname']);
$designation = mysqli_real_escape_string($conn, $_REQUEST['designation']);
$annualincome = mysqli_real_escape_string($conn, $_REQUEST['annualincome']);
$mobileno = mysqli_real_escape_string($conn, $_REQUEST['mobileno']);
$tg= mysqli_real_escape_string($conn, $_REQUEST['tg']);
$minorpro = mysqli_real_escape_string($conn, $_REQUEST['minorpro']);
$feedue = mysqli_real_escape_string($conn, $_REQUEST['feedue']);

$sql = "INSERT INTO student_registration (`eno`, `name`, `branch`, `batch`, `bg`, `domicile`, `category`, `xboard`, `xiiboard`, `jeemains`, `hostler`, `roomno`, `xboardp`, `xiiboardp`, `xschool`, `xiischool`, `localadd`, `permanentadd`, `contactno`, `email`, `fname`, `mname`, `designation`, `annualincome`, `mobileno`, `tg`, `minorpro`, `feedue`) VALUES ('$eno', '$name', '$branch', '$batch', '$bg', '$domicile', '$category', '$xboard', '$xiiboard', '$jeemains', '$hostler', '$roomno', '$xboardp', '$xiiboardp', '$xschool', '$xiischool', '$localadd', '$permanentadd', '$contactno', '$email', '$fname', '$mname', '$designation', '$annualincome', '$mobileno', '$tg', '$minorpro', '$feedue' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>