@extends('layouts.dashboard.base')
@section('pageTitle', 'Editar publicação')

@section('content')

{{ Breadcrumbs::render('dashboard.posts.edit', $post) }}

<div class="container-fluid">

    {{-- Display alert if post has been updated --}}
    @if (session('post_update'))
    <div class="alert alert-success session-alert" role="alert">
        {{ session('post_update') }} 

        {{-- If post have been updated and is published display link to view the post  --}}
        @if ($post->published_at)
        <a href="{{ route('posts.show', $post->slug) }}" class="alert-link">Ver Publicação</a>
        @endif

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

    </div>
    @endif

    <h1 class="page-heading mb-3">Editar Publicação</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row">

            <div class="col-12 col-lg-8">

                <div class="form-group">
                    <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Entre com o título da publicação..." value="{{ $post->title }}" required>

                    @if ($errors->has('title'))
                    <span class="invalid-message">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <textarea name="body" id="post-body" placeholder="Conteúdo da publicação...">{!! old('body') ?? $post->body !!}</textarea>

                    <div id="count" class="fs-14">0 palavras, 0 caracteres</div>

                    @if ($errors->has('body'))
                    <span class="invalid-message">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                    @endif

                </div>
            </div>

            <div class="col-12 col-lg-4">

                <div class="form-group">

                    <div class="box bg-white rounded box-shadow p-3 mb-3 fs-14 c-666">
                        <p class="mb-4">Configuração da publicação</p>

                        <p>
                            Publicado em: 
                            <strong>{{ $post->created_at->toDayDateTimeString() }}</strong>
                        </p>

                        @if ($post->created_at != $post->updated_at)
                        <p>
                            Editado pela última vez em: 
                            <strong>{{ $post->updated_at->toDayDateTimeString() }}</strong>
                        </p>
                        @endif

                        <p>
                            Status:
                            @if ($post->published_at)
                            <strong>
                                Publicado <a href="{{ route('posts.show', $post->slug) }}">Visuzalizar</a>
                            </strong>
                            @else
                            <strong>Salvo</strong>
                            @endif
                        </p>

                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#deletePostModal">Excluir</a>

                            <button type="submit" name="draft" class="btn btn-sm btn-outline-secondary">Salvar</button>

                            <button type="submit" class="btn btn-sm btn-primary">Publicar</button>
                        </div>

                    </div>
                </div>

                <div class="form-group">

                    <div class="box bg-white rounded box-shadow p-3 mb-3 fs-14 c-666">

                        <label for="image_select" class="mb-4">Imagem de destaque</label>

                        <div id="image_container">

                            {{-- Image preview container --}}
                            @if ($post->image)
                            <img src="{{ $armazenamento->url('public/post/' . $post->image) }}" id="image_preview" class="img-fluid">
                            @endif

                            <label for="image_select" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Adicionar imagem
                            </label>
                            <input type="file" name="image" id="image_select" class="form-control-file fs-14 mt-1 @if ($post->image) display-none @endif" accept="image/*" style="display: none">

                            <button type="button" id="remove_image_button" class="btn btn-sm btn-link p-0 @if ($post->image) display-block @else display-none @endif">
                                Remover imagem
                            </button>
                        </div>

                        @if ($errors->has('image'))
                        <span class="invalid-message">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                        @endif

                    </div>
                </div>

                <div class="form-group">

                    <div class="box bg-white rounded box-shadow p-3 mb-3 fs-14 c-666">
                        <label for="categories">Categorias</label>

                        <select name="categories[]" id="categories" class="form-control" multiple="multiple">

                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                @foreach ($post->categories as $post_category)
                                @if ($post_category->name == $category->name) selected="selected" @endif
                                @endforeach
                                >{{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">

                    <div class="box bg-white rounded box-shadow p-3 mb-3 fs-14 c-666">
                        <label for="tags">Tags</label>

                        <select name="tags[]" id="tags" class="form-control" multiple="multiple">

                            @foreach ($tags as $tag)
                            <option value="{{ $tag->name }}"
                                @foreach ($post->tags as $post_tag)
                                @if ($post_tag->name == $tag->name) selected="selected" @endif
                                @endforeach
                                >{{ $tag->name }}
                            </option>
                            @endforeach

                        </select>

                    </div>
                </div>

            </div>
        </div>
    </form>

    {{-- Move post to trash modal --}}
    <div class="modal post-modal fade" id="deletePostModal" tabindex="-1" role="dialog" aria-labelledby="deletePostModalLabel" aria-hidden="true">
        <div class="modal-dialog h-100 d-flex flex-column justify-content-center my-0" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="deletePostModalLabel">Excluir</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    Isto será excluido.
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-sm modal-button" data-dismiss="modal">Cancelar</button>

                    <form action="{{ route('posts.destroy', $post->id)}}" class="delete-form" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-sm modal-button" type="submit" name="form_post_delete">Excluir</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')

<link rel="stylesheet" href="{{ asset('js/plugins/summernote/summernote-bs4.css') }}">
<script src="{{ asset('js/plugins/summernote/summernote-bs4.js') }}"></script>

<script>
$(document).ready(function() {

  function countCharacters() {
    var words = $('.note-editable').text().replace(/\s+/g, ' ').trim().split(' ');
    var wordsCount = words.filter(entry => entry.trim() != '').length;
    var characters = $('.note-editable').text().length;
    var count = `${wordsCount} ${wordsCount === 1 ? 'palavra' : 'palavras'}, 
    ${characters} ${characters === 1 ? 'caractere' : 'caracteres'}`;
    $('#count').text(count);
  }

  $('#post-body').summernote({
    placeholder: 'Publicando conteúdo...',
    height: 350,
    callbacks: {
      onInit: function() {
        if ($('.note-editable').text().length) {
          countCharacters();
        }
      },
      onChange: function() {
        countCharacters();
      }
    }
  });
});
</script>

<script src="{{ asset('js/image_preview.js') }}"></script>

{{-- Select2 select boxes --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('js/select2.js') }}"></script>

@endpush
@endsection
