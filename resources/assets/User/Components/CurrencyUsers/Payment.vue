<template>
    <card :title="`${$route.name}`">
        <div class="row" v-if="payments.length>0">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>مبلغ پرداخت شده</th>
                    <th>وضعیت</th>
                    <th>توضیحات</th>
                    <th>تاریخ</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="payment in payments">
                    <td>{{payment.amount}}</td>
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
                payments: []
            }
        },
        created() {
            this.getPayments();
        },
        methods: {
            getPayments() {
                axios.get(`/currency-user-payments/${this.$route.params.id}`)
                    .then(response => this.payments = response.data.currency_user_payments)
                    .catch(error => this.errorNotify(error));
            },
            status(status) {
                switch (status) {
                    case 0:
                        return '<span class="badge badge-danger btn--icon-text"><i class="zmdi zmdi-close-circle-o"></i> تایید نشده </span>';
                    case 1:
                        return '<span class="badge badge-info btn--icon-text"><i class="zmdi zmdi-alert-circle-o"></i> در انتظار پرداخت </span>';
                    case 2:
                        return '<span class="badge badge-warning btn--icon-text"><i class="zmdi zmdi-alert-circle-o"></i> در انتظار بررسی </span>';
                    default :
                        return '<span class="badge badge-success btn--icon-text"><i class="zmdi zmdi-assignment-check"></i> پرداخت شده </span>';
                }
            },
            jDate(date) {
                return moment(date).format('jYYYY/jM/jD (H:m:s)');
            },
        }
    }
</script>