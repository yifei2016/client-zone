import Vue from 'vue'
import VueRouter from 'vue-router'
import Welcome from './components/Welcome.vue'

Vue.use(VueRouter)

const router = new VueRouter({
  routes: [
    {
      path: '/welcome',
      name: 'welcome',
      component: Welcome
    }
  ]
})
export default router