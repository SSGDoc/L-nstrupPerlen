<template>
<div>

  <navbar></navbar>
  <footer></footer>

</div>
</template>

<script>
import Navbar from './components/containers/Navbar.vue'
import Footer from './components/containers/Footer.vue'
export default {
    name: "Master",
    component: {
        Navbar,
        Footer
    }
}
</script>

<style>

</style>