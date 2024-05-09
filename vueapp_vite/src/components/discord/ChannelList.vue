<script setup lang="ts">
import Channel from '@/components/discord/Channel.vue';
</script>

<template>
    <div>
        <Channel channelName="general" :selected="true"/>
        <Channel channelName="random" :selected="false"/>
        <Channel channelName="other" :selected="false"/>
    </div>
</template>
