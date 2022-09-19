@extends('admin.layout')


@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-8">
            <div class="card card-default">
            @include('admin.partials.flash')
                <div class="card-header card-header-border-bottom">
                    <h2>Create Role</h2>
                </div>
                <div class="card-body">
                {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <div class="form-group ">
                        {!! Form::label('permission :', 'Permission :') !!}
                        <br>
                        @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                            {{ $value->name }}</label>
                        <br/>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer pt-5 border-top">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection


