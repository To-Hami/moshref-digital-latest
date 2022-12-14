@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('Students_trans.Student_Edit')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('Students_trans.Student_Edit')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <h3>تعديل معلومات الطالب :</h3>
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{route('Students.update','test')}}" method="post" autocomplete="off">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id" value="{{$Students->id}}">

                        <h6 style="font-family: 'Cairo', sans-serif;color: blue">{{trans('Students_trans.personal_information')}}</h6>
                        <div class="row">


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>{{trans('Students_trans.name_ar')}} : <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="name" value="{{$Students->name}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>{{trans('Students_trans.Date_of_Birth')}} :</label>
                                    <input class="form-control hijri-picker" value="{{$Students->Date_Birth}}"
                                           type="text" name="Date_Birth" data-date-format="yyyy-mm-dd">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>العنوان :</label>
                                    <input class="form-control" type="text" value="{{$Students->porn_address}}"
                                           name="porn_address">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="bg_id">الجنسية : </label>
                                    <input class="form-control" type="text" value="{{$Students->nationality}}"
                                           name="nationality">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>الهوية :</label>
                                    <input class="form-control" type="text" value="{{$Students->Id_Number}}"
                                           name="Id_Number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>تاريخ الهوية : </label>
                                    <input class="form-control hijri-picker" type="text"
                                           value="{{$Students->date_end_id}}" name="date_end_id"
                                           data-date-format="yyyy-mm-dd"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>اسم الوالد :</label>
                                    <input class="form-control" type="text" value="{{$Students->father}}" name="father">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> هاتف المنزل :</label>
                                    <input class="form-control" type="text" value="{{$Students->home_phone}}"
                                           name="home_phone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> هاتف العمل :</label>
                                    <input class="form-control" type="text" value="{{$Students->work_phone}}"
                                           name="work_phone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>اسم قريب الطالب :</label>
                                    <input class="form-control" type="text" value="{{$Students->neighsbor}}"
                                           name="neighsbor">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> عنوان قريب الطالب :</label>
                                    <input class="form-control" type="text" value="{{$Students->neighbor_address}}"
                                           name="neighbor_address">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> جوال الطالب :</label>
                                    <input class="form-control" type="text" value="{{$Students->student_phone}}"
                                           name="student_phone">
                                </div>
                            </div>
                        </div>


                        <h6 style="font-family: 'Cairo', sans-serif;color: blue">{{trans('Students_trans.Student_information')}}</h6>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Grade_id">{{trans('Students_trans.Grade')}} : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2 form-control" name="Grade_id"
                                            style="height: 50px">
                                        <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                        @foreach($Grades as $Grade)
                                            <option
                                                value="{{ $Grade->id }}" {{$Grade->id == $Students->Grade_id ? 'selected' : ""}}>{{ $Grade->Name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Classroom_id">{{trans('Students_trans.classrooms')}} :
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="custom-select mr-sm-2 form-control" name="Classroom_id"  style="height: 50px">
                                        @foreach($my_classes as $class)
                                            <option value="{{ $class->id }}" {{$class->id == $Students-> sub_classroom_id ? 'selected' : ''}}  >{{ $class->Name_Class }}</option>

                                        @endforeach


                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="academic_year">{{trans('Students_trans.academic_year')}} : <span
                                            class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2 form-control" name="academic_year"
                                            style="height: 50px">
                                        <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>

                                        @foreach($Years as $Year)
                                            <option value="{{ $Year->id}}">{{ $Year->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <button class="btn btn-success btn-lg nextBtn btn-lg pull-right"
                                type="submit">{{trans('Students_trans.submit')}}
                        </button>
                        <br>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
    <script>
        {{--$(document).ready(function () {--}}
        {{--    $('select[name="Grade_id"]').on('change', function () {--}}
        {{--        var Grade_id = $(this).val();--}}
        {{--        if (Grade_id) {--}}
        {{--            $.ajax({--}}
        {{--                url: "{{ URL::to('Get_classrooms') }}/" + Grade_id,--}}
        {{--                type: "GET",--}}
        {{--                dataType: "json",--}}
        {{--                success: function (data) {--}}
        {{--                    $('select[name="Classroom_id"]').empty();--}}
        {{--                    $.each(data, function (key, value) {--}}
        {{--                        $('select[name="Classroom_id"]').append('<option selected disabled >{{trans('Parent_trans.Choose')}}...</option>');--}}
        {{--                        $('select[name="Classroom_id"]').append('<option value="' + key + '">' + value + '</option>');--}}
        {{--                    });--}}

        {{--                },--}}
        {{--            });--}}
        {{--        } else {--}}
        {{--            console.log('AJAX load did not work');--}}
        {{--        }--}}
        {{--    });--}}
        {{--});--}}
    </script>


    <script>
        $(document).ready(function () {
            {{--$('select[name="Classroom_id"]').on('change', function () {--}}
            {{--    var Classroom_id = $(this).val();--}}
            {{--    if (Classroom_id) {--}}
            {{--        $.ajax({--}}
            {{--            url: "{{ URL::to('Get_Sections') }}/" + Classroom_id,--}}
            {{--            type: "GET",--}}
            {{--            dataType: "json",--}}
            {{--            success: function (data) {--}}
            {{--                $('select[name="section_id"]').empty();--}}
            {{--                $.each(data, function (key, value) {--}}
            {{--                    $('select[name="section_id"]').append('<option value="' + key + '">' + value + '</option>');--}}
            {{--                });--}}

            {{--            },--}}
            {{--        });--}}
            {{--    } else {--}}
            {{--        console.log('AJAX load did not work');--}}
            {{--    }--}}
            {{--});--}}
        });
    </script>
@endsection
