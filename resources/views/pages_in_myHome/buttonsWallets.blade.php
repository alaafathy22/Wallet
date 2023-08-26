<div class="container">
    <form action="{{ route('sel_show') }}" method="GET" lang="ar">
        <div class="title_wallet">
            <p>{{__('masseges.namesWallets')}}</p>
        </div>
        <div class="wallet_name">
            @isset($sel_wallet)
                @foreach ($sel_wallet as $sel_wallet_wallet)
                    @if ($wallet == $sel_wallet_wallet->id)
                        @php $class = "active" @endphp
                    @else
                        @php $class = " " @endphp
                    @endif
                    <button class="button_wallet {{ $class }} " value={{ $sel_wallet_wallet->id }}
                        name="wallet">{{ $sel_wallet_wallet->name_wallet }}</button>
                @endforeach
            @endisset
        </div>
    </form>
</div>