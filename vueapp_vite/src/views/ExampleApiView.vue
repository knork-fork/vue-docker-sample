<script setup lang="ts">
import { ExampleMessageService } from "@/api/services/ExampleMessage";
import ExampleApiMessage from "@/components/ExampleApiMessage.vue";
import { ExampleApiMessageModel } from "@/models/ExampleMessage";
import { ref, onMounted } from 'vue';

const exampleMessageService = new ExampleMessageService();
const messages = ref([]);

onMounted(async () => {
    messages.value = await exampleMessageService.getMessages();
});
</script>

<template>
    <div>
        <p>This is an example for API:</p>
        <div v-for="(message, index) in messages" :key="index">
            <ExampleApiMessage :data="message" />
            <br>
        </div>
    </div>
    
</template>