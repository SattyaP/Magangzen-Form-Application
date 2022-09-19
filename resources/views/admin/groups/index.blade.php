@extends('admin.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                @can('group-create')
                <a class="btn btn-success" href="{{ route('groups.create') }}"> Create New group</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($groups as $group)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $group->name }}</td>
	        <td>{{ $group->detail }}</td>
	        <td>
                <form action="{{ route('groups.destroy',$group->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('groups.show',$group->id) }}">Show</a>
                    @can('group-edit')
                    <a class="btn btn-primary" href="{{ route('groups.edit',$group->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('group-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>
@endsection

    {!! $groups->links() !!}