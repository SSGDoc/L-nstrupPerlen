<template>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="hej">
        <li class="nav-item">
          <router-link to="/">
            <a class="nav-link" aria-current="page">Forside</a>
          </router-link>
        </li>

        <li class="nav-item">
          <router-link to="Services">
            <a class="nav-link" aria-current="page">Services</a>
          </router-link>
        </li>

        <!-- <li class="nav-item">
          <router-link to="Gallery">
            <a class="nav-link" aria-current="page">Galleri</a>
          </router-link>
        </li> -->

        <li class="nav-item">
          <router-link to="Contact">
            <a class="nav-link" aria-current="page">Kontakt</a>
          </router-link>
        </li>
        
        <li class="nav-item">
          <router-link to="About">
            <a class="nav-link" aria-current="page">Om os</a>
          </router-link>
        </li>
      </ul>
      <span class="navbar-text">
      Ring på: 60 68 00 85 og få et tilbud
    </span>
    </div>
  </div>
</nav>
</template>

<script>

</script>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap');
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
}

</style>