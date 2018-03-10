       <center>
       
        <?php
        // Initialize variables to null.
        $FirstNameError = $LastNameError = $EmailError = $ConfirmEmailError = $PasswordError = $ConfirmPasswordError = "";
        //On Submitting form, below function will execute
        //Submit Scope starts from here
        
        if(isset($_POST['Submit']))
        {
            
            
        if(empty($_POST["FirstName"]))
        {
        $FirstNameError="First name is Required";
        }
        else
        {
        $FirstName=Test_User_Input($_POST["FirstName"]);
        // check FirstName only contains letters and whitespace
        if(!preg_match("/^[A-Za-z\. ]*$/",$FirstName))
        {
        $FirstNameError="Only Letters and white space are allowed";
        }
        }


        if(empty($_POST["LastName"]))
        {
        $LastNameError="Last name is Required";
        }
        else
        {
        $LastName=Test_User_Input($_POST["LastName"]);

        // check LastName only contains letters and whitespace
        if(!preg_match("/^[A-Za-z\. ]*$/",$LastName))
        {
        $LastNameError="Only Letters and white space are allowed";
        }
        }

        if(empty($_POST["Email"]))
        {
        $EmailError="Email is Required";
        }
        else
        {
        $Email=Test_User_Input($_POST["Email"]);
        // check if e-mail address syntax is valid or not
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email))
        {
        $EmailError="Invalid Email Format";
        }
        }



        if(empty($_POST["ConfirmEmail"]))
        {
        $ConfirmEmailError="Email is required again";
        }
        else
        {
        $ConfirmEmail=Test_User_Input($_POST["Email"]);
        // check if e-mail address syntax is valid or not
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$ConfirmEmail))
        {
        $ConfirmEmailError="Invalid Email Format";
        }
        else 
        {
        if ($_POST["ConfirmEmail"]!= $_POST["Email"])
        {
        $ConfirmEmailError="Email fields must match";
        }
        }
        }

        if(empty($_POST["Password"]))
        {
        $PasswordError="Password is required";
        }
        else
        {
        $Password=Test_User_Input($_POST["Password"]);
        // check if e-mail address syntax is valid or not
        if(!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/",$Password))
        {
        $PasswordError="Passwords must be at least 8 characters, have an upper case letter, and have a number";
        }
        }



        if(empty($_POST["ConfirmPassword"]))
        {
        $ConfirmPasswordError="Password is required again";
        }
        else
        {
        $ConfirmPassword=Test_User_Input($_POST["ConfirmPassword"]);
        // check if e-mail address syntax is valid or not
        if((!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/",$ConfirmPassword)) && ($_POST["ConfirmPassword"]!= $_POST["Password"]))
        {
        $ConfirmPasswordError="Passwords must match";
        }
        }

        if(!empty($_POST["FirstName"])&&!empty($_POST["LastName"])&&!empty($_POST["Email"])&&!empty($_POST["ConfirmEmail"])&&!empty($_POST["Password"])&&!empty($_POST["ConfirmPassword"]))
        {
        if((preg_match("/^[A-Za-z\. ]*$/",$FirstName)==true)&&(preg_match("/^[A-Za-z\. ]*$/",$LastName)==true)&&(preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$Email)==true)&&(preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$ConfirmEmail))&&(preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/",$Password))&&(preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/",$ConfirmPassword)))
        {
        echo "<h2>Your Submit Information</h2>";
        echo "First Name:".ucwords ($_POST["FirstName"])."<br>";
        echo "Last Name:".ucwords ($_POST["LastName"])."<br>";
        echo "Email: {$_POST["Email"]}<br>";
        echo "Password: {$_POST["Password"]}<br>";
        }
        }
        else
        {
            echo '<span class="Error">* Please Complete & Correct your Form & Try Again *</span>';
        }//Submit Scope  Ends here
        //Function to get and throw data to each of the field final varriable like Name / Gender etc.
        }

        function Test_User_Input($Data)
        {
            return $Data;
        }
        //php code ends here
        ?>
</center>


        <!DOCTYPE>
<center>
        <html>
            <head>
                <title>Create an account</title>
            </head>
        <style type="text/css">

        input[type="text"],input[type="email"],textarea{
            border:  1px solid dashed;

            background-color: rgb(152,255,152);
            width: 400px; 
            padding: .5em;
            font-size: 1.0em;
        }
        .Error{
            color: red;
        }
        </style>
            <body style="background-color: gray;">
        <?php ?>
        <h2>Create An Account</h2>

        <form  action="FormValidationProject2.php" method="post"> 
        <legend>* Please Fill Out the following Fields.</legend>			
        <fieldset>
        First name:<br>
        <input class="input" type="text" Name="FirstName" value="">
        <span class="Error">*<?php echo $FirstNameError;  ?></span><br>
        Last name:<br>
        <input class="input" type="text" Name="LastName" value="">
        <span class="Error">*<?php echo $LastNameError;  ?></span><br>	 
        Email:<br>
        <input class="input" type="text" Name="Email" value="">
        <span class="Error">*<?php echo $EmailError; ?></span><br>
        Confirm Email:<br>
        <input class="input" type="text" Name="ConfirmEmail" value="">
        <span class="Error">*<?php echo $ConfirmEmailError; ?></span><br>
        Password:<br>
        <input class="input" type="text" Name="Password" value="">
        <span class="Error">*<?php echo $PasswordError; ?></span><br>	
        Confirm password:<br>.
        <input class="input" type="text" Name="ConfirmPassword" value="">
        <span class="Error">*<?php echo $ConfirmPasswordError; ?></span><br>		   
        <br>
        <input type="Submit" Name="Submit" value="Create An Account">
        </fieldset>
        </form>


                
            </body>
        </html>
</center>