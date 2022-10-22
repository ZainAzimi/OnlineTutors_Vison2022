<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/atorni/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Jul 2022 11:09:40 GMT -->
<head>
<title>Tutor Finder - Your Online Tution</title>
<link rel = "shortcut icon" href="{{asset('/images/logo/headlogo.png')}}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('../../../cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/animate.css%2bflaticon.css%2btiny-slider.css%2baos.css%2bstyle.css.pagespeed.cc.Fv1RkHV6ii.css')}}" />
<script nonce="e47194b3-909c-4fe4-9855-8c4317e00d03">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.x=Math.random(),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz_"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin",z.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)},["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>
<div class="pt-3 pb-5 top-wrap">
<div class="container-xl">
<div class="row d-flex align-items-end">
<div class="col-md-2 d-flex mb-2 mb-md-0 order-md-2">
<a class="navbar-brand align-items-center m-md-auto" href="{{ asset('index-2.html">

<img src="./images/logo/mainlogo.png" alt="" width="100%" >
</a>
</div>
<div class="col-md topper d-flex mb-md-0 mb-2 align-items-center order-md-1">

<div class="pr-md-4 pr-0 text pl-3 pl-md-0 text-md-right">
<p class="con"><span>Free Call</span> <span>+1 234 456 78910</span></p>
<p class="con">Call Us Now 24/7 Customer Support</p>
</div>
</div>
<div class="col-md topper d-flex mb-md-0 align-items-center order-md-3">

<div class="text pl-3 pl-md-3">
<p class="hr"><span>Our Location</span></p>
<p class="con">198 West 21th Street, Suite 721 New York NY 10016</p>
</div>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg  ftco-navbar-light">
<div class="container-xl">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="fa fa-bars"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto mb-2 mb-lg-0">
<li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
<li class="nav-item"><a class="nav-link" href="/tutorsprofile">Tutors</a></li>
<li class="nav-item"><a class="nav-link" href="#">Courses</a></li>
<li class="nav-item"><a class="nav-link" href="/aboutus">About Us</a></li>

<li class="nav-item"><a class="nav-link" href="/contactus">Conact Us</a></li>
@if (Session('sid')==null)
<li class="nav-item"><a class="nav-link" href="/selectlogin">Sign In</a></li>
<li class="nav-item"><a class="nav-link" href="/selectregister">Register</a></li>
<form action="/tutorsprofile" method="GET">



<input type="search" style="width: 160px;height:45px;padding:5px;margin-top:10px;border:2px solid #36a3f7 ;border-radius:20px" name="search" class="" value=""placeholder="Search">
<input type="submit" Value="Search" style="background: #36a3f7;color:white;border-radius:20px;padding:7px;margin-top:10px;border:1px solid #36a3f7;
width:80px">
</form>
@else
<li class="nav-item"><a class="nav-link" href="/studentdashboard">Dashboard</a></li>
<li class="nav-item"><a class="nav-link" href="/studentlogout">Logout</a></li>
<form action="/tutorsprofile" method="GET">



<input type="search" style="width: 140px;height:45px;padding:5px;margin-top:10px;border:2px solid #36a3f7 ;border-radius:20px" name="search" class="" value=""placeholder="Search">
<input type="submit" Value="Search" style="background: #36a3f7;color:white;border-radius:20px;padding:7px;margin-top:10px;border:1px solid #36a3f7;
width:80px">
</form>




@endif


</ul>

</div>
</div>
</div>
</nav>






@yield('content')









<footer class="ftco-footer">
<div class="container-xl">
<div class="row mb-5 pb-5 justify-content-between">
<div class="col-md-6 col-lg">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2 logo d-flex">
<a class="navbar-brand align-items-center" href="{{ asset('index-2.html">
<span class="flaticon flaticon-law"></span>
<span class="">Tutuor Finder<small>Your Online Tution</small></span>
</a>
</h2>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
<ul class="ftco-footer-social list-unstyled mt-2">
<li><a href="{{ asset('#"><span class="fa fa-twitter"></span></a></li>
<li><a href="{{ asset('#"><span class="fa fa-facebook"></span></a></li>
<li><a href="{{ asset('#"><span class="fa fa-instagram"></span></a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg-4">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Recent Posts</h2>
<div class="block-21 mb-4 d-flex">
<a class="img mr-4 rounded" style="background-image: url(images/image_1.jpg);"></a>
<div class="text">
<h3 class="heading"><a href="{{ asset('#">Main practice areas of the firm include admiralty</a></h3>
<div class="meta">
<div><a href="{{ asset('#"><span class="fa fa-calendar"></span> Oct. 18, 2020</a></div>
<div><a href="{{ asset('#"><span class="fa fa-user"></span> Admin</a></div>
<div><a href="{{ asset('#"><span class="fa fa-comment"></span> 19</a></div>
</div>
</div>
</div>
<div class="block-21 mb-4 d-flex">
<a class="img mr-4 rounded" style="background-image: url(images/image_2.jpg);"></a>
<div class="text">
<h3 class="heading"><a href="{{ asset('#">Main practice areas of the firm include admiralty</a></h3>
<div class="meta">
<div><a href="{{ asset('#"><span class="fa fa-calendar"></span> Oct. 18, 2020</a></div>
<div><a href="{{ asset('#"><span class="fa fa-user"></span> Admin</a></div>
<div><a href="{{ asset('#"><span class="fa fa-comment"></span> 19</a></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-2">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Explore</h2>
<ul class="list-unstyled">
<li><a href="{{ asset('#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
<li><a href="{{ asset('#"><span class="fa fa-chevron-right mr-2"></span>Practice Areas</a></li>
<li><a href="{{ asset('#"><span class="fa fa-chevron-right mr-2"></span>Case Studies</a></li>
<li><a href="{{ asset('#"><span class="fa fa-chevron-right mr-2"></span>Attorneys</a></li>
<li><a href="{{ asset('#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
</ul>
</div>
</div>
<div class="col-md-6 col-lg">
<div class="ftco-footer-widget mb-4">
<h2 class="ftco-heading-2">Have a Questions?</h2>
<div class="block-23 mb-3">
<ul>
<li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
<li><a href="{{ asset('#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
<li><a href="{{ asset('#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text"><span class="__cf_email__" data-cfemail="7d14131b123d0412080f1912101c1413531e1210">[email&#160;protected]</span></span></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid px-0 py-5 bg-black">
<div class="container-xl">
<div class="row">
<div class="col-md-12 text-center">
<p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved |<i class="fa fa-heart color-danger" aria-hidden="true"></i> <a href="{{ asset('#" target="_blank" rel="nofollow noopener" style="color: black;">All Rights Reserved</a></p>
</div>
</div>
</div>
</div>
</footer>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/tiny-slider.js"></script>
<script src="js/aos.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.g_s_iUn7bC.js"></script><script>eval(mod_pagespeed_KNn$AevLtB);</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script>eval(mod_pagespeed_9v35$gAaiy);</script>
<script>eval(mod_pagespeed_hCjKxCcDqv);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
							window.dataLayer = window.dataLayer || [];
							function gtag(){dataLayer.push(arguments);}
							gtag('js', new Date());

							gtag('config', 'UA-23581568-13');
						</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"724f2b6b8f00b788","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>




