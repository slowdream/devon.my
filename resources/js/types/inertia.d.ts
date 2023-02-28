export {};
declare global {
    export namespace inertia {
        export interface User {
            id: number;
            name: string;
            email: string;
            created_at: Date;
            updated_at: Date;
        }

        export interface Jetstream {
            [key: string]: boolean;
        }

        export type ErrorBags = { [key: string]: string[] } | undefined;

        export type Errors = string[] | undefined;

        export type Flash = {
            message: string | undefined;
            error: string[] | undefined;
        };
    }
}
