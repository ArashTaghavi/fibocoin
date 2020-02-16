<template>
    <table class="table table-hover mb-0 table-responsive" v-if="buy_orders.length>0">
        <thead>
        <tr>
            <th>مبلغ پرداختی</th>
            <th>نوع ارز</th>
            <th>مقدار ارز</th>
            <th>وضعیت</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="buy_order in buy_orders">
            <td>{{buy_order.amount}}</td>
            <td>{{buy_order.currency.title}}</td>
            <td>{{buy_order.unit}}</td>
            <td v-html=status(buy_order.status)></td>
        </tr>
        </tbody>
    </table>

    <not-found v-else/>


</template>
<script>
    export default {
        data() {
            return {
                buy_orders: []
            }
        },
        created() {
            this.getBuyOrders();
        },
        methods: {
            handleDelete(id) {
                axios.delete(`/buy-orders/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getBuyOrders();
                    })
                    .catch(error => this.errorNotify(error));
            },
            getBuyOrders() {
                axios.get('/buy-orders')
                    .then(response => this.buy_orders = response.data)
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
            }
        },
    }
</script>