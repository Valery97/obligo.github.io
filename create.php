<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$UpdateDeliveryDate = $Choices = $Remarks = $Plant= $PurchasingDocument=$Item=$POITEM=$SeqNoOfAccountAssgt=$Orders=$PurchasingDocType=$PurchDocCategory=$CreatedBy=$PurchasingGroup=$Purchaser=$Team=$POHistory=$DocumentDate=$VendorPlant=$ShortText=$MaterialGroup=$DeletionIndicator=$ItemCategory=$AcctAssignmentCat=$AccAssgtQuantity=$OrderQuantity=$OrderUnit=$NetPrice=$Currency=$PriceUnit=$DeliveredQty=$DeliveredValue=$InvoicedQty=$InvoicedValue=$CostCenter=$GLAccount=$Requisitioner=$DeliveryDate=$RequesterName=$RequesterEmail="";
$UpdateDeliveryDate_err = $Choices_err = $Remarks_err =$Plant_err=$PurchasingDocument_err=$Item_err=$POITEM_err=$SeqNoOfAccountAssgt_err=$Orders_err=$PurchasingDocType_err=$PurchDocCategory_err=$CreatedBy_err=$PurchasingGroup_err=$Purchaser_err=$Team_err=$POHistory_err=$DocumentDate_err=$VendorPlant_err=$ShortText_err=$MaterialGroup_err=$DeletionIndicator_err=$ItemCategory_err=$AcctAssignmentCat_err=$AccAssgtQuantity_err=$OrderQuantity_err=$OrderUnit_err=$NetPrice_err=$Currency_err=$PriceUnit_err=$DeliveredQty_err=$DeliveredValue_err=$InvoicedQty_err=$InvoicedValue_err=$CostCenter_err=$GLAccount_err=$Requisitioner_err=$DeliveryDate_err=$RequesterEmail_err=$RequesterName_err="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    //validate Plant 
    $input_Plant=trim($_POST["Plant"]);
        if(empty($input_Plant)){
            $Plant_err="Please enter a valid Plant ID.";
        }
 else{
            $Plant=$input_Plant;
        }
    
    //Validate Purchasing Document
    $input_PurchasingDocument=trim($_POST['PurchasingDocument']);
    if (empty($input_PurchasingDocument)){
        $PurchasingDocument_err="Please key in a valid Purchasing Document number.";
    }
    else{
        $PurchasingDocument=$input_PurchasingDocument;
    }
    
    //Validate Item 
    $input_Item=trim($_POST["Item"]);
    if (empty($input_Item)){
        $Item_err="Please enter the Item Number.";
    }else{
        $Item=$input_Item;
    }
   
    //validate POITEM 
    $input_POITEM= trim($_POST["POITEM"]);
    if(empty($input_POITEM)){
        $POITEM_err="Please enter the POITEM number.";
    }else{
        $POITEM=$input_POITEM;
    }

    //validate Seq.no of Account Assgt
    $input_SeqNoOfAccountAssgt=trim($_POST["SeqNoOfAccountAssgt"]);
    if(empty($input_SeqNoOfAccountAssgt)){
        $SeqNoOfAccountAssgt_err="Please enter a value.";
    }else{
        $SeqNoOfAccountAssgt=$input_SeqNoOfAccountAssgt;
    }

    //validate Orders 
    $input_Orders=trim($_POST["Orders"]);
    if(empty($input_Orders)){
        $Orders_err="Please enter a value.";
    }else{
        $Orders=$input_Orders;
    }

    //validate PurchasingDocType
    $input_PurchasingDocType= trim($_POST["PurchasingDocType"]);
    if (empty($input_PurchasingDocument)){
        $PurchasingDocType_err="Please enter a value.";
    }else{
        $PurchasingDocType=$input_PurchasingDocType;
    }

    //Validate PurchDocCategory
    $input_PurchDocCategory=trim($_POST["PurchDocCategory"]);
        if (empty($input_PurchDocCategory)){
            $PurchasingDocCategory_err="Please enter a value.";
        }else{
            $PurchDocCategory=$input_PurchDocCategory;
        }

    //Validate CreatedBy    
    $input_CreatedBy= trim($_POST["CreatedBy"]);
        if(empty($input_CreatedBy)){
            $CreatedBy_err="Please enter a value.";
        }else{
            $CreatedBy=$input_CreatedBy;
        }

    //Validate Purchasing Group 
    $input_PurchasingGroup=trim($_POST["PurchasingGroup"]);
    if(empty($input_PurchasingGroup)){
        $PurchasingGroup_err="Please enter a value.";
    }else{
        $PurchasingGroup=$input_PurchasingGroup;
    }

    //Validate Purchaser
    $input_Purchaser=trim($_POST['Purchaser']);
    if(empty($input_Purchaser)){
        $Purchaser_err="Please enter a value.";
    }else{
        $Purchaser=$input_Purchaser;
    }

    //Validate Team 
    $input_Team=trim($_POST["Team"]);
    if(empty($input_Team)){
        $Team_err="Please enter a value.";
    }else{
        $Team=$input_Team; 
    }

    //Validate PO history/release documentation
    $input_POHistory=trim($_POST["POHistory"]);
    if(empty($input_POHistory)){
        $POHistory_err="Please enter a value.";
    }else{
        $POHistory=$input_POHistory; 
    }

    //Validate Document Date
    $input_DocumentDate=trim($_POST["DocumentDate"]);
    if(empty($input_DocumentDate)){
        $DocumentDate_err="Please enter a value.";
    }else{
        $DocumentDate=$input_DocumentDate; 
    }

    //Validate Vendor/supplying Plant 
    $input_VendorPlant=trim($_POST["VendorPlant"]);
    if(empty($input_VendorPlant)){
        $VendorPlant_err="Please enter a value.";
    }else{
        $VendorPlant=$input_VendorPlant; 
    }

    //Validate Short Text 
    $input_ShortText=trim($_POST["ShortText"]);
    if(empty($input_ShortText)){
        $ShortText_err="Please enter a value.";
    }else{
        $ShortText=$input_ShortText; 
    }

    //Validate Material Group 
    $input_MaterialGroup=trim($_POST["MaterialGroup"]);
    if (empty($input_MaterialGroup)){
        $MaterialGroup_err="Please enter a value.";
    }else{
        $MaterialGroup=$input_MaterialGroup;
    }

    //Validate Deletion Indicator 
    $input_DeletionIndicator=trim($_POST["DeletionIndicator"]);
    if (empty($input_DeletionIndicator)){
        $DeletionIndicator_err="Please enter a value.";
    }else{
        $DeletionIndicator=$input_DeletionIndicator;
    }

    //Validate Item Category 
    $input_ItemCategory=trim($_POST['ItemCategory']);
    if (empty($input_ItemCategory)){
        $ItemCategory_err="Please enter a value.";
    }else{
        $ItemCategory=$input_ItemCategory;
    }

    //validate Acct Assignment Cat
    $input_AcctAssignmentCat=trim($_POST['AcctAssignmentCat']);
    if (empty($input_AcctAssignmentCat)){
        $AcctAssignmentCat_err="Please enter a value.";
    }else{
        $AcctAssignmentCat=$input_AcctAssignmentCat;
    }

    //Validate Acc.assgt Quantity 
    $input_AccAssgtQuantity=trim($_POST["AccAssgtQuantity"]);
    if (empty($input_AccAssgtQuantity)){
        $AccAssgtQuantity_err="Please enter a value.";
    }else{
        $AccAssgtQuantity=$input_AccAssgtQuantity;
    }

    //Validate Order Quantity
    $input_OrderQuantity=trim($_POST["OrderQuantity"]);
    if(empty($input_OrderQuantity)){
        $OrderQuantity_err="Please enter a value.";
    }else{
        $OrderQuantity=$input_OrderQuantity;
    }
    
    //validate Order Unit 
    $input_OrderUnit= trim($_POST["OrderUnit"]);
    if(empty($input_OrderUnit)){
        $OrderUnit_err="Please enter a value.";
    }else{
        $OrderUnit=$input_OrderUnit;
    }

    //Validate Net Price 
    $input_NetPrice= trim($_POST["NetPrice"]);
    if(empty($input_NetPrice)){
        $NetPrice_err="Please enter a value.";
    }else{
        $NetPrice=$input_NetPrice;
    }

    //Validate Currency 
    $input_Currency= trim($_POST["Currency"]);
    if(empty($input_Currency)){
        $Currency_err="Please enter a value.";
    }else{
        $Currency=$input_Currency;
    }

    //Validate Price Unit
    $input_PriceUnit=trim($_POST['PriceUnit']);
    if(empty($input_PriceUnit)){
        $PriceUnit_err="Please enter a value.";
    }else{
        $PriceUnit=$input_PriceUnit;
    }

    //validate still to be delivered(qty)
    $input_DeliveredQty=trim($_POST['DeliveredQty']);
    if(empty($input_DeliveredQty)){
        $DeliveredQty_err="Please enter a value.";
    }else{
        $DeliveredQty=$input_DeliveredQty;
    }

    //Validate still to be delivered(value) 
    $input_DeliveredValuet=trim($_POST['DeliveredValue']);
    if(empty($input_DeliveredValue)){
        $DeliveredValue_err="Please enter a value.";
    }else{
        $DeliveredValue=$input_DeliveredValue;
    }

    //validate Still to be invoiced(qty)
    $input_InvoicedQty=trim($_POST['InvoicedQty']);
    if(empty($input_InvoicedQty)){
        $InvoicedQty_err="Please enter a value.";
    }else{
        $InvoicedQty=$input_InvoicedQty;
    }

    //validate Still to be invoiced(value)
    $input_InvoicedValue=trim($_POST['InvoicedValue']);
    if(empty($input_InvoicedValue)){
        $InvoicedValue_err="Please enter a value.";
    }else{
        $InvoicedValue=$input_InvoicedValue;
    }

    //validate Cost Center 
    $input_CostCenter=trim($_POST['CostCenter']);
    if(empty($input_CostCenter)){
        $CostCenter_err="Please enter a value.";
    }else{
        $CostCenter=$input_CostCenter;
    }

     //validate GL Account
    $input_GLAccount=trim($_POST['GLAccount']);
    if(empty($input_GLAccount)){
        $GLAccount_err="Please enter a value.";
    }else{
        $GLAccount=$input_GLAccount;
    }

     //validate Requisitioner
    $input_Requisitioner=trim($_POST['Requisitioner']);
    if(empty($input_Requisitioner)){
        $Requisitioner_err="Please enter a value.";
    }else{
        $Requisitioner=$input_Requisitioner;
    }
    
    //validate Delivery Date
    $input_DeliveryDate=trim($_POST['DeliveryDate']);
    if(empty($input_DeliveryDate)){
        $DeliveryDate_err="Please enter a date.";
    }else{
         $DeliveryDate=$input_DeliveryDate;
    }

    // Validate Update Delivery Date
    $input_UpdateDeliveryDate = trim($_POST["UpdateDeliveryDate"]);
    if(empty($input_UpdateDeliveryDate)){
        $UpdateDeliveryDate_err = "Please enter a valid Update Delivery Date:";
    }else{
        $UpdateDeliveryDate = $input_UpdateDeliveryDate;
    }

    // Validate Remarks
    $input_Choices = trim($_POST["Choices"]);
    if(empty($input_Choices)){
        $Choices_err = "Please enter a valid Remarks:";
    }else{
        $Choices = $input_Choices;
    }

    // Validate RequesterName
    $input_RequesterName = trim($_POST["RequesterName"]);
    if(empty($input_RequesterName)){
    $RequesterName_err = "Please enter a valid Requester Name:";
    }else{
        $RequesterName = $input_RequesterName;
    }

    // Validate RequesterEmail
    $input_RequesterEmail = trim($_POST["RequesterEmail"]);
    if(empty($input_RequesterEmail)){
    $RequesterEmail_err = "Please enter a valid Requester Emails:";
    }else{
        $RequesterEmail = $input_RequesterEmail;
    }
    // Check input errors before inserting in database
    if(empty($RequesterEmail_err) && empty($RequesterName_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO obligo (Plant,PurchasingDocument,Item,POITEM,SeqNoOfAccountAssgt,Orders,PurchasingDocType,PurchDocCategory,CreatedBy,PurchasingGroup,Purchaser,Team,POHistory,DocumentDate,VendorPlant,ShortText,MaterialGroup,DeletionIndicator,ItemCategory,AcctAssignmentCat,AccAssgtQuantity,OrderQuantity,OrderUnit,NetPrice,Currency,PriceUnit,DeliveredQty,DeliveredValue,InvoicedQty,InvoicedValue,CostCenter,GLAccount,Requisitioner,DeliveryDate,UpdateDeliveryDate,Choices,Remarks,RequesterName,RequesterEmail) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
  
        if($stmt = mysqli_prepare($link, $sql)){
            header("location: index.php");
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt,"sssssssssssssssssssssssssssssssssssssss",$param_Plant,$param_PurchasingDocument,$param_Item,$param_POITEM,$param_SeqNoOfAccountAssgt,$param_Orders,$param_PurchasingDocType,$param_PurchDocCategory,$param_CreatedBy,$param_PurchasingGroup,$param_Purchaser,$param_Team,$param_POHistory,$param_DocumentDate,$param_VendorPlant,$param_ShortText,$param_MaterialGroup,$param_DeletionIndicator,$param_ItemCategory,$param_AcctAssignmentCat,$param_AccAssgtQuantity,$param_OrderQuantity,$param_OrderUnit,$param_NetPrice,$param_Currency,$param_PriceUnit,$param_DeliveredQty,$param_DeliveredValue,$param_InvoicedQty,$param_InvoicedValue,$param_CostCenter,$param_GLAccount,$param_Requisitioner,$param_DeliveryDate,$param_UpdateDeliveryDate,$param_Choices,$param_Remarks,$param_RequesterName,$param_RequesterEmail);
            
            // Set parameters
            $param_Plant=$Plant;
            $param_PurchasingDocument=$PurchasingDocument;
            $param_Item=$Item;
            $param_POITEM=$POITEM;
            $param_SeqNoOfAccountAssgt=$SeqNoOfAccountAssgt;
            $param_Orders=$Orders;
            $param_PurchasingDocType=$PurchasingDocType;
            $param_PurchDocCategory=$PurchDocCategory;
            $param_CreatedBy=$CreatedBy;
            $param_PurchasingGroup=$PurchasingGroup;
            $param_Purchaser=$Purchaser;
            $param_Team=$Team;
            $param_POHistory=$POHistory;
            $param_DocumentDate=$DocumentDate;
            $param_VendorPlant=$VendorPlant;
            $param_ShortText=$ShortText;
            $param_MaterialGroup=$MaterialGroup;
            $param_DeletionIndicator=$DeletionIndicator;
            $param_ItemCategory=$ItemCategory;
            $param_AcctAssignmentCat=$AcctAssignmentCat;
            $param_AccAssgtQuantity=$AccAssgtQuantity;
            $param_OrderQuantity=$OrderQuantity; 
            $param_OrderUnit=$OrderUnit; 
            $param_NetPrice=$NetPrice; 
            $param_Currency=$Currency; 
            $param_PriceUnit=$PriceUnit;
            $param_DeliveredQty=$DeliveredQty;
            $param_DeliveredValue=$DeliveredValue;
            $param_InvoicedQty=$InvoicedQty;
            $param_InvoicedValue=$InvoicedValue;
            $param_CostCenter=$CostCenter;
            $param_GLAccount=$GLAccount;
            $param_Requisitioner=$Requisitioner;
            $param_DeliveryDate=$DeliveryDate;
            $param_UpdateDeliveryDate = $UpdateDeliveryDate;
            $param_Choices = $Choices;
            $param_Remarks = $Remarks;
            $param_RequesterName=$RequesterName;
            $param_RequesterEmail=$RequesterEmail;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
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
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add obligo record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="form-group"> 
                            <label for='Plant'>Plant</label>
                            <select id='Plant' name='Plant' class='form-control'> 
                            <option value='4710'>4710</option> 
                            <option value='4720'>4720</option> 
                            <option value='4800'>4800</option> 
                            <?php echo (!empty($Plant_err)) ? 'is-invalid' : ''; ?>"><?php echo $Plant; ?>
                            <span class="invalid-feedback"><?php echo $Plant_err;?></span> 
                        </select>
                    </div>
            
                    <div class="form-group">
                        <label>Purchasing Document</label>
                        <input type="Text" name="PurchasingDocument" class="form-control" <?php echo (!empty($PurchasingDocument_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $PurchasingDocument; ?>">
                        <span class="invalid-feedback"><?php echo $PurchasingDocument_err;?></span>
                    </div>
  
                    <div class="form-group">
                        <label>Item</label>  
                        <input type="Textarea" name="Item" class="form-control"  <?php echo (!empty($Item_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Item; ?>">
                        <span class="invalid-feedback"><?php echo $Item_err;?></span>
                    </div>
                    
                    <div class="form-group"> 
                        <label> POITEM </label>
                        <input type="Textarea" name="POITEM" class="form-control"<?php echo (!empty($POITEM_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $POITEM; ?>">
                        <span class="invalid-feedback"><?php echo $POITEM_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Seq.No Of Account Assgt</label>
                        <input type="Textarea" name="SeqNoOfAccountAssgt" class="form-control" <?php echo (!empty($SeqNoOfAccountAssgt_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $SeqNoOfAccountAssgt; ?>">
                        <span class="invalid-feedback"><?php echo $SeqNoOfAccountAssgt_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Order</label>
                        <input type="Textarea" name="Orders" class="form-control" <?php echo (!empty($Orders_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Orders; ?>">
                        <span class="invalid-feedback"><?php echo $Orders_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Purchasing Doc.Type</label>
                        <input type="Textarea" name="PurchasingDocType" class="form-control" <?php echo (!empty($PurchasingDocType_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $PurchasingDocType; ?>">
                        <span class="invalid-feedback"><?php echo $PurchasingDocType_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Purch. doc. category</label>
                        <input type="Textarea" name="PurchDocCategory" class="form-control" <?php echo (!empty($PurchDocCategory_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $PurchDocCategory; ?>">
                        <span class="invalid-feedback"><?php echo $PurchDocCategory_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Created By</label>
                        <input type="Textarea" name="CreatedBy" class="form-control" <?php echo (!empty($CreatedBy_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $CreatedBy; ?>">
                        <span class="invalid-feedback"><?php echo $CreatedBy_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Purchasing Group</label>
                        <input type="Textarea" name="PurchasingGroup" class="form-control" <?php echo (!empty($PurchasingGroup_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $PurchasingGroup; ?>">
                        <span class="invalid-feedback"><?php echo $PurchasingGroup_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Purchaser</label>
                        <input type="Textarea" name="Purchaser" class="form-control" <?php echo (!empty($Purchaser_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Purchaser; ?>">
                        <span class="invalid-feedback"><?php echo $Purchaser_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Team</label>
                        <input type="Textarea" name="Team" class="form-control" <?php echo (!empty($Team_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Team; ?>">
                        <span class="invalid-feedback"><?php echo $Team_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>PO History/release documentation</label>
                        <input type="Textarea" name="POHistory" class="form-control" <?php echo (!empty($POHistory_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $POHistory; ?>">
                        <span class="invalid-feedback"><?php echo $POHistory_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Document Date</label>
                        <input type="Date" name="DocumentDate" class="form-control" <?php echo (!empty($DocumentDate_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $DocumentDate; ?>">
                        <span class="invalid-feedback"><?php echo $DocumentDate_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Vendor/Supplying Plant </label>
                        <input type="TextArea" name="VendorPlant" class="form-control" <?php echo (!empty($VendorPlant_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $VendorPlant; ?>">
                        <span class="invalid-feedback"><?php echo $VendorPlant_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Short Text </label>
                        <input type="TextArea" name="ShortText" class="form-control" <?php echo (!empty($ShortText_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ShortText; ?>">
                        <span class="invalid-feedback"><?php echo $ShortText_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Material Group </label>
                        <input type="TextArea" name="MaterialGroup" class="form-control" <?php echo (!empty($MaterialGroup_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $MaterialGroup; ?>">
                        <span class="invalid-feedback"><?php echo $MaterialGroup_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Deletion Indicator </label>
                        <input type="TextArea" name="DeletionIndicator" class="form-control" <?php echo (!empty($DeletionIndicator_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $DeletionIndicator; ?>">
                        <span class="invalid-feedback"><?php echo $DeletionIndicator_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Item Category </label>
                        <input type="TextArea" name="ItemCategory" class="form-control" <?php echo (!empty($ItemCategory_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ItemCategory; ?>">
                        <span class="invalid-feedback"><?php echo $ItemCategory_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Acct Assignment Category </label>
                        <input type="TextArea" name="AcctAssignmentCat" class="form-control" <?php echo (!empty($AcctAssignmentCat_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $AcctAssignmentCat; ?>">
                        <span class="invalid-feedback"><?php echo $AcctAssignmentCat_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Acc Assgt Quantity </label>
                        <input type="TextArea" name="AccAssgtQuantity" class="form-control" <?php echo (!empty($AccAssgtQuantity_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $AccAssgtQuantity; ?>">
                        <span class="invalid-feedback"><?php echo $AccAssgtQuantity_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Order Quantity </label>
                        <input type="TextArea" name="OrderQuantity" class="form-control" <?php echo (!empty($OrderQuantity_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $OrderQuantity; ?>">
                        <span class="invalid-feedback"><?php echo $OrderQuantity_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Order Unit  </label>
                        <input type="TextArea" name="OrderUnit" class="form-control" <?php echo (!empty($OrderUnit_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $OrderUnit; ?>">
                        <span class="invalid-feedback"><?php echo $OrderUnit_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Net Price </label>
                        <input type="TextArea" name="NetPrice" class="form-control" <?php echo (!empty($NetPrice_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $NetPrice; ?>">
                        <span class="invalid-feedback"><?php echo $NetPrice_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Currency </label>
                        <input type="TextArea" name="Currency" class="form-control" <?php echo (!empty($Currency_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Currency; ?>">
                        <span class="invalid-feedback"><?php echo $Currency_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Price Unit </label>
                        <input type="TextArea" name="PriceUnit" class="form-control" <?php echo (!empty($PriceUnit_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $PriceUnit; ?>">
                        <span class="invalid-feedback"><?php echo $PriceUnit_err;?></span>
                    </div>

                    <div class="form-group"> 
                        <label>Still to be delivered(qty) </label>
                        <input type="TextArea" name="DeliveredQty" class="form-control" <?php echo (!empty($DeliveredQty_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $DeliveredQty; ?>">
                        <span class="invalid-feedback"><?php echo $DeliveredQty_err;?></span>
                    </div>

                    <div class="form-group">
                    <label>Still to be delivered(value) </label>
                        <input type="TextArea" name="DeliveredValue" class="form-control" <?php echo (!empty($DeliveredValue_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $DeliveredValue; ?>">
                        <span class="invalid-feedback"><?php echo $DeliveredValue_err;?></span>
                    </div>

                    <div class="form-group">
                    <label>Still to be invoiced(qty) </label>
                        <input type="TextArea" name="InvoicedQty" class="form-control" <?php echo (!empty($InvoicedQty_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $InvoicedQty; ?>">
                        <span class="invalid-feedback"><?php echo $InvoicedQty_err;?></span>
                    </div>

                    <div class="form-group">
                    <label>Still to be invoiced (Value) </label>
                        <input type="TextArea" name="InvoicedValue" class="form-control" <?php echo (!empty($InvoicedValue_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $InvoicedValue; ?>">
                        <span class="invalid-feedback"><?php echo $InvoicedValue_err;?></span>
                    </div>

                    <div class="form-group">
                    <label>Cost Center </label>
                        <input type="TextArea" name="CostCenter" class="form-control" <?php echo (!empty($CostCenter_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $CostCenter; ?>">
                        <span class="invalid-feedback"><?php echo $CostCenter_err;?></span>
                    </div>

                    <div class="form-group">
                    <label>G/L Account </label>
                        <input type="TextArea" name="GLAccount" class="form-control" <?php echo (!empty($GLAccount_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $GLAccount; ?>">
                        <span class="invalid-feedback"><?php echo $GLAccount_err;?></span>
                    </div>

                    <div class="form-group">
                    <label>Requisitioner </label>
                        <input type="TextArea" name="Requisitioner" class="form-control" <?php echo (!empty($Requisitioner_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Requisitioner; ?>">
                        <span class="invalid-feedback"><?php echo $Requisitioner_err;?></span>
                    </div>

                    <div class="form-group">
                    <label>Delivery Date</label>
                        <input type="Date" name="DeliveryDate" class="form-control" <?php echo (!empty($DeliveryDate_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $DeliveryDate; ?>">
                        <span class="invalid-feedback"><?php echo $DeliveryDate_err;?></span>
                    </div>

                    <div class="form-group">  
                        <label>Update Delivery Date</label>
                        <input type="date" name="UpdateDeliveryDate" class="form-control" <?php echo (!empty($UpdateDeliveryDate_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $UpdateDeliveryDate; ?>">
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
                        <div class="form-group">
                            <label>Requester Name</label>
                            <input type="Textarea" name="RequesterName" class="form-control <?php echo (!empty($RequesterName_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $RequesterName; ?>">
                            <span class="invalid-feedback"><?php echo $RequesterName_err;?></span>
                        </div>
                       <div class="form-group">
                            <label>Requester Email</label>
                            <input type="email" name="RequesterEmail" class="form-control <?php echo (!empty($RequesterEmail_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $RequesterEmail; ?>">
                            <span class="invalid-feedback"><?php echo $RequesterEmail_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>

</html>