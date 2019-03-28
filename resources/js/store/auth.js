const state = {
    user:null
}

const getters = {}

const mutations = {
    setUser(state, user){
        state.user = user
    }
}

const actions = {
    async register (context, data) {
        console.log(data)
        const response = await axios.post('/api/register', data)
        context.commit('setUser', response.data)
    },
    async login (context, data) {
        console.log(data)
        const response = await axios.post('/api/login', data)
        context.commit('setUser', response.data)
    },
    async logout (context) {
        const response = await axios.post('/api/logout')
        console.log('logout')
        context.commit('setUser', null)
    }
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
}