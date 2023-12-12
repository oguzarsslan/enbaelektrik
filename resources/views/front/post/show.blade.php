@extends('front.layouts.master')

@section('content')

    <div class="content-wrapper">
        <section class="hero-section">
            <h2 class="hidden">Slider Section</h2>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="rev_slider_wrapper">
                            <div class="fullwidth_slider rev_slider" data-arrows="false" data-height="400">
                                <ul>
                                    @if(isset($post['images']))
                                        @foreach($post['images'] as $image)
                                            <li data-transition="fade">
                                                <img src="{{ asset('images/' . $image->image) }}" alt="slide1" data-bgfit="cover" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                                                <div class="tp-caption WhiteTtl px40 tp-resizeme"
                                                     data-x="center" data-hoffset="0"
                                                     data-y="middle" data-voffset="0"
                                                     data-whitespace="nowrap"
                                                     data-transform_idle="o:1;"
                                                     data-transform_in="y:-100px;opacity:0;s:1000;e:Power4.easeOut;"
                                                     data-transform_out="opacity:0;s:500;s:500;"
                                                     data-start="1300"
                                                     data-responsive_offset="on">
                                                </div>
                                            </li>
                                        @endforeach
                                    @else
                                        <li data-transition="fade">
                                            <img src="/img/slider-portfolio-1.jpg" alt="slide1" data-bgfit="cover" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                                            <div class="tp-caption WhiteTtl px40 tp-resizeme"
                                                 data-x="center" data-hoffset="0"
                                                 data-y="middle" data-voffset="0"
                                                 data-whitespace="nowrap"
                                                 data-transform_idle="o:1;"
                                                 data-transform_in="y:-100px;opacity:0;s:1000;e:Power4.easeOut;"
                                                 data-transform_out="opacity:0;s:500;s:500;"
                                                 data-start="1300"
                                                 data-responsive_offset="on">
                                            </div>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="single-post-section portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-posts-list single">
                            <div class="blog-post">
                                <div class="entry">
                                    <h2>{{$post['title_' . app()->getLocale()]}}</h2>
                                    <span><i></i></span>
                                    <p style="margin-top:30px;">{!! $post['body_' . app()->getLocale()] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
