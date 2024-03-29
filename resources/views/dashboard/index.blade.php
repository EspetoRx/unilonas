@extends('layouts.dashboard.base')
@section('pageTitle', 'Painel Inicial')

@section('content')

{{ Breadcrumbs::render('dashboard') }}

<div class="container-fluid">

    @if (!auth()->user()->hasRole('user'))
    <div id="app">
        <div class="row">
            <callout title="Usuários" value="{{ $users_count }}" color="blue"></callout>
            <callout title="Publicações" value="{{ $posts_count }}" color="yellow"></callout>
            <callout title="Comentários" value="{{ $comments_count }}" color="red"></callout>
        </div>
    </div>
    @endif

    <div class="row mt-5">

        <div class="col-lg-6">

            <h6 class="fw-400 c-777">Últimas Publicações</h6>

            @if ($posts_count)
            <div class="my-3 px-2 py-1 bg-white rounded box-shadow">
                <table class="table table-borderless fs-14 mb-0">

                    <thead>
                        <tr class="thead-row">
                            <th scope="col">Título</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Criação</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($posts as $post)
                        <tr>

                            <td>
                                <a href="{{ route('posts.show', $post->id) }}">
                                    {{ $post->title }}
                                </a>
                            </td>

                            <td>
                                <a href="{{ route('users.show', $post->user->id) }}">
                                    {{ $post->user->name }}
                                </a>
                            </td>

                            <td>
                                {{ $post->created_at->diffForHumans() }}
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @else
            <p>Não há publicações Encontradas</p>
            @endif
        </div>

        <div class="col-lg-6">

            <h6 class="fw-400 c-777">Últimos comentários</h6>

            @if ($comments_count)
            <div class="my-3 px-2 py-1 bg-white rounded box-shadow">
                <table class="table table-borderless fs-14 mb-0">

                    <thead>
                        <tr class="thead-row">
                            <th scope="col">Autor</th>
                            <th scope="col">Comentário</th>
                            <th scope="col">Ná publicação</th>
                            <th scope="col">Criação</th>
                        </thead>

                        <tbody>
                            @foreach ($comments as $comment)
                            <tr>

                                <td>
                                    @if ($comment->user)
                                    <a href="{{ route('users.show', $comment->user->id) }}">
                                        {{ $comment->user->name }}
                                    </a>
                                    @else
                                    {{ $comment->name }}
                                    @endif
                                </td>

                                <td>
                                    {{ str_limit($comment->body, 50) }}
                                </td>

                                <td>
                                    <a href="{{ route('posts.show', $comment->post->id) }}#comment-{{ $comment->id }}">
                                        {{ $comment->post->title }}
                                    </a>
                                </td>

                                <td>
                                    {{ $comment->created_at->diffForHumans() }}
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <p>Sem comentários encontrados.</p>
                @endif

            </div>
        </div>
    </div>

    @endsection
