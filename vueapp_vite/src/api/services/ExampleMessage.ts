import { ExampleApiMessageModel } from '@/models/ExampleMessage';
import { ExampleMessageServiceInterface } from '../interfaces/ExampleMessage';

export class ExampleMessageService implements ExampleMessageServiceInterface {
    constructor() {}

    async getMessages(): Promise<ExampleApiMessageModel[]> {
        const response = await fetch('/api/api_2');
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const data = await response.json();

        if (!data) return [];

        return {
            ...data,
        };
    }
}
