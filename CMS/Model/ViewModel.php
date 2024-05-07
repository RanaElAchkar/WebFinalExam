<?php
function SignUp(){
    ?>
<h1 style="text-align: center; padding-bottom: 30px;"><span>Welcome..! Sign up to create your account</span></h1>
        <div class="container">
            <div style="text-align: center;">
                <div class="Form">
                    <h2 style="padding-top: 40px;padding-bottom: 40px;">Sign Up</h2>
                    <form name="SignUpForm" id="signup" action="signup.php" method="POST">
                        <div class="frm-element">
                            <div class="frm-label">
                                <label for="username">Username: </label>
                            </div>
                            <input type="text" name="username" class="textfield">
                        </div>
                        <br>
                        <br>
                        <div class="frm-element">
                            <div class="frm-label">
                                <label for="firstname">First Name: </label>
                            </div>
                            <input type="text" name="firstname" class="textfield">
                        </div>
                        <br>
                        <br>
                        <div class="frm-element">
                            <div class="frm-label">
                                <label for="lastname">Last Name: </label>
                            </div>
                            <input type="text" name="lastname" class="textfield">
                        </div>
                        <br>
                        <br>
                        <div class="frm-element">
                            <div class="frm-label">
                                <label for="password">Password: </label>
                            </div>
                            <input type="password" name="password" class="textfield">
                        </div>
                        <br>
                        <br>
                        <div class="frm-element">
                            <div class="frm-label">
                                <label for="cpass">Confirm Password: </label>
                            </div>
                            <input type="password" name="cpass" class="textfield">
                        </div>
                        <br>
                        <br>
                        <div class="frm-element">
                            <input id="rfemale" type="radio" name="sex" value="F">
                            <label for="rfemale" style="padding-right: 20px;">Female</label>
                            <input id="rmale" type="radio" name="sex" value="M">
                            <label for="rmale" style="padding-left: 20px;">Male</label>
                        </div>
                        <br>
                        <br>
                        <div class="frm-element">
                            <input type="checkbox" name="cbcaptcha">
                            <label for="cbcaptcha">I am human</label>
                        </div>

                        <br>
                        <br>
                        <input type="button" name="signup" value="Sign Up" class="Button" style="margin-right: 30px;"
                            onclick="SignUpFrm()">
                        <input type="button" name="cancel" value="Cancel" class="Button" style="margin-left: 30px;"
                            onclick="ResetFrm()">
                        <br>
                        <br>


                        <h3 style="padding-top: 40px;padding-bottom: 40px;">Already have an account? <a href="index.php">Log in here</a></h3>
                </div>
            </div>

            </form>




        </div>
<?php
}
function LogIn(){
    ?>
            <h1 style="text-align: center; padding-bottom: 30px;"><span>Welcome..! Log In here</span></h1>
        <div class="container">
            <div style="text-align: center;">
                <div class="Form">

                    <h2 style="padding-top: 40px;padding-bottom: 40px;">Log In</h2>
                    <form name="LogInForm" id="login" action="login.php" method="POST">

                    <h2 style="padding-top: 40px;padding-bottom: 40px;">Sign Up</h2>
                    <form name="LogInForm" id="login" action="../BE/login.php" method="POST">

                        <div class="frm-element">
                            <div class="frm-label">
                                <label for="username">Username: </label>
                            </div>
                            <input type="text" name="username" id="username"class="textfield">
                        </div>
                        <br>
                        <br>
                        <div class="frm-element">
                            <div class="frm-label">
                                <label for="password">Password: </label>
                            </div>
                            <input type="password" name="password" id="password" class="textfield">
                        </div>
                        <br>
                        <br>
                        <input type="button" name="signup" value="Log In" class="Button" style="margin-right: 30px;"
                            onclick="LogInFrm()">
                        <input type="button" name="cancel" value="Cancel" class="Button" style="margin-left: 30px;"
                            onclick="ResetFrm()">
                        <br>
                        <br>


                        <h3 style="padding-top: 40px;padding-bottom: 40px;">Create an account? <a href="SignUp.php">Sign up here</a></h3>
                </div>
            </div>

            </form>




          </div>
<?php
}
function Itemslist($items){
?>
            <h1>
                    <center>
                        List of Items
                    </center>
                </h1>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                    </tr>
            
                    <?php
                    foreach ($items as $item) { ?>
                        <tr>
                            <td><?php echo $item->id; ?></td>
                            <td><?php echo $item->name; ?></td>
                            <td><?php echo $item->isAvaliable ? "Avaliable" : "NotAvaliable"; ?></td>
                            <td>
                                <form name="activateForm" method="post" action="../BE/AddMovie.php">
                                    <input type="hidden" name="id" value="<?php echo $item->id; ?>">
                                    <input type="hidden" name="activate" value="<?php echo $user->isAvaliable ? 0 : 1; ?>">
                                    <input type="submit" value="<?php echo $user->isAvaliable ? "NotAvaliable" : "Avaliable"; ?>">
                                </form>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>
                </table>
            <?php
            }
    
    
function AddMovie(){
    ?>
        <h1 style="text-align: center; padding-bottom: 30px;"><span>Add a new Movie</span></h1>
        <div class="container">
            <div style="text-align: center;">
                <div class="Form">
                    <h2 style="padding-top: 40px;padding-bottom: 40px;">Movie</h2>
                    <form name="AddForm" id="add" action="AddMovie.php" method="POST">
                        <div class="frm-element">
                            <div class="frm-label">
                                <label for="id">Movie ID: </label>
                            </div>
                            <input type="text" name="id" class="textfield">
                        </div>
                        <br>
                        <br>
                        <div class="frm-element">
                            <div class="frm-label">
                                <label for="name">Movie Name: </label>
                            </div>
                            <input type="text" name="name" class="textfield">
                        </div>
                        <br>
                        <br>
                        <div class="frm-element">
                            <div class="frm-label">
                                <label for="desc">Movie Description: </label>
                            </div>
                            <input type="text" name="desc" class="textfield">
                        </div>
                        <br>
                        <br>
                        <input type="button" name="add" value="Add" class="Button" style="margin-right: 30px;"
                            onclick="AddFrm()">
                        <input type="button" name="cancel" value="Cancel" class="Button" style="margin-left: 30px;"
                            onclick="ResetFrm()">
                        <br>
                        <br>


                        
                </div>
            </div>

            </form>
          </div>
            <?php
            }
    

        function Itemslist($items){
            ?>
            <h1>
                    <center>
                        List of Users
                    </center>
                </h1>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                    </tr>
            
                    <?php
                    foreach ($items as $item) { ?>
                        <tr>
                            <td><?php echo $item->id; ?></td>
                            <td><?php echo $item->name; ?></td>
                            <td><?php echo $item->isAvaliable ? "Avaliable" : "NotAvaliable"; ?></td>
                            <td>
                                <form name="activateForm" method="post" action="../BE/AddMovie.php">
                                    <input type="hidden" name="id" value="<?php echo $item->id; ?>">
                                    <input type="hidden" name="activate" value="<?php echo $user->isAvaliable ? 0 : 1; ?>">
                                    <input type="submit" value="<?php echo $user->isAvaliable ? "NotAvaliable" : "Avaliable"; ?>">
                                </form>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>
                </table>
            <?php
            }
            ?>

    
    