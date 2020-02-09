<template>
    <card :title="`${$route.name}`">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body" style="height: 250px;overflow-y: auto">
                        <div class="row" v-for="(ticket,key) in tickets" :key=key>
                            <div class="col-md-12 text-right me" v-if="user.user.id==ticket.sender_id">
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
                user: {},
                tickets: []
            }
        },
        created() {
            this.user = JSON.parse(localStorage.getItem('USER_INFORMATION'));

                this.getTickets();

        },
        methods: {
            getTickets() {
                setInterval(()=>{
                    axios.get(`/tickets/list`)
                        .then(response => this.tickets = response.data)
                        .catch(error => this.errorNotify(error));
                },1000);
            },
            handleSend() {
                this.form.sender_id = this.user.user.id;
                this.form.receiver_id = 1;

                axios.post(`/tickets`, this.form)
                    .then(response => {
                        this.getTickets(this.receiver_id);
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
