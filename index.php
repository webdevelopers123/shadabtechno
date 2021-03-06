<!DOCTYPE html>
<head>
<title>Shadaab Techno Engineering</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<!-- Style Sheets -->
<link rel="icon" href="images/logo.png">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/templatemo_misc.css">
<link rel="stylesheet" href="css/templatemo_style.css">
<link rel="stylesheet" href="css/styles.css">

<!-- custom css goes here -->
<style type="text/css">
.templatemo_topbar .navbar-nav {
    width: 700px !important;
}  
.menu {
    font-size: 15px !important;
}
.feature{
  text-align: center;
  margin-bottom:40px;
}

.templatemo_title
{
  font-family: johnny fever,Times,serif !important;
  
}
.product-table{
  width: 100%;
  margin:auto; 
}
.gallery-item img{ height: 400px; }
.templatemo_workmargin{
 /* color: #232323 !important;*/
}
  .active-header{
    background-color: #8080ff  !important;
    border-color: #8080ff !important;
  }
  
  #  .logo-2 {
  #  position: relative;
  #  left: 26px;
#}

 # .logo-1 {
  #  position: relative;

#}
.logo-copyright {
    float: right;
    font-size: 20px;
    left: 197px;
    position: relative;
    top: -131px;
}
.templatemo_footerwrapper{
  margin-bottom: -52px !important;
}

#top-menu {
    position: relative; 
}
#top-menu li{
background-color:grey;
}

</style>
<!-- JavaScripts -->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCWllzCRmxht6RX3XzNrhe7zd9DGS1Zr0U"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/jquery.singlePageNav.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.lightbox.js"></script>

<script src="js/templatemo_custom.js"></script>
<script src="js/responsiveCarousel.min.js"></script>

<script>
    $(document).ready(function(){

    $('#contact-form').submit(function() {
        var email = $('#email').val();
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var status = re.test(email);
        if(status){
          return true;
        }else{
          alert('Please Enter Valid Email Address');
          return false;
        }
        // return false to cancel form action
    });
});
</script>
</head>
<?php
if(isset($_GET['status']) && !empty($_GET['status'])){
 echo '<script>alert("Your Message Has Been Sent !!");</script>';
}
?>
<body>
<!-- header start -->
<div id="templatemo_home_page">
  <div class="templatemo_topbar">
    <div class="container">
      <div class="row">
        <div class="templatemo_titlewrapper"><img src="header.jpg" alt="logo background">
         <!-- <div class="templatemo_title">
                <span>Shadaab Techno Engineering
                    <p class="copyright">&reg;</p>
                </span>
          </div> -->
        </div>
        <div class="clear"></div>
        <nav class="navbar navbar-default templatemo_menu" role="navigation">
          <div class="container-fluid"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="top-menu">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a class="menu" href="#templatemo_home_page">Home</a></li>
                  <li><a class="menu" href="#templatemo_service_page">Services</a></li>
                  <li><a class="menu" href="#templatemo_work_page">Products</a></li>
                  <li><a class="menu" href="#templatemo_team_page">About us</a></li>
                  <li><a class="menu" href="#templatemo_client_page">Our Clients</a></li>
                  <li><a class="menu" href="#templatemo_contact_page">Contact us</a></li>
                </ul>
              </div>
            </div>
            <!-- /.navbar-collapse --> 
          </div>
          <!-- /.container-fluid --> 
        </nav>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="templatemo_headerimage">
    <div class="flexslider">
      <ul class="slides">
        <li><img src="images/slider/1.jpg" alt="Slide 1"></li>
        <li><img src="images/slider/2.jpg" alt="Slide 2"></li>
        <li><img src="images/slider/3.jpg" alt="Slide 3"></li>
      </ul>
    </div>
  </div>
  <div class="slider-caption">
    <div class="templatemo_homewrappersmall">
      <div class="templatemo_hometitle">Shadaab Power Press</div>
      <div class="templatemo_hometext"><b style="font-style:Italic">Is the name of quality</b> <br>Leading manufacturers and exporters of precision engineered<br>
       Mechanical Power Press Machinery.</div>
       <img draggable="false" src="images/logo1.png" class="logo-1">
       <span class="logo-copyright">&reg;</span>
       <img draggable="false" src="images/logo2.jpg" class="logo-2">
      <div class="templatemo_homebutton" style="display: none;"><a href="#">Continue</a></div>
    </div>
  </div>
