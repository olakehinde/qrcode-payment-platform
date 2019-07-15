<div class="table-responsive">
    <table class="table" id="accounts-table">
        <thead>
            <tr>
                <th>User</th>
                <th>Balance (in &#x20A6;)</th>
                <th>Total Credit (in &#x20A6;)</th>
                <th>Total Debit (in &#x20A6;)</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($accounts as $account)
            <tr>
                <td><a href="{!! route('accounts.show', [$account->id]) !!}">{!! $account->user['email'] !!}</a></td>
                <td>{!! number_format($account->balance) !!}</td>
                <td>{!! number_format($account->total_balance) !!}</td>
                <td>{!! number_format($account->total_debit) !!}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{!! route('accounts.edit', [$account->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
