<template>
    <card :title="`${$route.name}`">
        <add-btn to="sliders"/>

        <div class="row" v-if="sliders.length>0">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>تصویر</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="slider in sliders">
                    <td>
                        <img :src=slider.profile_image style="width: 50%" :alt=slider.id>
                    </td>
                    <td>
                        <delete-btn :id=slider.id></delete-btn>
                        <icon-btn type="danger" icon="close" v-if="slider.is_published==0"
                                  @click="handlePublish(slider.id)">غیر فعال
                        </icon-btn>
                        <icon-btn type="success" icon="check" v-if="slider.is_published==1"
                                  @click="handlePublish(slider.id)">
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
                sliders: [],
            }
        },
        created() {
            this.getSlider();
        },
        methods: {
            handleDelete(id) {
                axios.delete(`/sliders/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getSlider();
                    })
                    .catch(error => this.errorNotify(error));
            },
            handlePublish(id) {

                axios.get(`/sliders/published/${id}`)
                    .then(response => this.getSlider())
                    .catch(error => this.errorNotify(error));
            },
            getSlider() {
                axios.get(`/sliders`)
                    .then(response => this.sliders = response.data)
                    .catch(error => this.errorNotify(error));
            },
        }
    }
</script>
