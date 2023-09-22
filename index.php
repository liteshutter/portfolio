<?php
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $emessage = $_POST['comment'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'feedback';

        $conn = mysqli_connect($host, $user, $pass, $dbname);

        $sql = "INSERT INTO userfeedback(fname, lname, email, comment) VALUES('$fname', '$lname', '$email', '$emessage')";
        mysqli_query($conn, $sql);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rui Laite</title>
    
        <!-- <link rel="icon" href="./assets/img/Logo/favicon.png" type="image/png"> -->
    
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/about.css">
        <link rel="stylesheet" href="./assets/css/xp.css">
        <link rel="stylesheet" href="./assets/css/services.css">
        <link rel="stylesheet" href="./assets/css/project.css">
        <link rel="stylesheet" href="./assets/css/contacts.css">
    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700;800&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="profile">
                <!-- <div class="socialIcons">
                    <ul>
                        <li><a href="#"></a><img src="./assets/img/Instagram_48px.png" alt=""></li>
                        <li><a href="#"></a><img src="./assets/img/linkedin_48px.png" alt=""></li>
                        <li><a href="#"></a><img src="./assets/img/YouTube_48px.png" alt=""></li>
                    </ul>
                </div> -->
                <div id="title">
                    <h1>Hello</h1>
                    <div class="wrapper">
                        <div class="cols cols0">
                            <!-- <span class="topline">Hello</span> -->
                            <h2>I'm <span class="multiText"></span></h2>
                        </div>
                        <div class="cols cols0">
                            <div class="imgBox">
                                <!-- <img src="./assets/img/Other1.png" alt="" id="splash"> -->
                                <img src="./assets/img/Other2.png" alt="" id="splash">
                                <img src="./assets/img/Other3.png" alt="" id="splash1">
                                <img src="./assets/img/rocket.png" alt="" id="splash2">
                            </div>
                        </div>                        
                    </div>
                    <div class="btn">
                        <a href="#contact" class="bTn">Let's Talk</a>
                        <a href="" class="bTn" id="cvBtn">Download CV</a>
                    </div>
                </div>
                <!-- <div class="web">
                    <ul>
                        <li><a href="#"><img src="./assets/img/Logo/liteshutter.jpg" alt=""></a></li>
                        <li><a href="#"><img src="./assets/img/Logo/code_creator.png" alt=""></a></li>
                    </ul>
                </div> -->
            </div>
            <div class="info">                    
                <div id="iContainer">
                    <div id="box">
                        <div class="spin-container">
                            <div class="shape">
                                <div class="bd"></div>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
            <div class="menu">                        
                <ul>
                    <li><a href="#title"><img src="./assets/img/home.png" alt=""></a></li>
                    <li><a href="#about"><img src="./assets/img/user.png" alt=""></a></li>
                    <li><a href="#xP"><img src="./assets/img/code.png" alt=""></a></li>
                    <li><a href="#services"><img src="./assets/img/services.png" alt=""></a></li>
                    <li><a href="#projects"><img src="./assets/img/project.png" alt=""></a></li>
                    <li><a href="#contact"><img src="./assets/img/contact.png" alt=""></a></li>
                </ul>
            </div>
        </header>
        <main>
            <section>
                <div class="about" id="about">
                    <h2>About Me</h2>
                    <div class="boxes">
                        <div class="content">
                            <div class="box">
                                <img src="./assets/img/gold_medal_64px.png" alt="">
                                <h4>Experience</h4>
                                <p>3 Years</p>
                            </div>
                            <!-- <div class="info">
                                <img src="./assets/img/member_64px.png" alt="">
                                <h4>Clients</h4>
                                <p>10+ Clients</p>
                            </div> -->
                            <div class="box">
                                <img src="./assets/img/view_quilt_64px.png" alt="">
                                <h4>Projects</h4>
                                <p>6 Projects</p>
                            </div>
                        </div>
                        <div class="content">
                            <div class="info">
                                <p>
                                    I am a developer, designer, and photographer. I have a passion for creating beautiful and functional things, and I use my skills in all three areas to bring my ideas to life.
                                </p>
                                <p>                                  
                                    As a developer, I build websites and applications that are both user-friendly and visually appealing. I am also skilled in back-end development, and I enjoy working on complex projects that require a deep understanding of code.
                                </p>
                                <p>
                                    As a designer, I create graphics, logos, and other visual content that is both effective and aesthetically pleasing. I am also skilled in user experience (UX) design, and I am passionate about creating products and services that are easy and enjoyable to use.
                                </p>
                                <p>
                                    As a photographer, I capture images that tell stories and evoke emotions. I am skilled in both portrait and landscape photography, and I enjoy working with clients to create images that they will cherish for years to come.
                                </p>
                                <p>
                                    I am a creative and hardworking individual with a strong desire to learn and grow. I am always looking for new challenges and opportunities to use my skills to make a difference in the world..</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xp" id="xP">
                    <h2>My Experience</h2>
                    <div class="skills">
                        <div class="frontEnd">
                            <h3>Front-End Development</h3>
                            <div class="boxes">
                                <div class="box">
                                    <div class="lang">                                                                    
                                        <img src="./assets/img/verified.png" alt="">                                
                                        <div class="list">
                                            <h4>HTTP</h4>
                                            <p>Experienced</p>
                                        </div>
                                    </div>
                                    <div class="lang">                                                                    
                                        <img src="./assets/img/verified.png" alt="">                                
                                        <div class="list">
                                            <h4>CSS</h4>
                                            <p>Experienced</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">                                
                                    <div class="lang">                                                                    
                                        <img src="./assets/img/verified.png" alt="">                                
                                        <div class="list">
                                            <h4>Java Script</h4>
                                            <p>Basic</p>
                                        </div>
                                    </div>
                                    <div class="lang">                                                                    
                                        <img src="./assets/img/verified.png" alt="">                                
                                        <div class="list">
                                            <h4>React</h4>
                                            <p>Intermediary</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="backEnd">
                            <h3>Back-End Development</h3>
                            <div class="boxes">
                                <div class="box">
                                    <div class="lang">                                                                    
                                        <img src="./assets/img/verified.png" alt="">                                
                                        <div class="list">
                                            <h4>C#</h4>
                                            <p>Intermediary</p>
                                        </div>
                                    </div>
                                    <div class="lang">                                                                    
                                        <img src="./assets/img/verified.png" alt="">                                
                                        <div class="list">
                                            <h4>Python</h4>
                                            <p>Basic</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">                                
                                    <div class="lang">                                                                    
                                        <img src="./assets/img/verified.png" alt="">                                
                                        <div class="list">
                                            <h4>Php</h4>
                                            <p>Basic</p>
                                        </div>
                                    </div>
                                    <div class="lang">                                                                    
                                        <img src="./assets/img/verified.png" alt="">                                
                                        <div class="list">
                                            <h4>MySql</h4>
                                            <p>Experienced</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services" id="services">
                    <h2>My Services</h2>
                    <div class="boxes">
                        <div class="box">
                            <h3>UI/UX Design</h3>
                            <ul>
                                <li>User research</li>
                                <li>Information architecture</li>
                                <li>Wireframing and prototyping</li>
                                <li>Visual design</li>
                                <li>Usability testing</li>
                            </ul>
                        </div>
                        <div class="box">
                            <h3>Web Development</h3>
                            <ul>
                                <li>Website design</li>
                                <li>Development</li>
                                <li>E-commerce development</li>
                                <li>(CMS) development</li>
                                <li>Web hosting</li>
                                <li>Web maintenance</li>
                            </ul>
                        </div>
                        <div class="box">
                            <h3>Photography</h3>
                            <ul>
                                <li>Portrait photography</li>
                                <li>Landscape photography</li>
                                <li>Event photography</li>
                                <li>Product photography</li>
                                <li>Real estate photography</li>
                                <li>Album design</li>
                                <li>Online galleries</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="project" id="project">
                    <h2>My Projects</h2>
                    <div class="boxes">
                        <div class="box">
                            <h3>Liteshutter Website</h3>
                            <a href="https://www.figma.com/file/FsNewBoknkTvpUvbcNdiUJ/Untitled?type=design&node-id=2%3A3&mode=dev">
                                <img src="./assets/img/liteshutter.PNG" alt="" width="200px">
                            </a>
                        </div>
                        <div class="box">
                            <h3>Liteshutter Website</h3>
                            <a href="https://www.figma.com/file/FsNewBoknkTvpUvbcNdiUJ/Untitled?type=design&node-id=2%3A3&mode=dev">
                                <img src="./assets/img/liteshutter.PNG" alt="" width="200px">
                            </a>
                        </div>
                        <div class="box">
                            <h3>Liteshutter Website</h3>
                            <a href="https://www.figma.com/file/FsNewBoknkTvpUvbcNdiUJ/Untitled?type=design&node-id=2%3A3&mode=dev">
                                <img src="./assets/img/liteshutter.PNG" alt="" width="200px">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="projects" id="projects">
                    <h2>On-going Projectos</h2>
                    <div class="proboxes">
                        <div class="boxes">
                            <div class="box">                                
                                <p id="pa">
                                    <a href="https://www.figma.com/file/FsNewBoknkTvpUvbcNdiUJ/Untitled?type=design&node-id=2%3A3&mode=dev">
                                        <img src="./assets/img/codecreator.PNG" alt="">
                                    </a>
                                    Code Creator Web Design
                                </p>
                            </div>
                            <div class="box">
                                <p id="pa">
                                    <a href="https://www.figma.com/file/FsNewBoknkTvpUvbcNdiUJ/Untitled?type=design&node-id=2%3A3&mode=dev">
                                        <img src="./assets/img/liteshutter.PNG" alt="">
                                    </a>
                                    liteshutter Website
                                </p>
                            </div>
                            <div class="box">
                                <p id="pa">
                                    <a href="https://www.figma.com/file/FsNewBoknkTvpUvbcNdiUJ/Untitled?type=design&node-id=2%3A3&mode=dev">
                                        <img src="./assets/img/codecreator.PNG" alt="">
                                    </a>
                                    Code Creator Web Design
                                </p>
                            </div>
                        </div>
                        <div class="boxes">
                        </div>
                    </div>
                </div> -->
                <div class="contact" id="contact">
                    <h2>Contact me</h2>
                    <div class="contactBoxes">
                        <div class="boxes">
                            <div class="box">
                                <h3>Email</h3>
                                <a href="mailto:r-laite@outlook.com"><img src="./assets/img/Email_96px.png" alt="">r-laite@outlook.com</a>
                                <p>Send Mail</p>
                            </div>
                            <div class="box">
                                <h3>Whatsapp</h3>
                                <a href="https://wa.me/c/258842525842"><img src="./assets/img/whatsapp_96px.png" alt="">+258 842 525 842</a>
                                <p>Whatsapp Me</p>
                            </div>
                        </div>
                        <div class="boxes">
                            <div class="form">
                                <form action="#" method="POST">
                                    <input id="frm" type="text" name="fname" placeholder="First Name" required="required">
                                    <input id="frm" type="text" name="lname" placeholder="Last Name" required="required">
                                    <input id="frm" type="email" name="email" placeholder="Email" required="required"> <br>
                                    <textarea id="frmm" name="comment" placeholder="Your Comment..." required="required"></textarea> <br>
                                    <div class="center">
                                        <button id="btn" name="submit" value="Send Data">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <script>
            var typingEffect = new Typed(".multiText",{
                strings: ["Developer", "Designer", "Photographer"],
                loop: true,
                typeSpeed: 50,
                BackSpeed: 80,
                backDelay: 1500,
            })
        </script>
    </body>
</html>