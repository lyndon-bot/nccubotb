 <!DOCTYPE>
<center>
        <html>
            <head>
                <title>Create an account</title>
            </head>
        
            <body>
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