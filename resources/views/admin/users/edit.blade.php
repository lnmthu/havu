@extends("admin.layout.index")
@section("content")
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $er)
                                    {{$er}}<br>
                                @endforeach
                            </div>
                        @endif
                        @if(session("thongbao"))
                            <div class="alert alert-success">
                                {{session("thongbao")}}<br>
                            </div>
                        @endif
                        <form action="users/edit/{{$user->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                             <fieldset>
                                <legend>Phần bắt buộc</legend>
                            <div class="form-group">
                                <label>Quyền</label>
                                <label class="radio-inline">
                                    <input name="quyen" value="0" @if($user->quyen==0){{"checked"}}@endif type="radio">Thường
                                </label>
                                <label class="radio-inline">
                                    <input @if($user->quyen==1){{"checked"}}@endif  name="quyen" value="1" type="radio">Admin
                                </label>
                            </div>
                             <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="name" placeholder="Nhập tên" value="{{$user->name}}" data-validation="required"  data-validation-error-msg="Làm ơn nhập tên" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input disabled="" class="form-control" name="email" placeholder="Nhập email" value="{{$user->email}}" data-validation="email" data-validation-error-msg="Làm ơn nhập E-mail hợp lệ" />
                            </div>

                            </fieldset>
                             <fieldset>
                                <legend><input type="checkbox" id="changePass" name="changePass"> Đổi mật khẩu</legend>

                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input disabled="" class="form-control password" type="password" placeholder="Nhập mật khẩu" name="pass_confirmation"  data-validation="length" data-validation-length="min8" data-validation-error-msg="Làm ơn nhập mật khẩu ít nhất 8 kí tự"  />
                            </div>

                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input disabled="" class="form-control password" type="password"  placeholder="Nhập lại mật khẩu" name="pass" data-validation="confirmation" data-validation-error-msg="Làm ơn nhập lại mật khẩu khớp với mật khẩu ban đầu"/>
                            </div>
                                </fieldset>
                             <fieldset>
                                <legend><input type="checkbox" name="changeOption" id="changeOption"> Phần tùy chọn</legend>
                            <div class="form-group">
                                <label>Số diện thoại</label>
                                <input disabled="" class="form-control option" name="phone_number" placeholder="Nhập số diện thoại" value="{{$user->phone_number}}" data-validation="number"  data-validation-error-msg="Làm ơn số điện thoại" />
                            </div>
                            <?php $district=null;$ward=null;?>
                     
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input disabled="" class="form-control option" name="address" placeholder="Nhập địa chỉ" value="{{$user->address}}" data-validation="required"  data-validation-error-msg="Làm ơn nhập địa chỉ"
                                 />
                            </div>
                            <div class="form-group">
                                <label>Ghi chú</label>
                                <textarea disabled="" name="note" class="form-control option" rows="3">{{$user->note}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <label class="radio-inline">
                                    <input @if($user->gender==1){{"checked"}}@endif  disabled="" id="option1" name="gender" value="1" checked="" type="radio">Nam
                                </label>
                                <label class="radio-inline">
                                    <input @if($user->gender==2){{"checked"}}@endif  disabled="" id="option2" name="gender" value="2" type="radio">Nữ
                                </label>
                                <label class="radio-inline">
                                    <input @if($user->gender==3){{"checked"}}@endif  disabled="" id="option3" name="gender" value="3" type="radio">Khác
                                </label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
@section("script")
<script type="text/javascript">
    $(document).ready(function(){
        $("#changeOption").change(function(){
            if($(this).is(":checked")){
                $(".option").removeAttr("disabled");
                $("#option1").removeAttr("disabled");
                $("#option2").removeAttr("disabled");
                $("#option3").removeAttr("disabled");
            }
            else{
                $(".option").attr("disabled","");
                $("#option1").attr("disabled","");
                $("#option2").attr("disabled","");
                $("#option3").attr("disabled","");
            }

        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#changePass").change(function(){
            if($(this).is(":checked"))
                $(".password").removeAttr("disabled");
            else
                $(".password").attr("disabled","");
        });
        $(".choose").change(function(){
             var action= $(this).attr("id");
             var id =$(this).val();
             var result="";
             var _token = $('input[name="_token"]').val();
             if(action=="city"){
                    result="district";
             }else{
                    result="ward";
             }
             $.ajax({
                    url:'{{url('choose')}}',
                    method:"POST",
                    data:{action:action,id:id,_token:_token},
                    success:function(data){
                         $("#"+result).html(data);
                    }

            });

        });
    });
</script>
@endsection
