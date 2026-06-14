const BASE_URL = process.env.VUE_APP_API_BASE_URL ?? '/api'
 
async function request(method, endpoint, body = null) {
  const options = {
    method,
    headers: {
      'Content-Type': 'application/json',
    },
  }
 
  if (body !== null) {
    options.body = JSON.stringify(body)
  }
 
  const response = await fetch(`${BASE_URL}${endpoint}`, options)
 
  if (!response.ok) {
    const error = new Error(`HTTP ${response.status}: ${response.statusText}`)
    error.status = response.status
    try {
      error.data = await response.json()
    } catch {
      error.data = null
    }
    throw error
  }
 
  // 204 No Content
  if (response.status === 204) return null
 
  return response.json()
}
 
export const ApiService = {
  get: (endpoint) => request('GET', endpoint),
  post: (endpoint, body) => request('POST', endpoint, body),
  put: (endpoint, body) => request('PUT', endpoint, body),
  patch: (endpoint, body) => request('PATCH', endpoint, body),
  delete: (endpoint) => request('DELETE', endpoint),
}
 