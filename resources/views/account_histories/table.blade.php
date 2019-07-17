<div class="table-responsive">
    <table class="table" id="accountHistories-table">
        <thead>
            <tr>
                <th>User</th>
                <th>Account ID</th>
                <th>Status Message</th>
            </tr>
        </thead>
        <tbody>
        @foreach($accountHistories as $accountHistory)
            <tr>
                <td>{!! $accountHistory->user['name'] !!}</td>
                <td>{!! $accountHistory->account_id !!}</td>
                <td>{!! $accountHistory->status_message !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
