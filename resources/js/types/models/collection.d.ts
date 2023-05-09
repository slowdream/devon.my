import Card from '@/types/models/card';

export default interface CardCollection {
    data: Array<Card>;
    links: Object;
    meta: Object;
}