</div>
<!-- header end -->
<div class="clear"></div>
<!-- service start -->
<div class="templatemo_servicewrapper" id="templatemo_service_page">
  <div class="container">
    <div class="row">
      <h1>Welcome</h1>
      <div class="col-md-12 templatemo_marginbot">Leading manufacturers and exporters of precision engineered Mechanical 
              Power Press Machinery, which deliver high performance with High accuracy. Years of experience in manufacturing of Mechanical Power Press Machinery has given us a leading edge over our competitors. Experienced industrial team members enable us to meet the ever changing demand of Indian as well as international markets. Goodwill that we have earned by Customer Satisfaction in the past years, is the reward for our constant and sincere efforts to deliver our best.</div>
<!--
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox margin_bottom_1col margin_bottom_2col" style="background-image: url('images/machine/C-type.jpg');">
           <div class="templatemo_serviceicon"><span class="fa fa-pencil-square-o"></span></div> 
          <div class="templatemo_service_title">C-Type Press</div>
          <p>Donec euismod, justo sed convallis blandit, ipsum erat mattis lectus, vel pharetra neque enim tristique risus.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox margin_bottom_1col margin_bottom_2col" style="background-image: url('images/machine/Pillar.jpg');">
         <div class="templatemo_serviceicon"><span class="fa fa-home"></span></div> 
          <div class="templatemo_service_title">Pillar Type Press</div>
          <p>Conquer is free HTML5 template by <span class="blue">template</span><span class="green">mo</span>. Feel free to download, edit and use this template for any purpose.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox margin_bottom_1col" style="background-image: url('images/machine/Monkey.jpg');">
           <div class="templatemo_serviceicon"><span class="fa fa-download"></span></div> 
          <div class="templatemo_service_title">Monkey Type Press</div>
          <p>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for images used in this template. Curabitur rhoncus felis quis nibh pulvinar.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="templatemo_servicebox" style="background-image: url('images/machine/Incremental.jpg');">
          <div class="templatemo_serviceicon"><span class="fa fa-random"></span></div> 
          <div class="templatemo_service_title">Special Purposes</div>
          <p>Donec euismod, justo sed convallis blandit, ipsum erat mattis lectus, vel pharetra neque enim tristique risus.</p>
        </div>
      </div>
-->
    </div>
     <div class="row">
        <a href = "#" class = "list-group-item active active-header">
          <b>OUR MERITS ARE MENTIONED BELOW</b>
        </a>
        <a href = "#" class = "list-group-item">Machinery made by Steel Body</a>
        <a href = "#" class = "list-group-item">Machine Bed-To-Ram settled at 0×0 axis from Dial.Other Industries not provide it</a>
        <a href = "#" class = "list-group-item">Only Steel Ram in one piece continue shape making in our machinery, Other Industries is not making in Steel in 1 piece.</a>
        <a href = "#" class = "list-group-item">Free of Cost 24×7 Maintenance Services under Machinery capability accident</a>
        <a href = "#" class = "list-group-item">Vibration & Noise doesn't generate while operation</a>
        <a href = "#" class = "list-group-item">Machinery Re-sale price High as compared to other Industries Machinery</a>
        <a href = "#" class = "list-group-item">Long time services & low Maintenance</a>
        <a href = "#" class = "list-group-item">Components are made by Skilled labour</a>
        <a href = "#" class = "list-group-item"><b>Our design and its parts are registered by government</b></a>
      </div>
 
  </div>
