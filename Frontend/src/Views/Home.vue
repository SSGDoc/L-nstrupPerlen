<template>
  <div>
    <div id="slideSection">
      <product-show-slide></product-show-slide>
    </div>
    <div id="aboutSection">
      <about></about>
    </div>
    <hr>
    <div id="serviceSection">
      <services></services>
    </div>
  </div>
</template>

<script>
import ProductShowSlide from "../components/ProductShowSlide.vue";
import About from "../Views/About.vue";
import Services from "../components/containers/Services.vue"
export default {
  components: {
    ProductShowSlide,
    About,
    Services,
  },
};
</script>

<style scoped>
hr{
  border-width: 0;
  height:1px;
  background-color: rgb(187, 186, 186);
}
</style>