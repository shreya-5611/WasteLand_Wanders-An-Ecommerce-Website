<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart Page</title>
	<link rel="stylesheet" type="text/css" href="cart.css">
</head>
<body>
	<div class="container">
		<h1>Cart Page</h1>
		<table>
			<thead>
				<tr>
					<th>Serial No.</th>
					<th>Item Name</th>
					<th>Item Price</th>
					<th>Quantity</th>
				</tr>
			</thead>
			<tbody>
                <?php
                $total=0;
                
                if(isset($_SESSION['cart']))
                foreach($_SESSION['cart'] as $key=>$value)
                {  $total=$total+$value['Item_price'];
                    $sr=$key+1;
                    //  print_r($value);
                    echo"
                    <tr>
                    <td>$sr</td>
                    <td>$value[Item_name]</td>
                    <td>$value[Item_price]</td>
                    <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                    <form  action='manage_cart.php' method='POST'>
                    <td><button name='Remove_item' class='btn-btn-outline-danger'>REMOVE</button></td>
                    <input type='hidden' name='Item_name' value='$value[Item_name]'>
                    </form>
                  </tr>
                    ";
                }
                ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3">Total Cost:</td>
					<td><?php echo $total ?></td>
				</tr>
                <tr>
				<td colspan="4">
					<button id="buyNowBtn"><a href="../buy_now/buy.html">Buy Now</a></button>
				</td>
			</tr>
			</tfoot>
		</table>
	</div>
</body>
</html>