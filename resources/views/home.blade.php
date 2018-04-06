@extends('layouts.app')

@section('content')
<div class="container-fluid">
 <div class="slider">
  <div class="slider-cover">
    <div class="row">
        <div class="col-md-12 col-xs-12">
         <div class="slider-content">
           <div class="col-md-offset-3 col-md-6 col-xs-12 ">
            <div class="slider-cont">

            <h1>AD SECRETARY</h1>
            <span class="slider-hr"><i class="fa fa-star"></i></span>
            <div class="typewrite" data-period="2000" data-type='[ "Are you urgently looking for a ad space! Well Look no more, ADSecretary got your back. Get connected with the best media house with the best price." ]'>
             <h1 class="wrap"></h1>
            </div>
            <p> </p> 
             <a href="#" ><button class="btn btn-primary">Learn More</button></a>
           </div>
           </div>
         </div>
        </div>
    </div>
  </div>
 </div>
</div>

<div class="container multi" id="multi">
 <div class="top-ads">
   <div class="section-title text-center">
     <h2>Media Partners</h2>
      <hr>
   </div>
   <div class="row">
    <div class="carousel slide" id="myCarousel">
      <div class="carousel-inner">
        <div class="item active">
          <div class="col-xs-3">
           <div class="ad-top text-center">
            <img src="/images/logos/citizen.png">
           </div>
          </div>
        </div>
        <div class="item">
          <div class="col-xs-3">
           <div class="ad-top text-center">
            <img src="/images/logos/ktn.jpeg">
           </div>
          </div>
        </div>
        <div class="item">
          <div class="col-xs-3">
           <div class="ad-top text-center">
            <img src="/images/logos/sg.jpeg">
           </div>
          </div>
        </div>
        <div class="item">
          <div class="col-xs-3">
           <div class="ad-top text-center">
            <img src="/images/logos/hot.jpeg">
           </div>
          </div>
        </div>
        <div class="item">
          <div class="col-xs-3">
           <div class="ad-top text-center">
            <img src="/images/logos/citizen.png">
           </div>
          </div>
        </div>
        <div class="item">
          <div class="col-xs-3">
           <div class="ad-top text-center">
            <img src="/images/logos/ktn.jpeg">
           </div>
          </div>
        </div>
        <div class="item">
          <div class="col-xs-3">
           <div class="ad-top text-center">
            <img src="/images/logos/sg.jpeg">
           </div>
          </div>
        </div>

      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
    </div>
  </div>
 </div>

</div>

<div class="container-fluid strip text-center">
 <div class="services text-center">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <div class="service">
        <span><i class="fa fa-cog fa-3x"></i></span>
        <h4>Services</h4>
        <p>Adsecretary provides proposition for both media buyers and media owners.</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <div class="service">
        <span><i class="fa fa-users fa-3x"></i></span>
        <h4>Our Company</h4>
        <p>Adsecretary is a full service advertising sales management firm.</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <div class="service">
        <span><i class="fa fa-map fa-3x"></i></span>
        <h4>Ad Creation</h4>
        <p>Adsecretary can create an outstanding advert.</p>
      </div>
    </div>
  </div>
 </div>
 <div class="stripcont ">
   <span><h3>YOUR AUDIENCE IS HERE</h3></span>
 </div>
</div>



@endsection
