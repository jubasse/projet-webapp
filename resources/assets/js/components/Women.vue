<template>
    <b-container>
        <h1 class="text-center">Women</h1>
        <b-row v-for="(women, index) in chunkedWoman" :key="index">
            <b-col v-for="(woman, key) in women" :key="woman.id">
                <b-card
                        :title="`${woman.first_name} ${woman.last_name}`"
                        :img-src="`/img/femme-${key + 1 + (index * 3)}.jpg`"
                        img-alt="Image"
                        img-top
                        tag="article"
                        class="mb-2">
                    <p class="card-text">
                        bonnet: {{ woman.cap_size }}<br/>
                        tour de poitrine: {{ woman.chest }}<br/>
                        couleur de cheveux: {{ woman.hair }}<br/>
                        taille: {{ woman.height }} cm<br/>
                        tour de taille: {{ woman.waist }} cm<br/>
                    </p>
                    <b-btn v-b-modal.modal @click="selectWoman(woman)" variant="primary">Voir la galerie</b-btn>
                </b-card>
            </b-col>
        </b-row>
        <b-modal size="lg" id="modal" :title="`${selected.first_name} ${selected.last_name}`">
            <b-row>
                <b-col>
                    <b-row v-for="i in 4" :key="i">
                        <b-col>
                            <b-img width="100" height="100" :src="`https://loremflickr.com/200/200/girl?random=${i}`" fluid alt="Responsive image" />
                        </b-col>
                    </b-row>
                </b-col>
                <b-col>
                    <h4>bonnet: {{ selected.cap_size }}</h4><br/>
                    <h4>tour de poitrine: {{ selected.chest }}</h4><br/>
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
        name: "women",
        data() {
            return {
                women: [],
                selected: {},
                chunkedWoman: []
            }
        },
        mounted() {
            if (this.women.length === 0) {
                this.fetchWomen()
            }
        },
        methods: {
            fetchWomen: function () {
                this.$http.get('/api/v1/women').then(res => {
                    if (res.json() && res.body) {
                        this.women = res.body.data
                        this.chunkedWoman = _.chunk(this.women, 3)
                    }
                })
            },
            selectWoman: function (woman) {
                console.log(woman)
                this.selected = woman
            }
        }
    }
</script>

<style scoped>

</style>