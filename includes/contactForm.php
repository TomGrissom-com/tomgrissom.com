<div class="section-wrap">
    <div class="content-wrap">
        <h1>Contact Form</h1>
        <p>
            You may fill out the form or reach out with the following:<br>Contact || 903.350.1885 || Tom@TomGrissom.com
        </p>
        
    </div>
   
    <div class="content-wrap">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"s method="POST">
            <text>Name</text><br>
            <input id="nameCon" type="text"><br>
            <text>Number</text><br>
            <input id="numberCon" type="tel"><br>
            <text>Email</text><br>
            <input id="emailCon" type="text"><br>
            <text>Message</text><br>
            <textarea id="MessageCon" type="text"></textarea><br><br>
            
        <?php 
            if(null !== filter_input(INPUT_POST,'conUsSend'))
            {
                echo '<h1>Thank you! Your Message has been sent.</h1><br>';
            }
        ?>

            <input type="submit" name="conUsSend" value="Submit" class="inputText">
        </form>
    </div>
    

</div>

