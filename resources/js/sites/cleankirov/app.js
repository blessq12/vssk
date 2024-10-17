import { createApp } from 'vue';
import { vMaska } from 'maska';

const app = createApp({
    data() {
        return {
            observer: null,
            sections: null
        }
    },
    mounted() { 
        this.init()
    },
    methods: {
        init() {
            console.log('init')
            const nav = document.querySelector('#header');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    nav.classList.add('header-scrolled');
                } else {
                    nav.classList.remove('header-scrolled');
                }
            });

            // section animation observer
            window.addEventListener('DOMContentLoaded', () => { 
                this.sections = document.querySelectorAll('section');

                // Check if sections are found
                if (this.sections.length === 0) {
                    console.error('No sections found to observe.');
                    return; // Exit if no sections
                }

                this.sections.forEach(section => {
                    section.style.opacity = 0;
                });

                this.observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            let section = entry.target;
                            
                            if (!section.classList.contains('animate__animated')) {
                                section.style.opacity = 1;
                                section.querySelector('.container').classList.add('animate__animated', 'animate__fadeInUp');
                            }
                        }
                    });
                }, {
                    root: null,
                    rootMargin: '0px',
                    threshold: 0.1
                });

                // Observe each section
                this.sections.forEach(section => {
                    this.observer.observe(section);
                });
            })
        }
    }
});
app.directive('maska', vMaska)

Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
    app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
});

app.mount('#app');
