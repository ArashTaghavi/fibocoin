import Dashboard from './Components/Dashboard/Index';

import Profile from './Components/Profile/Index';
import ChangePassword from './Components/Profile/ChangePassword';

import Wallet from './Components/Users/Wallet';
import Comments from './Components/Comments/Index';

import Slider from './Components/Slider/Index';
import SliderCreate from './Components/Slider/Create';

import Banner from './Components/Banner/Index';
import BannerCreate from './Components/Banner/Create';


import Tickets from './Components/Tickets/Index';
// ================= Users =================
import Users from './Components/Users/Index';
import UserDetail from './Components/Users/Detail';
import UserBuyOrders from './Components/Users/BuyOrders';
import UserSellOrders from './Components/Users/SellOrders';
import UserCards from './Components/Users/Cards';
import UserDocuments from './Components/Users/Documents';
import UserPaymentRequests from './Components/Users/PaymentRequests';
import UserCreate from './Components/Users/Create';
// ================= Currencies =================
import Currencies from './Components/Currencies/Index';
import CurrencyCreate from './Components/Currencies/Create';
import CurrencyEdit from './Components/Currencies/Edit';
// ================= Users =================

// ================= Currencies =================


export default [
    {path: '/', name: 'داشبورد', component: Dashboard},
    {path: '/profile', name: 'پروفایل', component: Profile},
    {path: '/change-password', name: 'تغییر کلمه عبور', component: ChangePassword},


    // ============================ Users ============================
    {path: '/users', name: 'لیست کاربران', component: Users},
    {path: '/user/:id/detail', name: 'جزییات کاربر', component: UserDetail},
    {path: '/user/:id/buy-orders', name: 'گزارش خرید کاربر', component: UserBuyOrders},
    {path: '/user/:id/sell-orders', name: 'گزارش فروش کاربر', component: UserSellOrders},
    {path: '/user/:id/cards', name: 'کارت ها', component: UserCards},
    {path: '/user/:id/documents', name: 'مدارک', component: UserDocuments},
    {path: '/user/:id/payment-requests', name: 'درخواست های واریز', component: UserPaymentRequests},
    {path: '/user/create', name: 'ایجاد کاربر', component: UserCreate},
    // ============================ Users ============================

    // ============================ Currencies ============================
    {path: '/currencies', name: 'لیست ارزها', component: Currencies},
    {path: '/currencies/create', name: 'ثبت ارز', component: CurrencyCreate},
    {path: '/currencies/:id/edit', name: 'ویرایش ارز', component: CurrencyEdit},
    // ============================ Currencies ============================

    // ============================ Sliders ============================
    {path: '/sliders', name: 'لیست تصاویر اسلایدر', component: Slider},
    {path: '/sliders/create', name: 'ایجاد تصویر اسلایدر', component: SliderCreate},
    // ============================ Sliders ============================

    // ============================ Sliders ============================
    {path: '/banners', name: 'لیست بنر ها', component: Banner},
    {path: '/banners/create', name: 'ایجاد بنر', component: BannerCreate},
    // ============================ Sliders ============================


    {path: '/comments', name: 'لیست نظرات', component: Comments},
    {path: '/tickets', name: 'تیکت ها', component: Tickets},

    {path: '/user/:id/wallet', name: 'موجودی کاربر', component: Wallet},


]
