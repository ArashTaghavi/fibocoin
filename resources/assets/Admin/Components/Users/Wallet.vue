<template>
    <card :title="`${$route.name}`" :active_loading="false">
        <div class="row">
           <div class="col-md-4">
               <div class="form-group">
                   <label for="amount">
                       مبلغ
                   </label>
                   <input type="number" class="form-control form-control-sm" v-model="form.amount" id="amount" placeholder="مبلغ مورد نظر را به ریال وارد نمایید.">
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
                axios.post(`/users/wallet/${this.$route.params.id}`, this.form)
                    .then(response => {
                        this.successNotify(response);
                        this.$router.push('/users');
                    })
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>