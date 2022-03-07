<?php

if(!isset($_SESSION['addInCart']))
{
    $_SESSION['addInCart']=array();
}


if(isset($_POST))
// {
    
    $id=$_POST['id'];
    $name=$_POST['name'];
    $image=$_POST['image'];
    $price=$_POST['price'];
    // echo json_encode($id);
    $thisCart=array($id,$image,$name,$price,1);
    array_push($_SESSION['addInCart'],$thisCart);
// json_encode($_SESSION['addInCart']);
    echo json_encode($_SESSION['addInCart']);


    //  print_r(json_encode($thisCart));
   


   
// }



?>
