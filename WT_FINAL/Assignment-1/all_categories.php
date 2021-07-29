<?php include 'admin_header.php';
      include 'controllers/category_cntrl.php';
      $categories=getAllCategory();
?>

<html>
    <body>
        <fieldset>
            <legend><h3>All Categories</h3></legend>
            <table>
                <th>SL#</th>
                <th>Name</th>
                
                   
                <?php 
                $i=1;
                foreach($categories as $c){
                    echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>".$c["name"]."</td>";
                        echo '<td>
                        
                        <a href="edit_categories.php?id='.$c["id"].'"> 
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
        </fieldset>
    </body>
</html>

<?php include 'admin_footer.php'; ?>