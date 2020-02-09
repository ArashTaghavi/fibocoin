import Dashboard from './Components/Dashboard/Index';

import Profile from './Components/Profile/Index';
import ChangePassword from './Components/Profile/ChangePassword';

import Financial from './Components/Financial/Index';

import Notifications from './Components/Notifications/Index';

import WalletAdd from './Components/Wallet/Add';

import Tickets from './Components/Tickets/Index';


// =================== Documents ===================
import Documents from './Components/Documents/Index';
import DocumentCreate from './Components/Documents/Create';
import DocumentEdit from './Components/Documents/Edit';
// =================== Documents ===================

// =================== Cards ===================
import Cards from './Components/Cards/Index';
import CardCreate from './Components/Cards/Create';
import CardEdit from './Components/Cards/Edit';
// =================== Cards ===================

// =================== Buy Orders ===================
import BuyOrders from './Components/BuyOrders/Index';
import BuyOrderCreate from './Components/BuyOrders/Create';
import BuyOrderEdit from './Components/BuyOrders/Edit';
import BuyOrderDetail from './Components/BuyOrders/Detail';
// =================== Buy Orders ===================

// =================== Sell Orders ===================
import SellOrders from './Components/SellOrders/Index';
import SellOrderCreate from './Components/SellOrders/Create';
import SellOrderEdit from './Components/SellOrders/Edit';
import SellOrderDetail from './Components/SellOrders/Detail';
// =================== Sell Orders ===================

// =================== Currency Users ===================
import CurrencyUsers from './Components/CurrencyUsers/Index';
import CurrencyUserCreate from './Components/CurrencyUsers/Create';
import CurrencyUserEdit from './Components/CurrencyUsers/Edit';
import CurrencyUserPayment from './Components/CurrencyUsers/Payment';
// =================== Currency Users ===================

// =================== Payment Requests ===================
import PaymentRequests from './Components/PaymentRequests/Index';
import PaymentRequestCreate from './Components/PaymentRequests/Create';
// =================== Payment Requests ===================


export default [
    {path: '/', name: 'احراز هویت', component: Dashboard},
    {path: '/profile', name: 'پروفایل', component: Profile},
    {path: '/change-password', name: 'تغییر کلمه عبور', component: ChangePassword},

    // =================== Documents ===================
    {path: '/documents', name: 'لیست مدارک', component: Documents},
    {path: '/documents/create', name: 'بارگذاری مدرک', component: DocumentCreate},
    {path: '/documents/:id/edit', name: 'ویرایش مدرک', component: DocumentEdit},
    // =================== Documents ===================

    // =================== Cards ===================
    {path: '/cards', name: 'لیست کارت', component: Cards},
    {path: '/cards/create', name: 'ثبت کارت', component: CardCreate},
    {path: '/cards/:id/edit', name: 'ویرایش کارت', component: CardEdit},
    // =================== Cards ===================

    // =================== Buy Orders ===================
    {path: '/buy-orders', name: 'لیست سفارشات خرید', component: BuyOrders},
    {path: '/buy-orders/create', name: 'ثبت سفارش خرید', component: BuyOrderCreate},
    {path: '/buy-orders/:id/edit', name: 'ویرایش سفارش خرید', component: BuyOrderEdit},
    {path: '/buy-orders/:id/detail', name: 'جزییات سفارش خرید', component: BuyOrderDetail},
    // =================== Buy Orders ===================

    // =================== Sell Orders ===================
    {path: '/sell-orders', name: 'لیست سفارشات فروش', component: SellOrders},
    {path: '/sell-orders/create', name: 'ثبت سفارش فروش', component: SellOrderCreate},
    {path: '/sell-orders/:id/edit', name: 'ویرایش سفارش فروش', component: SellOrderEdit},
    {path: '/sell-orders/:id/detail', name: 'جزییات سفارش فروش', component: SellOrderDetail},
    // =================== Sell Orders ===================

    // =================== Currency Users ===================
    {path: '/currency-users', name: 'لیست پیشنهادات', component: CurrencyUsers},
    {path: '/currency-users/create', name: 'ثبت پیشنهاد', component: CurrencyUserCreate},
    {path: '/currency-users/:id/edit', name: 'ویرایش پیشنهاد', component: CurrencyUserEdit},
    {path: '/currency-users/:id/payment', name: 'پرداخت ها', component: CurrencyUserPayment},
    // =================== Currency Users ===================

    // =================== Payment Requests ===================
    {path: '/payment-requests', name: 'لیست درخواست ها واریز وجه', component: PaymentRequests},
    {path: '/payment-requests/create', name: 'ثبت درخواست واریز وجه', component: PaymentRequestCreate},
    // =================== Payment Requests ===================

    {path: '/notifications', name: 'پیام های مدیر', component: Notifications},
    {path: '/wallets/add', name: 'افزایش موجودی کیف پول', component: WalletAdd},

    {path: '/financial', name: 'گزارشات مالی', component: Financial},
    {path: '/tickets', name: 'تیکت ها', component: Tickets},


]