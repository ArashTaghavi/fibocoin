<template>
    <card :title="`${$route.name}`" :active_loading="false">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="amount" class="required">مبلغ</label>
                    <input type="number" v-model="form.amount" id="amount"
                           class="form-control form-control-sm" placeholder="مبلغ را به تومان وارد نمایید..">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="currency_id" class="required">نوع ارز</label>
                    <select
                            @change="getCurrenciesTable($event)"
                            class="form-control form-control-sm" v-model="form.currency_id" id="currency_id">
                        <option>یک گزینه را انتخاب نمایید</option>
                        <option :value=currency.id :key=index v-for="(currency,index) in currencies">
                            {{currency.title}}-{{currency.symbol}}
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="unit" class="required">واحد</label>
                    <input type="tel" v-model="form.unit" id="unit"
                           class="form-control form-control-sm" placeholder="واحد را وارد نمایید..">
                </div>
            </div>
            <div class="col-md-12">
                <VueTradingView :symbol="symbol" v-if="symbol!==''"/>
            </div>
            <submit @click="handleSubmit"/>
        </div>
    </card>
</template>

<script>
    import VueTradingView from 'vue-trading-view2';
    import Vue from 'vue';

    const vm = new Vue();
    export default {
        data() {
            return {
                currencies: [],
                symbol: localStorage.getItem('symbol'),
            }
        },
        created() {
            axios.get('/helper/currencies')
                .then(response => this.currencies = response.data)
                .catch(error => this.errorNotify(error));
            this.form.currency_id = localStorage.getItem('currency_id');

        },
        methods: {
            handleSubmit() {
                axios.post('/buy-orders', this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/buy-orders')
                    })
                    .catch(error => this.errorNotify(error));
            },
            getCurrenciesTable(event) {
                axios.get(`/currency-users/currencies-user-list/${event.target.value}`)
                    .then(response => {
                        this.currencies_table = response.data;
                        this.show_currencies_table = true;
                    })
                    .catch(error => this.errorNotify(error));
                let symbol = event.target.options[event.target.options.selectedIndex].innerText;
                symbol = symbol.split('-')[1];
                this.symbol = symbol;
                localStorage.setItem('symbol', symbol);
                localStorage.setItem('currency_id', this.form.currency_id);
                this.$router.go();
            },
        },
        components: {VueTradingView}

    }
</script>
