<template>
    <card title="ثبت کارت بانکی" :active_loading=false>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="bank_name">نام بانک</label>
                    <input type="text" v-model="form.bank_name" id="bank_name"
                           class="form-control form-control-sm" placeholder="نام بانک را اینجا وارد نمایید.">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="card_no">شماره کارت</label>
                    <img v-if="bank_logo!==''" :src="bank_logo" width="20px" style="position:absolute;top:25px;left:0"
                         alt="bank_logo">
                    <input type="text"
                           @keyup="handleChange"
                           v-model="form.card_no" id="card_no"
                           class="form-control form-control-sm"
                           placeholder="شماره کارت را اینجا وارد نمایید.">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="account_no">شماره حساب</label>
                    <input type="text" v-model="form.account_no" id="account_no"
                           class="form-control form-control-sm" placeholder="شماره حساب را اینجا وارد نمایید.">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="sheba_no">شبا</label>
                    <input type="text" v-model="form.sheba_no" id="sheba_no"
                           class="form-control form-control-sm" placeholder="شماره شبای را اینجا وارد نمایید.">
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
                bank_logo: ''
            }
        },
        methods: {
            handleSubmit() {
                axios.post('/cards', this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/cards')
                    })
                    .catch(error => this.errorNotify(error));
            },
            handleChange() {
                let cn = this.form.card_no;
                let dir = '/site-assets/images/bank-icon/';
                if (cn == 627353)
                    return this.bank_logo = `${dir}tejarat.ico`;
                else if (cn == 589210)
                    return this.bank_logo = `${dir}sepah.ico`;
                else if (cn == 627648)
                    return this.bank_logo = `${dir}saderat.ico`;
                else if (cn == 636214)
                    return this.bank_logo = `${dir}ayande.ico`;
                else if (cn == 627884)
                    return this.bank_logo = `${dir}tose-e.png`;
                else if (cn == 610433)
                    return this.bank_logo = `${dir}mellat.png`;
                else if (cn == 603770)
                    return this.bank_logo = `${dir}keshavarzi.ico`;
                else if (cn == 622106)
                    return this.bank_logo = `${dir}parsian.ico`;
                else if (cn == 621986)
                    return this.bank_logo = `${dir}saman.ico`;



                else
                    return this.bank_logo = '';


            }
        }
    }
</script>