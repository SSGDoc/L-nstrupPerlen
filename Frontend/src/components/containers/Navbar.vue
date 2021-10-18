<template>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="hej">
        <li class="nav-item">
            <a class="nav-link" aria-current="page">Hjem</a>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

        <li class="nav-item">

            <a class="nav-link" aria-current="page">Om os</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" aria-current="page">Kontakt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</template>

<script>

</script>


<style scoped>
/* @import url('https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap');
.navbar-dark .navbar-nav .nav-link {
  font-family: "Archivo";
}
a:link { text-decoration: none; }
.navbar-text{
  font-family: "Archivo";
  color:#e5af23 !important;
}
@media screen and (max-width: 870px) {
.navbar-collapse {
    z-index: 9999;
    position: absolute;
    top: 50px;
    left: 0px;
    padding: 10px 15px 15px 15px;
    width: 100%;
    height: auto;
  }
  .navbar-collapse.collapsing {
    top: -75%;
    transition: height 0s ease;
  }
  .navbar-collapse.show {
    left: 0px !important;
    transition: top 300ms ease-in-out;
    background-color: #212529;
  }
  .navbar-toggler.collapsed ~ .navbar-collapse {
    transition: top 400ms ease-in-out;
    background-color: #212529;
  }
} */

</style>