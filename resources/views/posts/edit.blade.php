@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <h1>Update post</h1>
                <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title <span class="require">*</span></label>
                        <input type="text" class="form-control" name="title" value="{{$post->title}}"/>
                    </div>

                    <div class="form-group">
                        <label for="description">Content</label>
                        <textarea rows="5" class="form-control" name="content">{{$post->content}}</textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                        <a href="{{ route('posts.index') }}" class="btn btn-info">GERİ</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

