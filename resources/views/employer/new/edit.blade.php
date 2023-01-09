
@php
    use Carbon\Carbon;
@endphp
@extends('employer.layout.index')
@section('content')
    <section class="dashboard-area">
        <div class="dashboard-content-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                            <ul class="list-items d-flex align-items-center">
                                @if (isset($breadcrumbs))
                                    @foreach ($breadcrumbs as $key => $breadcrumb)
                                        @if ($key != count($breadcrumbs) - 1)
                                            <li class="active__list-item">
                                                <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                                            </li>
                                        @else
                                            <li class="active__list-item active">{{ $breadcrumb }}</li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <edit-new-employer
                    :data="{{ json_encode([
                        'lever' => $lever,
                        'experience' => $experience,
                        'wage' => $wage,
                        'skill' => $skill,
                        'timework' => $timework,
                        'profession' => $profession,
                        'majors' => $majors,
                        'location' => $location,
                        'workingform' => $workingform,
                        'job' => $job,
                        'urlStore' => route('employer.new.update', $job->id),
                        'urlBack' => route('employer.new.index'),
                    ]) }}">
                    <edit-new-employer>
            </div><!-- end container-fluid -->
        </div>
    </section><!-- end dashboard-area -->

    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
@endsection
