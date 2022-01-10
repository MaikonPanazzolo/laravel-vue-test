import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';

Vue.use(Vuex);

const auth = new Vuex.Store({
    state: {
        token: null,
        tokenExpiration: null,
    },

    getters: {
        loggedIn(state) {
            return state.token !== null;
        },

        token(state) {
            return state.token;
        },

        tokenExpiration(state) {
            return state.tokenExpiration;
        }
    },

    mutations: {
        setToken(state, token) {
            state.token = token;
        },

        setTokenExpiration(state, expiration) {
            state.tokenExpiration = expiration;
        }
    },

    actions: {
         async setUser({ commit, getters }, user) {
            commit('setToken', user.token);
            commit('setTokenExpiration', user.expires_in);

            let expirationTimer = setInterval(async () => {

                if (getters.token === null) {
                    clearInterval(expirationTimer);
                    return;
                }

                let expiration = new Date(new Date().getTime() + getters.tokenExpiration * 1000);
                let now = new Date();

                if (now > expiration) {
                    await this.dispatch('refreshToken');
                }
            }, 1000);            
        },

        async refreshToken({ commit }) {
            let resp = await axios.post(`${process.env.APP_URL}/api/auth/refresh`, {
                token: this.state.token,
            });

            if (resp.status == 200) {
                commit('setToken', resp.data.token);
                commit('setTokenExpiration', resp.data.expires_in);
            }

        },

        logout({ commit }) {
            commit('setUser', null);
            commit('setToken', null);
        }
    },
});

export default auth;