@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">{{ __('Training Form') }}</div>

                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" rows="5" cols="20" class="form-control">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Trainer</label>
                                <input type="text" class="form-control" name="trainer" value="{{ old('trainer') }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create New Training</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
