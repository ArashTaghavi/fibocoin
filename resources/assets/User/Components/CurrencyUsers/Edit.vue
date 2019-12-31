<template>
    <card :title="`${$route.name}`" :active_loading=false>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="currency_id">نوع ارز</label>
                    <select class="form-control form-control-sm" v-model="form.currency_id" id="currency_id">
                        <option>یک گزینه را انتخاب نمایید</option>
                        <option :value=currency.id :key=index v-for="(currency,index) in currencies">{{currency.title}}
                            ({{currency.symbol}})
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="balance">موجودی</label>
                    <input type="text" v-model="form.balance" id="balance"
                           class="form-control form-control-sm" placeholder="موجودی را اینجا وارد نمایید...">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="min_sale">حداقل میزان فروش</label>
                    <input type="text" v-model="form.min_sale" id="min_sale"
                           class="form-control form-control-sm" placeholder="حداقل میزان فروش را اینجا وارد نمایید...">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="unit_price">قیمت واحد</label>
                    <input type="text" v-model="form.unit_price" id="unit_price"
                           class="form-control form-control-sm" placeholder="قیمت واحد را اینجا وارد نمایید...">
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
            axios.get('/helper/currencies')
                .then(response => this.currencies = response.data)
                .catch(error => this.errorNotify(error));

            axios.get(`/currency-users/${this.$route.params.id}`)
                .then(response => this.form = response.data)
                .catch(error => this.errorNotify(error))
        },
        methods: {
            handleSubmit() {
                axios.put(`/currency-users/${this.$route.params.id}`, this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/currency-users')
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>
