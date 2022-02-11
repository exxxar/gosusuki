<template>
    <div class="container m-md-0 p-md-0">

        <div class="row m-md-0 p-md-0">
            <div class="col-12 col-md-3 m-0">
                <a href="#create" class="btn btn-outline-primary mb-2 w-100"
                   v-bind:class="{'active':step===0}"
                   @click="step=0">Создать</a>
            </div>
            <div class="col-12 col-md-3 m-0">
                <a href="#search" class="btn btn-outline-primary mb-2 w-100"
                   v-bind:class="{'active':step===1}"
                   @click="step=1">Найти</a>
            </div>
        </div>

        <div class="row m-md-0 p-md-0">
            <div class="col-12" v-if="step===0">
                <form v-on:submit.prevent="submit" ref="form">
                    <div class="row m-md-0 p-md-0">
                        <div class="col-12 mb-2">
                            <p class="title">Ваше Ф.И.О.<span style="color:red; font-weight: bolder;">*</span></p>
                        </div>
                    </div>
                    <div class="row m-md-0 p-md-0">
                        <div class="col-md-4 col-12 mb-2"><input type="text" class="form-control" placeholder="Иванов"
                                                                 name="name"
                                                                 v-model="form.first_name" id="first_name" required>
                        </div>
                        <div class="col-md-4 col-12 mb-2"><input type="text" class="form-control" placeholder="Иван"
                                                                 name="name"
                                                                 v-model="form.second_name" id="second_name" required>
                        </div>
                        <div class="col-md-4 col-12 mb-2"><input type="text" class="form-control" placeholder="Иванович"
                                                                 name="name"
                                                                 v-model="form.last_name" id="last_name" required></div>
                    </div>

                    <div class="bio row m-md-0 p-md-0">

                        <div class="col-md-6 col-12 p-0">
                            <div class="row half m-md-0 p-md-0">
                                <div class="col-md-6 col-12 ">
                                    <p class="title">Дата рождения<span style="color:red; font-weight: bolder;">*</span>
                                    </p>
                                    <input type="date" class="form-control" v-model="form.birthday" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <p class="title">Пол<span style="color:red; font-weight: bolder;">*</span></p>
                                    <select v-model="form.sex" class="form-control" required>
                                        <option value="0" selected>Мужской</option>
                                        <option value="1">Женский</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row half m-md-0 p-md-0">
                                <div class="col-md-6 col-12">
                                    <p class="title">Паспорт<span style="color:red; font-weight: bolder;">*</span></p>
                                    <input class="form-control" type="text"
                                           placeholder="#### ######"
                                           v-model="form.passport"
                                           v-mask="['#### ######','## ######']" name="passport" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <p class="title">Загран паспорт</p>
                                    <input class="form-control" type="text"
                                           placeholder="## #######"
                                           v-model="form.international_passport"
                                           v-mask="['## #######']" name="international_passport">
                                </div>
                            </div>
                            <div class="row m-md-0 p-md-0">
                                <div class="col-md-6 col-12 half">
                                    <p class="title">СНИЛС</p>
                                    <input class="form-control" type="text"
                                           placeholder="###-###-### ##"
                                           v-model="form.snils"
                                           v-mask="['###-###-### ##']" name="snils">
                                </div>
                                <div class="col-md-6 col-12 half">
                                    <p class="title">ОМС</p>
                                    <input class="form-control" type="text"
                                           placeholder="#### #### #### ####"
                                           v-model="form.oms"
                                           v-mask="['#### #### #### ####']" name="oms">
                                </div>
                            </div>
                            <div class="row m-md-0 p-md-0">
                                <div class="col-md-12 col-12 half">
                                    <p class="title">ИНН (для иностранных граждан)</p>
                                    <input class="form-control" type="text"
                                           placeholder="##########"
                                           v-model="form.inn"
                                           v-mask="['##########']" name="inn">
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 col-12 qr p-5">
                            <slot name="qr"></slot>
                        </div>
                    </div>

                    <div class="number mt-2">
                        <h5 class="text-center text-md-right">№ {{ form.cert_number }} </h5>
                        <p class="text-center text-md-right small" style="color:red;">Данный номер нужно указать в поле
                            для пожертвований для бессрочного действия</p>
                    </div>
                    <hr>
                    <h2>Информация о профилактических прививках против новой<br>короновирусной инфекции (COVID-19)</h2>
                    <table>
                        <thead>
                        <th>Номер УНРЗ</th>
                        <th>Препарат, производитель, серия, дата вакцинации</th>
                        <th>Медицинская организация</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ form.unrz_number }}</td>
                            <td>
                                <p>{{ form.drug_name }}</p>
                                <p class="sub">
                                    {{ form.drug_creator }}, серия {{ form.drug_serial }}
                                </p>
                                <p>{{ new Date() | moment("subtract", "6 month",'DD.MM.YYYY') }}</p>
                            </td>
                            <td> {{ form.medical_center }}</td>
                        </tr>
                        <tr>
                            <td>{{ form.unrz_number }}</td>
                            <td>
                                <p>{{ form.drug_name }}</p>
                                <p class="sub">
                                    {{ form.drug_creator }}, серия {{ form.drug_serial }}
                                </p>
                                <p>{{ new Date() | moment('DD.MM.YYYY') }}</p>
                            </td>
                            <td> {{ form.medical_center }}</td>
                        </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h3>Информация о перенесенном заболевании, вызванном новой<br>короновирусной инфекцией (COVID-19)
                    </h3>
                    <p>Нет данных о перенесенном заболевании</p>
                    <div class="row pb-5 m-0">
                        <div class="col-12 p-0">
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="alert alert-info" v-if="message">
                                        {{ message }}
                                    </div>
                                    <div v-if="example_link&&certificate_link">
                                        <a target="_blank" :href="example_link">Ссылка на справку</a>,
                                        <a target="_blank" :href="certificate_link">Ссылка на проверку из QR-кода</a>
                                        <div class="alert alert-danger" v-if="is_temporary">
                                            <p>Ваш сертификат временный! Длительность {{ live_time }} час</p>
                                            <p>Для бессрочного действия - пожертвуйте на хлеб разработчику и укажите в
                                                комментарии номер сертификата</p>
                                            <p>По окончанию срока действий вы можете продлить его еще на {{live_time}} час через раздел поиска! (неограниченное число раз)</p>
                                        </div>
                                    </div>
                                    <p>Вы можете оставить пожертвование для разработчиков</p>

                                    <a class="btn btn-info mb-2 text-white" href="https://sobe.ru/na/na_pokuwat_razrabot4ikam" target="_blank">Пожертвовать</a>

                                    <p>Данный сертификат не для предвъявления по месту требования, а является
                                        демонстрационным
                                        примером.</p>

                                    <p>Учебный материал предоставляется исключительно в ознакомительных и обучающих
                                        целях и не является документом, подтверждающим факт вакцинации от COVID-19 и
                                        других заболеваний в медицинском учреждении, не удостоверяет иные юридические
                                        факты, связанные с какими-либо законодательными ограничениями, в том числе
                                        введенными Указом Главы Донецкой Народной Республики №57 "О введении режима
                                        повышенной готовности".
                                        Важно!
                                        Запрещается использовать предоставляемый учебный материал в качестве документа,
                                        подтверждающего факт вакцинации, либо медицинского отвода в целях уклонения от
                                        исполнения действующего законодательства, в том числе при входе в кинотеатры,
                                        театры, музеи, библиотеки, концертные организации, культурные центры, клубные
                                        учреждения, спортивные клубы, фитнес -центры, бассейны, и другие объекты, в
                                        которых оказываются подобные услуги, торгово-развлекательные центры, кафе,
                                        столовые, буфеты, бары, закусочные и иные предприятия общественного питания.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <button class="btn btn-outline-primary w-100">Получить сертификат</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 m-md-0 p-md-0" v-if="step===1">
                <form v-on:submit.prevent="search" ref="search">
                    <h3>Номер вашего сертфииката</h3>

                    <div class="alert alert-info" v-if="search_message">
                        {{ search_message }}
                    </div>

                    <div v-if="example_link&&certificate_link">
                        <a target="_blank" :href="example_link">Ссылка на справку</a>,
                        <a target="_blank" :href="certificate_link">Ссылка на проверку из QR-кода</a>
                        <div class="row mb-2" v-if="is_temporary">
                            <div class="col-md-4 col-12">
                                <button class="btn btn-outline-info" @click="repair">Продлить на {{ live_time }} час
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card w-100 mb-2" v-if="example_link&&certificate_link">
                        <div class="card-body">
                            <p>Для печати справки в PDF на странице справки нажмите CTRL+P</p>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">

                        <div class="col-md-3 col-12">

                            <input class="form-control" type="search"
                                   v-model="search_number"
                                   v-mask="['#### #### #### ####']" placeholder="#### #### #### ####" required>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center mt-2 pb-5">
                        <div class="col-md-3 col-12">
                            <button class="btn btn-outline-info w-100">Найти</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    data() {
        return {
            step: 0,
            message: null,
            example_link: null,
            certificate_link: null,
            is_temporary: true,
            live_time: 1,
            search_number: null,
            search_message: null,
            form: {
                first_name: null,
                second_name: null,
                last_name: null,
                birthday: null,
                passport: null,
                oms: null,
                snils: null,
                inn: null,
                international_passport: null,
                cert_number: '0000 0000 0000 0000',
                unrz_number: '200 0000 1843 5773',
                medical_center: '',
                sex: 0,
                drug_creation_date: '',
                drug_name: 'Гам-КОВИД-Вак Комбинированная векторная\n' +
                    '                        вакцина для профилактики короновирусной\n' +
                    '                        инфекции, вызываемой вирусом SARS-CoV-2',
                drug_creator: 'ФГБУ НИЦЭМ ИМ. Н.Ф.ГАМАЛЕИ МИНЗДРАВА РОССИИ',
                drug_serial: 'I-620821',
            }
        }
    },
    methods: {
        medicalCenterRefresh() {
            let center = [
                'МБУЗ "ГБ №1 им. Н.А. Семашко"',
                'МБУЗ "Городская больница №6"',
                'МБУЗ "Городская больница №7"',
                'МБУЗ "Городская больница №20"',
                'МБУЗ "Городская поликлиника № 9"',
                'МБУЗ "Городская поликлиника № 10"',
                'МБУЗ "Городская Больница № 4"',
                'МБУЗ "Городская больница № 8"',
                'МБУЗ "Городская поликлиника № 14"',
                'МБУЗ "Городская поликлиника № 42"',
            ];

            this.form.medical_center = center[Math.floor(Math.random() * (center.length - 1)) + 0];
        },
        unrzRefresh() {
            let max = 9
            let min = 0

            this.form.unrz_number = "";

            let exclude = [3, 8, 13]

            for (let i = 0; i < 18; i++) {
                if (exclude.indexOf(i) !== -1)
                    this.form.unrz_number += ' '
                else
                    this.form.unrz_number += Math.floor(Math.random() * max) + min
            }


        },
        refresh() {
            let max = 9
            let min = 0

            this.form.cert_number = "";

            for (let i = 0; i < 20; i++) {
                if (i % 5 === 0)
                    this.form.cert_number += ' '
                else
                    this.form.cert_number += Math.floor(Math.random() * max) + min
            }
        },
        submit() {
            this.message = '';
            axios.post('/vaccine/certificate-form', this.form).then(resp => {
                console.log(resp)
                this.$refs.form.reset()
                this.message = 'Ваш сертификат успешно сгенерирован!'

                this.example_link = resp.data.example_link
                this.certificate_link = resp.data.certificate_link
                this.is_temporary = resp.data.is_temporary
                this.live_time = resp.data.live_time
            }).catch(() => {
                this.message = 'Ошибка генерации сертификата!'
            })
        },

        repair() {
            this.message = '';
            axios.post('/vaccine/certificate-restore', {
                cert_number: this.search_number,
            }).then(resp => {
                this.search_message = 'Сертификат успешно продлен!'
            }).catch(() => {
                this.search_message = 'Сертификат не найден'
            })
        },
        search() {
            this.message = '';
            axios.post('/vaccine/certificate-search', {
                cert_number: this.search_number,
            }).then(resp => {

                this.$refs.search.reset()
                this.search_message = 'Сертификат успешно найден!'

                this.example_link = resp.data.example_link
                this.certificate_link = resp.data.certificate_link
                this.is_temporary = resp.data.is_temporary
                this.live_time = resp.data.live_time
            }).catch(() => {
                this.search_message = 'Сертификат не найден'
            })
        }
    },
    mounted() {
        console.log('Component mounted.')
        this.refresh()
        this.unrzRefresh()
        this.medicalCenterRefresh()
    }
}
</script>
