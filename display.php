<?php
    session_start();
    require('php/connect.php');
    include('header.php');
    
     if(isset($_SESSION['admin'])){
       
               $stmt=$conn->prepare("SELECT * FROM games");

        $stmt->execute();

       

        if($stmt->rowCount()>0){

       

            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

                //output the row

               

                echo '<p>ID : '.$row["gameid"].'Title :'.$row["title"].'<a href="index.php?gameid='.$row["gameid"].'">Delete</a>

                <a href="update.php?gameid='.$row["gameid"].'">Update</a></p>';

           

               

            }

               

        }

       

        else {

            echo "<p> No records found</p>";

        }
       
      echo '
        <h2>List of games</h2>
        <div id="slideshow">
          <div>
            <img src="images/fifa.png" width="240px">
          </div>
          <div>
            <img src="images/rocket.jpg" width="240px">
          </div>

       </div>
      ';
     }
     else {
       echo '<a href="index.php">Please Login</a>';
     }

    include('footer.php');
?>

