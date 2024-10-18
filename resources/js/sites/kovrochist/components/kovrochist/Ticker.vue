<script>
export default {
    props:{
        tickets: Array
    },
    mounted(){
        let clone = this.$refs.ticker.cloneNode(true)
        this.$refs.wrap.appendChild(clone)
    }
}
</script>

<template>

    <div class="overflow-hidden position-absolute wrap w-100">
        <div class="ticker" ref="wrap">
            <ul ref="ticker">
                <li v-for="e in tickets">{{ e }}</li>
            </ul>
        </div>
    </div>

</template>

<style lang="sass" scoped>
@keyframes scroll 
    0% 
        transform: translateX(0)
    100%
      
        transform: translateX(-100%)

.wrap
    z-index: -1
    top: -30px
    @media(min-width: 992px)
        top: -35px
.ticker
    display: flex
    align-items: center
    ul
        animation: scroll infinite 70s linear
ul
    list-style: none
    padding: 0
    margin: 0
    display: inline-block
    white-space: nowrap
    li
        display: inline-block
        text-transform: uppercase
        font-weight: 700
        opacity: .4
        font-family: geo
        margin-right: 24px
        font-size: 4rem
        color: $kovrochist-color-main-light
</style>