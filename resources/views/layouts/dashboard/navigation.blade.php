  <div class="sidebar">
    <nav class="sidebar-nav">

      @if (auth()->user()->hasRole('user'))
      <ul class="nav fs-14">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="nav-icon oi oi-dashboard"></i> Painel Inicial
          </a>
        </li>
        <li class="nav-item nav-dropdown">
          <a href="#" class="nav-link nav-dropdown-toggle">
            <i class="nav-icon oi oi-person"></i> Usuários
          </a>
          <ul class="nav-dropdown-items">
            <li class="nav-item">
              <a href="{{ route('dashboard.users.edit', auth()->user()->id) }}" class="nav-link">Editar perfil</a>
            </li>
          </ul>
        </li>
      </ul>

      @else
      <ul class="nav fs-14">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="nav-icon oi oi-dashboard"></i> Painel Inicial
          </a>
        </li>
        
        <li class="nav-item nav-dropdown">
          <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="nav-icon oi oi-pencil"></i> Publicações
          </a>
          <ul class="nav-dropdown-items">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard.posts.index') }}">Todas as publicações</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard.posts.create') }}">Novas publicações</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard.categories.index') }}">Categorias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard.tags.index') }}">Tags</a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{ route('dashboard.comments.index') }}" class="nav-link">
            <i class="nav-icon oi oi-chat"></i>  Comentários
          </a>
        </li>

        <li class="nav-item nav-dropdown">
          <a href="#" class="nav-link nav-dropdown-toggle">
            <i class="nav-icon oi oi-person"></i> Usuários
          </a>
          <ul class="nav-dropdown-items">

            <li class="nav-item">
              <a href="{{ route('dashboard.users.index') }}" class="nav-link">Todos os usuários</a>
            </li>

            <li class="nav-item">
              <a href="{{ route('dashboard.users.edit', auth()->user()->id) }}" class="nav-link">Editar perfil</a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{ route('dashboard.roles.index') }}" class="nav-link">
            <span class="nav-icon oi oi-people"></span> Roles
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('dashboard.permissions.index') }}" class="nav-link">
            <span class="nav-icon oi oi-key"></span>Permissões
          </a>
        </li>

      </ul>
      @endif

    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
  </div>
