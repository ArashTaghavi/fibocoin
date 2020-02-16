<template>
    <card :title="`${$route.name}`" :active_loading=false>
        <div class="row">
            <div class="col-md-6">
                <icon-btn style="width:100%" type="info" @click="selected='BuyOrders'">خرید</icon-btn>
            </div>
            <div class="col-md-6">
                <icon-btn style="width:100%" type="success" @click="selected='CurrencyUser'">فروش</icon-btn>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <component :is="selected"></component>
            </div>
        </div>
    </card>


</template>
<script>
    import BuyOrders from "../../../User/Components/BuyOrders/BuyOrdersForUse";
    import CurrencyUser from "../../../User/Components/CurrencyUsers/SellForUse";

    export default {
        data() {
            return {
                selected: ''
            }
        },
        components: {BuyOrders, CurrencyUser}
    }
</script>