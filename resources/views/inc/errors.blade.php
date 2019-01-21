@if ( count ($errors) != 0)
	{{-- expr --}}
			{{-- Título da caixa de erros --}}
			<ol class="breadcrumb alert-danger">
			@if ( count ($errors) == 1 )
				{{-- expr --}}
		            <li class="breadcrumb-item">
		              <a>Erro encontrado</a>
		            </li>
			@else

				<li class="breadcrumb-item">
		              <a>Erros encontrados</a>
		            </li>

			@endif

			{{-- Apresentar os erros (concatenação) --}}
				@foreach ($errors->all() as $erro)
					{{-- expr --}}

					<li class="breadcrumb-item active">{{$erro}}</li>

				@endforeach
			</ol>

@endif

{{-- Apresentação dos erros da validação com o banco de dados --}}
@if ( isset ($erros_bd) )
	{{-- expr --}}

	<div class="alert alert-danger">
		
		@if ( count ($erros_bd) == 1 )
			{{-- expr --}}

			<p class="titulo-erro">ERRO DE BANCO DE DADOS</p>

		@else

			<p class="titulo-erro">ERROS DE BANCO DE DADOS</p>

		@endif

		<ul class="text-left">
			@foreach ($erros_bd as $erro)
				{{-- expr --}}

				<li align="justify">{{ $erro }}</li>

			@endforeach
		</ul>

		

	</div>
@endif

@if ( isset ($insert_success) )
	{{-- expr --}}
			{{-- Título da caixa de erros --}}
			<ol class="breadcrumb alert-success">
			@if ( count ($insert_success) == 1 )
				{{-- expr --}}
		            <li class="breadcrumb-item">
		              <a>Ação completada: </a>
		            </li>
			@endif

			{{-- Apresentar os erros (concatenação) --}}
				@foreach ($insert_success as $insert_succes)
					{{-- expr --}}

					<li class="breadcrumb-item active">{{$insert_succes}}</li>

				@endforeach
			</ol>
@endif

@if ( session()->has('insert_success'))
	{{-- expr --}}
			{{-- Título da caixa de erros --}}
			<ol class="breadcrumb alert-success">
			@if ( count (session()->get('insert_success')) == 1 )
				{{-- expr --}}
		            <li class="breadcrumb-item">
		              <a>Ação completada: </a>
		            </li>
			@endif

			{{-- Apresentar os erros (concatenação) --}}
				@foreach (session()->get('insert_success') as $insert_succes)
					{{-- expr --}}

					<li class="breadcrumb-item active">{{$insert_succes}}</li>

				@endforeach
			</ol>
@endif