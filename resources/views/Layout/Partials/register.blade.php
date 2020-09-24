@extends('/layout/mainlayout')
@section('content')
@parent
<div class="container">
      <div class="row mb-5"></div>
      <div class = "row">
      <div class = "col-12">
						<section id="inner-wrapper" class="login">
							<article>
                                <form action="mainBlog/register" method="POST" oninput='up2.setCustomValidity(up2.value != up.value ? "Passwords do not match." : "")'>
                                @csrf
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-user"> </i></span>
											<input type="text" name=email minlength="3" class="form-control ml-2" placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
											<input name="emails" id="email" type="email"   class="form-control ml-2" placeholder="Email Address" >
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="password" minlength="3" id="password1" required name="up" class="form-control ml-2" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-key"> </i></span>
											<input type="password" minlength="3" id="password2" name="up2" class="form-control ml-2" placeholder="Confirm Password">
										</div>
									</div>
									  <button type="submit" class="btn btn-success btn-block">Submit</button>
								</form>
							</article>
</div>
</div>
</div>







@endsection