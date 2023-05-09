export default interface Card {
    name: string;
    phone: string;
    greeting: string;
    description: string;
    birthdate: Date;
    weight: unknown;
    height: unknown;
    chest: unknown;
    hair: string;
    figure: string;
    text_description: string;
    service_ids: Record<string, unknown>;
    user_id: number;
    created_at: Date | null;
    updated_at: Date | null;
    price_table: [{ name: String; price: Number }];
}
