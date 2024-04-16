<script setup lang="ts">
import { ExampleApiMessageModel } from '../models/ExampleMessage';

const props = defineProps({
    data: {
        type: Object as () => ExampleApiMessageModel,
        required: true
    }
});
</script>

<template>
    <v-card>
        <v-card-title>User: {{ props.data.user }}</v-card-title>
        <v-card-text>
            <p>{{ props.data.message }}</p>
        </v-card-text>
    </v-card>
</template>