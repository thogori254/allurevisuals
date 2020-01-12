<!DOCTYPE html>
<!--
Template Name: Geodarn
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Allure Visuals</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
 -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/custom.flexslider.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/layout.css') }}" media="all" />

 <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/framework.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/custom_css.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/fontawesome-4.6.3.min.css') }}" />

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<!-- <div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">  -->
  

  <!-- ################################################################################################ -->
 <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
       <!--  <h1><a href="">Allure Visuals</a></h1> -->
       <img src="{{ asset('assets/images/Allure_Visuals_Logo.png')}}">
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear" style="color: black;">
          <li class="active"><a href="home">Home</a></li>
          <li><a class="drop" href="products">Products and Services</a>
            <ul>
              <li><a href="products#productspagegraphics">Graphics Design</a></li>
              <li><a href="products#productspagewebdesign">Web Design</a></li>
               <li><a href="products#productspagemobiledesign">Mobile App design</a></li>
                <li><a href="products#productspageSMadmin">Social Media Administrations</a></li>
                 <li><a href="products#productspagebranding">Apparell & Items branding</a></li>
                  <li><a href="products#productspageSEO">SEO OPTIMIZATION</a></li>
            </ul>
          </li>
        <li><a href="portfolio">Portfolio</a></li>
           <li class="drop" ><a href="contact">Contact Us</a>
              <ul>
              <li><a href="contact#aboutus">About Us</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
<div id="slide" style="height: 500px;">
  <div class="slideshow-container">
    <div class="homepageSlides fade" style="position: relative;"> <img style="height: 500px; width: 100%;" src="{{ asset('assets/images/Slider 1.png')}}" >

        <a href="products#productspagegraphics" class="linkbutton">BUY NOW</a>

     </div>
    <div class="homepageSlides fade"  > <img style="height: 500px; width: 100%;" src="{{ asset('assets/images/Slider 2.png')}}" >

        <a href="products#productspagewebdesign" class="linkbutton">BUY NOW</a>

     </div>
    <div class="homepageSlides fade"  > <img style="height: 500px; width: 100%;" src="{{ asset('assets/images/Slider 3.png')}}" >

        <a href="products#productspagemobiledesign" class="linkbutton">BUY NOW</a>

     </div>
    <div class="homepageSlides fade"  > <img style="height: 500px; width: 100%;" src="{{ asset('assets/images/Slider 4.png')}}" >

        <a href="products#productspagebranding" class="linkbutton">BUY NOW</a>

     </div>
    <div class="homepageSlides fade"  > <img style="height: 500px; width: 100%;" src="{{ asset('assets/images/Slider 5.png')}}" > 

        <a href="products#productspageSMadmin" class="linkbutton">BUY NOW</a>

    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a> 
    <a class="next" onclick="plusSlides(1)">&#10095;</a> 
  </div>
  <br>
  <div style="text-align:center"> 
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
   </div>
 </div>  
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div id = "core_values">
  <div class="core_values_container">
    <div class="core_values_row">
<span class="left_Span">
      <span class="span_img">
       <img id = "img_span"src="{{ asset('assets/images/Elegance3.jpeg')}}">
      </span>
      <span class="span_title">
        elegance
      </span>
      <p class="productsdescription">
           Elegance is not about being noticed. It is about being remembered. 
         </p>
</span>
<span class="right_Span">
        <span class="span_img">
       <img id = "img_span"src="{{ asset('assets/images/simplicity2.jpeg')}}">
      </span>
      <span class="span_title">
        simplicity
      </span>
            <p class="productsdescription">
              Simplicity is the keynote of all true elegance
            </p>
</span>
<span class="right_Span">
        <span class="span_img">
       <img id = "img_span"src="{{ asset('assets/images/creativity.jpeg')}}">
      </span>
      <span class="span_title">
        creativity
      </span>
            <p class="productsdescription">
              Creativity is intelligence having fun.
            </p>
