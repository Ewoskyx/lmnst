<aside class="col-2 bg-light h-100 side px-1">
    <div class="page-logo">
        <a href="#" class="d-flex align-items-center  justify-content-between ps-5 pt-2 position-relative">
            <img src="{{ asset('images/limonist.png') }}" alt="logo" class="w-50 h-50">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <nav id="side-nav" class="side-nav d-flex flex-column mt-5 mb-5 h-75 justify-content-end">   
        <div class="dropdown mt-3">
            <button class="drop-btn" type="button" id="drop-btn"><ion-icon name="person-outline" class="top_side_icons"></ion-icon>
             Kullanıcı İşlemleri<ion-icon name="chevron-down-outline" class="ms-3"></ion-icon>
            </button>
            <div class="drp-menu hide" id="drp-menu">
                <ion-icon name="pencil-outline" class="ms-3"></ion-icon>
              <a class="drp-item" href="#">Kullanıcılar</a>
            </div>
        </div>    
        <ul id="side-menu" class="side-menu h-25 d-flex flex-column justify-content-between">
            <li class="">
                <a href="#">
                    <ion-icon name="notifications-outline" class="side_icons"></ion-icon>
                    <span class="ms-3">Bildirimler</span>
                </a>
            </li>
            <li class="">
                <a href="#">
                    <ion-icon name="mail-outline" class="side_icons"></ion-icon>
                    <span class="ms-3">Mesajlar</span>
                </a>
            </li>
            <li class="">
                <a href="#">
                    <ion-icon name="settings-outline" class="side_icons"></ion-icon>
                    <span class="ms-3">Profil ve Ayarlar</span>
                </a>
            </li>
        </ul>
        <div class="side_btns d-flex flex-column gap-1 align-items-center">
            <button class="rounded-5 border-0 p-1 w-75">Limonist</button>
            <button class="rounded-5 border-0 p-1 w-75">Görevi</button>
        </div>
        <div class="side_bottom">
            <ul class="d-flex justify-content-between mt-3 align-items-center me-2">
                <li>
                    <img src="{{ asset('images/limonist.png') }}" alt="logo" class="small_logo">
                </li>
                <li>
                    <a href="#" class="d-flex flex-column">
                        <ion-icon name="chatbox-outline" class="side_bottom_icons"></ion-icon>
                        <span class="">Canlı Yardım</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }} " class="d-flex flex-column">
                        <ion-icon name="power-outline" class="side_bottom_icons"></ion-icon>
                        <span class="">Çıkış</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="nav_footer d-flex flex-column align-items-center">
        <small>2020 © Limonist</small> 
        <img src="{{ asset('images/limonist.png') }}" alt="logo" class="footer_logo">   
    </div>
</aside>
@section('scripts')
<script>
    const dropMenu = document.getElementById('drp-menu');
    const dropButton = document.getElementById('drop-btn');
    dropButton.addEventListener('click', () => {
        if (dropMenu.classList.contains('hide')) {
            dropMenu.classList.remove('hide');
        } else {
            dropMenu.classList.add('hide');
        }
    })
</script>
@endsection

