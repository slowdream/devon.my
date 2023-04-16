import Card from '@/types/models/card';

export default interface Collection {
    data: Array<Card>;
    links: Object;
    meta: Object;
}
