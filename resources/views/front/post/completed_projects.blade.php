@extends('front.layouts.master')

@section('content')

    <div class="content-wrapper">
        <section class="hero-section">
            <h2 class="hidden">Slider Section</h2>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="rev_slider_wrapper">
                            <div class="fullwidth_slider rev_slider" data-type="hero" data-height="400">
                                <ul>
                                    <li data-transition="fade">
                                        <img src="img/portfolio-page-intro.jpg" alt="slide1" data-bgfit="cover" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                                        <div class="tp-caption WhiteTtl px40 tp-resizeme"
                                             data-x="center" data-hoffset="0"
                                             data-y="middle" data-voffset="0"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;"
                                             data-transform_in="y:-100px;opacity:0;s:1000;e:Power4.easeOut;"
                                             data-transform_out="opacity:0;s:500;s:500;"
                                             data-start="1300"
                                             data-responsive_offset="on">{{__('home.completed_project')}}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="portfolio-section items">
            <div class="isot-projects-wrapper" data-default-selection="*">
                <div class="container-fluid">
                    <div class="row isotope">
                        @foreach($projects as $project)
                            <div class="col-md-4 col-xs-6 isotope-item buildings">
                                <div class="portfolio-box">
                                    <div class="cover">
                                        @if(isset($project->images[0]))
                                            <a href="/projelerimiz/{{$project->id}}">
                                                <img src="{{ asset('images/' . $project->images[0]->image) }}" style="width: 600px; height: 600px;">
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
                </div>
            </div>
        </section>
    </div>

@endsection
