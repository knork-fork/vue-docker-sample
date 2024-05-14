<script setup lang="ts">
import { useRoute } from 'vue-router';

const route = useRoute();
</script>

<template>
    <p>This is an example view for id: {{ route.params.id }}</p>
</template>
