<script>
export default{
    data:()=>({
        formData: {
            name: null,
            phone: null
        },sendStatus: false
    }), methods:{
        send(){
            axios.post('/api/sendMessage', this.formData).then( res => {
                if(res.data.status){
                    this.sendStatus = !this.sendStatus
                    console.log(res)
                }
            } ).catch( err => {
                console.log(err)
            } )
        }
    }
}
</script>

<template>
    <div class="col-12">
        <div class="recall-form">
            <transition
            enter-active-class="animate__animated animate__fadeIn"
            leave-active-class="animate__animated animate__fadeOut"
            mode="out-in"
            >
            <div class="recall-image" v-if="!sendStatus" style="background: url('/assets/images/zamer.jpg');"></div>
            <div class="recall-image" v-else style="background: url('/assets/images/success.jpg');"></div>
            </transition>
            <transition
            enter-active-class="animate__animated animate__fadeIn"
            leave-active-class="animate__animated animate__fadeOut"
            mode="out-in"
            >
            <div class="content" v-if="!sendStatus">
                <h3>Форма заявки для замера</h3>
                <p>Введите свои данные, чтобы наши менеджеры могли связатьтся с вами</p>
                <form @submit.prevent="send()">
                    <div class="form-group mb-3">
                        <label for="name">Введите Имя:</label>
                        <input type="text" class="form-control" id="name" autocomplete="name" required v-model="formData.name" placeholder="Например, Иван">
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Введите номер телефона:</label>
                        <input type="text" class="form-control" id="phone" name="phone" autocomplete="tel" required v-maska data-maska="+7 (###) ###-##-##" v-model="formData.phone" placeholder="+7 (XXX) XXX-XX-XX">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Отправить</button>
                        <button class="btn btn-secondary" type="reset">Очистить</button>
                    </div>
                </form>
            </div>
            <div class="content" v-else>
                <h3>Заявка упешно отправлена</h3>
                <p>Ваша заявка отправлена, ожидайте звонка нашего менеджера. Если вы по ошибке указали не те данные, то можете повторно отправить заявку</p>
                <button class="btn btn-primary" @click="sendStatus = !sendStatus">Вернуться к форме</button>
            </div>
            </transition>
        </div>
    </div>
</template>

<style lang="sass">
.recall-form
    min-height: 400px
    display: flex
    overflow: hidden
    border-radius: $default-radius
    border: 1px solid $color-main
    align-items: center
    box-shadow: $default-shadow-1
    & .recall-image
        background: $color-main
        background-position: center !important
        background-size: cover !important
        background-repeat: no-repeat !important
        display: none
        @media(min-width: 768px)
            display: block
            width: 50%
            min-height: inherit
    & .content
        padding: 24px
        @media(min-width: 768px)
            width: 50%
        & .btn
            padding: 6px 24px
        & .btn-primary
            border: 0
            border-radius: 0
            border-bottom: 2px solid $color-main
            background: $color-main
        & .btn-secondary
            background: transparent
            color: $color-main
            border: 0
            border-radius: 0
            border-bottom: 2px solid $color-main
            margin-left: 12px
</style>