<?php
	$directory="uploads/";
	$arr = glob($directory."*.txt", GLOB_BRACE);
	
	
?>
<!DOCTYPE HTML>
<head>
<meta charset="UTF-8">
<title>Front page</title>
<link rel="stylesheet"  href="css/bootstrap.css">
<link rel="stylesheet" href="jquery-ui-1.10.2.custom/css/smoothness/jquery-ui-1.10.2.custom.css">
<style>
body
{
  background:#2B4866;
}
h3
{
	font-family: myOwnFont;
	font-size: 50px;
	margin-top: 11px;
	margin-left: 11px;

}
@font-face 
{
		font-family: myOwnFont;
		src :url('fonts/alex-brush/AlexBrush-Regular-OTF.otf');
}

#span10
{
	margin-top: 31px;
	margin-left: 74px;
}
.total
{
	
	margin-top: 20px;
	background: #9199A4;
	height: 1500px;
	border-bottom: 40px solid #4C5977;
	border-radius: 41px;

}
.header
{
	background:#4C5977;
	padding-top: 1px;
        border-top-left-radius: 45px;
	border-top-right-radius: 45px;


}
h1
{
	margin-top: 37px;
	color: white;
	align: center;
	margin-left: 311px;
	text-transform: uppercase;
	font-family: serif;
}
a
{
	color:black;	
}

.buttons
{
	height: 43px;
	border-radius: 9px;
	background: #4C5977;
	color: white;
	font-size: 20px;
	width: 144px;
	text-transform: capitalize;
}
#Modify
{
	margin-left:80px;

}
.buttonsdiv
{
	margin-top:20px;
	margin-bottom:20px;

}
#uploadlist
{
	background: #9FA6B0;
	border-radius: 24px;
	height: 443px;
	margin-top: 26px;

}
#autocomplete
{
	margin-left: 103px;
	margin-top: 8px;
	background:url('images/srimg.gif');
	background-repeat:no-repeat;
	background-position: 200px;
	background-color: white;
}
.mails
{
	background: #9FA6B0;
	border-radius: 24px;

}
.control-label
{
	float: left;
	margin-left: 11px;
	margin-top: 22px;
}
.totextbox
{
	margin-top: 18px;
	margin-left: 51px;
}
.sendbtn
{
	margin-left: 86px;


}
.subjecttextbox
{
	margin-top: 13px;
	margin-left: 10px;

}
.upld
{
	background: #4C5977;
	margin-left: 0px;
	border-top-left-radius: 24px;
	border-top-right-radius: 25px;

}
.icon-envelope
{
	background:url('images/email.png');
	background-repeat: no-repeat;
	width:width: 19px;
}
.icon-edit
{
	background:url('images/imagepencil.jpg');
}
.text-left 
{
	margin-left:17px;
	color:black;
}
label
{
	color:#AB2B38;
	font-size:18px;	

}
h2
{
	color:white;
	text-transform:capitalize;
}
.about
{
	font-size:18px;
	margin-top: 5px;
	line-height: 37px;
}
li
{
	line-height: 31px;
	font-size:18px;
}
h3
{
	color:midnightblue;
}
#delete
{
	background:url('images/_delete.gif');
	background-repeat:no-repeat;
	background-position:3px;
	background-color:#00A7C3;
	width: 85px;
}
.edbtns
{
	margin-top:3px;
}
</style>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
</head>
<body>
<form name="form" method="post" action="" enctype="multipart/form-data">
<div class="container">
<div class="row total" >
	<div class="header">
	<h1>PHP File Manager</h1>
	<ul class="nav nav-tabs">
  	<li class="active" id="Home">
    	<a href="#" >Home</a></li>
  	<li id="aboutus"><a href="#" >About us</a></li>
  	<li id="help"><a href="#">Help</a></li>
	</ul>
	</div>
<script type="text/javascript">

		$(document).ready(function()
		{
			$(".about").hide();
			$(".help").hide();
			$(".buttonsdiv").show();
			$("#uploadlist").show();
			$("#Home").click(function()
				{
					$(".buttonsdiv").show();
					$("#uploadlist").show();
					$(".about").hide();
					$(".help").hide();	

				});
			$("#aboutus").click(function()
				{
					
					$(".buttonsdiv").hide();
					$("#uploadlist").hide();
					$(".about").show();
					$(".help").hide();
					
				});
			$("#help").click(function()
				{
					$(".help").show();
					$(".buttonsdiv").hide();
					$("#uploadlist").hide();
					$(".about").hide();
				});
			
			
		});
							
</script>
<div class="span10 about">
	<img src="images/image.jpg">
	<p class="text-left about">A file manager or file browser is a computer program that provides a user interface to work with file systems. The most common operations performed on files or groups of files are: create, open, edit, view, print, play, rename, move, copy, delete, search/find, and modify file attributes, properties and file permissions. Files are typically displayed in a hierarchy.</p>
