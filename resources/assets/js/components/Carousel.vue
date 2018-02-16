<template>
    <div>
        <b-carousel id="carousel1"
                    style="text-shadow: 1px 1px 2px #333;"
                    controls
                    indicators
                    background="#ababab"
                    :interval="4000"
                    img-width="640"
                    img-height="480"
                    v-model="slide"
                    @sliding-start="onSlideStart"
                    @sliding-end="onSlideEnd"
        >

            <!-- Text slides with image -->
            <b-carousel-slide caption="2018"
                              text="Nouvelle collection de photos"
                              img-src="https://loremflickr.com/640/480/girl?random=1"
            ></b-carousel-slide>

            <!-- Slides with custom text -->
            <b-carousel-slide img-src="https://loremflickr.com/640/480/girl?random=2">
                <h1>Nouveau Book</h1>
            </b-carousel-slide>

            <!-- Slides with image only -->
            <b-carousel-slide img-src="https://loremflickr.com/640/480/girl?random=3">
            </b-carousel-slide>

            <!-- Slides with img slot -->
            <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
            <b-carousel-slide>
                <img slot="img" class="d-block img-fluid w-100" width="640" height="480"
                     src="https://loremflickr.com/640/480/girl?random=4" alt="image slot">
            </b-carousel-slide>

        </b-carousel>

    </div>
</template>

<script>
    export default {
        name: "carousel",
        data () {
            return {
                slide: 0,
                sliding: null
            }
        },
        methods: {
            onSlideStart (slide) {
                this.sliding = true
            },
            onSlideEnd (slide) {
                this.sliding = false
            }
        }
    }
</script>

<style scoped>

</style>