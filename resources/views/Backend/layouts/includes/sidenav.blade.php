<div class="mdl-layout__drawer">
    <header><a href="{{route('front.home')}}">darkboard</a></header>
    <div class="scroll__wrapper" id="scroll__wrapper">
        <div class="scroller" id="scroller">
            <div class="scroll__container" id="scroll__container">
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link mdl-navigation__link--current" href="{{route('dashboard')}}">
                        <i class="material-icons" role="presentation">dashboard</i>
                        Dashboard
                    </a>
                    <a class="mdl-navigation__link" href="{{route('admin.bio.index')}}">
                        <i class="material-icons" role="presentation">person</i>
                        Bio
                    </a>
                    <div class="sub-navigation">
                        <a class="mdl-navigation__link">
                            <i class="material-icons">photo_size_select_actual</i>
                            Hero Banner
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <div class="mdl-navigation">
                            <a class="mdl-navigation__link" href="{{route('admin.hero.index')}}">
                                List
                            </a>
                            <a class="mdl-navigation__link" href="{{route('admin.hero.create')}}">
                                Create
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
                    <a class="mdl-navigation__link" href="https://github.com/CreativeIT/getmdl-dashboard">
                        <i class="material-icons" role="presentation">link</i>
                        GitHub
                    </a>
                </nav>
            </div>
        </div>
        <div class='scroller__bar' id="scroller__bar"></div>
    </div>
</div>