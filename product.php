<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <!-- InstanceBegin template="/Templates/HUAE-ip.dwt" codeOutsideHTMLIsLocked="false" -->
   <head>
      <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
      <link href="css/common.css" rel="stylesheet" type="text/css">
      <link href="css/style.css" rel="stylesheet" type="text/css">
      <link href="css/menu.css" rel="stylesheet" type="text/css">
      <link href="css/primary.css" rel="stylesheet" type="text/css">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- InstanceBeginEditable name="doctitle" -->
      <title>Feronia Herbals Products</title>
      <meta name="description" content="Since our inception in 1930, We at Himalaya Herbal Healthcare made it our mission to bring you safe, natural and innovative formulas for a richer, happier life.">
      <meta name="keywords" content="Feronia ealthcare, Feronia herbals, Feronia product">
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
         <img src="./images/1.gif">
      </div>
      <div class="storewidth">
      <div id="content">
      <div id="header" class="floatleft">
         <!--menu bar start -->
         <header>
            <div style="display:block;height:80px;width:100%;">
        <a href="index.php" style=:"float:left"><img src="images/logo.jpg" border="0" style="height:80px;width:90px;display:inline-block;position:relative;margin-top:0px;"></a>
        <a href="./index.php"style="display:inline-block;position:absolute;margin-top:25px;font-family: 'Bauhaus 93', 'Comic Sans MS', 'Cantarell', sans-serif;font-size:40px;color:#02ca10;" >FERONIA</a>
      
        <img src="images/call.gif" border="0" style="float:right;height:40px;border-radius:10px;">
        <div style=" float:right;font-family:'proxima-nova-condensed', 'Calibri', 'Cantarell', sans-serif;color:#69b010;font-size:23px;padding:10px;">
          <i>Ask Our Doctor</i> <strong>+91 - 9903079963</strong></div>
      </div>
            <nav>
               <ul class="nav">
                  <li><a href="index.php" class="icon home"><span>Home</span></a></li>
                  <li><a href="index.php?#about-us">About Us</a></li>
                  <li class="dropdown">
                     <a href="./product.php">Our Products</a>
                     <ul>
                        <li><a href="temp.php">For Human</a></li>
                        <li><a href="product.php">For Veterinary</a></li>
                        <li><a href="temp.php">Cosmetics</a></li>
                     </ul>
                  </li>
                  <li><a href="temp.php">Research</a></li>
                  <li ><a href="ayurveda.php">About Ayurveda</a></li>
                  <li class="dropdown">
                     <a href="temp.php">Our Distributors/Stockist</a>
                     <ul class="large">
                        <li><a href="temp.php">Local Distributers</a></li>
                        <li><a href="temp.php">Sate Distributers</a></li>
                        <li><a href="temp.php">National Distributers</a></li>
                        <li><a href="temp.php">International Distributers</a></li>
                     </ul>
                  </li>
                  <li ><a href="contact.php">Contact Us</a></li>
                  <li><a href="temp.php">Future Plan</a></li>
               </ul>
            </nav>
         </header>
         <!-- menu bar end -->
      </div>
      <div id="region" class="floatleft">
         <!-- InstanceBeginEditable name="cinemascope" -->
         

            <?php
            include_once('./admin/config.php');
            $result3 = mysql_query("SELECT * FROM product");
while($row3 = mysql_fetch_array($result3))
{ 
  $product_id=$row3['product_id'];
  $result = mysql_query("SELECT introduction FROM product_introduction WHERE product_id='$product_id'");
  $row = mysql_fetch_array($result);

            ?>
            <div align="left" style="z-index:1;">
            <br><br> 
            <div class="dr_box-wrapper" >
               <div class="dr_box-left" style="width:900px;margin-bottom:30px;">
                  
                  <h2><?php echo $row3['product_id'];?>. <?php echo $row3['product_name'];?></h2>
                  
                  <hr>
                  Introduction:
                  <br><br><?php echo $row['introduction'];?>
                  
                  <hr>
                  <br>
                  Indications:
                  <?php
                  $result1 = mysql_query("SELECT * FROM product_indications WHERE product_id='$product_id'");
                  $sno=1;
               while($row1 = mysql_fetch_array($result1))
                     { 
                  ?>
                  <br><br><?php echo $sno; ?>.   <?php echo $row1["indication"];?>
                  
                    <?php $sno++;}?>
                  <hr>
                  <br>
                  <br>
                  Advantages:
                  <?php
                  $result2 = mysql_query("SELECT * FROM product_advantages WHERE product_id='$product_id'");
                  $snno=1;
while($row2 = mysql_fetch_array($result2))
{ 
                  ?>
                  <br><br><?php echo $snno; $snno++;?>.  <?php echo $row2["advantages"];?>
                  
                  <?php }?>
                  <hr>
                  Dose : <br>
                 <?php echo $row3['product_dose'];?><br><br>
                  
                  <br>
                  <hr>
                  PACKAGING SIZE  
                   
                  <br>
                 <?php echo $row3['product_packaging_size'];?>
               </div>
            </div>
            <br><br>
      </div>  
      <?php }?>
       <!-- wrapper End -->
            
               <!-- InstanceEndEditable -->
            <div id="footer" class="floatleft">
               <div id="foot1" class="floatleft">
               </div>
               <div id="foot2" class="floatleft">
                  <div id="foot21" class="floatleft">
                     <div class="floatleft" style="padding:10px; width:15%;"><img src="images/logo_footer.gif" border="0"></div>
                     <div class="floatleft" style="padding: 1px 10px 10px; width: 75%;">
                        <p>&copy;&nbsp; Copyright 2014 Feronia Herbals. All rights reserved.</p>
                     </div>
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
    </div>
   </div>
      <!-- Google analytics -->
      <!-- Google analytics -->
   </body>
   <!-- InstanceEnd -->
</html>