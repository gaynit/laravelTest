@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
           
                <div class="col-md-3">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            Dashboard
                        </a>
                        <a href="/home" class="list-group-item list-group-item-action">Home</a>
                        <a href="/home/friends" class="list-group-item list-group-item-action">Friends</a>
                        <a href="#" class="list-group-item list-group-item-action">Settings</a>
                    </div>
                </div>
            
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        {{ __('You are logged in!') }}
                        
                        <h1>Welcome To Friend List Manager</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
