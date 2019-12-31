<template>
    <card :title="`${$route.name}`">
        <div class="row" v-if="notifications.length>0">
            <table class="table table-hover mb-0 table-responsive">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>متن</th>
                    <th>تاریخ</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="notification in notifications">
                    <td>{{notification.notification_detail.title}}</td>
                    <td>{{notification.notification_detail.message}}</td>
                    <td>{{jDate(notification.created_date)}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <not-found v-else/>
    </card>


</template>
<script>
    import Vue from 'vue';
    let eventBus = new Vue();
    export default {
        data() {
            return {
                notifications: []
            }
        },
        created() {
            this.getNotifications();
            this.readAllNotification();


        },
        methods: {
            getNotifications() {
                axios.get('/notifications/full-list')
                    .then(response => this.notifications = response.data)
                    .catch(error => this.errorNotify(error));
            },
            jDate(date) {
                return moment(date).format('jYYYY/jM/jD H:m:s');
            },
            readAllNotification() {
                axios.put('/notifications/read-all')
                    .then(response => {
                        eventBus.$emit('aa');
                    })
                    .catch(error => this.errorNotify(error));

            },

        }
    }
</script>