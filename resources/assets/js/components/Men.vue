<template>
    <b-container>
        <h1 class="text-center">Les hommes</h1>
        <b-row v-for="(men, index) in chunkedMen" :key="index">
            <b-col v-for="(man, key) in men" :key="man.id">
                <b-card
                        :title="`${man.first_name} ${man.last_name}`"
                        :img-src="`/img/homme-${key + 1 + (index * 3)}.jpg`"
                        img-alt="Image"
                        img-top
                        tag="article"
                        class="mb-2">
                    <p class="card-text">
                        couleur de cheveux: {{ man.hair }}<br/>
                        taille: {{ man.height }} cm<br/>
                        tour de taille: {{ man.waist }} cm<br/>
                        pointure: {{ man.shoe_size }}
                    </p>
                    <b-btn v-b-modal.modal @click="selectMan(man)" variant="primary">Voir la galerie</b-btn>
                </b-card>
            </b-col>
        </b-row>
        <b-modal size="lg" id="modal" :title="`${selected.first_name} ${selected.last_name}`">
            <b-row>
                <b-col>
                    <b-row v-for="i in 4" :key="i">
                        <b-col>
                            <b-img width="100" height="100" :src="`https://loremflickr.com/200/200/boy?random=${i}`" fluid alt="Responsive image" />
                        </b-col>
                    </b-row>
                </b-col>
                <b-col>
                    <h4>pointure: {{ selected.shoe_size }}</h4><br/>
                    <h4>couleur de cheveux: {{ selected.hair }}</h4><br/>
                    <h4>taille: {{ selected.height }} cm</h4><br/>
                    <h4>tour de taille: {{ selected.waist }} cm</h4><br/>
                </b-col>
            </b-row>
        </b-modal>
    </b-container>
</template>

<script>
    export default {
        name: "men",
        data() {
            return {
                men: [],
                selected: {},
                chunkedMen: []
            }
        },
        mounted() {
            if (this.men.length === 0) {
                this.fetchMen()
            }
        },
        methods: {
            fetchMen: function () {
                this.$http.get('/api/v1/men').then(res => {
                    if (res.json() && res.body) {
                        this.men = res.body.data
                        this.chunkedMen = _.chunk(this.men, 3)
                    }
                })
            },
            selectMan: function (man) {
                console.log(man)
                this.selected = man
            }
        }
    }
</script>

<style scoped>

</style>