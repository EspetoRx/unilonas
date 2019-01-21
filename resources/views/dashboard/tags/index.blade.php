@extends('layouts.dashboard.base')
@section('pageTitle', 'Tags')

@section('content')
{{ Breadcrumbs::render('dashboard.tags.index') }}

<div class="container-fluid">

  <div class="d-flex justify-content-between mb-3">
    <h1 class="page-heading">Tags ({{ $tagsCount }})</h1>

    @can('gerenciar publicações')
    <div id="app">
      <modal title="New tag" button-text="Nova tag">
        <v-form inline-template route="/api/tags" success-message="Tag criada!">
          <form @submit.prevent="processForm">

            <div class="form-group">
              <label for="name">Nome</label>

              <input type="text" name="name" id="name" v-validate="'required|max:200|unique:tags'" v-model="inputs.name" data-vv-validate-on="change" class="form-control" :class="{'is-invalid': errors.has('name') }">

              <span v-if="errors.has('name')" v-text="errors.first('name')" class="invalid-message"></span>
            </div>

            <div class="form-group">
              <label for="description">Descrição</label>

              <input type="text" name="description" id="description" v-model="inputs.description" class="form-control">
            </div>

            <div class="form-group">
              <button @click="!loading" :disabled="errors.any() || loading" class="btn btn-primary float-right">
                <fa-icon v-if="loading" icon="spinner" spin></fa-icon> Criação
              </button>
            </div>

          </form>
        </v-form>
      </modal>
    </div>
    @endcan
  </div>

  <div class="table-container my-3 px-2 py-1 bg-white rounded box-shadow">
    <table class="table table-borderless fs-14 mb-0">

      <thead>
        <tr class="thead-row">
          <th scope="col">Nome</th>
          <th scope="col">Pós-endereço</th>
          <th scope="col">Descrição</th>
          <th scope="col">Contador</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>

      @if (count($tags))
      <tbody>

        @foreach ($tags as $tag)
        <tr scope="row" class="post-row">
          <td>
            <a href="{{ route('tags.show', $tag->slug) }}" class="font-weight-bold">{{ $tag->name }}</a>
          </td>

          <td>{{ $tag->slug }}</td>

          <td>{{ $tag->description ?? '-' }}</td>

          <td>
            @if ($tag->posts_count)
            <a href="{{ route('tags.show', $tag->slug) }}">{{ $tag->posts_count }}</a>
            @else
            <span>-</span>
            @endif
          </td>

          <td>
            {{-- Edit --}}
            <a href="{{ route('dashboard.tags.edit', $tag->id) }}" class="btn btn-link btn-sm c-666 p-0" data-toggle="tooltip" data-placement="top" title="Editar"><span class="oi oi-pencil"></span></a>

            {{-- Trash --}}
            <form action="{{ route('dashboard.tags.destroy', $tag->id) }}" method="POST" class="display-inline-block">
              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-link btn-sm c-666 p-0" data-toggle="tooltip" data-placement="top" title="Excluir"><span class="oi oi-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  {{ $tags->links() }}

  @else
</tbody>
</table>
<p class="text-center">Sem tags</p>
@endif

</div>
@endsection
