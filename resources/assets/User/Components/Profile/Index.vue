<template>
    <card title="مشخصات شخصی" sub_title="لطفا تمامی فیلد های درخواستی را بصورت دقیق پر کنید.">
        <div class="row" v-if="!status">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="first_name">نام</label>
                    <input type="text" v-model="form.first_name" id="first_name"
                           class="form-control form-control-sm" placeholder="نام">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="last_name">نام خانوادگی</label>
                    <input type="text" v-model="form.last_name" id="last_name" class="form-control form-control-sm"
                           placeholder="نام خانوادگی">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="father_name">نام پدر</label>
                    <input type="text" v-model="form.father_name" id="father_name"
                           class="form-control form-control-sm" placeholder="نام پدر">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="national_code">کد ملی</label>
                    <input type="text" v-model="form.national_code" id="national_code"
                           class="form-control form-control-sm" placeholder="کد ملی">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">ایمیل</label>
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
                    <label for="sos_phone">تلفن ضروری</label>
                    <input type="text" id="sos_phone" v-model="form.sos_phone"
                           class="form-control form-control-sm"
                           placeholder="کد معرف">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="address">آدرس</label>
                    <textarea id="address" v-model="form.address" class="form-control form-control-sm"
                              placeholder="آدرس"></textarea>
                </div>
            </div>
            <div class="col-md-12 text-right mt-3">
                <div class="form-group">
                    <cropper-portlet v-model="form.profile_image" title="تصویر شاخص" place="right"/>
                </div>
            </div>
            <submit @click="handleSubmit"/>
        </div>
            <div class="row" v-else>
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
                    .then(response => this.successNotify(response))
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>