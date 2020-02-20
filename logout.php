<?php
    session_start();
    session_destroy();
    include('header.php');
?>
    <p>You have logged out.</p>
<?php
    include('footer.php');
?>