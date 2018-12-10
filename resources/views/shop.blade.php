@extends('master')

@section('content')

    <div class="container">

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

<style type="text/css">
    

.slider {
  margin: 0 auto;
  max-width: 940px;
}

.slide_viewer {
  height: 340px;
  overflow: hidden;
  position: relative;
}

.slide_group {
  height: 100%;
  position: relative;
  width: 100%;
}

.slide {
  display: none;
  height: 100%;
  position: absolute;
  width: 100%;
}

.slide:first-child {
  display: block;
}

.slide:nth-of-type(1) {
  background: #39983b;
}

.slide:nth-of-type(2) {
  background: #39983b;
}

.slide:nth-of-type(3) {
  background: #39983b;
}

.slide:nth-of-type(4) {
  background: #39983b;
}

.slide_buttons {
  left: 0;
  position: absolute;
  right: 0;
  text-align: center;
}

a.slide_btn {
  color: #474544;
  font-size: 42px;
  margin: 0 0.175em;
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -ms-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.slide_btn.active, .slide_btn:hover {
  color: #428CC6;
  cursor: pointer;
}

.directional_nav {
  height: 340px;
  margin: 0 auto;
  max-width: 940px;
  position: relative;
  top: -340px;
}

.previous_btn {
  bottom: 0;
  left: 100px;
  margin: auto;
  position: absolute;
  top: 0;
}

.next_btn {
  bottom: 0;
  margin: auto;
  position: absolute;
  right: 100px;
  top: 0;
}

.previous_btn, .next_btn {
  cursor: pointer;
  height: 65px;
  opacity: 0.5;
  -webkit-transition: opacity 0.4s ease-in-out;
  -moz-transition: opacity 0.4s ease-in-out;
  -ms-transition: opacity 0.4s ease-in-out;
  -o-transition: opacity 0.4s ease-in-out;
  transition: opacity 0.4s ease-in-out;
  width: 65px;
}

.previous_btn:hover, .next_btn:hover {
  opacity: 1;
}

@media only screen and (max-width: 767px) {
  .previous_btn {
    left: 50px;
  }
  .next_btn {
    right: 50px;
  }
}
</style>

        <div class="slider">
         <div class="slide_viewer">
            <div class="slide_group">
             <div class="slide">
                <div class="text-center">
                    <div style="padding-top: 100px;color: white;">
                        <h1><b>FAREL16</b></h1>    
                        <hr>
                        <p>Merayakan Ulang Tahun Si Salah Satu Admin<br>Jadi kami memberika diskon <br><h1><b>$50.00</b></h1></p>
                    </div>
                </div>
             </div>
             <div class="slide">
            <div class="text-center">
                    <div style="padding-top: 100px;color: white;">
                        <h1><b>BOKE<b></h1>    
                        <hr>
                        <p>Karena kita sedang berada di akhir bulan<br>Kami kasihan kepada kalian sebesar<br><h1><b>$200.00</b></h1></p>
                    </div>
                </div>
             </div>
             <div class="slide">
            <div class="text-center">
                    <div style="padding-top: 100px;color: white;">
                        <h1><b>NWFLHD<b></h1>    
                        <hr>
                        <p>Kalian Mendapatkan Diskon sebesar<br><h1><b>$99.90</b></h1></p>
                    </div>
                </div>
              </div>
             <div class="slide">
            <div class="text-center">
                    <div style="padding-top: 100px;color: white;">
                        <h1><b>COBACOBA<b></h1>    
                        <hr>
                        <p>Coba Ae Dulu kayaknya ada diskon<br><h1><b>RAHASIA</b></h1></p>
                    </div>
                </div>
              </div>
          </div>
        </div>
        </div><!-- End // .slider -->

<div class="slide_buttons">
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">
    $('.slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.slide');
  var bulletArray = [];
  var currentIndex = 0;
  var timeout;
  
  function move(newIndex) {
    var animateLeft, slideLeft;
    
    advance();
    
    if ($group.is(':animated') || currentIndex === newIndex) {
      return;
    }
    
    bulletArray[currentIndex].removeClass('active');
    bulletArray[newIndex].addClass('active');
    
    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }
    
    $slides.eq(newIndex).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function() {
      $slides.eq(currentIndex).css({
        display: 'none'
      });
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }
  
  function advance() {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    }, 4000);
  }
  
  $('.next_btn').on('click', function() {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });
  
  $('.previous_btn').on('click', function() {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move(3);
    }
  });
  
  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');
    
    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });
  
  advance();
});
</script>


        @foreach ($products->chunk(4) as $items)
            <div class="row" style="margin-top: 50px;">
                @foreach ($items as $product)
                    <div class="col-md-3 img-shadow-1">
                        <div class="thumbnail">
                            <div class="caption text-center">
                                <a href="{{ url('shop', [$product->slug]) }}"><img src="{{ asset('img/' . $product->image) }}" alt="product" class="img-responsive"></a>
                                <a href="{{ url('shop', [$product->slug]) }}"><h3>{{ $product->name }}</h3>
                                <p>${{ $product->price }}</p>
                                </a>
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->
                @endforeach
            </div> <!-- end row -->
            <br>
        @endforeach

    </div> <!-- end container -->

@endsection