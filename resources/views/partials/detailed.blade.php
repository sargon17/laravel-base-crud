<section>
    <div class="top-container">
        <div class="top-container__hero">
        </div>
        <div class="top-container__cover-section">
            <div class="container">
                <div class="top-container__cover">
                    <img src="@yield('thumb')" alt="">
                    <div class="top-left-tag">
                        <p>comic book</p>
                    </div>
                    <div class="bottom-tag">
                        <p>view gallery</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-container__content-section__wrapper">
            <div class="container">
                <div class="row jc-end">
                    <div class="col-1">
                        <button class="btn btn-danger" id="delete-btn" >Delete</button>
                    </div>
                    <div class="col-1">
                        <a href="/comics/{{$comic['id']}}/edit">
                        <div class="btn btn-primary">
                            <p>EDIT</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="top-container__content-section">
                    <div class="top-container__content">
                        <h1> @yield('title') </h1>
                        <div class="strange-green-thing__container">
                            <div class="strange-green-thing__price">
                                <p>
                                    U.S. Price:
                                    <span> @yield('price') </span>
                                </p>
                                <div class="strange-green-thing__price-disponibility">
                                    <p>AVAILABLE</p>
                                </div>
                            </div>
                            <div class="strange-green-thing__check-disponibility">
                                <p>Check Availability</p>
                            </div>
                        </div>
                        <p> @yield('description') </p>
                    </div>
                    <div class="advertising-section">
                        <p class="adv-identity">Advertisement</p>
                        <img src="/assets/adv.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="specific-container">
            <div class="container">
                <div class="specific-container__wrapper">
                    <div class="specific__talent">
                        <div class="specific__talent-box">
                            <h2>Talent</h2>
                        </div>
                        <div class="specific__talent-box">
                            <div class="specific__talent-box__content">
                                <h4>Art by:</h4>
                                <p>
                                    @yield('artists')
                                </p>
                            </div>
                        </div>
                        <div class="specific__talent-box">
                            <div class="specific__talent-box__content">
                                <h4>Written by:</h4>
                                <p>
                                    @yield('writers')
                                </p>
                            </div>
                        </div>
                    </div>
                     <div class="specific__talent">
                        <div class="specific__talent-box">
                            <h2>Specs</h2>
                        </div>
                        <div class="specific__talent-box">
                            <div class="specific__talent-box__content">
                                <h4>Series:</h4>
                                <p>
                                   <span class="serie">@yield('series')</span>
                                </p>
                            </div>
                        </div>
                        <div class="specific__talent-box">
                            <div class="specific__talent-box__content">
                                <h4>U.S. Price:</h4>
                                <p>
                                    @yield('price')
                                </p>
                            </div>
                        </div>
                         <div class="specific__talent-box">
                            <div class="specific__talent-box__content">
                                <h4>On Sale Date:</h4>
                                <p>
                                    @yield('sale_date')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="additional-banner">
            <div class="container">
                <div class="additional-banner-wrapper">
                    <div class="additional-banner-wrapper__content">
                        <h5>Digital Comics</h5>
                        <div class="img img-1"></div>
                    </div>
                    <div class="additional-banner-wrapper__content">
                        <h5>Shop dc</h5>
                        <div class="img img-2"></div>
                    </div>
                    <div class="additional-banner-wrapper__content">
                        <h5>Comic shop locator</h5>
                        <div class="img img-3"></div>
                    </div>
                    <div class="additional-banner-wrapper__content">
                        <h5>Subscriptions</h5>
                        <div class="img img-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="overlay-delete-message " id="overlay-delete-message">
    <div class="overlay-delete-message__wrapper">
        <h2>Are you sure you want to delete this comic?</h2>
        <div class="row">
            <form class="col-12" action="{{ route('comics.destroy' , $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" id="delete-btn-delete">Delete</button>
            </form>
            <div class="col-12">
                <button type="submit" value="cancel" class="btn btn-primary" id="delete-btn-cancel">Cancel</button>
            </div>
        </div>
    </div>
</div>
