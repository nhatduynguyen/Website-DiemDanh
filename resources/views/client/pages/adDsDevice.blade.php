@extends('layouts.desktop')
@include('client.blocks.navbar-index')

@section('content')
    @include('client.blocks.navbar1')
 @if (Auth::user()->level==0)
        <!-- MAIN -->
        <div class="col">
            <div class="content_tkb">
                <div class="text_tkb " style="color:#0077ff">
                    <h1> Danh sách Device</h1>
                </div>
                <p><a class="btn btn-success fas fa-user-plus" style="font-size:18px" href="{{ url('/device/createdevice') }}"> Thêm mới</a></p>
                <div class="DataList choose_room">
		            <table id="example" class="table table-responsive-sm table-striped table-bordered " style="margin-top:20px" > 
				        <thead class="thead-dark" >
					        <tr>
                                <th>STT </th>
                                <th>Mã cam </th>
                                <th>Trạng thái</th>
                                <th>Tên phòng</th>
						        <th>Tòa nhà</th>
                                <th>Ngày lắp đặt</th>
                                <th>Ngày bảo trì</th>
                                <th>Edit</th>
					        </tr>
				        </thead>
				        <tbody>
				            <?php ?>
				            @foreach($listdevice as $key => $device)
				            <tr>
                            <?php //Lấy id_cam?>
						    <td>{{$device->id}}</td>
						    <?php //Lấy mã cam?>
						    <td>{{$device->ma_cam }}</td>
                            <?php //Lấy trạng thái?>
                            <td>{{$device->action }}</td>
                            <?php //Lấy phòng học?>
						    <td>{{$device->name_room }}</td>
                            <?php //Lấy tòa nhà?>
						    <td>{{$device->toanha }}</td>
                            <?php //Lấy ngày lắp đặt?>
						    <td>{{$device->date_setup }}</td>
                            <?php //Lấy ngày bảo trì?>
						    <td>{{$device->bao_tri }}</td>
				            <?php //Kết thúc vòng lập foreach?>
                            <td><a class="fas fa-edit " href="device/{{ $device->id }}/edit"></a></td>
                            <?php //Tạo nút xóa học sinh?>
				            @endforeach
				        </tbody>
			        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if (Auth::user()->level==2)
        <!-- MAIN -->
        <div class="col">
            <div class="content_tkb">
                <div class="text_tkb " style="color:#0077ff">
                    <h1> Danh sách Device</h1>
                </div>
                <p><a class="btn btn-success fas fa-user-plus" style="font-size:18px" href="{{ url('/device/createdevice') }}"> Thêm mới</a></p>
                <div class="DataList choose_room">
		            <table id="example" class="table table-responsive-sm table-striped table-bordered " style="margin-top:20px" > 
				        <thead class="thead-dark" >
					        <tr>
                                <th>STT </th>
                                <th>Mã cam </th>
                                <th>Trạng thái</th>
                                <th>Tên phòng</th>
						        <th>Tòa nhà</th>
                                <th>Ngày lắp đặt</th>
                                <th>Ngày bảo trì</th>
                                <th>Edit</th>
					        </tr>
				        </thead>
				        <tbody>
				            <?php ?>
				            @foreach($listdevice as $key => $device)
				            <tr>
                            <?php //Lấy id_cam?>
						    <td>{{$device->id}}</td>
						    <?php //Lấy mã cam?>
						    <td>{{$device->ma_cam }}</td>
                            <?php //Lấy trạng thái?>
                            <td>{{$device->action }}</td>
                            <?php //Lấy phòng học?>
						    <td>{{$device->name_room }}</td>
                            <?php //Lấy tòa nhà?>
						    <td>{{$device->toanha }}</td>
                            <?php //Lấy ngày lắp đặt?>
						    <td>{{$device->date_setup }}</td>
                            <?php //Lấy ngày bảo trì?>
						    <td>{{$device->bao_tri }}</td>
				            <?php //Kết thúc vòng lập foreach?>
                            <td><a class="fas fa-edit " href="device/{{ $device->id }}/edit"></a></td>
                            <?php //Tạo nút xóa học sinh?>
				            @endforeach
				        </tbody>
			        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection 

@section('js')
 <script>
		$(document).ready(function() {
			$("#example").DataTable({
				"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Tất cả"]],
				"iDisplayLength": 10,
				"oLanguage": {
					"sLengthMenu": "Hiển thị _MENU_ dòng mỗi trang",
					"oPaginate": {
						"sFirst": "<span class='glyphicon glyphicon-step-backward' aria-hidden='true'></span>",
						"sLast": "<span class='glyphicon glyphicon-step-forward' aria-hidden='true'></span>",
						"sNext": "<span class='glyphicon glyphicon-triangle-right' aria-hidden='true'></span>",
						"sPrevious": "<span class='glyphicon glyphicon-triangle-left' aria-hidden='true'></span>"
					},
					"sEmptyTable": "Không có dữ liệu",
					"sSearch": "Tìm kiếm:",
					"sZeroRecords": "Không có dữ liệu",
					"sInfo": "Hiển thị từ _START_ đến _END_ trong tổng số _TOTAL_ dòng được tìm thấy",
					"sInfoEmpty" : "Không tìm thấy",
					"sInfoFiltered": " (trong tổng số _MAX_ dòng)"
				}
			});
		});
	</script>
@endsection