</div>
<!-- service end -->
<div class="clear"></div>
<!-- work start -->
<div class="templatemo_workwrapper" id="templatemo_work_page">
  <div class="container">
    <div class="row">
      <h1>We Manufacture Machines</h1>

        <div class="row col-md-06">
          <div class="container types">
            <a href = "#" class = "list-group-item active active-header">
              <b>Types of Machines</b>
            </a>
            <a href = "#" class = "list-group-item">C - Type Press</a>
            <a href = "#" class = "list-group-item">Pillar Type Press</a>
            <a href = "#" class = "list-group-item">Monkey Type Press</a>
            <a href = "#" class = "list-group-item">Special Purposes</a>
          </div>
        </div>
      <!-- <div class="container">
        <div class="list-group">
            <a href="#" class="list-group-item">C - Type Press</a>
            <a href="#" class="list-group-item">Pillar Type Press</a>
            <a href="#" class="list-group-item">Monkey Type Press</a>
            <a href="#" class="list-group-item">Monkey Type Press</a>
        </div>
      </div> -->


    </div>
  </div>
  <div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img src="images/work/m1.jpg" alt="work 1" style="height: 500px !important;width:250px;">
        <div class="overlay">
          <div class="templatemo_worktitle">Machine #1</div>
          <div class="templatemo_workdes"></div>
          <div class="templatemo_worklink"><a href="images/work/1.jpg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>
    
    <div class="templatemo_workbox">
      <div class="gallery-item"><img src="images/work/3.jpg" alt="work 2" style="height: 500px !important;width:380px;">
        <div class="overlay">
          <div class="templatemo_worktitle">Machine #2</div>
          <div class="templatemo_workdes"></div>
          <div class="templatemo_worklink"><a href="images/work/3.jpg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>

    <div class="templatemo_workbox">
      <div class="gallery-item"><img src="images/work/m3.jpg" alt="work 2" style="height: 500px !important;width:250px;">
        <div class="overlay">
          <div class="templatemo_worktitle">Machine #2</div>
          <div class="templatemo_workdes"></div>
          <div class="templatemo_worklink"><a href="images/work/m3.jpg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>
    
        <div class="templatemo_workbox">
      <div class="gallery-item"><img src="images/work/m4.jpg" alt="work 2" style="height: 500px !important;width:250px;">
        <div class="overlay">
          <div class="templatemo_worktitle">Machine #2</div>
          <div class="templatemo_workdes"></div>
          <div class="templatemo_worklink"><a href="images/work/m4.jpg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>

    <div class="templatemo_workbox">
      <div class="gallery-item"><img src="images/work/m5.jpg" alt="work 2" style="height: 500px !important;width:250px;">
        <div class="overlay">
          <div class="templatemo_worktitle">Machine #2</div>
          <div class="templatemo_workdes"></div>
          <div class="templatemo_worklink"><a href="images/work/m5.jpg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>

    <div class="templatemo_workbox">
      <div class="gallery-item"><img src="images/work/m6.jpg" alt="work 2" style="height: 500px !important;width:250px;">
        <div class="overlay">
          <div class="templatemo_worktitle">Machine #2</div>
          <div class="templatemo_workdes"></div>
          <div class="templatemo_worklink"><a href="images/work/m6.jpg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>

 

    <div class="templatemo_workbox">
      <div class="gallery-item"><img src="images/work/m8.jpg" alt="work 2" style="height: 500px !important;width:250px;">
        <div class="overlay">
          <div class="templatemo_worktitle">Machine #2</div>
          <div class="templatemo_workdes"></div>
          <div class="templatemo_worklink"><a href="images/work/m8.jpg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>

    <div class="templatemo_workbox">
      <div class="gallery-item"><img src="images/work/m2.jpg" alt="work 5" style="height: 500px !important;width:250px;">
        <div class="overlay">
          <div class="templatemo_worktitle">Machine #5</div>
          <div class="templatemo_workdes"></div>
          <div class="templatemo_worklink"><a href="images/work/2.jpg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img src="images/work/7.jpg" alt="work 7" style="height: 500px !important;width:340px;">
        <div class="overlay">
          <div class="templatemo_worktitle">Machine #6</div>
          <div class="templatemo_workdes"></div>
          <div class="templatemo_worklink"><a href="images/work/7.jpg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>
    <div class="templatemo_workbox">
      <div class="gallery-item"><img src="images/work/8.jpg" alt="work 8" style="height: 500px !important;width:340px;">
        <div class="overlay">
          <div class="templatemo_worktitle">Machine #7</div>
          <div class="templatemo_workdes"></div>
          <div class="templatemo_worklink"><a href="images/work/8.jpg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>

    <div class="templatemo_workbox">
      <div class="gallery-item"><img src="images/work/11.jpg" alt="work 10" style="height: 500px !important;width:320px;">
        <div class="overlay">
          <div class="templatemo_worktitle">Machine #9</div>
          <div class="templatemo_workdes"></div>
          <div class="templatemo_worklink"><a href="images/work/11.jpg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>
  
   <div class="templatemo_workbox">
      <div class="gallery-item"><img src="images/work/12.jpg" alt="work 13" style="height: 500px !important;width:320px;">
        <div class="overlay">
          <div class="templatemo_worktitle">Machine #11</div>
          <div class="templatemo_workdes"></div>
          <div class="templatemo_worklink"><a href="images/work/12.jpg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>

<div class="templatemo_workbox">
      <div class="gallery-item"><img src="images/work/6.jpg" alt="work 13" style="height: 500px !important;width:250px;">
        <div class="overlay">
          <div class="templatemo_worktitle">Machine #11</div>
          <div class="templatemo_workdes"></div>
          <div class="templatemo_worklink"><a href="images/work/12.jpg" data-rel="lightbox" class="fa fa-search-plus"></a></div>
          <div class="templatemo_worklink"><a href="#" class="fa fa-link"></a></div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="clear"></div>
<!-- <div class="table-responsive"> -->

