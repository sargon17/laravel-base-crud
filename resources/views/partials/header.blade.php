   <header class="header">
      <div class="header--content">
        <div class="header__logo-wrapper">
            <a href="/">
                <img src="/assets/dc-logo.png" alt="dc logo" />
            </a>
        </div>
        <nav class="header__nav">
          <ul class="header__nav-list">
              @foreach ( $nav as $item )
                <li class="header__nav-item">
                    <a href="{{ $item['url'] }}" class="{{ $item['active'] === true ? 'header__nav-item-link header__nav-item-link-active': 'header__nav-item-link'}}">{{ $item['title'] }}</a>
                </li>

              @endforeach

          </ul>
          <div class="search-input">
            <input type="text" placeholder="Search" />
            <button class="search-btn">
          <i class="fa-solid fa-magnifying-glass"></i>
            </button>

          </div>
        </nav>
      </div>
    </header>
