<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('balance', 'Balance:') !!}
    {!! Form::number('balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_balance', 'Total Balance:') !!}
    {!! Form::number('total_balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Debit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_debit', 'Total Debit:') !!}
    {!! Form::number('total_debit', null, ['class' => 'form-control']) !!}
</div>

<!-- Withdrawal Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('withdrawal_method', 'Withdrawal Method:') !!}
    {!! Form::text('withdrawal_method', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_name', 'Bank Name:') !!}
    {!! Form::text('bank_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Branch Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_branch', 'Bank Branch:') !!}
    {!! Form::text('bank_branch', null, ['class' => 'form-control']) !!}
</div>

<!-- Bank Account Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_account', 'Bank Account:') !!}
    {!! Form::text('bank_account', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- Applied For Payout Field -->
<div class="form-group col-sm-6">
    {!! Form::label('applied_for_payout', 'Applied For Payout:') !!}
    {!! Form::number('applied_for_payout', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Paid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_paid', 'Is Paid:') !!}
    {!! Form::number('is_paid', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Date Applied Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_date_applied', 'Last Date Applied:') !!}
    {!! Form::date('last_date_applied', null, ['class' => 'form-control','id'=>'last_date_applied']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#last_date_applied').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Last Date Paid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_date_paid', 'Last Date Paid:') !!}
    {!! Form::date('last_date_paid', null, ['class' => 'form-control','id'=>'last_date_paid']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#last_date_paid').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Other Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('other_details', 'Other Details:') !!}
    {!! Form::textarea('other_details', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('accounts.index') !!}" class="btn btn-default">Cancel</a>
</div>
