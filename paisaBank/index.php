<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <?php
            session_start();
            if(isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                if($username == 'admin'){
                    header("location: admin/index.php");
                    exit();
                } else{
                    header("location: main/index.php");
                    exit();
                }
            }
        ?>
        <div class="container">
            <!-- Codrops top bar -->
            <header>
                <h1>Paisa Bank </h1>
				
            </header>
            <section>				
                <div id="container_demo" >
 
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                            <div id="login" class="animate form">
                            <form  action="login.php" autocomplete="on" method="post"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label class="uname" data-icon="u" class="uname">Username</label>
                                    <input id="username" name="username" required type="text" placeholder="enter your username"/>
                                </p>
                                <p> 
                                    <label class="uname" data-icon="u" class="youpasswd">Password</label>
                                    <input id="password" name="password" type="password" placeholder="eg:Aiktc@786" /> 
                                </p>
                                <p class="keeplogin"> 
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                                    <label for="loginkeeping">Keep me logged in</label>
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
                                </p>
                                <p class="change_link">
                                    Not a member yet ?
                                    <a href="#toregister" class="to_register">Join us</a>
                                </p>
                            </form>
                        </div>
                        

                        <div id="register" class="animate form">
                            <form action="registration.php" autocomplete="on" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label class="uname" class="uname" data-icon="u">Username</label>
                                    <input id="usernamesignup" name="username" required type="text" placeholder="enter your username" />
                                </p>
                                <p> 
                                    <label class="youpasswd" class="uname" data-icon="u">password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. Aiktc@786"/>
                                </p>
                                <p> 
                                    <label class="uname" data-icon="u">First Name</label>
                                    <input id="firstnamesignup" name="firstname" required="required" type="text" placeholder="enter your firstname" />
                                </p>
                                <p> 
                                    <label class="uname" data-icon="u">Last Name</label>
                                    <input id="lastnamesignup" name="lastname" required="required" type="text" placeholder="enter your lastname" />
                                </p>
                                <p> 
                                    <label class="uname" data-icon="u">Contact Number</label>
                                    <input id="contactsignup" name="contact" required="required" type="text" placeholder="enter your contact" />
                                </p>
                                <p> 
                                    <label class="youmail" data-icon="e" >email ID</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="enter your mail id"/> 
                                </p>
                                <p> 
                                    <label class="uname" data-icon="u" >Aadhar Number</label>
                                    <input id="aadharsignup" name="aadhar_no" required="required" type="text" placeholder="enter your UID Number"/> 
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
<?php
    unset($_SESSION["error"]);
?>