</span>
<span class="right_Span">
      <span class="span_img">
       <img id = "img_span"src="{{ asset('assets/images/authenticity3.jpeg')}}">
      </span>
      <span class="span_title">
        Authenticity
      </span>
            <p class="productsdescription">
              No one ever made a difference by being like everyone else.
            </p>
            </span>
</div>
</div>
</div>


<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="btmspace-30 center">
      <h3 class="nospace">OUR CLIENTS</h3>
       <img id = "img_clients" src="{{ asset('assets/images/allurevisualsclients.png')}}">
    </div>

<div id='inspiration' style="padding-top:20px;">
<h4 style="margin-bottom: 20px; text-align: center;">Our inspiration</h4>

<div class ='child_div_1'>
       <img style="max-height: 100%; max-width: 100%; object-fit: contain;" id="img_testimonial" src="{{ asset('assets/images/leornardo_davinci.jpeg')}}">

</div>
<div class ='child_div_2'>
 <h5 style=" color: #333; font-style: italic; font-weight: bold; text-transform: capitalize;">Leornardo Davinci</h5> 
<P  style="     font-family: Georgia, 'Times New Roman', Times, serif;
     color: #333;
     text-align: justify;
     font-size: 19px;
     letter-spacing: 2px;">“Simplicity is the Ultimate
Sophistication”</P>
</div>
</div>

<div class="testimonialSlides" style="padding-top:20px;" >
<div id='messagefromfounders'>
<h4 style="margin-bottom: 20px; text-align: center;">Message from our founders</h4>  
<div class ='child_div_1'>
       <img style="max-height: 100%; max-width: 100%; object-fit: contain;" id="img_testimonial" src="{{ asset('assets/images/Allure_Visuals_Logo.png')}}">

</div>
<div class ='child_div_2'>
<h5 style=" color: #333; font-style: italic; font-weight: bold; text-transform: capitalize;">Dennis Kori
(founder)</h5> 

<P></P>
</div>
  <a class="testimonialprev" onclick='plusDivs(-1)'>&#10094;</a>
  <a class="testimonialnext" onclick='plusDivs(1)'>&#10095;</a>
</div>
<!-- <div style="float: right;
   clear: both; width: 50%;">
<button style="float: left;" class="arrows" id="arrow-left" onclick="plusDivs(-1)">❮</button>
<button style="float: right;" class="arrows" id="arrow-right" onclick="plusDivs(1)">❯</button>
</div> -->

</div>

<div class="testimonialSlides" style="padding-top:20px;" >
<div id='messagefromfounders'>
 <h4 style="margin-bottom: 20px; text-align: center;">Message from our founders</h4> 
<div class ='child_div_1'>
       <img style="max-height: 100%; max-width: 100%; object-fit: contain;" id="img_testimonial" src="{{ asset('assets/images/graphic-design.png')}}"></div>
<div class ='child_div_2'>
<h5 style=" color: #333; font-style: italic; font-weight: bold; text-transform: capitalize;">Eddy Nguli
(founder)</h5> 
<P></P>

</div>

  <a class="testimonialprev" onclick='plusDivs(-1)'>&#10094;</a>
  <a class="testimonialnext" onclick='plusDivs(1)'>&#10095;</a>

</div>
<!-- <div style="float: right;
   clear: both; width: 50%;">
<button style="float: left;" class="arrows" id="arrow-left" onclick="plusDivs(-1)">❮</button>
<button style="float: right;" class="arrows" id="arrow-right" onclick="plusDivs(1)">❯</button>
</div> -->
</div>



    </section>
</div>



<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->

    <!-- ################################################################################################ -->
        <div class="btmspace-30 center">
      <h3 class="nospace">PRODUCTS AND SERVICES</h3>
    </div>

          <div class="productsandservicescontainer">
         
    <div class="productsandservicescol productsandservicesspan_1_of_3 ">
        <img style="width: 100%;" id="img_productsandservices" src="{{ asset('assets/images/graphicsphoto.png')}}">
<div class="iconcentered">
     <a href="www.google.com">  
      <img id="icon_productsandservices" src="{{ asset('assets/images/graphicsicon.png')}}">
      </a>
