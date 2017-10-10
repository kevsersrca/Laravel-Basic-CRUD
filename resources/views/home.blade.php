@extends('layouts.panel')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @if(isset($posts))
                    <div class="panel-body">
                        <a href="{{ route('posts.index', ['posts' => $posts]) }}" class="btn btn-success">ALL POST</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
