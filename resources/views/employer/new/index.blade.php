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
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">
                                    @if (isset($title))
                                        <title>{{ $title }}</title>
                                    @endif
                                </h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content pb-0">
                                <div class="manage-job-wrap">
                                    <div class="manage-job-header mt-3 mb-5">
                                        <div class="manage-job-count">
                                            <span class="font-weight-medium color-text-2 mr-1">{{ count($job) }}</span>
                                            <span class="font-weight-medium">công việc được đăng</span>
                                        </div>
                                        <div class="manage-job-count">
                                            <span class="font-weight-medium color-text-2 mr-1">8</span>
                                            <span class="font-weight-medium">ứng viên(s)</span>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Tiêu đề</th>
                                                    <th>Ứng tuyển</th>
                                                    <th>Ngày đăng</th>
                                                    <th>Ngày hết hạn</th>
                                                    <th>Trạng thái</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($job as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="manage-candidate-wrap">
                                                                <h2 class="widget-title pb-1"><a href="job-details.html"
                                                                        class="color-text-2">{{ $item->title }}</a></h2>
                                                                <p>
                                                                    <span><i class="la la-clock-o font-size-16"></i>Còn lại:
                                                                        10
                                                                        ngày</span>
                                                                </p>
                                                            </div><!-- end manage-candidate-wrap -->
                                                        </td>
                                                        <td>{{ count($item->AllCv) }}</td>
                                                        <td>{{ $item->job_time }}</td>
                                                        <td>{{ $item->end_job_time }}</td>
                                                        <td><span
                                                                class="badge p-1 {{ $item->status == 1 ? 'bg-success text-white' : 'bg-secondary text-white' }}">{{ $item->status == 0 ? 'Bản nháp' : 'Đang hoạt động' }}</span>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="manage-candidate-wrap">
                                                                <div class="bread-action pt-0">
                                                                    <ul class="info-list">
                                                                        <li class="d-inline-block"><a
                                                                                href="{{ route('employer.new.showdetai', $item->id) }}"><i
                                                                                    class="la la-eye" data-toggle="tooltip"
                                                                                    data-placement="top" title=""
                                                                                    data-original-title="Xem tất cả ứng viên đã nộp vào bài job"></i></a>
                                                                        </li>
                                                                        <li class="d-inline-block"><a
                                                                                href="{{ route('employer.new.edit', $item->id) }}"><i
                                                                                    class="la la-edit" data-toggle="tooltip"
                                                                                    data-placement="top" title=""
                                                                                    data-original-title="Sửa bài viết"></i></a>
                                                                        </li>
                                                                        <li class="d-inline-block"><a href="#"><i
                                                                                    class="la la-trash"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top" title=""
                                                                                    data-original-title="xóa bài viết"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- end billing-content -->
                        </div><!-- end billing-form-item -->
                    </div><!-- end col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copy-right margin-top-30px padding-top-20px padding-bottom-20px">
                            <p class="copy__desc">
                                Copyright &copy;2020 Zobstar Inc. Made with
                                <span class="la la-heart-o"></span> by <a
                                    href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                            </p>
                            <ul class="list-items">
                                <li><a href="#">Terms of Use,</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div><!-- end copy-right -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div>
    </section><!-- end dashboard-area -->

    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
@endsection
