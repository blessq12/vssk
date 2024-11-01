<script>
import { object, string, number } from 'yup'; // Import Yup for validation

export default {
    name: 'Modal',
    data() {
        return {
            typeOfService: 'furniture',
            furniture: {
                type: 'sofa',
                count: 1,
                seats: 1,
                size: 'small',
            },
            client: {
                name: '',
                phone: '',
            },
            carpet: {
                width: '',
                length: '',
                type: 'Синтетический ковер с коротким ворсом',
            },
            loading: false, 
        }
    },
    methods: {
        
        carpetSchema() {
            return object({
                width: number().required(),
                length: number().required(),
                type: string().required(),
            })
        },
        submitForm() {
            this.loading = true;
            let furnitureSchema;
            if (this.typeOfService == 'furniture') {
                if (this.furniture.type == 'chair') {
                    furnitureSchema = object({
                        type: string().required(),
                        count: number().required(),
                        // seats: number().required(),
                        // size: string().required(),
                    });
                }
                if (this.furniture.type == 'sofa' || this.furniture.type == 'matress') {
                    furnitureSchema = object({
                        type: string().required(),
                        seats: number().required(),
                        size: string().required(),
                    });
                }
                furnitureSchema.validate(this.furniture, { abortEarly: false })
                    .then((res) => {
                        let message = ''

                        if (res.type == 'chair') {    
                            message += "Новая заявка на химчистку стула/кресла!\n";
                            message += `Количество предметов: ${res.count}`;
                        } else {
                            message += res.type == 'sofa' ? "Новая заявка на химчистку дивана!\n" : "Новая заявка на химчистку матраца!\n";
                            message += `Количество мест: ${res.seats}\n`;
                            let size = res.size == 'small' ? 'Малый' : res.size == 'medium' ? 'Средний' : 'Большой';
                            message += res.type == 'sofa' ? `Размер: ${size}` : '';
                        }
                        message += "\n\n";
                        message += `Имя: ${this.client.name}\n`;
                        message += `Телефон: ${this.client.phone}`;
                        
                        axios.post('/api/action/send-order-data', { message: message})
                            .then((res) => {
                                this.resetModal()
                                $('#requestModal').modal('hide')
                            })
                            .catch((err) => { console.log(err) })
                            .finally(() => this.loading = false)
                    })
                    .catch((err) => {
                        console.log(err);
                    })
            }
            if (this.typeOfService == 'carpet') {
                const carpetSchema = this.carpetSchema();
                carpetSchema.validate(this.carpet, { abortEarly: false })
                    .then((res) => {
                        let message = `Новая заявка на химчистку ковра!\n`;
                        message += `Ширина: ${res.width}\n`;
                        message += `Длина: ${res.length}\n`;
                        message += `Тип ковра: ${res.type}`;
                        message += `\n\n`;
                        message += `Имя: ${this.client.name}\n`;
                        message += `Телефон: ${this.client.phone}`;
                        axios.post('/api/action/send-order-data', { message: message})
                            .then((res) => {
                                this.resetModal()
                                
                            })
                            .catch((err) => { console.log(err) })
                            .finally(() => this.loading = false)
                    })
                    .catch((err) => {
                        console.log(err);
                    })

            }
        },
        resetModal() {
            this.typeOfService = 'furniture';
            this.furniture = {
                type: 'sofa',
                count: 1,
                seats: 1,
                size: 'small',
            };
            this.client = {
                name: '',
                phone: '',
            };
            this.carpet = {
                width: '',
                length: '',
                type: 'Синтетический ковер с коротким ворсом',
            };
            setTimeout(() => {
                this.$refs.closeBtn.click()
            }, 500)
        }
    }
}
</script>