<!--   <div class="container">
  <div class="row">
     <div class="list-group" style="text-align: center">
      <a href="#" class="list-group-item active"><b>Accessories</b></a>
      <a href="#" class="list-group-item">Die Setting Spanner</a>
      <a href="#" class="list-group-item">Gear Guard Cover</a>
    </div>
  </div>
</div>
 -->  
 <div class="container">
 <h2 style="text-align: center;font: bold;">CAPACITY IN TONS C-TYPE</h2>
 <div class="table-responsive">
    <table class="table table-striped table-bordered product-table">
    <thead>
      <tr>
        <th></th>
        <th>10Tons</th>
        <th>20Tons</th>
        <th>30Tons</th>
        <th>40Tons</th>
        <th>50Tons</th>
        <th>75Tons</th>
        <th>100Tons</th>
        <th>150Tons</th>
        <th>200Tons</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Stroke adjustable</th>
        <td>00-40mm</td>
        <td>00-50mm</td>
        <td>00-60mm</td>
        <td>20-75mm</td>
        <td>20-100mm</td>
        <td>20-110mm</td>
        <td>25-125mm</td>
        <td>25-150mm</td>
        <td>25-175mm</td>
      </tr>
         <tr>
        <th>Distance Bed To Raim</th>
        <td>200mm</td>
        <td>230mm</td>
        <td>255mm</td>
        <td>325mm</td>
        <td>350mm</td>
        <td>425mm</td>
        <td>475mm</td>
        <td>550mm</td>
        <td>650mm</td>
        </tr>
         <tr>
        <th>BedSize </th>
        <td>300X460mm</td>
        <td>350X550mm</td>
        <td>400X560mm</td>
        <td>460X620mm</td>
        <td>500X710mm</td>
        <td>550X800mm</td>
        <td>610X900mm</td>
        <td>700X1000mm</td>
        <td>800X1050mm</td>
      </tr>
      <tr>
        <th>Crankshaft Dia</th>
        <td>80mm</td>
        <td>85mm</td>
        <td>93mm</td>
        <td>120mm</td>
         <td>130mm</td>
        <td>145mm</td>
        <td>160mm</td>
        <td>175mm</td>
        <td>200mm</td>      
      </tr>
        <tr>
        <th>Steel Gear Dia</th>
        <td>350mm</td>
        <td>450mm</td>
        <td>500mm</td>
        <td>625mm</td>
        <td>700mm</td>
        <td>750mm</td>
        <td>800mm</td>
        <td>1000mm</td>
        <td>1200mm</td>
      </tr>
          <tr>
        <th>FlyWeel Dia </th>
        <td>600mm</td>
        <td>650mm</td>
        <td>700mm</td>
        <td>800mm</td>
        <td>850mm</td>
        <td>915mm</td>
        <td>975mm</td>
        <td>1050mm</td>
        <td>1250mm</td>
      </tr>
      <tr>
          <th>Hole In Raim for Dia Clamping</th>
          <td>&#8709 X L 28X50mm</td>
          <td>&#8709 X L 30X55mm</td>
          <td>&#8709 X L 32X60mm</td>
          <td>&#8709 X L 35X80mm</td>
          <td>&#8709 X L 38X90mm</td>
          <td>&#8709 X L 40X100mm</td>
          <td>&#8709 X L 45X100mm</td>
          <td>&#8709 X L 50X110mm</td>
          <td>&#8709 X L 60X125mm</td>
        </tr>
          <tr>
            <th>Bore In Bed </th>
            <td>100mm</td>
            <td>105mm</td>
            <td>115mm</td>
            <td>125mm</td>
            <td>150mm</td>
            <td>160mm</td>
            <td>180mm</td>
            <td>200mm</td>
            <td>225mm</td>
          </tr>
          <tr>
            <th>Power Required </th>
            <td>1HP</td>
            <td>2HP</td>
            <td>3HP</td>
            <td>4HP</td>
            <td>5HP</td>
            <td>7.5HP</td>
            <td>10HP</td>
            <td>12.5HP</td>
            <td>15HP</td>
        </tr>
          <tr>
            <th>R.P.M Required </th>
            <td>1440</td>
            <td>1440</td>
            <td>1440</td>
            <td>1440</td>
            <td>1440</td>
            <td>1440</td>
            <td>1440</td>
            <td>1440</td>
            <td>1440</td>
        </tr>
    </tbody>
</table>
</div>
</div>

