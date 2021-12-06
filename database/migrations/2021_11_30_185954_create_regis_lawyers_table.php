<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 'user_id', 'provinsi', 'kota', 'kecamatan', 'alamat', 'skl_pendidikan_terakhir',
        // 'kelulusan_advokat', 'status'
        Schema::create('regis_lawyers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->longText('alamat');
            $table->string('skl_pendidikan_terakhir');
            $table->string('sk_advokat');
            $table->string('status')->default('pending');
            $table->bigInteger('harga_muali')->nullable();
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
        Schema::dropIfExists('regis_lawyers');
    }
}
