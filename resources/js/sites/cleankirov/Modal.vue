<script>
// data-bs-toggle="modal" data-bs-target="#requestModal"
export default {
    name: 'Modal',
    data() {
        return {
            requestData: {
                service: 'furniture',
                furniture: {
                    type: 'sofa',
                    count: 1,
                    seats: 1,
                    size: 'small',
                },
                name: '',
                email: '',
                phone: '',
            }
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
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form>
            <div class="modal-body overflow-hidden">
                <div class="row">
                    <div class="col">
                        <p class="fw-bold text-dark mb-2">Какая услуга вас интересует?</p>
                        <div class="form-group">
                            <label for="name" class="form-label d-block mb-1">Услуга</label>
                            <div class="btn-group mb-3">
                                <button :class="{'active': requestData.service == 'furniture'}" type="button" class="btn btn-sm btn-outline-primary" @click="requestData.service = 'furniture'">Химчистка мебели</button>
                                <button :class="{'active': requestData.service == 'carpet'}" type="button" class="btn btn-sm btn-outline-primary" @click="requestData.service = 'carpet'">Химчистка ковров</button>
                            </div>
                        </div>
                        <div v-if="requestData.service == 'furniture'">
                        <div class="form-group">
                            <label for="name" class="form-label d-block mb-1">Тип мебели</label>
                            <div class="btn-group mb-3">
                                <button type="button" class="btn btn-sm btn-outline-primary" @click="requestData.furniture.type = 'sofa'" :class="{'active': requestData.furniture.type == 'sofa'}">Диван</button>
                                <button type="button" class="btn btn-sm btn-outline-primary" @click="requestData.furniture.type = 'chair'" :class="{'active': requestData.furniture.type == 'chair'}">Стул/ Кресло</button>
                                <button type="button" class="btn btn-sm btn-outline-primary" @click="requestData.furniture.type = 'matress'" :class="{'active': requestData.furniture.type == 'matress'}">Матрац</button>
                            </div>
                        </div>
                        <transition
                            enter-active-class="animate__animated animate__fadeInLeft"
                            leave-active-class="animate__animated animate__fadeOutLeft"
                            mode="out-in"
                        >
                        <div class="form-group" v-if="requestData.furniture.type == 'chair'">
                            <label for="count" class="form-label d-block mb-1">Количество предметов</label>
                            <div class="d-flex">
                                <button type="button" :disabled="requestData.furniture.count == 1" class="btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center" style="width: 40px; height: 30px; border-radius: 5px 0 0 5px;" @click="requestData.furniture.count--">-</button>
                                <input type="text" class="form-control w-25 text-center rounded-0" id="count" style="border-color: rgb(9, 189, 150); height: 30px;" v-model="requestData.furniture.count" required>
                                <button type="button" :disabled="requestData.furniture.count == 10" class="btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center" style="width: 40px; height: 30px; border-radius: 0 5px 5px 0;" @click="requestData.furniture.count++">+</button>
                            </div>
                        </div>
                        <div class="mb-3" v-else-if="requestData.furniture.type == 'sofa' || requestData.furniture.type == 'matress'">
                            <div class="form-group mb-3 ">
                                    <label for="count" class="form-label d-block mb-1">Количество мест</label>
                                    <div class="d-flex">
                                        <button type="button" :disabled="requestData.furniture.seats == 1" class="btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center" style="width: 40px; height: 30px; border-radius: 5px 0 0 5px;" @click="requestData.furniture.seats--">-</button>
                                        <input type="text" class="form-control w-25 text-center rounded-0" id="count" style="border-color: rgb(9, 189, 150); height: 30px;" v-model="requestData.furniture.seats" required>
                                        <button type="button" :disabled="requestData.furniture.seats == 10" class="btn btn-sm btn-outline-primary d-flex align-items-center justify-content-center" style="width: 40px; height: 30px; border-radius: 0 5px 5px 0;" @click="requestData.furniture.seats++">+</button>
                                    </div>
                            </div>

                            <transition
                                enter-active-class="animate__animated animate__fadeInLeft"
                                leave-active-class="animate__animated animate__fadeOutLeft"
                                mode="out-in"
                            >
                                <div class="form-group overflow-hidden" v-if="requestData.furniture.type == 'sofa'">
                                    <label for="size" class="form-label d-block mb-1">Размер</label>
                                    <div class="btn-group mb-3">
                                        <button type="button" class="btn btn-sm btn-outline-primary" @click="requestData.furniture.size = 'small'" :class="{'active': requestData.furniture.size == 'small'}">Малый</button>
                                        <button type="button" class="btn btn-sm btn-outline-primary" @click="requestData.furniture.size = 'medium'" :class="{'active': requestData.furniture.size == 'medium'}">Средний</button>
                                        <button type="button" class="btn btn-sm btn-outline-primary" @click="requestData.furniture.size = 'large'" :class="{'active': requestData.furniture.size == 'large'}">Большой</button>
                                    </div>
                                </div>
                            </transition>
                            </div>

                        </transition>
                        </div>
                    </div>
                    <div class="col">
                        <p class="fw-bold text-dark mb-2">Контактные данные:</p>
                        <div class="form-group">
                            <label for="phone" class="form-label">Имя</label>
                            <input type="text" class="form-control" id="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Телефон</label>
                            <input type="text" class="form-control" id="phone" v-model="requestData.phone" v-maska data-maska="+7 (###) ###-##-##" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Отправить</button>
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