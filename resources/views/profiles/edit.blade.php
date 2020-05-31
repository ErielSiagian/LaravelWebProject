@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
    
        <div class="row">

        <div class="col-8 offset-2">

        <div class="row">
            <h1>Edit Profile</h1>
        </div>

        <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label text-md-left">{{ __('Titile') }}</label>
        
    
        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" title="title" value="{{ old('title') ?? $user->profile->title }}" required autofocus>

        @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
        </div>




        <div class="form-group row">
        <label for="description" class="col-md-4 col-form-label text-md-left">{{ __('Description') }}</label>
        
    
        <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" title="description" value="{{ old('description') ?? $user->profile->description }}" required autofocus>

        @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
        </div>



        <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label text-md-left">{{ __('URL') }}</label>
        
    
        <input id="url" type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" title="url" value="{{ old('url') ?? $user->profile->url }}" required autofocus>

        @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('url') }}</strong>
            </span>
        @endif
        </div>


        <div class="row">
        <label for="image" class="form-control-file pt-3" id="image" name="image">Profile Image</label>
        
        <div class="col-md-6">
        <input type="file" class="form-control-file" id="image" name="image">
        @if ($errors->has('image'))
            <strong>{{ $errors->first('image') }}</strong> 
        @endif
        </div>
        </div>
    
        <div class="row pt-4">
        <button class="btn btn-primary">Save Profile</button>
        </div>





    </div>
    </div>
    </form>
</div>
@endsection
