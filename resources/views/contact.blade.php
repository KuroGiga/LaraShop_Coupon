@extends('master')

@section('content')

    <div class="container">

        <hr>
        <h1 class="title text-center">Contact US</h1>
        <br><br>        
        <div class="row">
          <div class="col-lg-2" style="margin-left: 130px">
            <form method="GET">
                <input type="text" name="email" placeholder="Email"><br><br>
                <input type="password" name="password" placeholder="Password"><br><br>
                <input type="text" name="name" placeholder="Post As"><br><br>
                <button type="submit" class="btn btn-success" width="200px">&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;</button>
                
          </div>
          <div class="col-lg-2">
                <textarea cols="50" rows="10" placeholder="Enter Your Message"></textarea>
            </form>    
          </div>
          <div class="col-lg-2" style="margin-left: 200px">
                <img src="/img/adress.png" width="30px" height="30px">&nbsp;&nbsp; Jonggol, Bogor<br><hr>
                <img src="/img/phone.png" width="30px" height="30px">&nbsp;&nbsp; +911/+110<br><hr>
                <img src="/img/email.png" width="30px" height="30px">&nbsp;&nbsp; test@test.com
          </div>
        </div>
        <hr>
        <br><br><br><br><br><br><br><br>

    </div> <!-- end container -->

@endsection
