@extends('base')
@section('content')
    <div class="contact1">
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="{{ URL::asset('images/img-01.png') }}" alt="IMG">
            </div>
            <form class="contact1-form validate-form" action={{ route('inputs_con') }} method="GET">
                @csrf
                <span class="contact1-form-title" dir="rtl" lang="ar">
                    {{__('masseges.button_payment')}}
                </span>
                <div class="wrap-input1 validate-input" data-validate="Name is required">
                    <input class="input1" type="number" name="input_number" placeholder="{{__('masseges.Payment_Value')}}" dir="rtl"
                        lang="ar">
                    <span class="shadow-input1" dir="rtl" lang="ar"></span>
                    @error('input_number')
                        {{ $message }}
                    @enderror
                </div>
                <div class="wrap-input1 validate-input" data-validate="Message is required">
                    <textarea class="input1" name="message" placeholder="{{__('masseges.Details_Payment')}}" dir="rtl" lang="ar"></textarea>
                    <span class="shadow-input1"></span>
                    @error('message')
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
                <input type="hidden" name="wallet"
                    value=@isset($_GET['wallet']) {{ $_GET['wallet'] }} @endisset>
            </form>
        </div>
    </div>
@endsection
