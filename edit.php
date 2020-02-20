<?php
    include('header.php');
    
    if(isset($_SESSION['admin'])){
?>
        <h2>Edit Game</h2>
        <form name="login" action="all.html" method="POST">
          <input type="text" placeholder="game" required name="gamebox">
          <input type="text" placeholder="role" required name="role">
          <input type="text" placeholder="cost" required name="cost">
          <input type="text" placeholder="age" required name="age">
          <input type="submit" name="submit" value="submit">

        </form>
<?php
    }
    else {
       echo '<a href="index.php">Please Login</a>';
    }
    include('footer.php');
?>
