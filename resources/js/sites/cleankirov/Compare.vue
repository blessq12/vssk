<script>
import { ImgComparisonSlider } from '@img-comparison-slider/vue';

export default {
    name: 'Compare',
    components: {
        ImgComparisonSlider,
    },
    props: {
        beforeImage: String,
        afterImage: String,
    },
    setup() {
        return {
            //
        };
     },
    data() {
        return {
            //
        };
    },
};
</script>

<template>
    <ImgComparisonSlider class="compare">
        <img slot="first" style="width: 100%" :src="beforeImage"/>
        <img slot="second" style="width: 100%" :src="afterImage"/>
    </ImgComparisonSlider>
</template>

<style scoped lang="sass">
.compare
    width: 100%
    &:focus
        outline: none
        border: none
</style>
