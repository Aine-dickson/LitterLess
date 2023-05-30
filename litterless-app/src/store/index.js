import { createStore } from "vuex";

export default createStore({
  state: {
    user: {
      type: 'admin',
    },
  },
  getters: {

  },
  mutations: {
    userUpdate(state, payload){
        state.user = payload;
    }
  },
  actions: {
    async signup({ commit }, payload) {
        try {
            const response = await fetch('http://localhost/litterless/signup.php', {
              body: JSON.stringify(payload),
              method: 'POST',
              headers: {
                'Content-Type': 'application/json',
              },
            });
           console.log(payload);
           const data = await response.json(); // Parse response as JSON
           console.log('Response:', data);
        } catch (error) {
           console.error('Error:', error);
        }
    },
    async login({commit}, payload) {
        try{
            const response = await fetch('http://localhost/litterless/login.php', {
              body: JSON.stringify(payload),
              method: 'POST',
              headers: {
                'Content-Type': 'application/json',
              },
            });
           console.log(payload);
           const data = await response.json(); // Parse response as JSON
           console.log('Response:', data);
        } catch {

        }
    },
    async reportWaste({commit}, payload){
        try{
            const response = await fetch('http://localhost/litterless/reportWaste.php', {
              body: JSON.stringify(payload),
              method: 'POST',
              headers: {
                'Content-Type': 'application/json',
              },
            });
           console.log(payload);
           const data = await response.json(); // Parse response as JSON
           console.log('Response:', data);
        } catch(error) {

        }
    }
  },
  modules: {

  },
});
