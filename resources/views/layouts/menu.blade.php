<li class="{{ Request::is('qrcodes*') ? 'active' : '' }}">
    <a href="{!! route('qrcodes.index') !!}"><i class="fa fa-qrcode"></i><span>Qrcodes</span></a>
</li>

<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-user"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('transactions*') ? 'active' : '' }}">
    <a href="{!! route('transactions.index') !!}"><i class="fa fa-arrow-up"></i><span>Transactions</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-users"></i><span>Users</span></a>
</li>

