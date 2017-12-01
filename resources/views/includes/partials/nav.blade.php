<nav class="navbar navbar-expand-md navbar-miny" id="top-navbar">
  <i class="fa fa-navicon d-md-none" data-toggle="offcanvas"></i>
  <a class="navbar-brand" href="{{route('home')}}">
    <img src="{{url('img/logo.png')}}" alt="Logo" title="miny.vn"/>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top-menu" aria-controls="top-menu" aria-expanded="false" aria-label="Top menu">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="top-menu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Học vui kiếm tiền</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ?</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Tìm kiếm ..." aria-label="Tìm kiếm ...">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
      </span>
      </div>
    </form>
    @guest
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="{{route('register')}}" class="nav-link">Đăng ký</a>
        </li>
        <li class="nav-item">
          <a href="{{route('login')}}" class="nav-link">Đăng nhập</a>
        </li>
      </ul>
    @endguest
  </div>
</nav>