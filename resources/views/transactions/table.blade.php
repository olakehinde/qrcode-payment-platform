<div class="table-responsive">
    <table class="table" id="transactions-table">
        <thead>
            <tr>
                <th>Buyer Name</th>
                <th>Product Name</th>
                <th>Qrcode Owner</th>
                <th>Amount</th>
                <th>Payment Method</th>
                <th>Message</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transaction)
            <tr>
                <td>{!! $transaction->user['name'] !!}</td>
                <td>{!! $transaction->qrcode['product_name'] !!}</td>
                <td>{!! $transaction->qrcode_owner['name'] !!}</td>
                <td>{!! $transaction->amount !!}</td>
                <td>{!! $transaction->payment_method !!}</td>
                <td>{!! $transaction->message !!}</td>
                <td>{!! $transaction->status !!}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{!! route('transactions.show', [$transaction->id]) !!}" class='btn btn-info'>
                            <i class="glyphicon glyphicon-eye-open"></i>
                        </a>
                    </div> 
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
