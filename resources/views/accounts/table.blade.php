<div class="table-responsive">
    <table class="table" id="accounts-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Balance</th>
        <th>Total Balance</th>
        <th>Total Debit</th>
        <th>Withdrawal Method</th>
        <th>Email</th>
        <th>Bank Name</th>
        <th>Bank Branch</th>
        <th>Bank Account</th>
        <th>Other Details</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($accounts as $account)
            <tr>
                <td>{!! $account->user_id !!}</td>
            <td>{!! $account->balance !!}</td>
            <td>{!! $account->total_balance !!}</td>
            <td>{!! $account->total_debit !!}</td>
            <td>{!! $account->withdrawal_method !!}</td>
            <td>{!! $account->email !!}</td>
            <td>{!! $account->bank_name !!}</td>
            <td>{!! $account->bank_branch !!}</td>
            <td>{!! $account->bank_account !!}</td>
            <td>{!! $account->other_details !!}</td>
                <td>
                    {!! Form::open(['route' => ['accounts.destroy', $account->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('accounts.show', [$account->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('accounts.edit', [$account->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
