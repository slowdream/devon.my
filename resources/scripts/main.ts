import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { resolvePageComponent } from 'vite-plugin-laravel/inertia'
// @ts-ignore
import { ZiggyVue } from 'ziggy-js/src/js/vue'

// import '@/assets/scss/style.scss'
import '@/css/style.scss'

import '@/assets/js/jquery-3.3.1.min.js'
import '@/assets/js/bootstrap.js'
import '@/assets/js/bootstrap-dropdown.min.js'
import '@/assets/js/bootstrap-select.js'
import '@/assets/slick/slick.js'
import '@/assets/js/slider.js'
import '@/assets/js/common.js'

createInertiaApp({
    resolve: (name) => resolvePageComponent(name, import.meta.glob('../views/pages/**/*.vue')),
    setup({el, app, props, plugin}) {
        createApp({render: () => h(app, props)})
            .use(plugin)
            .use(ZiggyVue)
            .mount(el)
    },
})
