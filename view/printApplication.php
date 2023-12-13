<?php include("../model/LeaveApplicationModel.php"); ?>
<?php
	
	if(isset($_SESSION['livApplicationId']))
	{
	?>
<!DOCTYPE html>
<html>

   <head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>GatePass Approval</title>
		    <link rel="icon" href="data:image/jpeg;base64,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" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">

		<!-- Custom CSS -->
		<link href="../assets/css/application.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<script type="text/javascript">
			window.print();
		</script>
		
   </head>
   
   <body>

   
		<img style="width: 100px; height: 100px; position: absolute; left: 90vw;" src="data:image/jpeg;base64,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"
					alt="logo" />
      
		<form>
			
			<table class="tableNoOne">
				<tr>
					<td class="tdStyleForImage"><img src="../assets/img/images/logo.png"></td>
					<td><center>Kumaraguru Women's Hostel<br><br><b>Gatepass Approval</b></center></td> 
					<td class="tdStyleForImage"><img src="../assets/img/images/blank.png"></td>
				</tr>
			</table>
			<br>
			<table class="tableNoTwo">
				<tr>
				</tr>
				<tr>
				</tr>
				<tr>
					<td style="text-decoration: underline;"><b>To the filled by the Aplicant:</b></td>
					<td><span class="alignLeft">Date: ... ... ... <?php echo date("Y/m/d"); ?></span></td>
				</tr>
			</table>
			<br>
			<table class="tableNoTwo">
				<tr>
					<td class="tableNoThreeOne">
						<TABLE class="tableNofour">
							
							<?php
								
								$empId = $_SESSION['livApplicationId'];
								//echo $empId;
								//unset($_SESSION['livApplicationId']);
								
								$objLeaveApplication = new LeaveApplication();
								$result = $objLeaveApplication->AppliedEmpInfo($empId);
								while($row = mysqli_fetch_array($result))
								{
									$applicantUserCodeNumber = $row['lEmployeeCodeNumberWhoApply'];
								
							?>
							
							<TR>
								<TD class="tdStyleNoUnderLine">Name</TD>
								<TD>: <?php echo $row['eFirstName']." ".$row['eLastName'] ?></TD>
							</TR>
								
							<TR>
								<TD class="tdStyleNoUnderLine">Code No.</TD>
								<TD>: <?php echo $row['lEmployeeCodeNumberWhoApply'] ?></TD>
							</TR>
							
							<TR>
								<TD class="tdStyleNoUnderLine">Department</TD>
								<TD>: <?php echo $row['dptName'] ?></TD>
							</TR>
							<TR>
								<TD class="tdStyleNoUnderLine">Designation</TD>
								<TD>: <?php echo $row['desiDesignationName'] ?></TD>
							</TR>
					   </TABLE>
					</td>
					<td class="tableNoThreeTwo">
						<TABLE class="tableNofour">
							<TR>
								<TD class="tdStyleNoUnderLine">Total Leave</TD>
								<TD>: <?php echo $row['lTotalLeaveDays'] ?> Day/s</TD>
							</TR>
							<TR>
								<TD class="tdStyleNoUnderLine">From : <?php echo $row['lLeaveFromDate'] ?></TD>
								<TD>To : <?php echo $row['lLeaveToDate'] ?></TD>
								
							</TR>
							<TR>
								<TD class="tdStyleNoUnderLine">Reasons : </TD>
								<TD>: <?php echo $row['lLeaveReason'] ?></TD>
							</TR>
							<TR>
							</TR>
					   </TABLE>
					</td>
				</tr>
			</table>
			<br>
			<table class="tableNoTwo">
				<tr>
					<td class="tableNoThreeOne">
						<TABLE class="tableNofour">
							<TR>
								<!-- <TD class="tdStyleNoUnderLine">Leave Type<br>(Please Mark)</TD> -->
								<TD class="tdStyleNoUnder">Home</TD>
								<TD>
								<?php 
								if($row['lLeaveId'] == 1) 
								{ ?>
									<img src="../assets/img/images/boxClicked.png">
								</TD>
								<?php
								}
								else
								{ ?>
								<img src="../assets/img/images/box.png"></TD>
								<?php
								}
								?>
							</TR>
							<TR>
								
								<TD class="tdStyleNoUnder">Outing</TD>
								<TD>
								<?php 
								if($row['lLeaveId'] == 2) 
								{ ?>
									<img src="../assets/img/images/boxClicked.png">
								</TD>
								<?php
								}
								else
								{ ?>
								<img src="../assets/img/images/box.png"></TD>
								<?php
								}
								?>
							</TR>
							<TR>
								<TD class="tdStyleNoUnder">Others</TD>
								<TD>
								<?php 
								if($row['lLeaveId'] == 3) 
								{ ?>
									<img src="../assets/img/images/boxClicked.png">
								</TD>
								<?php
								}
								else
								{ ?>
								<img src="../assets/img/images/box.png"></TD>
								<?php
								}
								?>
							</TR>
							<!-- <TR>
								<TD class="tdStyleNoUnder"> Maternity Leave</TD>
								<TD>
								<?php 
								if($row['lLeaveId'] == 4) 
								{ ?>
									<img src="../assets/img/images/boxClicked.png">
								</TD>
								<?php
								}
								else
								{ ?>
								<img src="../assets/img/images/box.png"></TD>
								<?php
								}
								?>
							</TR>

							<TR>
								<TD class="tdStyleNoUnder"> Paternity Leave</TD>
								<TD>
								<?php 
								if($row['lLeaveId'] == 5) 
								{ ?>
									<img src="../assets/img/images/boxClicked.png">
								</TD>
								<?php
								}
								else
								{ ?>
								<img src="../assets/img/images/box.png"></TD>
								<?php
								}
								?>
							</TR>

							<TR>
								<TD class="tdStyleNoUnder"> Bereavement Leave</TD>
								<TD>
								<?php 
								if($row['lLeaveId'] == 6) 
								{ ?>
									<img src="../assets/img/images/boxClicked.png">
								</TD>
								<?php
								}
								else
								{ ?>
								<img src="../assets/img/images/box.png"></TD>
								<?php
								}
								?>
							</TR>

							
							<TR>
								<TD class="tdStyleNoUnder"> Sabbatical Leave</TD>
								<TD>
								<?php 
								if($row['lLeaveId'] == 7) 
								{ ?>
									<img src="../assets/img/images/boxClicked.png">
								</TD>
								<?php
								}
								else
								{ ?>
								<img src="../assets/img/images/box.png"></TD>
								<?php
								}
								?>
							</TR>

							<TR>
								<TD class="tdStyleNoUnder"> Unpaid Leave</TD>
								<TD>
								<?php 
								if($row['lLeaveId'] == 8) 
								{ ?>
									<img src="../assets/img/images/boxClicked.png">
								</TD>
								<?php
								}
								else
								{ ?>
								<img src="../assets/img/images/box.png"></TD>
								<?php
								}
								?>
							</TR> -->

					   </TABLE>
					</td>
					<td class="tableNoThreeTwo">
						<TABLE class="tableNofour">
							<TR>
								<td class="tdStyle" rowspan="4" ></td>
								<TD><br></TD>
							</TR>
							<TR>
								<TD>&nbsp;</TD>
							</TR>
							<TR>
								<TD>&nbsp;</TD>
							</TR>
							
							<TR>
								<TD><span class="alignLeft">------------------------------<br><center>Student Signature</center><span></TD>
							</TR>
					   </TABLE>
					</td>
				</tr>
			</table>
			<br>
			<table class="tableNoTwo">
				<tr>
					<td class="tableNoThreeOne">
						<TABLE class="tableNofour">
							<TR>
								<TD class="tdStyle" colspan="2">Contact Address/number during leave</TD>
								
							</TR>							
							<TR>
								<TD class="tdStyleNoUnderLine">Student Contact Number</TD>
								<TD>: <?php echo $row['ePhoneNumberPersonal'] ?></TD>
							</TR>							
							<TR>
								<TD class="tdStyleNoUnderLine">Parent Contact Number</TD>
								<TD>: <?php echo $row['ePhoneNumberOffice'] ?></TD>
							</TR>
							<!-- <TR>
								<TD class="tdStyleNoUnderLine">Address</TD>
								<TD>: <?php echo $row['lEmployeeImargencyAddress'] ?></TD>
							</TR> -->
							<?php
								}
								?>
					   </TABLE>
					</td>
					<td class="tableNoThreeTwo">
						
					</td>
				</tr>
			</table>
			<br>
			
			<table class="tableNoTwo">
				<tr>
					<td class="tableNoThreeOne">
						<TABLE class="tableNofour">
							
							<TR>
								<TD>&nbsp;</TD>
							</TR>
							<TR>
								<TD><span class="alignRight">------------------------------<br><center>Recommended by</center><span></TD>
								<td class="tdStyle" rowspan="4" ></td>
							</TR>
					   </TABLE>
					</td>
					<td class="tableNoThreeTwo">
						<TABLE class="tableNofour">
							<TR>
								<td class="tdStyle" rowspan="4" ></td>
								<TD><br></TD>
							</TR>
							<TR>
								<TD><span class="alignLeft">------------------------------<br><center>Approved by</center><span></TD>
							</TR>
					   </TABLE>
					</td>
				</tr>
			</table>
			
			<hr class="hrLength">
			
			<!-- <b><center>For office use only</center></b></p>
			
			
			
			<table class="tableNoTwo">
				<tr>
					<td class="tableNoThreeOne">
						<TABLE class="tableNoSix">
							<TR>
								<td>Leave Name</td>
							</TR>
							<TR>
								<TD>Leave due</TD>
							</TR>
							<TR>
								<TD>Leave Requested for</TD>
							</TR>
							<TR>
								<TD>Leave Balance</TD>
							</TR>
					   </TABLE>
					</td>
					
					<td class="tableNoThreeOne">
						<TABLE class="border">
							<TR>
								<td class="border">CL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td class="border">SL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td class="border">EL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td class="border">ML&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td class="border">PL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td class="border">BL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td class="border">SL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td class="border">UL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td class="border">Total&nbsp;&nbsp;&nbsp;</td>
							</TR>
							<TR>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
							</TR>
							<TR>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
							</TR>
							<TR>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
								<td class="border">&nbsp;</td>
							</TR>
					   </TABLE>
						
					</td>
					
					<td class="tableNoThreeTwo">
						
					</td>
					
				</tr>
			</table>
			<br>
			<br>
			<table class="tableNoTwo">
				<tr>
					<td class="tableNoThreeOne">
						<TABLE class="tableNofour">
							
							<TR>
								<TD><span class="alignRight">------------------------------<br><center>HR Department</center><span></TD>
								
							</TR>
					   </TABLE>
					</td>
					<td class="tableNoThreeTwo">
						<TABLE class="tableNofour">
							
							<TR>
								<TD><span class="alignLeft">------------------------------<br><center>Approved By</center><span></TD>
							</TR>
					   </TABLE>
					</td>
				</tr>
			</table> -->
			
		</form>
   
   </body>
   
<html>
<?php
	
	unset($_SESSION['livApplicationId']);
	
	}
	else
	{
		header("Location:../view/LeaveApplication.php");
	}
?>