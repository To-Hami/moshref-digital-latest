@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    {{trans('main_trans.add_student')}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    {{trans('main_trans.add_student')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <h3> اضافة طالب جديد :</h3>
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

                    <form method="post" action="{{ route('mograrats.update' , $mograrat->id) }}" autocomplete="off"
                          enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <h6 style="font-family: 'Cairo', sans-serif;color: blue">{{trans('Students_trans.personal_information')}}</h6>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>{{trans('Students_trans.name')}} : <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" value="{{$mograrat->name}}">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>{{trans('Students_trans.Date_of_Birth')}} :</label>
                                    <input class="form-control hijri-picker" type="text"
                                           name="birth" data-date-format="yyyy-mm-dd" value="{{$mograrat->birth}}">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>سنة الدخول :</label>
                                    <input class="form-control" type="text"
                                           name="entry_year" value="{{$mograrat->entry_year}}" >
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> تاريخ الالتحاق :</label>
                                    <input class="form-control hijri-picker" type="text"
                                           name="date_of_com" data-date-format="yyyy-mm-dd" value="{{$mograrat->date_of_com}}">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>الجنسية :</label>
                                    <input class="form-control" type="text" name="nationality" value="{{$mograrat->nationality}}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="bg_id">التخصص : </label>
                                    <input class="form-control" type="text" name="specialty" value="{{$mograrat->specialty}}">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>رقم الهوية :</label>
                                    <input class="form-control" type="text" name="id_number" value="{{$mograrat->id_number}}">
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>الحالة :</label>
                                    <input class="form-control" type="text" name="status" value="{{$mograrat->status}}">
                                </div>
                            </div>
                        </div>


                        <button class="btn btn-success btn-lg nextBtn btn-lg pull-right d-block"
                                type="submit">{{trans('Students_trans.submit')}}</button>
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
        $(function () {

            initDefault();

        });

        function initDefault() {
            $(".hijri-picker").hijriDatePicker({
                hijri: true,
                showSwitcher: false
            });
        }
    </script>

@endsection
