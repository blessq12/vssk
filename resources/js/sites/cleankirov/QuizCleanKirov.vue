<script>
import { object, string } from 'yup';
export default {
    name: 'QuizCleanKirov',
    mounted() {
        this.restartQuiz();
        this.dynamicHeight = this.$refs.quizStep1.offsetHeight + 'px';
    },
    data() {
        return {
            furnitureType: this.getFurnitureType(),
            furnitureSize: this.getFurnitureSize(),
            additionalInfo: this.getAdditionalInfo(),
            currentStep: 1,
            orderData: {
                additionalInfo: [],
            },
            dynamicHeight: 'auto',
            formSchema: object({
                name: string().required('Имя обязательно'),
                phone: string().required('Телефон обязателен').min(18, 'Телефон должен быть валидным'),
            }),
            formErrors: [],
            loading: false,
        };
    },
    computed: {
        //
    },
    methods: {
        getFurnitureType() {
            return [
                {title: 'Химчистка мебели', type: 'sofa', image: '/sites/assets/cleankirov/images/u1.jpg'},
                {title: 'Химчистка матрасов', type: 'mattress', image: '/sites/assets/cleankirov/images/u4.jpg'},
                {title: 'Химчистка стульев/кресел', type: 'chair', image: '/sites/assets/cleankirov/images/u3.jpg'},
                {title: 'Химчистка ковров', type: 'carpet', image: '/sites/assets/cleankirov/images/u2.jpg'},
            ];
        },
        getFurnitureSize() {
            return {
                sofa: [
                    {title: '2-х местный диван(~120 см)', value: 'small', image: '/sites/assets/cleankirov/images/u5.jpg'},
                    {title: 'Трехместный диван, нераскладной (~180 см)', value: 'medium', image: '/sites/assets/cleankirov/images/u6.jpg'},
                    {title: 'Диван-книжка (~200 см)', value: 'large', image: '/sites/assets/cleankirov/images/u7.jpg'},
                    {title: 'Угловой диван с выдвижным спальным местом', value: 'extra-large', image: '/sites/assets/cleankirov/images/u8.jpg'},
                    {title: 'Диван двухместный с выдвижным спальным местом', value: 'extra-large', image: '/sites/assets/cleankirov/images/u9.jpg'},
                    {title: 'Трехместный диван с раскладным матрасом (матрас тоже нужно чистить)', value: 'extra-large', image: '/sites/assets/cleankirov/images/u10.jpg'},
                    {title: 'П-образный диван или любой другой более 5 посадочных мест', value: 'extra-large', image: '/sites/assets/cleankirov/images/u11.jpg'},
                ],
                mattress: [
                    {title: 'Односпальный матрас (шириной до 80 см)', value: 'small', image: '/sites/assets/cleankirov/images/u12.jpg'},
                    {title: 'Полуторный матрас (шириной до 120 см)', value: 'medium', image: '/sites/assets/cleankirov/images/u13.jpg'},
                    {title: 'Двуспальный матрас (шириной до 160 см)', value: 'large', image: '/sites/assets/cleankirov/images/u14.jpg'},
                    {title: 'King size (ширина 180-220 см)', value: 'extra-large', image: '/sites/assets/cleankirov/images/u15.jpg'},
                    {title: 'Матрас грудничка (в люльку)', value: 'extra-large', image: '/sites/assets/cleankirov/images/u16.jpg'},
                ],
                chair: [
                    {title: 'Стул с деревянной спинкой', value: 'small', image: '/sites/assets/cleankirov/images/u17.jpg'},
                    {title: 'Стул с тканевым сидением и спинкой', value: 'small', image: '/sites/assets/cleankirov/images/u18.jpg'},
                    {title: 'Кресло стандартных размеров', value: 'small', image: '/sites/assets/cleankirov/images/u19.jpg'},
                    {title: 'Объемное кресло', value: 'small', image: '/sites/assets/cleankirov/images/u20.jpg'},
                    {title: 'Компьютерное кресло', value: 'small', image: '/sites/assets/cleankirov/images/u21.jpg'},
                ],
                carpet: [
                    {title: 'Синтетический ковер с коротким ворсом', value: 'small', image: '/sites/assets/cleankirov/images/u22.jpg'},
                    {title: 'Шерстяной ковер с коротким ворсом', value: 'medium', image: '/sites/assets/cleankirov/images/u23.jpg'},
                    {title: 'Ковер с высоким ворсом (шегги)', value: 'large', image: '/sites/assets/cleankirov/images/u24.jpg'},
                    {title: 'Ковролин с коротким ворсом', value: 'extra-large', image: '/sites/assets/cleankirov/images/u25.jpg'},
                    {title: 'Ковролин с высоким ворсом', value: 'extra-large', image: '/sites/assets/cleankirov/images/u26.jpg'},
                ],
            };
        },
        getAdditionalInfo() {
            return [
                { title: 'Пыль', value: 'dust', val_ru: 'Пыль' },
                { title: 'Грязь', value: 'dirt', val_ru: 'Грязь' },
                { title: 'Кровь', value: 'blood', val_ru: 'Кровь' },
                { title: 'Краска', value: 'paint', val_ru: 'Краска' },
                { title: 'Чернила', value: 'ink', val_ru: 'Чернила' },
                { title: 'Пластилин или лизун', value: 'putty_or_slime', val_ru: 'Пластилин или лизун' },
                { title: 'Моча', value: 'urine', val_ru: 'Моча' },
                { title: 'Плесень', value: 'mold', val_ru: 'Плесень' },
            ];
        },
        //
        restartQuiz() {
            this.currentStep = 1;
            this.furnitureType = this.getFurnitureType();
            this.furnitureSize = this.getFurnitureSize();
            this.additionalInfo = this.getAdditionalInfo();
            this.orderData = {
                additionalInfo: [],
            };
        },
        manageAdditionalInfo(item) {
            //
            if (this.orderData.additionalInfo.findIndex(i => i === item) === -1) {
                this.orderData.additionalInfo.push(item);
            } else {
                this.orderData.additionalInfo = this.orderData.additionalInfo.filter(i => i !== item);
            }
        },
        sendOrderData() {
            this.formErrors = [];
            this.formSchema.validate(this.orderData, {abortEarly: false}).then(data => {
                this.loading = true;
                this.orderData.company_id = 5
                this.orderData.type = this.furnitureType

                this.orderData.request_data = JSON.stringify(this.orderData);
                console.log(JSON.stringify(this.orderData));

                axios.post('/api/action/create-client-request/5', this.orderData).then(res => {
                    console.log(res);
                }).catch(err => {
                    console.log(err);
                }).finally(() => {
                    this.loading = false;
                });
            }).catch(err => {
                this.formErrors = err.inner.map(i => i.path);
            });
        },
        updateInputs() {
            let inputs = this.$refs.quizStep4.querySelectorAll('input');
            if (inputs.length > 0) {
            inputs.forEach(i => {
                i.classList.remove('is-invalid');
                if (this.formErrors.findIndex(e => e === i.id) !== -1) {
                    i.classList.add('is-invalid');
                }
                });
            }
        }
    },
    watch: {
        currentStep() {
            this.$nextTick(() => {
                this.dynamicHeight = this.$refs[`quizStep${this.currentStep}`].offsetHeight + 'px';
            });
        },
        formErrors() {
            this.updateInputs();
            console.log(this.formErrors);
        }
    }
}
</script>

