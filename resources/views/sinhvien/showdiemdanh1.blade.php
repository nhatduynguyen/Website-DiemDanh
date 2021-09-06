@extends('layouts.desktop')
	@section('title','Danh sách sinh viên điểm danh')
	@section('content')
	@include('client.blocks.navbar-index')

	@if (Auth::user()->level==0)

		

			<div class="container mt-1 mb-2">
			<div class="col">
			<div class="content_tkb">
				<div class="text_tkb" style="color:#0077ff"><h4>Thông tin điểm danh lớp học</h4></div>
				<div class="text_tkb" style="color:#0077ff"><h4>{{$id_class}}</h4></div>
				
			<p>
			<a class="btn btn-dark far fa-arrow-alt-circle-left" style="font-size:20px" href="{{ url('tkb') }}"> Về lịch học</a>
			</p>
			<?php //Hiển thị thông báo thành công?>
				@if ( Session::has('success') )
				<div class="alert alert-success alert-dismissible" role="alert">
					<strong>{{ Session::get('success') }}</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
					</button>
				</div>
				@endif

			<?php //Hiển thị thông báo lỗi?>
			@if ( Session::has('error') )
				<div class="alert alert-danger alert-dismissible" role="alert">
					<strong>{{ Session::get('error') }}</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
				</div>
			@endif
			
			<?php //Hiển thị form sửa học sinh?>
			<div class="content_tkb">
			<div class="text_addsv">
			<div class="wrapperLOGIN">
			<div>
				
			</div>

			<div class="col">
						<div class="content_tkb">
							<div class="text_tkb" style="color:#0077ff">
								<h1> Danh sách sinh viên điểm danh</h1>
							</div>
								<p><a class="btn btn-success fas fa-user-plus" style="font-size:18px" href="show/createstudent"> Thêm mới sinh viên vào lớp</a></p>
								<table id="example" class="table table-responsive-sm table-striped table-bordered " style="margin-top:20px"> 
									<thead class="thead-dark" >
										<tr>
											<th>STT</th>
											<th>MSSV</th>
											<th>Tên học sinh</th>
											<th>Số điện thoại</th>
											<th>Điểm danh</th>
											<th>Trạng thái điểm danh</th>

											<!-- <th>Delete</th> -->
										</tr>
									</thead>
									<tbody>
									@foreach($getsinhvienByTkbId as $key => $student)
										<tr>
										<td>{{$key+1 }}</td>
										<td>{{$student->mssv_student}}</td>
										<td>{{$student->name_sv}}</td>
										<td>{{$student->sdt}}</td>
										<td>
										
										@if(($student->status0)==0 && ($student->status3)==0 && ($student->status6)==0)
											<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
										@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0)
											<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
										@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0) 
											<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
										@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0) 
											<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
										@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0)
											<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
										@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0) 
											<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
										@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0) 
											<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
										@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0) 
											<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
										@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0)
											<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
										@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0)
											<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
										@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0)
											<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
										@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0)
											<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
										@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0)
											<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>

										<!-- Đã điểm danh -->

											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
			
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 )
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
												
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==0)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 )
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

										
											@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==0)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 )
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 )
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
												
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>


											@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1)
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
											@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

										<!-- Đi học trễ 45 phút đầu giờ -->
											@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1) 
												<i class="fas fa-check" style="color:green"> Đi học trễ 45 phút đầu giờ</i>

										<!-- Vắng giữa buổi học -->

												@else
													<i class="fas fa-check" style="color:back"> Vắng giữa buổi học</i>
												@endif
										</td>  
										<!-- Kết thúc điểm danh -->

										<!-- Trạng thái checkbox điểm danh -->
											<td>
											
													<div class="form-check form-check-inline">
														<input  type="checkbox" name="inlineCheckbox1" value="$status0" />
														<label class="form-check-label" for="inlineCheckbox1"></label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="$status1" />
														<label class="form-check-label" for="inlineCheckbox1"></label>
													</div> 
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="$status2" />
														<label class="form-check-label" for="inlineCheckbox1"></label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="$status3" />
														<label class="form-check-label" for="inlineCheckbox1"></label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="$status4" />
														<label class="form-check-label" for="inlineCheckbox1"></label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="$status5" />
														<label class="form-check-label" for="inlineCheckbox1"></label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="$status6" />
														<label class="form-check-label" for="inlineCheckbox1"></label>
													</div>
													<!-- <?php //Tạo nút xóa học sinh
													?>
													<td><a class="fas fa-trash-alt" style="align-items:center" href="show/{{ $student->mssv_student }}/delete"></a></td> -->
											
												
											</td>
										</tr>
										@endforeach
									</tbody>
									
								</table>
							</div>
						</div>
					</div>
				</div>
			<!-- //<h1> - Danh sách sinh viên điểm danh :</h1><h4>{{$id_class}} Vắng</h4></div> -->
			
			</div>
			</div>
			</div>
			</div>
		
