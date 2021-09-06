@extends('layouts.app')

@section('content')

<div class="wrapperLOGIN">
        <div class="widget-brand">
				<a href="{{ route('login') }}">
					<img src="{{ asset('public/images/banner_footer.png') }}"  class="img-fluid" alt="">
							</a>
					</div>
     <form class="loginForm" method="POST" action="{{ route('login') }}">
        <p class="title">Đăng nhập hệ thống</p>
             {{ csrf_field() }}
                 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" placeholder="Email"  name="email" value="{{ old('email') }}" required autofocus>
                    <i class="fa fa-user"></i>
                                @if ($errors->has('email'))
                                    <span >
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                    </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <input id="password" type="password" placeholder="Mật khẩu"  name="password" required>
                                <i class="fa fa-key"></i>
                                @if ($errors->has('password'))
                                    <span >
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                       <!--  <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> -->
                            
                                <button type="submit" >
                                <i class="spinner"></i>
                                <span class="state">Đăng nhập</span>
                                </button>

                              
                           
                       
                    </form>
             

</div>
@endsection
