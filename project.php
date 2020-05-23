<!DOCTYPE html>
<html>
<head>
    <style>
        .error{color: #FF0000;}
    </style>
</head>
    <body>
        
        <?php
            
            $nameErr = $emailErr = $inameErr = "";
            $name = $email = $iname = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST["name"])) {
                $name = test_input($_POST["name"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
                }}
                if (!empty($_POST["email"])) {
                    $email = test_input($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                    }
                }
                if (!empty($_POST["iname"])) {
                $iname = test_input($_POST["iname"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$iname)) {
                $inameErr = "Only letters and white space allowed";
                }}
            }

                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }
        ?>
        
        

        <form name="myform" onsubmit="return(validateForm());" method="post">
            <fieldset style="padding-top: 40px;margin-left: 350px;margin-right: 350px; background-color:#d9e8f4">
                <legend>Registration form</legend>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Name:<input type="text" name="name" ><span class="error">*<?php echo $nameErr;?></span>
                <br><br><br>&nbsp;
                Email Id:<input type="email" name="Email"><span class="error">*<?php   echo $emailErr;?> </span>
                <br><br><br>
                Institution:<input type="text" name="iname"><span class="error">*<?php echo $inameErr;?> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <br><br><br>
                <p>Type a message:</p>
                <textarea name="message" rows="10" cols="40"></textarea><br><br>
                <input type="checkbox" name="cbox" required>I agree terms and conditions<br><br>&nbsp;
                <input type="submit" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class = "error">* marked fields are neccessary to be filled out</span>
            </fieldset>
        </form>    
        <script src="AP_project_individual.js"></script>
     </body>
</html>