<template>
  <div class="cunt">
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3 id="h">Login</h3>
            <p id="p">Lønstrup Perlen</p>
          </div>
        </div>
        <form @submit.prevent="login" class="login-form">
          <input type="text" placeholder="username" v-model="user.email" />
          <input
            type="password"
            placeholder="password"
            v-model="user.password"
          />
          <button type="submit">login</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Login",

  data() {
    return {
      user: {
        email: null,
        password: null,
      },
      loading: false,
      error: null,
    };
  },

    methods: {
      async login() {
        try {
          await axios.get("http://127.0.0.1:8000/sanctum/csrf-cookie");
          const response = await axios.post("http://127.0.0.1:8000/api/login", this.user);
          localStorage.setItem("token", response.data.token);
          localStorage.setItem("user", response.data.user);
          this.$router.push({ path: 'admin' });
        } catch(err){
          alert(err);
          //TODO: Vis "Forkert kodeord" til brugeren
        }
      },
    },
    mounted(){
      if(localStorage.getItem('token') != null){
        this.$router.push({ path: 'admin' });
      }
    }
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css?family=Archivo");
#h {
  font-family: "Archivo";
  color: #ffffff;
}
#p {
  font-family: "Archivo";
  color: #ffffff;
}

.cunt {
  background-image: url("../assets/544750.jpg");
  height: 100vh;
  width: 100%;
  padding-top: 150px;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login {
  margin-top: -31px;
  margin-bottom: 26px;
}

.form {
  position: relative;
  z-index: 1;
  background: #ffffff26;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Archivo";
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Archivo";
  text-transform: uppercase;
  outline: 0;
  background-color: #328f8a;
  background-image: linear-gradient(45deg, #328f8a, #08ac4b);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #ffffff;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #ffffff;
  font-size: 12px;
}
.form .message a {
  color: #4caf50;
  text-decoration: none;
}
</style>