<script setup lang="ts">
import AttachFileButton from '@/components/discord/buttons/AttachFileButton.vue';
import EmojiButton from '@/components/discord/buttons/EmojiButton.vue';
</script>

<template>
    <div class="message-input-ribbon">
        <div class="message-input">
            <div class="input-file">
                <AttachFileButton />
            </div>
            <div class="input-text">Message #general</div>
            <div class="input-emoji">
                <EmojiButton />
            </div>
        </div>
    </div>
</template>

<style scoped>
.message-input-ribbon {
    display: flex;
    align-items: top;
    justify-content: center;
    height: 66px;
    min-height: 66px;
}

.message-input {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #373a40;
    color: #696b74;
    height: 44px;
    width: 100%;
    margin-left: 16px;
    margin-right: 16px;
    border-radius: 8px;
}

.input-file {
    display: flex;
    align-items: center;
    justify-content: center;
    /*background-color: red;*/
    width: 56px;
    min-width: 56px;
    height: 100%;
}

.input-text {
    display: flex;
    align-items: center;
    justify-content: left;
    /*background-color: white;*/
    flex-grow: 1;
    height: 100%;
}

.input-emoji {
    display: flex;
    align-items: center;
    justify-content: center;
    /*background-color: red;*/
    width: 56px;
    min-width: 56px;
    height: 100%;
}
</style>

<!--<template>
    <v-form>
      <v-container>
        <v-row>
          <v-col cols="12">
            <v-text-field
              v-model="message"
              :append-icon="message ? 'mdi-send' : 'mdi-microphone'"
              :append-inner-icon="marker ? 'mdi-map-marker' : 'mdi-map-marker-off'"
              :prepend-icon="icon"
              clear-icon="mdi-close-circle"
              type="text"
              variant="filled"
              clearable
              @click:append="sendMessage"
              @click:append-inner="toggleMarker"
              @click:clear="clearMessage"
              @click:prepend="changeIcon"
              placeholder="Message <channel name>"
            ></v-text-field>
          </v-col>
        </v-row>
      </v-container>
    </v-form>
  </template>
  <script>
    export default {
      data: () => ({
        message: '',
        marker: true,
        iconIndex: 0,
        icons: [
          'mdi-emoticon',
          'mdi-emoticon-cool',
          'mdi-emoticon-dead',
          'mdi-emoticon-excited',
          'mdi-emoticon-happy',
          'mdi-emoticon-neutral',
          'mdi-emoticon-sad',
          'mdi-emoticon-tongue',
        ],
      }),
  
      computed: {
        icon () {
          return this.icons[this.iconIndex]
        },
      },
  
      methods: {
        toggleMarker () {
          this.marker = !this.marker
        },
        sendMessage () {
          this.resetIcon()
          this.clearMessage()
        },
        clearMessage () {
          this.message = ''
        },
        resetIcon () {
          this.iconIndex = 0
        },
        changeIcon () {
          this.iconIndex === this.icons.length - 1
            ? this.iconIndex = 0
            : this.iconIndex++
        },
      },
    }
  </script>
-->
