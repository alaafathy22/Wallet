<div class="container">
    <div class="row">
        <div class="details col-lg-4 col-sm-12" lang="ar">
            <span>{{__('masseges.sumWallets')}}</span>
            @isset($sel_sum)
                <span>{{ $sel_sum }}</span>
            @endisset
        </div>

        <div class="details col-lg-4 col-sm-12">
            <form action="{{ route('your_value') }}" method="GET" lang="ar">
                <input type="hidden" name="wallet"
                    value=@if (isset($_GET['wallet']) and isset($wallet)) @php echo $wallet = $_GET['wallet'] @endphp
                    @else
                        @php echo $wallet @endphp @endif>
                <span>{{__('masseges.WalletMoney')}}</span>
                @csrf
                <span><input type="number" name="input_value_you_Have" value={{ $sel_value }}
                        class="data_wallet_value"></span>
                <span><input type="submit" name="click_to_add_Your_value" value="{{__('masseges.buttonEdit')}}" class="bubbly-button"></span>
                @error('input_value_you_Have')
                    <div class="alert alert-danger custome_alert" role="alert" style="text-align: center">
                        {{ $message }}
                    </div>
                @enderror
                @if (session()->has('message'))
                    <div class="alert alert-success custome_alert" style="text-align: center">
                        {{ session()->get('message') }}
                    </div>
                @endif
            </form>
        </div>
        <div class="details col-lg-4 col-sm-12" dir="" lang="ar">
            <span>{{__('masseges.WalletsHave')}}</span>
            <span>
                @isset($sel_value)
                    @php echo $sel_value - $sel_sum; @endphp
                @endisset
            </span>
        </div>
    </div>
</div>
