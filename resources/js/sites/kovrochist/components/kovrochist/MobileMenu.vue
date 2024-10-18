<script>
export default {
    data:()=>({
        show: false
    }),
    mounted(){
        
    }
}
</script>

<template>
    <button class="btn btn-outline-primary d-block d-lg-none" @click="show = !show">
          Меню
          <i class="fa fa-bars"></i>
    </button>
    <teleport to="body">
        <transition 
            enter-active-class="animate__animated animate__slideInDown"
            leave-active-class="animate__animated animate__slideOutUp"
        >
            <div class="mobile-menu" v-if="show" ref="mMenu">
                <div class="container">
                    <div class="row row-cols-1 mb-4">
                        <div class="col mb-2">
                            <span class="text-light d-block">Адрес:</span>
                            <p class="mb-0">
                                г. Киров, ул. Романа Ердякова 50 строение 2 второй этаж
                                (Над мойкой самообслуживания «мой сам»)
                            </p>
                        </div>
                        <div class="col">
                            <span class="text-light d-block">Телефон:</span>
                            <p class="mb-0">
                                <a href="tel:+79014794940">+7 (901) 479-49-40</a>
                            </p>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-12 mb-2">
                            <a href="https://yandex.ru/maps/46/kirov/?ll=49.632872%2C58.617152&mode=routes&rtext=~58.617151%2C49.632872&rtt=auto&ruri=~ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjMzOTg0MRJG0KDQvtGB0YHQuNGPLCDQmtC40YDQvtCyLCDRg9C70LjRhtCwINCg0L7QvNCw0L3QsCDQldGA0LTRj9C60L7QstCwLCAyNSIKDRCIRkIV93dqQg%2C%2C&z=16.7" class="btn btn-light rounded-pill w-100" target="_blank">
                                <i class="fa fa-map-marker"></i>
                                Проложить маршрут
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="//wa.me/79014794940" target="_blank" class="btn btn-success rounded-pill w-100">
                                <i class="fa fa-whatsapp"></i>
                                WhatsApp
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="tel:+7 (901) 479-49-40" class="btn btn-light rounded-pill w-100" target="_blank">
                                <i class="fa fa-phone"></i>
                                Позвонить
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </teleport>
</template>

<style lang="sass" scoped>
.mobile-menu
    position: fixed
    top: 50px
    left: 0
    width: 100%
    min-height: 300px
    z-index: 9
    background: $kovrochist-color-main
    border-radius: 0 0 20px 20px
    padding-top: 70px
    padding-bottom: 24px
    span
        font-weight: 600
        margin-bottom: 8px
        font-size: 1rem
    p
        font-size: 1.2rem
        color: $kovrochist-color-white !important
        a
            color: inherit
</style>