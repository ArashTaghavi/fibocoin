<template>
    <card title="بارگذاری مدرک" :active_loading=false>
        <div class="row">
            <p>* لطفا دو تصویر مانند نمونه های زیر بارگذاری نمایید.</p>
            <br>
            <p>* در تصویر اول، کارت ملی شما به همراه چهره.</p>
            <br>
            <p>* در تصویر دوم سه کارت شناسایی شما باید بصورت واضح مشخص باشد. (کارت ملی ، گواهینامه رانندگی و کارت بانکی)
            </p>
            <p>
                متن کامل احراز هویت:
                <br>
                اینجانب  {{user.last_name}} {{user.first_name}} قوانین سایت را مطالعه و قبول دارم .
                همچنین اطلاع دارم که اجاره دادن حساب کاربری به اشخاص دیگر از نظر قانونی جرم محسوب می شود و تعهد می دهم
                که هیچ شخصی به جز خودم از این حساب استفاده نمی کند و مسئولیت حقوقی تمام وجوه واریزی از حساب بانکی
                اینجانب به عهده خودم می باشد.
                <br>
                نام و نام خانوادگی + تاریخ + امضاء
                .................
                <br>
                هر دو تصویر باید طبق نمونه سایت ارسال شوند در غیر این صورت تایید نخواهند شد.
            </p>
            <div class="col-md-6">
                <img src="/site-assets/images/document1.png" alt="1">
            </div>
            <div class="col-md-6">
                <img src="/site-assets/images/document2.png" alt="2">
            </div>
            <div class="col-md-12 text-right mt-3">
                <div class="form-group">
                    <cropper-portlet v-model="form.profile_image" title="تصویر مدرک" place="right"/>
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
                user: {}
            }
        },
        methods: {
            handleSubmit() {
                axios.post('/documents', this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/documents')
                    })
                    .catch(error => this.errorNotify(error));
            }
        },
        created() {
            this.user = JSON.parse(localStorage.getItem('USER_INFORMATION'));

        }
    }
</script>