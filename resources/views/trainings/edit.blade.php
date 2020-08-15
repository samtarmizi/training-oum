@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Training Edit') }} - CREATOR: {{ $training->user->name }}</div>

                    <div class="card-body">
                        <form action="{{ route('training.update', $training) }}" method="POST">
                            @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $training->title }}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" rows="5" cols="20" class="form-control">{{ $training->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Trainer</label>
                            <input type="text" class="form-control" name="trainer" value="{{ $training->trainer }}">
                        </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Edit Training</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
