<header class="header style2">
     <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <div class="header-message">
                    Welcome to our online store!
                </div>
            </div>
            <div class="top-bar-right">
                <div class="header-language">
                    <div class="ysera-language ysera-dropdown">
                        <a href="#" class="active language-toggle" data-ysera="ysera-dropdown">
                            <span>
                                {{ __(LaravelLocalization::getCurrentLocaleName()) }}
                            </span>
                        </a>
                        <ul class="ysera-submenu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li class="switcher-option">
                                    <a rel="alternate" hreflang="{{ $localeCode }}"  href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        <span>
                                            {{ __($properties['native']) }}
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <ul class="header-user-links">
                    <li>
                        <a href="login.html">Login or Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-4 col-xs-7 col-ts-12 header-element">
                    <div class="block-search-block">
                        <form method="get" action="kerko.php" class="form-search">
                            <div class="form-content">
                                <div class="inner">
                                    <input type="text" class="input" name="term" value="{{ __("Pershendetje") }}" required>
                                    <button class="btn-search" type="submit">
                                        <span class="icon-search"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-4 col-xs-5 col-ts-12">
                    <div class="logo">
                        <a href="index.php">
                            <img src="{{ asset('images/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4 col-xs-12 col-ts-12">
                    <div class="header-control">
                    <span class="social-icons" style="margin-right:20px;">
                        <a href="#" class="social-item" target="_blank">
                            <i class="icon fa fa-facebook fa-2x"></i>
                        </a>
                    </span>
                    <span class="social-icons" style="margin-right:20px;">
                        <a href="#" class="social-item" target="_blank">
                            <i class="icon fa fa-instagram fa-2x"></i>
                        </a>
                    </span>
                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-container">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">
                <div class="header-nav">
                    <div class="container-wapper">
                        <ul class='ysera-clone-mobile-menu ysera-nav main-menu' id='menu-main-menu'>
                            @forelse ($menus as $menu)
                                    <li class="menu-item @if (count($menu->childrens) > 0) menu-item-has-children @endif">
                                        <a href="{{ route($menu->route_name) }}" class="ysera-menu-item-title" title="{{ $menu->al_menu_title }}">{{ $menu->{(\LaravelLocalization::getCurrentLocale())."_menu_title"} }}</a>

                                        <span class="toggle-submenu"></span>
                                        <ul class="submenu">
                                            @foreach ($menu->childrens as $child)
                                                <li class="menu-item">
                                                    <a href="">{{ $child->{(\LaravelLocalization::getCurrentLocale())."_menu_title"} }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                            @empty
                                <li class="menu-item">
                                    <a> {{ __("Nuk u gjend asnjë menu") }} </a>
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="header-device-mobile">
    <div class="wapper">
        <div class="item mobile-logo">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('images/logo.png') }}" alt="img">
                </a>
            </div>
        </div>
        <div class="item item mobile-search-box has-sub">
            <a href="#">
						<span class="icon">
							<i class="fa fa-search" aria-hidden="true"></i>
						</span>
            </a>
            <div class="block-sub">
                <a href="#" class="close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>
                <div class="header-searchform-box">
                    <form method="get" action="kerko.php" class="form-search">
                        <div class="searchform-wrap">
                            <input type="text" class="input" name="term" value="" required>
                            <input type="submit" class="submit button" value="Kërko">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="item mobile-settings-box has-sub">
            <a href="#">
						<span class="icon">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</span>
            </a>
            <div class="block-sub p-2">
                <div class="block-sub-item text-center">
                    <select style="border:0;" id="languages" onchange="window.location = this.value">
                        {{-- @foreach(config('app.languages') as $langLocale => $langName)
                            <option value="{{ $langLocale }}" @if($langLocale == app()->getLocale()) selected @endif>{{ $langName }}</option>
                        @endforeach --}}
                    </select>
                </div>
            </div>
        </div>
        <div class="item menu-bar">
            <a class="mobile-navigation  menu-toggle" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</div>

@section('custom-scripts')
    {{-- <script>
        $(document).on('change','#languages', function(){
            var val = this.value();
            window.location.href = {{ route("lang",}} + val + {{ ) }}
        })
    </script> --}}
@endsection
