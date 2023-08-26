@extends('base')
@section('content')
    <section class="all_contents" id="all_contents">
        {{-- ======================================== start head page to show result wallets  ========================================= --}}
        @include('pages_in_myHome/headPage')    

        {{-- ======================================== end  head page to show result wallets ========================================= --}}
        {{-- ======================================== start middle page  ========================================= --}}
        @include('pages_in_myHome/middlePgae')    

        {{-- ======================================== end middle page  ========================================= --}}

        {{-- ======================================== start names buttons wallets  ========================================= --}}
        @include('pages_in_myHome/buttonsWallets')    

        {{-- ======================================== end names buttons wallets  ========================================= --}}
        {{-- ======================================== start table to show data wallets  ========================================= --}}
        @include('pages_in_myHome/tableToShowDataWallets')    

        {{-- ======================================== end table to show data wallets  ========================================= --}}
    </section>
    <div class="container" style="display: flex;justify-content: center;">
        {{ $sel->links() }}
    </div>
@endsection
