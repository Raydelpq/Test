<template>
  
  <main class="min-h-screen bg-gray-50 text-gray-800 pt-20">
    <!-- Menú superior como componente -->
    <NavBar title="Listado de Usuarios" />

    <!-- Mostrar loader si está cargando -->
    <LoadingOverlay v-if="loading" />

    <div>
      <div class="overflow-x-auto">

        <div class="flex justify-between items-left mb-4">
          <select v-model="role" @change="loadUsers(1)" class="mb-4 p-2 border rounded">
            <option value="">Todos los roles</option>
            <option v-for="role in roles" :value="role" :key="role">{{ role }}</option>
          </select>
        </div>

        <table class="min-w-full bg-white shadow-lg rounded-lg overflow-hidden">
          <thead class="bg-blue-600 text-white">
            <tr>
              <th class="px-6 py-3 border-b-2 border-blue-700 text-left text-sm font-semibold uppercase tracking-wider">
                Nombre
              </th>
              <th class="px-6 py-3 border-b-2 border-blue-700 text-left text-sm font-semibold uppercase tracking-wider">
                Email
              </th>
              <th class="px-6 py-3 border-b-2 border-blue-700 text-left text-sm font-semibold uppercase tracking-wider">
                Rol
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="user in users" :key="user.id" class="hover:bg-blue-50 transition-colors">
              <td class="px-6 py-4 border-b border-gray-200">{{ user.name }}</td>
              <td class="px-6 py-4 border-b border-gray-200">{{ user.email }}</td>
              <td class="px-6 py-4 border-b border-gray-200">{{ user.roles[0] }}</td>
            </tr>
            <tr v-if="users.length === 0">
              <td colspan="2" class="px-6 py-4 text-center text-gray-400">No hay usuarios para mostrar</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- Paginador -->
      <div class="flex justify-center items-center gap-2 mt-4">
        <button class="px-3 py-1 bg-blue-600 text-white rounded disabled:opacity-50"
          :disabled="pagination.current_page === 1" @click="changePage(pagination.current_page - 1)">
          Anterior
        </button>
        <span>Página {{ pagination.current_page }} de {{ pagination.last_page }}</span>
        <button class="px-3 py-1 bg-blue-600 text-white rounded disabled:opacity-50"
          :disabled="pagination.current_page === pagination.last_page" @click="changePage(pagination.current_page + 1)">
          Siguiente
        </button>
      </div>
    </div>
  </main>
</template>

<script>
import { fetchUsers } from '@/api/userApi.js'
import NavBar from '@/components/NavBar.vue'
import LoadingOverlay from '@/components/LoadingOverlay.vue'

export default {
  components: { NavBar,LoadingOverlay },
  data() {
    return {
      users: [],
      roles: ['manager', 'revisor', 'comprador'],
      role: '',
      pagination: {
        current_page: 1,
        last_page: 1,
        total: 0
      }
    };
  },
  created() {
    this.loadUsers(this.pagination.current_page);
  },
  methods: {
    async loadUsers(page = 1) {
      this.loading = true; // inicia carga
      try {
        const { users, pagination } = await fetchUsers(page, this.role);
        this.users = users.data;
        this.pagination = pagination;
      } catch (error) {
        console.error('Error fetching users:', error);
      } finally {
        this.loading = false; // termina carga
      }
    },
    changePage(page) {
      if (page >= 1 && page <= this.pagination.last_page) {
        this.loadUsers(page);
      }
    }
  }
}
</script>


<style scoped>
/* Puedes agregar estilos personalizados aquí */
</style>