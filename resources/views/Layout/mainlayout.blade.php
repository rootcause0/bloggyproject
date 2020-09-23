<!DOCTYPE html>

<html>
<head>
@include('layout.partials.head')
@include('layout.partials.scripts')
</head>
<body>

  @include('layout.partials.navbar')
  @section('content')
  @show

@include('layout.partials.footer')

 

 @include('layout.partials.google-analytics')
</body>

</html>
