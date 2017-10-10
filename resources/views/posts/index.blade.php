@extends('layouts.panel')

@section('content')
    <div class="container">
        <h2>Post Table</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-success"> POST CREATE</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td><a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn btn-info">Edit</a></td>
                    <td>
                        <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                    <td><a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-warning">View</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
