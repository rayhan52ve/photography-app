<div class="mdl-layout__drawer">
    <header><a href="{{ route('front.home') }}">frontend</a></header>
    <div class="scroll__wrapper" id="scroll__wrapper">
        <div class="scroller" id="scroller">
            <div class="scroll__container" id="scroll__container">
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link mdl-navigation__link--current" href="{{ route('dashboard') }}">
                        <i class="material-icons" role="presentation">dashboard</i>
                        Dashboard
                    </a>
                    <a class="mdl-navigation__link" href="{{ route('admin.bio.index') }}">
                        <i class="material-icons" role="presentation">person</i>
                        Bio
                    </a>
                    <a class="mdl-navigation__link" href="{{ route('admin.category.index') }}">
                        <i class="material-icons" role="presentation">photo_camera</i>
                        Album Category
                    </a>
                    <a class="mdl-navigation__link" href="{{ route('admin.album.index') }}">
                        <i class="material-icons" role="presentation">photo_camera</i>
                        Albums
                    </a>
                    <a class="mdl-navigation__link" href="{{ route('admin.photography.index') }}">
                        <i class="material-icons" role="presentation">photo_camera</i>
                        Photos
                    </a>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">settings</i>
                            Settings
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{ route('admin.hero.index') }}">
                                Banners
                            </a>
                        </div>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{ url('/profile') }}">
                                My Account
                            </a>
                        </div>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{ route('admin.web-info.index') }}">
                                Website info
                            </a>
                        </div>
                    </div>
                    {{-- <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">pages</i>
                            Pages
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="login.html">
                                Sign in
                            </a>
                            <a class="mdl-navigation__link" href="sign-up.html">
                                Sign up
                            </a>
                            <a class="mdl-navigation__link" href="forgot-password.html">
                                Forgot password
                            </a>
                            <a class="mdl-navigation__link" href="404.html">
                                404
                            </a>
                        </div>
                    </div> --}}
                    <div class="mdl-layout-spacer"></div>
                    <hr>
                    <a class="mdl-navigation__link" href="{{route('front.home')}}" target="blank_" title="Open new tab for frontend">
                        <i class="material-icons" role="presentation">home</i>
                        Go To Frontend
                    </a>
                </nav>
            </div>
        </div>
        <div class='scroller__bar' id="scroller__bar"></div>
    </div>
</div>
