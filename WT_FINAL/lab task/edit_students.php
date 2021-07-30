<?php include 'header.php';
      include 'controllers/studentctrl.php';
      $std=getAllStudents();
?>

<html>
    <body>
        <fieldset>
            <p align="middle"><font color="blue" size="5">All Students</font></p>
            <p align="middle">
			<table>
               <th>Id</th>
			   <th>Name</th>
			   <th>DOB</th>
			   <th>Credit</th>
			   <th>CGPA</th>
			   <th>Dept_Id</th>
				
                
                   
                <?php 
                $i=1;
                foreach($std as $c){
                    echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>".$c["name"]."</td>";
						echo "<td>".$c["dob"]."</td>";
						echo "<td>".$c["credit"]."</td>";
						echo "<td>".$c["cgpa"]."</td>";
						echo "<td>".$c["dept_id"]."</td>";
                        echo '<td>
                        
                        <a href="edit_students.php?id='.$c["id"].'"> 
                        <input type="button" value="Edit">
                        </a>
                        </td>
                    <td>
                        
                        <a href="#"> 
                        <input type="button" value="Delete">
                        </a>
                    </td>';
                    echo "</tr>";
                    $i++;
                }
                ?>
                

            </table>
			</p>
        </fieldset>
    </body>
</html>

<?php include 'footer.php'; ?>