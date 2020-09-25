@extends('/layout/mainlayout')
@section('content')
@parent
<!-- Page Header -->

<div class="container">
 <div class="row mb-5"></div>


 

 <div class="row mx-auto">
 @php
 $i = 0; // Serves for dynamic col. algorithm.
 @endphp
@empty($catData)
@foreach($allData as $mydata)

  @php
  $i++;
  @endphp 
  <div class="col-md-6 mb-4 mt">
  <div class="card default-color-dark">

<!--Card image-->
<div class="view">
  <img src="{{$mydata->photolink}}" class="card-img-top" alt="photo">
  <a href="#">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>

<!--Card content-->
<div class="card-body text-center">
  <!--Title-->
  <h4 class="card-title white-text">{{$mydata->topic}}</h4>
  <!--Text-->
  <p class="card-text white-text">{{$mydata->content}}</p>
  

  <a href="/content/?p={{$mydata->topid}}" class="btn btn-outline-white w-100 btn-primary btn-md waves-effect">Read More</a>
  <p class="font-weight-bold text-center">Date: {{$mydata->created_at}}</p>
  <p class="font-weight-bold text-center">Author: {{$mydata->author}}</p>
  <p class="font-weight-bold text-center">Category: {{$mydata->category->find($mydata->catid)->category}}</p>
</div>

</div>

</div>
@if($i == 2)
@php
$i = 0;
@endphp
</div>
<div class="row mx-auto">
@endif





@endforeach
@endempty
@isset($catData)
<div class="row mx-auto">
@foreach($catData as $mydata)

  
  
  
<div class="col-lg-12 col-sm-12 col-md-12 mb-2">

<!-- Card -->
<div class="card card-cascade wider reverse">

  <!-- Card image -->
  
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="{{$mydata->photolink}}"
      alt="Card image cap">
    <a href=  "">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong>{{$mydata->topic}}</strong></h4>
    
    <!-- Text -->
    <p class="card-text">{{$mydata->content}}</p>
    
    <p class="text-muted text-left ">Category :{{$mydata->category->find($mydata->catid)->category}}
    </p>
    <a class="btn btn-primary w-50" href="/content/?p={{$mydata->topid}}" role="button">Read More...</a>
    

  </div>

</div>


</div>
</div>


@endforeach
@endisset





</div>



  
@endsection