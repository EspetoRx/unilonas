@extends('layouts.dashboard.base')
@section('pageTitle', 'Editar tag')
@section('content')

{{ Breadcrumbs::render('dashboard.tags.edit', $tag) }}

<div class="container-fluid">
    <h1 class="page-heading">Editar tag - {{ $tag->name }}</h1>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">

            <form action="{{ route('dashboard.tags.update', $tag->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="name" class="custom-label">Nome</label>

                    <input type="text" name="name" id="name" class="form-control custom-form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $tag->name }}" required>

                    @if ($errors->has('name'))
                    <span class="invalid-message">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="description" class="custom-label">Descrição</label>

                    <input type="text" name="description" id="description" class="form-control custom-form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ $tag->description }}">
                </div>

                <input type="submit" class="btn btn-primary" value="Update">

            </form>

        </div>
    </div>
</div>
@endsection