</div>
<P class="GD_img_description" style="font-family: Georgia, 'Times New Roman', Times, serif;
     color: #333;
     text-align: justify;
     font-size: 16px;
     text-indent: 50px;
     letter-spacing: 2px; " >
It is said a picture is worth a thousand words. How about presenting your brand in the most
aesthetically appealing manner to capitalize on the memorability of graphics?
 </P>
<div class="centered">
<h4 style=" color: #333; font-style: italic; font-weight: bold; text-transform: capitalize;">  
Graphics Design
</h4>
</div>
  </div>

         
    <div class="productsandservicescol productsandservicesspan_1_of_3 ">
        <img id="img_productsandservices" src="{{ asset('assets/images/webdesignphoto.jpg')}}">
<div class="iconcentered">
        <a href="www.google.com"> 
      <img id="icon_productsandservices" src="{{ asset('assets/images/WebIcon.png')}}">
    </a>
</div>
<P class="GD_img_description" style="font-family: Georgia, 'Times New Roman', Times, serif;
     color: #333;
     text-align: justify;
     font-size: 16px;
     text-indent: 50px;
     letter-spacing: 2px; " >
Having a website increases the accessibility of a brand. This is because, the first place
prospective clients go to look information about a business is online and it will work in your favor
 </P>
<div class="centered">
<h4 style=" color: #333; font-style: italic; font-weight: bold; text-transform: capitalize;">
Web Design
</h4>
</div>
  </div>

    <div class="productsandservicescol productsandservicesspan_1_of_3 ">
        <img style="width: 100%;" id="img_productsandservices" src="{{ asset('assets/images/MobilePhoto3.png')}}">
<div class="iconcentered">
        <a href="www.google.com"> 
      <img id="icon_productsandservices" src="{{ asset('assets/images/mobileappdesignicon.png')}}">
    </a>
</div>
<P class="GD_img_description" style="font-family: Georgia, 'Times New Roman', Times, serif;
     color: #333;
     text-align: justify;
     font-size: 16px;
     text-indent: 50px;
     letter-spacing: 2px; " >
   With a mobile application for your business, you make it possible for your clients to
always have access to your business in their pocket all with the swipe of the finger.
</P>
<div class="centered">
<h4 style=" color: #333; font-style: italic; font-weight: bold; text-transform: capitalize;">  
Mobile app design
</h4>
</div>
  </div>

</div>



                <div class="productsandservicescontainer">
     <div class="productsandservicescol productsandservicesspan_1_of_3 ">
        <img id="img_productsandservices" src="{{ asset('assets/images/SocialMediaPhoto3.jpeg')}}">
<div class="iconcentered">
        <a href="www.google.com"> 
      <img id="icon_productsandservices" src="{{ asset('assets/images/socialmediaadministrationicon.png')}}">
    </a>
</div>
<P class="GD_img_description" style="font-family: Georgia, 'Times New Roman', Times, serif;
     color: #333;
     text-align: justify;
     font-size: 16px;
     text-indent: 50px;
     letter-spacing: 2px; " >
Virtual interaction is the standard in present day society. There are many strategies to increase
online engagements with your brand,from user generated content, polls, hashtags, influencing
marketing among others.
 </P>
<div class="centered">
<h4 style=" color: #333; font-style: italic; font-weight: bold; text-transform: capitalize;">  
Social media administration
</h4>
</div>
  </div>

     <div class="productsandservicescol productsandservicesspan_1_of_3 ">
        <img id="img_productsandservices" src="{{ asset('assets/images/BrandingPhoto2.jpeg')}}">
<div class="iconcentered">
        <a href="www.google.com"> 
      <img id="icon_productsandservices" src="{{ asset('assets/images/BrandingIcon.png')}}">
    </a>
</div>
<P class="GD_img_description" style="font-family: Georgia, 'Times New Roman', Times, serif;
     color: #333;
     text-align: justify;
     font-size: 16px;
     text-indent: 50px;
     letter-spacing: 2px; " >