<div class="container">
  <h2 style="text-align: center;font: bold;">CAPACITY IN TONS PILLER MARSHAL TYPE</h2>
  <div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th></th>
        <th>10Tons</th>
        <th>20Tons</th>
        <th>30Tons</th>
        <th>40Tons</th>
        <th>50Tons</th>
        <th>75Tons</th>
        <th>100Tons</th>
        <th>150Tons</th>
        <th>200Tons</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Stroke adjustable</th>
        <td>01-40mm</td>
        <td>00-50mm</td>
        <td>00-65mm</td>
        <td>20-75mm</td>
        <td>20-100mm</td>
        <td>20-110mm</td>
        <td>25-125mm</td>
        <td>25-150mm</td>
        <td>25-175mm</td>
      </tr>
         <tr>
        <th>Distance Bed To Raim</ts>
        <td>200mm</td>
        <td>230mm</td>
        <td>250mm</td>
        <td>325mm</td>
        <td>350mm</td>
        <td>425mm</td>
        <td>475mm</td>
        <td>550mm</td>
        <td>650mm</td>
        </tr>
         <tr>
        <th>BedSize LR X FB</th>
        <td>300X300mm</td>
        <td>350X350mm</td>
        <td>400X400mm</td>
        <td>500X500mm</td>
        <td>610X560mm</td>
        <td>710X610mm</td>
        <td>760X710mm</td>
        <td>860X810mm</td>
        <td>1000X900mm</td>
      </tr>
      <tr>
        <th>Crankshaft Dia</th>
        <td>80mm</td>
        <td>85mm</td>
        <td>93mm</td>
        <td>120mm</td>
         <td>130mm</td>
        <td>145mm</td>
        <td>160mm</td>
        <td>175mm</td>
        <td>200mm</td>      
      </tr>
        <tr>
        <th>Steel Gear Dia</th>
        <td>350mm</td>
        <td>450mm</td>
        <td>500mm</td>
        <td>625mm</td>
        <td>750mm</td>
        <td>800mm</td>
        <td>875mm</td>
        <td>1000mm</td>
        <td>1200mm</td>
      </tr>
          <tr>
            <th>FlyWeel Dia </th>
            <td>600mm</td>
            <td>650mm</td>
            <td>700mm</td>
            <td>800mm</td>
            <td>850mm</td>
            <td>915mm</td>
            <td>975mm</td>
            <td>1050mm</td>
            <td>1250mm</td>
          </tr>
      <tr>
        <th>Hole In Raim for Dia Clamping</th>
        <td>&#8709  X  L 28X50mm</td>
        <td>&#8709  X  L 30X50mm</td>
        <td>&#8709  X  L 32X60mm</td>
        <td>&#8709  X  L 35X80mm</td>
        <td>&#8709  X  L 38X90mm</td>
        <td>&#8709  X  L 40X100mm</td>
        <td>&#8709  X  L 45X100mm</td>
        <td>&#8709  X  L 50X110mm</td>
        <td>&#8709  X  L 60X125mm</td>
      </tr>
          <tr>
        <th>Bore In Bed </th>
        <td>90mm</td>
        <td>100mm</td>
        <td>110mm</td>
        <td>125mm</td>
        <td>150mm</td>
        <td>160mm</td>
        <td>180mm</td>
        <td>200mm</td>
        <td>225mm</td>
      </tr>
          <tr>
        <th>Power Required </th>
        <td>1HP</td>
        <td>2HP</td>
        <td>3HP</td>
        <td>4HP</td>
        <td>5HP</td>
        <td>7.5HP</td>
        <td>10HP</td>
        <td>12.5HP</td>
        <td>15HP</td>
      </tr>
          <tr>
        <th>R.P.M Required </th>
        <td>1400</td>
        <td>1400</td>
        <td>1400</td>
        <td>1400</td>
        <td>1440</td>
        <td>1440</td>
        <td>1440</td>
        <td>1440</td>
        <td>1440</td>
      </tr>
    </tbody>
</table>
  </div>

  <div class="row feature">
        <a href = "#" class = "list-group-item active active-header">
          <b>Salient Features</b>
        </a>
        <a href = "#" class = "list-group-item">Easy to maintain</a>
        <a href = "#" class = "list-group-item">User friendly</a>
        <a href = "#" class = "list-group-item">Good versatility</a>
        <a href = "#" class = "list-group-item">Competitive Prices</a>
        <a href = "#" class = "list-group-item">Low tooling cost</a>
        <a href = "#" class = "list-group-item">Quick setting</a>
        <a href = "#" class = "list-group-item">Stroke length can be adjustable</a>
        <a href = "#" class = "list-group-item">Oil Seal Cup lubrication system</a>
        <a href = "#" class = "list-group-item">Smooth Foot Pedal</a>
        <a href = "#" class = "list-group-item">Reliable Mechanism</a>
      </div>
        <div class="row feature">
            <div class="container">
                    <a href = "#" class = "list-group-item active active-header">
                      <b>Accessories</b>
                    </a>
                    <a href = "#" class = "list-group-item">Die Setting Spanner</a>
                    <a href = "#" class = "list-group-item">Gear Guard Cover</a>
                    <!-- <a href = "#" class = "list-group-item">Belt Drive</a> -->
            </div>
        </div>
