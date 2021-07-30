<?php
 include 'header.php';
 include 'controllers/studentctrl.php';
?>

<html>
    <body>
        <h5><?php echo $err_db; ?></h5>
        <fieldset>
        <p align="middle"><font color="blue" size="5">Add Students</font></p>
        
        <form action="" method="post">
		<table align="center">
            <tr>
              <td>Name</td>
              <td>: <input type="text" name="name" value="<?php echo $name;?>" placeholder="name"></td>
              <td><span><?php echo $err_name; ?></span></td>
			</tr>
			<tr>
              <td>DOB</td>
              <td>: <input type="text" name="dob" value="<?php echo $dob;?>" placeholder="date of birth"></td>
              <td><span><?php echo $err_dob; ?></span></td>
			</tr>
			<tr>
              <td>Credit</td>
              <td>: <input type="text" name="credit" value="<?php echo $credit;?>" placeholder="credit"></td>
              <td><span><?php echo $err_credit; ?></span></td>
			</tr>
			<tr>
              <td>CGPA</td>
              <td>: <input type="text" name="cgpa" value="<?php echo $cgpa;?>" placeholder="cgpa"></td>
              <td><span><?php echo $err_cgpa; ?></span></td>
			</tr>
			<tr>
              <td>Department Id</td>
              <td>: <input type="text" name="dept" value="<?php echo $dept;?>" placeholder="dept"></td>
              <td><span><?php echo $err_dept; ?></span></td>
			</tr>
			
		<tr>	
        <td><input type="submit" name="add" value="Add"></td>
		</tr>
		</table>
        </form>
        </fieldset>
    </body>
</html>

<?php include 'footer.php'; ?>