<template>
    <div class="quiz-container" ref="quizContainer" :style="{height: dynamicHeight}">
        <transition-group 
            enter-active-class="animate__animated animate__fadeInRight"
            leave-active-class="animate__animated animate__fadeOutLeft"
        >
            <div class="row"  v-if="currentStep === 1" ref="quizStep1">
                <div class="col" v-for="item in furnitureType" :key="item.title">
                    <div class="quiz-item cursor-pointer" @click="currentStep = 2; orderData.furnitureType = item.title; furnitureType = item.type;">
                        <img :src="item.image" alt="" class="img-fluid rounded">
                        <h5 class="text-light">{{ item.title }}</h5>
                    </div>
                </div>
            </div>
            <div class="row" v-if="currentStep === 2" ref="quizStep2">
                <div class="col" v-for="item in furnitureSize[furnitureType]" :key="item">
                    <div class="quiz-item cursor-pointer" @click="currentStep = 3; orderData.furnitureSize = item.title;">
                        <img :src="item.image" alt="" class="img-fluid rounded">
                        <h5 class="text-light">{{ item.title }}</h5>
                    </div>
                </div>
            </div>
            <div class="row" v-if="currentStep === 3" ref="quizStep3">
                <div class="col-12 mb-4">
                    <div class="d-flex flex-wrap gap-2">
                        <div v-for="item in additionalInfo" :key="item">
                            <input type="checkbox" class="btn-check" :id="item.value" autocomplete="off" @click="manageAdditionalInfo(item.val_ru)">
                            <label class="btn btn-outline-primary" :for="item.value">{{ item.val_ru }}</label>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-outline-light" @click="currentStep = 4">Далее</button>
                </div>
            </div>
            <div class="row" v-if="currentStep === 4" ref="quizStep4">
                <div class="col-12 col-md-6">
                    <h5 class="text-light">Оставьте контактные данные и мы свяжемся с вами для уточнения деталей заказа</h5>
                    <form @submit.prevent="sendOrderData">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Имя</label>
                            <input type="text" class="form-control" id="name" v-model="orderData.name" :disabled="loading">
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label">Телефон</label>
                            <input type="text" class="form-control" id="phone" v-maska data-maska="+7 (###) ###-##-##" v-model="orderData.phone" :disabled="loading">
                        </div>

                        <div class="d-flex gap-2 mb-3">
                            <button class="btn btn-light" :disabled="loading">
                                <span v-if="loading">
                                    <i class="fa fa-spinner fa-spin"></i>
                                </span>
                                <span v-else>Отправить</span>
                            </button>
                            <button class="btn btn-outline-light" type="button" @click="restartQuiz()">
                                <i class="fa fa-arrow-left"></i>
                                В начало
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </transition-group>
    </div>
</template>

<style scoped lang="sass">
//
.quiz-container
    min-height: 100px
    height: auto
    position: relative
    overflow: hidden
    transition: height 0.3s ease-in-out
    .row
        position: absolute
        top: 0
        left: 0
        width: 100%
</style>
