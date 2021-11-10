
<div id="container">
        <h2>Log in</h2>
            Login Form
            <form action="welcome.php" method="POST">
                <ul id="login">
                    <br>
                    <li>
                        Email:<br>
                        <input type="text" name="username" id="liuname" title="Must Be your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    </li>
                    <li>
                        Password:<br>
                        <input type="password" name="password" id="liupassword">
                    </li>
                    <li>
                        <input type="submit" name="login_btn" value="Log in">   
                    </li>
                    <br>
                    <br>
                    <li>
                        <a href="register.php">Register</a>
                    </li>
                </ul>
            </form>


    </div>
