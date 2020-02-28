<!DOCTYPE html>
<html>
<head>
<title>Colours and Patterns</title>
<link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
</head>
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
<body>

    <!--navbar & caraousel  -->
  <div class="row fontclass animated slideInUp">
    <div class="col-md-12">
      <nav class="navbar navbar-expand-lg navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">ABOUT</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#service">SERVICES</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#works">WORKS</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="{{asset(route('view.designs'))}}">GALLERY</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#testimonial">TESTIMONIAL</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#team">TEAM</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#contact">CONTACT</a>
              </li>
            </ul>
          </div>
        </nav>
        <div style="margin-top: -30px;"><img src="{{asset('images/carouselphoto.jpg')}}" width="100%;"></div>
    </div>  
  </div>
    
   <!--  about -->
   <section id="about" class="fontclass bg-warning">
     <div class="container">
       <div class="row ">
            <div class="col-md-6 aboutcarousel">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2000">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('images/about1.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('images/about2.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('images/about3.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
              <div class="container">
                  <div class="row title-fonts margin-top-fourty">
                          <p>WHO ARE WE?</p>  
                  </div>
                  <div class="row about-info">
                      <p>
                      We are a leading design firm in the city, created and managed by Isha Poddar. Isha is a young designer graduated from St. Xavier's College, Kolkata in B.Sc. in multimedia. After an experience of two years in Kolkata, she started Colours and Patterns in Guwahati in 2017. Our aim is to deliver quality designs that satisfy the client's needs and focuses on what will work best for them.
                      </p>            
                  </div>
              </div>
     </div>
     </div>
   </section>
    
    <!-- service -->
    <section id="service" class="fontclass">
     <div class="container margin-top-twenty">
       <div class="row title-fonts margin-top-fourty">
          <div class="col text-center">
             <p >OUR SERVICES</p>
          </div>
       </div>
        </div>  
        <div class="row justify-content-center service-md">
            <div class="col-md-2" >
                  <div class="card text-center full-width">
                    <img src="{{asset('images/promotional.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <b>POMOTIONAL DESIGN</b>
                      <p class="card-text">With hundreds of artworks under our belt, we design with purpose...</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-2">
                   <div class="card text-center full-width">
                    <img src="{{asset('images/branding.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                     <b>BRANDINGS DESIGNS</b>
                      <p class="card-text">We design each creative with a marketer's mind-set, focusing on the brand...</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-2 ">
                  <div class="card text-center full-width">
                    <img src="{{asset('images/invitation.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                     <b>INVITATIONS SATIONERY</b>
                      <p class="card-text">An invitation is the guests' first peek into a special day, so we make it shine...</p>
                    </div>
                  </div>
            </div>     
             <div class="col-md-2">
                  <div class="card text-center full-width">
                    <img src="{{asset('images/productdesign.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                     <b>PRODUCT DESIGNING</b>
                      <p class="card-text">We apply creative thinking to product design...</p>
                    </div>
                  </div>
             </div>  
             <div class="col-md-2">
                  <div class="card text-center full-width">
                    <img src="{{asset('images/website.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                     <b>WEBSITES DESIGNING</b>
                      <p class="card-text">Web Design, an integral part of your marketing statergy to drive user and promotion...</p>
                    </div>
                  </div>
             </div>             
           </div>         
      </div>
   </section>

   <!-- works -->
    <section class="bg-warning fontclass margin-top-fifty work-section" id="works">
          <div class="container margin-top-twenty">
           <div class="row title-fonts our-work-title-div">
              <div class="col text-center">
                 <p >OUR WORKS</p>
              </div>
           </div>
            <div class="row" >
                  <div class="col-md-3">
                        <div class="card margin-top-thirty full-width">
                          <img src={{asset('images/work1.jpg')}} alt="..." width="100%">
                        </div>
                  </div>
                  <div class="col-md-3">
                         <div class="card margin-top-thirty full-width">
                          <img src={{asset('images/work2.jpg')}} alt="..." width="100%">
                        </div>
                  </div>
                  <div class="col-md-3">
                        <div class="card margin-top-thirty full-width">
                          <img src={{asset('images/work3.jpg')}} alt="..." width="100%">
                        </div>
                  </div>     
                   <div class="col-md-3">
                        <div class="card margin-top-thirty full-width">
                          <img src={{asset('images/work4.jpg')}} alt="..." width="100%">
                        </div>
                   </div>     
                   <div class="col-md-3 margin-top-thirty">
                        <div class="card full-width">
                          <img src={{asset('images/work5.jpg')}} alt="..." width="100%">
                        </div>
                   </div>
                    <div class="col-md-3 margin-top-thirty">
                        <div class="card full-width">
                          <img src={{asset('images/work6.jpg')}} alt="..." width="100%">
                        </div>
                   </div>   
                    <div class="col-md-3 margin-top-thirty">
                        <div class="card full-width">
                          <img src={{asset('images/work7.jpg')}} alt="..." width="100%">
                        </div>
                   </div>   
                    <div class="col-md-3 margin-top-thirty">
                        <div class="card full-width">
                          <img src={{asset('images/work8.jpg')}} alt="..." width="100%">
                        </div>
                   </div>                        
               </div>   
               <div class="row justify-content-center padding-top-fourty">
                     <a role="button" class="btn btn-bg bg-black gallery-button" href="{{route('view.designs')}}">Visit Our Gallery</a>
               </div>      
            </div>   
    </section>

    <!-- clients -->
   <section id="clients" class="fontclass padding-top-thirty client-section">
      <div class="container">
          <div class="row title-fonts">
            <div class="col text-center">
               <p class="colour-white">OUR CLIENTS</p>
            </div>
          </div>
          <div class="row">
            <div class="owl-clients owl-carousel owl-theme">
               <div class="item">
                 <img src="{{asset('images/1.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/2.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/3.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/4.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/5.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/6.jpg')}}">
               </div>
                <div class="item">
                 <img src="{{asset('images/7.jpg')}}">
               </div>
                <div class="item">
                 <img src="{{asset('images/8.jpg')}}">
               </div>
                <div class="item">
                 <img src="{{asset('images/9.jpg')}}">
               </div>
                <div class="item">
                 <img src="{{asset('images/10.jpg')}}">
               </div>
                <div class="item">
                 <img src="{{asset('images/11.jpg')}}">
               </div>
                <div class="item">
                 <img src="{{asset('images/12.jpg')}}">
               </div>
                <div class="item">
                 <img src="{{asset('images/13.jpg')}}">
               </div>
                <div class="item">
                 <img src="{{asset('images/14.jpg')}}">
               </div>
                <div class="item">
                 <img src="{{asset('images/15.jpg')}}">
               </div>
                <div class="item">
                 <img src="{{asset('images/16.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/17.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/18.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/19.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/20.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/21.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/22.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/23.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/24.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/25.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/26.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/27.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/28.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/29.jpg')}}">
               </div>
               <div class="item">
                 <img src="{{asset('images/30.jpg')}}">
               </div>
            </div>
          </div>
       </div>   
    </section>

    <!-- testimonial -->
   <section id="testimonial" class="margin-top-thirty">
    <div class="container">
      <div class="row text-center fontclass title-fonts">
          <div class="col">
             <p>TESTIMONIALS</p>
          </div>
      </div>
     <div class="row owl-testimonial owl-carousel owl-theme margin-left-one">
           <div class="item">
             <img src="{{asset('images/testimonial1.jpg')}}">
           </div>
           <div class="item">
             <img src="{{asset('images/testimonial2.jpg')}}">
           </div>
           <div class="item">
             <img src="{{asset('images/testimonial3.jpg')}}">
           </div>
           <div class="item">
             <img src="{{asset('images/testimonial4.jpg')}}">
           </div>
           <div class="item">
             <img src="{{asset('images/testimonial5.jpg')}}">
           </div>
           <div class="item">
             <img src="{{asset('images/testimonial6.jpg')}}">
           </div>
     </div>
    </div>
   </section>
     
    <!-- team -->
    <section id="team" class="bg-warning fontclass margin-top-fourty">
       <div class="container" >
           <div class="row title-fonts padding-top-thirty">
              <div class="col text-center">
                 <p >OUR TEAM</p>
              </div>
            </div>
            <div class="row justify-content-center team-font">
              <div class="col-md-2" >
                 <div class="card justify-content-center bg-warning text-center full-width  no-border">
                  <img src="{{asset('images/team1.png')}}" class="card-img-top teamimage" alt="...">
                  <div class="card-body">
                    <p class="card-title bold-font">Isha Poddar</p>
                    <p class="team-designation">Graphic Designer</p>
                  </div>
                </div>      
              </div>
               <div class="col-md-2">
                 <div class="card justify-content-center bg-warning text-center full-width  no-border">
                  <img src="{{asset('images/team4.png')}}" class="card-img-top teamimage" alt="...">
                  <div class="card-body">
                    <p class="card-title bold-font">Radhika Agarwal</p>
                    <p class="team-designation">Graphic Designer</p>
                  </div>
                </div>      
              </div>
               <div class="col-md-2">
                 <div class="card justify-content-center bg-warning text-center full-width  no-border">
                  <img src="{{asset('images/team3.png')}}" class="card-img-top teamimage" alt="...">
                  <div class="card-body">
                    <p class="card-title bold-font">Gulshan Sharma</p>
                    <p class="team-designation">Graphic Designer</p>
                  </div>
                </div>      
              </div>
               <div class="col-md-2">
                 <div class="card justify-content-center bg-warning text-center full-width  no-border">
                  <img src="{{asset('images/team2.png')}}" class="card-img-top teamimage" alt="...">
                  <div class="card-body">
                    <p class="card-title bold-font">Ditsha Bagri</p>
                    <p class="team-designation">Content Creator</p>
                  </div>
                </div>      
              </div>
               <div class="col-md-2">
                 <div class="card justify-content-center bg-warning text-center full-width no-border">
                  <img src="{{asset('images/team5.png')}}" class="card-img-top teamimage" alt="...">
                  <div class="card-body">
                    <p class="card-title bold-font">Rhitik Sarmah</p>
                    <p class="team-designation">Web Developer</p>
                  </div>
                </div>      
              </div>                              
            </div>
       </div>
    </section>

    <!-- contact -->
    <section id="contact" class="fontclass margin-top-ten">
      <div class="container">
          <div class="row title-fonts padding-top-twenty">
              <div class="col text-center">
                 <p >CONTACT US</p>
              </div>
          </div>
          <div class="row">      
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.6994890529654!2d91.74637941450464!3d26.173914697804594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5bb6634c8951%3A0xe9c1a46cdf760750!2sColours%20and%20Patterns!5e0!3m2!1sen!2sin!4v1580878807134!5m2!1sen!2sin" width="100%" height="250px;" frameborder="0" style="border:0;"></iframe>             
             </div>
            <div class="col-md-6 contact-margin">
                  <div class="contact-us-footer d-flex">
                      <ul class="col-md-1 contactstyle margin-right-ten">
                          <li><img src="{{asset('images/f.jpg')}}" width="14px"></img></li>
                          <li><img src="{{asset('images/f.jpg')}}" width="14px"></li>
                          <li><img src="{{asset('images/f.jpg')}}" width="14px"></li>
                          <li><img src="{{asset('images/f.jpg')}}" width="14px"></li>
                          <li><img src="{{asset('images/f.jpg')}}" width="14px"></li>
                      </ul>
                      <ul class="col-md-11 contactstyle">
                          <li><strong><a href="https://www.facebook.com/coloursandpatterns/?ref=br_rs">www.fb/coloursandpatterns/</a></strong></li>
                          <li><strong><a href="https://www.instagram.com/coloursandpatterns_/">@coloursandpatterns.ghy</a></strong></li>
                          <li><strong><a href="https://mail.google.com/">isha@coloursandpatterns.in</a></strong></li>
                          <li><strong>79804-36393 | 82828-26722</strong></li>
                          <li><strong><a href="https://www.google.com/maps/search/colous+and+patterns/@26.1684279,91.757428,14z/data=!3m1!4b1s">1st floor, Hemaprabha Kutir, By Lane No. 3, AK Azad Road, Rehabari, Guwahati- 781008, Assam</a></strong></li>
                      </ul>
                  </div>
            </div> 
        </div>
      </div>      
    </section>
   
    <!-- footer -->
    <section class="row bg-warning fontclass justify-content-center margin-top-fifty">
         <p class="margin-top-ten">&#9400; Colours and Patterns: 2020</p>
    </section>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{asset('owlcarousel/jquery.min.js')}}"></script>
<script src="{{asset('owlcarousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/index.js')}}"></script>
</body>
</html>