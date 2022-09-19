@extends('admin.layout')


@section('content')
<div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Roles</h2>
                    </div>
                    <div class="card-body">
                    @include('admin.partials.flash')
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </thead>
                            @foreach ($roles as $key => $role)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                                    @can('role-edit')
                                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                    @endcan
                                    @can('role-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {!! $roles->render() !!}
                </div>
                <div class="card-footer text-right">
                        @can('role-create')
                            <a class="btn btn-primary" href="{{ route('roles.create') }}"> Create New Role</a>
                        @endcan
                        </div>
                    </div>
            </div>
        </div>
</div>
@endsection