<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('school_settings', function (Blueprint $table) {
            $table->string('about_image')->nullable()->after('footer_description');
            $table->string('why_school_image')->nullable()->after('about_image');
            $table->string('testimonial_image')->nullable()->after('why_school_image');
            $table->string('faq_image')->nullable()->after('testimonial_image');
        });
    }

    public function down(): void
    {
        Schema::table('school_settings', function (Blueprint $table) {
            $table->dropColumn([
                'about_image',
                'why_school_image',
                'testimonial_image',
                'faq_image',
            ]);
        });
    }
};