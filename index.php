<?php 

ob_start();
session_start();
include_once 'init.php';
?>

<div class="scroll-progress" id="scroll-progress"></div>

<!-- Start Header -->
<header class="header" id="header">
    <nav class="nav container padd-15">
        <a href="#" class=""><img src="layout/images/man.png" width="50px"></a>
        <!-- Satrt Nav Menu -->
        <div class="nav-menu" id="nav-menu">
            <ul class="nav-list">
                <li class="nav-item"><a href="#home" class="nav-link" active-link>Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#service" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#experience" class="nav-link">Experience</a></li>
                <li class="nav-item"><a href="#portfolio" class="nav-link">Portfolio</a></li>
                <li class="nav-item"><a href="#blog" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <!-- nav Close -->
            <div class="nav-close" id="nav-close">
                <i class="lni lni-close"></i>
            </div>
        </div>
        <div class="nav-btns">
            <i class="lni lni-pallet change-theme" id="theme-button"></i>
            <div class="nav-toggle" id="nav-toggle"><i class="lni lni-grid-alt"></i></div>
        </div>
        <!-- End Nav Menu -->
    </nav>
</header>
<!-- End Header -->

<!-- Start Main -->
<main class="main-content">
    <!-- Start Home -->
    <section class="home" id="home">
        <div class="container">
            <!-- Intro -->
            <div class="intro">
                <img src="<?php echo $img . 'man.png' ?>" alt="boraq" width="150px">
                <h1>Boraq Nezar</h1>
                <span>I'm a <span class="info-text">Front-end developer</span></span>
                <ul class="social-icons">
                    <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                    <li><a href="https://t.me/boraq199"><i class="lni lni-telegram-original"></i></a></li>
                    <li><a href="https://wwww.facebook.com/boraqboraq1"><i class="lni lni-facebook-filled"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/boraq-nezar-836919157/"><i class="lni lni-linkedin-original"></i></a></li>
                    <li><a href="https://codepen.io/boraqnezar1997"><i class="lni lni-codepen"></i></a></li>
                </ul>
                <div>
                    <a href="#contact" class="btn btn-default">Hire me</a>
                </div>
                <!-- Scrole Down Mouse -->
                <div class="scroll-down">
                    <a href="#about" class="mouse-wrapper">
                        <span>Scroll Down</span>
                        <span class="mouse">
                            <span class="wheel"></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home -->

    <!-- About -->
    <section class="about section" id="about">
        <div class="container">
            <h2 class="section-title padd-15">About Me</h2>
            <div class="row">
                <div class="about-img padd-15">
                    <img src="<?php echo $img . 'man2.png' ?>" alt="" width="150px">
                </div>
                <div class="about-content padd-15">
                    <div class="rounded">
                        <div class="row">
                            <div class="about-text padd-15">
                                <p>I am Boraq Nezar, Web Developer from Iraq, I have Rich experience in web site design and building and customization, also I am good at (HTML, CSS, JS, PHP, MYSQL, PYTHON, SQL-SERVER)</p>
                                <div>
                                    <a href="layout/files/myCv.pdf" target="_blank" download="Boraq-Nezar-CV.pdf" class="btn btn-default">Download CV</a>
                                </div>
                            </div>
                            <div class="skills padd-15">
                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <h4>HTML5</h4>
                                    <div class="progress" data-target="95">
                                        <div class="progress-in" style="width: 0%; background: #F00"></div>
                                        <div class="skill-percent"></div>
                                    </div>
                                </div>
                                <!-- End -->

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <h4>CSS3</h4>
                                    <div class="progress" data-target="80">
                                        <div class="progress-in" style="width: 0%; background: #F00"></div>
                                        <div class="skill-percent"></div>
                                    </div>
                                </div>
                                <!-- End -->

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <h4>JAVASCRIPT</h4>
                                    <div class="progress" data-target="60">
                                        <div class="progress-in" style="width: 0%; background: #F00"></div>
                                        <div class="skill-percent"></div>
                                    </div>
                                </div>
                                <!-- End -->

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <h4>BOOTSTRAP</h4>
                                    <div class="progress" data-target="90">
                                        <div class="progress-in" style="width: 0%; background: #F00"></div>
                                        <div class="skill-percent"></div>
                                    </div>
                                </div>
                                <!-- End -->

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <h4>JQUERY</h4>
                                    <div class="progress" data-target="60">
                                        <div class="progress-in" style="width: 0%; background: #F00"></div>
                                        <div class="skill-percent"></div>
                                    </div>
                                </div>
                                <!-- End -->

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <h4>MYSQL</h4>
                                    <div class="progress" data-target="70">
                                        <div class="progress-in" style="width: 0%; background: #F00"></div>
                                        <div class="skill-percent"></div>
                                    </div>
                                </div>
                                <!-- End -->

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <h4>SQL-SERVER</h4>
                                    <div class="progress" data-target="50">
                                        <div class="progress-in" style="width: 0%; background: #F00"></div>
                                        <div class="skill-percent"></div>
                                    </div>
                                </div>
                                <!-- End -->

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <h4>LINUX OS</h4>
                                    <div class="progress" data-target="50">
                                        <div class="progress-in" style="width: 0%; background: #F00"></div>
                                        <div class="skill-percent"></div>
                                    </div>
                                </div>
                                <!-- End -->

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <h4>PHP</h4>
                                    <div class="progress" data-target="70">
                                        <div class="progress-in" style="width: 0%; background: #F00"></div>
                                        <div class="skill-percent"></div>
                                    </div>
                                </div>
                                <!-- End -->

                                <!-- Skill Item -->
                                <div class="skill-item">
                                    <h4>PYTHON</h4>
                                    <div class="progress" data-target="40">
                                        <div class="progress-in" style="width: 0%; background: #F00"></div>
                                        <div class="skill-percent"></div>
                                    </div>
                                </div>
                                <!-- End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Fact Item -->
                <div class="fact-item padd-15">
                    <i class="lni lni-thumbs-up"></i>
                    <div class="details">
                        <h3 class="counter" data-target="31">0</h3>
                        <p>Project done</p>
                    </div>
                </div>
                <!-- End -->

                <!-- Fact Item -->
                <div class="fact-item padd-15">
                    <i class="lni lni-coffee-cup"></i>
                    <div class="details">
                        <h3 class="counter" data-target="2">0</h3>
                        <p>Projects on Devlop</p>
                    </div>
                </div>
                <!-- End -->

                <!-- Fact Item -->
                <div class="fact-item padd-15">
                    <i class="lni lni-users"></i>
                    <div class="details">
                        <h3 class="counter" data-target="5">0</h3>
                        <p>My Team Work Persons</p>
                    </div>
                </div>
                <!-- End -->

                <!-- Fact Item -->
                <div class="fact-item padd-15">
                    <i class="lni lni-cup"></i>
                    <div class="details">
                        <h3 class="counter" data-target="113">0</h3>
                        <p>My Projects</p>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
    </section>

    <!-- Start Services  Section -->
    <section class="service section" id="service">
        <div class="container">
            <!-- Title -->
            <h2 class="section-title padd-15">Services</h2>
            <div class="row">
                <!-- Start Service Item -->
                <div class="service-item padd-15">
                    <div class="service-item-inner" style="background: rgba(249, 123, 139)">
                        <img src="<?php echo $img . 'ui.png' ?>" alt="service" width="150px">
                        <h3>UI/UX design</h3>
                        <p>Lorem, eum deleniti ut ipsum natus laudantium eveniet maiores, veritatis rerum ex corporis vitae incidunt id, ullam suscipit? Saepe?</p>
                    </div>
                </div>
                <!-- End -->

                <!-- Start Service Item -->
                <div class="service-item padd-15">
                    <div class="service-item-inner" style="background: rgba(108, 108, 229)">
                        <img src="<?php echo $img . 'ui.png' ?>" alt="service" width="150px">
                        <h3>UI/UX design</h3>
                        <p>Lorem, eum deleniti ut ipsum natus laudantium eveniet maiores, veritatis rerum ex corporis vitae incidunt id, ullam suscipit? Saepe?</p>
                    </div>
                </div>
                <!-- End -->

                <!-- Start Service Item -->
                <div class="service-item padd-15">
                    <div class="service-item-inner" style="background: rgba(249, 215, 76)">
                        <img src="<?php echo $img . 'ui.png' ?>" alt="service" width="150px" >
                        <h3>UI/UX design</h3>
                        <p>Lorem, eum deleniti ut ipsum natus laudantium eveniet maiores, veritatis rerum ex corporis vitae incidunt id, ullam suscipit? Saepe?</p>
                    </div>
                </div>
                <!-- End -->
            </div>
            <div class="text padd-15">
                <p>Looking for custom job? <a href="#">Click Here</a> to contact Me</p>
            </div>
        </div>
    </section>
    <!-- End  -->
    
    <!-- Experience -->
    <section class="section" id="experience">
        <div class="container">
            <h2 class="section-title padd-15">Experience</h2>
            <div class="row">
                <!-- Education -->
                <div class="education padd-15">
                    <div class="timeline">
                        <div class="row">
                            <div class="timeline-box">
                                <!-- Item -->
                                <div class="timeline-item">
                                    <i class="lni lni-graduation timeline-icon"></i>
                                    <h3 class="timeline-date">
                                        <i class="lni lni-calendar"></i> 2016 - present
                                    </h3>
                                    <h3 class="timeline-title">Academic Degree</h3>
                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae corrupti iusto nulla omnis amet neque? Rerum dolorem tenetur atque! Delectus, dolore. Facere tenetur numquam provident culpa, hic consequuntur totam illum?</p>
                                </div>
                                <!-- End -->

                                <!-- Item -->
                                <div class="timeline-item">
                                    <i class="lni lni-graduation timeline-icon"></i>
                                    <h3 class="timeline-date">
                                        <i class="lni lni-calendar"></i> 2016 - present
                                    </h3>
                                    <h3 class="timeline-title">Academic Degree</h3>
                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae corrupti iusto nulla omnis amet neque? Rerum dolorem tenetur atque! Delectus, dolore. Facere tenetur numquam provident culpa, hic consequuntur totam illum?</p>
                                </div>
                                <!-- End -->

                                <!-- Item -->
                                <div class="timeline-item">
                                    <i class="lni lni-graduation timeline-icon"></i>
                                    <h3 class="timeline-date">
                                        <i class="lni lni-calendar"></i> 2016 - present
                                    </h3>
                                    <h3 class="timeline-title">Academic Degree</h3>
                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae corrupti iusto nulla omnis amet neque? Rerum dolorem tenetur atque! Delectus, dolore. Facere tenetur numquam provident culpa, hic consequuntur totam illum?</p>
                                </div>
                                <!-- End -->

                                <!-- Item -->
                                <div class="timeline-item">
                                    <i class="lni lni-graduation timeline-icon"></i>
                                    <h3 class="timeline-date">
                                        <i class="lni lni-calendar"></i> 2016 - present
                                    </h3>
                                    <h3 class="timeline-title">Academic Degree</h3>
                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae corrupti iusto nulla omnis amet neque? Rerum dolorem tenetur atque! Delectus, dolore. Facere tenetur numquam provident culpa, hic consequuntur totam illum?</p>
                                </div>
                                <!-- End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
                <!-- Experience -->
                <div class="experience padd-15">
                    <div class="timeline">
                        <div class="row">
                            <div class="timeline-box">
                                <!-- Item -->
                                <div class="timeline-item">
                                    <i class="lni lni-briefcase timeline-icon"></i>
                                    <h3 class="timeline-date">
                                        <i class="lni lni-calendar"></i> 2016 - present
                                    </h3>
                                    <h3 class="timeline-title">Academic Degree</h3>
                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae corrupti iusto nulla omnis amet neque? Rerum dolorem tenetur atque! Delectus, dolore. Facere tenetur numquam provident culpa, hic consequuntur totam illum?</p>
                                </div>
                                <!-- End -->

                                <!-- Item -->
                                <div class="timeline-item">
                                    <i class="lni lni-briefcase timeline-icon"></i>
                                    <h3 class="timeline-date">
                                        <i class="lni lni-calendar"></i> 2016 - present
                                    </h3>
                                    <h3 class="timeline-title">Academic Degree</h3>
                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae corrupti iusto nulla omnis amet neque? Rerum dolorem tenetur atque! Delectus, dolore. Facere tenetur numquam provident culpa, hic consequuntur totam illum?</p>
                                </div>
                                <!-- End -->

                                <!-- Item -->
                                <div class="timeline-item">
                                    <i class="lni lni-briefcase timeline-icon"></i>
                                    <h3 class="timeline-date">
                                        <i class="lni lni-calendar"></i> 2016 - present
                                    </h3>
                                    <h3 class="timeline-title">Academic Degree</h3>
                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae corrupti iusto nulla omnis amet neque? Rerum dolorem tenetur atque! Delectus, dolore. Facere tenetur numquam provident culpa, hic consequuntur totam illum?</p>
                                </div>
                                <!-- End -->

                                <!-- Item -->
                                <div class="timeline-item">
                                    <i class="lni lni-briefcase timeline-icon"></i>
                                    <h3 class="timeline-date">
                                        <i class="lni lni-calendar"></i> 2016 - present
                                    </h3>
                                    <h3 class="timeline-title">Academic Degree</h3>
                                    <p class="timeline-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae corrupti iusto nulla omnis amet neque? Rerum dolorem tenetur atque! Delectus, dolore. Facere tenetur numquam provident culpa, hic consequuntur totam illum?</p>
                                </div>
                                <!-- End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Start Portfolio -->
    <section class="portfolio section" id="portfolio">
        <div class="container">
            <h2 class="section-title padd-15">Portfolio</h2>
            <div class="row">
                <div class="portfolio-filter padd-15">
                    <div class="portfolio-filter-inner">
                        <button type="button" class="active" data-filter="all">Everything</button>
                        <button type="button" data-filter="art">Art</button>
                        <button type="button" data-filter="creative">Creative</button>
                        <button type="button" data-filter="design">Design</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Item -->
                <div class="portfolio-item padd-15" data-category="art">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-item-thumbnail">
                            <img src="<?php echo $img . 'portfolio1.jpg' ?>" alt="">
                            <div class="mask"></div>
                        </div>
                        <span class="term">Art, Design</span>
                        <h3 class="portfolio-item-title">Html Projects</h3>
                        <span class="more-button">&hellip;</span>
                    </div>
                </div>
                <!-- End -->

                <!-- Item -->
                <div class="portfolio-item padd-15"  data-category="art">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-item-thumbnail">
                            <img src="<?php echo $img . 'portfolio2.jpg' ?>" alt="">
                            <div class="mask"></div>
                        </div>
                        <span class="term">Art, Design</span>
                        <h3 class="portfolio-item-title">Html Projects</h3>
                        <span class="more-button">&hellip;</span>
                    </div>
                </div>
                <!-- End -->

                <!-- Item -->
                <div class="portfolio-item padd-15" data-category="creative">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-item-thumbnail">
                            <img src="<?php echo $img . 'portfolio3.jpg' ?>" alt="">
                            <div class="mask"></div>
                        </div>
                        <span class="term">Art, Design</span>
                        <h3 class="portfolio-item-title">Html Projects</h3>
                        <span class="more-button">&hellip;</span>
                    </div>
                </div>
                <!-- End -->

                <!-- Item -->
                <div class="portfolio-item padd-15" data-category="creative">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-item-thumbnail">
                            <img src="<?php echo $img . 'portfolio4.jpeg' ?>" alt="">
                            <div class="mask"></div>
                        </div>
                        <span class="term">Art, Design</span>
                        <h3 class="portfolio-item-title">Html Projects</h3>
                        <span class="more-button">&hellip;</span>
                    </div>
                </div>
                <!-- End -->

                <!-- Item -->
                <div class="portfolio-item padd-15" data-category="design">
                    <div class="portfolio-item-inner">
                        <div class="portfolio-item-thumbnail">
                            <img src="<?php echo $img . 'portfolio5.jpg' ?>" alt="">
                            <div class="mask"></div>
                        </div>
                        <span class="term">Art, Design</span>
                        <h3 class="portfolio-item-title">Html Projects</h3>
                        <span class="more-button">&hellip;</span>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Start Testimonial -->
    <section class="section">
        <div class="container">
            <h2 class="section-title padd-15">Clients & Reviews</h2>
            <div class="swiper testimonial-wrapper">
                <div class="swiper-wrapper">
                    <!-- Item -->
                    <div class="testimonial-item swiper-slide">
                        <div class="thumb">
                            <img src="<?php echo $img . 'testi5.png' ?>" alt="" width="100px">
                        </div>
                        <h3>Boraq</h3>
                        <span class="subtitle">Prodect designer at Dribble</span>
                        <div class="comment">I Enjoy Working Withe the Theme and Learn So much. You guys make the process fun and interesting. good luck!</div>
                    </div>
                    <!-- End -->

                    <!-- Item -->
                    <div class="testimonial-item swiper-slide">
                        <div class="thumb">
                            <img src="<?php echo $img . 'testi4.png' ?>" alt="" width="100px">
                        </div>
                        <h3>Boraq</h3>
                        <span class="subtitle">Prodect designer at Dribble</span>
                        <div class="comment">I Enjoy Working Withe the Theme and Learn So much. You guys make the process fun and interesting. good luck!</div>
                    </div>
                    <!-- End -->

                    <!-- Item -->
                    <div class="testimonial-item swiper-slide">
                        <div class="thumb">
                            <img src="<?php echo $img . 'testi3.png' ?>" alt="" width="100px">
                        </div>
                        <h3>Boraq</h3>
                        <span class="subtitle">Prodect designer at Dribble</span>
                        <div class="comment">I Enjoy Working Withe the Theme and Learn So much. You guys make the process fun and interesting. good luck!</div>
                    </div>
                    <!-- End -->

                    <!-- Item -->
                    <div class="testimonial-item swiper-slide">
                        <div class="thumb">
                            <img src="<?php echo $img . 'testi2.png' ?>" alt="" width="100px">
                        </div>
                        <h3>Boraq</h3>
                        <span class="subtitle">Prodect designer at Dribble</span>
                        <div class="comment">I Enjoy Working Withe the Theme and Learn So much. You guys make the process fun and interesting. good luck!</div>
                    </div>
                    <!-- End -->

                    <!-- Item -->
                    <div class="testimonial-item swiper-slide">
                        <div class="thumb">
                            <img src="<?php echo $img . 'testi1.png' ?>" alt="" width="100px">
                        </div>
                        <h3>Boraq</h3>
                        <span class="subtitle">Prodect designer at Dribble</span>
                        <div class="comment">I Enjoy Working Withe the Theme and Learn So much. You guys make the process fun and interesting. good luck!</div>
                    </div>
                    <!-- End -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Start Blog -->
    <section class="section" id="blog">
        <div class="container">
            <h2 class="section-title padd-15">Latest Posts</h2>
            <div class="row">
                <!-- Blog Item -->
                <div class="blog-item padd-15">
                    <div class="inner">
                        <div class="thumb">
                            <a href="#"><span class="category">Reviews</span></a>
                            <a href="#"><img src="<?php echo $img . '4.jpg' ?>" alt=""></a>
                        </div>
                        <div class="details">
                            <h3 class="title"><a href="#">5 Best App Development Tool For Your Projects</a></h3>
                            <ul class="meta">
                                <li>09 February, 2021</li>
                                <li>Boraq</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Blog Item -->
                <div class="blog-item padd-15">
                    <div class="inner">
                        <div class="thumb">
                            <a href="#"><span class="category">Reviews</span></a>
                            <a href="#"><img src="<?php echo $img . '3.jpg' ?>" alt=""></a>
                        </div>
                        <div class="details">
                            <h3 class="title"><a href="#">5 Best App Development Tool For Your Projects</a></h3>
                            <ul class="meta">
                                <li>09 February, 2021</li>
                                <li>Boraq</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Blog Item -->
                <div class="blog-item padd-15">
                    <div class="inner">
                        <div class="thumb">
                            <a href="#"><span class="category">Reviews</span></a>
                            <a href="#"><img src="<?php echo $img . '1.jpg' ?>" alt=""></a>
                        </div>
                        <div class="details">
                            <h3 class="title"><a href="#">5 Best App Development Tool For Your Projects</a></h3>
                            <ul class="meta">
                                <li>09 February, 2021</li>
                                <li>Boraq</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Blog Item -->
                <div class="blog-item padd-15">
                    <div class="inner">
                        <div class="thumb">
                            <a href="#"><span class="category">Reviews</span></a>
                            <a href="#"><img src="<?php echo $img . '2.jpg' ?>" alt=""></a>
                        </div>
                        <div class="details">
                            <h3 class="title"><a href="#">5 Best App Development Tool For Your Projects</a></h3>
                            <ul class="meta">
                                <li>09 February, 2021</li>
                                <li>Boraq</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Start Contact -->
    <section class="contact section" id="contact">
        <div class="container">
            <h2 class="section-title padd-15">Contact US</h2>
            <div class="row">
                <!-- Contact Box -->
                <div class="contact-box padd-15">
                    <div class="contact-data">
                        <!-- Contact Information -->
                        <div class="contact-information">
                            <h3 class="contact-subtitle">Call Us for instant support</h3>
                            <span class="contact-description">
                                <i class="lni lni-phone contact-icon"></i>
                                <a href="tel:+964 771 145 9546">+964 771 145 9546</a>
                            </span>
                        </div>

                        <div class="contact-information">
                            <h3 class="contact-subtitle">write us by mail</h3>
                            <span class="contact-description">
                            <i class="fas fa-envelope fa-fw"></i>
                                <a href="mailto:boraqnz@boraq.site"> boraqnz@boraq.site</a>
                            </span>
                        </div>
                        <!-- End -->
                    </div>
                </div>
                <!-- End -->

                <!-- Start Contact Form -->
                <form action="" class="contact-form padd-15" id="contactForm" method="POST">
                    <div class="contact-inputs">
                        <!-- Start Content -->
                        <div class="contact-content">
                            <input type="email" name="email" id="email" class="contact-input">
                            <label for="" class="contact-label">Email</label>
                            <span></span>
                        </div>
                        <!-- End -->

                        <!-- Start Content -->
                        <div class="contact-content">
                            <input type="text" name="subject" id="subject" class="contact-input">
                            <label for="" class="contact-label">subject</label>
                            <span></span>
                        </div>
                        <!-- End -->

                        <!-- Start Content --> 
                        <div class="contact-content contact-area">
                            <textarea name="message" id="message" cols="30" rows="10" class="contact-input"></textarea>
                            <label for="" class="contact-label">Message</label>
                            <span></span>
                            <i class="fas fa-redo fa-fw fa-spin" id="msgSendIcon"></i>
                        </div>
                        <!-- End -->

                        <!-- Btn -->
                        <button type="submit" class="btn btn-default" id="sendMessage" value="">Send Message</button>
                    </div>
                    <div class="alertBox"></div>
                </form>
                <!-- End -->

            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Start Footer  -->
    <footer class="footer">
        <div class="container">
            <div class="footer-text padd-15">
                <p>&copy; CREATED WITH <i class="fas fa-heart fa-fw"></i> BY BORAQ</p>
            </div>
        </div>
    </footer>
    <!-- End -->

    <!-- Theme Customize -->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p>Manager your font size, color, and background</p>
            <!-- Font size -->
            <div class="font-size">
                <h3>Font Size</h3>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2"></span>
                        <span class="font-size-3 active"></span>
                        <span class="font-size-4"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>
            <!-- End -->
            <!-- Color -->
            <div class="color">
                <h3>Color</h3>
                <div class="choose-color">
                    <span class="color-1"></span>
                    <span class="color-2"></span>
                    <span class="color-3 active"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>
            <!-- End -->
            <!-- Background -->
            <div class="background">
                <h3>Background</h3>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>

                    <div class="bg-2">
                        <span></span>
                        <h5 for="bg-2">Dim</h5>
                    </div>

                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Dark</h5>
                    </div>
                </div>
            </div>
            <!-- End -->
        </div>
    </div>
    <!-- End -->
</main>
<!-- End Main -->

<?php
include_once $temp . 'footer.php';
ob_end_flush();