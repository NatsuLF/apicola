<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" area-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-left" href="{{ url('/') }}">
                <img src="{{ asset('images/logo/logo.png') }}" style="padding-top: 3px;">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ $controller == 'StaticController' && $action == 'about' ? 'active' : '' }}">
                    <a href="{{ url('/') }}">
                        <i class="fa fa-home" aria-hidden="true"></i> {{ trans('messages.about') }}
                    </a>
                </li>
                <li class="dropdown {{ $controller == 'StaticController' && in_array($action, ['hive', 'getting_started', 'financial_analysis']) ? 'active' : '' }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-circle-o" aria-hidden="true"></i> {{ trans('messages.hive') }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="{{ $action == 'hive' ? 'active' : '' }}">
                            <a href="{{ url('hive') }}">
                                {{ trans('messages.beehive') }}
                            </a>
                        </li>
                        <li class="{{ $action == 'getting_started' ? 'active' : '' }}">
                            <a href="{{ url('hive') }}">
                                {{ trans('messages.getting_started') }}
                            </a>
                        </li>
                        <li class="{{ $action == 'financial_analysis' ? 'active' : '' }}">
                            <a href="{{ url('financial_analysis') }}">
                                {{ trans('messages.financial_analysis') }}
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ $controller == 'ItemController' ? 'active' : 'no-active' }}">
                    <a href="/catalogo">
                        <i class="fa {{ $controller == 'ItemController' ? 'fa-folder-open-o' : 'fa-folder-o' }} " aria-hidden="true"></i> {{ trans('messages.catalog') }}
                    </a>
                </li>
                <li class="{{ $controller == 'StaticController' && $action == 'services' ? 'active' : '' }}">
                    <a href="{{ url('services') }}">
                        <i class="fa fa-flask" aria-hidden="true"></i> {{ trans('messages.services') }}
                    </a>
                </li>
                <li class="{{ $controller == 'ContactController' ? 'active' : 'no-active' }}">
                    <a href="{{ url('contact') }}">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> {{ trans('messages.contact') }}
                    </a>
                </li>
                <li class="{{ $controller == 'PostController' ? 'active' : 'no-active' }}">
                    <a href="{{ url('blog') }}">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i> {{ trans('messages.news') }}
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                        @if (Config::get('languages')[App::getLocale()] == 'English')
                            <img src="{{ asset('images/flags/united-states.gif') }}" alt="English">
                        @else
                            <img src="{{ asset('images/flags/spain.gif') }}" alt="Spanish">
                        @endif
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <li>
                                    <a href="{{ route('lang.switch', $lang) }}">
                                        @if ($language == 'English')
                                            <img src="{{ asset('images/flags/united-states.gif') }}" alt="English">
                                        @else
                                            <img src="{{ asset('images/flags/spain.gif') }}" alt="Spanish">
                                        @endif
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
