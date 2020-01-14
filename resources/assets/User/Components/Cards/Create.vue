<template>
    <card title="ثبت کارت بانکی" :active_loading=false>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="bank_name" class="required">نام بانک</label>
                    <input type="text" v-model="form.bank_name" id="bank_name"
                           class="form-control form-control-sm" placeholder="نام بانک را اینجا وارد نمایید.">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="card_no" class="required">شماره کارت</label>
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
                <div class="form-group" >
                    <label for="account_no" class="required">شماره حساب</label>
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
                if (cn.search(627353)!=-1)
                    return this.bank_logo = `${dir}tejarat.ico`;
                else if (cn.search(589210)!=-1)
                    return this.bank_logo = `${dir}sepah.ico`;
                else if (cn.search(627648)!=-1)
                    return this.bank_logo = `${dir}saderat.ico`;
                else if (cn.search(636214)!=-1)
                    return this.bank_logo = `${dir}ayande.ico`;
                else if (cn.search(627884)!=-1)
                    return this.bank_logo = `${dir}tose-e.png`;
                else if (cn.search(610433)!=-1)
                    return this.bank_logo = `${dir}mellat.ico`;
                else if (cn.search(603770)!=-1)
                    return this.bank_logo = `${dir}keshavarzi.ico`;
                else if (cn.search(622106)!=-1)
                    return this.bank_logo = `${dir}parsian.ico`;
                else if (cn.search(621986)!=-1)
                    return this.bank_logo = `${dir}saman.ico`;



                else
                    return this.bank_logo = '';


            }
        }
    }
</script>