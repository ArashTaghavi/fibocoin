<template>
    <card :title="`${$route.name}`">
        <div class="row">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>نام پدر</th>
                    <th>کد ملی</th>
                    <th>ایمیل</th>
                    <th>عضویت</th>
                    <th>وضعیف</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{user.first_name}}</td>
                    <td>{{user.last_name}}</td>
                    <td>{{user.father_name}}</td>
                    <td>{{user.national_code}}</td>
                    <td>{{user.email}}</td>
                    <td>{{jDate(user.created_at)}}</td>
                    <td>{{user.is_block ===1 ? 'مسدود' :'فعال'}}</td>
                </tr>
                </tbody>
            </table>
            <p>
                آدرس : {{user.address}}
            </p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <icon-btn style="width:100%" type="success" @click="selected='Documents'">مدارک</icon-btn>
            </div>
            <div class="col-md-3">
                <icon-btn style="width:100%" type="warning" @click="selected='BuyOrders'">خرید</icon-btn>
            </div>
            <div class="col-md-3">
                <icon-btn style="width:100%" type="danger" @click="selected='SellOrders'">فروش</icon-btn>
            </div>
            <div class="col-md-3">
                <icon-btn style="width:100%" type="info" @click="selected='Cards'">کارت</icon-btn>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-12">
                <component :is="selected"></component>
            </div>
        </div>
    </card>
</template>

<script>
    import Cards from './Cards';
    import Documents from './Documents';
    import BuyOrders from "./BuyOrders";
    import SellOrders from "./SellOrders";

    export default {
        data() {
            return {
                user: {},
                selected: ''
            }
        },
        created() {
            axios.get(`/users/detail/${this.$route.params.id}`)
                .then(response => this.user = response.data)
                .catch(error => this.errorNotify(error));
        },
        methods: {
            jDate(date) {
                return moment(date).format('jYYYY/jM/jD');
            }
        },
        components: {Cards, Documents, SellOrders, BuyOrders}
    }
</script>
