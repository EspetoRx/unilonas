@extends('layouts.dashboard.base')
@section('pageTitle', 'Lixeira')

@section('content')

{{ Breadcrumbs::render('dashboard.posts.trash') }}

<div class="container-fluid mb-3">

    <div class="d-flex justify-content-between mb-3">
        <h1 class="page-heading">Publicações</h1>
        <div>
            <a href="{{ route('dashboard.posts.create') }}" class="btn btn-primary btn-sm">Novas publicações</a>
        </div>
    </div>

    <a href="{{ route('dashboard.posts.index') }}" class="fs-14">
        Publicadas ({{{ $publishedCount }}})
    </a>&nbsp;
    <a href="{{ route('dashboard.posts.draft') }}" class="fs-14">
        Salvas ({{{ $draftedCount }}})
    </a>&nbsp;
    <a href="{{ route('dashboard.posts.trash') }}" class="fs-14 text-muted">
        Excluídas ({{ $trashCount }})
    </a>

    <div class="my-2 px-2 py-1 bg-white rounded box-shadow">
        <table class="table table-borderless fs-14 mb-0">

            <thead>
                <tr class="thead-row">
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Categorias</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Comentários</th>
                    <th scope="col">Criação</th>
                    <th scope="col">Exclusão</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            @if (count($trashPosts))
            <tbody>

                @foreach ($trashPosts as $post)
                <tr scope="row">

                    <td>
                        <span class="font-weight-bold">{{ $post->title }}</span>
                    </td>

                    <td>
                        <a href="{{ route('users.show', $post->user->id) }}">
                            {{ $post->user->name }}
                        </a>
                    </td>

                    <td>
                        @foreach ($post->categories as $category)
                        <a href="{{ route('categories.show', $category->slug) }}">
                            {{ $category->name }}
                        </a>
                        @if (!$loop->last), @endif
                        @endforeach
                    </td>

                    <td>
                        @forelse ($post->tags as $tag)
                        <a href="{{ route('tags.show', $tag->slug) }}">
                            {{ $tag->name }}
                        </a>
                        @if (!$loop->last), @endif
                        @empty
                        -
                        @endforelse
                    </td>

                    <td>
                        {{ $post->comments()->withTrashed()->count() }}
                    </td>

                    <td>
                        <abbr title="{{ $post->created_at }}">
                            {{ $post->created_at->format('Y/m/d') }}
                        </abbr>
                    </td>

                    <td>
                        <abbr title="{{ $post->deleted_at }}">
                            {{ $post->deleted_at->format('Y/m/d') }}
                        </abbr>
                    </td>

                    <td>
                        {{-- Restore --}}
                        <form action="{{ route('dashboard.posts.restore', $post->id) }}" method="POST" class="display-inline-block">
                            @csrf
                            @method('PATCH')

                            <button type="submit" class="btn btn-link btn-sm c-666 p-0" data-toggle="tooltip" data-placement="top" title="Restaurar">
                                <span class="oi oi-action-undo"></span>
                            </button>
                        </form>

                        {{-- Delete --}}
                        <form action="{{ route('dashboard.posts.forceDelete', $post->id) }}" method="POST" class="display-inline-block">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-link btn-sm c-666 p-0" data-toggle="tooltip" data-placement="top" title="Excluir">
                                <span class="oi oi-trash"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <button type="button" id="btn-delete-all" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modalDeleteAll">
        Lixeira vazia
    </button>

    {{-- Empty trash modal --}}
    <div class="modal post-modal fade" id="modalDeleteAll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lixeira Vazia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    Você tem certeza que deseja excluir todas as publicações da lixeira?
                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-sm modal-button" data-dismiss="modal">Cancelar</button>

                    <form action="{{ route('dashboard.posts.forceDeleteAll') }}" method="POST">
                        @csrf
                        @method('DELETE')

                        @foreach (App\Post::onlyTrashed()->get() as $post)
                        <input type="hidden" name="ids[]" value="{{ $post->id }}">
                        @endforeach

                        <button class="btn btn-sm modal-button" type="submit">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @else
</table>
<p class="text-center my-3">Sem publicações</p>
@endif

</div>
@endsection
