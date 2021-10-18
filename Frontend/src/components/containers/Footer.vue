<template>
  <footer>
    <div class="row">
      <div class="column">
        <p class="left">{{ footerText }}</p>
      </div>
      <div class="column">
        <p class="center">Kontakt</p>
        <p class="contact">
          Telefon: 60680085 <br />
          Mail: perlerforsatan@gmail.com
        </p>
      </div>
      <div class="column">
        <p class="right">
			Jeg kan satme lave nogle lækre smykker til dig din bette ass-has
		</p>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  data() {
    return {
      footerText: "Lønstrup-Perlen",
    };
  },
};
</script>

<style scoped>
footer {
  position: absolute;
  background-color: #ffffff;
  border-top: 1px solid rgb(230, 230, 230);
  color: rgb(146, 146, 146);
  bottom: 0;
  width: 100%;
  height: 150px;
}

.column {
  float: left;
  width: 33.33%;
}

.left {
  float: left;
  padding: 20px;
  font-family: "Bleeding_Cowboys";
  font-size: 24px;
}

.center {
  font-family: "Archivo";
  font-size: 25px;
  padding-top: 20px;
}

.right {
  font-family: "Archivo";
  font-size: 18px;
  padding-top: 20px;
}

.contact {
  font-family: "Archivo";
}
</style>