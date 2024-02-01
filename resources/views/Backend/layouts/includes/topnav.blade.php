<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>

        <div class="avatar-dropdown" id="icon">
            <span>{{Auth::user()->name}}</span>
            <img src="{{ asset('uploads/bio/' . $bio->image) }}" class="rounded-circle">
        </div>
        <!-- Account dropdawn-->
        <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
            for="icon">
            <li class="mdl-list__item mdl-list__item--two-line">
                <span class="mdl-list__item-primary-content">
                    {{-- <span class="material-icons mdl-list__item-avatar"></span> --}}
                    <span>{{Auth::user()->name}}</span>
                    <span class="mdl-list__item-sub-title">{{Auth::user()->email}}</span>
                </span>
            </li>
            <li class="list__item--border-top"></li>
            <a href="{{ url('/profile') }}">
                <li class="mdl-menu__item mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon">account_circle</i>
                        My account
                    </span>
                </li>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="mdl-menu__item mdl-list__item"
                    style="border: none; background: none; cursor: pointer;">
                    <span class="mdl-list__item-primary-content">
                        <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                        Log out
                    </span>
                </button>
            </form>
        </ul>
    </div>
</header>
