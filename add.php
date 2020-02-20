<?php
    session_start();
    require('php/connect.php');
    include('header.php');
    
     if(isset($_SESSION['admin'])){
        
        if(isset($_POST['submit'])){
            
            $title  =   $_POST['titlebox'];
            $rating =   $_POST['ratingbox'];
            $genre  =   $_POST['genrebox'];   
            $price  =   $_POST['pricebox'];
            
            $stmt=$conn->prepare("INSERT INTO games 
            ( title, rating, genre, price) 
            VALUES 
            (:title, :rating, :genre, :price);");
            
            $stmt->bindParam(':title',$title);
            $stmt->bindParam(':rating',$rating);
            $stmt->bindParam(':genre',$genre);
            $stmt->bindParam(':price',$price);
            $stmt->execute();
            
        }
        
        
?>
        <h2>Add Game</h2>
        <form name="login" action="" method="POST">
          <input type="text" placeholder="title" required name="titlebox">
          <input type="text" placeholder="rating" required name="ratingbox">
          <input type="text" placeholder="genre" required name="genrebox">
          <input type="number" placeholder="price" required name="pricebox">
          <input type="submit" name="submit" value="submit">

        </form>
<?php
    }
    
   else {
       echo '<a href="index.php">Please Login</a>';
    }
    include('footer.php');
?>
