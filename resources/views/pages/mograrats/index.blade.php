@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('main_trans.list_students')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('main_trans.list_students')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="d-flex justify-content-between mx-2">
        <h3> صفوف  طلاب المقررات  :</h3>
        @if (auth()->user()->hasPermission('edit_grades'))

        <div>
            <button class="btn btn-success btn-lg mb-3" style="border-radius: 8px"><a href="{{route('mograrats.create')}}"> <i class="fa fa-plus"></i> اضافة طالب جديد</a> </button>
            <button class="btn btn-success btn-lg mb-3" style="border-radius: 8px"><a href="{{route('mograrats.createExcel')}}"> <i class="fa fa-file-pdf-o"></i> اضافة ملف اكسيل</a> </button>
            <button class="btn btn-danger btn-lg mb-3"><a href="{{route('mograrats.trash')}}">
                    <i class="fa fa-trash"></i>   حذف الملف</a>
            </button>
        </div>
            @endif

    </div>

    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    <div class="card-body">
                        @if (auth()->user()->hasPermission('edit_grades'))

                            {{--                                    <a href="{{route('Students.create')}}" class="btn btn-success btn-lg my-2"--}}
                            {{--                                       role="button"--}}
                            {{--                                       aria-pressed="true">{{trans('main_trans.add_student')}}--}}
                            {{--                                    </a>--}}
                        @endif

                        {{--                                    <form action="{{route('filter.classes')}}" method="POST" style="position: relative;left: 20px;float: left;margin-bottom: 10px">--}}
                        {{--                                        {{csrf_field()}}--}}
                        {{--                                        {{method_field('post')}}--}}
                        {{--                                        <select class="selectpicker" data-style="btn-info" name="classroom_id" required="" onchange="this.form.submit()">--}}
                        {{--                                            <option value="" selected="" disabled="">بحث باسم الصف</option>--}}
                        {{--                                            <option value="1">الصف الاول</option>--}}
                        {{--                                            <option value="2">الصف الثاني</option>--}}
                        {{--                                            <option value="3">الصف الثالث</option>--}}
                        {{--                                            <option value="4">الصف الرابع</option>--}}
                        {{--                                            <option value="5">الصف الخامس</option>--}}
                        {{--                                            <option value="6">الصف السادس</option>--}}
                        {{--                                        </select>--}}
                        {{--                                    </form>--}}


                        {{--                                <a href="{{route('Students.import')}}" class="btn btn-success btn-lg" role="button"--}}
                        {{--                                   aria-pressed="true">رفع ملف ايكسل</a>--}}
                        {{--                                <br><br>--}}


                        <div class="table-responsive">
                            <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                   data-page-length="50"
                                   style="text-align: center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{trans('Students_trans.name')}}</th>
                                    <th>الجنسية</th>
                                    <th>التخصص</th>
                                    <th>سنة الدخول</th>
                                    <th>رقم الهوية</th>
                                    <th>تاريخ الميلاد</th>
                                    <th>الحالة</th>
                                    <th>تاريخ الالتحاق</th>
                                    <th>اجراءات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($mograrats as $mograrat)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{$mograrat->name}}</td>
                                        <td>{{$mograrat->nationality}}</td>
                                        <td>{{$mograrat->specialty}}</td>
                                        <td>{{$mograrat->entry_year}}</td>
                                        <td>{{ $mograrat->id_number ?? '---'  }}</td>
                                        <td>{{$mograrat->birth ?? '---' }}</td>
                                        <td>{{$mograrat->status ?? '---' }}</td>
                                        <td>{{$mograrat->date_of_com ?? '---' }}</td>
                                        <td>

                                            <div class="dropdown show">

                                                @if (auth()->user()->hasPermission('edit_grades'))

                                                    <a class="btn btn-outline-success btn-sm"
                                                       href="{{route('mograrats.edit',$mograrat->id)}}"
                                                       role="button">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a class="btn btn-outline-danger btn-sm"
                                                       data-target="#Delete_Student{{ $mograrat->id }}"
                                                       data-toggle="modal"
                                                       href="##Delete_Student{{ $mograrat->id }}"><i
                                                            class="fa fa-trash"></i>
                                                    </a>
                                                @endif

                                            </div>

                                        </td>
                                    </tr>
                                    <!-- Deleted inFormation Student -->
                                    <div class="modal fade" id="Delete_Student{{$mograrat->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">{{trans('Students_trans.Deleted_Student')}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('mograrats.destroy',$mograrat->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <input type="hidden" name="id" value="{{$mograrat->id}}">

                                                        <h5 style="font-family: 'Cairo', sans-serif;">{{trans('Students_trans.Deleted_Student_tilte')}}</h5>
                                                        <input type="text" readonly value="{{$mograrat->name}}" class="form-control">

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Students_trans.Close')}}</button>
                                                            <button  class="btn btn-danger">{{trans('Students_trans.submit')}}</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

    <script>
        $(document).ready(function() {
            $('#datatable_filter input').attr("placeholder", "......search........");


            //datatable_filter
            // datatable_wrapper
            //dataTable

            $('#datatable_filter').dataTable( {
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search ......",
                    sSearchPlaceholder: "Search ......",
                    placeholder: "Search ......",
                }



            } );

        } );
    </script>
@endsection
