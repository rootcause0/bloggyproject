@extends('/layout/mainlayout')
@section('content')

<div class="container">
<div class = "row mb-5"></div>
<div class="row">
<div class="col-12">
<form action="update" method = "POST">
@csrf
<div class="form-group">
    <label for="id">ID</label>
    <input type="text" name="topid" value="{{$topData->category->catid}}" readonly class="form-control" id="id">
  </div> 

<div class="form-group">
    <label for="exampleFormControlInput1">Topic</label>
    <input type="text" name="topic" value="{{$topData->topic}}" class="form-control" id="exampleFormControlInput1" placeholder="Topic">
  </div> 

  <div class="form-group">
    <label for="exampleFormControlInput1">Photo Link (It have to be direct link)</label>
    <input type="text"  name="photoLink" class="form-control" id="exampleFormControlInput1" value="{{$topData->photolink}}" placeholder="Photo Link (cant null)"></input>
  </div>       

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Enter your content</label>
    <textarea class="form-control"  name="content" placeholder="Enter your content" maxlength="255" id="exampleFormControlTextarea1" rows="3">{{$topData->content}}</textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Category</label>
    <select class="form-control"  name="catName" id="exampleFormControlSelect1">
    @foreach($catTable as $data)
      <option value="{{$data->catid}}">{{$data->category}}</option>
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
</div>
</div>
</div>
</div>


@endsection