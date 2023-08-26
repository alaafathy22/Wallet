@extends('base')
@section('content')
    <div class="contact1">
        <div class="container-contact1">
            <div class="contact1-pic js-tilt" data-tilt>
                <img src="{{ URL::asset('images/img-01.png') }}" alt="IMG">
            </div>
            <form class="contact1-form validate-form" action={{ route('real_edit') }} method="GET">
                @csrf
                @isset($id, $wallet, $update_allsum)
                    <input type="hidden" value={{ $id }} name="edit_user_id">
                    <input type="hidden" value={{ $wallet }} name="wallet">
                    <input type="hidden" value={{ $update_allsum }} name="update_allsum">
                @endisset
                <span class="contact1-form-title" dir="" lang="ar">
                    {{ __('masseges.buttonEdit') }}
                </span>
                <div class="wrap-input1 validate-input" data-validate="Name is required">
                    @isset($price)
                        <input class="input1" type="number" name="edit_price" placeholder="القيمة" dir="rtl"
                            lang="ar" value={{ $price }}>
                    @endisset
                    <span class="shadow-input1"></span>
                    @error('edit_price')
                        {{ $message }}
                    @enderror
                </div>
                <div class="wrap-input1 validate-input" data-validate="Message is required">
                    @isset($name)
                        <textarea class="input1" name="edit_name" placeholder="التفاصيل" dir="rtl" lang="ar">{{ $name }}</textarea>
                    @endisset
                    <span class="shadow-input1"></span>
                    @error('edit_name')
                        {{ $message }}
                    @enderror
                </div>
                <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn">
                        <span>
                            EDIT
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
