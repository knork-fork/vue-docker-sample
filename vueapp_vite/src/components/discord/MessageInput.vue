<template>
    <div>
    </div>
</template>

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