@endif

@if (Auth::user()->level==1)

	<div class="container mt-1 mb-2">
	<div class="col">
		<div class="content_tkb">
			<div class="text_tkb" style="color:#0077ff"><h4>Thông tin điểm danh lớp học</h4></div>
			<div class="text_tkb" style="color:#0077ff"><h4>{{$id_class}}</h4></div>
	<p>
		<a class="btn btn-dark far fa-arrow-alt-circle-left" style="font-size:20px" href="{{ url('tkb') }}"> Về lịch học</a>
	</p>
	<?php //Hiển thị thông báo thành công?>
	@if ( Session::has('success') )
		<div class="alert alert-success alert-dismissible" role="alert">
			<strong>{{ Session::get('success') }}</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				<span class="sr-only">Close</span>
			</button>
		</div>
	@endif

	<?php //Hiển thị thông báo lỗi?>
	@if ( Session::has('error') )
		<div class="alert alert-danger alert-dismissible" role="alert">
			<strong>{{ Session::get('error') }}</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				<span class="sr-only">Close</span>
			</button>
		</div>
	@endif

	<?php //Hiển thị form sửa học sinh?>
	<div class="content_tkb">
	<div class="text_addsv">
	<div class="wrapperLOGIN">
	<div>
		
	</div>

	<div class="col">
				<div class="content_tkb">
					<div class="text_tkb" style="color:#0077ff">
						<h1> Danh sách sinh viên điểm danh</h1>
					</div>
			<!--  -->
						<table id="example" class="table table-responsive-sm table-striped table-bordered " style="margin-top:20px"> 
							<thead class="thead-dark" >
								<tr>
									<th>STT</th>
									<th>MSSV</th>
									<th>Tên học sinh</th>
									<th>Số điện thoại</th>
									<th>Điểm danh</th>
									
								</tr>
							</thead>
							<tbody>
							@foreach($getsinhvienByTkbId as $key => $student)
								<tr>
								<td>{{$key+1 }}</td>
								<td>{{$student->mssv_student}}</td>
								<td>{{$student->name_sv}}</td>
								<td>{{$student->sdt}}</td>
								<td>
								<!-- Vắng/Chưa điểm danh -->

								@if(($student->status0)==0 && ($student->status3)==0 && ($student->status6)==0 && ($student->status9)==0 && ($student->status12)==0)
									<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
								@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==0  && ($student->status8)==0 && ($student->status9)==0 && ($student->status10)==0 && ($student->status11)==0 && ($student->status12)==0 && ($student->status13)==0 && ($student->status14)==0)
									<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
								@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==0  && ($student->status8)==0 && ($student->status9)==0 && ($student->status10)==0 && ($student->status11)==0 && ($student->status12)==0 && ($student->status13)==0)
									<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
								@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==0  && ($student->status8)==0 && ($student->status9)==0 && ($student->status10)==0 && ($student->status11)==0 && ($student->status12)==0)
									<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
								@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==0  && ($student->status8)==0 && ($student->status9)==0 && ($student->status10)==0 && ($student->status11)==0)
									<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
								@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==0  && ($student->status8)==0 && ($student->status9)==0 && ($student->status10)==0)
									<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
								@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==0  && ($student->status8)==0 && ($student->status9)==0)
									<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
								@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==0  && ($student->status8)==0)
									<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
								@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==0)
									<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
								@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0)
									<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
								@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0)
									<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
								@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0)
									<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
								@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0)
									<i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>

							<!-- Đã điểm danh -->

							@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
	
									@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
										
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

								
									@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
										
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>


									@elseif (($student->status0)==1 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==0 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==0 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==0 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==0 && ($student->status6)==0 && ($student->status7)==0  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==0 && ($student->status7)==0  && ($student->status8)==0  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==0  && ($student->status8)==0  && ($student->status9)==0 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==0  && ($student->status9)==0 && ($student->status10)==0 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>
									@elseif (($student->status0)==1 && ($student->status1)==1 && ($student->status2)==1 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==0 && ($student->status10)==0 && ($student->status11)==0)
										<i class="fas fa-check" style="color:green"> Đã điểm danh</i>

										
							<!-- Đi học trễ 45 phút đầu giờ -->
									@elseif (($student->status0)==0 && ($student->status1)==0 && ($student->status2)==0 && ($student->status3)==1 && ($student->status4)==1 && ($student->status5)==1 && ($student->status6)==1 && ($student->status7)==1  && ($student->status8)==1  && ($student->status9)==1 && ($student->status10)==1 && ($student->status11)==1)
										<i class="fas fa-check" style="color:green"> Đi học trễ 45 phút đầu giờ</i>

							<!-- Vắng giữa buổi học -->

										@else
											<i class="fas fa-check" style="color:back"> Vắng giữa buổi học</i>
										@endif
								</td>    
								</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>
	</div>
	</div>

@endif
@endsection