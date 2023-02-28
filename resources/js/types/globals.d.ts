import type { Page } from '@inertiajs/core';
import { PageProps } from '@inertiajs/core';

declare module '@inertiajs/core' {
    export interface PageProps extends Page<PageProps> {
        user: inertia.User;
        jetstream: inertia.Jetstream;
        errors: inertia.Errors;
        errorBags: inertia.ErrorBags;
        flash: inertia.Flash;
    }
}

declare module '@inertiajs/vue3' {
    export function usePage<T>(): Page<PageProps>;
}
