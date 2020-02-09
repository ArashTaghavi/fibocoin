<template>
    <card title="مشخصات فردی" :active_loading=false>
        <div class="row" v-if="!status">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="first_name" class="required">نام</label>
                    <input type="text" v-model="form.first_name" id="first_name"
                           class="form-control form-control-sm" placeholder="نام">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="last_name" class="required">نام خانوادگی</label>
                    <input type="text" v-model="form.last_name" id="last_name" class="form-control form-control-sm"
                           placeholder="نام خانوادگی">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="father_name" class="required">نام پدر</label>
                    <input type="text" v-model="form.father_name" id="father_name"
                           class="form-control form-control-sm" placeholder="نام پدر">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="national_code" class="required">کد ملی</label>
                    <input type="text" v-model="form.national_code" id="national_code"
                           class="form-control form-control-sm" placeholder="کد ملی">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email" class="required">ایمیل</label>
                    <input type="text" id="email" v-model="form.email" class="form-control form-control-sm"
                           placeholder="ایمیل">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="reference_code">کد معرف</label>
                    <input type="text" id="reference_code" v-model="form.reference_code"
                           class="form-control form-control-sm"
                           placeholder="کد معرف">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="sos_phone" class="required">
                        <i class="zmdi zmdi-help-outline text-warning"
                           title="وارد کردن تلفن ضروری برای زمانی است که شما به هر دلیلی توسط شماره موبایل یا ثابت در دسترس نباشید."
                        ></i>
                        شماره تماس اضطراری
                    </label>
                    <input type="text" id="sos_phone" v-model="form.sos_phone"
                           class="form-control form-control-sm"
                           placeholder="تلفن ضروری">

                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="address" class="required">آدرس</label>
                    <textarea id="address" v-model="form.address" class="form-control form-control-sm"
                              placeholder="آدرس"></textarea>
                </div>
            </div>

            <submit @click="handleSubmit"/>
        </div>
        <div class="row" v-else>
            <div class="col-md-12">
                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th>نام</th>
                        <th>نام خانوادگی</th>
                        <th>نام پدر</th>
                        <th>کد ملی</th>
                        <th>ایمیل</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{form.first_name}}</td>
                        <td>{{form.last_name}}</td>
                        <td>{{form.father_name}}</td>
                        <td>{{form.national_code}}</td>
                        <td>{{form.email}}</td>
                    </tr>
                    </tbody>
                </table>
                <p>
                    آدرس : {{form.address}}
                </p>
                <div class="col-md-4 offset-4">
                    <img :src="form.profile_image" width="100%" alt="">
                </div>
            </div>
        </div>
    </card>
</template>


<script>
    export default {
        data() {
            return {
                status: true
            }
        },
        created() {
            axios.get('/profile')
                .then(response => {
                    this.form = response.data.user;
                    this.status = response.data.status
                })
                .catch(error => this.errorNotify(error));

        },
        methods: {
            handleSubmit() {
                axios.put('/profile', this.form)
                    .then(response => {
                        this.$parent.$parent.selected_component = 'Account';
                        this.successNotify(response)
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>