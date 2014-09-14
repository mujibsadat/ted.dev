@extends('layouts.master')
@section('head')
	@parent
	<title>HOME ::  Register</title>
@endsection
@section('content')
<style>
#wrap{
background-image: -ms-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Mozilla Firefox */
background-image: -moz-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Opera */
background-image: -o-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Webkit (Safari/Chrome 10) */
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #D3D8E8));
/* Webkit (Chrome 11+) */
background-image: -webkit-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* W3C Markup, IE10 Release Preview */
background-image: linear-gradient(to bottom, #FFFFFF 0%, #D3D8E8 100%);
background-repeat: no-repeat;
background-attachment: fixed;
}
legend{
	color:#141823;
	font-size:25px;
	font-weight:bold;
}
.signup-btn {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #578843);
  background-image: -moz-linear-gradient(top, #79bc64, #578843);
  background-image: -ms-linear-gradient(top, #79bc64, #578843);
  background-image: -o-linear-gradient(top, #79bc64, #578843);
  background-image: linear-gradient(to bottom, #79bc64, #578843);
  -webkit-border-radius: 4;
  -moz-border-radius: 4;
  border-radius: 4px;
  text-shadow: 0px 1px 0px #898a88;
  -webkit-box-shadow: 0px 0px 0px #a4e388;
  -moz-box-shadow: 0px 0px 0px #a4e388;
  box-shadow: 0px 0px 0px #a4e388;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #3b6e22  1px;
  text-decoration: none;
}

.signup-btn:hover {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #5e7056);
  background-image: -moz-linear-gradient(top, #79bc64, #5e7056);
  background-image: -ms-linear-gradient(top, #79bc64, #5e7056);
  background-image: -o-linear-gradient(top, #79bc64, #5e7056);
  background-image: linear-gradient(to bottom, #79bc64, #5e7056);
  text-decoration: none;
}
.navbar-default .navbar-brand{
		color:#fff;
		font-size:30px;
		font-weight:bold;
	}
.form .form-control { margin-bottom: 10px; }
@media (min-width:768px) {
	#home{
		margin-top:50px;
	}
	#home .slogan{
		color: #0e385f;
		line-height: 29px;
		font-weight:bold;
	}
}
</style>
<div class="container" id="wrap">
	  <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{ URL::route('postCreate') }}" method="post" accept-charset="utf-8" class="form" role="form">
              <br/><br/>
              <legend>ثبت نام اعضای علمي <a href="/user/login" class="pull-right btn btn-primary">داخل سیستم شوید!</a></legend>
<br/><br/>
                    <h4>لطفا معلومات ذیل را وارد نمایید!</h4>

                    <input type="text" name="username" class="form-control input-lg" placeholder="اسم کاربر خویش را بنویسید!"  />
										<span class="text-danger lead">
											@if($errors->has('username'))
												{{ $errors->first('username') }}
											@endif
									</span>



                    <input type="password" name="pass1" class="form-control input-lg" placeholder="شفر و یا پاسورد دلخواه خویش را بنویسید!"  />
										<span class="text-danger lead">
										@if($errors->has('pass1'))
											{{ $errors->first('pass1') }}
										@endif
									</span>

                    <input type="password" name="pass2" value="" class="form-control input-lg" placeholder="پاسورد خویش را دوباره بنویسید!"  />
										<span class="text-danger lead">
										@if($errors->has('pass1'))
											{{ $errors->first('pass1') }}
										@endif
									</span>


									{{ Form::token() }}
                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                        اکونت را ایجاد نمایید!</button>
                        <br/>
            </form>
          </div>
</div>
</div>
</div>
@stop
