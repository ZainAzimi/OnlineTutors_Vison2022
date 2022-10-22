@extends('layout.teacherdashboard')


@section('teachercontent')


<!-- @foreach($mystudents as $myteacher)

<p>{{$myteacher->user_name}}</p>
@endforeach -->
<section class="ftco-section">
<div class="container-xl">
<div class="row justify-content-center">
<div class="col-md-5 heading-section text-center mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
<h2>Your Students</h2>
</div>
</div>
<style>
    table,tr,td{
        border: 1px solid #36a3f7;
         
    }
</style>
<table class="table">
    <tr>
        <td>Student Id</td>
        <td>Student Name</td>
        <td>Student Email</td>
    </tr>

@foreach ($mystudents as $mystudent )
<tr>
    <td>{{$mystudent->user_id}}</td>
    <td>{{$mystudent->user_name}}</td>
    <td>{{$mystudent->user_email}}</td>

</tr>

@endforeach

</table>

</div>


</section>
@endsection