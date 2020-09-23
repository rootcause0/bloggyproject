@extends('/layout/mainlayout')
@section('content')
@parent
<!-- Page Header -->

<div class="container">
 <div class="row mb-5"></div>


 


  @php
  foreach($data as $mydata)
{
  echo '
  
  <div class="row mx-auto">
<div class="col-lg-12 col-sm-12 col-md-12 mb-2">

<!-- Card -->
<div class="card card-cascade wider reverse">

  <!-- Card image -->
  
  <div class="view view-cascade overlay">
    <img class="card-img-top" src='."{$mydata->photolink}".'
      alt="Card image cap">
    <a href=  "">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong>'."{$mydata->topic}".'</strong></h4>
    
    <!-- Text -->
    <p class="card-text">'."{$mydata->content}".'
    </p>
    <p class="text-muted text-left ">Category : '."{$mydata->category->category}".'
    </p>
    <a class="btn btn-primary w-50" href='."/content/?p=$mydata->topid".' role="button">Read More...</a>
    

  </div>

</div>


</div>
</div>
';}

@endphp






</div>


</div>
  
@endsection