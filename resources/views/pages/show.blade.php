@extends('layouts.desktop')

@section('content')
	<div class="row">
		<div class="col-md-6">
			<a href="{{ route('index') }}" class="btn -btn-block btn-info btn-md">Back</a>
		</div>
		<div class="col-md-12">
			<strong>id: </strong>
			{{ $data->id}}
		</div>
		
		<div class="col-md-12">
			<strong>code: </strong>
			{{ $data->code}}
		</div>

		<div class="col-md-12">
			<strong>Tiêu đề: </strong>
			{{ $data->title}}
		</div>
		
		<div class="col-md-12">
			<strong>Website: </strong>
			{{ $data->website }}
		</div>
		
		<div class="col-md-12">
			<strong>Mã: </strong>
			{{ $data->deal_id }}
		</div>
		
		<div class="col-md-12">
			<strong>Khuyến mãi: </strong>
			{{ $data->discount }}
		</div>
		
		<div class="col-md-12">
			<strong>Địa chỉ: </strong>
			{{ $data->store_address }}
		</div>

		<div class="col-md-12">
			<input type="hidden" id="glat" value="{{ $data->store_location_lat }}">
			<input type="hidden" id="glng" value="{{ $data->store_location_lng }}">
			<div id="mapdetail" style="width: 300px; height: 250px;"></div>
		</div>
		
		<div class="col-md-12">
			<strong>LAT: </strong>
			{{ $data->store_location_lat }}
		</div>
		
		<div class="col-md-12">
			<strong>LNG: </strong>
			{{ $data->store_location_lng }}
		</div>
		
		<div class="col-md-12">
			<strong>Ngày hết hạn: </strong>
			{{ $data->date_end }}
			{{ date('d/m/Y', '1542560400') }}
		</div>
		
		<div class="col-md-12">
			<strong>Link: </strong>
			<a href="{{ $data->promotion_url }}" target="_blank">{{ $data->promotion_url }}</a>
		</div>
		
		<div class="col-md-12">
			<strong>Hình ảnh: </strong>
			<img src="{{ $data->image_path }}" alt="">
		</div>
		
		<div class="col-md-12">
			<strong>Mô tả: </strong>
			@php
				echo $data->description;
			@endphp
		</div>
		
		<div class="col-md-12">
			<strong>Action: </strong>
			{{ $data->action }}
		</div>
		

	</div>
@endsection
@section('js')
	<script>
	    function initMap() {
	      	var glat= document.getElementById('glat').value;
	      	
	  		var glng= document.getElementById('glng').value;
	  		
	        var myLatLng = {lat: Number(glat), lng: Number(glng)};

	        // Create a map object and specify the DOM element for display.
	        var map = new google.maps.Map(document.getElementById('mapdetail'), {
	          center: myLatLng,
	          scrollwheel: false,
	          zoom: 16
	        });

	        // Create a marker and set its position.
	        var marker = new google.maps.Marker({
	          map: map,
	          position: myLatLng,
	          
	        });
	    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXPOR7Ya4Cj7KtbHui-RQT75uCM6fZXcY&callback=initMap&language=vi-VN&libraries=places"></script>
	
@endsection