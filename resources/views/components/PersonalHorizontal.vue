<template>
    <article class="model-row">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-2 offset-xl-0">
                <a :href="route('show', card.id)" class="img-wr">
                    <img :src="card.photos[0].original_url" alt="">
                </a>
            </div>
            <div class="col-xl-6">
                <div class="row-model-info">
                    <h3 class="title">
                        <Link :href="route('show', card.id)">
                            {{ card.name }}
                        </Link>
                    </h3>
                    <div class="model-attr">
                        <p class="attr-item">
                            <span class="attr-name">Рост: </span>
                            <span class="attr-value">{{ card.height }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Вес: </span>
                            <span class="attr-value">{{ card.weight }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Грудь: </span>
                            <span class="attr-value">{{ card.chest }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Национальность: </span>
                            <span class="attr-value">{{ card.nationality }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Волосы: </span>
                            <span class="attr-value">{{ card.hair }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Фигура: </span>
                            <span class="attr-value">{{ card.figure }}</span>
                        </p>
                    </div>
                    <!--
                    <p class="rating">
                        <i aria-hidden="true" class="fa fa-star active"></i>
                        <i aria-hidden="true" class="fa fa-star active"></i>
                        <i aria-hidden="true" class="fa fa-star active"></i>
                        <i aria-hidden="true" class="fa fa-star active"></i>
                        <i aria-hidden="true" class="fa fa-star active"></i>
                    </p>
                    -->
                </div>
            </div>
            <div class="col-xl-4">
                <p class="soc-icons-wr">
                    {{ card.phone }}
                </p>
            </div>
        </div>
    </article>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'

const { card } = defineProps(['card'])
</script>
