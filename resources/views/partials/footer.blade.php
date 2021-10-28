<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="footer__links">
                <div class="col">
                    <ul><h3>DC COMICS</h3>
                        @foreach ($links['dccomics'] as $key => $link)
                            <li><a href="{{$link}}">{{$key}}</a></li>
                        @endforeach
                    </ul>
                    <ul><h3>SHOP</h3>
                        @foreach ($links['shop'] as $key => $link)
                            <li><a href="{{$link}}">{{$key}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <ul><h3>DC</h3>
                        @foreach ($links['dc'] as $key => $link)
                            <li><a href="{{$link}}">{{$key}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col">
                    <ul><h3>SITES</h3>
                        @foreach ($links['sites'] as $key => $link)
                        <li><a href="{{$link}}">{{$key}}</a></li>
                    @endforeach
                    </ul>
                </div>

            </div>
            <div class="footer__img">
                <img src="{{asset('images/dc-logo-bg.png')}}" alt="DC logo">
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__signup">
                <button> SIGN UP NOW!</button>
            </div>
            <div class="footer__socials">
                <h4>FOLLOW US</h4>
                <img src="{{asset('images/footer-facebook.png')}}" alt="" class="footer__social">
                <img src="{{asset('images/footer-periscope.png')}}" alt="" class="footer__social">
                <img src="{{asset('images/footer-twitter.png')}}" alt="" class="footer__social">
                <img src="{{asset('images/footer-youtube.png')}}" alt="" class="footer__social">
                <img src="{{asset('images/footer-periscope.png')}}" alt="" class="footer__social">
            </div>
        </div>
    </div>
</footer>
