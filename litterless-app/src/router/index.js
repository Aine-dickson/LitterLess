import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
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
        }
      ]
    },
  ]
})

export default router
