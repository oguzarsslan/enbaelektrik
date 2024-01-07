<footer>
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12">
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
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="widget widget_recent_posts">
                        <h4 class="widget-title">{{__('home.projects')}}</h4>
                        <div class="widget-body">
                            <ul class="recent-posts clean-list">
                                @foreach($postsFooter as $post)
                                    <li>
                                        <h4><a href="/projlerimiz/{{$post->id}}">{{$post['title_' . app()->getLocale()]}}</a></h4>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 footer-logo-div">
                    <div class="widget widget_contact">
                        <h4 class="widget-title">  </h4>
                        <a href="/">
                            <img class="footer-logo" src="{{ asset('images/' . $footerLogo->image) }}">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="container" style="text-align-last: center">
            <p class="align-center copyright">
                Copyright © 2023 {{$settings['site_title_' . app()->getLocale()]}}. {{__('home.all_right')}}
            </p>
        </div>
    </div>
</footer>
