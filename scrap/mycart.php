<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg light my">
                <h1>My cart</h1>
            </div>    
            <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">serial no</th>
                        <th scope="col">Item name</th>
                        <th scope="col">Item price</th>
                        <th scope="col">quantity</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($_SESSION['cart']))
                        foreach($_SESSION['cart'] as $key=>$value)
                        {   print_r($value);
                            echo"
                            <tr>
                            <td>1</td>
                            <td>$value[Item_Name]</td>
                            <td>$value[price]</td>
                            <td>input type='number'</td>

                          </tr>
                            ";
                        }
                        ?>
                        
                    </tbody>
</table>
            
        
        
        
    </div>
</div> 
</body>
</html>