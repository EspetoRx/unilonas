@extends('layouts.base')
@section('pageTitle', "User $user->name")

@section('content')

@include('users.navigation')

<div class="row mt-3">

    <div class="col">
        <img src="{{ $armazenamento->url('public/avatars/' . $user->avatar) }}" class="img-thumbnail">
    </div>

    <div class="col-7 p-0">

        <h3 class="inline">{{ $user->name }}</h3>

        @if ($user->hasRole('admin'))
        <span class="badge badge-primary">Administrador</span>
        @endif

        <p>
            <small>
                {{ $user->posts_count }} {{ str_plural('post', $user->posts_count) }}, 
                {{ $user->comments_count }} {{ str_plural('comment', $user->comments_count) }}
            </small>
        </p>

    </div>

    <div class="col-3">

        <ul class="list-unstyled text-left mt-3">

            <li class="fs-14 text-right">Membro por

                @if ($user->created_at->diff(Carbon\Carbon::now())->days < 1)
                <abbr title="{{ $user->created_at }}">
                    {{ $user->created_at->diffInHours(Carbon\Carbon::now()) }} horas
                </abbr>
                @else
                <abbr title="{{ $user->created_at }}">
                    {{ $user->created_at->diffInDays(Carbon\Carbon::now()) }} dias
                </abbr>
                @endif

            </li>
        </ul>

    </div>
</div>

<div class="row mt-5">

    {{-- Posts --}}
    <div class="col-12 col-lg-6 mb-4 mb-lg-0">

        <h6>
            <a href="{{ route('users.posts', $user->id) }}">Publicações ({{ $user->posts_count }})</a>
        </h6>

        <div class="card border-0">
            <ul class="list-group list-group-flush">

                @forelse ($latestPosts as $post)
                <li class="list-group-item px-0">

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('posts.show', $post->slug) }}" class="w-75">
                            {{ $post->title }}
                        </a>
                        <small class="text-muted ml-auto">
                            {{ $post->created_at->diffForHumans() }}
                        </small>
                    </div>

                </li>
                @empty
                <p>Sem publicações</p>
                @endforelse
            </ul>
        </div>

        @if ($latestPosts->hasMorePages())
        <a href="#" class="btn btn-link btn-sm pl-0">Ver todas →</a>
        @endif

    </div>

    {{-- Comments --}}
    <div class="col-12 col-lg-6"> 

        <h6>
            <a href="{{ route('users.comments', $user->id) }}">
                Comentários ({{ $user->comments_count }})
            </a>
        </h6>

        <ul class="profile-comments-list p-0 mt-3">

            @forelse ($latestComments as $comment)
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

        @if ($latestComments->hasMorePages())
        <a href="{{ route('users.comments', $user->id) }}" class="btn btn-link btn-sm pl-0">Ver todos →</a>
        @endif

    </div>
</div>

</div>
@endsection
