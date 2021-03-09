@extends('backend.app')
<style>
    .loading-spin{
        position: absolute;
        z-index: 9999;
        left: 56%;
        top: 19%;
        display: none;
    }
    .loading-spin img{
        height: 100px;
        width: 100px;
    }
    .demo_img_wrap{
        height: 7.5rem;
        border: dashed 1.5px blue;
        background-image: repeating-linear-gradient(45deg, black, transparent 100px);
        width: 60% !important; cursor: pointer;
    }
    .demo_img_wrap input{
        opacity: 0;
        height: 7.5rem;
        cursor: pointer;
        padding: 0px;
    }
    .demo_img_wrap img{
        height: 7.5rem;
        width: 100% !important;
        cursor: pointer;
        margin-top: -121px;
    }

    textarea.form-control {
        height: 126px !important;
    }

</style>
@section('content')
    <div class="content-wrapper" style="min-height: 1589.56px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-3">
                        <div id="disableDiv" style="width: 70%;
                            padding: 5px;
                            background-color: white;
                            border: 1px solid #ddd;
                            box-shadow: 1px 1px #ddd;
                            border-radius: 5px;display: inline-flex;">
                            <button onclick="demoForm()" style="padding: 10px;" class="btn btn-primary">
                                <i style="margin-right: 5px;font-size: 25px;margin-left: 5px;" class="fa fa-plus"
                                style="margin-right: 5px;"></i>
                            </button>
                            <p style="margin-left: 5px;
                            font-weight: 700;
                            margin-bottom: 0px;">Add Demo
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="row">
                <div class="loading-spin" id="spin">
                    <img src="{{ asset('/loading.gif') }}" alt="">
                </div>
                <div id="demo_info" class="card card-primary col-md-12" style="
                        display: none;
                        position: relative;
                    ">
                    <div class="card-header" id="cardHeader" style="background-color: #007bff;
                    color: #fff;">
                        <h3 class="card-title" id="cardTitle-add">Add New Demo</h3>
                        <button type="button" onclick="closeForm()" class="close" aria-label="Close">
                            <span style="color: #fff" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="row" role="form" id="addDemo">
                        @csrf
                        <div class="form-group col-md-6">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Select Category</label>
                            <select class="form-control" name="category_id">
                                <option value="" selected="selected" hidden>Select Category</option>
                                @foreach ($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group col-md-6">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Title</label>
                            <input name="title" type="text" class="form-control"
                                placeholder="Enter demo title" />

                        </div>
                        <div class="form-group col-md-4">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Link</label>
                            <input name="link" type="text" class="form-control"
                                placeholder="Enter demo link" />

                        </div>
                        <div class="form-group col-md-4">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Username</label>
                            <input name="username" type="text" class="form-control"
                                placeholder="Enter demo username" />

                        </div>
                        <div class="form-group col-md-4">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Password</label>
                            <input name="password" type="text" class="form-control"
                                placeholder="Enter demo password" />

                        </div>
                        <div class="form-group col-md-8">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Description</label>
                            <textarea name="description" type="text" class="form-control"
                                placeholder="Enter demo description"></textarea>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="image" class="col-form-label">Banar Image</label>
                                <div class="demo_img_wrap">
                                    <input id="image" type="file" class="form-control" name="image">
                                    <img src="" id="image-img"/>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <button id="submit" style="width: 100%" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>

                <div id="updateDemo" class="card card-primary col-md-12" style="margin-left: 15px;
                        padding-top: 8px;
                        height:230px;
                        display: none;
                    ">
                    <div class="card-header" id="cardHeader" style="background-color: #28a745;
                    color: #fff;">
                        <h3 class="card-title" id="cardTitle-update">Update Demo</h3>
                        <button type="button" onclick="closeForm()" class="close" aria-label="Close">
                            <span style="color: #fff" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="row" role="form" id="edit_demo">
                        @csrf
                        <div class="form-group col-md-6">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Select Category</label>
                            <select class="form-control" name="category_id">
                                <option id="cat_val" value="" selected="selected" hidden></option>
                                @foreach ($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group col-md-6">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Title</label>
                            <input id="title" name="title" type="text" class="form-control"
                                placeholder="Enter demo title" />

                        </div>
                        <div class="form-group col-md-4">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Link</label>
                            <input id="link" name="link" type="text" class="form-control"
                                placeholder="Enter demo link" />

                        </div>
                        <div class="form-group col-md-4">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Username</label>
                            <input id="username" name="username" type="text" class="form-control"
                                placeholder="Enter demo username" />

                        </div>
                        <div class="form-group col-md-4">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Password</label>
                            <input id="password" name="password" type="text" class="form-control"
                                placeholder="Enter demo password" />

                        </div>
                        <div class="form-group col-md-8">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Description</label>
                            <textarea id="description" name="description" type="text" class="form-control"
                                placeholder="Enter demo description"></textarea>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="image" class="col-form-label">Banar Image</label>
                                <div class="demo_img_wrap">
                                    <input id="e_image" type="file" class="form-control" name="image">
                                    <img src="" id="edit_img"/>
                                </div>
                            </div>

                        </div>
                        <input type="hidden" id="demo_id" name="id">
                        <div class="col-md-12">
                            <button id="submit" style="width: 100%" class="btn btn-success">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card col-12" id="demo_table">
                    <div class="card-header">
                        <h3 class="card-title">All Demo is here</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" style="width: 166px;">
                                        Category Name
                                    </th>
                                    <th class="sorting" style="width: 204px;">
                                        Title
                                    </th>
                                    <th class="sorting" style="width: 204px;">
                                        Link
                                    </th>
                                    <th class="sorting" style="width: 204px;">
                                        Username
                                    </th>
                                    <th class="sorting" style="width: 204px;">
                                        Password
                                    </th>
                                    <th class="sorting" style="width: 204px;">
                                        Image
                                    </th>
                                    <th class="sorting" style="width: 99px;">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($demos as $demo)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $demo->get_category->title }}</td>
                                        <td class="sorting_1">{{ Str::limit($demo->title,15,'...') }}</td>
                                        <td class="sorting_1">{{ Str::limit($demo->link,15,'...') }}</td>
                                        <td class="sorting_1">{{ $demo->username }}</td>
                                        <td class="sorting_1">{{ $demo->password }}</td>
                                        <td class="sorting_1">
                                            <img width="50px" height="30px" src="{{asset('/images/'.$demo->image)}}" alt="">
                                        </td>
                                        <td>
                                            <button style="margin-right: 5px;" href="#"
                                                class="btn btn-primary btn-xs" onclick="editDemo({{ $demo }})">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </div>

