@extends('layout.teacherdashboard')


@section('teachercontent')

<style>
    table,tr,td{
        border: 1px solid #36a3f7;
         
    }
</style>

<table class="table  ">
    <tr>
        <td>Your Name</td>
        <td>Your Email</td>
    </tr>
    <tr>
        <td>{{Session::get('tname')}}</td>
        <td>{{Session::get('temail')}}</td>
    </tr>
</table>
@endsection