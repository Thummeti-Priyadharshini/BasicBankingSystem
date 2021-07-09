<?php

include 'config.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
Transaction-details
        </title>
       <script>
            function funalert(){
                var x=confirm("Are you sure to transfer money?")
                if(x==true){
            

                }
                else{
                    alert("you cancelled transaction");
                }
            }
            
     }
            </script>
        <style>
           body{
    background-image: url("4img.jfif");
    text-align: center;
   

}
.container1{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 25px;
   font-style: normal ;
   align-content: space-between;
   text-align: right;
   
   
   
   

   
}
button{
    background-color: rgb(208, 255, 0);
    width:150px;
    height:30px;
font-size: 25px;
border-radius: 15px;
border:2px solid dotted;

}
form{
    margin-left:400px;
    margin-right: 400px;
    margin-top: 100px;
    text-align: center;
    line-height: 60px;
    background-image: linear-gradient(yellow,white,rgb(0, 19, 128));
}
    .container{
    margin-top: 30px;
    line-height: 35px;
    color: rgb(14, 13, 13);text-align: center;font-size:30px;font-family: 'cursive';font-style: oblique;

    
     }
     
     input{
         width:250px;
         border:1px solid dashed;
         border-radius: 10px;
         height: 30px;

     }
        </style>
    </head>
    <body>
        

            <div class="container1" style="word-spacing: 30px;">
               <a href="index.php" style="text-decoration: none; text-align: center;  height:60px;margin-top: 100px;font-weight: bold;background-image: linear-gradient(yellow,white,rgb(0, 19, 128));">HOME</a>&nbsp;
                <a href="customers.php" style="text-decoration: none; text-align: center;height:60px;margin-top: 100px;font-weight: bold;background-image: linear-gradient(yellow,white,rgb(0, 19, 128));">CUSTOMERS</a>&nbsp;
                
    
            </div>
    

        </section>
        <form action="bank.php" method="POST">
            <h1 style="color: rgb(14, 13, 13);text-align: center;font-weight:bold;font-size:40px;font-family: 'comic sans ms';font-style: italic;">Transfer your money</h1><hr>
            <div class="container">
                <label for="senderid" >Sender CustomerId* </label><br><input type="text" name="senderid" placeholder="enter your customerID" required><br>
                <label for="sendername" >Name* </label><br><input type="text" name="sendername" placeholder="enter your name" required><br>
                <label for="receiverid" >Receiver CustomerId* </label><br><input type="text" name="receiverid" placeholder="enter customerID" required><br>
                <label for="receivername"> ReceiverName </label><br><input type="text" name="receivername" placeholder="enter to whom you transfer" required><br>
                <label for="Amount">Amount* </label><br><input type="text" name="Amount" placeholder="enter amount" required><br></div>
             <hr> 
             <button type="submit" onclick="funalert();" >TRANSFER</button>
    </body>
</html>
