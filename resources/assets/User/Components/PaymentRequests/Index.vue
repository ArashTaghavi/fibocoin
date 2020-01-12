<template>
    <card :title="`${$route.name}`">
        <add-btn to="payment-requests"/>
        <div class="row" v-if="payment_requests.length>0">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>مبلغ</th>
                    <th>وضعیت</th>
                    <th>توضیحات</th>
                    <th>تاریخ پاسخ</th>
                    <th>تاریخ ثبت</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="payment_request in payment_requests">
                    <td>{{payment_request.amount}}</td>
                    <td v-html=status(payment_request.status)></td>
                    <td>{{payment_request.description}}</td>
                    <td v-if="payment_request.reply_at!=null">{{jDate(payment_request.reply_at)}}</td>
                    <td v-else>-</td>
                    <td>{{jDate(payment_request.created_at)}}</td>
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
                payment_requests: []
            }
        },
        created() {
            this.getPaymentRequests();
        },
        methods: {

            getPaymentRequests() {
                axios.get('/payment-requests')
                    .then(response => this.payment_requests = response.data)
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
            }
        },
    }
</script>