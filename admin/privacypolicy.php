
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

<script>


//for adding new indication
function addRow(tableID) {
  var table = document.getElementById(tableID);
  var rowCount = table.rows.length;
              // limit the user from creating fields more than your limits
    var row = table.insertRow(rowCount);
    var colCount = table.rows[0].cells.length;
    for(var i=0; i<colCount; i++) {
      var newcell = row.insertCell(i);
      newcell.innerHTML = table.rows[0].cells[i].innerHTML;
    }
  
}



function deleteRow(tableID) {
  var table = document.getElementById(tableID);
  var rowCount = table.rows.length;
  for(var i=0; i<rowCount; i++) {
    var row = table.rows[i];
    var chkbox = row.cells[0].childNodes[0];
    if(null != chkbox && true == chkbox.checked) {
      if(rowCount <= 1) {             // limit the user from removing all the fields
        alert("Cannot Remove all the Passenger.");
        break;
      }
      table.deleteRow(i);
      rowCount--;
      i--;
    }
  }
}

// Show Add block
function addBlock(){
     document.getElementsByName ("medicine-list")[0].style.display='none';
     document.getElementsByName ("add-new")[0].style.display='block';
}

//Medicine List Block
function showMedicine(){
   document.getElementsByName ("medicine-list")[0].style.display='block';
   document.getElementsByName ("add-new")[0].style.display='none';
} 


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
        <a href="index.php" style=:"float:left"><img src="../images/logo.jpg" 
          border="0" style="height:80px;width:90px;display:inline-block;position:relative;margin-top:0px;"></a>
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
       </strong> <a href="./logout.php">Logout</a></div>
      </div>
      <ul class="nav">
       
      </ul>
    </nav>
  </header>

  <!-- menu bar end -->
		</div>
<!-- medicine List Start Here -->
     <div style="display:block;" id="medicine-list" name="medicine-list">
   <p><center> <h2> <a href="./medicine.php">Edit Medicine list</a></h2> <h2> <a href="./privacypolicy.php">Edit Privacy Policy</a></h2> <h2> <a href="./terms-condition.php">Edit Terms Condition</a></h2></center> </p>
     <div style="font-family:'proxima-nova-condensed', 'Calibri', 'Cantarell', sans-serif;color:#69b010;font-size:15px;padding:10px;margin:10px;">
 
 <table width="100%" border="1" cellspacing="0" cellpadding="7"  style="margin-top:20px;;border:1px solid #AECFE4;display:block;color:#000;padding:10px;">
  <tr>
     <td colspan="7">  <center> <h2>Privacy Policy</h2> </center></td>
 </tr>
 <tr>
  
   
<?php
require_once('./config.php');
  $result = mysql_query("SELECT * FROM privacypolicy");
  $row = mysql_fetch_array($result);

echo '
<form action="edit-privacy.php" method="post">
<td><br></td>
   
      <table>
       <tr>
            <td>
           
   <textarea name="privacy" style="display: block;width:900px;height: 100px;padding: 8px 13px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;" value=" ">'.$row[0].'</textarea>
            </td>       
       </tr>
       </table>
        
        <input type="submit" value="Update" style="background:#02c0fe;height:30px;width:80px;border-radius:4px;cursor:pointer"/>
       <div style="background:#02c0fe;height:50px;width:100%;margin-bottom:0px;margin-top:40px">
       </div>
        

          </form> ';

   

?>
  </tr>
   </table>
</div>
</div>
<!-- Medicine List End here -->
</center>
<br><br><br><br>

<!--  End New Medicine Add -->
</div>

	  <!-- InstanceEndEditable -->
  </div>
 
		<div id="footer" class="floatleft">
			<div id="foot1" class="floatleft">
			</div>
			<div id="foot2" class="floatleft">
				<div id="foot21" class="floatleft">
				<div class="floatleft" style="padding:10px; width:15%;"><img src="../images/logo_footer.gif" border="0"></div>
				<div class="floatleft" style="padding: 1px 10px 10px; width: 75%;">
				  <p>&copy;&nbsp; Copyright 2014 Feronia Herbals. All rights reserved.</p></div>			
				</div>
				<div id="foot22" class="floatleft">
			 <div class="floatleft">
            <div class="floatleft" align="left" style="padding-right:5px; width:100px; border-right:1px dashed #97be3d;">
              <ul class="normal">
                <li ><a href="contact.php">Contact</a></li>
              </ul>
            </div>
            
            <div class="floatleft" align="left" style="padding-right:5px; width:130px;">
              <ul class="normal">
                <li ><a href="Privacy-policy.php">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="floatleft" align="left" style="padding-right:5px;width:130px;">
              <ul class="normal">
                <li ><a href="Terms-condition.php">Terms of Use</a></li>
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
