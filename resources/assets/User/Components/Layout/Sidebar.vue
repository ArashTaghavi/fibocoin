<template>
    <aside class="sidebar">
        <div class="scrollbar-inner">

            <div class="user">
                <div class="user__info" data-toggle="dropdown">
                    <img class="user__img" src="/dashboard-assets/demo/img/profile-pics/8.jpg" alt="">
                    <div>
                        <div class="user__name">{{user.first_name}} {{user.last_name}}</div>
                        <div class="user__email bg-info m-2 p-2">موجودی کیف پول :
                           <router-link to="/wallets/add">
                               {{new Intl.NumberFormat('en-US').format(wallet)}} تومان
                           </router-link>
                        </div>
                    </div>
                </div>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="default.htm">مشاهده پروفایل</a>
                    <a class="dropdown-item" href="default.htm">تنظیمات</a>
                    <a class="dropdown-item" href="/logout">خروج</a>
                </div>
            </div>

            <ul class="navigation">
                <li class="navigation__active">
                    <router-link to="/"><i class="zmdi zmdi-home"></i>احراز هویت</router-link>
                </li>


                <li class="@@typeactive">
                    <router-link to="/profile">
                        <i class="zmdi zmdi-account"></i>
                        پروفایل
                    </router-link>
                </li>

                <li class="@@widgetactive">
                    <router-link to="/documents">
                        <i class="zmdi zmdi-file"></i>
                        مدارک
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="/cards">
                        <i class="zmdi zmdi-card"></i>
                        مدیریت کارت ها
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="/currency-users">
                        <i class="zmdi zmdi-collection-text"></i>
                        سفارشات فروش
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="/payment-requests">
                        <i class="zmdi zmdi-collection-text"></i>
                        درخواست واریز وجه
                    </router-link>
                </li>
               <!-- <li class="@@widgetactive">
                    <router-link to="/buy-orders">
                        <i class="zmdi zmdi-collection-text"></i>
                        سفارشات خرید
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="/sell-orders">
                        <i class="zmdi zmdi-collection-text"></i>
                        سفارشات فروش
                    </router-link>
                </li>-->
                <li class="@@widgetactive">
                    <router-link to="/financial">
                        <i class="zmdi zmdi-trending-up"></i>
                        گزارشات مالی
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <router-link to="/change-password">
                        <i class="zmdi zmdi-lock"></i>
                        تغییر کلمه عبور
                    </router-link>
                </li>
                <li class="@@widgetactive">
                    <a href="/logout">
                        <i class="zmdi zmdi-arrow-out"></i>
                        خروج
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</template>
<script>
    export default {
        data() {
            return {
                user: {},
                wallet:{}
            }
        },
        created() {
            this.user = JSON.parse(localStorage.getItem('USER_INFORMATION'));
            this.getBalance();
        },
        methods: {
            getBalance() {
                axios.get('/wallets/balance')
                    .then(response => this.wallet = response.data.amount)
                    .catch(error => this.errorNotify(error));
            }
        },
        currencyFormat(){
            const formatter = new Intl.NumberFormat('en-US');

            return formatter;
        }
    }
</script>