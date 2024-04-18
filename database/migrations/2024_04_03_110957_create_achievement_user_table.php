<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('achievement_user', function (Blueprint $table) {
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
			$table->foreignId('achievement_id')->constrained('achievements')->onDelete('cascade')->onUpdate('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('achievement_user');
	}
};
