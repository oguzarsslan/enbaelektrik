<header class="header-v2">
    <div class="top-header">
        <div class="container-fluid">
            <ul class="contacts">
                <li><i class="fa fa-phone"></i>{{$settings['telefon']}}</li>
                <li><a href="mailto:{{$settings['mail']}}"><i class="fa fa-envelope"></i>{{$settings['mail']}}</a></li>
            </ul>

            <ul class="socials">
                @if(isset($settings['facebook']))<li><a href="{{$settings['facebook']}}" target="_blank"><i class="fa fa-facebook-square"></i></a></li>@endif
                @if(isset($settings['twitter']))<li><a href="{{$settings['facebook']}}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                @if(isset($settings['instagram']))<li><a href="{{$settings['facebook']}}" target="_blank"><i class="fa fa-instagram"></i></a></li>@endif
                @if(isset($settings['linkedin']))<li><a href="{{$settings['facebook']}}" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>@endif
            </ul>
        </div>
    </div>

    <div class="bottom-header">
        <div class="container-fluid">
            		<span class="mobile-navigation-toggle hidden-md hidden-lg">
						<span class="menui top-menu"></span>
						<span class="menui mid-menu"></span>
						<span class="menui bottom-menu"></span>
					</span>

            <div class="logo">
                <a href="/">BRICKS<span>.</span></a>
            </div>

            <nav class="main-nav">
                <ul class="menu">
                    <li class="menu-item">
                        <a href="/">{{__('home.home')}}</a>
                    </li>
                    <li class="menu-item">
                        <a href="/hakkimizda">{{__('home.about')}}</a>
                    </li>
                    <li class="menu-item">
                        <a href="/projelerimiz">{{__('home.project')}}</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="/tamamlanan-projelerimiz">{{__('home.completed_project')}}</a>
                            </li>
                            <li class="menu-item">
                                <a href="/devam-eden-projelerimiz">{{__('home.ongoin_project')}}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="/iletisim">{{__('home.contact')}}</a>
                    </li>
                </ul>
            </nav>

            <ul class="actions">
                <li class="custom-select">
                    <span class="default"><i class="fa fa-globe"></i><span class="content">{{app()->getLocale() === 'tr' ? 'TR' : 'EN'}}</span></span>
                    <ul class="select-options dismiss">
                        <li onclick="changeLang('tr')">TR</li>
                        <li onclick="changeLang('en')">EN</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>

<script>
    function changeLang(lang) {
        console.log(lang)
        window.location.href = '/locale/' + lang;
    }
</script>
