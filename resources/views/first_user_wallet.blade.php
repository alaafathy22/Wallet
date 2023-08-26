@extends('base')
@section('content')
    <div class="contact1">
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="{{ URL::asset('images/img-01.png') }}" alt="IMG">
            </div>
            <form class="contact1-form validate-form" action={{ route('user_wallet') }} method="GET">
                @csrf
                <span class="contact1-form-title" dir="rtl" lang="ar">
                    
                    {{__('masseges.createNewWallet')}}
                </span>
                <div class="wrap-input1 validate-input" data-validate="Name is required">
                    <input class="input1" type="number" step="any" name="input_number_wallet" placeholder="{{__('masseges.Payment_Value')}}"
                        dir="rtl">
                    <span class="shadow-input1"></span>
                    @error('input_number_wallet')
                        {{ $message }}
                    @enderror
                </div>
                <div class="wrap-input1 validate-input" data-validate="Message is required">
                    <input class="input1" type="text" step="any" name="name_wallet" placeholder="{{__('masseges.wallet_Title')}}"
                        dir="rtl">
                    <span class="shadow-input1"></span>
                    @error('name_wallet')
                        {{ $message }}
                    @enderror
                </div>
                <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn">
                        <span>
                            {{__('masseges.createWallet')}}
                        </span>
                    </button>
                </div>
                @isset($_GET['wallet'])
                    <input type="hidden" name="wallet" value={{ $_GET['wallet'] }}>
                @endisset
            </form>
        </div>
    </div>
@endsection
