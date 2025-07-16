<?php include("admintab.php"); ?>
<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Ordered Details</title>
    <style>
        .highlight {
            color: #FF6600;
        }

        /* .medium-text {
            font-size: 18px;
        } */

        /* .large-text {
            font-size: 24px;
        } */

        /* .style1 {
            color: #FFFFFF
        } */
        #td{
            background-color: #FFFFFF;
            color: black;
        }
    </style>
</head>

<body>
    <h1 class="highlight large-text" align="center">View Ordered Details</h1>
    <table border="1" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
        <th width="95">
            <tr>
                <th height="38">Product Name</th>
                <th width="86">Product Cost</th>
                <th width="58">Quantity</th>
                <th width="55">Address</th>
                <th width="79">Card Type</th>
                <th width="74">Order ID</th>
                <th width="111">Shipping Details</th>
                <th width="134">Customer Status</th>
                <th width="404">Action</th>
            </tr>
        </th>
        <tbody id="td">
            <?php
            $sql = "SELECT * FROM orderlist";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td align='center'><span class="style1"><?php echo $row["productname"] ?></span></td>
                        <td align='center'><span class="style1"><?php echo $row["productcost"] ?></span></td>
                        <td align='center'><span class="style1"><?php echo $row["quantity"] ?></span></td>
                        <td align='center'><span class="style1"><?php echo $row["address"] ?></span></td>
                        <td align='center'><span class="style1"><?php echo $row['cardtype'] ?></span></td>
                        <td align='center'><span class="style1"><?php echo $row["orderid"] ?></span></td>
                        <td align='center'><span class="style1"><?php echo $row['adminstatus'] ?></span></td>
                        <td align='center'><span class="style1"> <?php echo $row['customerstatus'] ?></span></td>
                        <td>
                            <form method='post' class="style1">
                                <select name='cstatus'>
                                    <option>Received</option>
                                    <option>Incorrect product</option>
                                    <option>Damaged</option>
                                    <option>Cancelled</option>
                                </select>
                                <input type='hidden' name='oid' value='<?php echo $row['orderid'] ?>' />
                                <input type='submit' name='ord' value='Update' />
                            </form>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "<tr> <td colspan='10' align='center'>No data available</td> </tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    if (isset($_POST['ord'])) {
        $id = $_POST['oid'];
        $cstatus = $_POST['cstatus'];

        $update_sql = "UPDATE orderlist SET customerstatus = '$cstatus' WHERE orderid = '$id' AND LOWER(adminstatus) != 'pending'";
        $update_result = mysqli_query($conn, $update_sql);

        // Check the number of rows affected by the query
        if ($update_result && mysqli_affected_rows($conn) > 0) {
		?>
		
            <script>alert('Data Updated');window.open("customervieworders.php","_self");</script>";
			<?php
        } else {
            echo "<script>alert('Data not Updated');</script>";
        }
    }
    ?>
</body>

</html>