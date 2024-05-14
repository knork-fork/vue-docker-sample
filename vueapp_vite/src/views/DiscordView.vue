<script setup lang="ts">
import FolderList from "@/components/discord/FolderList.vue";
import ChannelList from "@/components/discord/ChannelList.vue";
import MessageList from "@/components/discord/MessageList.vue";
import MenuRibbon from "@/components/discord/MenuRibbon.vue";
import ChannelTitle from "@/components/discord/ChannelTitle.vue";
import FolderTitle from "@/components/discord/FolderTitle.vue";
import MessageInput from "@/components/discord/MessageInput.vue";
import Search from "@/components/discord/Search.vue";
</script>

<template>
  <div class="main-app">
    <div class="left-panel">
      <FolderList class="folder-list" />
    </div>
    <div class="middle-panel">
      <FolderTitle folder-name="Folder 1" />
      <ChannelList class="channel-list" />
      <MenuRibbon class="menu-ribbon" />
    </div>
    <div class="right-panel">
      <div class="app-ribbon">
        <ChannelTitle channel-name="general" channel-description="Channel description goes here" />
        <Search />
      </div>
      <MessageList class="message-list" />
      <MessageInput />
    </div>
  </div>
</template>

<style scoped>
.main-app {
  display: flex;
  align-items: stretch;
  gap: 0px;
  height: 100%;
  font-family: Roboto,sans-serif;
}

.left-panel {
    display: flex;
    /*align-items: center;*/
    justify-content: center;
    height: 100%;
    /*border: 1px solid black;*/
    background-color: #1e1f22;
    width: 75px;
    min-width: 75px;
}

.middle-panel {
    display: flex;
    flex-direction: column; /* stack children vertically */
    justify-content: space-between; /* spread out children */
    height: 100%; /* ensure it takes full available height */
    /*border: 1px solid black;*/
    background-color: #2a2d31;
    width: 240px;
    min-width: 240px;
}

.right-panel {
    display: flex;
    flex-direction: column; /* stack children vertically */
    justify-content: space-between; /* spread out children */
    height: 100%; /* ensure it takes full available height */
    flex:auto;
    /*border: 1px solid black;*/
    background-color: #313338;
}

.folder-list {
    overflow-y: auto;
}

.channel-list {
    flex-grow: 1;
    overflow-y: auto;
}

.menu-ribbon {
    margin-top: auto;
    background-color: #232428;
}

.app-ribbon {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    /*border-bottom: 2px solid #4f545c;*/
    height:48px;
    min-height:48px;
    box-shadow: 0px 1.5px 0px rgba(0, 0, 0, 0.25);
}

.message-list {
    flex-grow: 1; /* Takes all available space */
    overflow-y: auto; /* Enables scrolling */
    display: flex;
    flex-direction: column-reverse; /* Newest messages at the bottom */
}
</style>
