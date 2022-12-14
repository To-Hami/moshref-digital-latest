<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->

                    <li>
                        <a href="{{route('frontend')}}">
                            <div class="pull-left"><i class="ti-home"></i><span
                                    class="right-nav-text">@lang('main_trans.Dashboard')</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>

                    </li>


                    <!-- menu title -->

                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title"></li>
                    <!-- menu item Elements-->
                    <li>
                        <a href="{{route('history.index')}}">
                            <div class="pull-left"><i class=" fa fa-flag-checkered"></i><span
                                    class="right-nav-text">بيانات المدرسة </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>


                        </a>

                    </li>

{{--                    <!-- sections-->--}}
{{--                    <li>--}}
{{--                        <a href="{{route('Sections.index')}}">--}}
{{--                            <div class="pull-left"><i class="fa fa-shield"></i><span--}}
{{--                                    class="right-nav-text">{{trans('main_trans.sections')}}</span></div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}

{{--                    </li>--}}
                    <!-- menu item Elements-->
{{--                    <li>--}}
{{--                        <a href="{{route('grades.index')}}">--}}
{{--                            <div class="pull-left"><i class="fa fa-random"></i><span--}}
{{--                                    class="right-nav-text">@lang('main_trans.Grades')</span></div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}


{{--                        </a>--}}

{{--                    </li>--}}
                    <!-- classes-->



                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                            <div class="pull-left"><i class="fa fa-th"></i><span class="right-nav-text">الصفوف الدراسية</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('Classrooms.index')}}">المرحلة الابتدائية</a> </li>
                            <li> <a href="{{route('ClassroomsMid.index')}}"> المرحلة المتوسطة</a> </li>
                            <li> <a href="{{route('ClassroomsSec.index')}}">المرحلة الثانوية </a> </li>
                            <li> <a href="{{route('mograrats.index')}}"> صفوف طلاب المقررات </a> </li>

                        </ul>
                    </li>
{{--                    <!-- Teachers-->--}}
{{--                    <li>--}}
{{--                        <a href="{{route('Teachers.index')}}">--}}
{{--                            <div class="pull-left"><i class="fa fa-pencil-square"></i><span--}}
{{--                                    class="right-nav-text">{{trans('main_trans.Teachers')}}</span></div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}

{{--                    </li>--}}

{{--                    <!-- subjects-->--}}
{{--                    <li>--}}
{{--                        <a href="{{route('subjects.index')}}">--}}
{{--                            <div class="pull-left"><i class="fa fa-book"></i><span--}}
{{--                                    class="right-nav-text">المواد الدراسية </span></div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}

{{--                    </li>--}}


{{--                    <!-- sections-->--}}
{{--                    <li>--}}
{{--                        <a href="{{route('Sections.index')}}">--}}
{{--                            <div class="pull-left"><i class="fa fa-shield"></i><span--}}
{{--                                    class="right-nav-text">{{trans('main_trans.sections')}}</span></div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}

{{--                    </li>--}}


                    <!-- students-->
                    <li>
                        <a href="{{route('Students.index')}}"><i
                                class="fa fa-graduation-cap"></i>{{trans('main_trans.students')}}
                            <div class="pull-right"><i class="ti-plus"></i></div>
                        </a>
                    </li>
                    <!-- programs-->
                    <li>
                        <a href="{{route('programs.index')}}">
                            <div class="pull-left"><i class="fa fa-heart-o"></i><span
                                    class="right-nav-text">برامج المدرسة</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>

                    </li>
                    <!-- programs-->
                    <li>
                        <a href="{{route('books.index')}}">
                            <div class="pull-left"><i class="fa fa-file-pdf-o"></i><span
                                    class="right-nav-text">المكتبة</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>

                    </li>

                    <!-- tameem-->
                    <li>
                        <a href="{{route('tameem.index')}}">
                            <div class="pull-left"><i class="fa fa-book"></i><span
                                  class="right-nav-text"> التعاميم</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>

                    </li>

                    <!-- activities-->
                    <li>
                        <a href="{{route('activities.index')}}">
                            <div class="pull-left"><i class="fa fa-snowflake-o"></i><span
                                  class="right-nav-text"> النشاطات</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>

                    </li>

                    <!-- manger-->
                    <li>
                        <a href="{{route('manger.index')}}">
                            <div class="pull-left"><i class="fa fa-comments-o"></i><span
                                  class="right-nav-text">أراء المشرفين</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>

                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Left Sidebar End-->

<!--=================================
