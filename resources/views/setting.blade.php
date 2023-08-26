{{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false" v-pre>
    current language => {{ App::currentLocale() == 'en' ? 'english' : 'arabic' }}
</a>
</br>
<a class="dropdown-item" href="{{ url(App::currentLocale() == 'en' ? 'index' : 'en/setting') }}">
    languages available =>{{ App::currentLocale() == 'en' ? 'arabic' : 'english' }}
</a> --}}
<form action="{{route('change_language')}}" method="GET">
    @csrf
    @if(App::currentLocale() == 'en')
    You are using language English
    you have language <button name="lang"  value="ar">arabic</button> available if you want to change , please click to change it
    @else
    You are useing lanugae Arabic
    you have language <button name="lang"  value="en">english</button> available if you want to change , please click to change it
    @endif
    <a href="/home">Or go page home without any change</a>
</form> 

