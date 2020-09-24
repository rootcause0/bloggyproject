@extends('/layout/mainlayout')
@section('content')
<div class = "container">
<div class="row mb-5"></div>

<div class = "row">
<div class = "col-12 text-center">
<img src="{{$data->photolink}}" class="img-fluid mb-5" alt="Responsive image">
<div class="jumbotron">
<h2 class="text">{{$data->topic}}</h2>
<p class="text">{{$data->content}}</p>
<p class="text text-left">Author:{{$data->author}}</p>
<p class="text text-right">Created at:{{$data->created_at}}</p>
</div>
</div>

</div>
</div>




@endsection