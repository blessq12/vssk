<script>
export default {
    props: {
        images: {
            type: Array,
            required: true
        }
    },
    data:()=>({
        currentImage: 0
    }), methods:{
        image(direction){
            if (direction == 'next'){
                if (this.currentImage == this.images.length -1){
                    this.currentImage = 0
                } else {
                    this.currentImage++
                }
            }
            if (direction == 'prev'){
                if (this.currentImage === 0){
                    this.currentImage = this.images.length -1
                } else {
                    this.currentImage--
                }
            }
        }
    }
}
</script>

<template>
    <div class="image mt-0" :style="'background:url(' + images[currentImage].image + ')'">
        <div class="nav">
            <div class="prev" @click="image('prev')"></div>
            <div class="next" @click="image('next')"></div>
        </div>
        <div class="dots">
            <ul>
                <li v-for="item in images" :key="item.id" :class="currentImage +1 == item.id ? 'active' : ''">•</li>
            </ul>
        </div>
    </div>
</template>

<style lang="sass">
.image
    position: relative
    & .nav
        position: absolute
        width: 100%
        height: 100%
        display: flex
        justify-content: space-between
        align-items: center
        padding: 12px
        color: $color-white
        font-size: 32px
        & .next
            height: 100%
            min-width: 50px
            position: relative
            &::before
                content: '➜'
                display: flex
                justify-content: center
                align-items: center
                height: 100%
                width: 100%
        & .prev
            position: relative
            height: 100%
            min-width: 50px
            &::before
                width: 100%
                content: '➜'
                display: flex
                justify-content: center
                align-items: center
                height: 100%
                transform: rotate(180deg)
    & .dots
        position: absolute
        bottom: 0
        width: 100%
        display: flex
        justify-content: center
        margin-bottom: 6px
        & ul
            list-style: none
            padding: 0
            margin: 0
            display: flex
            color: $color-main
            & li
                font-size: 42px
                &.active
                    color: $color-white  
                &::before
                    content: unset
</style>