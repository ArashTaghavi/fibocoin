<template>
    <card :title="`${$route.name}`">
        <add-btn to="/currency-users"/>
        <div class="row" v-if="currency_users.length>0">
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
                    <td>{{currency_user.currency.title}} ({{currency_user.currency.title}})</td>
                  <td>{{currency_user.balance}}</td>
                  <td>{{currency_user.min_sale}}</td>
                  <td>{{currency_user.unit_price}}</td>
                    <td>
                        <div v-if="currency_user.status !==3">
                            <edit-btn :to="`currency-users/${currency_user.id}`"/>
                            <delete-btn :id=currency_user.id></delete-btn>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <not-found v-else/>
    </card>


</template>
<script>
    export default {
        data() {
            return {
                currency_users: []
            }
        },
        created() {
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
    }
</script>