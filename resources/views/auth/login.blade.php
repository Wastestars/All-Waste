@include('common/header')
    <div class="loginform" style ="margin-top: 10%">
        <form action="{{url('/login')}}" method="POST" enctype="multipart/form-data" class="form">
			@csrf
            <h3 class="title">Please Login to Proceed</h3>

            @if(session()->has('message'))
              <div class="alert alert-info">
                {{ session()->get('message') }}
              </div>
            @endif

			@if($errors->has('email'))
				<div class="alert alert-danger">
					{{ $errors->first('email') }}
				</div>
			@endif
            <div class="inputContainer">
              <input type="email" name="email" class="input" placeholder="Enter your email">
              <label for="" class="label">Email</label>
            </div>
            <br>

			@if($errors->has('password'))
				<div class="alert alert-danger">
					{{ $errors->first('password') }}
				</div>
			@endif
            <div class="inputContainer">
              <input type="password" name="password" class="input" placeholder="Enter your password">
              <label for="" class="label">Password</label>
            </div>
            <br>
            <div class="button">
                <input type="submit" name="login" class="btn" value="Sign In" style = "background-color: #008374; color: #fff">
                <p>Do not have an account <a href="{{url('/register')}}">Register</a> </p>
            
            </div>
        </form>
    </div>
@include('common/footer')