</p>
<h3>features</h3>
<ul>
<li>Uploading the files</li>
<li>Cropping the images </li>
<li>Editing the files</li>
<li>view the files</li>
<li>Deleting the files</li>
<li>mailing the file</li>
</ul>
</div>
<div class="span10 help">
	<h3>Instructioms for uploading</h3>
	<ul>
	<li>Click on uploadNew button</li>
	<li>Choose the file for uploding</li>
	<li>If the image is of type .jpg,.png,.gif</li>
	<li>The image is cropped in 3 different sizes and displayed</li>
	</ul>
	<h3>Instructions for Modifying Existing File</h3>
	<ul>
	<li>Click on the Modify button</li>
	<li>It shows the list of .txt files with radiobottons </li>
	<li>Select the radiobutton of particular file</li>
	<li>Click on edit button for Editing</li>
	<li>Click on Delete button for Deleting</li>
	</ul>
	<h3>Instructions for viewing the file</h3>
	<ul>
	<li>Select the file in the search box</li>	
	<li>Click on open button to view the file</li>
	</ul>
	<h3>Instructions for mailing the file</h3>
	<ul>
	<li>Select the file in the search box</li>
	<li>Click on the email button</li>
	<li>Give the To address which is mandatory</li>
	<li>Click on send button</li>
	</ul> 
</div>
<div class="span10" id="span10">
	<div class="row" >
		
		<div class="span10 buttonsdiv">
		<input type=button name=uploadnew value=uploadnew onClick="uploadnewfile()" class="btn btn-info btn-large" rel="tooltip" data-toggle="tooltip" title="To Upload the New file" data-placement="bottom" id="uploadnew">
		<input type=submit name=modify  value=Modify onClick="modifyExisting()" class="btn btn-info btn btn-large" data-toggle="tooltip" title="To Modify Existing file" data-placement="bottom" id="Modify"> 
			
		</div>
		<div class="span10">
		<input type=file style="display:none" name=uploadfile value=uploadfile id="uploadfile"  />
		<input type=submit name=upload value=upload style="display:none" id="upload" class="btn btn-info">
		</div>
		
		<?php
		if (isset($_POST['upload'])) 
		{
			
			$image = $_FILES["uploadfile"]["name"];
			//echo $image;
			$fileTmpLoc = $_FILES["uploadfile"]["tmp_name"];
			//echo $fileTmpLoc;				
			$type = $_FILES["uploadfile"]["type"];
			$spath = "uploads/";
			//$spath = "uploads/";
			$dpath = "uploads/uploadimages/";
			$jpeg_quality = 75;
			$png_compression = 6;
			// Evaluate the value returned from the function if needed
			if(move_uploaded_file($fileTmpLoc,$spath.$image))
			{
				chmod($spath.$image, 0777);
				 echo $spath.$image;
			if($type == "image/jpeg" || $type == "image/png" || $type == "image/jpg" || $type == "image/gif")
			      {
				?>
				<div class="span4" style="border:1px solid #ccc; padding:30px;">
				<h4>Original Uploaded Image </h4>
				<img src="<?php echo $spath.$image; ?>">
		        	</div>
			<?php
			
				crop_img(50, 50 ,$spath, $dpath, $image,$jpeg_quality, $png_compression);
			 	crop_img(100, 100 , $spath, $dpath, $image , $jpeg_quality, $png_compression);
				$message = "success";
				
			?>
			<div class="span8">
			<h4 class="alert-success">
			<?php echo "Successfully cropped";
			?> 
			</h4>
			</div>
			<?php
				
			    } //End of image type ifcondition
			      else        
				{
			?>
					<div class="span8">
					<h4 class="alert-error">
					<?php echo "cropping is not applicable.";?>
					</h4></div>
					
			<?php
				
				
				}  //End of image type else condition
				
			}
			else 
			{
				
    				 	echo "ERROR: File not moved correctly";
			}
			
}	 
					
