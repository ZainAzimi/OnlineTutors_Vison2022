<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profileimage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{asset('images/logo/headlogo.png')}}" style="width: 50%">
    <title>Tutor Finder - Your Online Tution</title>
</head>
<body style="background:white">
    

    <h3 class="pt-3 pb-3" style="padding-left:50px;text-transform: uppercase;text-align:center">Create Your Profile</h3>

    <br>
    <h4 class="pt-3 pb-3" style="padding-left:50px;text-align:center;color:#36a3f7">Upload Your Profile Image</h4>
    <h5 class="" style="padding-left:50px;letter-spacing: px;text-align:center">Please select Your Best Picture Because It will Show as Your Profile Image to User</h5>

  <form action="/saveprofile" method="POST" enctype="multipart/form-data">
                   @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style=" position: relative">
                <div class="mainpfcontainer" style="border: 2px solid #36a3f7; ">
                    <img src="/images/holder.png" class="pfimg" style="border-radius:50%;width: 300px; height:300px;border: 2px solid #36a3f7;" id="img-holder" alt="">
                    <div class="imageChanger pt-5">

                        <div class="custom-file" style="width: 60px;margin-top: 50px">
                            <input type="file" name="image" class="custom-file-input" id="customFileLangHTML" >
                            <label class="custom-file-label" style="background-color: transparent;font-size: 3.5rem;" for="customFileLangHTML" data-browse="+"></label>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>





<!-- Form/////////////////////////////////////////////////// -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pt-3 pb-3">
              
                    {{-- <input type="file" required> --}}
                    {{-- <div class="custom-file" style="width: 400px">
                    <input type="file" name="image" class="custom-file-input" id="customFileLangHTML" required>
                    <label class="custom-file-label" for="customFileLangHTML" data-browse="Browse"></label>
                    </div> --}}
                    <br>
                    <!-- <input type="submit" class="btnNextFromProfileImage" value="NEXT" > -->

                    <div class="continer-fluid">
                        <div class="row">
                            <div class="col-md-2"></div>
                 <div class="container col-md-8 ">

                      <div class="row">

                    <input class="form-control col-md-4 m-2 ml-2" type="text" name="subject" placeholder="Your Subject" required >
                    <input class="form-control col-md-4 m-2" type="number" min="1" name="experience" placeholder="Your Experience"  required>
                    </div>
                    <!-- <input class="form-control col-md-3 mb-2" type="text" name="name" placeholder="Your Name" value="Zain" > -->
                    <textarea name="shortintro" class="form-control mb-1 " id="" cols="10" rows="2" placeholder="Give Your Short Intro For Your Profile" minlength="25" maxlength="27" style="width:70%;border: 2px solid #36a3f7;"required ></textarea>
                    
                    <textarea name="detailintro" class="form-control" id="" cols="10" rows="5" placeholder="Describe your top skills, strengths, and experiences. Provide more detail on the services you offer, things you're interested in working on, and what you like to do." max="200" style="width:70%;border: 2px solid #36a3f7;" required minlength="150" maxlength="200"></textarea>
                    <br>
                    <h2 style="display:flex;color:#36a3f7">Basic Plan</h2>

                    <select name="basicplanhours" id="" class="form-control col-md-8 mb-1" required style="border: 2px solid #36a3f7;">
                        <option value="30 Minutes">30 Minutes</option>
                        <option value="45 Minutes"> 45 Minutes</option>
                        <option value="1 Hour">1 Hour</option>
                        <option value="1.5 Hour">1.5 Hour</option>
                    </select>
                   <input type="number" name="basicplanprice" min="1" placeholder="Enter Your Price" class="form-control col-md-8"required>
                   <p style="display:flex">Enter Your Price of Your Given Time For Your Service</p>

                   <h2 style="display:flex;color:#36a3f7">Standard Plan</h2>

                    <select name="standardplanhours" required id="" class="form-control col-md-8 mb-1"style="border: 2px solid #36a3f7;">
                        <option value="30 Minutes">30 Minutes</option>
                        <option value="45 Minutes"> 45 Minutes</option>
                        <option value="1 Hour">1 Hour</option>
                        <option value="1.5 Hour">1.5 Hour</option>
                    </select>
                   <input type="number" required name="standardplanprice" min="1" placeholder="Enter Your Price" class="form-control col-md-8">
                   <p style="display:flex;">Enter Your Price of Your Given Time For Your Service</p>
                   <h3 style="display:flex;color:#36a3f7">Premium Plan</h3>

                    <select name="premiumplanhours" required id="" class="form-control col-md-8 mb-1"style="border: 2px solid #36a3f7;">
                        <option value="30 Minutes">30 Minutes</option>
                        <option value="45 Minutes"> 45 Minutes</option>
                        <option value="1 Hour">1 Hour</option>
                        <option value="1.5 Hour">1.5 Hour</option>
                    </select>
                   <input type="number" name="premiumplanprice" required min="1" placeholder="Enter Your Price" class="form-control col-md-8">
                   <p style="display:flex">Enter Your Price of Your Given Time For Your Service</p>
                  
                   <input type="hidden" value="{{Session::get('tid')}}" name="id">
                   <input type="hidden" value="{{Session::get('tname')}}" name="name">
                   <input type="hidden" value="{{Session::get('temail')}}" name="email">
                
                   <input type="submit" value="CREATE PROFILE" style="margin-left 0;border: 2px solid #36a3f7;width:60%;background:#36a3f7;padding: 10px;border-radius:20px;color:white"/>
           
                        
                    </div>
                    </div> 
                  
        </div>
    </div> 
</form>

    <!-- {{-- <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" class="btnNextFromProfileImage">NEXT</a>
            </div>
        </div>
    </div> --}}

    
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pt-3 pb-3">
                <a style="font-size: 1rem;font-weight: 600;letter-spacing: 2px" href="#">I'll do it later</a>
            </div>
        </div>
    </div>


    </form> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $("#customFileLangHTML").change(function(e){

                var source = URL.createObjectURL(e.target.files[0]);
                console.log(source);
                $("#img-holder").attr("src",source);
            });
        });
    </script>

<style>
    input[type="text"],[type="number"]{
        border:2px solid #36a3f7;
    }
    textarea,select{
        border:2px solid #36a3f7;
    }
</style>
</body>
</html>
