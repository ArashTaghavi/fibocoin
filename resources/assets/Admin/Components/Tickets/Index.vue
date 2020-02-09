<template>
    <card :title="`${$route.name}`">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <input type="text" class="form-control" v-model="search_value" @keyup="handleSearch()"
                               placeholder="جستجو">
                    </div>
                    <div class="card-body" style="height: 250px;overflow-y: auto">
                        <div class="row">
                            <div class="col-md-12">
                                <p @click="getUserTickets(user.id)" v-for="(user,key) in users" :key=key
                                   class="user-box">
                                    {{user.first_name}} {{user.last_name}}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-8">
                <div class="card" v-if="receiver_id!=0">
                    <div class="card-body" style="height: 250px;overflow-y: auto">
                        <div class="row" v-for="(ticket,key) in user_tickets" :key=key>
                            <div class="col-md-12 text-right me" v-if="user.id==ticket.sender_id">
                                <p>
                                    {{ticket.body}}
                                    <br>
                                    {{jDate(ticket.created_at)}}
                                </p>
                            </div>
                            <div class="col-md-12 text-left you" v-else>
                                <p>
                                    {{ticket.body}}
                                    <br>
                                    {{jDate(ticket.created_at)}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <button @click="handleSend()" class="btn btn-xs btn-success"
                                        style="position:absolute;left:15px;top:30px">
                                    <i class="zmdi zmdi-home"></i>
                                </button>
                                <textarea v-model="form.body" class="form-control"
                                          rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </card>


</template>
<script>
    export default {
        data() {
            return {
                users: [],
                search_value: '',
                user_tickets: [],
                user: {},
                receiver_id: 0,
                intervalID: 0
            }
        },
        created() {
            this.getUsers();
            this.user = JSON.parse(localStorage.getItem('USER_INFORMATION'));

        },
        methods: {
            handleSearch() {
                axios.get(`/tickets/user-list/${this.search_value}`)
                    .then(response => {
                        this.users = response.data;
                    })
                    .catch(error => this.errorNotify(error));
            },
            getUsers() {
                axios.get(`/users`)
                    .then(response => this.users = response.data)
                    .catch(error => this.errorNotify(error));
            },
            getUserTickets(id) {
                this.receiver_id = id;
                clearInterval(this.intervalID);
                this.intervalID = setInterval(() => {
                    axios.get(`/tickets/get-by-user-id/${id}`)
                        .then(response => this.user_tickets = response.data)
                        .catch(error => this.errorNotify(error));
                }, 1000);

            },
            handleSend() {
                this.form.sender_id = this.user.id;
                this.form.receiver_id = this.receiver_id;
                axios.post(`/tickets`, this.form)
                    .then(response => {
                        this.getUserTickets(this.receiver_id);
                        /*  window.scroll({
                              top: 0,
                              left: 0,
                          });*/
                        this.emptyForm();
                    })
                    .catch(error => this.errorNotify(error));
            },
            jDate(date) {
                return moment(date).format('jYYYY/jM/jD H:m');
            }
        }
    }
</script>
<style>
    .user-box {
        padding: 10px 5px;
        border: 1px solid #eee;
        border-radius: 5px;
        cursor: pointer;
    }

    .me p {
        color: #2ecc71;
        padding: 10px;
        border-radius: 10px;
        font-size: 12px;

    }

    .you p {
        color: #3498db;
        padding: 10px;
        border-radius: 10px;
        font-size: 12px;

    }
</style>
