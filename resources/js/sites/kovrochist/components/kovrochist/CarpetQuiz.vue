<script>
import { object, string } from 'yup';

export default {
    props:{
        carpets: Object
    },
    mounted(){

    },
    data:()=>({
        carpet: null,
        send: false,
        success: false,
        step: 0,
        formHeight: null,
        formInputs: {
            delivery: false,
            address: '',
            additional:{}
        },
        formErrors: {},
        schema: object({
            name: string().required('Обязательное поле').min(3,'Минимум 3 символа'),
            tel: string().required('Обязательное поле').min(18,'Некорректный номер'),
        }),

    }),
    methods:{
        validate() {
            this.formErrors = {}
            this.schema.validate(this.formInputs, {abortEarly: false})
                .then(res => {
                    let message = "Новая заявка с квиза сайта КОВРОЧИСТ\n\n"
                    message += "Тип: " + res.carpetType + '; Ворс: ' + res.vors
                    message += "\r\n"
                    message += "Дополнительно: ";
                    for (const [key, val] of Object.entries( res.additional )){ 
                    message += val + '; ' 
                    }
                    message += "\r\n"
                    if (res.delivery){
                        message += "Доставка: " + res.address
                    }
                    message += "\r\n"
                    message += 'Обратная связь: ' + res.feedback
                    message += "\r\n"
                    message += `Имя: ${res.name}\n`
                    message += `Телефон: ${res.tel}`
                    axios.post('api/action/send-order-data', {message})
                        .then( res => {
                        
                        this.success = true
                        this.send = !this.send
                        })
                        .catch( err => console.log( err ) )
            })
            .catch( err => { 
                err.inner.forEach( e => this.formErrors[e.path] = e.message )
            })
        }
    },
    watch:{
        send(val){
            this.formErrors = {}
            if (val){
                this.formInputs = {
                            delivery: false,
                            address: '',
                            additional:{}
                        }
                
                this.step = 0
                setTimeout(() => {
                    this.send = false
                    this.success = false
                }, 4000);
            }
        }
    },
    computed:{
        progress(){
            return 100/5 * this.step
        },
        access(){
            if (this.formInputs.delivery == false){
                return false
            }
            if (this.formInputs.address.length > 10){
                return false
            }
            return true
        }
    }
}
</script>

