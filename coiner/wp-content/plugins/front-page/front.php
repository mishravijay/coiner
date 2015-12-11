<?php
/*
Plugin Name:Front Page
Description:Show Front Page
Author:Deepak Patel
*/
add_shortcode('FRONNT','frontfun');

function frontfun(){
$result = '';
if(isset($_POST['send'])){
		
		$name	= $_POST['conname'];
		$email	= $_POST['conemail'];
		$phone	= $_POST['conphone'];
		$message	= $_POST['conmessage'];
		
		if(!empty($email)){
			
			$to = "singh@capitalgenx.com,kumar@capitalgenx.com,deepak.patel678@gmail.com";
$subject = "Capital Genx Trial Query";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Thank You for contacting us!</p>
<table border='1px' cellpadding='10px' cellspacing='10px'>
<tr>
<th>Name</th>
<th>Phone</th>
<th>Message</th>
</tr>
<tr>
<td>".$name."</td>
<td>".$phone."</td>
<td>".$message."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
//$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'From:'.$email."\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
mail($email,$subject,$message,$headers);
echo "<script>
alert('Thank you For Trial');
</script>";
		}
	}
	
	$result .='
	
		
<div class="row">
		<div class="col-lg-6 col-md-6 colsm-12 col-xs-12">
		'.do_shortcode("[huge_it_slider id='1']").'
		</div>
		</div>
		<div class="row" style="margin-top:5%; margin:2% 0% 2% 0% !important;">
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<h2 style="text-align:center; font-size:45px;">What We Do For You?</h2>
		</div>
		<div class="col-lg-4 col-md-4 colsm-12 col-xs-12">
		<a href=""><div class="col-lg-10 col-md-10 colsm-12 col-xs-12 internal">
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<img src="http://capitalgenx.com/newweb/images/front/download1.jpg" style="width:100%;" class="img-responsive"/>
		</div>
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<p>Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar</p>
		</div>
		</div></a>
		</div>
		<div class="col-lg-4 col-md-4 colsm-12 col-xs-12">
		<a href=""><div class="col-lg-10 col-md-10 colsm-12 col-xs-12 internal">
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<img src="http://capitalgenx.com/newweb/images/front/download1.jpg" style="width:100%;" class="img-responsive"/>
		</div>
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<p>Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar </p>
		</div>
		</div></a>
		</div>
		<div class="col-lg-4 col-md-4 colsm-12 col-xs-12">
		<a href=""><div class="col-lg-10 col-md-10 colsm-12 col-xs-12 internal">
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<img src="http://capitalgenx.com/newweb/images/front/download1.jpg" style="width:100%;" class="img-responsive"/>
		</div>
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<p>Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar </p>
		</div>
		</div></a>
		</div>
		</div>
			<div class="row" style="margin-top:5%; margin:2% 0% 2% 0% !important;">
		<div class="col-lg-4 col-md-4 colsm-12 col-xs-12">
		<a href=""><div class="col-lg-10 col-md-10 colsm-12 col-xs-12 internal">
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<img src="http://capitalgenx.com/newweb/images/front/download1.jpg" style="width:100%;" class="img-responsive"/>
		</div>
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<p>Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar </p>
		</div>
		</div></a>
		</div>
		<div class="col-lg-4 col-md-4 colsm-12 col-xs-12">
		<a href=""><div class="col-lg-10 col-md-10 colsm-12 col-xs-12 internal">
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<img src="http://capitalgenx.com/newweb/images/front/download1.jpg" style="width:100%;" class="img-responsive"/>
		</div>
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<p>Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar </p>
		</div>
		</div></a>
		</div>
		<div class="col-lg-4 col-md-4 colsm-12 col-xs-12">
		<a href=""><div class="col-lg-10 col-md-10 colsm-12 col-xs-12 internal">
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<img src="http://capitalgenx.com/newweb/images/front/download1.jpg" style="width:100%;" class="img-responsive"/>
		</div>
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<p>Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar commet.Lorem ipsum dollar </p>
		</div>
		</div></a>
		</div>
		</div>
		<div class="row" style="margin-top:5%; margin:2% 0% 2% 0% !important; background-color:#eee; height:300px;">
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<p style="text-align:center; font-size:45px; color:#333;">Why Capitalgenx</p>
		</div>
		</div>
		<div class="row contactus" style="margin-top:5%; margin:2% 0% 2% 0% !important; background-color:#333;">
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<p style="text-align:center; font-size:45px; color:#fff;">Contact Us</p>
		</div>
		<form method="post">
		<div class="col-lg-4 col-md-4 colsm-12 col-xs-12">
		<input type="text" name="conname" placeholder="Enter Your Name" class="textbx" id="contname">
		</div>
		<div class="col-lg-4 col-md-4 colsm-12 col-xs-12">
		<input type="text" name="conemail" placeholder="Enter Your Email" class="textbx">
		</div>
		<div class="col-lg-4 col-md-4 colsm-12 col-xs-12">
		<input type="text" name="conphone" placeholder="Enter Your Phone" class="textbx">
		</div>
		<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
		<textarea name="conmessage" placeholder="Enter Message" style="width:95%; height:150px; margin:5% 0% 2% 2%; font-size:20px;"></textarea>
		</div>
		<div class="col-lg-4 col-md-4 colsm-12 col-xs-12">
		<input type="submit" name="send" value="Free Trial" style="margin:0% 0% 2% 0%;">
		</div>
		</form>
		</div>
	';
	echo $result;
}
?>