<nav class="navbar navbar-expand-lg bg-dark fixed-top" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="?page=index"><img src="images/iris.jpg" alt="Logo de Association Gnut 06" class="logoNavbar"> Association Gnut 06</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-uppercase fs-5" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= (empty($_GET['page']) || ($_GET['page'] == "index")) ? "active" : "" ?>" aria-current="page" href="?page=index">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= (!empty($_GET['page']) && $_GET['page'] == "adhesion") ? "active" : "" ?>" href="?page=adhesion">Adhésion</a>
        </li>
       <li class="nav-item">
          <a class="nav-link <?= (!empty($_GET['page']) && $_GET['page'] == "contact") ? "active" : "" ?>" href="?page=contact">Contact</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>