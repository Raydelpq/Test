import { createRouter, createWebHistory } from 'vue-router'
import Dashboard from '@/pages/ControlDashboard.vue'
import UsersPage from '@/pages/UsersPage.vue'

const routes = [
  { path: '/', name: 'Dashboard', component: Dashboard },
  { path: '/usuarios', name: 'Usuarios', component: UsersPage },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
