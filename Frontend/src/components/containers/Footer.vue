<template>
<footer>
    <p class="left">{{footerText}}</p>
	<p class="center">Kontakt</p>
	<p class="contact">Telefon: 60680085 <br>
	Mail: hcgs@gmail.com
	</p>
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
	background-color: #141618;
	color: white;
	bottom: 0;
	width: 100%;
	height: 150px;
}

.left{
	float: left;
	padding: 20px;
	font-size: 24px;
}

.center{
	font-family: "Archivo";
	font-size: 25px;
	padding-top: 10px;
}

.contact {
	font-family: "Archivo";
}
</style>