@extends('/layout/mainlayout')
@section('content')
<div class="container">
<div class="row mt-4">

  <!-- Grid column -->
  <div class="col-md-6 mb-4 mt">

    <!--Card-->
    <div class="card default-color-dark">

      <!--Card image-->
      <div class="view">
        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(125).jpg" class="card-img-top" alt="photo">
        <a href="#">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body text-center">
        <!--Title-->
        <h4 class="card-title white-text">News title</h4>
        <!--Text-->
        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
          quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
      </div>

    </div>
    <!--/.Card-->

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-6 mb-4">

    <!--Card-->
    <div class="card primary-color-dark">

      <!--Card image-->
      <div class="view">
        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(122).jpg" class="card-img-top" alt="photo">
        <a href="#">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <!--Card content-->
      <div class="card-body text-center">
        <!--Title-->
        <h4 class="card-title white-text">News title</h4>
        <!--Text-->
        <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
          quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
        <a href="#" class="btn btn-outline-white btn-md waves-effect">Button</a>
      </div>

    </div>
    <!--/.Card-->

  </div>
  <!-- Grid column -->

</div>
</div>
<!-- Grid row -->
@endsection