<?php
	require_once('./config.php');



?>
		<form action="./add-img-process.php" method="post" enctype="multipart/form-data">   
        
          <table align="center" bgcolor="#00FFFF" width="40%" height="40%">
          	<tr>
          	<td width="30px"> ID :</td>
		<td width="100px">	<input type="text" name="id" value=""></td>
          </tr>
          
      <tr>
           <td width="30px">SELECT IMAGE :</td>
		   <td width="100px"><input type="file" name="fileToUpload" id="fileToUpload"></b></td>
       </tr>
       <tr>
         <td  colspan="2" ><b> <center><input type="submit" value="Insert" name="newBanner"></center></b></td>
     </tr>
     	 </table>
        </form>