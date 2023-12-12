@extends('front.layouts.master')

@section('content')

    <div class="content-wrapper">
        @if(isset($slides[0]))
            <section class="hero-section">
                <h2 class="hidden">Slider Section</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="rev_slider_wrapper">
                                <div class="fullscreen_slider rev_slider">
                                    <ul>
                                        @foreach($slides as $slide)
                                            <li data-transition="fade">

                                                @foreach($slide->images as $image)
                                                    <img src="{{ asset('images/' . $image->image) }}" alt="slide1" data-bgfit="cover" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                                                @endforeach

                                                <div class="tp-caption WhiteTtl tp-resizeme"
                                                     data-x="center" data-hoffset="0"
                                                     data-y="middle" data-voffset="-50"
                                                     data-whitespace="nowrap"
                                                     data-transform_idle="o:1;"
                                                     data-transform_in="y:-150px;opacity:0;s:1000;e:Power4.easeOut;"
                                                     data-transform_out="opacity:0;s:500;s:500;"
                                                     data-start="1300"
                                                     data-responsive_offset="on">{{$slide['title_' . app()->getLocale()]}}
                                                </div>
                                                <div class="tp-caption WhiteTtlp tp-resizeme"
                                                     data-x="center" data-hoffset="0"
                                                     data-y="middle" data-voffset="30"
                                                     data-whitespace="pre"
                                                     data-transform_idle="o:1;"
                                                     data-transform_in="y:-100px;opacity:0;s:1000;e:Power2.easeOut;"
                                                     data-transform_out="opacity:0;s:500;s:500;"
                                                     data-start="1700"
                                                     data-responsive_offset="on">{{$slide['desc_' . app()->getLocale()]}}
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <span class="scroll">
										<i class="icon-Down"></i>
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

    <section class="features-section v2">
        <div class="container-fluid">
            <div class="row bg-alfa pos-relative">
                <div class="col-md-6 no-padding pos-static">
                    <div class="row-bg">
                        @if(isset($images))
                            @foreach($images as $image)
                                <img src="{{ asset('images/' . $image->image) }}" alt="features bg">
                            @endforeach
                        @else
                            <img src="img/features-section-bg.jpg" alt="features bg">
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section-header">
                        <h2>{{$settings['title_1_' . app()->getLocale()]}}</h2>
                        <span><i></i></span>
                        <p>{{$settings['desc_1_' . app()->getLocale()]}}</p>
                    </div>

                    <div class="row content">
                        <div class="col-lg-10">
                            <div class="feature-line">
                                <h6>{{$settings['title_2_' . app()->getLocale()]}}</h6>
                                <p>{{$settings['desc_2_' . app()->getLocale()]}}</p>
                            </div>
                            <div class="feature-line">
                                <h6>{{$settings['title_3_' . app()->getLocale()]}}</h6>
                                <p>{{$settings['desc_3_' . app()->getLocale()]}}</p>
                            </div>
                            <div class="feature-line">
                                <h6>{{$settings['title_4_' . app()->getLocale()]}}</h6>
                                <p>{{$settings['desc_4_' . app()->getLocale()]}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio-section v1" style="margin-top: 50px;">
        <div class="container-fluid">
            <div class="section-header">
                <h3>{{__('home.projects')}}</h3>
            </div>

            <div class="row">
                @foreach($projects as $project)
                    <div class="col-md-3 col-xs-6">
                        <div class="portfolio-box">
                            <div class="cover">
                                @if(isset($project->images[0]))
                                    <a href="/projelerimiz/{{$project->id}}">
                                        <img src="{{ asset('images/' . $project->images[0]->image) }}" style="width: 442.5px; height: 442.5px;">
                                    </a>
                                @else
                                    <a href="/projelerimiz/{{$project->id}}">
                                        <img src="img/portfolio-box-1.jpg">
                                    </a>
                                @endif
                                <h6 class="title">{{$project['title_' . app()->getLocale()]}}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="section-header button">
                <a href="/projelerimiz" class="btn yellow medium dark-hover">{{__('home.projects')}}</a>
            </div>
        </div>
    </section>
</div>

@endsection
