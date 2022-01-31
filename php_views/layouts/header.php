<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<nav class="navbar navbar-light bg-primary">
    <a class="text-white p-2 navbar-brand" href="#">
        <img src="media/pokebrand.png" width="40" height="30" class="d-inline-block align-top" alt="">
        Pokedex
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="text-white dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="text-white dropdown-item" href="#">Action</a>
          <a class="text-white dropdown-item" href="#">Another action</a>
          <div class="text-white dropdown-divider"></div>
          <a class="text-white dropdown-item" href="#">Something else here</a>
        </div>
    </li>
    </ul>
    </div>

</nav>

<nav class="navbar navbar-expand-sm navbar-light bg-primary">
<div class="container-fluid">
<a class="navbar-brand text-white align-self-center" href="/pokedex/index.php">
<img src="/pokedex/media/pokedex_icon.png" alt="Inicio" width="30" height="30" class="d-inline-block align-text-top">
Pokedex
</a>
<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
<span class="navbar-toggler-icon"></span>
</button>
<div id="navbarCollapse" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Datos maestros</a>
<div class="dropdown-menu">
<a href="/pokedex/php_views/pokemon_list.php" class="dropdown-item">Pokemons</a>

