<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
    <link rel="stylesheet" href="lightbox.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <a href="#" class = "navbar-brand">Portfolio</a>
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse navHeaderCollapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="top"><a href="#about">About</a></li>
                    <li class="top"><a href="#works">Works</a></li>
                    <li class="top"><a href="#gallery">Gallery</a></li>
                    <li class="top"><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid" id="intro">
      <div style="background:transparent !important" class="jumbotron text-center">
        <h1 style="color:Whitesmoke;">Hello There! I'm Richie Alain Ocampo</h1>
        <h3 style="color:Whitesmoke;">An aspiring web developer and photographer</h3>
        <h1 style="color:Whitesmoke;">Create.</h1>
        <h1 style="color:Whitesmoke;">Design.</h1>
        <h1 style="color:Whitesmoke;">Explore.</h1>
      </div>
    </div>

    <div class="container-fluid" id="about">
        <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-info"><h1>About Me</h1></button>
                </div>
        </div>
        <div class="row">
            <div class="col-md-6" >
                   <img src="img/ichie.jpg" class="pic-ichie">
            </div>
            <div class="col-md-6"> 
                    <div id="info">
                        <ul class="collection">
                          <li style="color: red;" "><center>Personal Information</center></li>
                          <li><b>Location:</b> 813 Nasipit Talamban, Cebu City, Philippines 6000 </li>
                          <li><b>Age :</b>21 | June 05, 1995</li>
                          <li><b>College:</b> Bachelor of Science in Computer Engineering - University of San Carlos, Talamban</li>
                          <li><b>High School:</b> University of San Carlos - North Campus, Gen. Maxilom Ave.</b></li>
                          <li><b>Elementary School:</b> Colegio De la Immaculada Concepcion, Gorordo Ave.</b></li>
                          <li><b>Email Address:</b> ichieeexd@gmail.com</b></li>
                          <li><b>Telephone/Phone:</b> 238-8992 | 09424785187</b></li>
                         </ul>
                    </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="works">
         <div class="row">
            <div class="col-md-12">
                 <button type="button" class="btn btn-info"><h1 style="color:white;">My Works</h1></button>
            </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="img/banilad.png" alt="..." class="pic-banilad">
                        <div class="caption">
                            <h3 style="color:white;">Barangay Banilad Sample Wordpress Site</h3>
                            <p style="color:white;">This Website Concept Project from my University is for the Barangay Banilad. This was created using Wordpress CMS stack.</p>
                            <p><a href="http://baniladcc.is-best.net/banilad" class="btn btn-default" role="button">See Site</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="img/atm.jpg" alt="...">
                        <div class="caption">
                            <h3 style="color:white;">ATM Web Application</h3>
                            <p style="color:white;">This was also one of our projects back in college for my Web Programming subjects. This was created by using Codeigniter MVC PHP framework.</p>
                            <p> <a href="http://ichieee.byethost12.com/CI_atm/" class="btn btn-default" role="button">See Site</a></p>
                        </div>
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                          <img src="img/materialize.png" alt="...">
                          <div class="caption">
                            <h3 style="color:white;">My Wordpress Site</h3>
                            <p style="color:white;">This Website was my first Portfolio website. Created using Wordpress with various plugins.</p>
                            <p> <a href="http://ichie.byethost12.com/wp/" class="btn btn-default" role="button">See Site</a></p>
                          </div>
                        </div>
                    </div>  
         </div>
     </div>

     <section id="gallery">
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
             <button type="button" class="btn btn-info"><h1 style="color:white;">Gallery</h1></button>
            </div>
            <div class="col-md-12">
            <ul class="photos">
                <li><a href="#">Landscapes</a></li>
                <li><a href="#">People</a></li>
            </ul>
            </div>
            <ul id="gallery-photos">
                <li class="landscapes"><a href="img/img1.jpg" data-lightbox="projects" data-title="Image One" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img src="img/img1.jpg"></a></li>
                <li class="landscapes"><a href="img/img2.jpg" data-lightbox="projects" data-title="Image Two" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img src="img/img2.jpg"></a></li>
                <li class="landscapes"><a href="img/img3.jpg" data-lightbox="projects" data-title="Image Three" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img src="img/img3.jpg"></a></li>
                <li class="landscapes"><a href="img/img4.jpg" data-lightbox="projects" data-title="Image Four" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img src="img/img4.jpg"></a></li>
                <li class="landscapes"><a href="img/img5.jpg" data-lightbox="projects" data-title="Image Five" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img src="img/img5.jpg"></a></li>
                <li class="landscapes"><a href="img/img6.jpg" data-lightbox="projects" data-title="Image Six" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img src="img/img6.jpg"></a></li>
                <li class="people hidden"><a href="img/img7.jpg" data-lightbox="projects" data-title="Image Seven" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img src="img/img7.jpg"></a></li>
                <li class="people hidden"><a href="img/img8.jpg" data-lightbox="projects" data-title="Image Eight" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img src="img/img8.jpg"></a></li>
                <li class="people hidden"><a href="img/img9.jpg" data-lightbox="projects" data-title="Image Nine" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img src="img/img9.jpg"></a></li>
                <li class="people hidden"><a href="img/img10.jpg" data-lightbox="projects" data-title="Image Ten" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img src="img/img10.jpg"></a></li>
                <li class="people hidden"><a href="img/img11.jpg" data-lightbox="projects" data-title="Image Eleven" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img src="img/img11.jpg"></a></li>
                <li class="people hidden"><a href="img/img12.jpg" data-lightbox="projects" data-title="Image Tweleve" data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit."><img src="img/img12.jpg"></a></li>
            </ul>
        </div>
    </div>
    </section>

    <div id="contact">
    <section class="test">
        <div class="container">
        <aside>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nibh ex, vehicula vel quam vitae, sollicitudin egestas odio. Vivamus nec ipsum consectetur, rutrum libero ac, vestibulum sapien. Sed molestie leo leo, eu mattis metus molestie non. In porttitor lacinia nunc, maximus tincidunt sapien faucibus ac. Sed lacus nisl, convallis nec metus sit amet, aliquet tempor nibh. Duis egestas est sed ante imperdiet, eu posuere nulla consequat. Mauris ligula augue, semper in magna nec, rhoncus lacinia felis. Vestibulum eu nisl ac urna vulputate varius. In sed urna id dui blandit interdum. Vivamus facilisis justo vitae pulvinar lobortis. Morbi blandit fermentum nulla, ac varius quam ullamcorper sed. Sed nec diam nisl.</p>
        </aside>
        <aside>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nibh ex, vehicula vel quam vitae, sollicitudin egestas odio. Vivamus nec ipsum consectetur, rutrum libero ac, vestibulum sapien. Sed molestie leo leo, eu mattis metus molestie non. In porttitor lacinia nunc, maximus tincidunt sapien faucibus ac. Sed lacus nisl, convallis nec metus sit amet, aliquet tempor nibh. Duis egestas est sed ante imperdiet, eu posuere nulla consequat. Mauris ligula augue, semper in magna nec, rhoncus lacinia felis. Vestibulum eu nisl ac urna vulputate varius. In sed urna id dui blandit interdum. Vivamus facilisis justo vitae pulvinar lobortis. Morbi blandit fermentum nulla, ac varius quam ullamcorper sed. Sed nec diam nisl.</p>
        </aside>
        <aside>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nibh ex, vehicula vel quam vitae, sollicitudin egestas odio. Vivamus nec ipsum consectetur, rutrum libero ac, vestibulum sapien. Sed molestie leo leo, eu mattis metus molestie non. In porttitor lacinia nunc, maximus tincidunt sapien faucibus ac. Sed lacus nisl, convallis nec metus sit amet, aliquet tempor nibh. Duis egestas est sed ante imperdiet, eu posuere nulla consequat. Mauris ligula augue, semper in magna nec, rhoncus lacinia felis. Vestibulum eu nisl ac urna vulputate varius. In sed urna id dui blandit interdum. Vivamus facilisis justo vitae pulvinar lobortis. Morbi blandit fermentum nulla, ac varius quam ullamcorper sed. Sed nec diam nisl.</p>
        </aside>
        </div>
    </section>
     </div>

    <footer>
        <center>
        <p>&copy Richie Ocampo 2017</p>
        </center>
    </footer>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>