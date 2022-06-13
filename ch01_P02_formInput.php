<html>
<head>
	<link rel="stylesheet" type="text/css" href="mycss.css">
	<style>
		.field{
			text-align: right;
		}
	</style>
</head>
<body>

	<form>
		<table>
			<tr><td class="field"> first Name : </td> <td><input type='text' name='fname' required></td></tr>


			<tr><td class="field"> last Name : </td> <td><input type='text' name='lname'></td></tr>
			<tr><td class="field">Email :  </td> <td><input type='email' name='userEmail'></td></tr>
			
			<tr><td class="field">password :  </td> <td><input type='password' name='pass1'></td></tr>
			<tr><td class="field">re password :  </td> <td><input type='password' name='pass2'></td></tr>
			<tr><td style="text-align: center;" colspan="2"><button type="submit" name="submit"> Sign Up</button></td></tr>
		</table>


	</form>
		<?php
			if(isset($_GET["submit"]))
			{
				if($_GET['pass1'] == $_GET['pass2'])
				{
						echo " name : :".$_GET['fname'].", ".$_GET['lname']."<br>";
						echo "email : ".$_GET['userEmail'];		
				}
				else{
					echo "<script> alert('password doesnt match')</script>";
				}
			}
		?>
</body>
</html>
