@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div id="postlist">
                        <div class="panel">
                        <div class="panel-heading">
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h3 class="pull-left">{{ $post->title }}</h3>
                                    </div>
                                    <div class="col-sm-3">
                                        <h4 class="pull-right">
                                            <small><em>{{ $post->created_at }}</em></small>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            {{ $post->content }}
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

