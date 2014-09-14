<!doctype html>
<html lang="en">
<head>
  @section('head')
  <meta charset="UTF-8">
  {{ HTML::style('css/bootstrap-arabic.css') }}
  {{ HTML::style('css/bootstrap-arabic-theme.css') }}
  {{ HTML::style('css/font-awesome.css') }}
  {{ HTML::script('js/bootstrap-arabic.js') }}
  {{ HTML::script('js/jquery.js') }}

  @show
  <style>
  #wrapper {
  padding-right: 250px;
  transition: all 0.4s ease 0s;
}

#sidebar-wrapper {
  margin-right: -250px;
  right: 250px;
  width: 250px;
  background: #e3e3e3;
  position: fixed;
  height: 100%;
  overflow-y: auto;
  z-index: 1000;
  transition: all 0.4s ease 0s;
}

#page-content-wrapper {
  width: 100%;
}

.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  list-style: none;
  margin: 0;
  padding: 0;
}

@media (max-width:767px) {

    #wrapper {
      padding-left: 0;
    }

    #sidebar-wrapper {
      left: 0;
    }

    #wrapper.active {
      position: relative;
      right: 250px;
    }

    #wrapper.active #sidebar-wrapper {
      right: 250px;
      width: 250px;
      transition: all 0.4s ease 0s;
    }

}
  </style>
</head>
<body>
<nav class="navbar navbar-inverse" style="margin-bottom:0px" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::route('home') }}">سیستم نظارت موسسات تربیه معلم</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

    {{ HTML::clever_link("/", 'صفحه اصلی' ) }}
    {{ HTML::clever_link("help", 'رهنما' ) }}
    {{ HTML::clever_link("contact", 'تماس با ما' ) }}

      </ul>

      <ul class="nav navbar-nav navbar-right">
        @if(!Auth::check())
        <a href="{{ URL::route('getLogin') }}" class="btn btn-success" style="margin-top:10px">داخل سیستم شوید!</a>

        <a href="{{ URL::route('getCreate') }}" class="btn btn-warning" style="margin-top:10px">ثبت نام</a>
        @else
        <a href="{{ URL::route('getLogout') }}" class="btn btn-danger" style="margin-top:10px">از سیستم خارج شوید!</a>
        @endif

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="nav nav-pills nav-stacked">
          @if(!Auth::check())
          {{ HTML::clever_link("/", 'صفحه اصلی' ) }}
          {{ HTML::clever_link("help", 'رهنما' ) }}
          {{ HTML::clever_link("contact", 'تماس با ما' ) }}
          @else
          {{ HTML::clever_link("/student", 'فورمه مصاحبه با محصل' ) }}
          {{ HTML::clever_link("/teacher_in", 'فورمه مصاحبه با استاد' ) }}
          {{ HTML::clever_link("/teacher_ob", 'فورم مشاهده استاد' ) }}
          {{ HTML::clever_link("/admin_in", '  فورمه مصاحبه با کارمندان اداری' ) }}
          @endif
  

</ul>
<hr style="border-top: 2px solid #0986b7;"/>
    </div>
    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container" style="padding-right:0">
                <div class="row">
                    <div class="col-md-12">
                      @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




  <div class="navbar navbar-default navbar-fixed-bottom">
   <div class="container">
     <p class="navbar-text pull-left">© ۲۰۱۴- ریاست عمومی تربیه معلم - بخش سیستم های معلوماتی

     </p>

     <a href="/contact" class="navbar-btn btn-danger btn pull-right">
     <span class="fa fa-envelope"></span>  تماس با ما</a>
   </div>


 </div>
</body>
</html>
