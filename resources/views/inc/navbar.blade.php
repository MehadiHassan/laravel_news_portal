<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">{{config('app.name', 'BangladeshTimes')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/news">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/services">Sport</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="/news/create">Create News</a></li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-outline-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-outline-success btn-lg" href="/register" role="button">Register</a>
      </form>
    </div>
  </nav>