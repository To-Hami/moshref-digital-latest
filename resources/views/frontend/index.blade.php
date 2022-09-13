@extends('layouts.frontend.master')
@section('content')

    <!-- Navbar Start -->
    <div class="row" style="background-color: #17A2B8;height: 40px;color: #f2f2f2">


        <div class="col text-white" style="float: right;text-align: right;margin: 7px 39px 3px 0;
           font-size: 20px; color: #f2f2f2 !important;">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();" style="color: #ffffff;">
                <i class="text-white"></i>تسجيل الخروج</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">  @csrf
            </form>

        </div>
        <div class="col contactus" style="float: left;margin: 7px 39px 8px 24px;
    font-size: 15px;">
            <a href="#" target="_blank" style="color: #f2f2f2">
                <i class="fa fa-twitter fa-2x"></i>
            </a>
            <a href="#" target="_top" style="color: #f2f2f2">
                <i class="fa fa-envelope-o fa-2x"></i>
            </a>
            <a href="#" target="_blank" style="color: #f2f2f2">

                <i class="fa fa-whatsapp fa-2x"></i>
            </a>

        </div>
    </div>

    <div class="container-fluid bg-light position-relative shadow">

        <nav
            class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
        >
            <a
                href=""
                class="navbar-brand font-weight-bold text-secondary"
                style="font-size: 50px"
            >
                <span class="text-primary">{{$detail->name}}</span>
            </a>
            <button
                type="button"
                class="navbar-toggler"
                data-toggle="collapse"
                data-target="#navbarCollapse"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse justify-content-between"
                id="navbarCollapse"
            >
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="{{route('frontend')}}" class="nav-item nav-link active">لوحة التحكم</a>
                    <a href="#about" class="nav-item nav-link">من نحن ؟</a>
                    <a href="{{route('slook')}}" target="_blank" class="nav-item nav-link">قواعد السلوك والمواظبة</a>
                    <a href="{{route('ershad')}}" target="_blank" class="nav-item nav-link">خطة التوجية والارشاد</a>
                    <a href="{{route('library')}}" class="nav-item nav-link"> المكتبة </a>
                </div>
                <a href="{{$detail->location}}" class="btn btn-primary px-4" target="_blank">موقعنا </a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid px-0 px-md-5 mb-5" style="height: 500px  ;
        background-image: url('{{asset('assets/images/slider.jpg')}}');
        background-position: center;
        background-size: contain;
        background-repeat:no-repeat;
        text-align: center;


        ">

    </div>
    <!-- Header End -->
    <!-- Facilities Start -->
    <div id="about" class=" container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">من نحن؟</h3>
            <div class=" text-white">
                <h5 style="margin: 20px 0px !important;text-align: center;"
                    class="m-0 font-weight-bold text-white text-center">نظام الارشاد المدرسي لادراة ومتابعة الطلاب
                    والبرامج التوعوية</h5>
                <p style="    width: 70%;
    text-align: center;
    position: relative;
    right: 14%;">نهدف إلى مساعدة الطالب, لكي يفهم شخصيته ويعرف قدراته, ويحل مشكلاته في إطار التعاليم الإسلامية,ليصل إلى
                    تحقيق التوافق النفسي والتربوي والمهني والاجتماعي وبالتالي يصل إلى تحقيق أهدافه في إطار الأهداف
                    العامة للتعليم في المملكة العربية السعودية. </p>
            </div>
        </div>
    </div>
    <!-- Facilities Start -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">

                <h1 class="mb-4">رؤيتنا </h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-1.jpg" alt=""/>
                        <div class="card-body text-center">
                            <p class="card-text">
                                نهدف إلى إعداد جيل واثق بقدراته متطلع للأفضل يواكب رؤية المملكة العربية السعودية 2030.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-2.jpg" alt=""/>
                        <div class="card-body text-center">
                            <p class="card-text">
                                أن يصبح الجيل قادر علي تحقيق أهدافه وصاحب شخصية و صحة نفسية قوية يتخذ قرارته بقدر
                                امكانياته وحكمته .
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-3.jpg" alt=""/>
                        <div class="card-body text-center">
                            <p class="card-text">
                                الكشف عن مواهب وقدرات الطلاب وميولهم والمساهمة في تطويرها وتوجيه استثمار تلك المواهب
                                والقدرات . </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Class End -->
    <div class="container-fluid pt-5">
        <div class="container">
            <img style="width: 100%;height: 400px" class="img-thumbnail"
                 src="{{asset('Attachments/setting/adds/'.$detail->adds)}}">
        </div>
    </div>

    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2"> المعرض </span>
                </p>
                <h1 class="mb-4">معرض نشاطات الطلاب </h1>
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

    <!-- Footer Start -->
    <div
        class=" col-md-12 container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">


        <p class="m-0 text-center text-white">
            &copy;
            <a class="text-primary font-weight-bold" target="_blank" href="https://taif-tech.com/"> Taif Tech</a>.
            كافة الحقوق محفوظة لمؤسسة تقني الطائف 2022م


        </p>
    </div>

    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"
    ><i class="fa fa-angle-double-up"></i
        ></a>
@endsection
