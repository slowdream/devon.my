<template>
    <AppLayout>
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
                    <span class="breadcrumb-last">{{ card.name }}</span>
                </div>
                <nav class="profile-nav-link">
                    <a href="#" class="previus">
                        <i class="icon ion-ios-arrow-thin-left"></i>
                    </a>
                    <a href="#" class="next">
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
                            v-for="photo in card.photos"
                            :src="photo"
                            class="main-photo"
                        >
                    </div>
                    <div class="col-lg-6 thumbnail-photo">
                        <div class="row-sm justify-content-center">
                            <div
                                v-for="photo in card.photos"

                                class="col-6 col-md-4"
                            >
                                <img
                                    :src="photo"
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
                            <h2 class="profile-title">{{ card.name }}</h2>
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
                                <span class="attr-value">{{ card.height }}</span>
                            </p>
                            <p class="attr-item">
                                <span class="attr-name">Вес:</span>
                                <span class="attr-value">{{ card.weight }}</span>
                            </p>
                            <p class="attr-item">
                                <span class="attr-name">Грудь:</span>
                                <span class="attr-value">{{ card.chest }}</span>
                            </p>
                            <p class="attr-item">
                                <span class="attr-name">Национальность:</span>
                                <span class="attr-value">{{ card.nationality }}</span>
                            </p>
                            <p class="attr-item">
                                <span class="attr-name">Волосы:</span>
                                <span class="attr-value">{{ card.hair }}</span>
                            </p>
                            <p class="attr-item">
                                <span class="attr-name">Фигура:</span>
                                <span class="attr-value">{{ card.figure }}</span>
                            </p>
                            <p class="attr-item">
                                <span class="attr-name">Ориентация:</span>
                                <span class="attr-value">{{ card.orientation }}</span>
                            </p>
                        </div>
                        <div class="model-description">
                            {{ card.description }}
                        </div>
                    </div>
                </section>
                <aside class="col-md-3">
                    <!--                    <p class="soc-icons">
                                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </p>-->
                    <a href="#" class="btn-classic">Send Privat message</a>
                </aside>
            </div>
        </div>
        <!-- End Model Profile -->
    </AppLayout>
</template>

<script>
import AppLayout from '../../Layouts/AppLayout'
import { Link } from '@inertiajs/inertia-vue3'

export default {
    name: 'Show',
    components: { AppLayout, Link },
    props: {
        card: Object,
    },
    mounted () {
        console.log(this.card)
    }
}
</script>
