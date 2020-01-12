<template>
    <card :title="`${$route.name}`" :active_loading=false v-if="is_verified_user">
        <div class="row">
            <div class="col-md-3"> </div>

            <div class="col-md-3">
                <icon-btn style="width:100%" type="info" @click="buyOrCell(false)">خرید</icon-btn>
            </div>
            <div class="col-md-3">
                <icon-btn style="width:100%" type="success" @click="buyOrCell(true)">فروش</icon-btn>
            </div>
        </div>
        <div class="row" v-if="buy_component && show_buy_or_sell_component">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="currency_id" class="required">نوع ارز</label>
                    <select @change="getCurrenciesTable($event)" class="form-control form-control-sm"
                            v-model="form.currency_id" id="currency_id">
                        <option>یک گزینه را انتخاب نمایید</option>
                        <option :value=currency.id :key=index v-for="(currency,index) in currencies">{{currency.title}}
                            ({{currency.symbol}})
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="balance" class="required">موجودی</label>
                    <input type="text" v-model="form.balance" id="balance"
                           class="form-control form-control-sm" placeholder="موجودی را اینجا وارد نمایید...">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="min_sale" class="required">حداقل میزان فروش</label>
                    <input type="text" v-model="form.min_sale" id="min_sale"
                           class="form-control form-control-sm" placeholder="حداقل میزان فروش را اینجا وارد نمایید...">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="unit_price" class="required">قیمت واحد</label>
                    <input type="text" v-model="form.unit_price" id="unit_price"
                           class="form-control form-control-sm" placeholder="قیمت واحد را اینجا وارد نمایید...">
                </div>
            </div>
            <submit @click="handleSubmit"/>
        </div>
        <BuyOrders v-if="!buy_component && show_buy_or_sell_component"></BuyOrders>
        <div class="row" v-if="Object.entries(currencies_table).length>0 && show_currencies_table">
            <div class="col-md-6">
                <h5>پیشنهادات فروش</h5>
                <hr>
                <table class="table table-responsive orders_table">
                    <thead>
                    <tr>
                        <th>موجودی</th>
                        <th>حداقل فروش</th>
                        <th>قیمت واحد</th>
                        <th>تاریخ ثبت</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="currency_table in currencies_table.sell">
                        <td>{{currency_table.balance}}</td>
                        <td>{{currency_table.min_sale}}</td>
                        <td>{{currency_table.unit_price}}</td>
                        <td>{{jDate(currency_table.created_at)}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6">
                <h5>پیشنهادات خرید</h5>
                <hr>
                <table class="table table-responsive orders_table">
                    <thead>
                    <tr>
                        <th>قیمت درخواست</th>
                        <th>تاریخ ثبت</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="currency_table in currencies_table.buy">
                        <td>{{currency_table.amount}}</td>
                        <td>{{jDate(currency_table.created_at)}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </card>
    <card :title="`${$route.name}`" v-else>
        <div class="row">
            <div class="col-md-12 text-center">
                <h5 class="alert alert-warning">تا زمان تکمیل نشدن احراز هویت، مجاز به خرید و فروش نیستید.</h5>
            </div>
        </div>
    </card>
</template>

<script>
    import BuyOrders from "../../../User/Components/BuyOrders/CreateForUse";

    export default {
        data() {
            return {
                currencies: [],
                currencies_table: {},
                is_verified_user: true,
                buy_component: false,
                show_buy_or_sell_component: false,
                show_currencies_table: false
            }
        },
        created() {
            axios.get('/profile/is-verified-user')
                .then(response => this.is_verified_user = response.data)
                .catch(error => this.errorNotify(error));
            axios.get('/helper/currencies')
                .then(response => this.currencies = response.data)
                .catch(error => this.errorNotify(error));


        },
        methods: {
            handleSubmit() {
                axios.post('/currency-users', this.form)
                    .then(response => {
                        this.successNotify(response);
                        //this.$router.push('/currency-users');
                    })
                    .catch(error => this.errorNotify(error));
            },
            getCurrenciesTable(event) {
                axios.get(`/currency-users/currencies-user-list/${event.target.value}`)
                    .then(response => {
                        this.currencies_table = response.data;
                        this.show_currencies_table = true;
                    })
                    .catch(error => this.errorNotify(error));
            },
            jDate(date) {
                return moment(date).format('jYYYY/jM/jD');
            },
            buyOrCell(val) {
                this.buy_component = val;
                this.show_buy_or_sell_component = true;
                this.show_currencies_table = false;
                this.form = {}

            }
        },
        components: {BuyOrders}
    }
</script>
