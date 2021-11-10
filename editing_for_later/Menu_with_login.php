<div class="topnav">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <?php 
                if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) { 
                /*have this echo "Hello, persons name" here*/
                }else {
                echo '<li><a href="loginscreen.php">Login</a></li>';
                }
            ?>
        </ul>
    </nav>  
</div>