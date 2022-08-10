@extends('admin.master.app')
@section('content')
    <!-- /.card -->
    @if ($massage = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Succwss!</h5>
            {{ $massage }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">View service</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>details</th>
                        <th>image</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->detail }}</td>
                            <td><img src="images/{{ $item->image }}" height="100" alt="noimage"></td>
                            <td>
                                <form action="{{ url('admin/services/destroy', $item->id) }}" method="POST">
                                    <a href="{{ url('admin/services/edit', $item->id) }}" class="btn btn-app bg-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @csrf
                                    @method('Delete')
                                    <button type="submit" class="btn btn-app bg-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                </form>
                            </td>

                        </tr>
                    @endforeach



                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
