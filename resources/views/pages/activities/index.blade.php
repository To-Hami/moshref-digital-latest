@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    النشاطات
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    النشاطات
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <h3>النشاطات :</h3>
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30 justify-content-between">
                        <a href="{{route('activities.create')}}" class="btn btn-success btn-lg float-left" role="button"
                           aria-pressed="true">اضافة صور جديدة </a>

                        <a href="{{route('activities.delete')}}" class="btn btn-danger btn-lg float-right" role="button"
                           aria-pressed="true"><i class=" fa fa-trash"></i>  حذف الصور </a><br><br>


                    </div>
                    <div class="col-md-12 row  program_images">
                        @foreach( $activities as $activity )
                            @if($activity->images)
                            <div class="col-md-4">
                                <a href="{{asset('Attachments/activities/'.$activity->images)}}">
                                    <img style="width: 400px;height: 400px"  class="img-fluid my-2 img-thumbnail"
                                         src="{{asset('Attachments/activities/'.$activity->images)}}">
                                </a>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>

        </div>


    </div>


    <!-- row closed -->
@endsection
@section('js')

@endsection
