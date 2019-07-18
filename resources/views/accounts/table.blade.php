<div class="table-responsive">
    <table class="table" id="accounts-table">
        <thead>
            <tr>
                <th>User</th>
                <th>Balance (in &#x20A6;)</th>
                <th>Total Credit (in &#x20A6;)</th>
                <th>Total Debit (in &#x20A6;)</th>
                <th>Status</th>
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
                <td>{!! ($account->applied_for_payout == 1 ? 'Payout request made. Payment pending' : ($account->is_paid == 1 ? 'Payout paid' : 'No payment request')) !!}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{!! route('accounts.edit', [$account->id]) !!}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
