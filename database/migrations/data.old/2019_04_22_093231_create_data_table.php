<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvo_admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email',255);
            $table->string('password',255);
            $table->timestamps();
        });
        Schema::create('tvo_admin_user_notifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_id',255);
            $table->string('email',255);
            $table->string('password',255);
            $table->string('sex',255);
            $table->time('birhday',255);
            $table->string('possition',255);
            $table->tinyInteger('approveable',255);
            
            $table->timestamps();
        });
        Schema::create('tvo_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('admin_user_id');
             $table->integer('type');
             $table->string('title',255);
             $table->string('body',255);
             $table->tinyInteger('status');
             $table->string('link',255);

            $table->timestamps();
        });
        Schema::create('tvo_company_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->timestamps();
        });
        Schema::create('tvo_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->timestamps();
        });
        Schema::create('tvo_user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->timestamps();
        });
        Schema::create('tvo_user_notifications', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->timestamps();
        });
        Schema::create('tvo_user_schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->timestamps();
        });
        Schema::create('tvo_attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->timestamps();
        });
        Schema::create('tvo_attendance_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->timestamps();
        });
        Schema::create('tvo_holidays', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->timestamps();
        });
        Schema::create('tvo_holiday_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->timestamps();
        });

         Schema::create('tvo_health_forms', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->timestamps();
        });
        Schema::create('tvo_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->timestamps();
        });
        Schema::create('tvo_answer_template', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->timestamps();
        });
        Schema::create('tvo_tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->timestamps();
        });
        Schema::create('tvo_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->timestamps();
        });
        Schema::create('tvo_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            
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
        Schema::dropIfExists('tvo_admin');
        Schema::dropIfExists('tvo_admin_user_notifications');
        Schema::dropIfExists('tvo_companies');
        Schema::dropIfExists('tvo_company_profiles');
        Schema::dropIfExists('tvo_users');
        Schema::dropIfExists('tvo_user_profiles');
        Schema::dropIfExists('tvo_user_notifications');
        Schema::dropIfExists('tvo_user_schedules');
        Schema::dropIfExists('tvo_attendances');
        Schema::dropIfExists('tvo_attendance_requests');
        Schema::dropIfExists('tvo_holidays');
        Schema::dropIfExists('tvo_holiday_types');
        Schema::dropIfExists('tvo_health_forms');
        Schema::dropIfExists('tvo_questions');
        Schema::dropIfExists('tvo_answer_template');
        Schema::dropIfExists('tvo_tasks');
        Schema::dropIfExists('tvo_files');
        Schema::dropIfExists('tvo_comments');
    }
}
