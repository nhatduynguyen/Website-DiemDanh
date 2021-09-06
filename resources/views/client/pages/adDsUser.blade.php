@extends('layouts.desktop')
@include('client.blocks.navbar-index')
@include('client.blocks.navbar1')   
@section('content')

   
        
    @if (Auth::user()->level==0)
        <!-- MAIN -->
        <div class="col">
            <div class="content_tkb">
                <div class="text_tkb " style="color:#0077ff">
                    <h1> Danh sách sinh viên</h1>
                </div>
                <p><a class="btn btn-success fas fa-user-plus" style="font-size:18px" href="{{ url('/sinhvien/create') }}"> Thêm mới</a></p>
                <div class="DataList choose_room">
                    <table id="example" class="table table-responsive-sm table-striped table-bordered " style="margin-top:20px">
                        <thead class="thead-dark">
                            <tr>
                                <th>STT</th>
                                <!-- <th>Picture</th> -->
                                <th>MSSV</th>
                                <th>Tên học sinh</th>
                                <th>Mail sinh viên</th>
                                <th>Số điện thoại (+84)</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php //Khởi tạo vòng lập foreach lấy giá vào bảng
                            ?>
                            @foreach($student as $key => $student)
                            <tr>
                                <?php //Điền số thứ tự
                                ?>
                                <td>{{ $key+1 }}</td>
                                <!-- <?php //Tạo nút upload image
                                ?>
                                 <td><a class="fas fa-edit " href="sinhvien/{{ $student->mssv }}/upload"></a></td> -->
                                <?php //Lấy tên học sinh
                                ?>
                                <td>{{ $student->mssv }}</td>
                                <?php //Lấy số điện thoại
                                ?>
                                <td>{{ $student->name_sv }}</td>
                                <?php //Lấy số điện thoại
                                ?>
                                <td>{{ $student->mail}}</td>
                                <?php //Tạo nút sửa học sinh
                                ?>
                                <td>{{ $student->sdt}}</td>
                                <?php //Tạo nút sửa học sinh
                                ?>
                                <td><a class="fas fa-edit " href="sinhvien/{{ $student->mssv }}/edit"></a></td>
                                <?php //Tạo nút xóa học sinh
                                ?>
                                <td><a class="fas fa-trash-alt" style="align-items:center" href="sinhvien/{{ $student->mssv }}/delete"></a></td>
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