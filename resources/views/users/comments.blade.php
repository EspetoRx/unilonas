@extends('layouts.base')
@section('pageTitle', 'Comentário de usuário')

@section('content')

@include('users.navigation')

<h1 class="h6 mt-3">Comentários ({{ $user->comments_count }})</h1>

<ul class="profile-comments-list p-0 mt-4">

    @forelse ($user->comments as $comment)
    <li class="mb-4">
        <small>
            <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a> 
            comentou em
            <a href="{{ route('posts.show', $comment->post->slug) }}#comment-{{ $comment->id }}">{{ $comment->post->title }}</a> 
            <span>{{ $comment->created_at->diffForHumans() }}</span>
        </small>

        <p>{{ str_limit($comment->body, 150) }}</p>
    </li>

    @empty
    <p>Sem comentários</p>
    @endforelse
</ul>

{{ $comments->links() }}

@endsection
