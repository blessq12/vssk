<script>
export default{
    props:{
        slides: Object
    },
    data:()=>({
        current: 0
    }),
    mounted(){
        
        setTimeout(()=>{
            this.$refs.sliderWrap.style.height = this.$refs.item[0].offsetHeight + 'px'
        }, 100)

    },
    watch:{
        current(val){
            setTimeout(()=>{
                this.$refs.sliderWrap.style.height = this.$refs.item[this.current].offsetHeight + 'px'
            },100)
            if (val == -1){
                this.current = this.slides.length - 1
            }
            if (val > this.slides.length - 1){
                this.current = 0
            }
        }
    }
}
</script>

<template>
    <div class="wrap position-relative">
        <div class="navs position-absolute d-none d-md-block" style="z-index: 5; right: 40px; top: -20px">
            <button class="btn btn-primary" @click="current--" style="margin-right: 12px;">
                <i class="fa fa-arrow-left fa-2x"></i>
            </button>
            <button class="btn btn-primary" @click="current++">
                <i class="fa fa-arrow-right fa-2x"></i>
            </button>
        </div>
        <ul class="position-relative list-unstyled p-0 m-0" ref="sliderWrap">
            <transition-group
                enter-active-class="animate__animated animate__fadeIn"
                leave-active-class="animate__animated animate__fadeOut"
            >
                <li 
                    v-for="e in slides" :key="e" 
                    class="position-absolute bg-image w-100 h-100" 
                    :style="'background: url(' + e.image + ');'"
                    v-show="current == slides.indexOf(e)"    
                >
                    <img :src="e.image" alt="" class="invisible img-fluid" ref="item">
                </li>
            </transition-group>
        </ul>
        <div class="mt-4 d-flex justify-content-center d-md-none">
            <div class="btn-group rounded-pill">
                <button class="btn btn-primary" @click="current--">
                    <i class="fa fa-arrow-left"></i>
                </button>
                <button class="btn btn-primary" @click="current++">
                    <i class="fa fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</template>

<style lang="sass" scoped></style>