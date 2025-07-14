<template>
  <section class="bg-white shadow rounded-lg p-6">
    <h2 class="text-xl font-semibold text-blue-700 mb-4">Estadísticas de Usuarios</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <div class="bg-gray-100 p-4 rounded-lg">
        <h3 class="font-medium">Managers</h3>
        <p class="text-2xl">{{ stats.manager }}</p>
      </div>
      <div class="bg-gray-100 p-4 rounded-lg">
        <h3 class="font-medium">Comprador</h3>
        <p class="text-2xl">{{ stats.comprador }}</p>
      </div>
      <div class="bg-gray-100 p-4 rounded-lg">
        <h3 class="font-medium">Revisor</h3>
        <p class="text-2xl">{{ stats.revisor }}</p>
      </div>
    </div>

   
  </section>
</template>

<script>

export default {
  
  data() {
    return {
      stats: {
        manager: 0,
        comprador: 0,
        revisor: 0
      },
    }
  },
  mounted() {
    this.fetchUserStats()
  },
  methods: {
    async fetchUserStats() {
      try {
        const response = await fetch('http://localhost:8001/api/users/stats')
        const result = await response.json()
        if (result.success && result.data) {
          this.stats = result.data
        }
      } catch (error) {
        console.error('Error al obtener estadísticas:', error)
      }
    }
  }
}
</script>

<style scoped>
/* Puedes agregar estilos personalizados aquí si lo necesitas */
</style>