Branding items both for sale and as giveaways is an effective way to increase your visibility in
the market. These are also thoughtful gifts that can enhance customer retention.
 </P>
<div class="centered">
<h4 style=" color: #333; font-style: italic; font-weight: bold; text-transform: capitalize;">  
Apparel & Item branding
</h4>
</div>
  </div>

     <div class="productsandservicescol productsandservicesspan_1_of_3 ">
        <img style="width: 100%;" id="img_productsandservices" src="{{ asset('assets/images/SEOPhoto.jpeg')}}">
<div class="iconcentered">
        <a href="www.google.com"> 
      <img id="icon_productsandservices" src="{{ asset('assets/images/SEOicon.png')}}">
    </a>
</div>
<P class="GD_img_description" style="font-family: Georgia, 'Times New Roman', Times, serif;
     color: #333;
     text-align: justify;
     font-size: 16px;
     text-indent: 50px;
     letter-spacing: 2px; ">
We can revamp your website to increase your visibility across
search engines. This way, it is easy to improve the credibility of your brand and increase the
returns on your digital presence.
 </P> 
<div class="centered">
<h4 style=" color: #333; font-style: italic; font-weight: bold; text-transform: capitalize;">  
SEO Optimization
</h4>
</div>
  </div>

</div>


  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->





<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" >
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
       <img id="img_logo_footer" src="{{ asset('assets/images/Allure_Visuals_Logo.png')}}">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin fa-lg"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk fa-lg"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <ul class="nospace meta">
        <li class="btmspace-15"><i class="fa fa-phone"></i> &nbsp 0702 774 364</li>
        <li class="btmspace-15"><i class="fa fa-phone"></i> &nbsp 0703 686 559</li>
        <li class="btmspace-15" ><i class="fa fa-envelope-o"></i> &nbsp Admin@allurevisuals.com</li>
        <li class="btmspace-15" ><i class="fa fa-envelope-o"></i> &nbsp sales@allurevisuals.com</li>
        <li class="btmspace-15" ><i class="fa fa-envelope-o"></i> &nbsp info@allurevisuals.com</li>
      </ul>
    </div>
    <div class="one_third">
 <h2>Feedback Form</h2>
        <form action="/" method="POST">
          <div>
            <label for="email">Email <span>*</span></label>
            <input type="email" name="email" id="email" value="" required>
          </div>
          <div class="block clear">
            <label for="message">Your Comment</label>
            <textarea name="message" id="message" cols="36" rows="10"></textarea>
          </div>
           @csrf
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script type="text/javascript" src="{{ URL::asset('assets/scripts/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/scripts/jquery.backtotop.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/scripts/jquery.mobilemenu.js') }}"></script>
<script type="text/javascript">
  var slideIndex = 1;
showDivs(slideIndex);


function plusDivs(n) {
showDivs(slideIndex += n);
}

function showDivs(n) {  
var i;
var x = document.getElementsByClassName("testimonialSlides");
if (n > x.length) {slideIndex = 1;}
if (n < 1) {slideIndex = x.length;}
for (i = 0; i < x.length; i++) {
 x[i].style.display = "none";
}
x[slideIndex-1].style.display = "block";
}
setInterval(plusDivs.bind(null, 1), 10000);
</script>


<script type="text/javascript">
 var slideIndex = 0;
showSlides();
var slides,dots;

function showSlides() {
    var i;
    slides = document.getElementsByClassName("homepageSlides");
    dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" homepageslideractive", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " homepageslideractive";
    setTimeout(showSlides, 8000); // Change image every 8 seconds
}

function plusSlides(position) {
    slideIndex +=position;
    if (slideIndex> slides.length) {slideIndex = 1}
    else if(slideIndex<1){slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" homepageslideractive", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " homepageslideractive";
}

function currentSlide(index) {
    if (index> slides.length) {index = 1}
    else if(index<1){index = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" homepageslideractive", "");
    }
    slides[index-1].style.display = "block";  
    dots[index-1].className += " homepageslideractive";
}
</script>

</body>
</html>