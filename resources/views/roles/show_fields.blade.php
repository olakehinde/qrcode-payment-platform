<!-- Created At Field --> 
<div class="form-group">
    {!! Form::label('created_at', 'Created:') !!}
    <p>{!! $role->created_at->format('D d M, Y') !!}</p>
</div>
<hr>

@if(count($users) > 0)
	<h4>List of {{ $role->name }}s </h4>
	@include('users.table')
@else
	<h4>No {{ $role->name }}s created yet.</h4>
@endif