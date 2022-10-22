@extends('layout.website')


@section('content')

<section class="ftco-section">
<div class="container-xl">
<div class="row justify-content-center">
<div class="col-md-5 heading-section text-center mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
<span class="subheading">Our Teachers</span>
<h2 class="mb-4">Your Guiders</h2>
</div>
</div>

    <div class="row">
@foreach ($profiles as $profile )
<div class="col-md-3">
<div class="practice-areas aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
<div class="img" style="background-image:url(storage/uploads/{{ $profile->image}})"></div>
<div class="text">
<h3>Subject :{{$profile->subject}}</h3>
<h3>Name : {{$profile->user_name}}</h3>
<p style="color: white;">Starting With : <span style="color:black">{{$profile->basicplanprice}}$</span> </p>
<p style="color: white;">{{$profile->shortintro}} </p>
<a href="{{"profilepage/".$profile->id}}" style="color: white;">Get a Tution</a>
</div>
</div>
</div>
@endforeach


</div>


</section>

@endsection