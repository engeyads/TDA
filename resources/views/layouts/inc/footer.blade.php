<footer class="footer py-4">
    <div class="container">

    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">{{ __('footer.rights') }} {{ now()->year }} ©</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <div>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                @if( __('footer.language') !== "tr")
                    <div class="poweredby">{{ __('footer.powered_by') }} <img src="{{ asset('assets/img/inspire.png') }}"></div>
                @else
                    <div class="poweredby"><img src="{{ asset('assets/img/inspire.png') }}"> {{ __('footer.powered_by') }}</div>
                @endif
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">{{ __('footer.policy') }}</a>
                <a href="#!">{{ __('footer.terms') }}</a>
            </div>
        </div>
    </div>
</footer>
