@extends('admin.layout')


@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-default">
                <div class="card-header card-header-botder-bottom">
                    <h2>Show User</h2>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    {!! Form::label('name', 'Name :') !!} {{ $user->name}}
                    </div>
                    <div class="form-group">
                    {!! Form::label('email', 'Email :') !!} {{ $user->email}}
                    </div>
                    <div class="form-group">
                    <span>Roles :</span>
                        @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <label class="badge badge-sm badge-success">{{ $v }}</label>
                    @endforeach
                    @endif 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection