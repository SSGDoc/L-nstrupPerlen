<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#"
            >HJEM <span class="sr-only">(current)</span></a
          >
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            data-bs-toggle="dropdown"
          >
            SHOP
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">ARMBÅND</a></li>
            <li><a class="dropdown-item" href="#">ØRERINGE</a></li>
            <li><a class="dropdown-item" href="#">HALSKÆDER </a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutSection">OM OS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#aboutSection">KONTAKT</a>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  
};
</script>


<style scoped>
@media all and (min-width: 992px) {
  .navbar .nav-item .dropdown-menu {
    display: none;
  }
  .navbar .nav-item:hover .dropdown-menu {
    display: block;
  }
  .navbar .nav-item .dropdown-menu {
    margin-top: 0;
  }
}
</style>