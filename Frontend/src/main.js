import { createApp } from 'vue'
import App from './App.vue'
import $ from 'jquery'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap/dist/js/bootstrap.js'
import './axios'
import router from './router'

createApp(App).use(router).use($).mount('#app')
