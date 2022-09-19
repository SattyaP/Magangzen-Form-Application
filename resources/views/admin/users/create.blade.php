@extends('admin.layout')

@section('title', 'Create')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-8">
            <div class="card card-default">
            @include('admin.partials.flash')
                <div class="card-header card-header-border-bottom">
                    <h2>Create User</h2>
                </div>
                <div class="card-body">
                {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                    <!-- Name Form Input -->
                    <div class="form-group @if ($errors->has('name')) has-error @endif">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                    </div>

                    <!-- email Form Input -->
                    <div class="form-group @if ($errors->has('email')) has-error @endif">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                        @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                    </div>

                    <!-- password Form Input -->
                    <div class="form-group @if ($errors->has('password')) has-error @endif">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                        @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                    </div>
                    <!-- Confirm Password -->
                    <div class="form-group @if ($errors->has('password')) has-error @endif">
                        {!! Form::label('confirm-password', 'Confirm Password') !!}
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                        @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                    </div>

                    <!-- Roles Form Input -->
                    <div class="form-group @if ($errors->has('roles')) has-error @endif">
                        {!! Form::label('roles[]', 'Roles') !!}
                        {!! Form::select('roles[]', $roles, isset($user) ? $user->roles->pluck('id')->toArray() : null,  ['class' => 'form-control', 'multiple']) !!}
                        @if ($errors->has('roles')) <p class="help-block">{{ $errors->first('roles') }}</p> @endif
                    </div>
                    <div class="form-footer pt-5 border-top">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                    </div>
                </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection