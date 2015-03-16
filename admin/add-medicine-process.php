<?php
$BX_NAME=$_POST['indication'];
$medicine_advantages=$_POST['advantage'];
$medicine_name=$_POST['medicine-name'];
$medicine_dose=$_POST['dose'];
$medicine_size=$_POST['size'];
$medicine_introduction=$_POST['introduction'];
$medicine_id=$_POST['id'];



include_once('config.php');
$sql = "INSERT INTO product (product_id,product_name,product_dose,product_packaging_size)VALUES ('$medicine_id', '$medicine_name', '$medicine_dose','$medicine_size')";
mysql_query($sql);
$sql1="INSERT INTO product_introduction (product_id,introduction)VALUES ('$medicine_id','$medicine_introduction')";
mysql_query($sql1);



?>
<table id="dataTable" class="form" border="1">
					<tbody>
					<?php foreach($BX_NAME as $a => $b){ ?>
						<tr>
							<p>
								<td >
									<?php echo $a+1; ?>
								</td>
								<td>
									
									<input type="text" readonly="readonly" name="BX_NAME[$a]" value="<?php echo $BX_NAME[$a]; ?>">
									<?php 
									$sql2 = "INSERT INTO product_indications (product_id,indication)VALUES ('$medicine_id', '$BX_NAME[$a]')";
									mysql_query($sql2);
									?>
								</td>
								
							</p>
						</tr>
					<?php } ?>
					</tbody>
 </table>

 <table id="dataTable" class="form" border="1">
					<tbody>
					<?php foreach($medicine_advantages as $c => $d){ ?>
						<tr>
							<p>
								<td >
									<?php echo $c+1; ?>
								</td>
								<td>
									
									<input type="text" readonly="readonly" name="medicine_advantages[$c]" value="<?php echo $medicine_advantages[$c]; ?>">
									<?php 
									$sql2 = "INSERT INTO product_advantages (product_id,advantages)VALUES ('$medicine_id', '$medicine_advantages[$c]')";
									mysql_query($sql2);
									header("location:medicine.php?Medicine+Added");
									?>
								</td>
								
							</p>
						</tr>
					<?php } ?>
					</tbody>
 </table>

