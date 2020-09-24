<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="/">Bloggy</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      @auth
        <li class="nav-item">
          <a class="nav-link text-white">{{Auth::user()->email}} Welcome!</a>
        </li>
      @endauth

      @auth
        <li class="nav-item">
          <a class="nav-link text-white" href="/logout">Logout</a>
        </li>
      @endauth
        <li class="nav-item">
          <a class="nav-link text-white" href="/">Home</a>
        </li>
        @auth
        <li class="nav-item">
        <a class="nav-link text-white" data-toggle="modal" data-target="#exampleModal"> Add Category</a>
        </li>
      @endauth
      @auth
        <li class="nav-item">
          <a class="nav-link text-white" href="/add">Add Topic</a>
        </li>
      @endauth
        @guest
        <li class="nav-item">
          <a class="nav-link text-white" href="/register">Register</a>
        </li>
        @endguest
      @guest
        <li class="nav-item">
          <a class="nav-link text-white" href="/login">Login</a>
        </li>
        @endguest
     
        <li class="nav-item">
        <div class="dropdown">
  <button class="btn  dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Choose Category
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

 @isset($catTable)
   @foreach($catTable as $mydata)
    <a class="dropdown-item" href="/cat?catid={{$mydata->catid}}">{{$mydata->category}}</a>
@endforeach
@endisset

  </div>
  
</div>

        </li> 
      </ul>
    </div>
  </div>
</nav>

<form action="/addCategory" method="POST">
        @csrf
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <div class="form-group">
    <label for="exampleInputEmail1">Category Name</label>
    <input type="text" class="form-control" name="cat" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category name">
    <small id="emailHelp" class="form-text text-muted">Please specifiy a category name to add.</small>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
