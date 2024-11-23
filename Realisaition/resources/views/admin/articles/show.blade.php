@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title text-info mb-0">Article Details</h3>
                <a class="btn btn-success" href="/dashboard/articles/{{ $article['id'] }}/edit">Modifier</a>
            </div>
            <div class="card-body">
                <h5 class="card-text">Title: <strong>{{ $article['title'] }}</strong></h5>
                <p class="card-text">Content: <strong>{{ $article['content'] }}</strong></p>
            </div>
        </div>
    </div>
@endsection
