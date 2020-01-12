<!DOCTYPE html>
<html lang="en">
<head>
<title>Allure Visuals</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/custom.flexslider.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/layout.css') }}" media="all" />

 <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/framework.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/custom_css.css') }}" />
 <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/fontawesome-4.6.3.min.css') }}" />

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--  <link rel="stylesheet" href="{{ URL::asset('assets/css/portfoliopageslidercss.css') }}"  type="text/css" media="all" /> -->


 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

 <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
       <!--  <h1><a href="">Allure Visuals</a></h1> -->
       <img src="{{ asset('assets/images/Allure_Visuals_Logo.png')}}">
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="home">Home</a></li>
          <li  class="active"><a class="drop" href="products">Products and Services</a>
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
  <div class="wrapper row2">
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="home">Home</a></li>
        <li style="color: #C5A059;"><a href="products">Portfolio</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>

    <div class="btmspace-30 center">
      <h3 class="nospace">OUR PORTFOLIO</h3>
    </div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 20px; margin-bottom: 20px;" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" style="height:500px;">

    <div style="height: 100%;" class="carousel-item active">
      <img style="height: 100%; object-fit: scale-down;" class="d-block w-100 " src="{{ asset('assets/images/Gol-1.png')}}" alt="First slide">

        <div class="carousel-caption d-none d-md-block">
<!--     <h5>Poster for the Glasses of Love</h5>
    <p>A charity drive to donate to Imani Children's Home in kayole</p> -->
  </div>
    </div>
    <div style="height: 100%;" class="carousel-item">
      <img style="height: 100%; object-fit: scale-down;" class="d-block w-100 " src="{{ asset('assets/images/KUCSN.png')}}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
<!--     <h5>Poster</h5>
    <p> -->

    </p>
  </div>
    </div>
    <div style="height: 100%;" class="carousel-item">
      <img style="height: 100%; object-fit: scale-down;" class="d-block w-100 " src="{{ asset('assets/images/Far-Trek-2.png')}}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
<!--     <h5>Poster</h5>
    <p> -->
      
    </p>
  </div>
    </div>

        <div style="height: 100%;" class="carousel-item">
      <img style="height: 100%; object-fit: scale-down;" class="d-block w-100 " src="{{ asset('assets/images/L&A.png')}}" alt="Fourth slide">
        <div class="carousel-caption d-none d-md-block">
<!--     <h5>Poster</h5>
    <p> -->
      
    </p>
  </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" style="margin-top: 20px; margin-bottom: 20px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height:500px;" >
    <div style="height: 100%;" class="carousel-item active">
      <img style="height: 100%; object-fit: contain;" class="d-block w-100" src="{{ asset('assets/images/WebPhoto.jpeg')}}" alt="First slide">

        <div class="carousel-caption d-none d-md-block">
<!--     <h5> Web design </h5>
    <p>Some Text here</p> -->
  </div>
    </div>
    <div style="height: 100%;" class="carousel-item">
      <img style="height: 100%; object-fit: contain;" class="d-block w-100" src="{{ asset('assets/images/WebPhoto2.jpeg')}}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
<!--     <h5> Web design </h5>
    <p> Some Text here</p> -->
  </div>
    </div>
    <div style="height: 100%;" class="carousel-item">
      <img style="height: 100%; object-fit: contain;" class="d-block w-100" src="{{ asset('assets/images/WebPhoto3.jpeg')}}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
<!--     <h5> Web design </h5>
    <p>Some Text here</p> -->
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" style="color: black;" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" style="color: black;" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel" style="margin-top: 20px; margin-bottom: 20px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height:500px;" >
    <div style="height: 100%;" class="carousel-item active">
      <img style="height: 100%; object-fit: contain;" class="d-block w-100" src="{{ asset('assets/images/MobilePhoto.jpeg')}}" alt="First slide">

        <div class="carousel-caption d-none d-md-block">
