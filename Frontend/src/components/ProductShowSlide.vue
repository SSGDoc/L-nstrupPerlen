<template>
<!-- Full-width images with number and caption text -->
<div class="carousel-container">
  <div class="mySlides animate">
    <img src="https://wallpapershome.com/images/pages/pic_h/16239.jpg" alt="slide" />
    <!-- <div class="number">1 / 5</div>
    <div class="text">Lorem ipsum dolor sit amet consectetur</div> -->
  </div>

  <div class="mySlides animate">
    <img src="https://wallpapershome.com/images/pages/pic_h/23525.jpg" alt="slide" />
    <!-- <div class="number">2 / 5</div>
    <div class="text">amet consectetur</div> -->
  </div>

  <div class="mySlides animate">
    <img src="https://wallpapershome.com/images/pages/pic_h/23277.jpg" alt="slide" />
    <!-- <div class="number">3 / 5</div>
    <div class="text">Lorem ipsum dolor sit</div> -->
  </div>

  <div class="mySlides animate">
    <img src="https://wallpapershome.com/images/pages/pic_h/12596.jpg" alt="slide" />
    <!-- <div class="number">4 / 5</div>
    <div class="text">Doloribus quo alias reprehenderit</div> -->
  </div>

  <div class="mySlides animate">
    <img src="https://wallpapershome.com/images/pages/pic_h/23419.jpg" alt="slide" />
    <!-- <div class="number">5 / 5</div>
    <div class="text">Reprehenderit</div> -->
  </div>

  <!-- Next and previous buttons -->
  <!-- <a class="prev" v-on:click="prevSlide()">&#10094;</a>
  <a class="next" v-on:click="nextSlide()">&#10095;</a> -->

  <!-- The dots/circles -->
  <div class="dots-container">
    <span class="dots" v-on:click="currentSlide(1)"></span>
    <span class="dots" v-on:click="currentSlide(2)"></span>
    <span class="dots" v-on:click="currentSlide(3)"></span>
    <span class="dots" v-on:click="currentSlide(4)"></span>
    <span class="dots" v-on:click="currentSlide(5)"></span>
  </div>
</div>
</template>

<script>
export default {
  data() {
    return {
      slideIndex: 0,
      timer: 5,
      error: null,
    };
  },
  methods: {
    // Next-previous control
    nextSlide() {
      this.slideIndex++;
      this.showSlides();
    },

    prevSlide() {
      this.slideIndex--;
      this.showSlides();
    },

    // Thumbnail image controlls
    currentSlide(n) {
      this.slideIndex = n - 1;
      this.showSlides();
    },

    showSlides() {
      let slides = document.querySelectorAll(".mySlides");
      let dots = document.querySelectorAll(".dots");

      if (this.slideIndex > slides.length - 1) this.slideIndex = 0;
      if (this.slideIndex < 0) this.slideIndex = slides.length - 1;

      // hide all slides
      slides.forEach((slide) => {
        slide.style.display = "none";
      });

      // show one slide base on index number
      slides[this.slideIndex].style.display = "block";

      dots.forEach((dot) => {
        dot.classList.remove("active");
      });

      dots[this.slideIndex].classList.add("active");
    },
  },
  mounted() {
    this.showSlides();

    // this function runs every 1 second
    setInterval(() => {
      this.timer--;
      
      if (this.timer < 1) {
        this.nextSlide();
        this.timer = 5;
      }
    }, 1000); // 1sec
  },
};
</script>


<style scoped>
:root {
  --primary-color: slategrey;
}

* {
  box-sizing: border-box;
}

body {
  font-family: "@Microsoft YaHei Light";
  background: #fafafa;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  overflow: hidden;
}

.carousel-container {
  /* border-radius: 20px; */
  overflow: hidden;
  max-width: 100%;
  max-height: 100vh;
  position: relative;
  /* box-shadow: 0 0 100px -20px lightblue; */
  margin: auto;
  z-index: 0;
}

/* Hide the images by default */
.mySlides {
  display: none;
}
.mySlides img {
  display: block;
  width: 100%;
}

/* image gradient overlay [optional] */
/* .mySlides::after {
  content: "";
  position: absolute;
  inset: 0 0 0 0;
    background-image: linear-gradient(-45deg, rgba(110, 0, 255, .1), rgba(70, 0, 255, .2));
} */

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  transform: translate(0, -50%);
  width: auto;
  padding: 20px;
  color: white;
  font-weight: bold;
  font-size: 24px;
  border-radius: 0 8px 8px 0;
  background: rgba(173, 216, 230, 0.1);
  user-select: none;
}
.next {
  right: 0;
  border-radius: 8px 0 0 8px;
}
.prev:hover,
.next:hover {
  background-color: rgba(173, 216, 230, 0.3);
}

/* Caption text */
/* .text {
  color: #f2f2f2;
  background-color: rgba(10, 10, 20, 0.1);
  backdrop-filter: blur(6px);
  border-radius: 10px;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 60px;
  left: 50%;
  transform: translate(-50%);
  text-align: center;
} */

/* Number text (1/3 etc) */
/* .number {
  color: #f2f2f2;
  font-size: 16px;
  background-color: rgba(173, 216, 230, 0.15);
  backdrop-filter: blur(6px);
  border-radius: 10px;
  padding: 8px 12px;
  position: absolute;
  top: 10px;
  left: 10px;
} */
.dots-container {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translate(-50%);
}

/* The dots/bullets/indicators */
.dots {
  cursor: pointer;
  height: 14px;
  width: 14px;
  margin: 0 4px;
  background-color: rgba(173, 216, 230, 0.2);
  backdrop-filter: blur(2px);
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.3s ease;
}
.active,
.dots:hover {
  background-color: rgba(173, 216, 230, 0.8);
}

/* Fading animation */
.animate {
  -webkit-animation-name: animate;
  -webkit-animation-duration: 1s;
  animation-name: animate;
  animation-duration: 2s;
}

@keyframes animate {
  from {
    transform: scale(1.1) rotateY(10deg);
  }
  to {
    transform: scale(1) rotateY(0deg);
  }
}
</style>