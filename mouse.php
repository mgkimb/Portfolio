
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <style>@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700|Lato:400,700);

/****created and maintained  @dasdezine****/

body {
    overflow-x: hidden;
    color: #212121;
}

p {
    font-size: 20px;
}

p.small {
    font-size: 16px;
}

a,
a:hover,
a:focus,
a:active,
a.active {
    outline: 0;
    color: #fad663;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    text-transform: uppercase;
    font-family: 'Ubuntu',"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 700;
}

hr.star-light,
hr.star-primary {
    margin: 20px auto 30px;
    padding: 0;
    max-width: 250px;
    border: 0;
    border-top: solid 5px;
    text-align: center;
}

hr.star-light:after,
hr.star-primary:after {
    content: "\f197";
    display: inline-block;
    position: relative;
    top: -.8em;
    padding: 0 .25em;
    font-family: FontAwesome;
    font-size: 2em;
}

hr.star-light {
    border-color: #212121;
}

hr.star-light:after {
    color: #212121;
    background-color: #FDD200;
}

hr.star-primary {
    border-color: #212121;
}

hr.star-primary:after {
    color: #212121;
    background-color: #fff;
}

.img-centered {
    margin: 0 auto;
}

header {
    text-align: center;
    color: #212121;
    background: #fdd200;
}

header .container {
    padding-top: 100px;
    padding-bottom: 50px;
}

header img {
    display: block;
    margin: 0 auto 20px;
}

header .intro-text .name {
    padding-top: 20px;
    display: block;
    text-transform: uppercase;
    font-family: 'Ubuntu',"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 2em;
    font-weight: 700;
}

header .intro-text .skills {
    font-size: 1.25em;
    font-weight: 300;
}

@media(min-width:768px) {
    header .container {
        padding-top: 200px;
        padding-bottom: 100px;
    }

    header .intro-text .name {
        font-size: 4.75em;
    }

    header .intro-text .skills {
        font-size: 1.75em;
    }
}

@media(min-width:1024px) {
    header {
        background:#F7CC01 url("https://res.cloudinary.com/dasdezine/image/upload/v1458051926/hero_tab_xawhqo.jpg") no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: center 50px;
    }
    header .container {
        padding-top: 100px;
        padding-bottom: 200px;
    }

    header img.img-bigScreen {
        display: none;
    }

    hr.star-light:after {
    background-color: #F7CC01;
}
}

@media(min-width:1366px) {
    header {
        background-position: center 10px; 
    }
}


@media(min-width:768px) {
    .navbar-fixed-top {
        padding: 25px 0;
        -webkit-transition: padding .3s;
        -moz-transition: padding .3s;
        transition: padding .3s;
    }

    .navbar-fixed-top .navbar-brand {
        font-size: 2em;
        -webkit-transition: all .3s;
        -moz-transition: all .3s;
        transition: all .3s;
    }

    .navbar-fixed-top.navbar-shrink {
        padding: 10px 0;
    }

    .navbar-fixed-top.navbar-shrink .navbar-brand {
        font-size: 1.5em;
    }
}

.navbar {
    text-transform: uppercase;
    font-family: 'Ubuntu',"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 700;
}

.navbar-color {
    background-color: #212121;
}

.navbar a:focus {
    outline: 0;
}

.navbar .navbar-nav {
    letter-spacing: 1px;
}

.navbar-default .navbar-toggle {
    border-color:#fdd200;
}

.navbar-default .navbar-toggle:hover {
    background-color:#fdd200;
}

.navbar-default .navbar-toggle .icon-bar {
  background-color:#fff;
}

.navbar-default .navbar-nav>li>a {
    color:#fff;
}
.navbar-default .navbar-nav>li>a:hover {
    color: #fdd200;
}

.navbar-default .navbar-nav>.active>a, 
.navbar-default .navbar-nav>.active>a:hover, 
.navbar-default .navbar-nav>.active>a:focus
{
    color: #212121;
    background-color: #fdd200;
}

.navbar .navbar-nav li a:focus {
    outline: 0;
}

.navbar-default,
.navbar-inverse {
    border: 0;
}

