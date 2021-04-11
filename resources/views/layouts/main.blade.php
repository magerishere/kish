@include('layouts.header')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('user.index') }}">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        @guest
            <a href="{{ route('guest.login') }}" class="btn btn-primary">Login</a>
            <a href="{{ route('guest.register') }}" class="btn btn-info">Register</a>
        @else
        <a href="{{ route('permission.index') }}" class="btn btn-warning">Permissions</a>
        <a href="{{ route('role.index') }}" class="btn btn-info">Roles</a>
        <a href="{{ route('admin.usersList') }}" class="btn btn-success">Users list</a>

        <form action="{{ route('user.logout') }}" method="POST" class="d-flex">
            @csrf

                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        @endguest
      </div>
    </div>
  </nav>



<div class="container">
    @include('layouts.messages')
    @yield('content')
</div>

@include('layouts.footer')
