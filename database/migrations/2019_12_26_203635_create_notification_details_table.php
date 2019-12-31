<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateNotificationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('message');
            $table->string('icon');
            $table->string('link');
            $table->timestamps();
        });

        $notification_details = [
            ['title' => 'کارت بانکی', 'message' => 'تایید کارت بانکی با موفقیت انجام شد.', 'link' => '/cards', 'icon' => 'check'],
            ['title' => 'کارت بانکی', 'message' => 'تایید کارت بانکی با موفقیت انجام نشد.', 'link' => '/cards', 'icon' => 'close'],
            ['title' => 'مدارک', 'message' => 'تایید مدرک با موفقیت انجام شد.', 'link' => '/documents', 'icon' => 'check'],
            ['title' => 'مدارک', 'message' => 'تایید مدرک با موفقیت انجام نشد.', 'link' => '/documents', 'icon' => 'close'],
            ['title' => 'تلفن ثابت', 'message' => 'تلفن با موفقیت تایید شد.', 'link' => '/profile', 'icon' => 'check'],
            ['title' => 'تلفن ثابت', 'message' => 'تلفن با موفقیت تایید نشد.', 'link' => '/profile', 'icon' => 'close'],
        ];
        DB::table('notification_details')->insert($notification_details);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notification_details');
    }
}
