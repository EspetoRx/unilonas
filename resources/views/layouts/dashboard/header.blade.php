<header class="app-header navbar">

  <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
  </button>

  {{-- Site title --}}
  <a href="{{ route('home') }}" class="navbar-brand navbar-brand-full">
    <img src="{{asset('../images/logo.png')}}" width="130px" class="logo">
 </a>

 <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
  <span class="navbar-toggler-icon"></span>
</button>

{{-- Profile dropdown --}}
<ul class="nav navbar-nav ml-auto">

  <li class="nav-item dropdown">

    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
     <img class="img-avatar" src="{{ $armazenamento->url('public/avatars/' . auth()->user()->avatar) }}" alt="User image">
   </a>

   <div class="dropdown-menu dropdown-menu-right profile-dropdown pt-0">

    <a class="dropdown-item" href="{{ route('dashboard.index') }}">Painel Inicial</a>

    <a class="dropdown-item" href="{{ route('users.show', auth()->user()->id) }}">Perfil</a>

    @can('manage posts')
    <a class="dropdown-item" href="{{ route('dashboard.posts.create') }}">Nova publicação</a>
    @endcan

    <div class="divider"></div>

    <a class="dropdown-item" href="{{ route('logout') }}">Sair</a>
  </div>
</li>
</ul>
</header>
