@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'Login Page')

@section('content')
	<!-- begin login -->
	<div class="login login-with-news-feed">
		<!-- begin news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url({{ $about['image'] }})"></div>
			<div class="news-caption">
				<h4 class="caption-title">{{ $about['name'] }}</h4>
				<p>
{{--					Download the Color Admin app for iPhone®, iPad®, and Android™. Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
				</p>
			</div>
		</div>
		<!-- end news-feed -->
		<!-- begin right-content -->
		<div class="right-content">
			<!-- begin login-header -->
			<div class="login-header">
				<div class="brand">
					<span class="logo"></span> <b></b> Admin
				</div>
				<div class="icon">
					<i class="fa fa-sign-in-alt"></i>
				</div>
			</div>
			<!-- end login-header -->
			<!-- begin login-content -->
			<div class="login-content">
				<form action="{{ route('login') }}" method="POST" class="margin-bottom-0">
                    @csrf
					<div class="form-group m-b-15">
						<input type="text" name="username" class="form-control form-control-lg @error('username')is-invalid @enderror" placeholder="Username" required value="{{old('username')}}" />
                        @error('username')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
					</div>
					<div class="form-group m-b-15">
						<input type="password" name="password" class="form-control form-control-lg @error('password')is-invalid @enderror" placeholder="Password" required />
                        @error('password')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
					</div>
					<div class="login-buttons">
						<button type="submit" class="btn btn-success btn-block btn-lg">Вход</button>
					</div>
					<hr />
					<p class="text-center text-grey-darker mb-0">
						{{ $about['name'] }}
					</p>
				</form>
			</div>
			<!-- end login-content -->
		</div>
		<!-- end right-container -->
	</div>
	<!-- end login -->
@endsection
