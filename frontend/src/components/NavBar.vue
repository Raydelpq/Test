<template>
  <nav class="fixed top-0 left-0 w-full bg-blue-700 text-white px-6 py-4 flex items-center justify-between shadow z-50">
    <span class="text-xl font-bold">{{ title }}</span>
    <div class="flex gap-6">
      <router-link
        to="/"
        class="hover:underline"
        :class="{ 'font-bold underline': $route.path !== '/' }"
      >
        Dashboard
      </router-link>
      <router-link
        to="/usuarios"
        class="hover:underline"
        :class="{ 'font-bold underline': $route.path !== '/usuarios' }"
      >
        Usuarios
      </router-link>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'NavBar',
  props: {
    title: {
      type: String,
      default: 'Dashboard'
    }
  },
}
</script>