<template>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">
                    узнать стоимость услуги 
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex align-items-center text-light bg-image position-relative py-5" style="background: url(https://catherineasquithgallery.com/uploads/posts/2021-02/1613302199_113-p-sinii-teksturnii-fon-181.jpg);min-height:400px;">
        <div class="overlay"></div>
        <div class="container position-relative">
            <div class="row row-cols-1 row-cols-md-2 align-items-center">
                <div class="col col-md-4 mb-4 mb-md-0">
                    <p class="text-light opacity-50 mb-0" style="font-size: 10px;">
                        *мы не передаем информацию третьим лицам
                    </p>
                    <h4 class="mb-4">Пройдите короткий опрос, чтобы мы могли сказать точную стоимость чистки</h4>
                    <p class="">
                        Либо свяжитесь с нами любым другим удобным способом и мы оперативно оценим стоимость
                    </p>
                    <div class="row row-cols-2 g-2">
                        <div class="col">
                            <a href="tel:79014794940" class="btn btn-light rounded-pill w-100">Позвонить</a>
                        </div>
                        <div class="col">
                            <a href="//wa.me/79014794940" target="_blank" class="btn btn-success rounded-pill w-100">WhatsApp</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-8">
                    <transition enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut" mode="out-in">
                    <div class="border border-light h-100 rounded p-2 p-md-3" style="min-height: 300px;" v-if="!send" ref="container">
                        <div class="progress mb-3" role="progressbar" aria-label="progress" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" :style="'width:'+ progress +'%'"></div>
                        </div>                    
                        <div class="quiz-wrap">
                            <transition enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut" mode="out-in">
                                <div v-if="step == 0">
                                    <h5>Какой у вас тип ковра?</h5>
                                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2">
                                        <div class="col mb-1" v-for="e in carpets" :key="e.id">
                                            <label :for="'carpet-' + e.id" class="d-flex align-items-center p-2 border" @click="step = 1; carpet = e">
                                                <input type="radio" name="koverType" :value="e.name" :id="'carpet-' + e.id" v-model="formInputs.carpetType" class="d-none">
                                                <img :src="e.image" alt="" class="img-fluid rounded" style="max-height: 60px;">
                                                <h6 class="mb-0 mx-2">{{ e.name }}</h6>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div v-else-if="step == 1">
                                    <h5>Длина ворса?</h5>
                                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2">
                                        <div class="col mb-1" v-for="e in carpet['length']" >
                                            <label :for="'length-' + e.id" class="d-flex align-items-center p-2 border" @click="step = 2">
                                                <input type="radio" name="koverType" :value="e.name" :id="'length-' + e.id" v-model="formInputs.vors" class="d-none">
                                                <img :src="e.image" alt="" class="img-fluid rounded" style="max-height: 60px;">
                                                <h6 class="mb-0 mx-2">{{ e.name }}</h6>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div v-else-if="step == 2">
                                    <h5>Дополнительные загрязнения?</h5>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="smell" true-value="Неприятные запахи" false-value="Без запахов" v-model="formInputs.additional['smell']">
                                        <label class="form-check-label" for="smell">Неприятные запахи</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="plastilin" true-value="Пластилин" false-value="Без пластилина" v-model="formInputs.additional['plastilin']">
                                        <label class="form-check-label" for="plastilin">Пластилин</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="chs" true-value="После ЧС" false-value="Без ЧС" v-model="formInputs.additional['chs']">
                                        <label class="form-check-label" for="chs">После ЧС ( потоп/ пожар и пр )</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="animals" true-value="Моча животных" false-value="Без животных" v-model="formInputs.additional['animals']">
                                        <label class="form-check-label" for="animals">Моча животных</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="sofa" true-value="Следы от мебели" false-value="Нет следов от мебели" v-model="formInputs.additional['sofa']">
                                        <label class="form-check-label" for="sofa">Следы от мебели</label>
                                    </div>
                                    <button class="mt-4 btn btn-primary rounded-pill" @click="step++">Перейти дальше</button>
                                </div>
                                <div v-else-if="step == 3">
                                    <h5>Рассчет готов</h5>
                                    <p>Какой способ связи для вас удобнее?</p>
                                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2">
                                        <div class="col" style="white-space: nowrap">
                                            <label for="recall" class="p-2 border w-100 text-center" @click="step = 4">
                                                <i class="fa fa-phone"></i>
                                                <span class="text-light mx-2">Обратный звонок</span>
                                                <input type="radio" class="d-none" id="recall" value="Звонок по телефону" v-model="formInputs.feedback">
                                            </label>
                                        </div>
                                        <div class="col" style="white-space: nowrap">
                                            <label for="wa" class="p-2 border w-100 text-center" @click="step = 4">
                                                <i class="fa fa-whatsapp"></i>
                                                <span class="text-light mx-2">Написать WhatsApp</span>
                                                <input type="radio" class="d-none" id="wa" value="Написать WhatsApp" v-model="formInputs.feedback">
                                            </label>
                                        </div>
                                        <div class="col" style="white-space: nowrap">
                                            <label for="tg" class="p-2 border w-100 text-center" @click="step = 4">
                                                <i class="fa fa-whatsapp"></i>
                                                <span class="text-light mx-2">Написать Telegram</span>
                                                <input type="radio" class="d-none" id="tg" value="Написать Telegram" v-model="formInputs.feedback">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div v-else-if="step == 4">
                                    <h5>Требуется доставка?</h5>
                                    <div class="btn-group w-100 w-lg-50 mb-2">
                                        <button class="btn btn-outline-light" @click="formInputs.delivery = false" :class="{'active': !formInputs.delivery }">Без доставки</button>
                                        <button class="btn btn-outline-light" @click="formInputs.delivery = true" :class="{'active' : formInputs.delivery}">С доставкой</button>
                                    </div>
                                    <div class="overflow-hidden">
                                        <transition enter-active-class="animate__animated animate__fadeInDown" leave-active-class="animate__animated animate__fadeOutUp" mode="out-in">
                                        <div v-if="formInputs.delivery">
                                            <label for="address">Введите адрес</label>
                                            <input type="text" name="address" id="address" class="form-control" v-model="formInputs.address">
                                        </div>
                                        </transition>
                                    </div>
                                    <button 
                                        class="btn btn-primary rounded-pill mt-4"
                                        @click="step++"
                                        :disabled="access"
                                    >Перейти дальше</button>
                                </div>
                                <div v-else-if="step == 5">
                                    <h5>Последний шаг!</h5>
                                    <p>Введите Имя и номер телефона, чтобы наш менеджер мог связаться с Вами</p>
                                    <div class="form-group mt-4 mb-2">
                                        <label for="name">Введите имя</label>
                                        <transition enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut" mode="out-in">
                                            <p class="mb-0 text-danger mx-2 d-inline" v-if="formErrors.name">{{ formErrors.name }}</p>
                                        </transition>
                                        <input type="text" name="name" id="name" class="form-control" v-model="formInputs.name">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="tel">Номер телефона</label>
                                        <transition enter-active-class="animate__animated animate__fadeIn" leave-active-class="animate__animated animate__fadeOut" mode="out-in">
                                            <p class="mb-0 text-danger mx-2 d-inline" v-if="formErrors.tel">{{ formErrors.tel }}</p>
                                        </transition>
                                        <input type="text" name="tel" id="tel" class="form-control" v-maska data-maska="+7 (###) ###-##-##" v-model="formInputs.tel">
                                    </div>
                                    <button type="submit" @click="validate" class="btn btn-primary rounded-pill mb-3">Отправить заявку</button>
                                </div>
                            </transition>
                        </div>
                    </div>
                    <div v-else class="d-flex justify-content-center align-items-center border border-light h-100 rounded p-2 p-md-3" style="min-height: 300px;">
                        <transition enter-active-class="animate__animated animate__animate__fadeIn" leave-active-class="animate__animated animate__fadeOut" mode="out-in">
                        <div class="d-flex justify-content-center align-items-center" v-if="success">
                            <h4 class="mb-0 mx-2 w-50">Ваша заявка отправлена! Наш менеджер скоро с вами свяжется</h4>
                        </div>
                        <div class="d-flex justify-content-center align-items-center" v-else>
                            <h4 class="mb-0 mx-2 w-50">Произошла ошибка. Повторите попытку</h4>
                        </div>
                        </transition>
                    </div>
                    </transition>
                </div>
            </div>
        </div>
    </div>

</template>

<style lang="sass" scope>
.bg-primary
    background: #4badf1 !important
    color: #fff !important
</style>