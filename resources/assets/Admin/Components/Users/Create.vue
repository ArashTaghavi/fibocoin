<template>
    <card :title="`${$route.name}`" :active_loading=false>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="mobile">موبایل</label>
                    <input type="text" v-model="form.mobile" id="mobile"
                           class="form-control form-control-sm" placeholder="موبایل را وارد نمایید.">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="password">کلمه عبور</label>
                  <small class="text-danger">  {{password_validation_message}}</small>
                    <input type="password" v-model="form.password" id="password"
                           class="form-control form-control-sm"
                           placeholder="کلمه عبور را وارد نمایید.">
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
                currencies: [],
                password_validation_message: '',
            }
        },
        methods: {
            handleSubmit() {
                axios.post('/users', this.form)
                    .then(response => this.successNotify(response))
                    .catch(error => this.errorNotify(error));
            },
            handlePasswordValidation() {
                let pass_regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
                if (!pass_regex.test(this.form.password)) {
                    this.password_validation_message = 'پسورد باید شامل حروف کوچک، بزرگ و عدد باشد.';
                }
                else
                {
                    this.password_validation_message = '';
                }
            }
        }
    }
</script>
