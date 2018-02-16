<template>
    <b-container>
        <h1>Se connecter</h1>
        <b-form @submit="onSubmit" >
            <b-form-group label="Email" label-for="email" >
                <b-form-input
                        id="email" type="email"
                        v-model="email" required
                        placeholder="Email...">
                </b-form-input>
            </b-form-group>
            <b-form-group label="Mot de passe" label-for="password">
                <b-form-input id="password" type="password"
                              v-model="password" required
                              placeholder="Mot de passe...">
                </b-form-input>
            </b-form-group>
            <b-button type="submit" variant="primary">Submit</b-button>
        </b-form>
    </b-container>
</template>

<script>
    import auth from './../auth'
    export default {
        name: "login",
        data() {
            return {
                email: null,
                password: null,
                error: false,
                show: true
            }
        },
        methods: {
            onSubmit(e) {
                e.preventDefault()
                auth.signin(this, this.email, this.password)

            }
        }
    }
</script>

<style scoped>

</style>