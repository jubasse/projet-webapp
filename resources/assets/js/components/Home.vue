<template>
    <b-container>
        <h1 class="text-center">Bienvenue</h1>
        <p>
            Bienvenue ! Ce site regroupe différentes photos et informations sur des mannequins homme ou femme.
        </p>
        <p>
            Vous pouvez utiliser les onglets de navigation pour afficher les mannequins ou pour nous contacter
        </p>
        <p>
            Bonne visite !
        </p>
        <carousel />
    </b-container>
</template>

<script>
    import Carousel from './Carousel.vue'
    export default {
        name: "home",
        components: {
            'carousel': Carousel
        },
        data() {
            return {}
        },
        mounted() {

        }
    }
</script>

<style scoped>

</style>