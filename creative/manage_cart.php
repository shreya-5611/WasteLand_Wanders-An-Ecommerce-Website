
<?php

 session_start();
 //session_destroy();

 if($_SERVER["REQUEST_METHOD"]=="POST")

{



if(isset($_POST["Add_to_cart"]))

{
    if(isset($_SESSION['cart']))
    {
        $myitems=array_column($_SESSION['cart'], 'Item_name'); 
        if(in_array($_POST['Item_name'], $myitems))



        {
            echo"<script>
            alert('Item Already Added');
            window.location.href='Creativex.php';
            </script>";
        }
        else
        {$count=count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array('Item_name'=>$_POST["Item_name"],"Item_price"=>$_POST["Item_price"], "Quantity"=>1);
        echo"<script>
            alert('Item  Added');
            window.location.href='Creativex.php';
         
            </script>";
        }    
    }
    else
    {
         $_SESSION['cart'][0]=array('Item_name'=>$_POST['Item_name'],'Item_price'=>$_POST['Item_price'], 'Quantity'=>1);
         print_r($_SESSION["cart"]);
         echo"<script>
         alert('Item  Added');
         window.location.href='Creativex.php';
      
         </script>";
    }
}

if(isset($_POST["Remove_item"]))
{
    foreach($_SESSION['cart'] as $key=>$value)
    {
        if($value['Item_name']==$_POST['Item_name'])
         {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo"<script>
            alert('Item  removed');
            window.location.href='my_cart.php';
         
            </script>";
         }
    }

}
}

?>

