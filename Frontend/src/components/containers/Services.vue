<template>
  <section id="what-we-do">
        <div class="container-fluid">
          <div class="row mt-5">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
              <div class="card">
                <div class="card-block block-1">
                  <h3 class="card-title">GRATIS FRAGT</h3>
                  <p class="card-text">
                    Ved køb over 200 kr. tilbyder vi gratis fragt.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
              <div class="card">
                <div class="card-block block-2">
                  <h3 class="card-title">SIKKER BETALING</h3>
                  <p class="card-text">
                    Du kan bruge de mest populære betalingsmetoder, heriblandt
                    MobilePay.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
              <div class="card">
                <div class="card-block block-3">
                  <h3 class="card-title">SUPPORT</h3>
                  <p class="card-text">
                    Hvis du oplever problemer med siden, eller har spørgsmål, så
                    er vi altid klar til at hjælpe.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</template>

<script>
export default {
    name: "services",
}
</script>

<style scoped>
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
section {
  padding: 60px 0;
}
#what-we-do {
  background: #ffffff;
}
#what-we-do .card {
  padding: 1rem !important;
  border: none;
  margin-bottom: 1rem;
  -webkit-transition: 0.5s all ease;
  -moz-transition: 0.5s all ease;
  transition: 0.5s all ease;
}
#what-we-do .card:hover {
  -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
  -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
  box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}
#what-we-do .card .card-block {
  padding-left: 50px;
  position: relative;
}
#what-we-do .card .card-block a {
  color: #007b5e !important;
  font-weight: 700;
  text-decoration: none;
}
#what-we-do .card .card-block a i {
  display: none;
}
#what-we-do .card:hover .card-block a i {
  display: inline-block;
  font-weight: 700;
}
#what-we-do .card .card-block:before {
  font-family: FontAwesome;
  position: absolute;
  font-size: 39px;
  color: #000000;
  left: 0;
  -webkit-transition: -webkit-transform 0.2s ease-in-out;
  transition: transform 0.2s ease-in-out;
}
#what-we-do .card .block-1:before {
  content: "\f0d1";
}
#what-we-do .card .block-2:before {
  content: "\f09d";
}
#what-we-do .card .block-3:before {
  content: "\f085";
}
#what-we-do .card .block-4:before {
  content: "\f00c";
}
#what-we-do .card .block-5:before {
  content: "\f00c";
}
#what-we-do .card .block-6:before {
  content: "\f00c";
}
#what-we-do .card:hover .card-block:before {
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: 0.5s all ease;
  -moz-transition: 0.5s all ease;
  transition: 0.5s all ease;
}
</style>