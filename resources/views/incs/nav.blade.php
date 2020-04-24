<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="/">{{config('app.name')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarExample03" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarExample03">

    <ul class="navbar-nav" navbar-right>
      <li class="nav-item"><a class="nav-link" href="/customers">Show Customers</a></li>
      <!--<li class="nav-item"><a class="nav-link" href="/customers/3">Edit Customer</a></li>-->
      <li class="nav-item"><a class="nav-link" href="/customers/create">Add Customer</a></li>

    </ul>
  </div>
</nav>