function crop_img($height, $width, $spath, $dpath, $filename, $jpeg_quality=75, $png_compression=100)
{
	
    $t_width = $width;
    $t_height = $height;
    $ext = end(explode('.',$filename));
    $new_name = "$t_width"."$t_height"."$filename";
    list($w, $h)= getimagesize($spath.$filename); 
    $ratio = ($t_width/$w); 
    $nw = ceil($w * $ratio);
    $nh = ceil($h * $ratio); 
    $nimg = imagecreatetruecolor($nw,$nh);
    $color = imagecolorallocate($nimg, 145, 153, 164);
    imagefilledrectangle($nimg, 0, 0, 99, 99, $color);

 	if($ext == "jpeg" || $ext == "jpg" || $ext == "JPEG" || $ext == "JPG")
	{
		$im_src = imagecreatefromjpeg($spath.$filename);
		

	}
	elseif($ext == "gif" || $ext == "GIF")
	{
		 
		$im_src = imagecreatefromgif($spath.$filename);
		
	}
	elseif($ext == "png" || $ext == "PNG")
	{
		$im_src = imagecreatefrompng($spath.$filename); 
	}
	 
	imagecopyresampled($nimg,$im_src,0,0,0,0,$nw,$nh,$w,$h);
	

	
	if($ext == "gif" || $ext == "GIF")
	{
		 imagegif($nimg,$dpath.$new_name); 
		 
		
	?>
		<div class="span4" style="float:left; border:1px solid #ccc; padding:30px;">
			<h4><?echo "Cropped Image with ".$t_width.$t_height;?></h4>
			<img src="<?php echo $dpath.$new_name.$image;?>"/>
			</div> 
		
<?php 

	}

	elseif($ext == "jpeg" || $ext == "jpg" || $ext == "JPEG" || $ext == "JPG")
	{
		imagejpeg($nimg,$dpath.$new_name,$jpeg_quality);
		
?>
		<div class="span4" style="float:left; border:1px solid #ccc; padding:30px;">
			<h4><?echo "Cropped Image with ".$t_width.$t_height;?></h4>
			<img src="<?php echo $dpath.$new_name.$image;?>"/>
			</div> 
		
<?php
	}
	
	elseif($ext == "png" || $ext == "PNG")
	{
		imagepng($nimg,$dpath.$new_name,$png_compression);  
		

	?>
		<div class="span4" style="float:left; border:1px solid #ccc; padding:30px;">
			<h4><?echo "Cropped Image with ".$t_width.$t_height;?></h4>
			<img src="<?php echo $dpath.$new_name.$image;?>"/>
			</div>
<?php
	}
}
?>
<?php
		if (isset($_POST['modify'])) 
		{
			
			$directory = "uploads/";
			$arr = glob($directory."*.txt", GLOB_BRACE);
			$count=count($arr);
?>
<div class="span10" id="radiobuttons">
<?php
for($k=0;$k<$count;$k++)
{
	 
	$str=str_replace('uploads/','', $arr[$k]);
?>
         <input type='radio' name='text' id='text' onclick="textfunctions('<?php echo $str; ?>')"/><?php echo $str; ?>
<?php
 
}
?>

</div>

<?php
		
	}
	?>
<?php 
	if (isset($_POST['append'])) 
		{
   			$text=$_POST['filetext'];
			$filename=$_POST['fname'];
			$f = fopen($filename,"a+");	
  			file_put_contents('uploads/'.$filename,$text,FILE_APPEND);
  			fclose($f);
			
		}
?>
<?php
	if (isset($_POST['delete'])) 
		{
			$filename=$_POST['fname'];
			$fh = fopen($filename, 'w') or die("can't open file");
			fclose($fh);
			if (unlink('uploads/'.$filename))
  			{
				 echo ("Deleted $filename");
  				
  			}
			else
  			{
 					echo ("Error deleting $filename");		
 			 }

		}
			

?>
<script type="text/javascript">
function textfunctions(filename)
	{
		document.getElementById("edit").style.display="";
		document.getElementById("delete").style.display="";
		document.getElementById('fname').value=filename;
	
	}
function appendtext()
	{
		var a=document.getElementById("textarea").value;
		document.getElementById("filetext").style.display="block";
		document.getElementById("filetext").value=a;
	}	
</script>
<div class="span10 edbtns">
<a href=#" id="edit" style="display:none" onclick="showtextarea()" class="btn btn-info">Edit</a>
<input type="submit" style="display:none" name="delete"  id="delete"  class="btn btn-info" value="Delete"/>

</div>
<div class="span10">
	<textarea rows="10" cols="30" style="display:none" id="textarea"></textarea>
<input type=submit value="append" name="append" style="display:none" id="append" onclick="appendtext()" class="btn"/>
<input type="hidden" name="fname" id="fname"/>
<input type="hidden" name="filetext" id="filetext"/>

</div>				
		<div class="span10" name="uploadlist" id="uploadlist">
			<div class="row upld">
			<h3 style="float:left;"><b style="color:white";>uploded files list</b></h3> 
			<label for="autocomplete"></label>
			<input type="text" id="autocomplete" name="box" placeholder="search file" class="search-query" />
			<input type=submit value=open onclick="openfile()" class="btn btn-info" name="open">
			<a href="#" value=Email onclick="Emailfile()" class="btn btn-info" name="Email"><i class="icon-envelope icon-white"></i>Email</a>
			</div>
			<div style="clear:both">
			<div id="outer">
			<?php
			$_POST['uploadlist'];
			$dirPath = "uploads/";
			$destdir = $dirPath;
			$handle = opendir($destdir);
			$c = 0;
			while ($file = readdir($handle)&& $c<3)
			 {
    				$c++;
			}

			if ($c>2)
			{
				
				while (($file = readdir($handle)) !== false) 
					{ 
						
  						$totalfile=$destdir.$file;
				?>
						
					<p class="text-success text-left">
      						<?php echo  $file.'<BR>'; ?></p>
				<?php 
						//echo 'dir is not empty';
      					}
    				
			} 
			else 
			{
    				print "No files";
			} 
