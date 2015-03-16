
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
  <div style="display:block;float:right;font-size:40px;" Onclick="addBlock();">
          Add new <img src="../images/add.png" style="width:40px;height:40px;margin-top:20px;">
  </div>
  <div style="background:#02c0fe;height:80px;width:100%;margin-bottom:0px;margin-top:0px">
 </div>
 <table width="100%" border="1" cellspacing="0" cellpadding="7"  style="margin-top:20px;;border:1px solid #AECFE4;display:block;color:#000;padding:10px;">
  <tr>
     <td colspan="7">  <center> <h2>MEDININE LIST</h2> </center></td>
 </tr>
 <tr>
  
   
<?php
require_once('./config.php');
$result3 = mysql_query("SELECT * FROM product");
while($row3 = mysql_fetch_array($result3))
{ 
  $product_id=$row3['product_id'];
  $result = mysql_query("SELECT introduction FROM product_introduction WHERE product_id='$product_id'");
  $row = mysql_fetch_array($result);

echo '
<td><br></td>
   <table>
       <tr>

          <td>
          <input type="text" value="'.$row3['product_id'].'." name="imagechange" style="display: block;font-weight:bold;width:50px;height: 40px;padding: 8px 13px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;">
          </td>

          <td>
            <input type="text" value="'.$row3["product_name"].'" name="imagechange" style="display: block;width:200px;height: 40px;padding: 8px 13px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;">
          </td>
          
          <td>
            <input type="text" value="'.$row3["product_dose"].'" name="imagechange" style="display: block;width:300px;height: 40px;padding: 8px 13px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;">
          </td>
          <td>
            <input type="text" value="'.$row3["product_packaging_size"].'" name="imagechange" style="display: block;width:300px;height: 40px;padding: 8px 13px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;">
          </td>
        </tr>
     </table>
      <table>
       <tr>
            <td>
            <b>INTRODUCTION:</b>
              <textarea style="display: block;width:900px;height: 100px;padding: 8px 13px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;" value=" ">'.$row["introduction"].'</textarea>
            </td>       
       </tr>
       </table>
        <table>
       <tr>
            <td>
                  <b>INDICATION:</b>';
                  $result1 = mysql_query("SELECT * FROM product_indications WHERE product_id='$product_id'");
                  $sno=1;
while($row1 = mysql_fetch_array($result1))
{ 
  
    echo '<input type="text" value="'.$sno.'.'.$row1["indication"].'" name="imagechange" 
    style="display: block;width:900px;height: 20px;padding: 8px 13px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;">
    ';
          
          $sno++;
          }
           echo'</td> 
                  
       </tr>
       </table>
       <table>
       <tr>
            <td>
                  <b>ADVANTAGES:</b>';
                  $result2 = mysql_query("SELECT * FROM product_advantages WHERE product_id='$product_id'");
                  $sno=1;
while($row2 = mysql_fetch_array($result2))
{ 
  
    echo '<input type="text" value="'.$sno.'.'.$row2["advantages"].'" name="imagechange" 
    style="display: block;width:900px;height: 20px;padding: 8px 13px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;">';
          
          $sno++;
          }
           echo' </td> 
                  
       </tr>
       </table>
       <div style="background:#02c0fe;height:50px;width:100%;margin-bottom:0px;margin-top:40px">
       </div>
         
          </form> ';

   }

?>
  </tr>
   </table>
</div>
</div>
<!-- Medicine List End here -->
</center>
<div style="display:none" id="add-new" name="add-new">
<div style="background:#02c0fe;height:50px;width:100%;margin-bottom:0px;margin-top:140px">
 </div>
<!-- Add new Medicine -->
<br>
<br>
<h1>ADD NEW MEDICINE<h1> <br><br>
  <p Onclick="showMedicine();" style="cursor:pointer;float:left;margin-bottom:20px;"> Show Medicines List</p>
  <form action="add-medicine-process.php" class="register" method="POST">
<table>
  <tr>
     <td> ID  </td>

          <td> Medicine Name</td>
          
          <td>Medicine Dose</td>
          <td> Packaging Size</td>

    <tr>
       <tr>

          <td>
            <input type="text" value="Sl no.(Unique)" name="id" onfocus="if(this.value == 'Sl no.(Unique)') { this.value = ''; }" style="display: block;width:100px;height: 40px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;">
          </td>

          <td>
            <input type="text" value="Type Product Name" name="medicine-name" onfocus="if(this.value == 'Type Product Name') { this.value = ''; }" style="display: block;width:200px;height: 40px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;">
          </td>
          
          <td>
            <input type="text" value="Type Dose" name="dose" onfocus="if(this.value == 'Type Dose') { this.value = ''; }" style="display: block;width:300px;height: 40px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;">
          </td>
          <td>
            <input type="text" value="Type Packagin Size" name="size" onfocus="if(this.value == 'Type Packagin Size') { this.value = ''; }" style="display: block;width:300px;height: 40px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;">
          </td>
        </tr>
     </table>
      <table>
       <tr>
            <td>
              <br><br>
            <b>Introduction:</b>

              <textarea name="introduction" style="display: block;width:900px;height: 100px;padding: 8px 13px;font-size: 12px;
              line-height: 1.42857143;color: #555555;background-color: #ffffff;" value=" "></textarea>
            </td>       
       </tr>
       </table>





        <table>
       <tr>
            <td><br><br>
                  <b>Indication: </b><p onClick="addRow('dataTable')" style="cursor:pointer;float:right"> <img src="../images/add.png" style="heiight:20px;width:20px;">  Add Indications</p>
       
  <fieldset class="row1">
            <div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
      
        <p> 
          
          <!-- <input type="button" value="Remove Passenger" onClick="deleteRow('dataTable')"  />  -->
          
        </p>
               <table id="dataTable" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
             <td>
               <input id="inp1" type="text" onfocus="if(this.value == 'Start Typing Indications') { this.value = ''; }" value="Start Typing Indications" name="indication[]" style="display: block;width:900px;height: 20px;padding: 8px 13px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;">
           
             </td>
              </p>
                    </tr>
                    </tbody>
                </table>
        <div class="clear"></div>
            </fieldset>


          </td> 
                  
       </tr>
       </table>

       <table>
       <tr>
            <td>
                  <br><br><b>Advantages: </b><p style="cursor:pointer;float:right" onClick="addRow('dataTable2')"><img src="../images/add.png" style="heiight:20px;width:20px;"> Add Advantage  </p>

                  <fieldset class="row1">
            <div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
      
        <p> 
          
          <!-- <input type="button" value="Remove Passenger" onClick="deleteRow('dataTable')"  />  -->
          
        </p>
               <table id="dataTable2" class="form" border="1">
                  <tbody>
                    <tr>
                      <p>
             <td>
               <input type="text" value="Start Typing Advantages" name="advantage[]"  onfocus="if(this.value == 'Start Typing Advantages') { this.value = ''; }"
                     style="display: block;width:900px;height: 20px;padding: 8px 13px;font-size: 12px;line-height: 1.42857143;color: #555555;background-color: #ffffff;">
         
             </td>
              </p>
                    </tr>
                    </tbody>
                </table>
        <div class="clear"></div>
            </fieldset>
         

         </td> 
                  
       </tr>
       </table>
      <input type="submit" value="Submit" style="background:#02c0fe;height:30px;width:80px;border-radius:4px;cursor:pointer"/>
</form>
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
