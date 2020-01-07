<template>
    <card :title="`${$route.name}`">
        <div class="row mb-2">
            <div class="col-md-2">
                <icon-btn style="width:100%" type="info" @click="search(1)">در انتظار پرداخت</icon-btn>
            </div>
            <div class="col-md-2">
                <icon-btn style="width:100%" type="danger" @click="search(0)">تایید نشده</icon-btn>
            </div>
            <div class="col-md-2">
                <icon-btn style="width:100%" type="warning" @click="search(2)">در انتظار بررسی</icon-btn>
            </div>
            <div class="col-md-2">
                <icon-btn style="width:100%" type="success" @click="search(3)">پرداخت شده</icon-btn>
            </div>
            <div class="col-md-2">
                <icon-btn style="width:100%" type="info" @click="getPaymentRequest()">همه</icon-btn>
            </div>
        </div>
        <div class="row" v-if="payment_requests.length>0">
            <div class="col-md-4" v-for="(payment_request,index) in payment_requests" :key=index>
                <div class="card">
                    <icon-btn type="success" style="position:absolute;left:5px;top:5px" v-if="payment_request.status===2"
                              icon="check" @click="handleStatus(payment_request.id,1)">تایید
                    </icon-btn>
                    <icon-btn type="danger" style="position:absolute;left:70px;top:5px" v-if="payment_request.status===2"
                              icon="close" @click="handleStatus(payment_request.id,0)">رد
                    </icon-btn>
                    <icon-btn type="info" style="position:absolute;left:5px;top:5px" v-if="payment_request.status===1"
                              icon="check" @click="handleStatus(payment_request.id,3)">پرداخت
                    </icon-btn>
                    <br>
                    <div class="card-body">
                        <p>مبلغ درخواست شده : {{payment_request.amount}} تومان</p>
                        <p>تاریخ درخواست :
                            {{jDate(payment_request.created_date)}}
                        </p>
                        <p v-html=status(payment_request.status) class="text-center">
                        </p>
                        <textarea v-if="payment_request.status==1 || payment_request.status==2" name="" class="form-control form-control-sm"
                                  v-model="form.description[payment_request.id]"
                                  id="" cols="5" rows="5"
                                  placeholder="توضیحات"
                        ></textarea>
                    </div>
                </div>
            </div>
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
            this.getPaymentRequest();
            this.form.description = [];
        },
        methods: {
            getPaymentRequest() {
                axios.get(`/users/payment-requests/${this.$route.params.id}`)
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
            search(status) {
                axios.get(`/users/payment-request-search/${this.$route.params.id}/${status}`)
                    .then(response => this.payment_requests = response.data)
                    .catch(error => this.errorNotify(error));
            },
            handleStatus(id, status) {
                let _data = {
                    status,
                    description: this.form.description[id]
                };
                axios.put(`/users/payment-request-status/${id}`, _data)
                    .then(response => {
                        this.getPaymentRequest();
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
