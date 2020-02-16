<template>
   <card title="فروش" :active_loading=false>
       <div class="row">
           <div class="col-md-3">
               <div class="form-group">
                   <label for="currency_id" class="required">نوع ارز</label>
                   <select @change="getCurrenciesTable($event)" class="form-control form-control-sm"
                           v-model="form.currency_id" id="currency_id">
                       <option>یک گزینه را انتخاب نمایید</option>
                       <option :value=currency.id :key=index v-for="(currency,index) in currencies">
                           {{currency.title}}-{{currency.symbol}}
                       </option>
                   </select>
               </div>
           </div>
           <div class="col-md-3">
               <div class="form-group">
                   <label for="balance" class="required">موجودی</label>
                   <input type="text" v-model="form.balance" id="balance"
                          class="form-control form-control-sm" placeholder="موجودی را اینجا وارد نمایید...">
               </div>
           </div>
           <div class="col-md-3">
               <div class="form-group">
                   <label for="min_sale" class="required">حداقل میزان فروش</label>
                   <input type="text" v-model="form.min_sale" id="min_sale"
                          class="form-control form-control-sm" placeholder="حداقل میزان فروش را اینجا وارد نمایید...">
               </div>
           </div>
           <div class="col-md-3">
               <div class="form-group">
                   <label for="unit_price" class="required">قیمت واحد</label>
                   <input type="text" v-model="form.unit_price" id="unit_price"
                          class="form-control form-control-sm" placeholder="قیمت واحد را اینجا وارد نمایید...">
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
                currencies_table: {},
                is_verified_user: true,
                buy_component: false,
                show_buy_or_sell_component: false,
                show_currencies_table: false,
                symbol: localStorage.getItem('symbol')
            }
        },
        created() {

            axios.get('/profile/is-verified-user')
                .then(response => this.is_verified_user = response.data)
                .catch(error => this.errorNotify(error));
            axios.get('/helper/currencies')
                .then(response => this.currencies = response.data)
                .catch(error => this.errorNotify(error));
            this.form.currency_id = localStorage.getItem('currency_id');


        },
        methods: {
            handleSubmit() {
                axios.post('/currency-users', this.form)
                    .then(response => {
                        this.successNotify(response);
                        //this.$router.push('/currency-users');
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
            jDate(date) {
                return moment(date).format('jYYYY/jM/jD');
            },
            buyOrCell(val) {
                this.buy_component = val;
                this.show_buy_or_sell_component = true;
                this.show_currencies_table = false;
                this.form = {}
                this.form.currency_id = localStorage.getItem('currency_id');

            }
        },
        components: {VueTradingView}
    }
</script>