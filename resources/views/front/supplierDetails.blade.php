
<!DOCTYPE html>
<html lang="en">
@include('front.layout.header')
@foreach ($detail as $supplierdetails)

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/owl.carousel2.thumbs@0.1.8/dist/owl.carousel2.thumbs.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    .sv-slider-item {
      width: 100%;
      height: 360px;
      margin-bottom: 20px;
    }


    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: #333;
      opacity: 1; /* Firefox */
      font-size:12px;
      font-weight:normal;
    }
    .nice-select.open .list{
      font-size: 12px;
    }



    .input-wrap {
      position: relative;
      margin: 5px;
    }
    .sv-slider .owl-thumbs {
      white-space: nowrap;
      overflow: auto;
    }

    .owl-thumbs button>img {
      width: 100px;
      height: 100px;
    }

    button.owl-thumb-item {
      margin-right: 10px;
    }

    .pagetitle {
      text-transform: capitalize;
      letter-spacing: 1px;
      font-weight: 600;
      padding-bottom: 5px;
      
      color: #888181;
      width:100%;
      border-bottom: 1px solid #dedada59;

    }



    .themebg {
      background: #888181 ;
    }

    span.pagesubtitle {
      font-size: 13px;
      color: #aaa;
    }

    .shairIcon .fa {
      padding: 12px;
      font-size: 12px;
      width: 35px;
      height: 35px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
      border-radius: 50%;
    }

    .shairIcon .fa:hover {
      opacity: 0.7;
    }

    .fa-facebook {
      background: #3B5998;
      color: white;
    }

    .fa-twitter {
      background: #55ACEE;
      color: white;
    }  
    .fa-youtube {
      color: white;
      background: #e62020;
    }
    .fa-instagram {
      background: linear-gradient(10deg, red, purple);
      color: white;
    }

    .formMAin {
      box-shadow: 0px 0px 7px #ccc;
      padding: 15px 20px;
      min-height: 165px;
    }
    .socialmain{
      box-shadow: 0px 0px 7px #ccc;
      padding: 15px 20px;
      height: 80px; 
    }
    .abuttext {
      text-align: justify;
    }

    .pfadmicon-glyph-377:before {
      content: "\e979";
    }

    .product-slider .card {
      padding: 10px 10px;
      margin: 0 10px;
      box-shadow: 0px 0px 7px #ccc;
    }

    .product-slider img.card-img-top {
      height: 260px;
    }

    /*New*/
    .bannerImage {
      height: 55vh;
      background: url({{ asset('uploads/hotels_featured_images/'.$supplierdetails->featured_image) }});
background-repeat: no-repeat;
background-size: cover;
background-position: 100%;
background-attachment: fixed;
}

.formMAin i {
  color: #888181 ;
  margin-right: 6px;
}
.productsmall_section img.card-img-top {
 height: 150px;
}
.subproductMAin .col-md-4 {
  margin-bottom: 40px;
}
.productMain .card-body,.col-md-8.subproductMAin {
  /*min-height: 312px;*/
}
img.card-img-top:hover {
  transform: scale(1.05);
  transition-duration: 1s;
}
.productMain .owl-nav {
  bottom: 5% !important;
  width: 100%;
  text-align: center;
  position: absolute;
}
.productMain button.owl-next, .productMain button.owl-prev {
  width: 35px;
  background: #031042c4 !important;
  height: 35px;
  color: #fff !important;
  margin-right: 8px;
}



.multiselect {
  width: 200px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}





</style>


<style>
  .carousel-indicators li{
   width:100px ! important;
   height:60px ! important;
 }

 .carousel-indicators {
   bottom: 0;
   top: 0;
 }


 .mainContainer{
  margin-top:13%;
  /*margin-top:30px;*/
}
</style>


</head>

