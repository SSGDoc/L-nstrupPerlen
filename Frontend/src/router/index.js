import { createRouter, createWebHistory } from 'vue-router'
import Home from '../Views/Home.vue'
import Admin from '../Views/About.vue'
import Login from '../Views/Login.vue'
import About from '../Views/About.vue'
import Cart from '../Views/Cart.vue'
import Contact from '../Views/Contact.vue'
import Products from '../Views/Products.vue'

const routes = [
  { path: '/', component: Home },

  { path: '/Admin', component: Admin },
  { path: '/Login', component: Login },

  { path: '/About', component: About },
  { path: '/Cart', component: Cart },
  { path: '/Contact', component: Contact },
  { path: '/Products', component: Products },
  
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
