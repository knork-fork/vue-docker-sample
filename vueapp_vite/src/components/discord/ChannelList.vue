<script setup lang="ts">
import Channel from '@/components/discord/Channel.vue';
</script>

<template>
    <div>
        <Channel
            channel-name="general"
            :selected="true"
        />
        <Channel
            channel-name="random"
            :selected="false"
        />
        <Channel
            channel-name="other"
            :selected="false"
        />
    </div>
</template>
