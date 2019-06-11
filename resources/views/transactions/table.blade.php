<div class="table-responsive">
    <table class="table" id="transactions-table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Amount (in &#x20A6;)</th>
                <th>Buyer Name</th>
                <th>Payment Method</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transaction)
            <tr>
                <td>
                    <a href="/qrcodes/{!! $transaction->qrcode['id'] !!}">
                        {!! $transaction->qrcode['product_name'] !!}
                    </a>
                </td>
                <td>{!! $transaction->amount !!}</td>
                <td>{!! $transaction->user['name'] !!}</td>
                <td>{!! $transaction->payment_method !!}</td>
                <td>{!! $transaction->status !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>