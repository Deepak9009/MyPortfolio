<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Personal Portfolio</title>
    <script src="https://kit.fontawesome.com/6c500d8303.js" crossorigin="anonymous"></script>
    <script src="javascript1.js"></script>
    <style>
        .error{color:#FF0000;}
    </style>
</head>
<!-- <script>
    function errorMessage() {
        var error = document.getElementById("error")
        if (isNaN(document.getElementById("contactno").value))
        {
             
            // Changing content and color of content
            error.textContent = "Please enter a valid number"
            error.style.color = "red"
        } else {
            error.textContent = ""
        }
    }
</script> -->
<body>
    <?php
     $nameErr=$emailErr=$genderErr=$contactnoErr=$commentErr="";
     $name=$email=$gender=$contactno=$comment="";
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        if(empty($_POST["Name"])){
            $nameErr="Please Enter Valid Name ";
        }
        else{
            $name=test_input($_POST["Name"]);
            if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
                $nameErr="Name must only contain letters!";
            }
        }
        
        if(empty($_POST["Email"])){
            $emailErr="please Enter Valid Email Address";
        }
        else{
            $email=test_input($_POST['Email']);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $emailErr="The Email Adress is incorrect";
            }
        }
    
        if(empty($_POST["contactno"])){
            $contactnoErr="Please Enter contact No.";
        }
        else{
            $contactno=test_input($_POST["contactno"]);
            if(!preg_match("/^[0-9]*$/",$contactno)){
                   $contactnoErr="only NUmeric Value is allowed";
            }        
        }
        if(empty($_POST["gender"])){
            $genderErr="Please select Gender";
        }
        else{
            $gender=test_input($_POST["gender"]);
        }
    
        if(empty($_POST["comment"])){
            $commentErr="Please Write Some Comment";
        }
        else{
            $comment=test_input($_POST["comment"]);
        }   
     }
     function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    ?>
    
        <div class="main">
            <div class="navcontainer">
                <div class="btnC">
                    <a class="btn home" href="">Home</a>
                    <a class="btn projects" href="#cource">Projects</a>
                    <a class="btn aboutMe" href="#aboutme">AboutMe</a>
                    <a class="btn contact-Me" href="#contactme">ContactMe</a>
                </div>
                <div class="icons">
                    <div class="icons fb"><i class="fa-brands fa-square-facebook"></i></div>
                    <div class="icons insta"><i class="fa-brands fa-instagram"></i></div>
                    <div class="icons twitter"><i class="fa-brands fa-twitter"></i></div>
                    <div class="icons linkedin"><i class="fa-brands fa-linkedin-in"></i></div>
                </div>
            </div>
            <h1 class="typewrite" data-period="2000"
                data-type='[ "Hello,There...", "I Love 2 Design.", "I Love 2 Develop.","I Love 2 Learn"]'>
            </h1>
            <div class="second">
                <div class="intro">
                    <p>
                    <h3>Hi, I'm Deepak Rajput</h3>I am currently persuing Bachelor of Technology In Computer Science
                    From GLA University Mathura.
                    I am a Frontend Developer Intern and I'm passionate about improving
                    the lives of other through design and am constantaly looking to learn new Things
                    Everyday .

                    </p>
                </div>

                <div class="imgpng">
                    <img src="images/PNG.png" alt="pngImage">
                </div>
            </div>
            <div class="down">
                <div class="call-to-action DR"><a href="">Download Resume</a></div>
                <div class="call-to-action DR i2"><a href="">HiredMe</a></div>
            </div>



            <div class="cource" id="cource">
                <article class="skills">
                    <h2>My Skills</h2>
                    <ul>
                        <img src="images/html.png" alt="">
                        <img src="images/css.png" alt="">
                        <img src="images/javascript.png" alt="">
                        <img src="images/react.png" alt="">
                        <img src="images/nodejs.png" alt="">
                        <img src="images/c.png" alt="">
                        <img src="images/java.png" alt="">
                        <img src="images/python.png" alt="">
                        <img src="images/php.png" alt="">
                        <!-- <li><i class="fa-brands fa-html5"></i>
                        <li><i class="fa-brands fa-css3-alt"></i></li>
                        <li><i class="fa-brands fa-js"></i></li>   
                        <li><i class="fa-brands fa-github"></i></li>   
                        <li><i class="fa-brands fa-react"></i></li>   
                        <li><i class="fa-brands fa-node"></i></li>      -->
                    </ul>
                    <div class="tt">
                        <h2>Tools i Use</h2>
                        <img src="images/vscode.png" alt="">
                        <img src="images/git.png" alt="">
                        <img src="images/github.png" alt="">
                    </div>

                    <h2>Projects</h2>

                    <div class="project-container">
                        <div class="project-box">
                            <div class="project-img">
                                <img src="images\Web Designing.jpg" alt="Img">
                            </div>
                            <div class="project-title">
                                <h3>My Portfolio</h3>
                            </div>
                            <div class="project-desc">
                                <p>This Website is Designed by HTML,CSS and javscript.</p>
                            </div>
                            <div class="call-to-action"><a href="">Read more</a></div>
                        </div>
                        <div class="project-box">
                            <div class="project-img">
                                <img src="images\Web Development.jpg" alt="Img">
                            </div>
                            <div class="project-title">
                                <h3>Form</h3>
                            </div>
                            <div class="project-desc">
                                <p>This Form is made by using HTML,CSS and php.It colllects users details
                                    and store on php Myadmin Database</p>
                            </div>
                            <div class="call-to-action"><a href="">Read more</a></div>
                        </div>
                        <div class="project-box">
                            <div class="project-img">
                                <img src="images\Mobile App Development.jpg" alt="Img">
                            </div>
                            <div class="project-title">
                                <h3>Chatting App</h3>
                            </div>
                            <div class="project-desc">
                                <p>This Hybrid Mobile App(ios+android) is made by using Flutter Framework and use
                                    Firebase for store user authentication detils and user Information </p>
                            </div>
                            <div class="call-to-action"><a href="">Read more</a></div>
                        </div>
                    </div>
                </article>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
            <div class="contactMe" id="contactme">
                <h2>Contact Me</h2>
                <h3 class="field">Enter Your Name</h3>
                <input type="text" class="inp" placeholder=" Your Name" name="Name">
                <span id="error" class="error">*<?php echo "<br> $nameErr ";?></span>
                 <!-- <script>
                    function validateForm() {
                            let x = document.forms["myForm"]["Name"].value;
                            if (x == "") {
                                 document.write("Name must be filled out");
                                return false;
                                }
                            }
                 </script> -->
                <h3 class="field">Enter Your Email</h3>
                <input type="email" class="inp" placeholder="Your Email" name="Email">
                <span class="error" id="error">*<?php echo"<br> $emailErr "; ?></span>
                <h3 class="field">Enter Your Contact Number</h3>
                <input type="number" class="inp" Id="contactno" placeholder="Contact number" name="contactno" size="10">
                 <span  class="error" id="error">*<?php echo "<br> $contactnoErr ";?></span>
                <h3 class="field">Gender </h3>
                <div class="radio">
                    <input type="radio" name="gender" id="gen"><label class="lbl">Male</label> 
                    <input type="radio" name="gender" id="gen"><label class="lbl"> Female</label>
                    <input type="radio" name="gender" id="gen"><label class="lbl">Not Know</label> 
                 </div>
                <span class="error" id="error"><?php echo "<br> $genderErr ";?></span>
                 <h3 class="cmmnt">Comment</h3>
                 <input type="text" name="comment" id="">
                 <span class="error" id="error">*<?php echo"<br> $commentErr ";?></span>
                
                <p>Agree & continue<input type="checkbox" class="check" name="Checkbox"></p>
                
                <input type="submit" name="submit" value="submit" class="submit">
            </div>
            </form>

        </div>
        <div class="aboutme" id="aboutme">
            
        </div>

</body>

</html>