</div>
  <!-- </div> -->

<!--work end-->
<div class="clear"></div>
<!-- team start -->
<div class="templatemo_team_wrapper" id="templatemo_team_page">
  <div class="container">
    <div class="row">
     <h1>About Us</h1>
      <div class="col-md-12 templatemo_workmargin">We have Years of experience in manufacturing of Mechanical Power Press Machinery has given us a leading edge over our competitors. Experienced industrial team members enable us to meet the ever changing demand of Indian as well as international markets. Goodwill that we have earned by Customer Satisfaction in the past years, is the reward for our constant and sincere efforts to deliver our best.</div>
      <h1>Our History</h1>
      <div class="col-md-12 templatemo_workmargin">Based in Indore, MP – India, we commenced our business in the year 1982. Under the profound inspiration of our company’s proprietor,<b> Mr. Abdul Qayyum Ansari</b>, all our team members are dedicated towards completing the commitment and meet targets all the time. With over<b> 34 years </b>of experience in the field of Mechanical Power Press machines manufacturing, our mentor has a rare combination of technical acumen and management skills. He gave wings to his vision by establishing the company in 1982 as the proprietor.
        Starting as a small organization with limited infrastructure and manpower, we have worked our way toward becoming one of the biggest manufacturers of high quality Mechanical Power Press equipments in our home town and thank to Customer Satisfactions.
      </div>
       <h1>Our Infrastructure</h1>
       <div class="col-md-12 templatemo_workmargin">
       	Currently, our facilities encompasses 2 manufacturing units in one of the oldest and most respectable industrial areas of Indore, which is strategically located with easy access to rail, road and air transportation under In 10km.Our facilities include state-of-the-art production machineries for manufacturing our products. Our sound infrastructure supports our processing units, along with two manufacturing units, which ensures the regular supplies of the finished products.
       </div>
      <div id="w">
        <div class="crsl-items" data-navigation="navbtns">
          <div class="crsl-wrap">
            
            <!-- post #1 -->
            <div class="crsl-item"><img src="images/infra/1.jpg" alt="person 2">
              <div class="templatemo_team_name">Entry gate</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/1.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>
            <!-- post #2 -->
             <div class="crsl-item"><img src="images/infra/2.jpg" alt="person 5">
              <div class="templatemo_team_name">Lawn</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/2.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>
     <!-- post #3 -->
            <div class="crsl-item"><img src="images/infra/3.jpg" alt="person 3">
              <div class="templatemo_team_name">Main entrance</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/3.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>
            <!-- post #4 -->
            <div class="crsl-item "><img src="images/infra/4.jpg" alt="person 1">
              <div class="templatemo_team_name">Working</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/4.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>
            <!-- post #5 -->
            <div class="crsl-item"><img src="images/infra/3old.jpg" alt="person 4">
              <div class="templatemo_team_name">Work Place</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/3old.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>
            <!-- post #6 -->
            <div class="crsl-item"><img src="images/infra/6.jpg" alt="person 6">
              <div class="templatemo_team_name">Working</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/6.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>
            <!-- image 7 -->
               <div class="crsl-item"><img src="images/infra/7.jpg" alt="person 6">
              <div class="templatemo_team_name">Working</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/7.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div> 

             <!-- image 8 -->
               <div class="crsl-item"><img src="images/infra/8.jpg" alt="person 6">
              <div class="templatemo_team_name">Working</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/8.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div> 

             <!-- image 9 -->
               <div class="crsl-item"><img src="images/infra/9.jpg" alt="person 6">
              <div class="templatemo_team_name">Working</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/9.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div> 

             <!-- image 10 -->
               <div class="crsl-item"><img src="images/infra/10.jpg" alt="person 6">
              <div class="templatemo_team_name">Working</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/10.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div> 

             <!-- image 11 -->
               <div class="crsl-item"><img src="images/infra/11.jpg" alt="person 6">
              <div class="templatemo_team_name">Working</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/11.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div> 

             <!-- image 12 -->
               <div class="crsl-item"><img src="images/infra/12.jpg" alt="person 6">
              <div class="templatemo_team_name">Working</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/12.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div> 
            <div class="crsl-item"><img src="images/infra/13.jpg" alt="person 6">
              <div class="templatemo_team_name">Working</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/13.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>
            <div class="crsl-item"><img src="images/infra/14.jpg" alt="person 6">
              <div class="templatemo_team_name">Working</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/14.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>  
            <div class="crsl-item"><img src="images/infra/15.jpg" alt="person 6">
              <div class="templatemo_team_name">Inspection</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/15.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>  
             <div class="crsl-item"><img src="images/infra/16.jpg" alt="person 6">
              <div class="templatemo_team_name">Inspection</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/16.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>
            <div class="crsl-item"><img src="images/infra/17.jpg" alt="person 6">
              <div class="templatemo_team_name">Inspection</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/17.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>
            <div class="crsl-item"><img src="images/infra/18.jpg" alt="person 6">
              <div class="templatemo_team_name">Inspection</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/18.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>
            <div class="crsl-item"><img src="images/infra/19.jpg" alt="person 6">
              <div class="templatemo_team_name">Machine</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/19.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>
            <div class="crsl-item"><img src="images/infra/20.jpg" alt="person 6">
              <div class="templatemo_team_name">Exit</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/20.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>
            <div class="crsl-item"><img src="images/infra/21.jpg" alt="person 6">
              <div class="templatemo_team_name">Thank you for coming...</div>
              <div class="templatemo_team_post"></div>
              <div class="overlay" style="margin-top: -55%;">
                <div class="">
                    <a href="images/infra/21.jpg" data-rel="lightbox" class="fa fa-2x fa-search-plus"></a>
                </div>
              </div>
            </div>

          <!-- @end .crsl-wrap --> 
        </div>
        <!-- @end .crsl-items --> 
      </div>
      <div class="clear"></div>
      <nav class="slidernav">
        <div id="navbtns" class="clearfix"><a href="#" class="previous"><img src="images/Slideitmoo_back.png" alt="previous"></a> <a href="#" class="next"><img src="images/Slideitmoo_forward.png" alt="next"></a></div>
      </nav>
    </div>
    <script>
	$(function() {
		$('.crsl-items').carousel({
			visible: 4,
			itemMinWidth: 180,
			itemEqualHeight: 370,
			itemMargin: 9,
		});
		$("a[href=#]").on('click', function(e) {
			e.preventDefault();
		});
	});
    </script>
  </div>
