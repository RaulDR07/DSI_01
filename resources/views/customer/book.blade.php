@extends('template.default')

@section('header')

<link rel="stylesheet" href="{{URL::to('/calendar/assets/dateTimePicker.css')}}">
<script type="text/javascript" src="{{URL::to('/calendar/jquery.min.js')}}"></script>





<script>
	 var token = "{{Session::token()}}";
    var url = "{{route('checkdata')}}";  

  $(document).ready(function() {
  
    $('#calendar').fullCalendar({

      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,listYear'
      },

      displayEventTime: false, 

      googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',
    
     
      events: 'en.usa#holiday@group.v.calendar.google.com',
      
      eventClick: function(event) {
       
        window.open(event.url, 'gcalevent', 'width=700,height=600');
        return false;
      },
      
      loading: function(bool) {
        $('#loading').toggle(bool);
      }
      
    });

    

    
  });

</script>
<style>
body{
	background-image: url("{{URL::to('/images/booking.jpg')}}");
      background-position: center center;
      background-repeat:  no-repeat;
      background-attachment: fixed;
      background-size:  cover;
}

  #loading {
    display: none;
    position: absolute;
    top: 10px;
    right: 10px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }
  .well{
  	margin-top: 5%;
  	opacity: 0.9;
  }
  .navbar{
  	background-color: transparent;
  }
  .navbar-default .navbar-nav>li>a {
    color: #fff;
}


</style>
@endsection

@section('content')
<div class="container">
	
	
	
		<div class="row well" id="content">
			<form action="{{route('request')}}" method="POST">
	        <div class="col-md-2">
				
				<div class="form-group{{$errors->has('checkin') ? ' has-error' : ''}}" id="date">
					<label>Check-In</label>
					<input type="date" name="checkin" class="form-control" value="<?php echo $date = date('Y-m-d');?>" id="checkin">
				</div>
				<div id="info1" style="display: none">
					<div class="form-group">
						<label>Apellidos</label>
						<input type="text" name="lname" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Primer Nombre</label>
						<input type="text" name="fname" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Segundo Nombre</label>
						<input type="text" name="mname" class="form-control" required="">
					</div>
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group" id="date2">
					<label>Check-Out</label>
					<input type="date" name="checkout" class="form-control" required="" id="checkout">
				</div>
				<div id="info2" style="display: none;">
					<div class="form-group">
						<label>Fecha de Nacimiento</label>
						<input type="date" name="dob" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Celular</label>
						<input type="text" name="contact" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Genero</label>
						<select name="gender" required="">
							<option value="male">Masculino</option>
							<option value="female">Femenino</option>
						</select>
					</div>
				</div>
			</div>
				<div class="col-md-4">
					<div id="group1">
						<label>Comodidades</label>
						<div class="form-group">
							<label>Cabaña No</label>
							<select name="room" required="" id="room">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>

							<label>Tipo de cabaña</label>
							<select id="change_room" name="type" required="">
								<option value="3">1</option>
								<option value="2">2</option>
								<option value="1">3</option>
							</select>

							
						</div>
						
					</div>
					<div id="group_1" style="display: none">
						<div class="form-group">
							<label>Email:</label>
							<input type="email" name="email" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Dirección</label>
							<textarea name="address" class="form-control" required=""></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div id="bookBtn">
						
						<button class="btn btn-warning btn-lg btn-block" id="check_me" type="button">Mostrar Disponibilidad</button>
					</div>
					<div id="Btns" style="display: none;">
						<button class="btn btn-info btn-block btn-lg" id="verify" type="button">Revisar</button>
						<button class="btn btn-success btn-block btn-lg" type="submit">Enviar</button>
					</div>
				</div>
				{{csrf_field()}}
			</form>															
		</div>

		<div class="row well">
				<div class="col-md-4">
					<h3>Fecha de reservación</h3>
		        	<div id="glob-data" data-toggle="calendar"></div>
				</div>
				<div class="col-md-4" id="suite1">
					<div>
						<h3>Paquete</h3>
						<p>Precio : $ 60.00 por noche</p>
						<p>Incluye: </p>
						<ul>
							<li>Alojamiento durante la noche individual o doble </li>
							<li>Parqueo</li>
							<li>Wi-Fi</li>
						</ul>
						<p>Comodidades: </p>
						<ul>
							<li>Baño privado</li>
							<li>Televisión con cable</li>
							<li>Nevera</li>
							<li>Mini Bar</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4" id="suite2">
					<h3>Cabaña Tipo 1</h3>
					<img src="{{URL::to('/images/Cabaña1.jpg')}}" alt="image here" width="300px" height="235px">
					
				</div>

				<div class="col-md-4" id="deluxe1" style="display: none;">
				<div>
					<h3>Paquete</h3>
					<p>Precio : $ 50.00 por noche</p>
					<p>Incluye: </p>
					<ul>
						<li>Alojamiento durante la noche unicamente individual</li>
						<li>Parqueo</li>
						<li>Wi-Fi</li>
					</ul>
					<p>Comodidades: </p>
					<ul>
						<li>Baño privado</li>
						<li>Televisión con cable</li>
						<li>Nevera</li>
						<li>Mini Bar</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4" id="deluxe2" style="display: none;">
				<h3>Cabaña Tipo 2</h3>
				<img src="{{URL::to('/images/Cabaña2.jpg')}}" alt="image here" width="300px" height="235px">
				
			</div>

			<div class="col-md-4" id="standard1" style="display: none;">
				<div>
					<h3>Paquete</h3>
					<p>Precio : $ 40.00 por noche</p>
					<p>Incluye: </p>
					<ul>
						<li>Alojamiento durante la noche unicamente individual</li>
						<li>Parqueo</li>
					</ul>
					<p>Comodidades: </p>
					<ul>
						<li>Baño privado</li>
						<li>Televisión con cable</li>
						<li>Nevera</li>
					</ul>
				</div>
			</div>
			<div class="col-md-4" id="standard2" style="display: none;">
				<h3>Cabaña Tipo 3</h3>
				<img src="{{URL::to('/images/Cabaña3.jpg')}}" alt="image here" width="300px" height="235px">
				
			</div>
		</div>
	        

	        
	 </div>
	