@section('js')
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });

        function closeForm(){
            $("#updateDemo").hide();
            $("#demo_table").show();
            $("#demo_info").hide();
        }

        function editDemo(demo){
            $("#cat_val").val(demo.get_category.id);
            $("#cat_val").text(demo.get_category.title);
            $("#title").val(demo.title);
            $("#link").val(demo.link);
            $("#username").val(demo.username);
            $("#password").val(demo.password);
            $("#description").text(demo.description);
            document.getElementById("edit_img").src = "{{ asset('/images/') }}/" + demo.image;
            $("#updateDemo").show();
            $("#demo_table").hide();
            $("#demo_info").hide();
            $("#demo_id").val(demo.id);
        }

        function demoForm(){
            $("#demo_table").hide();
            $("#demo_info").show();
            $("#updateDemo").hide();
        }

        function imageUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-img').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function urlImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#edit_img').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function() {
            imageUrl(this);
        });

        $("#e_image").change(function() {
            urlImage(this);
        });

        $(document).ready(function () {
            $('#addDemo').validate({
                rules: {
                    category_id: {
                        required: true
                    },
                    title: {
                        required: true
                    },
                    link: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                    username: {
                        required: true
                    },
                    description: {
                        required: true
                    },
                    image: {
                        required: true
                    }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form){
                    $("#spin").show();
                    $("#demo_info").css({
                        'opacity':'.4'
                    });
                    $.ajax({
                        url: "{{route('demo.add')}}",
                        method: "POST",
                        data: new FormData(document.getElementById("addDemo")),
                        enctype: 'multipart/form-data',
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(res) {
                            $("#spin").hide();
                            window.location.reload();
                            Toast.fire({
                                icon: 'success',
                                title: 'Demo upload successfull.'
                            })
                        },
                        error: function() {
                            $("#spin").hide();
                            Swal.fire({
                                icon: 'error',
                                title: 'Field required'
                            })
                        }
                    })
                }
            });

        });

        $(document).ready(function () {
            $('#edit_demo').validate({
                rules: {
                    category_id: {
                        required: true
                    },
                    title: {
                        required: true
                    },
                    link: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                    username: {
                        required: true
                    },
                    description: {
                        required: true
                    }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form){
                    $("#spin").show();
                    $("#updateDemo").css({
                        'opacity':'.4'
                    });
                    $.ajax({
                        url: "{{route('demo.update')}}",
                        method: "POST",
                        data: new FormData(document.getElementById("edit_demo")),
                        enctype: 'multipart/form-data',
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(res) {
                            $("#spin").hide();
                            window.location.reload();
                            Toast.fire({
                                icon: 'success',
                                title: 'Demo update successfull.'
                            })
                        },
                        error: function() {
                            $("#spin").hide();
                            Swal.fire({
                                icon: 'error',
                                title: 'Field required'
                            })
                        }
                    })
                }
            });

        });

    </script>
@endsection
@endsection