?>
		</div>
		</div>
	</div><!--Ending of uploding list-->
		<div class="span8 mails" style="display:none" id="mail">
			<form name="mailform" method="post" action="" class="form-horizontal" onsubmit="return formValidate()" />
			<input type="hidden" id="nameval" name="nameval">
			<div class="control-group">
			<label class="control-label">To</label>
			<input type="text" name="to" id="to" placeholder="username@example.com" class="totextbox" onblur="validateEmail(this)" />
			<span style="color:red" id="tomsg"> </span>
			</div>
			<div class="control-group">
			<label class="control-label">Subject</label>
			<input type="text" name="subject" class="subjecttextbox" />
			<span style="color:red" id="subjectmsg"></span>
			</div>
			<div class="control-group">
			<label class="control-label">Message</label>
			<textarea rows="10" col="5" name="message"></textarea>
			</div>
			<input type=submit value=send name=send  class="btn btn-success sendbtn"/>
			</form>
			</div>
			<?php
				if (isset($_POST['send']))
				{

					$att=$_POST['nameval'];
					$att1='uploads/'.$att;
					$to = $_POST['to'];
					$subject =$_POST['subject'];
					$message =$_POST['message'];
					$headers = "From: webmaster@domain.com\r\n";
 					$rand_seed = md5(time());
 					$mime_boundary = "==Multipart_Boundary_x{$rand_seed}x";
$headers .= "MIME-Version: 1.0\r\n"
   ."Content-Type: multipart/mixed;\r\n"
   ." boundary=\"{$mime_boundary}\"\r\n";
 $message .= "This is a multi-part message in MIME format.\n\n"
   ."--{$mime_boundary}\n\n"
   ."Content-Type:text/plain; charset=\"iso-8859-1\"\n\n"
   ."Content-Transfer-Encoding: 7bit\n\n" . $messageTxt . "\n\n";
 $message .= "--{$mime_boundary}\n";
	 $file = fopen($att1,"rb");
   $data = fread($file,filesize($att1));
   fclose($file);
   $data = chunk_split(base64_encode($data));
   $message .= "Content-Type: {\"application/octet-stream\"};\n"
    ." name=\"$att1\"\n"
    ."Content-Disposition: attachment;\n" . " filename=\"$att1\"\n"
    ."Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
   $message .= "--{$mime_boundary}\n";
	$mail_sent = @mail( $to, $subject, $message, $headers );
 	echo $mail_sent ? "Mail sent successfully" : "Mail failed";
 }
 
?>
</div><!--Ending of span-->
</div><!--Ending of TotalRow-->
</div><!--End of Container-->

</form>

<script type="text/javascript">
	function uploadnewfile()
	{
		 document.getElementById("uploadfile").style.display ="";
		 document.getElementById("upload").style.display ="";
			
	}
	function showtextarea()
	{
		 document.getElementById("textarea").style.display="";
		  document.getElementById("append").style.display="";
			
	}
	function openfile()
	{
		var name=document.getElementById("autocomplete").value;
		var file=name;
		window.open(file);
	}
	function Emailfile()
	{
		var b=document.getElementById("autocomplete").value;
		document.getElementById("nameval").value=b;
		document.getElementById("uploadlist").style.display="none";
		document.getElementById("mail").style.display="block";
		
	}
	function validateEmail(email)
	 {
			em=email.value;
   			var emailReg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/ ;
		if(em == '')
		{

		document.getElementById('tomsg').innerHTML="<img src='images/bullet_error.png'>Enter Email address";
		return false;



		}
   		else if( !emailReg.test( em ) )
		 {
			document.getElementById('tomsg').innerHTML="<img src='images/bullet_error.png'>Please Enter valid Email address";
			document.getElementById('to').focus;
        		return false;
			
    		} 
		else 
		{
			document.getElementById("tomsg").innerHTML="";
       			 return true;
    		}
	}
	
	
</script>
<script type="text/javascript">
	$(function(){
	<?php
		$str=str_replace('/uploads/','', $arr);
		echo $str;
		$str1='"'.implode('","',$str).'"';
	?> 
    $( "#autocomplete").autocomplete
	({
		source:[<?php echo $str1; ?>] 
   	 });
});
		
</script>
</body>
</html>
