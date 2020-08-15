@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Training Show') }} - CREATOR: {{ $training->user->name }}</div>

                    <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $training->title }}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" rows="5" cols="20" class="form-control" readonly>{{ $training->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Trainer</label>
                                <input type="text" class="form-control" name="trainer" value="{{ $training->trainer }}" readonly>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
