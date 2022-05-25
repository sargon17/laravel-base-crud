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
                <a href="{{$item['url']}}">{{$item['title']}}</a>
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
