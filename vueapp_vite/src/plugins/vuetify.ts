// plugins/vuetify.js
import { createVuetify } from 'vuetify';
import '@mdi/font/css/materialdesignicons.css'; // Ensure you are using css-loader
import { md3 } from 'vuetify/blueprints';
import * as components from 'vuetify/components';
import * as directives from 'vuetify/directives';
import { mdi } from 'vuetify/iconsets/mdi';
import { VTimePicker } from 'vuetify/labs/VTimePicker';
import { VSparkline } from 'vuetify/labs/VSparkline';

// Vuetify options
const vuetify = createVuetify({
    blueprint: md3,
    components: {
        ...components,
        VTimePicker,
        VSparkline,
    },
    directives,
    icons: {
        defaultSet: 'mdi',
        sets: {
            mdi,
        },
    },
});

export default vuetify;
