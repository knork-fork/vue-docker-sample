import { createApp } from 'vue';
import '@/style.css';
import '@/emoji.css';
import App from '@/App.vue';
import vuetify from '@/plugins/vuetify';
import router from '@/router';
import 'vuetify/styles';
import { preloadEmojis } from '@/preloadEmojis';

const app = createApp(App);

preloadEmojis();

app.use(vuetify);
app.use(router);

app.mount('#app');
