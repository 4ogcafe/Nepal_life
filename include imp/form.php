<?php
if($_POST['sent']==1){
		
if($_POST['name']==NULL){
					$message1='Please Enter Name !';
					$class1='bad';
				}
					else{
					$message1='Success !';
					$class1='good';
				}
if($_POST['contact']==NULL){
					$message2='Please Enter Contact No. !';
					$class2='bad';
				}
					else{
					$message2='Success !';
					$class2='good';
				}
if($_POST['email']==NULL){
					$message3='Please Enter Email ID.!';
					$class3='bad';
				}
					else{
					$message3='Success !';
					$class3='good';
				}
if($_POST['message']==NULL){
					$message4='Please Enter Massage!';
					$class4='bad';
				}
					else{
					$message4='Success !';
					$class4='good';
					
				}
}


?>
<style>
.than{font-family:Arial, Helvetica, sans-serif; font-size:18px; color:#FFFFFF; font-weight:bold; padding-left:250px; padding-bottom:80px;}
.bad{
 color:#fff;
 font-size:12px;
}
.good{
 color:#0099FF;
 font-size:12px;
}

</style>

<?php
	if($_POST['name']!=NULL && $_POST['contact']!=NULL && $_POST['email']!=NULL && $_POST['message']!=NULL){
	
	echo "<span  class=\"than\">Your Message has been Send..!!!! </span>";
}
?>

<br /><br /><br />
<span class="text_center">

<form action="#" method="post">

Name : &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
<input type="text" name="name" size="30" value="" /><span class="<?php echo $class1; ?>"><?php echo $message1; ?>	</span><br /><br />
Contact No. : <input type="text" name="contact" size="30" value="" /><span class="<?php echo $class2; ?>"><?php echo $message2; ?></span><br /><br />
Email ID:&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; 
<input type="text" name="email" size="30" value="" /><span class="<?php echo $class3; ?>"><?php echo $message3; ?></span><br /><br />
Message :&nbsp; &nbsp;&nbsp;&nbsp;
<input type="text" name="message" size="30" value="" /><span class="<?php echo $class4; ?>"><?php echo $message4; ?></span><br /><br />
<input name="submit" type="submit" value="Send Message " />
<input type="hidden" value="1" name="sent" />
</form>
</span>

</div>
