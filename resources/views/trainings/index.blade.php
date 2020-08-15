@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Trainings Index') }}</div>

                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Trainer</th>
                                <th>Creator</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($trainings as $training)
                            <tr>
                                <td>{{ $training->id }}</td>
                                <td>{{ $training->title }}</td>
                                <td>{{ $training->description }}</td>
                                <td>{{ $training->trainer }}</td>
                                <td>{{ $training->user->name }}</td>
                                <td>
                                    <a href="{{ route('training.show', $training) }}" class="btn btn-info">SHOW</a>
                                    <a href="{{ route('training.edit', $training) }}" class="btn btn-success">EDIT</a>
                                    <a href="{{ route('training.delete', $training ) }}" class="btn btn-danger" onclick="return confirm('Are you sure')">Delete</a>
                                </td>

                            </tr>
                            @endforeach
                            </tbody>

                        </table>
                        {{ $trainings->links() }}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
