const API_URL = 'http://localhost:8001/api';

export async function fetchUsers(page = 1, role = '') {
  try {

    let endpoint;

    if (role != '') {
      endpoint = `${API_URL}/users/by-role?role=${encodeURIComponent(role)}&page=${page}`;
    } else {
      endpoint = `${API_URL}/users?page=${page}`;
    }

    // Simulación de respuesta paginada
    const response = await fetch(`${endpoint}`);
    const data = await response.json();

    
    return {
      users: data,
      pagination: {
        current_page: page,
        last_page: data.pagination.last_page,
        total: data.pagination.total   
      }
    };
  } catch (error) {
    throw new Error('Error al obtener usuarios');
  }
}