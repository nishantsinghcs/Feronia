
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/HUAE-ip.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link href="../css/common.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../css/menu.css" rel="stylesheet" type="text/css">
<link href="../css/primary.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Feronia Herbals Products</title>
<meta name="description" content="Since our inception in 1930, We at Himalaya Herbal Healthcare made it our mission to bring you safe, natural and innovative formulas for a richer, happier life.">
<meta name="keywords" content="himalaya healthcare, himalaya herbals, himalaya product, himalaya face wash, natural product, ayurveda product, himalaya beauty">
<!-- InstanceEndEditable -->
<!-- Onload JS -->
<script type="text/javascript">
function myFunction(){
document.getElementById('jpg').style.display="none";
};
</script>
<!-- onload End -->
</head>
<body onload="myFunction()">
	<div id="jpg" style="height:100%;width:100%;padding:0px;background:#fff;position:absolute;z-index:9999;">
<img src="../images/1.gif">
</div>

<div class="storewidth">	
	<div id="content"> 
		<div id="header" class="floatleft">
			
			<!--menu bar start -->
			<header>
				<div style="display:block;height:80px;width:100%;">
        <a href="index.php" style=:"float:left"><img src="../images/logo.jpg" border="0" style="height:80px;width:90px;display:inline-block;position:relative;margin-top:0px;"></a>
        <a href="./index.php"style="display:inline-block;position:absolute;margin-top:25px;font-size:40px;color:#02ca10;" >Admin Panel</a>
      
 <div style=" float:right;font-family:'proxima-nova-condensed', 'Calibri', 'Cantarell', sans-serif;color:#69b010;font-size:23px;padding:10px;">
         <i>Welcome</i> <strong>
         <?php 
         session_start();
         if(isset($_SESSION['SESS_U_ID']))
         {
        
        echo $_SESSION['SESS_FIRST_NAME'];
      }
      else{
       header("location:login.php?LoginRequiredFromIndexPage");
      }
           ?>
       </strong><a href="./logout.php">Logout</a></div>
      </div>
      <ul class="nav">
       
      </ul>
    </nav>
  </header>

  <!-- menu bar end -->
		</div>
     <p><center> <h2> <a href="./medicine.php">Edit Medicine list</a></h2> <h2> <a href="./privacypolicy.php">Edit Privacy Policy</a></h2> <h2> <a href="./terms-condition.php">Edit Terms Condition</a></h2></center> </p>
		<div id="region" class="floatleft"><!-- InstanceBeginEditable name="cinemascope" -->
		
<br><br><br><br><br><br>

 <div style="font-family:'proxima-nova-condensed', 'Calibri', 'Cantarell', sans-serif;color:#69b010;font-size:15px;padding:10px;">
          



    <center>
 <table width="100%"  cellspacing="0" cellpadding="7">
        
      <tr>
         
  
    <table width="100%" border="1">
     <td colspan="7">  <center> <h2>HOME PAGE IMAGES</h2> </center></td>
          
          
    </tr>
        
   <tr>
        <td><b>S.No</b></td>
          <td><b>Image</b></td>
          
          <td><b>Image_name</b></td>
          
          <!--
          <td><b>Delete</b></td>
        -->
          
   </tr>
   <tr>
    <td>
      <br><br>
    </td>
   </tr>
   
<?php
require_once('./config.php');
$result3 = mysql_query("SELECT * FROM homepage_images");
while($row3 = mysql_fetch_array($result3))
{ 
  


   echo '<tr>
          
        <td><b>';echo $row3['id']; echo'</b></td>
          <form action="imagechanger.php" method="post" enctype="multipart/form-data"> 
          <input type="hidden" name="id" value="';echo $row3['id'];echo '">
          <input type="hidden" name="img_name" value="';echo $row3['image_name'];echo '">
          <td ><b><img src="../uploads/';echo $row3['image_name']; echo'" style="width:200px;height:50px;"/>
          <input type="file" name="fileToUpload" id="fileToUpload" ></b>
          <input type="submit" value="Update Image" name="imagechange">
          </form>
           </td>
         
          <td><b>';echo $row3['image_name']; echo'</b></td>
          </form>
        
          <!--
          <form name="delete" action="delete.php" method="POST">
           <input type="hidden" name="id" value="';echo $row3['id'];echo '">
           <input type="hidden" name="img-name" value="';echo $row3['image_name'];echo '">
          <td><b><input type="submit" value="Delete" name="delete"></b></td>
         </form>
         -->
   </tr>';

   }

?>
     </td>

     </tr>
     <br> <br>
   </table>
   <br> <br>
  <!--
   <div style="width:200px;height:30px;background:#009900;box-shadow:1px 2px 10px #000;display:block">
    <a href="./add-new-img.php" style="text-decoration:none;padding:2px;">Add New Image to the banner</a>
  </div>
-->
  
   </table>
   
</center>



	  <!-- InstanceEndEditable -->
  </div>
  <br> <br><br> <br><br> <br>
		<div id="footer" class="floatleft">
			<div id="foot1" class="floatleft">
			</div>
			<div id="foot2" class="floatleft">
				<div id="foot21" class="floatleft">
				<div class="floatleft" style="padding:10px; width:15%;"><img src="images/logo_footer.gif" border="0"></div>
				<div class="floatleft" style="padding: 1px 10px 10px; width: 75%;">
				  <p>&copy;&nbsp; Copyright 2014 Feronia Herbals. All rights reserved.</p></div>			
				</div>
				<div id="foot22" class="floatleft">
				<div class="floatleft">
						<div class="floatleft" align="left" style="padding-right:5px; width:100px; border-right:1px dashed #97be3d;">
							<ul class="normal">
								<li ><a href="contactus/index.htm">Contact</a></li>
							</ul>
						</div>
						<div class="floatleft" align="left" style="padding-right:5px; width:130px; border-right:1px dashed #97be3d;">
							<ul class="normal">
								<li ><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            <div class="floatleft" align="left" style="padding-right:5px; width:130px;">
              <ul class="normal">
                <li ><a href="temp.php">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="floatleft" align="left" style="padding-right:5px;width:130px;">
              <ul class="normal">
                <li ><a href="temp.php">Terms of Use</a></li>
							</ul>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Google analytics -->


<!-- Google analytics -->

</body>

<!-- InstanceEnd --></html>
