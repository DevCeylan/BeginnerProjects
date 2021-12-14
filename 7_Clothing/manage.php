<!DOCTYPE html>
<html>

<head>
    <title>Manage Records</title>
    <!-- Bootstrap CSS 'file' -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>

        a{
            text-decoration: none;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Customers</h1>

    <table id="customers">
        <tr>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

        <?php
        include("dbService.php");
        
        $sql = "Select * from customers";
        $result = $connection->query($sql);
        
        if($result->num_rows>0){
            while($pull=$result->fetch_assoc()){
                echo "
                <tr>
                    <td>".$pull['id']."</td>
                    <td>".$pull['name']."</td>
                    <td>".$pull['surname']."</td>
                    <td>".$pull['email']."</td>
                    <td>".$pull['phone']."</td>
                    <td><a href='deleteCustomer.php?dlt=$pull[id]'><button class=".'btn-danger'." >Remove</button></a></td>
                </tr>
                ";
            }
        }
        else{
            echo "Table is empty";
        }
        
        ?>

    </table>

    <h1>Orders</h1>

    <table id="customers">
        <tr>
            <th>Order ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        <?php
        include("dbService.php");
        
        $sql = "Select * from orders";
        $result = $connection->query($sql);
        
        if($result->num_rows>0){
            while($pull=$result->fetch_assoc()){
                echo "
                <tr>
                    <td>".$pull['id']."</td>
                    <td>".$pull['name']."</td>
                    <td>".$pull['price']."</td>
                    <td>".$pull['count']."</td>
                    <td>".$pull['total']."</td>
                    <td><a href='deleteOrder.php?dlt=$pull[id]'><button class=".'btn-danger'." >Remove</button></a></td>
                </tr>
                ";
            }
        }
        else{
            echo "Table is empty";
        }
        
        ?>

    </table>

</body>

</html>