<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Obligo Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Obligo</a>
                    </div>
                    <form action="" method="POST"> 
                        <input type="text" name="RequesterEmail" placeholder="Enter Company Email address"/>
                        <input type="submit" name="search" value="Search by Company Email address">
                    </form>    
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    if(isset($_POST['search']))
                   { 
                    $id= $_POST['RequesterEmail']??"";
                    $sql = "SELECT * FROM Obligo where RequesterEmail='$id'";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result)>0 ){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                    echo "<th>Id</th>";
                                    echo "<th>Plant</th>";
                                    echo "<th>Purchasing Document</th>";
                                    echo "<th>Item</th>";
                                    echo "<th>POITEM</th>";
                                    echo "<th>Seq. No. of Account Assgt</th>";
                                    echo "<th>Order</th>";
                                    echo "<th>Purchasing Doc. Type</th>";
                                    echo "<th>Purch. doc. category</th>";
                                    echo "<th>Created By</th>";
                                    echo "<th>Purchasing Group</th>";
                                    echo "<th>Purchaser</th>"; 
                                    echo "<th>Team</th>";
                                    echo "<th>PO history/release documentation</th>"; 
                                    echo "<th>Document Date</th>"; 
                                    echo "<th>Vendor/suppplying plant</th>"; 
                                    echo "<th>Short Text</th>"; 
                                    echo "<th>Material Group</th>"; 
                                    echo "<th>Deletion indicator</th>"; 
                                    echo "<th>Item Category</th>"; 
                                    echo "<th>Acct Assignment Cat.</th>";
                                    echo "<th>Acc.assgt quantity</th>"; 
                                    echo "<th>Order Quantity</th>"; 
                                    echo "<th>Order Unit</th>"; 
                                    echo "<th>Net Price</th>"; 
                                    echo "<th>Currency</th>"; 
                                    echo "<th>Price Unit</th>"; 
                                    echo "<th>Still to be delivered(qty)</th>"; 
                                    echo "<th>Still to be delivered(value)</th>"; 
                                    echo "<th>Still to be invoiced(qty)</th>"; 
                                    echo "<th>Still to be invoiced(val.)</th>"; 
                                    echo "<th>Cost Center</th>"; 
                                    echo "<th>G/L Account</th>"; 
                                    echo "<th>Requisitioner</th>"; 
                                    echo "<th>Delivery Date</th>"; 
                                    echo "<th>Update Delivery Date</th>"; 
                                    echo "<th>Choices</th>"; 
                                    echo "<th>Remarks</th>"; 
                                    echo "<th>Requester Name</th>"; 
                                    echo "<th>Requester Email</th>"; 
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['Plant'] . "</td>";
                                        echo "<td>" . $row['PurchasingDocument'] . "</td>";
                                        echo "<td>" . $row['Item'] . "</td>";
                                        echo "<td>" . $row['POITEM'] . "</td>";
                                        echo "<td>" . $row['SeqNoOfAccountAssgt'] . "</td>";
                                        echo "<td>" . $row['Orders'] . "</td>";
                                        echo "<td>" . $row['PurchasingDocType'] . "</td>";
                                        echo "<td>" . $row['PurchDocCategory'] . "</td>";
                                        echo "<td>" . $row['CreatedBy'] . "</td>";
                                        echo "<td>" . $row['PurchasingGroup'] . "</td>";
                                         echo "<td>" . $row['Purchaser'] . "</td>";
                                         echo "<td>" . $row['Team'] . "</td>";
                                         echo "<td>" . $row['POHistory'] . "</td>";
                                         echo "<td>" . $row['DocumentDate'] . "</td>";
                                         echo "<td>" . $row['VendorPlant'] . "</td>";   
                                         echo "<td>" . $row['ShortText'] . "</td>";   
                                         echo "<td>" . $row['MaterialGroup'] . "</td>";   
                                         echo "<td>" . $row['DeletionIndicator'] . "</td>";   
                                         echo "<td>" . $row['ItemCategory'] . "</td>";   
                                         echo "<td>" . $row['AcctAssignmentCat'] . "</td>";   
                                         echo "<td>" . $row['AccAssgtQuantity'] . "</td>";   
                                         echo "<td>" . $row['OrderQuantity'] . "</td>";   
                                         echo "<td>" . $row['OrderUnit'] . "</td>";   
                                         echo "<td>" . $row['NetPrice'] . "</td>";   
                                         echo "<td>" . $row['Currency'] . "</td>";   
                                         echo "<td>" . $row['PriceUnit'] . "</td>";   
                                         echo "<td>" . $row['DeliveredQty'] . "</td>";   
                                         echo "<td>" . $row['DeliveredValue'] . "</td>";   
                                         echo "<td>" . $row['InvoicedQty'] . "</td>";   
                                         echo "<td>" . $row['InvoicedValue'] . "</td>";   
                                         echo "<td>" . $row['CostCenter'] . "</td>";   
                                         echo "<td>" . $row['GLAccount'] . "</td>";   
                                         echo "<td>" . $row['Requisitioner'] . "</td>";   
                                         echo "<td>" . $row['DeliveryDate'] . "</td>";   
                                         echo "<td>" . $row['UpdateDeliveryDate'] . "</td>";   
                                         echo "<td>" . $row['Choices'] . "</td>";   
                                         echo "<td>" . $row['Remarks'] . "</td>";   
                                         echo "<td>" . $row['RequesterName'] . "</td>";   
                                         echo "<td>" . $row['RequesterEmail'] . "</td>"; 
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }       
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        }else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                             }
                        }else{
                        echo "Oops! Something went wrong. Please try again later.";
                             }
                }             
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
        