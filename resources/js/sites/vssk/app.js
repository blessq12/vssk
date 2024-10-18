
import '../../bootstrap';
import { createApp } from 'vue';
import { vMaska } from 'maska';


const app = createApp({});

app.directive('maska', vMaska)

Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
    app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
});


app.mount('#app');
