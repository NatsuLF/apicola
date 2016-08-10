<ul class="nav nav-pills nav-stacked">
    <li role="presentation" class="{{ $controller == 'PostController' ? 'active' : 'no-active' }}">
        <a href="{{ url('/posts') }}">
          <i class="fa fa-pencil-square-o fa-fw fa-lg" aria-hidden="true"></i> Posts
        </a>
    </li>
    <li role="presentation" class="{{ $controller == 'TagController' ? 'active' : 'no-active' }}">
        <a href="{{ url('/tags') }}">
          <i class="fa fa-tags  fa-fw fa-lg" aria-hidden="true"></i> Categorias
        </a>
    </li>
    <li role="presentation" class="{{ $controller == 'ItemController' ? 'active' : 'no-active' }}">
        <a href="{{ url('/items') }}">
          <i class="fa fa-shopping-bag fa-fw fa-lg" aria-hidden="true"></i> Productos
        </a>
    </li>
    <li role="presentation" class="{{ $controller == 'ActivityController' ? 'active' : 'no-active' }}">
        <a href="{{ url('activities') }}">
          <i class="fa fa-bell-o" aria-hidden="true"></i> Actividades
        </a>
    </li>
</ul>
