<?php

    session_start();
    include('header.php');
    
    if(isset($_POST['submit'])){
        
        $username =$_POST['namebox'];
        $password =$_POST['passwordbox'];
        
        $stmt=$conn->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':password',$password);
        $stmt->execute();
        
        if($stmt->rowCount()>0){
          ?><script>alert('bleh');</script><?php
          $_SESSION['admin']=true;
        }
        
        else{
          ?><script>alert('blah');</script><?php
        }
        
     }
    
    
        
      
        
     if(!isset($_SESSION['admin'])){
        ?>
        <h2>Login</h2>
        <form name="login" action="" method="POST">
          <input type="text" placeholder="username" required name="namebox">
          <input type="text" placeholder="password" required name="passwordbox" id="pwd">
          <select onchange="changeFunction()" id="users">
            <option>Select User</option>
            <option>Admin</option>
            <option>User</option>
            <option>Guest</option>
          </select>   


          
          <input type="submit" name="submit" value="submit">
        </form>
        <p id="length_of_password"></p>

        <p id="demo"></p>
        <?php
     }
     else {
        ?>
        <h2>You have logged in.</h2>
        <?php
     }

    include('footer.php');
?>
