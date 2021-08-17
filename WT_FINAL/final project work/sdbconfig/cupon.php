<?php 
 include "db_config.php";
$cy = date("Y"); 
$Day_Err=$Month_Err=$Year_Err=$C_Type_Err=$Status_Err=$c_code_Err=$Discount_Err=$Use_Err=" ";
$Day=$Month=$Year=$C_Type=$Status=$c_code=$Discount=$Use=" ";
$c_code1=$Discount1=$Use1="";
$hasError=false;

    if (isset($_POST['create'])) 
    {

        // if(empty($_POST["c_code"])) 
        // {
        //   $C_Type_Err="please write your cupon";
        //   $hasError=true;
        // }
        // else       
        // {
        //   $C_Type=$_POST["c_code"];
          
        // }

        //=========Coupon Type===========
        if(empty($_POST["c_type"])) 
        {
          $C_Type_Err="Please Select Coupon Type";
          $hasError=true;

        }
        else       
        {
          $C_Type=$_POST["c_type"];
        }

        //=========Status===========
        if(empty($_POST["Status"])) 
        {
          $Status_Err="Please Select Status";
          $hasError=true;

        }
        else       
        {
          $Status=$_POST["Status"];
        }

        //=========Expires============
        if(empty($_POST["Day"])) 
        {
          $Day_Err="Please Select Day";
          $hasError=true;

        }
        else
        {
            $Day=$_POST["Day"];
        }
        if(empty($_POST["Month"])) 
        {
          $Month_Err="Please Select Month";
          $hasError=true;

        }
        else
        {
            $Month=$_POST["Month"];
        }
        if(empty($_POST["Year"])) 
        {
          $Year_Err="Please Select Year";
          $hasError=true;

        }
        else
        {
            $Year=$_POST["Year"];
        }

        //==================Coupon Code============
        $c_code1=$_POST["c_code"];
        if(empty($c_code1)) 
        {
          $c_code_Err="Please Enter Coupon Code";
          $hasError=true;

          
        }
        else
        {
            $c_code=$_POST["c_code"];
        }

        //=================Discount============
        $Discount1=$_POST["discount"];
        if(empty($Discount1)) 
        {
          $Discount_Err="Please Enter Discount Number";
          $hasError=true;

        }
        else if(!(is_numeric($Discount1)))
        {
            $Discount_Err="Please Enter Numeric Number";
          $hasError=true;

        }
        else
        {
            $Discount=$_POST["discount"];
        }

        // //==================Times To Use============
        // $Use1=$_POST["Use"];
        // if(empty($Use1)) 
        // {
        //   $Use_Err="Please Enter Time To Use Number";
        // }
        // else if(!(is_numeric($Use1)))
        // {
        //     $Use_Err="Please Enter Numeric Number";
        // }
        // else if (!isset($_POST['checkbox1'])) 
        // {
        //     $Use_Err = "Please Mark the Checkbox";
        // }  
        // else
        // {
        //     $Use=$_POST["Use"];
        // }

        if(!$hasError) {
            $temp=$Day."/".$Month."/".$Year;

            $rs = InsertCoupon($c_code, $C_Type, $Status, $temp, $Discount);
            
            if ($rs === true)
            {
                
                echo "<script>alert('Support Submitted!');</script>";
                
                
                
            }
        }

        

    }
    function InsertCoupon($c_code, $C_Type, $Status, $temp, $Discount){
	
        $query = "INSERT INTO coupon values (NULL,'$c_code', '$C_Type', '$Status', '$temp','$Discount')";
        return execute($query);
    }
     

?>
<!DOCTYPE html>
<html>
<head>
    <title>Add New Coupon</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <fieldset>
        <legend><h3>Add New Coupon</h3></legend>  
            <table>
                <tr>
                    <td><label>Coupon Code</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td>
                    <td><input type="text" name="c_code" value="<?php echo $c_code1; ?>"></td>
                    <td> <?php echo $c_code_Err; ?> </td>
                </tr>
            </table>

            <table>
                <tr> 
                    <td><label>Coupon Type</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td> 
                    <td><select name="c_type">
                        <option disabled selected>% Off</option>
                        <?php for ($j=5; $j <= 80 ; $j=$j+5) 
                        { 
                            # code...
                        ?>
                        <option value="<?php echo $j; ?>" <?php if ($C_Type == $j) echo ' selected="selected"'; ?>><?php echo $j."%"; ?></option> 
                        <?php } ?>
                    </select></td>
                    <td>         
                        <?php echo $C_Type_Err; ?>   
                    </td>
                </tr>
            </table> 

            <table>
                <tr>
                    <td><label>Discount</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td>
                    <td><input type="text" name="discount" value="<?php echo $Discount1; ?>"></td>
                    <td> <?php echo $Discount_Err; ?> </td>
                </tr>
            </table>

             <table>
                <tr>
                    <td><label>Times To Use</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td>
                    <td><input type="text" name="Use" value="<?php echo $Use1;?>"></td>
                    <td></td>
                    <td><input type="checkbox" name="checkbox1" value="">Per Logged in Customer</td>
                    <td><?php echo $Use_Err;?></td>
                </tr>
            </table>

            <table>
                <tr> 
                    <td><label>Status</label></td>
                    <td><label>:</label></td>
                    <td><label>*</label></td> 
                    <td><select name="Status">
                        <option disabled selected>None</option>
                        <option value="Active" <?php if ($Status == 'Active') echo ' selected="selected"'; ?>>Active</option>
                        <option value="Deactive" <?php if ($Status == 'Deactive') echo ' selected="selected"'; ?>>Deactive</option>
                    </select></td>
                    <td>
                        <?php echo $Status_Err ?>
                    </td>
                </tr>
            </table> 

            <table>
                <tr>
                    <td>
                        <label >Expires : </label>
                        <select name="Day"> 
                        <option disabled selected>Day</option>
                        <?php for ($i=1; $i <= 31 ; $i++) 
                        { 
                            # code...
                        ?>
                        <option value="<?php echo $i; ?>" <?php if ($Day == $i) echo ' selected="selected"'; ?>><?php echo $i; ?></option> 
                        <?php } ?>
                        </select>
                    </td>
                    <td>
                        <select name="Month"> 
                        <option disabled selected>Month</option>
                        <?php for ($i=1; $i <= 12 ; $i++) 
                        { 
                            # code...
                        ?>
                        <option value="<?php echo $i; ?>" <?php if ($Month == $i) echo ' selected="selected"'; ?>><?php echo $i; ?></option> 
                        <?php } ?>
                        </select>
                    </td>
                    <td>
                        <select  name="Year"> 
                        <option disabled selected>Year</option>
                        <?php for ($i=1900; $i <= $cy ; $i++) 
                        { 
                            # code...
                        ?>
                        <option value="<?php echo $i; ?>" <?php if ($Year == $i) echo ' selected="selected"'; ?>><?php echo $i; ?></option> 
                        <?php } ?>
                        </select>
                    </td>
                    <td>
                        <?php echo $Day_Err; ?>
                        <?php echo $Month_Err; ?>
                        <?php echo $Year_Err; ?>
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <input type="submit" name="create">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>