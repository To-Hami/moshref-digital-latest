@extends('layouts.master')
@section('css')
    @toastr_css

@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')

@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <h3>اضافة البرامج :</h3>
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
                    <div class="details" style="overflow: hidden">
                        <div class="print">
                            <button class="btn btn-success btn-lg  btn-lg " type="reset" style="margin: 10px 0">
                                اضافة برنامج جديد :
                            </button>
                            <form method="post" action="{{ route('programs.store') }}"  enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('post')}}

                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label>اسم البرنامج : <span
                                                    class="text-danger"></span></label>
                                            <input type="text" name="name" class="form-control">
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <label for="title"> مسؤول التنفيذ :</label>
                                        <div class='input-group'>

                                            <input type="text" class=" form-control"
                                                   name="manager" />
                                        </div>
                                        @error('manager')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="title">تاريخ البرنامج :</label>
                                        <div class='input-group'>

                                            <input id="hijri_picker" type="text" class="hijri-date-input  form-control"
                                                   name="date" />
                                        </div>
                                        @error('date')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="title">  الحهة الداعمة :</label>
                                        <div class='input-group'>

                                            <input type="text" class=" form-control"
                                                   name="support" />
                                        </div>
                                        @error('support')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="title">  المستهدفون :</label>
                                        <div class='input-group'>

                                            <input type="text" class=" form-control"
                                                   name="targets" />
                                        </div>
                                        @error('targets')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="title">تفاصيل البرنامج :</label>
                                        <textarea class='form-control' rows="7" name="details"> </textarea>
                                        @error('details')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-success btn-lg  btn-lg " type="reset"
                                                style="margin: 10px 10px;position: relative;right: 20px;display: block">
                                            اضافة المرفقات :
                                        </button>

                                    </div>

                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="photos"><h5>أضف صور البرنامج :</h5></label>
                                            <div style="width: 500px;height: 50px;background-color: #f2f2f2;color: #0b0b0b;
                                        border: 2px solid #17a2b8;position: relative;z-index: 1;border-radius: 20px ">
                                        <span style="position:absolute;display: block;margin: 10px 20px 0 0 ">
                                            أضغط لرفع  الصور
                                            <i class="fa fa-image"></i>
                                        </span>
                                                <input style="width: 100%;height: 100%;opacity: 0"
                                                       type="file" name="images[]" multiple class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="photos"><h5>أضف رابط الفيديو الخاض بالبرنامج :</h5></label>
                                            <input type="url" name="video"  class="form-control">
                                        </div>
                                    </div>


                                </div>

                                <button style="margin-top: 100px"
                                        class="btn btn-success btn-lg nextBtn btn-lg pull-right"
                                        type="submit">{{trans('Students_trans.submit')}}
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
        @endsection
        @section('js')
            <script>

                $(function () {

                    initDefault();

                });

                function initDefault() {
                    $("#hijri_picker").hijriDatePicker({
                        hijri: true,
                        showSwitcher: false
                    });
                }

                $(document).on('click', '.print_ptn', function () {

                    $('.print').printThis();

                });
            </script>
            @toastr_js
            @toastr_render
@endsection