</div>
<!-- team end -->
<div class="clear"></div>
<!-- team start -->
<div class="templatemo_team_wrapper" id="templatemo_client_page">
  <div class="container">
    <div class="row">
        <div class="container">
          <h2>Our Clients</h2>
          <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <tbody>
              <tr>
                <td>Hi-Tech Metal Forming Pvt. Ltd. - <b>Pune</b></td>
                <td>Jindal Iron Steel Co. Ltd. - <b>Mumbai</b></td>
              </tr>

              <tr>
                <td>AARCO Steel Industries - Mumbai</td>
                <td>Jamnadas Industries - Dahod, <b>Gujrat</b></td>
              </tr>
               <tr>
                <td>Gujrat Motor Spring Work - Gujrat</td>
                <td>MantreLohaUgyogKendre - Fateh Nagar, Rajasthan</td>
              </tr>
               <tr>
                <td>Agrawal Steel Furniture - <b>Agra</b></td>
                <td>Kinetic Motors Company - Pithampur</td>
              </tr>
               <tr>
                <td>Shakti Pump INDIA Ltd. - Pithampur</td>
                <td>MAN Industries (SHARJA U.A.E) - <b>DUBAI</b></td>
              </tr>
               <tr>
                <td>GALAXY Components Pvt. Ltd. - <b>Pithampur</b></td>
                <td>EMECAM Industries - <b>Colombo, Sri-Lanka</b></td>
              </tr>
               <tr>
                <td>Khandelwal Industries - Shivpuri</td>
                <td>Alka-Claim & Fabricator's - <b>Korba</b></td>
              </tr>
               <tr>
               <td>Metal forger & fabricators Ujjain</td>
                <td>Classic Wheel Pvt Ltd. Ahmadnagar</td>
              </tr>
              <tr>
                <td>Suresh Industries <b>Ahmadnagar</b></td>
                <td>METAL MAN AUTO Pvt Ltd. <b>Aurangabad</b></td>
              </tr>

              <tr>
                <td>AUTO man(prop. metal man auto) Pithampur.</td>
                <td>Pinnacle Industries LTD Pithampur</td>
              </tr>

              <tr>
                <td>Scientific technologies Pvt Ltd. Indore</td>
                <td>SCIENTECH TEHNOLOGIES Pvt Ltd. Indore</td>
              </tr>
              <tr>
                <td>Bonton technomake Pvt Ltd. <b>Indore</b></td>
                <td>Vishal fabricators Pvt Ltd. Indore</td>
              </tr>

              <tr>
                <td>Roshan Engineering works Indore</td>
                <td>Mistredien Tools Indore</td>
              </tr>
              <tr>
                <td>Maackno tin containers old seemapuri <b>Delhi</b></td>
                <td>Saba cylinder Pvt Ltd. Ujjain</td>
              </tr>
              <tr>
                <td>Arihant industries <b>Aurangabad</b></td>
                <td>any many more....</td>
              </tr>

              

            </tbody>
          </table>
          </div>
        </div>


      <!-- <nav class="slidernav">
        <div id="navbtns" class="clearfix"><a href="#" class="previous"><img src="images/slideitmoo_back.png" alt="previous"></a> <a href="#" class="next"><img src="images/slideitmoo_forward.png" alt="next"></a></div>
      </nav> -->
    </div>
    <script>
  $(function() {
    $('.crsl-items').carousel({
      visible: 4,
      itemMinWidth: 180,
      itemEqualHeight: 370,
      itemMargin: 9,
    });
    $("a[href=#]").on('click', function(e) {
      e.preventDefault();
    });
  });
    </script>
  </div>
