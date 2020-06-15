<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique()->after('email');//nameで目標設定できる仕組み
  //        $table->string('username', 32)->unique('users_username_unique')->after('id')->comment('ユーザー名');
            $table->tinyInteger('role')->default(0)->after('password')->index('index_role')->comment('ロール');
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
 //     Schema::dropIfExists('users');
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('userid');
        $table->dropColumn('role');
    });
    }
}
