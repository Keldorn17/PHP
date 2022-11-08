const nav = `
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="MainPage.html">Suli</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="MainPage.html">Főoldal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Statisztika.html">Statisztika</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Tanulo.html">Tanulók</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Leadasok.html">Leadások</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="UjTanulo.html">Új Tanuló</a>
            </li>
          </ul>
        </div>
      </nav>
`
document.body.insertAdjacentHTML("beforebegin",nav)