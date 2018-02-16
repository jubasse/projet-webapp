<template>
    <b-container>
        <h1 class="text-center">Dashboard</h1>
        <b-row>
            <b-col>
                <b-img src="/img/user-add.png" width="75" height="75" fluid alt="Responsive image" />
                <b-button @click="add('men')" size="lg" variant="info">Ajouter un mannequin homme</b-button>
            </b-col>
            <b-col>
                <b-img src="/img/user-add.png" width="75" height="75" fluid alt="Responsive image" />
                <b-button @click="list('women')" size="lg" variant="primary">Ajouter un mannequin femme</b-button>
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <b-img src="/img/list.png" width="75" height="75" fluid alt="Responsive image" />
                <b-button @click="list('men')" size="lg" variant="info">Voir la liste des mannequins homme</b-button>
            </b-col>
            <b-col>
                <b-img src="/img/list.png" width="75" height="75" fluid alt="Responsive image" />
                <b-button @click="list('women')" size="lg" variant="primary">Voir la liste des mannequins femme</b-button>
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    import auth from './../auth'
    export default {
        name: "dashboard",
        mounted() {
            auth.check()
        },
        methods: {
            add: function (type) {
                this.$router.push({ name: 'add', params: { type }})
            },
            list: function (type) {
                this.$router.push({ name: 'list', params: { type }})
            }
        }
    }
</script>

<style scoped>

</style>