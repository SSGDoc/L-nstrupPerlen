<template>
    <master></master>
</template>
<script>
import Master from './Master.vue'

export default {
  name: "App",
  components: {
    Master
  },
}
</script>

<style>
html{
  scroll-behavior: smooth;
}
#app {
  font-family: "Century Gothic", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