<template>
    <div class="modal fade" id="requestModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Оставить заявку на оказание услуги</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" ref="closeBtn" aria-label="Close"></button>
        </div>
        <form @submit.prevent="submitForm">
            <div class="modal-body overflow-hidden">
                <div class="row">
                    <div class="col">
                        <p class="fw-bold text-dark mb-2">Какая услуга вас интересует?</p>
                        <div class="form-group">
                            <label for="name" class="form-label d-block mb-1">Услуга</label>
                            <div class="btn-group mb-3">
                                <button :class="{'active': typeOfService == 'furniture'}" type="button" class="btn btn-sm btn-outline-primary" @click="typeOfService = 'furniture'">Химчистка мебели</button>
                                <button :class="{'active': typeOfService == 'carpet'}" type="button" class="btn btn-sm btn-outline-primary" @click="typeOfService = 'carpet'">Химчистка ковров</button>
                            </div>
                        </div>
                        <div v-if="typeOfService == 'furniture'">
                        <div class="form-group">
                            <label for="name" class="form-label d-block mb-1">Тип мебели</label>
                            <div class="btn-group mb-3">
                                <button type="button" class="btn btn-sm btn-outline-primary" @click="furniture.type = 'sofa'" :class="{'active': furniture.type == 'sofa'}">Диван</button>
                                <button type="button" class="btn btn-sm btn-outline-primary" @click="furniture.type = 'chair'" :class="{'active': furniture.type == 'chair'}">Стул/ Кресло</button>
                                <button type="button" class="btn btn-sm btn-outline-primary" @click="furniture.type = 'matress'" :class="{'active': furniture.type == 'matress'}">Матрац</button>
                            </div>
                        </div>
                        <transition
                            enter-active-class="animate__animated animate__fadeInLeft"
                            leave-active-class="animate__animated animate__fadeOutLeft"
                            mode="out-in"
                        >
                        <div class="form-group" v-if="furniture.type == 'chair'">
                            <label for="count" class="form-label d-block mb-1">Количество предметов</label>
                            <div class="d-flex">
                                <button type="button" :disabled="furniture.count == 1" class="btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center" style="width: 40px; height: 30px; border-radius: 5px 0 0 5px;" @click="furniture.count--">-</button>
                                <span type="text" class="form-control w-25 text-center rounded-0" style="border-color: rgb(9, 189, 150); height: 30px;"> {{ furniture.count}}</span>
                                <button type="button" :disabled="furniture.count == 10" class="btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center" style="width: 40px; height: 30px; border-radius: 0 5px 5px 0;" @click="furniture.count++">+</button>
                            </div>
                        </div>
                        <div class="mb-3" v-else-if="furniture.type == 'sofa' || furniture.type == 'matress'">
                            <div class="form-group mb-3 ">
                                    <label for="count" class="form-label d-block mb-1">Количество мест</label>
                                    <div class="d-flex">
                                        <button type="button" :disabled="furniture.seats == 1" class="btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center" style="width: 40px; height: 30px; border-radius: 5px 0 0 5px;" @click="furniture.seats--">-</button>
                                        <span type="text" class="form-control w-25 text-center rounded-0" id="count" style="border-color: rgb(9, 189, 150); height: 30px;">{{furniture.seats}}</span>
                                        <button type="button" :disabled="furniture.seats == 10" class="btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center" style="width: 40px; height: 30px; border-radius: 0 5px 5px 0;" @click="furniture.seats++">+</button>
                                    </div>
                            </div>

                            <transition
                                enter-active-class="animate__animated animate__fadeInLeft"
                                leave-active-class="animate__animated animate__fadeOutLeft"
                                mode="out-in"
                            >
                                <div class="form-group overflow-hidden" v-if="furniture.type == 'sofa'">
                                    <label for="size" class="form-label d-block mb-1">Размер</label>
                                    <div class="btn-group mb-3">
                                        <button type="button" class="btn btn-sm btn-outline-primary" @click="furniture.size = 'small'" :class="{'active': furniture.size == 'small'}">Малый</button>
                                        <button type="button" class="btn btn-sm btn-outline-primary" @click="furniture.size = 'medium'" :class="{'active': furniture.size == 'medium'}">Средний</button>
                                        <button type="button" class="btn btn-sm btn-outline-primary" @click="furniture.size = 'large'" :class="{'active': furniture.size == 'large'}">Большой</button>
                                    </div>
                                </div>
                            </transition>
                            </div>

                        </transition>
                        </div>
                        <div v-else>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class="form-label d-block mb-1">Ширина ковра</label>
                                        <input type="text" class="form-control" id="name" required oninput="this.value = this.value.replace(/[^0-9,.]/g, '')" v-model="carpet.width" :disabled="loading">
                                    </div>                                    
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class="form-label d-block mb-1">Длина ковра</label>
                                        <input type="text" class="form-control" id="name" required oninput="this.value = this.value.replace(/[^0-9,.]/g, '')" v-model="carpet.length" :disabled="loading">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name" class="form-label d-block mb-1">Количество ковров</label>
                                        <select name="" id="" class="form-select" v-model="carpet.type" :disabled="loading">
                                            <option value="Синтетический ковер с коротким ворсом">Синтетический ковер с коротким ворсом</option>
                                            <option value="Шерстяной ковер с коротким ворсом">Шерстяной ковер с коротким ворсом</option>
                                            <option value="Ковер с высоким ворсом(шегги)">Ковер с высоким ворсом(шегги)</option>
                                            <option value="Ковролин с низким ворсом">Ковролин с низким ворсом</option>
                                            <option value="Ковролин с высоким ворсом">Ковролин с высоким ворсом</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p class="fw-bold text-dark mb-2">Контактные данные:</p>
                        <div class="form-group">
                            <label for="phone" class="form-label">Имя</label>
                            <input type="text" class="form-control" id="phone" required v-model="client.name" :disabled="loading">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Телефон</label>
                            <input type="text" class="form-control" id="phone" v-model="client.phone" v-maska data-maska="+7 (###) ###-##-##" required :disabled="loading">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" :disabled="loading">
                    <span v-if="loading">
                        <i class="fa fa-spinner fa-spin"></i>
                        Отправка...
                    </span>
                    <span v-else>Отправить</span>
                </button>
            </div>
        </form>
        </div>
    </div>
    </div>
</template>

<style lang="sass" scoped>
.modal-body
    overflow: hidden
    transition: all .3s
.animate__animated
    animation-duration: .3s
.btn-outline-primary
    border-color: var(--primary-color)
    color: rgb(9, 189, 150)
    &.active
        background-color: rgb(9, 189, 150)
        border-color: rgb(9, 189, 150)
        color: #fff
    &:hover
        background-color: rgb(9, 189, 150)
        border-color: rgb(9, 189, 150)
</style>