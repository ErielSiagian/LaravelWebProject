@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf

    
    <div class="row">
        <div class="col-8 offset-2">


        <div class="row">
            <h1>Add New Post</h1>
        </div>
        <div class="form-group row">
        <label for="caption" class="col-md-4 col-form-label text-md-left">{{ __('Post Caption') }}</label>
        
    
        <input id="caption" type="text" class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}" name="caption" caption="caption" value="{{ old('caption') }}" required autofocus>

        @if ($errors->has('caption'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('caption') }}</strong>
            </span>
        @endif
        </div>
    
    


    <div class="row">
        <label for="image" class="form-control-file pt-3" id="image" name="image">Post Image</label>
        
        <div class="col-md-6">
        <input type="file" class="form-control-file" id="image" name="image">
        @if ($errors->has('image'))
            <strong>{{ $errors->first('image') }}</strong> 
    @endif
    </div>
    </div>
    
    <div class="row pt-4">
        <button class="btn btn-primary">Add New Post</button>
    </div>

    </form>
</div>
@endsection
