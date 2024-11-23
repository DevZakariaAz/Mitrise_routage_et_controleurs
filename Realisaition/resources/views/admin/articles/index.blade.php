@extends('layouts.app')

@section('content')
    <h2>Liste des Articles</h2>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <x-article-card :article="$article" />
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@include('partials.flash-message')



