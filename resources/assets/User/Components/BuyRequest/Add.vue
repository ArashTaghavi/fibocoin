<template>
    <card :title="`${$route.name}`">
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
                axios.post('/wallets/add', this.form)
                    .then(response => this.successNotify(response))
                    .catch(error => this.errorNotify(error));
            }
        }
    }
</script>