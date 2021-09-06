@extends('layouts.desktop')
@include('client.blocks.navbar-index')

@section('content')

    @include('client.blocks.navbar1')
    <!-- MAIN -->
    <div class="col">
            <div class="content_tkb" >
                <div class="text_tkb" style="color:#0077ff"><h1> Danh sách lịch học </h1></div>
                <div class="DataList choose_room">
		    <table id="example" class="table table-responsive-sm table-striped table-bordered " style="margin-top:20px"> 
				<thead class="thead-dark" >
                    <tr>
                        <th>STT</th>
                        <th>Mã lớp</th>
                        <th>Tên lớp</th>
                        <th>Ngày học</th>
                        <th>Bắt đầu</th>
                        <th>Kết thúc</th>
                        <th>Classify</th> 
                        <th>Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php ?>
                    @foreach($getsinhvienDiemdanh1 as $key => $schedule)
                    <tr>
                        <?php ?>
                        <td>{{ $key+1 }}</td>
                        <?php ?>
                        <td>{{ $schedule -> id_class}}</td>
                        <?php ?>
                        <td>{{ $schedule -> name_class}}</td>
                        <?php ?>
                        <td>{{ $schedule -> date}}</td>
                        <?php ?>
                        <td>{{ $schedule -> start}}</td>
                        <?php ?>
                        <td>{{ $schedule -> end}}</td>
                        <?php ?>
                        <td>{{ $schedule -> classify}}</td>
                        <?php ?>
                        <td><a class="fa fa-search" href="diemdanhlop/{{ $schedule-> id_class}}/show"></a></td>
                        <?php ?>
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