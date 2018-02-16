<template>
    <b-container>
        <h1 class="text-center">Ajouter {{ type }}</h1>
    </b-container>
</template>

<script>
    import auth from './../auth'
    export default {
        name: "add",
        mounted() {
            auth.check()
        },
        computed: {
            type: function () {
                return this.$route.params.type == 'men' ? 'un homme' : 'une femme'
            },
        }
    }
</script>

<style scoped>

</style>