<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/6f82847460.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav style="" class="navbar navbar-expand-lg  bg-body-tertiary">
        <div style="display: flex;justify-content: center;align-items: center;position: fixed;top: 0;"
            class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link active" href="#about">About Me</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link active" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link active" href="#services">Services</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link active" href="#contact">Contact Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home">
        <div class="main">
            <img src="" alt="">
            <h1 class="h1">I AM <br> KEVIN GUNGA</h1>
            <a class="btn" href="mycv/cv.zip" download>Download CV</a>
            <a href="#contact" class="btn">
                Hire me
            </a>
        </div>
    </section>
    <section id="about">
        <div class="container" id="">
            <h1 class="h1">ABOUT ME</h1>

            <div id="intro">

                <p class="text-1">
                    I am a dedicated and results-driven software engineer with a passion for crafting
                    efficient,
                    user-friendly solutions to complex problems. With 2years of experience, I specialize in
                    full-stack web development,graphic designing and cloud computing , and I am committed to
                    continuous learning and innovation. My work centers around creating software that not
                    only meets
                    technical standards but also enhances the overall user experience.
                </p>
            </div>
        </div>
    </section>
    <section id=" portfolio">
        <h1 class="h1">PORTFOLIO</h1>
        <div class="gallery">
            <div class="container" style="">
                <div class="card-body">
                    <h5 class="card-title">Kisii University Heart Association website</h5>
                    <p class="card-text">This website market the association to the outside world.</p>
                    <a href="#" class="btn btn-primary">Click here</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Large Language Model for Electronic Health Records in Kenya</h5>
                    <p class="card-text">This is an AI for processing and interpreting electronic health
                        records.</p>
                    <a href="#" class="btn btn-primary">Click here</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Trip Advisor</h5>
                    <p class="card-text">This website provides travel-related information, reviews, and
                        recommendations
                        for travelers.</p>
                    <a href="https://advisortrip.netlify.app/" class="btn btn-primary">Click here</a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">e-commerce</h5>
                    <p class="card-text">An online platform that facilitates buying and selling of products or
                        services
                        over the internet.</p>
                    <a href="#" class="btn btn-primary">Click here</a>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <h1 class="h1">SERVICES</h1>
        <div class="row">
            <div class="box">
                <img src="school.jpg" class="img-fluid" alt="">
                <h1 class="headings">Website Design</h1>
                <p class="text-1"> I specialize in conceptualizing and crafting visually
                    compelling
                    websites while ensuring they are seamlessly functional and user-centric. By employing a
                    combination
                    of HTML, CSS,php and JavaScript, I transform abstract ideas into interactive,
                    responsive, and
                    cross-browser compatible web experiences.</p>
            </div>
            <div class="box">
                <img src="code.jpg" class="img-fluid" alt="">
                <h1 class="h1">UX/UI <br> design</h1>
                <p class="text-1">My role as a developer with a focus on UX/UI design is distinguished by my
                    dedication to creating user-centric digital experiences. I'm deeply committed to
                    crafting intuitive
                    and aesthetically pleasing interfaces that enhance user satisfaction. My work involves a
                    combination
                    of technical skills, including HTML, CSS,java and JavaScript, to bring designs to life
                    while
                    prioritizing the seamless integration of visual elements and interactive components.</p>
            </div>
            <div class="box">
                <img src="business.jpg" class="img-fluid" alt="">
                <h1 class="h1">Digital Marketing</h1>
                <p class="text-1"> I bring a unique perspective to digital marketing as a developer,
                    seamlessly
                    integrating my
                    technical prowess with marketing strategies to enhance online visibility and engagement.
                    My role
                    involves optimizing websites for search engines (SEO), ensuring smooth user experiences,
                    and
                    employing data-driven decisions to boost organic traffic and conversions.</p>
            </div>

        </div>
    </section>
    <section id="contact">
        <h1>
            <ul>CONTACT ME</ul>
        </h1>

        <form action="" method="POST" class="form">
            <input style="width:300px;" type=" text" name="fname" class="form-control"
                placeholder="Enter Your Full Name.."><br><br>

            <input style="width:300px;" type="text" name="email" class="form-control" placeholder="Enter Your Email..">

            <label for="message" class="form-label">Enter Your Message Below:</label>

            <textarea style="width:300px;" class="form-control" name="msg" id="msg" rows="2" cols="5"> </textarea>

            <input type="submit" name="save_btn" value="SEND" id="btn btn-light">
            <div style="display:flex;flex-direction:row;justify-content:center;align-items:center;margin-top:20px;"
                class="media">

                <a style="margin-right:10px" type="button" class="btn btn-primary"
                    href="https://www.facebook.com/kevin.gunga.52"><i class="fa-brands fa-facebook fa-2x"></i></a>

                <a style="margin-right:10px" type="button" class="btn btn-secondary"
                    href="https://github.com/Kevin-Gunga"><i class="fa-brands fa-github fa-2x"></i></a>

                <a style="margin-right:10px" type="button" class="btn btn-danger"
                    href="https://instagram.com/kevingunga?igshid=OGQ5ZDc2ODk2ZA=="><i class=" fa-brands
                            fa-instagram fa-2x"></i></i></a>

                <a type="button" class="btn btn-info" href="https://x.com/GungaOkelo?t=1mF-yxiv6Hpqa_Fk6HnRWA&s=O9"><i
                        class="fa-brands fa-square-twitter fa-2x"></i>
                </a>
            </div>
        </form>

        <div>
            <?php
if (isset($_POST['save_btn'])) {
    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $message = mysqli_real_escape_string($con,$_POST['msg']);

    if (empty($fname)){
        exit();
    }
    
    if (empty($email)){
        exit();
    }

    if (empty($message)){
        exit();
    }

  $query = "INSERT INTO users 
    (fname,email,msg) VALUES('$fname','$email','$message')";


  $data=mysqli_query($con,$query);
  if ($data) {
     ?>
            <script type=text/javascript>
            alert("Data Submitted Successfully");
            </script>
            <?php
  }
  else{
    ?>
            <script type=text/javascript>
            alert("Please Try Again");
            </script>
            <?php
  }
}
?>



        </div>

    </section>


    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js "
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE " crossorigin="anonymous ">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js "
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ " crossorigin="anonymous ">
    </script>
</body>

</html>