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
                                    <li data-transition="fade">
                                        <img src="img/contact-page-bg.jpg" alt="slide1" data-bgfit="cover" data-bgposition="center center" data-kenburns="on" data-duration="7000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                                        <div class="tp-caption WhiteTtl tp-resizeme"
                                             data-x="center" data-hoffset="0"
                                             data-y="middle" data-voffset="0"
                                             data-whitespace="nowrap"
                                             data-transform_idle="o:1;"
                                             data-transform_in="y:-150px;opacity:0;s:1000;e:Power4.easeOut;"
                                             data-transform_out="opacity:0;s:500;s:500;"
                                             data-start="1300"
                                             data-responsive_offset="on">{{__('home.contact')}}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section v2">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-content contact_form">
                        <div id="note"></div>
                        <div id="fields">
                            <form class="respond-form" id="ajax-contact-form" action="#">
                                <h6>{{__('home.contact_form')}}</h6>

                                <div class="input-line">
                                    <input type="text" name="name" class="check-value">
                                    <span>{{__('home.name')}}</span>
                                </div>

                                <div class="input-line">
                                    <input type="text" name="email" class="check-value">
                                    <span>{{__('home.email')}}</span>
                                </div>

                                <div class="input-line textarea">
                                    <textarea class="check-value" name="message" placeholder=""></textarea>
                                    <span>{{__('home.message')}}</span>
                                </div>
                                <input class="form-send btn yellow dark-hover" type="submit" value="submit">
                            </form>
                        </div>
                    </div>

                    <div class="col-md-3 col-sidebar">
                        <div class="sidebar">
                            <div class="row isotope">
                                <div class="col-md-12 col-sm-6 col-xs-12 isotope-item">
                                    <div class="widget widget_contact">
                                        <h4 class="widget-title">{{__('home.contact_info')}}</h4>
                                        <div class="widget-body">
                                            <ul class="contact-info clean-list">
                                                <li>
                                                    <span class="title">{{__('home.address')}}:</span>
                                                    <p>{{$settings['acik_adres']}}</p>
                                                </li>
                                                <li>
                                                    <span class="title">{{__('home.phone')}}:</span>
                                                    <p>{{$settings['telefon']}}</p>
                                                </li>
                                                <li>
                                                    <span class="title">{{__('home.email')}}:</span>
                                                    <p><a href="mailto:{{$settings['mail']}}">{{$settings['mail']}}</a></p>
                                                </li>
                                                <li>
                                                    <span class="title">{{__('home.social_media')}}:</span>
                                                    <ul class="socials clean-list">
                                                        @if(isset($settings['facebook']))<li><a href="{{$settings['facebook']}}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>@endif
                                                        @if(isset($settings['twitter']))<li><a href="{{$settings['twitter']}}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                                                        @if(isset($settings['instagram']))<li><a href="{{$settings['instagram']}}" target="_blank"><i class="fa fa-instagram"></i></a></li>@endif
                                                        @if(isset($settings['linkedin']))<li><a href="{{$settings['linkedin']}}" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>@endif
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <iframe src="{{$settings['iframe']}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection
