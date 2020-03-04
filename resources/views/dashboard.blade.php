@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @if(Auth::user()->auth_level === 1)
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Driver's Dashboard</div>

                <div class="card-body">

                    You are logged in as a <b>Driver</b>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(Auth::user()->auth_level === 2)
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Partners's Dashboard</div>

                <div class="card-body">

                    You are logged in as a <b>Partner</b>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
