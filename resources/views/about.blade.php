@extends('master')

@section('content')

    <div class="container">

        <div class="jumbotron">
            <b><h2 class="text-center">Larashop</h2></b><br>
            <p class="text-center">"LaraShop is one of online shop coded by laravel</p>
            <p class="text-center">LaraShop is one of features from laravel"</p>
        </div>
        <hr>
        <h1 class="title text-center">Our team</h1>
        <br><br>        
        <div class="row">
          <div class="col-lg-3" style="margin-left: 190px">
            <img class="rounded-circle" src="/img/mik.jpg" width="150" height="150"><br><br>
            <p style="margin-left: 50px"><b>Mikail</b></p>
          </div>
          <div class="col-lg-3">
            <img class="rounded-circle" src="/img/img1.jpg" width="150" height="150"><br><br>
            <p style="margin-left: 50px"><b>Nawfal</b></p>
          </div>
          <div class="col-lg-3">
            <img class="rounded-circle" src="/img/rel.jpg" width="150" height="150"><br><br>
            <p style="margin-left: 50px"><b>Farel</b></p>
          </div>
        </div>
        <br><br><br>

    </div> <!-- end container -->

@endsection
