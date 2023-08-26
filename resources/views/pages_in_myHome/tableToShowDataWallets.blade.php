<div class="container">
    <div class="title_wallet">
        <p>{{__('masseges.wallet_Data')}}</p>
    </div>
    <table id="table_show" class="table table-dark table-striped" style="text-align: center" lang="ar">
        <thead id="table_thead">
            <tr>
                <td style="word-break: break-all; width:400px">{{__('masseges.Details_Payment')}}</td>
                <td>{{__('masseges.Payment_Value')}}</td>
                <td>{{__('masseges.Remove_Payment')}}</td>
                <td>{{__('masseges.Edit_Payment')}}</td>
            </tr>
        </thead>
        <tbody id="table_tbody">
            @isset($sel)
                @forelse($sel as $selectall)
                    <tr>
                        <td>
                            <div class="spe_td"> {{ $selectall->details }}</div>
                        </td>
                        <td>
                            <div>{{ $selectall->price }}</div>
                        </td>
                        <td>
                            <a href="del/{{ $selectall->id }}/@php echo $wallet; @endphp" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                        <td>
                            @php $update_allsum = $sel_sum - $selectall->price; @endphp
                            <a href="edit/{{ $selectall->details }}/{{ $selectall->price }}/{{ $selectall->id }}/{{ $wallet }}/{{ $update_allsum }}"
                                class="btn btn-primary edit_another_page">
                                <i class="far fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="font-size:26px;">{{__('masseges.if_you_have_not_Data')}}</td>
                    </tr>
                @endforelse
            @endisset
        </tbody>
    </table>
</div>