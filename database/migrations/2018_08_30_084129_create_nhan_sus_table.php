<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanSusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_sus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_nv')->unique();
            $table->string('ho_ten');
            $table->boolean('gioi_tinh')->default(true);
            $table->date('ngay_sinh');
            $table->string('so_cmnd')->unique();
            $table->date('ngay_cap_cmnd');
            $table->string('noi_cap_cmnd');
            $table->string('dia_chi_thuong_tru');
            $table->string('dia_chi_lien_he')->nullable();
            $table->string('dien_thoai')->nullable();
            $table->string('email')->nullable();
            $table->string('trinh_do')->nullable();
            $table->string('truong_tot_nghiep')->nullable();
            $table->string('nam_tot_nghiep')->nullable();
            $table->date('ngay_bat_dau_lam');
            $table->string('chuc_danh');
            $table->integer('phongban_id');
            $table->integer('bophan_id');
            $table->index(['ma_nv', 'ho_ten']);
            $table->boolean('trang_thai')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhan_sus');
    }
}
