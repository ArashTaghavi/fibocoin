<template>
    <card :title="`${$route.name}`" v-if="is_verified_user">
        <div class="row">
            <div class="col-md-3"> </div>
            <div class="col-md-3">
                <icon-btn style="width:100%" type="info" @click="buy=true">خرید</icon-btn>
            </div>
            <div class="col-md-3">
                <icon-btn style="width:100%" type="success" @click="buy=false">فروش</icon-btn>
            </div>
        </div>
        <add-btn to="/currency-users" v-if="is_verified_user"/>
        <div class="row">
            <div class="col-md-12" v-if="!buy">
                <h5>پیشنهادات فروش</h5>
                <hr>
                <table class="table table-hover mb-0 table-responsive">
                    <thead>
                    <tr>
                        <th>نوع ارز</th>
                        <th>موجودی</th>
                        <th>حداقل میزان فروش</th>
                        <th>قیمت واحد</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="currency_user in currency_users">
                        <td>{{currency_user.currency.title}} ({{currency_user.currency.symbol}})</td>
                        <td>{{currency_user.balance}}</td>
                        <td>{{currency_user.min_sale}}</td>
                        <td>{{currency_user.unit_price}}</td>
                        <td>
                            <div v-if="currency_user.status !==3">
                                <link-btn :to="`currency-users/${currency_user.id}/payment`" type="warning" icon="money">پرداخت ها</link-btn>
                                <edit-btn :to="`currency-users/${currency_user.id}`"/>
                                <delete-btn :id=currency_user.id></delete-btn>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12" v-if="buy">
                <h5>پیشنهادات خرید</h5>
                <hr>
                <BuyOrders/>
            </div>
        </div>
    </card>
    <card :title="`${$route.name}`" v-else>
        <div class="row">
            <div class="col-md-12 text-center ">
                <h5 class="alert alert-warning">تا زمان تکمیل نشدن احراز هویت، مجاز به خرید و فروش نیستید.</h5>
            </div>
        </div>
    </card>


</template>
<script>
    import BuyOrders from "../../../User/Components/BuyOrders/IndexForUse";

    export default {
        data() {
            return {
                currency_users: [],
                is_verified_user: true,
                buy:true
            }
        },
        created() {
            axios.get('/profile/is-verified-user')
                .then(response => this.is_verified_user = response.data)
                .catch(error => this.errorNotify(error));
            this.getCurrencyUsers();

        },
        methods: {
            handleDelete(id) {
                axios.delete(`/currency-users/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getCurrencyUsers();
                    })
                    .catch(error => this.errorNotify(error));
            },
            getCurrencyUsers() {
                axios.get('/currency-users')
                    .then(response => this.currency_users = response.data)
                    .catch(error => this.errorNotify(error));
            },
        },
        components: {BuyOrders}
    }
</script>