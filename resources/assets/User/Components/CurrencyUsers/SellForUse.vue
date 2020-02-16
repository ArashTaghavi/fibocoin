<template>
    <card :title="`${$route.name}`">
    <table class="table table-hover mb-0 table-responsive" v-if="currency_users.length>0">
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
                </div>
            </td>
        </tr>
        </tbody>
    </table>
        <not-found v-else />
    </card>
</template>

<script>

    export default {
        data() {
            return {
                currency_users: [],
            }
        },
        created() {
            this.getCurrencyUsers();

        },
        methods: {
            getCurrencyUsers() {
                axios.get('/currency-users')
                    .then(response => this.currency_users = response.data)
                    .catch(error => this.errorNotify(error));
            },
        },
    }
</script>
