@extends('layouts.desktop')
@include('client.blocks.navbar-index')
@include('client.blocks.navbar1')
@section('content')
    
    @if (Auth::user()->level==0)
    <!-- MAIN -->
    <div class="col">
    <div class="content_tkb">
        <div class="text_tkb " style="color:#0077ff">
            <h1> Danh sách lớp học </h1>
        </div>
        <p><a class="btn btn-success fas fa-user-plus" style="font-size:18px" href="{{ url('/class/createclass') }}"> Thêm mới</a></p>
        <div class="DataList choose_room">
            <table id="example" class="table table-responsive-sm table-striped table-bordered " style="margin-top:20px">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Mã lớp</th>
                        <th>Tên lớp</th>
                        <th>Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá vào bảng
                    ?>
                    @foreach($listclass as $key => $class)
                    <tr>
                        <?php ?>
                        <td>{{ $key+1 }}</td>
                        <?php //Lấy id lớp
                        ?>
                        <td>{{ $class->id_class }}</td>
                        <?php //Lấy tên lớp
                        ?>
                        <td>{{ $class->name_class}}</td>
                        <td><a class="fa fa-search" href="lop/{{ $class->id_class }}/show"></a></td>
                    </tr>
                    <?php //Kết thúc vòng lập foreach
                    ?>
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
@endif
@if (Auth::user()->level==1)
<!-- MAIN -->
<div class="col">
    <div class="content_tkb">
        <div class="text_tkb " style="color:#0077ff">
            <h1> Danh sách lớp học </h1>
        </div>
        <!-- <p><a class="btn btn-success fas fa-user-plus" style="font-size:18px" href="{{ url('/class/createclass') }}"> Thêm mới</a></p> -->
        <div class="DataList choose_room">
            <table id="example" class="table table-responsive-sm table-striped table-bordered " style="margin-top:20px">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Mã lớp</th>
                        <th>Tên lớp</th>
                        <th>Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá vào bảng
                    ?>
                    @foreach($listclass as $key => $class)
                    <tr>
                        <?php ?>
                        <td>{{ $key+1 }}</td>
                        <?php //Lấy id lớp
                        ?>
                        <td>{{ $class->id_class }}</td>
                        <?php //Lấy tên lớp
                        ?>
                        <td>{{ $class->name_class}}</td>
                        <td><a class="fa fa-search" href="lop/{{ $class->id_class }}/show"></a></td>
                    </tr>
                    <?php //Kết thúc vòng lập foreach
                    ?>
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
@endif
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "displayLength": 10,
            "language": {
                "lengthMenu": "Hiển thị _MENU_ dòng mỗi trang",
                "zeroRecords": "Không có gì ",
                "info": "Hiển thị từ _PAGE_ trang trong tổng _PAGES_ trang",
                "infoEmpty": "Không có giá trị",
                "infoFiltered": "(được lọc từ tổng số _MAX_ dòng)"
            }

        });
    });
</script>
@endsection