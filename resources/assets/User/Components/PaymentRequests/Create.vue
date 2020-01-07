<template>
    <card :title="`${$route.name}`" :active_loading=false>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="amount">مبلغ</label>
                    <input type="number" v-model="form.amount" id="amount"
                           class="form-control form-control-sm" placeholder="مبلغ را وارد نمایید.">
                </div>
            </div>
            <submit @click="handleSubmit"/>
        </div>
    </card>
</template>

<script>
    export default {
        data() {
            return {
                currencies: []
            }
        },
        created() {
        },
        methods: {
            handleSubmit() {
                axios.post('/payment-requests', this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/payment-requests')
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>