</div>
<!-- clients end -->
<div class="clear"></div>


<!-- contact start -->
<div class="templatemo_contactwrapper" id="templatemo_contact_page">
  <div class="container">
    <div class="row">
      <h1>Contact</h1>
    </div>
  </div>
  <div class="templatemo_contactmap">
  <div id="templatemo_map"></div>
  </div>
  <div class="container templatemo_contactmargin">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">
              <h4><b>City Head Office</b></h4>
              <p>4/4, DaulatGanj, Anarbagh, Jawahar Marg, Indore M.P <br>India - 452007<br>
              Fax: 2365928</br>
              Tel: 0731-2365228</br>
              Mobile: +9198269-34446/9,</br>
              +91 9826011656, +91 9300737651-4</br> 
              Email: shadaabpowerpress@gmail.com           
            </div>
          
            <div class="cold-md-6">
               <div class="col-md-6">
                <h4><b>Industry Office</b></h4>
                <p>Plot No. 183/A & 184/A Sector-F, Industrial Estate Sanwer Road, Indore M.P<br> India- 452015</br>
                Fax: 4036653</br>
                Tel: 0731-2722653</br>
                Mobile:+91 9826011656, +91 9300737651-4</br> 
                +9198269-34446/9</br>
                Email: technopowerpress@gmail.com
              </div>
            </div>

        </div>
        <div class="clear"></div>

      </div>

     <div class="row">
      <div class="col-md-12 test">
      <div class="container">
        <div class="row">
          <h4><b>Feel Free To Contact</b></h4>
        </div>
      </div>
      <div class="container">
        <div class="row" style="float: right !important">
          <form action="mail/send-email.php" method="post" id="contact-form">
          <div class="col-md-9">
            <div class="col-md-4">
              <input type="text" name="name" id="name" class="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-4">
              <input type="text" name="email" id="email" class="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-4">
              <input type="text" name="subject" id="subject" class="subject" placeholder="Subject" required>
            </div>
            <div class="col-md-12">
              <textarea name="message" cols="1" rows="1" class="message" placeholder="Your message... " id="message" required></textarea>
            </div>
            <div class="col-md-4">
              <input type="submit" name="send" value="Send Message" class="button templatemo_sendbtn">
            </div>
          </div>
          </form>
        </div>
      </div>
      </div>
     </div>

    </div>
  </div>

<!-- contact end --> 
<!-- footer start -->
<div class="templatemo_footerwrapper">
  <div class="container">
    <div class="row">
     <span>Designed By WebCodeTriangle©</span>
    </div>
  </div>
</div>
<!-- footer end --> 
<script>
<!-- scroll to specific id when click on menu -->
// Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight() + 15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function() {
        var item = $($(this).attr("href"));
        if (item.length) {
            return item;
        }
    });
// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e) {
    var href = $(this).attr("href"),
        offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
    $('html, body').stop().animate({
        scrollTop: offsetTop
    }, 300);
    e.preventDefault();
});
// Bind to scroll
$(window).scroll(function() {
    // Get container scroll position
    var fromTop = $(this).scrollTop() + topMenuHeight;
    // Get id of current scroll item
    var cur = scrollItems.map(function() {
        if ($(this).offset().top < fromTop)
            return this;
    });
    // Get the id of the current element
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";
    if (lastId !== id) {
        lastId = id;
        // Set/remove active class
        menuItems
            .parent().removeClass("active")
            .end().filter("[href=#" + id + "]").parent().addClass("active");
    }
});
</script>
</body>
</html>