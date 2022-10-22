<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Tutor Finder - Your Online Tution</title>
<link rel = "shortcut icon" href="{{asset('/images/logo/headlogo.png')}}">
  <link rel="stylesheet" href="{{asset('./mycss.css')}}">
</head>
<body>


    <div class="container col-md-offset-1">
      <h1 style="text-align:center;text-transfor:uppercase;font-size: 70px;">{{$Profiles->user_name}}</h1>
        <div class="row">
            <div class="col-md-2"></div>
              <div class="col-md-8">
                <h1 style="font-weight: bolder">{{"$Profiles->name"}}</h1>
            <img src="../storage/uploads/{{$Profiles->image}}" alt="" style="width: 100%;height:400px;padding:10px">
            <div class="card-body">
              <div>
                <h2 style="text-transform:uppercase">Profile Detail</h2>
                    <table class="table table-center">
    
        <tr>
          <td>Name</td>
          <td>{{"$Profiles->user_name"}}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>{{"$Profiles->user_email"}}</td>
        </tr>
                  <h3>{{"$Profiles->shortintro"}}</h3>
                  <h3>{{"$Profiles->detailintro"}}</h3>
              </div>
             
                <h1><b>{{"$Profiles->Profile_Description"}}</b></h1>
        </div>

<br>
<br>
      </div>
      </div>
    
      <table class="table table-center">
        <tr>
          <th><h4>Plans</h4></th>
          <th><h4>Basic Plan</h4></th>
          <th><h4>Standard Plan</h4></th>
          <th><h4>Premium Plan</h4></th>
          
          
        </tr>
        <tr>
          <td>Time</td>
          <td>{{"$Profiles->basicplantime"}}</td>
          <td>{{"$Profiles->standardplantime"}}</td>
          <td>{{"$Profiles->premiumplantime"}}</td>
        </tr>
        <tr>
          <td>Payment</td>
          <td>{{"$Profiles->basicplanprice"}}$</td>
          <td>{{"$Profiles->standardplanprice"}}$</td>
          <td>{{"$Profiles->premiumplanprice"}}$</td>
        </tr>
        
      </table>
  

      <style>
        table,tr,td,th{
          border: 1px solid #36a3f7;
        }
        tr,td,th{
          padding:20px
        }
        th{
          text-align: center;
          font-weight:100
        }
        td{
          font-weight: bold
        }
      </style>

      <form action="/createroom" method="POST">
        @csrf

        <input type="hidden" name="user_id" value="{{Session::get('sid')}}">
        <input type="hidden" name="user_name" value="{{Session::get('sname')}}">
        <input type="hidden" name="user_email" value="{{Session::get('semail')}}">
        <input type="hidden" name="tutor_pic_path" value="{{$Profiles->image}}">
        <input type="hidden" name="tutor_name" value="{{$Profiles->user_name}}">
        <input type="hidden" name="tutor_id" value="{{$Profiles->id}}">
        <input type="hidden" name="tutor_email" value="{{$Profiles->user_email}}">
        <input type="hidden" name="plan" value="0">

<br>
<br>
    <input type="submit" value="Get a Tution " class="btn btn2" style="width:100%;text-transform:uppercase">

    </form>


    <br>
    <br>
    <br>

    
</body>
</html>


