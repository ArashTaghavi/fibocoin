<template>
    <card :title="`${$route.name}`">
        <add-btn to="banners"/>

        <div class="row" v-if="banners.length>0">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>تصویر</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="banner in banners">
                    <td>
                        <img :src=banner.profile_image style="width: 50%" :alt=banner.id>
                    </td>
                    <td>
                        <delete-btn :id=banner.id></delete-btn>
                        <icon-btn type="danger" icon="close" v-if="banner.is_published==0"
                                  @click="handlePublish(banner.id)">غیر فعال
                        </icon-btn>
                        <icon-btn type="success" icon="check" v-if="banner.is_published==1"
                                  @click="handlePublish(banner.id)">
                            فعال
                        </icon-btn>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
        <not-found v-else/>
    </card>


</template>
<script>
    export default {
        data() {
            return {
                banners: [],
            }
        },
        created() {
            this.getBanner();
        },
        methods: {
            handleDelete(id) {
                axios.delete(`/banners/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getBanner();
                    })
                    .catch(error => this.errorNotify(error));
            },
            handlePublish(id) {

                axios.get(`/banners/published/${id}`)
                    .then(response => this.getBanner())
                    .catch(error => this.errorNotify(error));
            },
            getBanner() {
                axios.get(`/banners`)
                    .then(response => this.banners = response.data)
                    .catch(error => this.errorNotify(error));
            },
        }
    }
</script>
