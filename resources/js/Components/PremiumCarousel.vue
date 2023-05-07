<template>
    <Carousel :items-to-show="6" :wrap-around="true" :transition="500" :autoplay="20 * 1000">
        <Slide v-for="slide in 10" :key="slide">
            <div class="carousel__item">
                <span
                    style="display: block; width: 164px; height: 246px"
                    class="p-3 rounded bg-red-700"
                ></span>
            </div>
        </Slide>
    </Carousel>
</template>
<script setup>
import 'vue3-carousel/dist/carousel.css';
</script>
<script>
import { defineComponent } from 'vue';
import { Carousel, Slide } from 'vue3-carousel';

export default defineComponent({
    name: 'PremiumCarousel',
    components: {
        Carousel,
        Slide,
    },
});
</script>

<style scoped>
.carousel__slide {
    padding: 5px;
}

.carousel__viewport {
    perspective: 2000px;
}

.carousel__track {
    transform-style: preserve-3d;
}

.carousel__slide--sliding {
    transition: 0.5s;
}

.carousel__slide {
    opacity: 0.9;
    transform: rotateY(-20deg) scale(0.9);
}

.carousel__slide--active ~ .carousel__slide {
    transform: rotateY(20deg) scale(0.9);
}

.carousel__slide--prev {
    opacity: 1;
    transform: rotateY(-10deg) scale(0.95);
}

.carousel__slide--next {
    opacity: 1;
    transform: rotateY(10deg) scale(0.95);
}

.carousel__slide--active {
    opacity: 1;
    transform: rotateY(0) scale(1.1);
}
</style>
