<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$UpdateDeliveryDate = $Choices = $Remarks = "";
$UpdateDeliveryDate_err = $Choices_err = $Remarks_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
// Validate Update Delivery Date 
    $input_UpdateDeliveryDate = strtotime($_POST["UpdateDeliveryDate"]);
    $input_UpdateDeliveryDate=date('Y-m-d',$input_UpdateDeliveryDate);
    $UpdateDeliveryDate=$input_UpdateDeliveryDate;
  
    
    // Validate Choices
    $input_Choices = trim($_POST["Choices"]);
    if(empty($input_Choices)){
        $Choices_err = "Please choose one of the options:";     
    } else{
        $Choices=$input_Choices;
    }
    
    // Validate Remarks 
    $input_Remarks = strtotime($_POST["Remarks"]);
    $input_Remarks=date('Y-m-d',$input_Remarks);
    $Remarks=$input_Remarks;
    // Check input errors before inserting in database
    if(empty($Choices_err)){
        // Prepare an update statement
        $sql = "UPDATE obligo SET UpdateDeliveryDate=?, Choices=?, Remarks=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_UpdateDeliveryDate, $param_Choices, $param_Remarks, $param_id);
            
            // Set parameters
            $param_UpdateDeliveryDate = $UpdateDeliveryDate;
            $param_Choices = $Choices;
            $param_Remarks = $Remarks;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        
         
        // Close statement
        mysqli_stmt_close($stmt);
        }
    }  
    
    // Close connection
    mysqli_close($link);
}else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM obligo WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $UpdateDeliveryDate = $row["UpdateDeliveryDate"];
                    $Choices = $row["Choices"];
                    $Remarks = $row["Remarks"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
       
        
        // Close statement
        mysqli_stmt_close($stmt);
        } 
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update obligo Record</h2>
                    <p>Please edit the input values and submit to update the obligo record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Update Delivery Date</label>
                            <input type="Date" name="UpdateDeliveryDate" class="form-control"  <?php echo (!empty($UpdateDeliveryDate_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $UpdateDeliveryDate; ?>">
                            <span class="invalid-feedback"><?php echo $UpdateDeliveryDate_err;?></span>
                        </div>
                        <div class="form-group">
                            <label for='Choices'>Choose a Status that suit the Purchase Order:</label>
                            <select id="Choices" name="Choices" class="form-control"> 
                                <option value='Delivery date changed to next quarter or longer.'>Delivery date changed to next quarter or longer.</option> 
                                <option value='Goods in Transit - Shipment.'>Goods in Transit - Shipment.</option> 
                                <option value='Purchase order is cancelled or short closed.'>Purchase order is cancelled or short closed.</option> 
                                <option value='Purchase order to be cancelled or short closed. '>Purchase order to be cancelled or short closed. </option> 
                                <option value='Service performed or goods have been delivered. Goods receipt has been performed in SAP.'>Service performed or goods have been delivered. Goods receipt has been performed in SAP.</option> 
                                <option value='Service performed or goods have been delivered. Pending for good receipt in SAP.'>Service performed or goods have been delivered. Pending for good receipt in SAP.</option> 
                                <option value='Service to be performed or goods to be delivered by this month.'>Service to be performed or goods to be delivered by this month.</option> 
                                <option value='Service to be performed or goods to be delivered by this month. Good receipt will be performed by this month.'>Service to be performed or goods to be delivered by this month. Good receipt will be performed by this month.</option>
                            <?php echo (!empty($Choices_err)) ? 'is-invalid' : ''; ?>"><?php echo $Choices; ?>
                            <span class="invalid-feedback"><?php echo $Choices_err;?></span>
                            </select> 
                        </div>
                        <div class="form-group">
                            <label>Remarks</label>
                            <input type="date" name="Remarks" class="form-control <?php echo (!empty($Remarks_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Remarks; ?>">
                            <span class="invalid-feedback"><?php echo $Remarks_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
