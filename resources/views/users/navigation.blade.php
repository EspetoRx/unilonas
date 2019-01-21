<ul class="mt-3 nav nav-tabs">

    <li class="nav-item">
        <a href="{{ route('users.show', $user->id) }}" class="nav-link {{ active('users.show') }}">Perfil</a>
    </li>

    <li class="nav-item">
        <a href="{{ route('users.posts', $user->id) }}" class="nav-link {{ active('users.posts') }}">Publicações</a>
    </li>

    <li class="nav-item">
        <a href="{{ route('users.comments', $user->id) }}" class="nav-link {{ active('users.comments') }}">Comentários</a>
    </li>

    @auth
    @if (auth()->user()->id === $user->id || auth()->user()->hasRole('admin'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.users.edit', $user->id) }}">Editar</a>
    </li>
    @endif
    @endauth

</ul>
