@extends('layout.teacherdashboard')


@section('teachercontent')
<style>
    table,tr,td{
        border: 1px solid #36a3f7;
         
    }
</style>

<table class="table table-center">
    <tr>
        <td>Subject</td>
        <td>Experience</td>
        <td>Short Intro</td>
        <td>Details Intro</td>
        <td>Basic Plan time</td>
        <td>Basic Plan Price</td>
        <td>Standard Plan Time</td>
        <td>Standard Plan Price</td>
        <td>Premium Plan Time</td>
        <td>Premium Plan Price</td>
        
    </tr>
    <tr>

@foreach($myprofile as $myprofile)


<td>{{$myprofile->subject}}</td>
<td>{{$myprofile->experience}}</td>
<td>{{$myprofile->shortintro}}</td>
<td>{{$myprofile->detailintro}}</td>
<td>{{$myprofile->basicplantime}}</td>
<td>{{$myprofile->basicplanprice}}</td>
<td>{{$myprofile->standardplantime}}</td>
<td>{{$myprofile->standardplanprice}}</td>
<td>{{$myprofile->premiumplantime}}</td>
<td>{{$myprofile->premiumplanprice}}</td>

       
</tr>
</table>
@endforeach


@endsection