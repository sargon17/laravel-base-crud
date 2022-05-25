 <div class="banner">
    <div class="banner-content">
        @foreach ( $bannerData as $item )
        <div class="banner-card">
        <div class="banner-card__img-container">
            <img src="{{$item['img']}}" alt="{{$item['alt']}}" />
        </div>
        <p>{{$item['title']}}</p>
      </div>
        @endforeach
  </div>
