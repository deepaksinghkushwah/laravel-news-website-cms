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
        Schema::create('page_tag_relations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("page_id")->references("id")->on("pages")->cascadeOnDelete();
            $table->foreignId("tag_id")->references("id")->on("tags")->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_tag_relations');
    }
};
