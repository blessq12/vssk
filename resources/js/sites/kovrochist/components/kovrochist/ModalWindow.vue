<script>
import { object, string } from 'yup';
export default {
    mounted(){
        
    },
    data:()=>({
        modal: false,
        send: false,
        success: false,
        formHeight: null,
        formInputs: {},
        formErrors: {},
        schema: object({
            name: string().required('Обязательное поле').min(3, 'Минимум 3 символа'),
            tel: string().required('Обязательное поле').min(18, 'Некорректный номер') 
        })
    }),
    methods:{
        validate(){
            this.schema.validate(this.formInputs, {abortEarly: false})
            .then( res => { 
                axios.post('/api/notify/telegram', res)
                .then(res => {
                    if (res.status){
                        this.success = true;
                        this.send = !this.send
                    }
                })
                .catch( err => {
                    if (!err.status){
                        this.success = false;
                        this.send = !this.send
                    }
                })
             } )
            .catch( err => { this.formErrors = {}; err.inner.forEach( e => { this.formErrors[e.path] = e.message } ) } )
        }
    },
    watch:{
        modal(val){
            
            if (val){
                setTimeout(() => {
                    this.formHeight = this.$refs.form.offsetHeight
                }, 500);
            }

            if (!val){
                document.body.classList.remove('overflow-hidden')
                return
            }
            
            document.body.classList.add('overflow-hidden')

        },
        send(val){
            if (val){
                setTimeout(() => {
                    this.send = !this.send
                    this.modal = !this.modal
                }, 3000);
            }
        }
    }
}
</script>

<template>
    <div @click="modal = !modal">
        <slot></slot>
    </div>

<transition enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut" mode="out-in">
    <div class="w-100 h-100 position-fixed top-0 d-flex align-items-center invisible" style="left: 0;z-index: 20;" v-if="modal">
        <div class="overlay visible" @click="modal = !modal"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <transition enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut" mode="out-in">
                        <div class="cbf visible position-relative bg-light rounded" v-if="!send" ref="form">
                            <div class="d-flex align-items-center justify-content-between p-2 py-4 px-md-3 border-bottom">
                                <h4 class="mb-0">Оставить заявку</h4>
                                <button class="btn-close" @click="modal = !modal"></button>
                            </div>
                            <form @submit.prevent="validate()">
                                <div class="p-2 py-4 px-md-3">
                                <p class="text-dark">Оставьте заявку на сайте и наш менеджер свяжется с вами в ближайшее время</p>
                                    <div class="form-group mb-2">
                                        <label for="name" class="text-dark">Введите Имя</label>
                                        <transition enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut" mode="out-in">
                                        <p class="text-danger d-inline mb-0 mx-2" v-if="formErrors.name">{{ formErrors.name }}</p>
                                        </transition>
                                        <input type="text" name="name" id="name" class="form-control" v-model="formInputs.name">
                                    </div>
                                    <div class="form-group">
                                        <label for="tel" class="text-dark">Номер телефона</label>
                                        <transition enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut" mode="out-in">
                                        <p class="text-danger d-inline mb-0 mx-2" v-if="formErrors.tel">{{ formErrors.tel }}</p>
                                        </transition>
                                        <input type="text" name="tel" id="tel" class="form-control" v-maska data-maska="+7 (###) ###-##-##" v-model="formInputs.tel">
                                    </div>
                                </div>
                                <div class="p-2 py-4 px-md-3 border-top">
                                    <button type="submit" class="btn btn-primary rounded-pill">Отправить</button>
                                    <button type="reset" class="btn btn-outline-primary rounded-pill mx-2">Очистить</button>
                                </div>
                            </form>
                        </div>

                        <div class="d-flex align-items-center justify-content-center visible bg-light rounded position-relative" v-else :style="'height: ' + formHeight + 'px;'">
                            <div v-if="success" class="d-flex align-items-center justify-content-center">
                                <img src="/images/success.webp" alt="" class="img-fluid h-50" style="max-height: 140px;">
                                <h4 class="text-primary w-50 mx-2">Ваша заявка отправлена, наш менеджер скоро с вамии свяжется</h4>
                            </div>
                            <div v-else class="d-flex align-items-center justify-content-center">
                                <img src="/images/fail.png" alt="" class="img-fluid h-50" style="max-height: 140px;">
                                <h4 class="text-primary w-50 mx-2">При отправке произошла ошибка. Повторите попытку</h4>
                            </div>
                        </div>
                    </transition>
                </div>
            </div>
        </div>
    </div>
</transition>
</template>

<style lang="sass" scoped>
.cbf
    h4
        color: #4badf1
.text-primary
    color: #4badf1 !important
</style>