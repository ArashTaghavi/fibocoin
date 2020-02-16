<template>
    <card :title="`${$route.name}`">
        <div class="row" v-if="payments.currency_user_payments!=null">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>مبلغ پرداخت شده</th>
                    <th>میزان ارز خریداری شده</th>
                    <th>وضعیت</th>
                    <th>توضیحات</th>
                    <th>تاریخ</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="payment in payments.currency_user_payments">
                    <td>{{payment.amount}}</td>
                    <td>{{payment.value}}</td>
                    <td v-html=status(payment.status)></td>
                    <td>{{payment.description}}</td>
                    <td>{{jDate(payment.updated_at)}}</td>
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
                payments: {}
            }
        },
        created() {
            this.getSellOrders();
            this.form.description = [];
        },
        methods: {
            getSellOrders() {
                axios.get(`/users/sell-orders/${this.$route.params.id}`)
                    .then(response => this.payments = response.data)
                    .catch(error => this.errorNotify(error));
            },
            status(status) {

                if (status == 0)
                    return '<span class="badge badge-danger btn--icon-text"><i class="zmdi zmdi-close-circle-o"></i> تایید نشده </span>';

                else if (status == 1)
                    return '<span class="badge badge-info btn--icon-text"><i class="zmdi zmdi-alert-circle-o"></i> در انتظار پرداخت </span>';

                else if (status == 2)
                    return '<span class="badge badge-warning btn--icon-text"><i class="zmdi zmdi-alert-circle-o"></i> در انتظار بررسی </span>';

                else
                    return '<span class="badge badge-success btn--icon-text"><i class="zmdi zmdi-assignment-check"></i> پرداخت شده </span>';

            },
            search(status) {
                axios.get(`/users/sell-order-search/${this.$route.params.id}/${status}`)
                    .then(response => this.payments = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleStatus(id, status) {
                let _data = {
                    status,
                    description: this.form.description[id]
                };
                axios.put(`/users/sell-order-status/${id}`, _data)
                    .then(response => {
                        this.getSellOrders();
                        this.form.description[id] = '';
                    })
                    .catch(error => this.errorNotify(error));
            },
            jDate(date) {
                return moment(date).format('jYYYY/jM/jD');
            }
        }
    }
</script>
