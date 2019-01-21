@extends('layouts.base')

@if (Route::is('categories.show'))
    @section("pageTitle", "Publicações na categoria $category->name")
@elseif (Route::is('tags.show'))
    @section("pageTitle", "Publicaçõe scom a tag $tag->name")
@else
    @section("pageTitle", "Início")
@endif

@section('content')

<div class="row mt-md-5">
    <div class="col-12 col-lg-8">

        @if (Route::is('categories.show'))
        <h1 class="mb-4 fs-24 c-777">
            Publicações na categoria {{ $category->name }}
        </h3>
        @elseif (Route::is('tags.show'))
        <h1 class="mb-4 fs-24 c-777">
            Publicações coma a tag {{ $tag->name }}
        </h1>
        @endif

        @forelse ($posts as $post)

        <article class="mb-5">

            @if ($post->image)
            <a href="{{ route('posts.show', $post->slug) }}">
                <img src="{{ $armazenamento->url('/public/post/' . $post->image) }}" class="img-fluid">
            </a>
            @endif

            <h2>
                <a class="post-title" href="{{ route('posts.show', $post->slug) }}">
                    {{ $post->title}}
                </a>
            </h2>

            <div class="post-meta fs-14">

                <span class="mr-2">
                    {{ $post->created_at->diffForHumans() }}
                </span>

                <span class="separator">/</span>

                <a href="{{ route('users.show', $post->user->id) }}" class="mx-2">
                    {{ $post->user->name }}
                </a>

                <span class="separator">/</span>

                Publicados em: 

                @foreach ($post->categories as $category)
                <a href="{{ route('categories.show', $category->slug) }}">
                    {{ $category->name }}@if (!$loop->last),@endif
                </a>
                @endforeach

                <span class="separator">/</span>

                <a href="{{ route('posts.show', $post->slug) }}#comments" class="mx-2">
                    {{ $post->comments_count }} <span class="oi oi-chat"></span>
                </a>

            </div>

            <p class="post-body mt-2">
                {{ str_limit(strip_tags($post->body), 400) }}
            </p>

        </article>
        <hr>
        @empty
        <p class="text-center">Sem publicações</p>
        @endforelse

        {{ $posts->links() }}

    </div>

    @include('layouts.sidebar')

</div>

@endsection
