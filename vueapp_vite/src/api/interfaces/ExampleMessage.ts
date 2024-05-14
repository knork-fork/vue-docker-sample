import { ExampleApiMessageModel } from '@/models/ExampleMessage';

export interface ExampleMessageServiceInterface {
    getMessages(): Promise<ExampleApiMessageModel[]>;
}
