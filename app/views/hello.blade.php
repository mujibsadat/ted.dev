@extends('layouts.master')
@section('head')
  @parent
  <title>HOME ::  TTC Monitoring and Evaluation System</title>
@endsection

@section('content')
@if(Session::has('success'))
  <div class="alert alert-success">{{ Session::get('success') }}</div>
@elseif (Session::has('fail'))
  <div class="alert alert-danger">{{ Session::get('fail') }}</div>
@endif
  <h2>سلام و خوش آمدید!</h2>
  <p class="lead text-muted">
    این سیستم برای ذخیره و درج معلومات در مورد نظارت موسسات تربیه معلم انکشاف ګردیده که این معلومات توسط اعضای محترم علمی ریاست عمومی تربیه معلم ذخیره میګردد.
    برای استفاده ازین سیستم شما باید دارای اسم کاربر و شفر باشید تا بتوانید ازین سیستم استفاده نمایید!

    مدت ثبت نام درین سیستم محدود میباشد با تکمیل شدن ثبت نام تمام اعضا بخش ثبت نام غیر فعال ګردیده و بعدا نمی توانید ثبت نام نمایید!

    اسم کاربر و شفر خویش را به یاد داشته باشید!
  </p>
  <div class="alert alert-info">
  <p class="lead text-muted">
      اګر کدام مشکل و یا رهنمایی ضرورت دارید با ما در تماس شوید!
  </p>
<hr/>
  <address>
  <strong>بخش سیستم های معلوماتی، ریاست عمومی تربیه معلم</strong><br>
  منزل سوم، اطاق نمبر ۳۰۰<br>
  <abbr title="Phone" dir="ltr">تلیفون</abbr> ۹۱۸۶
  <abbr title="Mobile" dir="ltr">موبایل</abbr> ۰۷۰ ۷۰۸۰۹۷۱
</address>

<address>
  <strong>ایمیل</strong><br>
  <a href="mailto:temis.help@gmail.com">temis.help@gmail.com</a>
</address>
</div>

@endsection
