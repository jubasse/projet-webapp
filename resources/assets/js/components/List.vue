<template>
    <b-container>
        <h1 class="text-center">Liste des mannequins {{ type }}</h1>
        <b-table striped hover :items="items"></b-table>
    </b-container>
</template>

<script>
    import auth from './../auth'
    export default {
        name: "list",
        data() {
            return {
                items: []
            }
        },
        mounted() {
            if (['women', 'men'].indexOf(this.$route.params.type) === -1) {
                this.$router.push('dashboard')
            }
            auth.check()
            this.getItems(this.$route.params.type)
        },
        computed: {
            type: function () {
                return this.$route.params.type == 'men' ? 'homme' : 'femme'
            },
        },
        methods: {
            getItems: function (type) {
                this.$http.get('/api/v1/' + type).then(res => {
                    this.items = res.body.data
                })
            }
        }
    }
</script>

<style scoped>

</style>