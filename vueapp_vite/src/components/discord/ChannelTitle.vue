<script setup lang="ts">
defineProps<{ 
    channelName: string,
    channelDescription: string
}>()
import ChannelHashtag from "@/components/discord/ChannelHashtag.vue";
</script>

<template>
    <div class="channel-title">
        <ChannelHashtag />
        {{ channelName }}
        <div style="border-left:1px solid #3d3d3d;height:50%"></div>
        <div class="channel-description"> {{ channelDescription }} </div>
    </div>
</template>

<style scoped>
.channel-title {
    cursor: default;
    display: flex;
    gap: 20px;
    align-items: center;
    justify-content: left;
    padding-left: 15px;
    font-size: 14px;
    font-weight: bold;
    color: white;
    text-align: center;
}

.channel-description {
    font-size: 12px;
    color: #7f848d;
}
</style>
