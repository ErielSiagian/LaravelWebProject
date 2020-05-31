@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
        <img src="/storage/{{$post->image}}" class="w-100">
        </div>

        <div class="align-items-center">
            <div class="pr-3">
            <img src="/svg/403.svg" class="rounded-circle w-100" style="max-width:40px;">
            
            <span class="font-weight-bold">
                <a href="/profile/{{$post->user->id}}">
                <span class="text-dark">
                    {{$post->user->username}}
                </a>|
                <a href="#" class="pl-3">Follow</a>
                </span>
        </div>

           
            
           
            <hr>
            <p>
                <span class="font-weight-bold">
                    <a href="/profile/{{$post->user->id}}">
                    <span class="text-dark">
                        {{$post->user->username}}
                    </span>
                    </a>
                </span>
                {{$post->caption}}
           </p>
            
        </div>
    </div>
</div>
@endsection
