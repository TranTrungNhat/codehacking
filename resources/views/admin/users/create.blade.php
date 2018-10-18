@extends ('layouts.admin')

@section('content')

<h1>Create User</h1>

{!! Form::open(['method' => 'POST', 'action'=>'AdminUsersController@store']) !!}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('role_id', 'Role') }}
        {{ Form::select('role_id',[''=>'Select role']+$roles, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('status', 'Status') }}
        {{ Form::select('status',array(1=>'Active',0 => 'Inactive') ,0, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'bnt bnt-primary']) !!}
    </div>
{!! Form::close() !!}

@stop