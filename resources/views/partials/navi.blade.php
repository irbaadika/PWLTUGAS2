<nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand fw-bold" href="#">Irba</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($title === "home") ? 'active' : '' }}"  href="http://127.0.0.1:8000/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "biodata") ? 'active' : '' }}" href="http://127.0.0.1:8000/biodata">Biodata</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "komentar") ? 'active' : '' }}" href="http://127.0.0.1:8000/komentar">Komentar</a>
              </li>
            </ul>
        </div>
</nav>