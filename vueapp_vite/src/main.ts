import { createApp } from 'vue';
import '@/style.css';
import '@/emoji.css';
import App from '@/App.vue';
import vuetify from '@/plugins/vuetify';
import router from '@/router';
import 'vuetify/styles';

const app = createApp(App);

app.use(vuetify);
app.use(router);

app.mount('#app');
