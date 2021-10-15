<template>
<div>
  <navbar></navbar>
    <div id="main">
      <router-view/>
      <div class="push"></div>
    </div>
    <pooter></pooter>
</div>
    
</template>

<script>
import Navbar from './components/containers/Navbar.vue'
import Pooter from './components/containers/Footer.vue'
export default {
  name: "Master",
  components: {
    Navbar,
    Pooter
  },
}
</script>

<style>
*{
  margin: 0;
}
#main{
min-height: 100vh;
margin-bottom: -150px;
}

.push{
height: 150px;
}
</style>