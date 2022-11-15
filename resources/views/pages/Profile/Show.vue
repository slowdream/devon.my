<template layout>
    <!-- Breadcrumbs -->
    <div class="container">
        <div class="wrapper-breadcrumbs">
            <div id="breadcrumbs">
                <Link
                    :href="route('list')"
                >
                    Каталог
                </Link>
                <i class="icon ion-android-arrow-forward separator"></i>
                <span class="breadcrumb-last">{{ card.data.name }}</span>
            </div>
            <nav class="profile-nav-link">
                <a class="previus" href="#">
                    <i class="icon ion-ios-arrow-thin-left"></i>
                </a>
                <a class="next" href="#">
                    <i class="icon ion-ios-arrow-thin-right"></i>
                </a>
            </nav>
        </div>
    </div>
    <!-- End Breadcrumbs -->
    <!-- Model Profile -->
    <div class="profile-entry container">
        <div class="profile-photos">
            <div class="row-sm">
                <div class="col-lg-6 profile-photos-container">
                    <img
                        v-for="photo in card.data.photos"
                        :src="photo.original_url"
                        alt=""
                        class="main-photo"
                    />
                </div>
                <div class="col-lg-6 thumbnail-photo">
                    <div class="row-sm justify-content-center">
                        <div
                            v-for="photo in card.data.photos"

                            class="col-6 col-md-4"
                        >
                            <img
                                :src="photo.original_url"
                                alt=""
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <section class="col-md-9">
                <div class="profile-info">
                    <header class="profile-header">
                        <h2 class="profile-title">{{ card.data.name }}</h2>
                        <!--                            <p class="rating">
                                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                                        <i class="fa fa-star active" aria-hidden="true"></i>
                                                    </p>-->
                    </header>
                    <div class="model-attr">
                        <p class="attr-item">
                            <span class="attr-name">Рост:</span>
                            <span class="attr-value">{{ card.data.height }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Вес:</span>
                            <span class="attr-value">{{ card.data.weight }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Грудь:</span>
                            <span class="attr-value">{{ card.data.chest }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Национальность:</span>
                            <span class="attr-value">{{ card.data.nationality }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Волосы:</span>
                            <span class="attr-value">{{ card.data.hair }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Фигура:</span>
                            <span class="attr-value">{{ card.data.figure }}</span>
                        </p>
                        <p class="attr-item">
                            <span class="attr-name">Ориентация:</span>
                            <span class="attr-value">{{ card.data.orientation }}</span>
                        </p>
                    </div>
                    <div class="model-description">
                        {{ card.data.description }}
                    </div>
                </div>
            </section>
            <aside class="col-md-3">
                <!--                    <p class="soc-icons">
                                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </p>-->
                <a class="btn-classic" href="#">{{ card.data.phone }}</a>
            </aside>
        </div>
    </div>
    <!-- End Model Profile -->
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'

const { card } = defineProps(['card'])
</script>
