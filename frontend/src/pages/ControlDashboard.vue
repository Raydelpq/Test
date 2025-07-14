<template>
  <main class="min-h-screen bg-gray-50 text-gray-800 pt-20">
    <!-- Menú superior como componente -->
    <NavBar title="Dashboard" />

    <!-- Contenido principal -->
    <section class="max-w-xl mx-auto mt-10 p-6">
      <header class="mb-6 text-center">
        <h1 class="text-3xl font-bold text-blue-700">Dashboard de Usuarios</h1>
      </header>
      <Statistics />
    </section>
  </main>
</template>

<script>
import Statistics from '@/components/UserStatistics.vue'
import NavBar from '@/components/NavBar.vue'

export default {
  name: 'ControlDashboard',
  components: { Statistics, NavBar }
}
</script>
