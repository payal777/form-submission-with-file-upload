
<html>
	<body>
            <p>Email:<?php echo $_POST['email'];?></p><br/>
            <p>Highest Qualification:<?php echo $_POST['qualification'];?></p><br/>
            <p>Mobile Number:<?php echo $_POST['mobileno'];?></p><br/>
            <p>Address:<?php echo $_POST['address'];?><p><br/>
	</body>
</html>

<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
		 $myvar=rand(0,15);
		  $mydir=$myvar;
		  mkdir($mydir);
		  $destination="/var/www/html/$mydir/";
         move_uploaded_file($file_tmp,"/var/www/html/$mydir/".$file_name);
         echo "$file_name, File Uploaded Successfully.";
		 echo "$destination";
      }else{
         print_r($errors);
      }
   }
   $emailErr = $mobileErr = $qualificationErr = "";
   $email = $qualification = $mobile = $address = "";
   
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required.";
  } else {
    $email = $_POST["email"];
  }
    
  if (empty($_POST["mobileno"])) {
    $mobileErr = "Mobile is required.";
  } else {
    $mobile = $_POST["mobileno"];
  }

  if (empty($_POST["qualification"])) {
    $qualificationErr = "Highest Qualification is required.";
  } else {
    $qualification = $_POST["qualification"];
  }

?>