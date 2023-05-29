import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/index',
      name: 'main',
      component: () => import('../views/main.vue'),
      children: [
        {
          path: '/home',
          name: 'home',
          component: () => import('../views/pages/home.vue')
        },
        {
          path: '/chat',
          name: 'chat-room',
          component: () => import('@/views/pages/chat.vue')
        },
        {
          path: '/notifications',
          name: 'notifications',
          component: () => import('@/views/pages/notifications.vue')
        }
      ]
    },
    {
      path:'/',
      name:'auth',
      component: () => import('@/views/auth.vue'),
      children:[
        {
          path: '/login',
          name: 'login',
          component: () => import('@/views/auth/login.vue')
        },
        {
          path: '/signup',
          name: 'signup',
          component: () => import('@/views/auth/signup.vue')
        },
        {
          path: '/password-reset',
          name: 'reset_pass',
          component: () => import('@/views/auth/reset_pass.vue')
        }
      ]
    }
  ]
})

export default router
