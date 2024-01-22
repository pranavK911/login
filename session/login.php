<?php
 $servername="localhost";
 $user="root";
 $pass="";
 $dbname="database1";

 $con=mysqli_connect($servername,$user,$pass,$dbname);
 if($con){
   // echo "ok";
 }
 else{
   echo "connection failed".mysqli_connect_error();
 }
?>

<form action="login.php" method="get">
            <label >Email</label>
            <input type="email" name="email"><br>
            
            <label >Password</label>
            <input type="text" name="paw"><br>
            
            <!-- <label >email</label> -->
            <input type="submit" name="submit" value="login"><br>
</form>
<?php
if(isset($_GET['submit'])){
    
    $email=$_GET['email'];
    $pass=$_GET['paw'];
    $query="Select *from personaldetail where email= '$email' && password='$pass' ";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    if($total){
      header('location:https://pranavk911.github.io/portfolio-/');
    }else{
        echo "pending";
    }
}
?>