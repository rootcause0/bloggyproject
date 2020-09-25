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
@auth
@if($data->author == Auth::user()->email)
<a class="btn btn-primary" href="/update?topid={{$data->topid}}">Update Post</a>
<br>
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
  Delete Post
</button>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You're going to delete current post.
      </div>
      <div class="modal-footer">
        <a class="btn btn-success" href="/delete?topid={{$data->topid}}">Yes</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
@endauth
@endif
</div>
</div>

</div>
</div>




@endsection