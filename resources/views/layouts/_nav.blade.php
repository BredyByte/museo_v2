<ul class="nav mmenu animated">
    <li class="nav-item">
        <a class="nav-link
                 @if(Route::currentRouteName() == 'home')active @endif
                " href="{{route('home')}}"><?= trans('home.muse');?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link
                @if(Route::currentRouteName() == 'gallery')active @endif
                " href="{{route('gallery')}}"><?= trans('home.gallery');?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link
                @if(Route::currentRouteName() == 'shop')active @endif
                " href="{{route('shop')}}"><?= trans('home.shop');?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link
                @if(Route::currentRouteName() == 'contact')active @endif
                " href="{{route('contact')}}"><?= trans('home.contacts');?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link
                @if(Route::currentRouteName() == 'partnership')active @endif" href="{{route('partnership')}}">
            <?= trans('home.partnership') ?>
        </a>
    </li>

    <li class="nav-item lang">
          <a class="nav-link langbtn">@if(App::isLocale('sp')) {{'ES'}}@else{{strtoupper(Lang::locale())}} @endif</a>
        <div class="langboard animated">
			 <a href="<?= route('setlocale', ['lang' => 'sp']) ?>" class="@if(App::isLocale('es')) 1_active @endif">ES</a>
             <a href="<?= route('setlocale', ['lang' => 'ru']) ?>" class="@if(App::isLocale('ru')) l_active @endif">RU</a>
            <a href="<?= route('setlocale', ['lang' => 'en']) ?>" class="@if(App::isLocale('en')) 1_active @endif">EN</a>

        </div>
    </li>
</ul>