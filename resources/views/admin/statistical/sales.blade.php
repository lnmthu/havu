@extends("admin.layout.index")
@section("content")
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thống kê
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->


                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Dữ liệu</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dashboard as $b)
                            <tr class="odd gradeX" align="center">
                                <td>
                                    <br>
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>


            </div>
            <!-- /.container-fluid -->
        </div>

@endsection

                <!-- /.row -->
