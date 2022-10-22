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
<form action="/createpayment" method="POST"  class=" container col-md-4 col-md-offset-4">
    <img src="{{asset('/images/logo/headlogo.png')}}" class="ml-2" alt="" >
    @csrf
    <input type="text" class="form-control p-2"  name="FirstName" value="{{Session::get('sname')}}" readonly><br>
    <input type="number" name="CardNumber"class="form-control" ><br>
    <input type="date" name="ExpirationDate"class="form-control" ><br>
    <input type="text" name="SecurityCode"class="form-control" ><br>
     <select name="priceplan" id="" class="form-control" ><br>
        <option >Choose Your lan</option>
        <option value="1">Basic Plan</option>
        <option value="2">Standard Plan</option>
        <option value="3">Premium Plan</option>
     </select><br>

    <input type="submit" value="Make Payment" class="btn btn2" style="width:100%">
</form>
</body>
</html>