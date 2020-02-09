<template>
    <card :title="`${$route.name}`">
        <div class="row" v-if="comments.length>0">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>متن</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="comment in comments">
                    <td>{{comment.full_name}}</td>
                    <td>{{comment.email}}</td>
                    <td>
                        {{comment.description}}
                    </td>
                    <td>
                        <delete-btn :id=comment.id></delete-btn>
                        <icon-btn type="success" icon="check" v-if="comment.approved==0"
                                  @click="handleApproved(comment.id)">تایید
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
                comments: [],
            }
        },
        created() {
            this.getComment();
        },
        methods: {
            handleDelete(id) {
                axios.delete(`/comments/${id}`)
                    .then(response => {
                        this.successNotify(response);
                        this.getComment();
                    })
                    .catch(error => this.errorNotify(error));
            },
            handleApproved(id) {

                axios.get(`/comments/approved/${id}`)
                    .then(response => this.getComment())
                    .catch(error => this.errorNotify(error));
            },
            getComment() {
                axios.get(`/comments`)
                    .then(response => this.comments = response.data)
                    .catch(error => this.errorNotify(error));
            },
        }
    }
</script>
