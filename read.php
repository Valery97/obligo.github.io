<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM obligo WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $Plant[] = $row["Plant"];
                $Purchasing_Document[] = $row["PurchasingDocument"];
                $Item[] = $row["Item"];
                $POITEM[] = $row["POITEM"];
                $Seq_No_of_Account_Assgt[] = $row["SeqNoOfAccountAssgt"];
                $Orders[] = $row["Orders"];
                $Purchasing_Doc_Type[] = $row["PurchasingDocType"];
                $Purch_doc_category[] = $row["PurchDocCategory"];
                $Created_By[] = $row["CreatedBy"];
                $Purchasing_Group[] = $row["PurchasingGroup"];
                $Purchaser[] = $row["Purchaser"];
                $Team[] = $row["Team"];
                $PO_history[] = $row["POHistory"];
                $Document_Date[] = $row["DocumentDate"];
                $Vendor[] = $row["VendorPlant"];
                $Short_Text[] = $row["ShortText"];
                $Material_Group[] = $row["MaterialGroup"];
                $Deletion_indicator[] = $row["DeletionIndicator"];
                $Item_Category[] = $row["ItemCategory"];
                $Acct_Assignment_Cat[] = $row["AcctAssignmentCat"];
                $Acc_assgt_quantity[] = $row["AccAssgtQuantity"];
                $Order_Quantity[] = $row["OrderQuantity"];
                $Order_Unit[] = $row["OrderUnit"];
                $Net_price[] = $row["NetPrice"];
                $Currency[] = $row["Currency"];
                $Price_unit[] = $row["PriceUnit"];
                $deliver_qty[] = $row["DeliveredQty"];
                $deliver_value[] = $row["DeliveredValue"];
                $invoice_qty[] = $row["InvoicedQty"];
                $invoice_val[] = $row["InvoicedValue"];
                $cost_center[] = $row["CostCenter"];
                $Gl_account[] = $row["GLAccount"];
                $Requisitioner[] = $row["Requisitioner"];
                $Delivery_Date[] = $row["DeliveryDate"];
                $UpdateDeliveryDate[] = $row["UpdateDeliveryDate"];
                $Status[] = $row["Choices"];
                $Remarks[] = $row["Remarks"];
                $Requester_Name[] = $row["RequesterName"];
                $Requester_Email[] = $row["RequesterEmail"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
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
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <div class="form-group">
                        <label>Plant</label>
                        <p><b><?php echo $row["Plant"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Purchasing Document</label>
                        <p><b><?php echo $row["PurchasingDocument"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>POITEM</label>
                        <p><b><?php echo $row["POITEM"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Seq. No. of Account Assgt</label>
                        <p><b><?php echo $row["SeqNoOfAccountAssgt"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Order</label>
                        <p><b><?php echo $row["Orders"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Purchasing Doc. Type</label>
                        <p><b><?php echo $row["PurchasingDocType"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Purch. doc. category</label>
                        <p><b><?php echo $row["PurchDocCategory"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Created By</label>
                        <p><b><?php echo $row["CreatedBy"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Purchasing Group</label>
                        <p><b><?php echo $row["PurchasingGroup"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Purchaser</label>
                        <p><b><?php echo $row["Purchaser"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>PO history/release documentation</label>
                        <p><b><?php echo $row["POHistory"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Document Date</label>
                        <p><b><?php echo $row["DocumentDate"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>VendorPlant</label>
                        <p><b><?php echo $row["VendorPlant"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>ShortText</label>
                        <p><b><?php echo $row["ShortText"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>MaterialGroup</label>
                        <p><b><?php echo $row["MaterialGroup"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>DeletionIndicator</label>
                        <p><b><?php echo $row["DeletionIndicator"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>ItemCategory</label>
                        <p><b><?php echo $row["ItemCategory"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Acct Assignment Cat.</label>
                        <p><b><?php echo $row["AcctAssignmentCat"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Acc. assgt quantity</label>
                        <p><b><?php echo $row["AccAssgtQuantity"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Order Quantity</label>
                        <p><b><?php echo $row["OrderQuantity"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Order Unit</label>
                        <p><b><?php echo $row["OrderUnit"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Net Price</label>
                        <p><b><?php echo $row["NetPrice"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Currency</label>
                        <p><b><?php echo $row["Currency"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Price unit</label>
                        <p><b><?php echo $row["PriceUnit"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Still to be delivered (qty)</label>
                        <p><b><?php echo $row["DeliveredQty"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Still to be delivered (value)</label>
                        <p><b><?php echo $row["DeliveredValue"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Still to be invoiced (qty)</label>
                        <p><b><?php echo $row["InvoicedQty"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Still to be invoiced (val.)</label>
                        <p><b><?php echo $row["InvoicedValue"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Cost Center</label>
                        <p><b><?php echo $row["CostCenter"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>G/L Account</label>
                        <p><b><?php echo $row["GLAccount"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Requisitioner</label>
                        <p><b><?php echo $row["Requisitioner"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Delivery Date</label>
                        <p><b><?php echo $row["DeliveryDate"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Update Delivery Date</label>
                        <p><b><?php echo $row["UpdateDeliveryDate"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <p><b><?php echo $row["Choices"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Remarks</label>
                        <p><b><?php echo $row["Remarks"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Requester Name</label>
                        <p><b><?php echo $row["RequesterName"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Requester Email</label>
                        <p><b><?php echo $row["RequesterEmail"]; ?></b></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>