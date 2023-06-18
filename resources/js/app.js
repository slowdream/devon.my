import './bootstrap';
import '../css/style.scss';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import {
    Checkbox,
    Form,
    File,
    Group,
    Input,
    Radio,
    Select,
    Submit,
    Textarea,
} from '@protonemedia/form-components-pro-vue3-tailwind3-simple';
import Slider from '@vueform/slider';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

import MainLayout from './Layouts/MainLayout.vue';

import '@vueform/slider/themes/default.css';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component('Checkbox', Checkbox)
            .component('Form', Form)
            .component('File', File)
            .component('Group', Group)
            .component('Input', Input)
            .component('Radio', Radio)
            .component('Select', Select)
            .component('Submit', Submit)
            .component('Textarea', Textarea)
            .component('Slider', Slider)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
    resolve: (name) => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
        const page = pages[`./Pages/${name}.vue`];

        if (typeof page === 'undefined') {
            throw new Error(`Page not found: ${name}`);
        }
        page.default.layout = page.default.layout || MainLayout;

        return page;
    },
});
