<template>
    <div class="bg-white lg:w-6/12 md:6/12 w-10/12 m-auto my-10 shadow-md">
        <div class="py-8 px-8">
            <div class="form-group">
                <InputText
                    v-model="name"
                    name="name"
                    id="name"
                    label="Name"
                    type="text"
                    class="form-input"
                ></InputText>
                <InputText
                    v-model="email"
                    name="email"
                    id="email"
                    label="E-mail"
                    type="email"
                    class="form-input"
                ></InputText>
                <div class="row">
                    <InputText
                        v-model="password"
                        name="password"
                        id="password"
                        label="Password"
                        type="password"
                        class="form-input"
                    ></InputText>
                    <InputText
                        v-model="password_confirmation"
                        name="password_confirmation"
                        id="password_confirmation"
                        label="Password confirmation"
                        type="password"
                        class="form-input"
                    ></InputText>
                </div>
                <button type="button" @click="register">Register</button>
            </div>
        </div>
    </div>
</template>

<script>
import InputText from '../Components/Forms/InputText.vue';
export default {
    name: 'Register',

    components: {
        InputText
    },

    data() {
        return {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
        };
    },

    methods: {
        async register() {
            let resp = await axios.post(`${process.env.MIX_APP_URL}/api/auth/register`, {
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation,
            });

            if (resp.status == 200) {
                this.$store.auth.dispatch('setUser', resp.data);
            }            
        }
    }
}
</script>

<style>

</style>