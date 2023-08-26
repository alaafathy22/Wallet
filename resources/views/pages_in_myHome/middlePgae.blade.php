<div class="container">
    <div class="row">
        <div class="col details2">
            <form action="{{ route('inputs') }}" method="GET">
                @csrf
                <button type="submit" dir="" lang="ar" class="bubbly-button">
                    <span>{{__('masseges.button_payment')}}</span>
                </button>
                <input type="hidden" name="wallet"
                    value=@if (isset($_GET['wallet']) and isset($wallet)) @php echo $wallet = $_GET['wallet'] @endphp
                    @else
                        @php echo $wallet @endphp @endif>
            </form>
        </div>
        <div class="col details2">
            <form action="{{ route('first_user_wallet') }}" method="GET">
                @csrf
                <button dir="" lang="ar" class="bubbly-button">
                    <span>{{__('masseges.button_create_new_wallet')}}</span>
                </button>
                <input type="hidden" name="wallet"
                    value=@if (isset($_GET['wallet']) and isset($wallet)) @php echo $wallet = $_GET['wallet'] @endphp
                    @else
                        @php echo $wallet @endphp @endif>
            </form>
        </div>
    </div>
</div>