<body>
  <div class="mainContainer" style="">

    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <section id="sliderSection">
            <h3 class="pagetitle" >{{$supplierdetails->name}} <span class="pagesubtitle">{{$supplierdetails->location}}</span></h3>



            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
              <!--Slides-->
              <div class="carousel-inner" role="listbox">

                <?php
                $i=1;
                foreach (@$image as $images)
                {
                 if($i ==1)
                 {
                  $active='active';
                }
                else
                {
                  $active='';
                }

                ?>
                <div class="carousel-item <?php echo $active?>">


                  <img src="{{ asset('uploads/hotels_featured_images/'.$images)}}"  style="height:375px; width:100%"  class="d-block w-100" alt="Image">

                </div>
                <?php
                $i++;               
              }
              ?>

            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
            <ol class="carousel-indicators" style="position:relative">

             <?php
             $i=0;
             foreach (@$image as $images)
             {
               if($i ==0)
               {
                $active='active';
              }
              else
              {
                $active='';
              }

              ?>
              <li data-target="#carousel-thumb" data-slide-to="<?php echo $i ?>" class="<?php echo $active?>"> 



               <img src="{{ asset('uploads/hotels_featured_images/'.$images)}}"  style="height:60px; width:75px"  class="d-block " alt="Image">

             </li>

             <?php
             $i++;                
           }
           ?>

         </ol>
       </div>
       <!--/.Carousel Wrapper-->



     </section>
     <section id="about">
      <div class="Aboutsec">
        <h3 class="pagetitle" style="margin-top:5%">Description</h3>
        <p class="abuttext">
          {{$supplierdetails->description}}
        </p>
      </div>
    </section>
                    <!-- <section id="review">
                        <h3 class="pagetitle">Leave Review</h3>
                        <div class="row">
                            <div class="col-md-6 ">
                                <form id="reviwform">
                                    <input type="text" name="" placeholder="Name" class="form-control"><br>
                                    <input type="emial" name="" placeholder="Email" class="form-control"><br>
                                    <div>
                                        <span class="rating block">
                                            <span class="lbl-text">Rating:</span>
                                            <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <br>
                                    <textarea class="form-control" placeholder="Review"></textarea>
                                    <br>
                                    <button class="btn themebg btn-success form-control">Submit Review</button>
                                </form>
                            </div>
                        </div>
                      </section> -->
                    </div>
                    <div class="col-md-3">
                      <section id="getintouch">
                        <h3 class="pagetitle">Supplier Details</h3>
                        <div class="formMAin">
                          <p><i class="fa fa-user"></i> &nbsp;{{$supplierdetails->name}}</p>
                          <p><i class="fa fa-envelope"></i> supplier@hotelsvenues.com</p>
                          <p><i class="fa fa-list-ul"></i>  {{$suppliertype}}</p>
                          <!-- <p><i class="fa fa-map"></i>&nbsp;{{$supplierdetails->location}}</p> -->
                          <p><i class="fa fa-phone"></i> +971&nbsp;&nbsp;54 204 6984</p>
                        </div>
                        
                        
                        <h3 class="pagetitle">Enquiry</h3>
                        
                        <div class="formMAin">

                          <!--<form>-->
                            <form class="form" id="contactForm" novalidate="novalidate" role="form" enctype="multipart/form-data">
                              @csrf
                              <div class="row">
                                <div class="col-md-12 col-12">
                                  <div class="input-wrap">
                                    <input type="text" name="fullname" placeholder="Your Full Name" id="name">
                                    <i class="far fa-user-alt"></i>
                                  </div>
                                </div>
                                <div class="col-md-12 col-12">
                                  <div class="input-wrap">
                                    <input type="text" name="email" placeholder="Your Email" id="email">
                                    <i class="far fa-envelope"></i>
                                  </div>
                                </div>
                                <div class="col-md-12 col-12">

                                  <label>Select Category</label>

                                  
                                  <script type="text/javascript">
                                    
                                    <script type="text/javascript">
                                            $('select').selectpicker();
                                          </script>
                                  </script>
                                  <select class="selectpicker form-control" name="category" id="category" multiple data-live-search="true">
                                   @foreach($categories as $cat)
                                   <option>{{$cat->title}}</option>
                                   @endforeach
                                 </select>


                                 <style type="text/css">
                                   .nice-select{
                                    display: none;
                                  }
                                  .selectpicker{
                                    border:1px solid red;
                                  }
                                </style>
                              </div>
                              <div class="col-md-12 col-12">
                                <div class="input-wrap">
                                  <input type="text" name="mobile" placeholder="Your Mobile" id="number" onKeyPress="if(this.value.length==10) return false;"  >
                                  <i class="fab fa-wordpress"></i>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="input-wrap text-area">
                                  <textarea name="message" id="message" placeholder="Write Message"></textarea>
                                  <i class="far fa-pencil"></i>
                                </div>
                              </div>
                              <div class="col-12 text-center">
                                <button type="submit" class="btn filled-btn">Send Message <i class="far fa-long-arrow-right"></i></button>
                                <p style="font-size: 12px; color: green" id="response"></p>
                              </div>
                            </div>
                          </form>

                        </div>






                      </section>
                      <br>
                   <!--  <section id="getintouch">
                      <h3 class="pagetitle"   style="margin-top:0px ! important;">Social Links</h3>
                      <div class="socialmain">
                        <div class="shairIcon">
                          <a href="{{$supplierdetails->facebook}}" class="fa fa-facebook"></a>
                          <a href="{{$supplierdetails->twitter}}" class="fa fa-twitter"></a>
                          <a href="{{$supplierdetails->you_tube}}" class="fa fa-youtube"></a>
                          <a href="{{$supplierdetails->instagram}}" class="fa fa-instagram"></a>
                        </div>
                      </div>
                    </section> -->
                  </div>
                </div>
              </div>

              <div class="container" style="margin-bottom:30px">
                <h3 class="pagetitle">Product Lists  </h3>
                <div class="row">
                  <?php

                  if(count($data) > 3)
                  {
                    ?>
                    
                    <div class="col-md-12">
                      <div class="productMain owl-carousel ">

                       @foreach ($data as $productdata)
                       <div class="product-slider">
                        <div class="card">
                          <!--<img class="card-img-top" src="{{ asset('social/slide1.jpg') }}" alt="Card image" style="width:100%">-->

                          <img class="card-img-top" @if ($productdata->image && $img = explode(" ",$productdata->image) ) src="{{ 
                          asset('uploads/hotels_featured_images/'.$img[0]) }}" alt="Card image" style="width:100%" @endif>

                          <div class="card-body">
                            <h4 class="card-title">{{$productdata->products}}</h4>
                            <span>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </span>
                            <p style="font-weight:bold;">{{$suppliertype}}</p>
                            <p style="font-weight:bold;">{{$productdata->discount_offer}}% Off</p>
                            <p>{{str_limit($productdata->description,58)}}</p>  
                          </div>
                        </div>
                      </div>
                      @endforeach


                    </div>
                  </div>

                  <?php

                }
                else
                {
                  ?>




                  <div class="productMain owl-carousel1 " style="width:100%">

                   @foreach ($data as $productdata)
                   <div class="col-md-4">
                    <div class="product-slider" >
                      <div class="card">
                        <!--<img class="card-img-top" src="{{ asset('social/slide1.jpg') }}" alt="Card image" style="width:100%">-->

                        <img class="card-img-top" @if ($productdata->image && $img = explode(" ",$productdata->image) ) src="{{ 
                        asset('uploads/hotels_featured_images/'.$img[0]) }}" alt="Card image" style="width:100%" @endif>

                        <div class="card-body">
                          <h4 class="card-title">{{$productdata->products}}</h4>
                          <span>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </span>
                          <p style="font-weight:bold;">{{$suppliertype}}</p>
                          <p style="font-weight:bold;">{{$productdata->discount_offer}}% Off</p>
                          <p>{{str_limit($productdata->description,58)}}</p>  
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach



                </div>



                <?php
              }
              ?>
              <div class="col-md-8 subproductMAin" style="display:none">
                <div class="row">
                  @foreach ($data as $productdata)
                  <div class="col-md-4">
                    <div class="product-slider productsmall_section text-center">
                      <div class="card">


                        <img class="card-img-top" @if ($productdata->image && $img = explode(" ",$productdata->image) ) src="{{ 
                        asset('uploads/hotels_featured_images/'.$img[0]) }}" alt="Card image" style="width:100%" @endif>

                        <div class="card-body">
                          <h4 style="font-weight:bold;" class="card-title">{{$productdata->products}}</h4>
                          <span>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </span>
                          <p style="font-weight:bold;">{{$suppliertype}}</p>
                          <p style="font-weight:bold;">{{$productdata->discount_offer}}% Off</p>
                          <p>{{str_limit($productdata->description,58)}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

                </div>
              </div>




            </div>
          </div>
        </div>



        <script type="text/javascript">

          $('#contactForm').on('submit',function(e){
            e.preventDefault();

            let name = $('#name').val();
            let email = $('#email').val();
            let category = $('#category').val();
            let number = $('#number').val();
            let message = $('#message').val();

            $.ajax({
              url: "/enquiry",
              type:"POST",
              data:{
                "_token": "{{ csrf_token() }}",
                name:name,
                email:email,
                number:number,
                category:category,
                message:message,
              },
              success:function(response){
                console.log(response)
                if (response) {
                  document.getElementById('response').innerHTML = response.success;
                $("#contactForm")[0].reset(); 
              }
            },
            error: function(response) {
              console.log("Error")
            }
          });
          });
        </script>




        <script type="text/javascript">
          $('.sv-slider .owl-carousel').owlCarousel({
            autoplay: false,
            autoplayHoverPause: true,
            dots: false,
            nav: false,
            thumbs: true,
            thumbImage: true,
            thumbsPrerendered: true,
            thumbContainerClass: 'owl-thumbs',
            thumbItemClass: 'owl-thumb-item',
            loop: false,
            navText: [
            "<i class='fa fa-chevron-left' aria-hidden='true'></i>",
            "<i class='fa fa-chevron-right' aria-hidden='true'></i>"
            ],
            items: 1,
            responsive: {
              0: {
                items: 1,
              },
              768: {
                items: 1,
              },
              992: {
                items: 1,
              }
            }
          });
        </script>


        <script type="text/javascript">
          $('.productMain.owl-carousel').owlCarousel({
            autoplay: false,
            autoplayHoverPause: true,
            dots: false,
            nav: true,
            loop: false,
            navText: [
            "<i class='fa fa-chevron-left' aria-hidden='true'></i>",
            "<i class='fa fa-chevron-right' aria-hidden='true'></i>"
            ],
            items: 1,
            responsive: {
              0: {
                items: 1,
              },
              768: {
                items: 1,
              },
              992: {
                items: 1,
              }
            }
          });
        </script>


        <script type="text/javascript">
          var expanded = false;

          function showCheckboxes() {
            var checkboxes = document.getElementById("checkboxes");
            if (!expanded) {
              checkboxes.style.display = "block";
              expanded = true;
            } else {
              checkboxes.style.display = "none";
              expanded = false;
            }
          }
        </script>



        <script>
          function MobileNumber(event) {
            var regex = new RegExp("^[0-9+]");
            var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
              event.preventDefault();
              return false;
            }
          }
        </script>
      </body>
      @endforeach
      </html>
      @include('front.layout.footer')
