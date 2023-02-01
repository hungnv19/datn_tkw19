{{-- @include('client.layout.header') --}}
{{-- @extends('client.layout.index')
@section('client')
    fvxcbcvncvn
@endsection --}}
@extends('client.layout.index')
@section('client')
    <main class="main">
        <section class="section-box-2">
            <div class="container">
                <div class="banner-hero banner-company" data-settings-id="banner-recruiter">
                    <div class="block-banner text-center">
                        <h3 class="wow animate__ animate__fadeInUp  animated"
                            style="visibility: visible; animation-name: fadeInUp;">Browse Recruiters</h3>
                        <div class="font-sm color-text-paragraph-2 mt-10 wow animate__ animate__fadeInUp  animated"
                            data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repellendus magni,atque delectus
                            molestias quis? </div>
                        <div class="form-find text-start mt-40 wow animate__ animate__fadeInUp animated"
                            data-wow-delay=".2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <form class="job_filters" method="GET">
                                <input class="form-input input-keysearch mr-10" type="text" name="search" id="search"
                                    placeholder=" Vui lòng nhập tên công ty..."
                                    value="{{ !empty($request) ? $request->search : '' }}">



                                <button class="btn btn-default btn-find font-sm" value="Search">Search</button>



                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="section-box mt-50">
            <div class="container">


                <div class="box-filters-job">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-5">
                            <span class="text-small text-showing">
                                Showing <strong>{{ count($company) }}</strong> Công ty</span>
                        </div>

                    </div>
                </div>

                <div class="row">
                    @if (!$company->isEmpty())
                        @foreach ($company as $item)
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 jobbox-grid-item">

                                <div class="card-grid-1 hover-up wow animate__ animate__fadeIn"
                                    style="visibility: visible; animation-name: fadeIn;">

                                    <div class="image-box">
                                        <a href="{{ route('detail.company', $item->id) }}">
                                            <img src="{{ asset($item->logo) }}" width="52" alt="Logo">
                                        </a>
                                    </div>

                                    <div class="info-text mt-10">

                                        <h5 class="font-lg font-bold"><a
                                                href="{{ route('detail.company', $item->id) }}">{{ $item->name }}</a>
                                        </h5>

                                        <div class="mt-5">
                                            <img alt="Star"
                                                src="../wp-content/themes/jobbox/assets/imgs/template/icons/star.svg"><img
                                                alt="Star"
                                                src="../wp-content/themes/jobbox/assets/imgs/template/icons/star.svg"><img
                                                alt="Star"
                                                src="../wp-content/themes/jobbox/assets/imgs/template/icons/star.svg"><img
                                                alt="Star"
                                                src="../wp-content/themes/jobbox/assets/imgs/template/icons/star.svg">
                                        </div>
                                        <span class="card-location">{{ $item->address }}</span>

                                        <div class="mt-30">
                                            <a class="btn btn-grey-big"
                                                href="../jobs/index22ab.html?search_location=Chicago,%20US">
                                                1 Open Job </a>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        @endforeach
                    @else
                        Không tìm thấy kết quả phù hợp với yêu cầu tìm kiếm của bạn
                    @endif



                </div>





            </div>
        </section>


        {{-- <section class="section-box mt-50 mb-20">
            <div class="container">
                <div class="box-newsletter">
                    <div class="row align-items-center">

                        <div class="col-xl-3 col-12 text-center d-none d-xl-block">
                            <img src="../wp-content/uploads/2022/12/newsletter-left.png" alt="Newsletter">
                        </div>

                        <div class="col-lg-12 col-xl-6 col-12">
                            <h2 class="text-md-newsletter text-center">New Things Will Always Update Regularly</h2>
                            <div class="box-form-newsletter mt-40">
                                <form id="mc-form" class="form-newsletter">
                                    <input id="mc-email" class="input-newsletter" type="email"
                                        placeholder="Enter your email" required="required">
                                    <button class="btn btn-default font-heading icon-send-letter"
                                        type="submit">Subscribe</button>
                                </form>

                            </div>
                            <div id="mc-response" class="mt-15"></div>
                        </div>

                        <div class="col-xl-3 col-12 text-center d-none d-xl-block">
                            <img src="../wp-content/uploads/2022/12/newsletter-right.png" alt="Newsletter">
                        </div>

                    </div>
                    <!--row-->
                </div>
            </div>
        </section> --}}
    </main>
@endsection
