<nav class="navbar navbar-expand-lg mb-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="https://w7.pngwing.com/pngs/600/349/png-transparent-starbucks-flat-brand-logo-icon.png" alt="Logo" width="44" height="35" class="rounded-circle align-text-mid" >
        Starbucks
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($title === 'Home')?'active':'' }}" href="/Home/{{ $users->id }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === 'Coffee')?'active':'' }}" href="/Coffee/{{ $users->id }}">Coffee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === 'Transaction')?'active':'' }}" href="/History/{{ $users->id }}">Transaction</a>
              </li>
        </ul>
      </div>
    </div>
  </nav>
