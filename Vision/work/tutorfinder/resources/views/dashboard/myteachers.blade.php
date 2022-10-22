@extends('layout.studentdashboard')


@section('studentdashboard')


<!-- @foreach($myteachers as $myteacher)

<p>{{$myteacher->user_name}}</p>
@endforeach -->
<section class="ftco-section">
<div class="container-xl">
<div class="row justify-content-center">
<div class="col-md-5 heading-section text-center mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
<h2>Your Teachers</h2>
</div>
</div>


@if($myteachers == null)
    <p>Nothing </p>

@else
    <div class="row p-2">
@foreach ($myteachers as $myteacher )
<div class="col-md-3 m-2">
<div class="practice-areas aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
 <div>   
<img src="storage/uploads/{{ $myteacher->tutor_pic_path}}" alt="" width="300px" height="300px">
</div>
<div class="text">
<h3>Name :{{$myteacher->tutor_name}}</h3>
<h3>Name :</h3>
<p style="color: white;">{{$myteacher->tutor_email}} </p>

</div>
</div>
</div>
@endforeach
@endif

</div>


</section>
@endsection