<!--     <h5>Mobile app design</h5>
    <p>Some Text here</p> -->
  </div>
    </div>
    <div style="height: 100%;" class="carousel-item">
      <img style="height: 100%; object-fit: contain;" class="d-block w-100" src="{{ asset('assets/images/MobilePhoto4.jpeg')}}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
 <!--    <h5>Mobile app design</h5>
    <p> Some Text here</p> -->
  </div>
    </div>
    <div style="height: 100%;" class="carousel-item">
      <img style="height: 100%; object-fit: contain;" class="d-block w-100" src="{{ asset('assets/images/MobilePhoto3.png')}}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
<!--     <h5>Mobile app design</h5>
    <p>Some Text here</p> -->
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel" style="margin-top: 20px; margin-bottom: 20px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
    <div class="carousel-inner" style="height:500px;" >
    <div style="height: 100%;" class="carousel-item active">
      <img style="height: 100%; object-fit: contain;" class="d-block w-100" src="{{ asset('assets/images/SocialMediaPhoto.jpeg')}}" alt="First slide">

        <div class="carousel-caption d-none d-md-block">
<!--     <h5>Social Media Administrations </h5>
    <p>Some Text here</p> -->
  </div>
    </div>
    <div style="height: 100%;" class="carousel-item">
      <img style="height: 100%; object-fit: contain;" class="d-block w-100" src="{{ asset('assets/images/SocialMediaPhoto2.jpeg')}}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
 <!--    <h5>Social Media Administrations </h5>
    <p> Some Text here</p> -->
  </div>
    </div>
    <div style="height: 100%;" class="carousel-item">
      <img style="height: 100%; object-fit: contain;" class="d-block w-100" src="{{ asset('assets/images/SocialMediaPhoto3.jpeg')}}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
<!--     <h5>Social Media Administrations </h5>
    <p>Some Text here</p> -->
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel" style="margin-top: 20px; margin-bottom: 20px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height:500px;" >
    <div style="height: 100%;" class="carousel-item active">
      <img style="height: 100%; object-fit: contain;" class="d-block w-100" src="{{ asset('assets/images/BrandingPhoto.jpeg')}}" alt="First slide">

        <div class="carousel-caption d-none d-md-block">
<!--     <h5>Apparel & Item branding</h5>
    <p>Some Text here</p> -->
  </div>
    </div>
    <div style="height: 100%;" class="carousel-item">
      <img style="height: 100%; object-fit: contain;" class="d-block w-100" src="{{ asset('assets/images/BrandingPhoto2.jpeg')}}" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
 <!--    <h5>Apparel & Item branding</h5>
    <p> Some Text here</p> -->
  </div>
    </div>
    <div style="height: 100%;" class="carousel-item">
      <img style="height: 100%; object-fit: contain;"class="d-block w-100" src="{{ asset('assets/images/BrandingPhoto3.jpeg')}}" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
<!--     <h5>Apparel & Item branding</h5>
    <p>Some Text here</p> -->
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators5" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
       <img id="img_logo_footer" src="{{ asset('assets/images/Allure_Visuals_Logo.png')}}">

    </div>
    <div class="one_third">
      <ul class="nospace meta">
        <li class="btmspace-15"><i class="fa fa-phone"></i> &nbsp 0702 774 364</li>
        <li class="btmspace-15"><i class="fa fa-phone"></i> &nbsp 0703 686 559</li>
        <li class="btmspace-15" ><i class="fa fa-envelope-o"></i> &nbsp Admin@allurevisuals.com</li>
        <li class="btmspace-15" ><i class="fa fa-envelope-o"></i> &nbsp sales@allurevisuals.com</li>
        <li class="btmspace-15" ><i class="fa fa-envelope-o"></i> &nbsp info@allurevisuals.com a</li>
      </ul>
    </div>
    <div class="one_third">
      <h3 class="heading">Interact with us on:</h3>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin fa-lg"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
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
    <p class="fl_left">Copyright &copy; <?php echo date("Y"); ?>  - All Rights Reserved - <a href="#">AllureVisuals</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>

    </body>
    </html>