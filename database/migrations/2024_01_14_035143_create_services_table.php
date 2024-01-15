<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements("service_id");
            $table->string("service_name");
            $table->text("description");
            $table->string("pricing");
            $table->timestamps();
        });

        DB::table('services')->insert([
            'service_name' => 'Pembuatan Web App',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec est id ex egestas porta. Nullam faucibus, elit eu vestibulum posuere, nulla leo viverra ex, eu facilisis elit ligula sed odio. Etiam sollicitudin turpis quis tempor rhoncus. Nam ac efficitur tortor. Ut condimentum sem id dolor suscipit venenatis. Aenean cursus odio porttitor sollicitudin tincidunt. Fusce vitae tristique ante. Nullam et pellentesque ex. Suspendisse dapibus nunc ultricies, convallis purus sit amet, semper lorem. Nulla pharetra risus vitae felis molestie malesuada. ',
            'pricing' => 50000
        ]);

        DB::table('services')->insert([
            'service_name' => 'Pembuatan Machine Learning',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec est id ex egestas porta. Nullam faucibus, elit eu vestibulum posuere, nulla leo viverra ex, eu facilisis elit ligula sed odio. Etiam sollicitudin turpis quis tempor rhoncus. Nam ac efficitur tortor. Ut condimentum sem id dolor suscipit venenatis. Aenean cursus odio porttitor sollicitudin tincidunt. Fusce vitae tristique ante. Nullam et pellentesque ex. Suspendisse dapibus nunc ultricies, convallis purus sit amet, semper lorem. Nulla pharetra risus vitae felis molestie malesuada. ',
            'pricing' => 120000
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
