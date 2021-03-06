@extends('/layout/mainlayout')
@section('content')
@parent
<div class="row mb-5"></div>
<div class="container">
<div class="row">

  <!--Grid column-->
  <div class="col-md-12 col-sm-12 mb-4 col-lg-12">

    <!-- Card -->
    <div class="card gradient-card">

        <div class="card-image bg-danger">

          <!-- Content -->
          <a style="text-decoration:none" href="/">
            <div class="text-white d-flex h-100 mask blue-gradient-rgba">
              <div class="first-content align-self-center p-3">
                <h3 class="card-title">Something went wrong!</h3>
                <p class="lead mb-0">It looks like something really went wrong! We suggest you to try again what you've done.</p>
              </div>
              
            </div>
          </a>

        </div>
        </div>
        </div>
        </div>
        </div>


@endsection