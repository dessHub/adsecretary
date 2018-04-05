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
            <h1>THIS IS AD SECRETARY</h1>
            <hr class="slider-hr">
            <p>Are you urgently looking for a ad space! Well Look no more, ADSecretary got your back. Get connected with the best media house with the best price. </p> 
             <a href="#" ><i class="fa fa-angle-double-down fa-5x"></i></a>
           </div>
           </div>
         </div>
        </div>
    </div>
  </div>
 </div>
</div>

<div class="container multi">
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

 <div class="section-bottom">
  <h3>Browse More</h3>
 </div>
</div>





@endsection