section {
    padding: 50px 0;
}

section h2 {
    margin: 0;
    font-size: 3em;
}

section.success {
    color: #fff;
    background: #fad663;
}

@media(max-width:767px) {
    section {
        padding: 25px 0;
    }

    section.first {
        padding-top: 75px;
    }
}

@media(min-width:767px) {
    #portfolio .col-sm-3 {
        padding-right:0;
        padding-left: 0;
    }
}

}

#myLikes .portfolio-item,
#about .about-item {
    text-align: center;
}
#myLikes .portfolio-item p,#about .about-item p {
    
    text-align: center;
    line-height: 1.5;
    padding-bottom: 50px;
}
#myLikes .portfolio-item-Three p, #about .about-item-Three p {
    padding-bottom: 5px;
}

#myLikes .portfolio-item header, #about .about-item header {
    background: none;
}

.about-item .img-responsive {
    margin: 0 auto;
}

#portfolio .portfolio-item {
    right: 0;
    margin: 0 0 15px;
}

#portfolio .portfolio-item .portfolio-link,
#myLikes .portfolio-item .portfolio-link {
    display: block;
    position: relative;
    margin: 0 auto;
    max-width: 400px;
}

#myLikes .portfolio-link .fa {
    font-size: 10em;
    padding: 10px 15px;
    color:#212121;
    border-radius:6px;
    border-radius:5px 20px 5px;;
    background-color:#F7CC01;
}

.seeMore-btn .fa, #portfolio .fa, .contact-btn .fa {
    padding-right: 5px;
}

#portfolio * {
    z-index: 2;
}

hr.loc-hr {
    border-top: 2px dashed #212121;
    max-width: 85%;
}

@media(min-width:767px) {
    #portfolio .portfolio-item {
        margin: 0 0 30px;
    }
}

.btn-lg {
    padding: 5px 20px;
    line-height: 1.5;
}

div.seeMore-btn {
    margin-top: 25px;
}

div.seeMore-btn .btn-outline {
    background: #fdd200;
}

div.contact-btn .btn-outline {
    background: #d2eae3;
}

div.seeMore-btn .btn-outline, div.contact-btn .btn-outline {
    transition: all .3s ease-in-out;
}

div.seeMore-btn .btn-outline:hover, div.contact-btn .btn-outline:hover {
    background: #fff;
} 

.btn-outline {
    margin-top: 15px;
    border: solid 2px #212121;
    border-radius: 20px;
    font-size: 20px;
    color: #212121;
    background:#fff;
    transition: all .3s ease-in-out;
}

.btn-outline:hover,
.btn-outline:focus,
.btn-outline:active,
.btn-outline.active {
    color: #212121;
    background: #fdd200;
}

/*******btn double line style starts***********/

@media(min-width:767px) {

    div.btn-style {
        position: relative;
        z-index:1;
    }

    div.btn-style .btn-styleLine {
        padding:0 0;
        display: inline-block;
    }

    div.seeMore-btn .btn-styleLine {
        background: transparent;
    }

    div.contact-btn .btn-styleLine {
        background: transparent;
    }

    .double-line:before {
        content: "";
        border-top: 2px solid #212121;
        position: absolute;
        top:50%;
        left:25%;
        width: 50%;
        z-index: -1;
    }

    .double-line:after {
        content: "";
        border-bottom: 2px solid #212121;
        position: absolute;
        bottom:25%;
        left:30%;
        width: 40%;
        z-index: -1;
    }
}

@media(min-width:1024px) {
    #portfolio .double-line:before {
        left:32%;
        width:35%;
    }

    #portfolio .double-line:after {
        left:35%;
        width: 30%;
    }
}

@media(min-width:1024px) {
    div.seeMore-btn {
        position: relative;
        top:150px;
        left:10px;
    }
}

/*******btn double line style ends***********/

#contact {
    background: #d2eae3;
}
#contact hr.star-primary:after {
    background-color: #d2eae3;
}

#contact .form-padding {
    padding:0px 10px;
}

