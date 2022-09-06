<header class="hdr bg-light">
    <nav class="w-100 d-flex">
        <ul class="d-flex gap-3 h-100">
            <li class="p-3">
                <a href="{{ route('chart') }}"  class="">
                    <ion-icon name="bar-chart-outline"></ion-icon>
                    <span>@lang('custom.reports')</span>
                </a>
            </li>
            <li class="p-3">
                <a href="{{ route('index') }}" class="">
                    <ion-icon name="settings-outline"></ion-icon>
                    <span>@lang('custom.management')</span>
                </a>
            </li>
        </ul>
        <a href="{{ route('lang') }}" class="country"> <img class="tr_icon" src="{{ asset('images/tr.png') }}" alt="TR"></a>
    </nav>
</header>
