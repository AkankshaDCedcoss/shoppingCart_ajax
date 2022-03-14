<?php
session_start();

if(!isset($_SESSION['addInCart']))
{
    $_SESSION['addInCart']=array();
}


if(isset($_POST))
{
    
    $id=$_POST['id'];
    $name=$_POST['name'];
    $image=$_POST['image'];
    $price=$_POST['price'];
    $quantity=1;


    $thisCart=array($id,$image,$name,$price, $quantity);

    array_push($_SESSION['addInCart'],$thisCart);
    
    
    echo json_encode($_SESSION['addInCart']);


   
   


   
}



?>
