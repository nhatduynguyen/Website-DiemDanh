@extends('layouts.desktop')
@include('client.blocks.navbar-index')

@section('content')
    @include('client.blocks.navbar1')
	

    <div class="container mt-1 mb-2">
            <!-- MAIN -->
       <div class="col">
            <div class="content_tkb">
                <div class="text_tkb " style="color:#0077ff">
                    <h1> Danh sách điểm danh </h1>
                </div>
                <div class="DataList choose_room">
		            <table id="example" class="table table-responsive-smtable-striped table-bordered " style="margin-top:20px"> 
				        <thead class="thead-dark" >
					        <tr>
						        <th>STT</th>
                                <th>Mã lớp</th>
                                <th>Bắt đầu</th>
                                <th>Kết thúc</th>
                                <th>MSSV</th>
                                <th>Tên sinh viên</th>
                                <th>Tình trạng</th>
					        </tr>
				        </thead>
				        <tbody>
				            <?php //Khởi tạo vòng lập foreach lấy giá vào bảng?>
				            @foreach($getsinhvienDiemdanh as $key => $studentattendance  )
				            <tr>
					    	<td>{{ $key+1 }}</td>
						    <td>{{ $studentattendance->id_class}}</td>
                            <td>{{ $schedule->start}}</td>
                            <td>{{ $schedule->end}}</td>
                            <td>{{ $student->mssv}}</td>
						    <td>{{ $student->name_sv}}</td>
                            <td>@if($studentattendance->status0 == 0)
                                    <i class="fa fa-close" style="color:red"> Vắng/Chưa điểm danh</i>
                                 @elseif ($studentattendance->status0 == 1)
                                    <i class="fas fa-check" style="color:green"> Đã điểm danh</i>
                                    @endif
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
@endsection
@section('js')
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "displayLength": 10,
        "language": {
            "lengthMenu": "Hiển thị _MENU_ dòng mỗi trang",
            "zeroRecords": "Không có gì ",
            "info": "Hiển thị từ _PAGE_ trang trong tổng _PAGES_ trang",
            "infoEmpty": "Không có giá trị",
            "infoFiltered": "(được lọc từ tổng số _MAX_ dòng)"
        }
        
    } );
} );
</script>
@endsection