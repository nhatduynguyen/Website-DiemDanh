@extends('layouts.desktop')
@include('client.blocks.navbar-index')

@section('content')
    @include('client.blocks.navbar1')
    @if (Auth::user()->level==0)
        <!-- MAIN -->
        <div class="col">
            <div class="content_tkb">
                <div class="text_tkb " style="color:#0077ff">
                    <h1> Danh sách phòng room</h1>
                </div>
                <p><a class="btn btn-success fas fa-user-plus" style="font-size:18px" href="{{ url('/room/createroom') }}"> Thêm mới</a></p>
                <div class="DataList choose_room">
                    <table id="example" class="table table-responsive-sm table-striped table-bordered " style="margin-top:20px">
                        <thead class="thead-dark">
                            <tr>
                                <th>STT</th>
                                <th>Tòa nhà</th>
                                <th>Tên phòng</th>
                                <th>Mã cam </th>
                                <th>Edit </th>
                                <!-- <th>Delete </th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php //Khởi tạo vòng lập foreach lấy giá vào bảng "room" trong database
                            ?>
                            @foreach($listroom as $key => $room)
                            <tr>
                                <?php //Điền số thứ tự
                                ?>
                                <td>{{ $key+1 }}</td>
                                <?php //Lấy tòa nhà
                                ?>
                                <td>{{ $room->toa_nha }}</td>
                                <?php //Lấy tên phòng
                                ?>
                                <td>{{ $room->ten_room }}</td>
                                <?php //Lấy id_cam
                                ?>
                                <td>{{ $room->ma_cam}}</td>
                                <?php //Kết thúc vòng lập foreach
                                ?>
                                <td><a class="fas fa-edit " href="room/{{ $room->id_room }}/edit"></a></td>
                                <?php //Tạo nút xóa học sinh?>
						    <!-- <td><a class="fas fa-trash-alt" style="align-items:center" href="room/{{ $room->id_room }}/delete"></a></td> -->
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
                    <h1> Danh sách phòng room</h1>
                </div>
                <p><a class="btn btn-success fas fa-user-plus" style="font-size:18px" href="{{ url('/room/createroom') }}"> Thêm mới</a></p>
                <div class="DataList choose_room">
                    <table id="example" class="table table-responsive-sm table-striped table-bordered " style="margin-top:20px">
                        <thead class="thead-dark">
                            <tr>
                                <th>STT</th>
                                <th>Tòa nhà</th>
                                <th>Tên phòng</th>
                                <th>Mã cam </th>
                                <th>Edit </th>
                                <!-- <th>Delete </th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php //Khởi tạo vòng lập foreach lấy giá vào bảng "room" trong database
                            ?>
                            @foreach($listroom as $key => $room)
                            <tr>
                                <?php //Điền số thứ tự
                                ?>
                                <td>{{ $key+1 }}</td>
                                <?php //Lấy tòa nhà
                                ?>
                                <td>{{ $room->toa_nha }}</td>
                                <?php //Lấy tên phòng
                                ?>
                                <td>{{ $room->ten_room }}</td>
                                <?php //Lấy id_cam
                                ?>
                                <td>{{ $room->ma_cam}}</td>
                                <?php //Kết thúc vòng lập foreach
                                ?>
                                <td><a class="fas fa-edit " href="room/{{ $room->id_room }}/edit"></a></td>
                                <?php //Tạo nút xóa học sinh?>
						    <!-- <td><a class="fas fa-trash-alt" style="align-items:center" href="room/{{ $room->id_room }}/delete"></a></td> -->
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
            "aLengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "Tất cả"]
            ],
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
                "sInfoEmpty": "Không tìm thấy",
                "sInfoFiltered": " (trong tổng số _MAX_ dòng)"
            }
        });
    });
</script>
@endsection