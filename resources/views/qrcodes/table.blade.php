<div class="table-responsive">
    <table class="table" id="qrcodes-table">
        <thead>
            <tr>
                <th>User Id</th>
                <th>Website</th>
                <th>Company Name</th>
                <th>Product Name</th>
                <th>Product Url</th>
                <th>Callback Url</th>
                <th>Qrcode Path</th>
                <th>Amount</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($qrcodes as $qrcode)
            <tr>
                <td>{!! $qrcode->user_id !!}</td>
                <td>{!! $qrcode->website !!}</td>
                <td>{!! $qrcode->company_name !!}</td>
                <td>{!! $qrcode->product_name !!}</td>
                <td>{!! $qrcode->product_url !!}</td>
                <td>{!! $qrcode->callback_url !!}</td>
                <td>{!! $qrcode->qrcode_path !!}</td>
                <td>{!! $qrcode->amount !!}</td>
                <td>{!! $qrcode->status !!}</td>
                <td>
                    {!! Form::open(['route' => ['qrcodes.destroy', $qrcode->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('qrcodes.show', [$qrcode->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('qrcodes.edit', [$qrcode->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
