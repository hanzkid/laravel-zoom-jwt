@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!. Join this <a href="https://us02web.zoom.us/j/3331478332?pwd=d1lSVlVFcUI2QjZzMEVmd0VXeEhkUT09&">Link</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
