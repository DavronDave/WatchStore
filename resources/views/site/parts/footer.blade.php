<footer id="footer">
    <div class="ftr__top">
        <div class="container">
            <ul>
                <li><a href="{{ route('site.index') }}"
                       @if(__('menus.home')==View::getSection('title')) class="active" @endif>{{ mb_strtoupper(__('menus.home')) }}</a>
                </li>
                <li><a href="{{ route('site.about') }}"
                       @if(__('menus.about')==View::getSection('title')) class="active" @endif>{{ mb_strtoupper(__('menus.about')) }}</a>
                </li>
                <li><a href="{{ route('site.news') }}"
                       @if(__('menus.news')==View::getSection('title')) class="active" @endif>{{ mb_strtoupper(__('menus.news')) }} </a>
                </li>
                <li><a href="{{ route('site.regulation') }}"
                       @if(__('menus.documents')==View::getSection('title')) class="active" @endif>{{ mb_strtoupper(__('menus.documents')) }}</a>
                </li>
                <li><a href="{{ route('site.contact') }}"
                       @if(__('menus.contact')==View::getSection('title')) class="active" @endif>{{ mb_strtoupper(__('menus.contact')) }}</a>
                </li>
                <li><a href="{{ route('site.faq') }}"
                       @if(__('menus.faq')==View::getSection('title')) class="active" @endif>{{ mb_strtoupper(__('menus.faq')) }}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="ftr__bottom">
        <div class="container">
            <p>{{ __('locale.footer') }}</p>
        </div>
    </div>
</footer>
</body>

<script src="/site/js/jquery-3.5.1.min.js"></script>
<script src="/site/js/select2.min.js"></script>
<script src="/site/js/swiper.min.js"></script>
<script src="/site/js/bootstrap.min.js"></script>
<script src="/site/js/jquery.fancybox.min.js"></script>
<script src="/site/js/jquery.maskedinput.min.js"></script>
<script src="/site/js/jquery-ui.min.js"></script>
<script src="/site/js/specialView.min.js"></script>
<script src="/site/js/main.js"></script>
@yield('script')
</html>
