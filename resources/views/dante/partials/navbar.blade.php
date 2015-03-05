<ul id="menu-main-menu-1" class="menu full-width">
    <li class="menu-item">
        <a href="{{ url('/') }}" class="dc-mega">
            {{ trans('navigation.main.home') }}
            <span class="nav-line"></span><span class="dc-mega-icon"></span>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{ url('/work') }}" class="dc-mega">
            {{ trans('navigation.main.work') }}
            <span class="nav-line"></span><span class="dc-mega-icon"></span>
        </a>
    </li>
    <li class="menu-item">
        <a href="{{ url('/data') }}" class="dc-mega">
            {{ trans('navigation.main.data') }}
            <span class="nav-line"></span><span class="dc-mega-icon"></span>
        </a>
    </li>
    <li class="menu-item menu-item-has-children parent">
        <a href="{{ url('/leads') }}" class="dc-mega">
            {{ trans('navigation.main.lead.main') }}
            <span class="nav-line"></span><span class="dc-mega-icon"></span>
        </a>

        <div class="sub-container non-mega">
            <ul class="sub-menu sub" style="display: none;">
                <li class="menu-item menu-item-object-page">
                    <a href="{{ url('/leads#pba') }}">{{ trans('navigation.main.lead.pba') }}</a>
                </li>
                <li class="menu-item menu-item-object-page">
                    <a href="{{ url('/leads#ppi') }}">{{ trans('navigation.main.lead.ppi') }}</a>
                </li>
                <li class="menu-item menu-item-object-page">
                    <a href="{{ url('/leads#iva') }}">{{ trans('navigation.main.lead.iva') }}</a>
                </li>
                <li class="menu-item menu-item-object-page">
                    <a href="{{ url('/leads#debt') }}">{{ trans('navigation.main.lead.dm') }}</a>
                </li>
                <li class="menu-item menu-item-object-page">
                    <a href="{{ url('/leads#life') }}">{{ trans('navigation.main.lead.life') }}</a>
                </li>
            </ul>
        </div>
    </li>
</ul>