.floating-label-form-group input,
.floating-label-form-group textarea {
    z-index: 1;
    position: relative;
    padding-right: 0;
    padding-left: 0;
    border: 0;
    border-radius: 0;
    font-size: 1.5em;
    background: 0 0;
    box-shadow: none!important;
    resize: none;
}

.floating-label-form-group label {
    display: block;
    z-index: 0;
    position: relative;
    top: 2em;
    margin: 0;
    font-size: .85em;
    line-height: 1.764705882em;
    vertical-align: middle;
    vertical-align: baseline;
    opacity: 0;
    -webkit-transition: top .3s ease,opacity .3s ease;
    -moz-transition: top .3s ease,opacity .3s ease;
    -ms-transition: top .3s ease,opacity .3s ease;
    transition: top .3s ease,opacity .3s ease;
}

.floating-label-form-group::not(:first-child) {
    padding-left: 14px;
    border-left: 1px solid #eee;
}

.floating-label-form-group-with-value label {
    top: 0;
    opacity: 1;
}

.floating-label-form-group-with-focus label {
    color: #697571;
}

form .floating-label-form-group {
    background: #fad663;
    border: 2px solid #212121;
    border-radius: 6px;
}

footer {
    color: #fff;
}

footer h3 {
    margin-bottom: 30px;
}

footer .footer-above {
    padding-top: 50px;
    background-color: #2c3e50;
}

footer .footer-col {
    margin-bottom: 50px;
}

footer .footer-below {
    padding: 25px 0;
    background-color: #233140;
}

.btn-social {
    display: inline-block;
    width: 50px;
    height: 50px;
    border: 2px solid #fff;
    border-radius: 100%;
    text-align: center;
    font-size: 20px;
    line-height: 45px;
}

.btn:focus,
.btn:active,
.btn.active {
    outline: 0;
}

.scroll-top {
    z-index: 1049;
    position: fixed;
    right: 2%;
    bottom: 2%;
    width: 50px;
    height: 50px;
}

.scroll-top .btn {
    width: 50px;
    height: 50px;
    border-radius: 100%;
    font-size: 20px;
    line-height: 28px;
}

.scroll-top .btn:focus {
    outline: 0;
}


</style>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row form-padding">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div class="contact-btn text-center btn-style">
                            <div class="btn-styleLine double-line page-scroll">
                                <a href="#portfolio" class="btn btn-lg btn-outline">
                                    <i class="fa fa-fw fa-paper-plane"></i>Send
                                </a>
                            </div>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>63B East Kamalapur<br>Kolata 700028, WB India</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.behance.net/dasdezine" target="_blank" class="btn-social btn-outline" alt="Behance" title="Behance">
                                    <i class="fa fa-fw fa-behance" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://codepen.io/collection/ABajba/" target="_blank" class="btn-social btn-outline" alt="Codepen" title="Codepen">
                                    <i class="fa fa-fw fa-codepen" aria-hidden="true"></i>
                                    <span class="sr-only">codepen</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/dasdezine" target="_blank" class="btn-social btn-outline" 
                                alt="Twitter" title="Twitter">
                                    <i class="fa fa-fw fa-twitter" aria-hidden="true"></i>
                                    <span class="sr-only">twitter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contact Info</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="tel:0091 90 51 314800" class="btn-social btn-outline" alt="My Phone number" 
                                title="+91 9051314800">
                                    <i class="fa fa-fw fa-phone" aria-hidden="true"></i>
                                    <span class="sr-only">My Phone number</span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:ipabhi@gmail.com" class="btn-social btn-outline" alt="My E-mail ID" 
                                title="My E-mail ID">
                                    <i class="fa fa-fw fa-envelope" aria-hidden="true"></i>
                                    <span class="sr-only">My E-mail</span>
                                </a>
                            </li>
                        </ul>
                        <p>If you want to hire me please use phone contact or my E-mail.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Artworks created by <a href="https://www.behance.net/annadadej" target="_blank">Anna Dadej</a>
                        <br>
                        Copyright &copy; dasdezine 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <script>
        // Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});
        </script>

<!-- End Social Links -->
</body>
</html>
