<!DOCTYPE html>
<html lang="en">
<head>
	<title>POSADA ECOLOGICA LA ABUELA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/asset/css/bootstrap.min.css')}}">

	

	<style type="text/css">
    #head-banner{
      background-image: url("{{URL::to('/images/Diversion.jpg')}}");
      background-position: center center;
      background-repeat:  no-repeat;
      background-attachment: fixed;
      background-size:  cover;  
      padding: 300px 100px;
    }
    .btn-default {
      color: #fff;
      background-color: transparent;
      border-color: #ccc;
  }
		.navbar{
      background: transparent;
    }
    .navbar-default .navbar-nav>li>a {
    color: #000;
    }
    #room{
      padding: 50px 30px;
    }
    
		#tours{
      background-image: url("{{URL::to('/images/Diversion.jpg')}}");
      background-position: center center;
      background-repeat:  no-repeat;
      background-attachment: fixed;
      background-size:  cover;  
			height: 600px;
			color: #fff;
		}	
		#contact{
      margin-top: 0px;
			height: 500px;
      background: #003333;
      background-position: center center;
      background-repeat:  no-repeat;
      background-attachment: fixed;
      background-size:  cover;  
      color: #fff;
      padding-top: 50px;
			 
		}
    #location{
      padding-top: 30px;
      
    }
    i{
      font-size: 48px;
      background: transparent;
      padding-top: 50px;
    }
		#footer{
			background-color: #eee;
			color: black;
			padding-top: 20px;
		}
    #social{
     margin-bottom: -50px;
    }
		.hovereffect {
width:100%;
height:100%;
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;
}

.hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0,0,0,0.5);
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:block;
position:relative;
-webkit-transition:all .4s linear;
transition:all .4s linear;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}
	</style>
 <script src="{{URL::to('/asset/jssor.slider-22.2.0.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
              {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Rows: 2,
                $Cols: 6,
                $SpacingX: 14,
                $SpacingY: 12,
                $Orientation: 2,
                $Align: 156
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 960);
                    refSize = Math.max(refSize, 300);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        .jssora05l.jssora05lds      (disabled)
        .jssora05r.jssora05rds      (disabled)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('img/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }
        .jssora05l.jssora05lds { background-position: -10px -40px; opacity: .3; pointer-events: none; }
        .jssora05r.jssora05rds { background-position: -70px -40px; opacity: .3; pointer-events: none; }
        /* jssor slider thumbnail navigator skin 01 css *//*.jssort01-99-66 .p            (normal).jssort01-99-66 .p:hover      (normal mouseover).jssort01-99-66 .p.pav        (active).jssort01-99-66 .p.pdn        (mousedown)*/.jssort01-99-66 .p {    position: absolute;    top: 0;    left: 0;    width: 99px;    height: 66px;}.jssort01-99-66 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort01-99-66 .w {    position: absolute;    top: 0px;    left: 0px;    width: 100%;    height: 100%;}.jssort01-99-66 .c {    position: absolute;    top: 0px;    left: 0px;    width: 95px;    height: 62px;    border: #000 2px solid;    box-sizing: content-box;    background: url('img/t01.png') -800px -800px no-repeat;    _background: none;}.jssort01-99-66 .pav .c {    top: 2px;    _top: 0px;    left: 2px;    _left: 0px;    width: 95px;    height: 62px;    border: #000 0px solid;    _border: #fff 2px solid;    background-position: 50% 50%;}.jssort01-99-66 .p:hover .c {    top: 0px;    left: 0px;    width: 97px;    height: 64px;    border: #fff 1px solid;    background-position: 50% 50%;}.jssort01-99-66 .p.pdn .c {    background-position: 50% 50%;    width: 95px;    height: 62px;    border: #000 2px solid;}* html .jssort01-99-66 .c, * html .jssort01-99-66 .pdn .c, * html .jssort01-99-66 .pav .c {    /* ie quirks mode adjust */    width /**/: 99px;    height /**/: 66px;}
    </style> 
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navs">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
      <img src="{{URL::to('/images/logo3.png')}}" height="50px">
		</div>

		<div class="collapse navbar-collapse" id="navs">
			<ul class="nav navbar-nav">
				<li><a href="#room">Habitaciones</a></li>
				<li><a href="#contact">Contactanos</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{route('login')}}">Admin</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="row" id="head-banner">
	<center>
    <a href="{{route('book')}}" class="btn btn-success btn-lg">RESERVA AHORA</a>
     <!--<a href="#" class="btn btn-default btn-lg">Tour Now</a>*/ -->
  </center>
 </div> 

<div class="container-fluid">
<div class="container" id="room">
	<h1 class="text-center">Nuestras Cabañas</h1>
	<div class="row">
	
  	<div class="col-sm-6 col-md-4">
	    <div class="thumbnail hovereffect">
	      <img src="{{URL::to('/images/Cabaña1.jpg')}}" alt="image here" width="100%">
	      <div class="caption">

	      	<div class="overlay">
           <h2>Cabañas</h2>
           <a class="info" href="{{route('suite_room')}}">Leer Más</a>
        </div>
	        
	        <p>
	        	LA POSADA ECOLOGICA LA ABUELA cuenta con esta cabaña construidas totalmente con madera de pino tratado con la comodidad para que usted pueda disfrutar su estadía.
	        </p>
	        
	      </div>
	    </div>
	 </div>

	 <div class="col-sm-6 col-md-4">
	    <div class="thumbnail hovereffect">
	      <img src="{{URL::to('/images/Cabaña2.jpg')}}" alt="image here" width="100%">
	      <div class="caption">

        <div class="overlay">
           <h2>Cabañas</h2>
           <a class="info" href="{{route('suite_room')}}">Leer Más</a>
        </div>
	        
	        <p>
	        LA POSADA ECOLOGICA LA ABUELA cuenta con esta cabaña construidas totalmente con madera de pino tratado con la comodidad para que usted pueda disfrutar su estadía.
	        </p>
	        
	      </div>
	    </div>
	 </div>

	 <div class="col-sm-6 col-md-4">
	    <div class="thumbnail hovereffect">
	      <img src="{{URL::to('/images/Cabaña3.jpg')}}" alt="image here" width="100%">
	      <div class="caption">

        <div class="overlay">
           <h2>Cabañas</h2>
           <a class="info" href="{{route('suite_room')}}">Leer Más</a>
        </div>
	       
	        <p>
          LA POSADA ECOLOGICA LA ABUELA cuenta con esta cabaña construidas totalmente con madera de pino tratado con la comodidad para que usted pueda disfrutar su estadía.
	        </p>
	        
	      </div>
	    </div>
	 </div>


	</div>
</div>

<div class="row" id="tours">
	<h1 class="text-center">TOUR</h1>
  <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/1.jpg" />
                <img data-u="thumb" src="img/thumb-1.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/2.jpg" />
                <img data-u="thumb" src="img/thumb-2.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/3.jpg" />
                <img data-u="thumb" src="img/thumb-3.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/4.jpg" />
                <img data-u="thumb" src="img/thumb-4.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/5.jpg" />
                <img data-u="thumb" src="img/thumb-5.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/6.jpg" />
                <img data-u="thumb" src="img/thumb-6.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/7.jpg" />
                <img data-u="thumb" src="img/thumb-7.jpg" />
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery with Vertical Thumbnail</a>
            <div>
                <img data-u="image" src="img/8.jpg" />
                <img data-u="thumb" src="img/thumb-8.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/9.jpg" />
                <img data-u="thumb" src="img/thumb-9.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/_10.jpg" />
                <img data-u="thumb" src="img/thumb-_10.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/_11.jpg" />
                <img data-u="thumb" src="img/thumb-_11.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/_12.jpg" />
                <img data-u="thumb" src="img/thumb-_12.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/_13.jpg" />
                <img data-u="thumb" src="img/thumb-_13.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/_14.jpg" />
                <img data-u="thumb" src="img/thumb-_14.jpg" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:0px;left:248px;width:40px;height:40px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
</div>



<div class="row" id="contact">
  <h1 class="text-center">CONTACTANOS</h1>
  <div class="col-md-4">
      <center>
        <i class="glyphicon glyphicon-envelope"></i>
        <p>Email: info@posadaecologicalaabuela.com.ni</p>
      </center>
    </div>
    <div class="col-md-4">
      <center>
        <i class="glyphicon glyphicon-home"></i>
        <p>Dirección: Laguna de Apoyo, del Triángulo 2 Kms al noreste, Masaya</p>
      </center>
    </div>
    <div class="col-md-4">
      <center>
        <i class="glyphicon glyphicon-phone"></i>
        <p>+505 2520 1634</p>
      </center>
    </div>
    <div class="text-center row" id="social">
      <a href="https://www.facebook.com/posadalaabuela/" target="_Blank"><img src="{{URL::to('images/f.png')}}" height="60px" width="60px"></a>
      <a href="https://www.youtube.com/watch?v=fE_JaH2VPfw" target="_Blank"><img src="{{URL::to('images/y.png')}}" height="60px" width="60px"></a>
      <!--<a href="#"><img src="{{URL::to('images/t.png')}}" height="60px" width="60px"></a>-->
    </div>
</div>

<div class="row">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.456811988544!2d-86.04616688592978!3d11.942841891536592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f740ed014938af3%3A0x3181a20dd257d920!2sHotel%20Posada%20Ecol%C3%B3gica%20la%20Abuela!5e0!3m2!1ses-419!2sni!4v1577592683055!5m2!1ses-419!2sni" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<div class="row" id="footer">
		<p class="text-center"> &copy; Posada Ecologica La Abuela 2020. Derechos Reservados</p>
</div>
</div>

</body>
<script type="text/javascript" src="{{URL::to('/asset/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::to('/asset/js/bootstrap.min.js')}}"></script>
<script type="text/javascript">jssor_1_slider_init();</script>

</html>