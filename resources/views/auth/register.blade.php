@include('common/header')    
	<div class="recyclableFrm" style = "margin-top: 8%">
        <form action = "{{URL::to('/register')}}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <h1 class="title">Registration</h1><br>
			@if(session()->has('message'))
				<div class="alert alert-info">
					{{ session()->get('message') }}
				</div>
			@endif

			@if($errors->has('firstName'))
				<div class="alert alert-danger">
					{{ $errors->first('firstName') }}
				</div>
			@endif
            <div class="inputContainer">
                <input type="text" name="firstName" class="input" placeholder="Enter first name">
                <label for="" class="label">First Name</label><br><br>
            </div>
            <br>

			@if($errors->has('lastName'))
				<div class="alert alert-danger">
					{{ $errors->first('lastName') }}
				</div>
			@endif
            <div class="inputContainer">
                <input type="text" name="lastName" class="input" placeholder="Enter last name">
                <label for="" class="label">Last Name</label><br><br>
            </div>
            <br>

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
            </div><br>

			@if($errors->has('confirmPassword'))
				<div class="alert alert-danger">
					{{ $errors->first('confirmPassword') }}
				</div>
			@endif
            <div class="inputContainer">
				<input type="password" name="confirmPassword" class="input" placeholder="Confirm your password">
				<label for="" class="label">Password Confirmation</label>
            </div>
            <br>

			@if($errors->has('phoneNumber'))
				<div class="alert alert-danger">
					{{ $errors->first('phoneNumber') }}
	
				</div>
			@endif
            <div class="inputContainer">
				<input type="tel" name="phoneNumber" class="input" placeholder="Enter your phone number">

				<label for="" class="label">Phone Number</label>
            </div>
            <br>

            <div class="button">
                <input type="submit" name="register" class="btn" value="Sign Up" style = "background-color: #008374; color: #fff">
                <p>Already have an account? <a href="{{URL::to('/login')}}">Login </a> </p>
              </div>
        </form>
    </div>
@include('common/footer')