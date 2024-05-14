<script setup lang="ts">
defineProps<{
    channelName: string;
    selected: boolean;
}>();
import ChannelHashtag from '@/components/discord/ChannelHashtag.vue';
</script>

<template>
    <div :class="['channel-item', { 'channel-item-selected': selected }]">
        <ChannelHashtag />
        {{ channelName }}
    </div>
</template>

<style scoped>
.channel-item {
    display: flex;
    align-items: center;
    justify-content: left;
    gap: 15px;
    color: #7f848d; /* Dark grey color for text */
    font-size: 16px;
    cursor: pointer; /* Indicates the item is clickable */
    border-radius: 4px; /* Rounded corners for a smoother look */
    padding: 4px 0px 4px 15px;
    margin: 2px 8px 0px 8px;
}

.channel-item-selected {
    color: white;
    background-color: #3f4248;
}

.channel-item:hover {
    color: white;
    background-color: #34373c;
}
</style>
