<template>
    <card :title="`${$route.name}`" :active_loading="false">
        <div class="row">
            <div class="col-md-12 text-right mt-3">
                <div class="form-group">
                    <cropper-portlet v-model="form.profile_image" title="تصویر" place="right"/>
                </div>
            </div>
            <submit @click="handleSubmit"/>
        </div>
    </card>
</template>

<script>
    export default {
        methods: {
            handleSubmit() {
                axios.post('/banners', this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/banners')
                    })
                    .catch(error => this.errorNotify(error));
            }
        },
    }
</script>