<template>
    <card :title="`${$route.name}`">
        <div class="row">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>نوع ارز</th>
                    <th>حداقل فروش</th>
                    <th>قیمت واحد</th>
                    <th>مقدار ارز دریافتی</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{currency.currency!=null ? currency.currency.title : ''}}</td>
                    <td>{{currency.min_sale}}</td>
                    <td>{{currency.unit_price}}</td>
                    <td>
                        <input type="text" placeholder="مبلغ را وارد نمایید" class="form-control form-control-sm"
                               v-model="amount">
                    </td>
                    <td>{{amount/currency.unit_price}}</td>
                </tr>
                </tbody>
            </table>

            <submit @click="handleSubmit"/>
        </div>
    </card>
</template>

<script>
    export default {
        data() {
            return {
                currency: {},
                amount: 0
            }
        },
        created() {
            this.getCurrencies();

        },
        methods: {
            handleSubmit() {
                this.form.amount=this.amount;
                this.form.value = this.form.value = this.amount/this.currency.unit_price;
                axios.post(`/currency-user-payments/${this.$route.params.id}`, this.form)
                    .then(response => this.successNotify(response))
                    .catch(error => this.errorNotify(error));
            },
            getCurrencies() {
                axios.get(`/currency-users/get-by-id-from-site/${this.$route.params.id}`)
                    .then(response => {
                        this.currency = response.data;
                    })
                    .catch(error => this.errorNotify(error));
            },
        }
    }
</script>