<template>
    <div class="bg-white lg:w-4/12 md:6/12 w-10/12 m-auto my-10 shadow-md">
        <div class="py-8 px-8 rounded-xl">
            <h1 class="font-medium text-2xl mt-3 text-center">Login</h1>
            <div class="mt-6 form-group">
                <InputText
                    v-model="email"
                    name="email"
                    id="email"
                    label="E-mail"
                    type="email"
                    class="form-input"
                ></InputText>
                <InputText
                    v-model="password"
                    name="password"
                    id="password"
                    label="Password"
                    type="password"
                    class="form-input"
                ></InputText>
                <button type="button" @click="login">Login</button>
            </div>
            <p class="mt-12 text-xs text-center font-light text-gray-400"> Don't have an account? <a href="javascript:void(0);" @click="register" class="text-black font-medium"> Create One </a>  </p>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import InputText from '../Components/Forms/InputText.vue'
export default {
    name: 'Home',

    components: {
        InputText
    },

    data() {
        return {
            email: '',
            password: '',
        };
    },

    methods: {
        async login() {
            let resp = await axios.post(`${process.env.MIX_APP_URL}/api/auth/login`, {
                email: this.email,
                password: this.password,
            });

            if (resp.status == 200) {
                this.$store.auth.dispatch('setUser', resp.data);
            }
        },

        register() {
            this.$router.push('register');
        },
    }    
}
</script>