@endsection

@section('scripts')

<script type="text/javascript" src="{{URL::to('/calendar/scripts/dateTimePicker.min.js')}}"></script> 
<script src="{{URL::to('/calendar/fullcalendar.min.js')}}"></script>
<script src="{{URL::to('/calendar/gcal.min.js')}}"></script>

    <script type="text/javascript">
   	
      $(document).ready(function(){
      
      $('#glob-data').calendar({
        unavailable: ['{{"2017-2-9"}}', '2017-02-10']
      });
      
      $("#change_room").change(function(){
      	var change = $("#change_room").val();
      	if(change == "2"){
      		$("#suite1").hide();
      		$("#standard1").hide();
	      	$("#deluxe1").fadeIn(2000);
	      	$("#suite2").hide();
	      	$("#standard2").hide();
	      	$("#deluxe2").fadeIn(2000);
	      }else if(change == "3"){
	      	$("#deluxe1").hide();
	      	$("#standard1").hide();
	      	$("#suite1").fadeIn(2000);
	      	$("#deluxe2").hide();
	      	$("#standard2").hide();
	      	$("#suite2").fadeIn(2000);
	      }else{
	      	$("#deluxe1").hide();
	      	$("#suite1").hide();
	      	$("#standard1").fadeIn(2000);
	      	$("#deluxe2").hide();
	      	$("#suite2").hide();
	      	$("#standard2").fadeIn(2000);
	      }
      });

     

      $("#verify").on('click', function(){
      	$("#date").show();
      	$("#date2").show();
      	$("#group1").show();
      });

      $("#check_me").on('click', function(){
      	var checkin = $("#checkin").val();
      	var checkout = $("#checkout").val();
      	var room = $("#room").val();
      	var type = $("#change_room").val();

      	if(checkin > checkout){
      		alert("¡Lo sentimod, es imposible para nosotros servirte en esa fecha!");
      		return false;
      	}
      	var d = new Date();
      	var date = d.getFullYear() + "-" +0+parseInt( d.getUTCMonth() + 1 )   + "-" + d.getDate();
      	if(checkin < date){
      		alert("Lo siento, elija la fecha actual o futura para reservar");
      		return false;
      	}
      	

      	$.ajax({
		      	url: url,
		      	type: "POST",
		      	data: {"checkin": checkin, "checkout": checkout, "room": room, "type": type, _token: token},
		      
		      	success: function(response, status, http){
		      		if(response){
		      			alert("not available");
		      		}else{
		      			$("#date").hide();
				      	$("#info1").fadeIn(2000);
				      	$("#date2").hide();
				      	$("#info2").fadeIn(2000);
				      	$("#group1").hide();
				      	$("#group_1").fadeIn(2000);
				      	$("#bookBtn").hide();
				      	$("#Btns").fadeIn(2000);
		      		}
		      	}
		      	});
      });
      
    });
    </script>
   <script type="text/javascript">
   
    </script>



@endsection