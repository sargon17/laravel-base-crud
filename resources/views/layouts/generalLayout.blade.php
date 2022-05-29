<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/js/app.js" defer></script>
    <title>Comics</title>
</head>
<body>
    {{-- Header --}}
    <header class="header">
      <div class="header--content">
        <div class="header__logo-wrapper">
            <a href="/comics">
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
{{-- End Header --}}

    {{-- Main Section --}}
    <main class="main">
      <div class="main__content">
        @yield('content')
      </div>
    </main>
    {{-- End Main Section --}}

    {{-- Footer --}}
    <div>
    <div class="footer-top">
      <div class="footer-content">
        <div class="footer-top__content">
            @foreach ( $footerNav as $menu )
            <div
            class="footer-top__content__nav-list"
          >
            <h3>{{$menu['title']}}</h3>
            <ul>
                @foreach ( $menu['links'] as $item )
              <li
                class="footer-top__content__nav-item">
                <a class="footer-link" href="{{$item['url']}}">{{$item['title']}}</a>
              </li>
              @endforeach

            </ul>
          </div>
            @endforeach
        </div>
        <div class="footer-top__logo">
          <img src="../assets/dc-logo-bg.png" alt="" />
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-content">
        <div class="footer-bottom__content">
          <div class="footer-bottom__content__signup">
            <button>Sign-up now!</button>
          </div>
          <div class="footer-bottom__content__social-media">
            <h3>Follow us</h3>
            <ul>
                @foreach ( $social as $item )
                <li
                  class="footer-bottom__content__social-media__item"
                >
                  <a href="{{$item['url']}}" id="{{$item['id']}}">
                    <img src="{{$item['icon']}}" alt="{{$item['name']}}" />
                  </a>
                </li>
                @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- End of footer --}}
</body>
</html>
