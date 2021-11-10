
<div id="container">
        <h2>Register</h2>
        <div class="inner">
            <form action="welcome.php" method="POST">
                <ul id="login">
                    <br>
                    <li>
                        Email:<br>
                        <input type="text" name="reg_username" id="reg_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    </li>
                    <li>
                        Password:<br>
                        <input type="password" name="reg_password" id="reg_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                        <br>
                    <small><i>Must contain: <br>-At least one number <br>-One uppercase <br>-One lowercase letter <br>-And at least 8 or more characters</i></small>
                    </li>
                    <li>
                        Repeat Password:<br>
                        <input type="password" name="reg_password_repeat" id="reg_upassword_repeat">
                    </li>
                    <li>
                        First Name<br>
                        <input type="text" name="reg_first_name" id="reg_first_name">
                    </li>
                    <li>
                        Last Name<br>
                        <input type="text" name="reg_last_name" id="reg_last_name">
                    </li>
                    <li>
                        Business Name<br>
                        <input type="text" name="reg_bus_name" id="reg_bus_name">
                    </li>
                    <li>
                        Cell Phone:<br>
                        <input type="tel" name="reg_phone" id="reg_phone" placeholder="555.555.5555" pattern="[0-9]{3}.[0-9]{3}.[0-9]{4}" title="(example: 555.555.5555 )"><br>
                        <small><i>(example: 555.555.5555 )</i></small><br><br>
                    </li>
                    <li>
                        <input type="submit" name="register_btn" value="Register">   
                    </li>
                </ul>
            </form>

        </div>

    </div>