<div class="flex justify-center pt-8 sm:justify-start sm:pt-0 language" style="direction:ltr;font-family:cairo">
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
            <!--<span class="ml-2 mr-2 text-gray-700"><img height="20px" src="{{ asset('assets/img/languages/'.$locale_name.'.png') }}"></span>-->
        @else
            <a class="ml-1 underline ml-2 mr-2" href="language/{{ $available_locale }}">
                <span><img height="20px" src="{{ asset('assets/img/languages/'.$locale_name.'.png') }}"> {{ $available_locale }}</span>
            </a>
        @endif
    @endforeach
</div>
