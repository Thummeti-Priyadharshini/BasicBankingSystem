<?php include 'config.php' ;

$senderid = $_REQUEST['senderid'];
    

$sendername = $_REQUEST['sendername'];
$receiverid = $_REQUEST['receiverid'];
    

$receivername = $_REQUEST['receivername'];
$amount = $_REQUEST['Amount'];
$sql = "INSERT INTO transfers Values('$senderid','$sendername','$receiverid','$receivername','$amount')";
if(mysqli_query($conn,$sql)){
   

    $sql = "SELECT * from customers where CustomerID=$senderid";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from customers where CustomerID=$receiverid";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    //Conditions
    //For negative value
    if (($amount)<0)
   {
        echo '<script>';
        echo ' alert("Negative value cannot be transferred !")';
        echo '</script>';
    }
    //Insufficient balance
    else if($amount > $sql1['Amount']) 
    {
        
        echo '<script>';
        echo ' alert("Sorry! you have insufficient balance !")';
        echo '</script>';
    }
    //For 0 (zero) value
    else if($amount == 0){

        
         echo "alert('Zero value cannot be transferred !')";
        
     }


    else {
                $newbalance = $sql1['Amount'] - $amount;
                $sql = "UPDATE customers set Amount=$newbalance where CustomerID=$senderid";
                mysqli_query($conn,$sql);
             
                $newbalance = $sql2['Amount'] + $amount;
                $sql = "UPDATE customers set Amount=$newbalance where CustomerID=$receiverid";
                mysqli_query($conn,$sql);
                
               
                    
                }

                $newbalance= 0;
                $amount =0;
        
    



    include 'connect.php';
    
}

else {
    echo "unsuccesful";
}
mysqli_close($conn);
?>