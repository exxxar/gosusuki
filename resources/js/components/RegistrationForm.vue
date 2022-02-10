<template>
    <div>

        <div class="row row-space">
            <div class="col-2">
                <div class="input-group">
                    <label class="label">Имя</label>
                    <input class="input--style-4" type="text" name="first_name">
                </div>
            </div>
            <div class="col-2">
                <div class="input-group">
                    <label class="label">Отчество</label>
                    <input class="input--style-4" type="text" name="last_name">
                </div>
            </div>
        </div>
        <div class="row row-space">
            <div class="col-2">
                <div class="input-group">
                    <label class="label">Фамилия</label>
                    <input class="input--style-4" type="text" name="first_name">
                </div>
            </div>

        </div>

        <!-- Паспорт и прочее-->
        <div class="row row-space">
            <div class="col-2">
                <div class="input-group">
                    <label class="label">Номер паспорта</label>
                    <input class="input--style-4" type="text" v-mask="['#### ######']" name="first_name">
                </div>
            </div>
            <div class="col-2">
                <div class="input-group">
                    <label class="label">СНИЛС</label>
                    <input class="input--style-4" type="text" v-mask="['###-###-### ##']" name="last_name">
                </div>
            </div>
        </div>

        <div class="row row-space">
            <div class="col-2">
                <div class="input-group">
                    <label class="label">Загран паспорт</label>
                    <input class="input--style-4" type="text" name="first_name">
                </div>
            </div>
            <div class="col-2">
                <div class="input-group">
                    <label class="label">ОМС</label>
                    <input class="input--style-4" type="text" name="last_name">
                </div>
            </div>
        </div>


        <div class="row row-space">
            <div class="col-2">
                <div class="input-group">
                    <label class="label">Дата рождения</label>
                    <div class="input-group-icon">
                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="input-group">
                    <label class="label">Пол</label>
                    <div class="p-t-10">
                        <label class="radio-container m-r-45">Мужской
                            <input type="radio" checked="checked" name="gender">
                            <span class="checkmark"></span>
                        </label>
                        <label class="radio-container">Женский
                            <input type="radio" name="gender">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-space">
            <div class="col-2">
                <div class="input-group">
                    <label class="label">Почта</label>
                    <input class="input--style-4" type="email" name="email">
                </div>
            </div>
            <div class="col-2">
                <div class="input-group">
                    <label class="label">Номер телефона</label>
                    <input class="input--style-4" type="text" name="phone">
                </div>
            </div>
        </div>
        <div class="input-group">
            <label class="label">Для чего вам нужен данный сертификат?</label>
            <div class="rs-select2 js-select-simple select--no-search">
                <select name="subject">
                    <option disabled="disabled" selected="selected">Выберите что-то одно</option>
                    <option>Для ролевой игры</option>
                    <option>Для личного использования</option>
                    <option>Розыгрыш друга</option>
                </select>
                <div class="select-dropdown"></div>
            </div>
        </div>
        <div class="card card-4" role="alert">

            <div class="card-body">
                Все данные используются только для формирования сертификата <strong>для вашей ролевой игры</strong> и не
                обязательно
                должны быть реальными, но, если вы укажете реальные данные - никто об этом не узнает:)
            </div>

        </div>
        <div class="p-t-15">
            <button class="btn btn--radius-2 btn--blue" type="submit">Сформировать сертификат (500 руб.)</button>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
