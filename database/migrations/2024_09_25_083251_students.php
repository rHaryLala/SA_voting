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
        Schema::create('students', function (Blueprint $table) {
           $table->id();
           $table->string('student_id')->unique();
           $table->string('student_nom');
           $table->string('student_prenom');
           $table->string('student_adresse');
           $table->string('student_region');
           $table->string('sex');
           $table->string('student_email')->unique();
           $table->string('password');
           $table->string('dateNaissance')->nullable();
           $table->string('lieuNaissance')->nullable();
           $table->string('religion')->nullable();
           $table->string('etat_civil')->nullable();
           $table->string('nom_conjoint')->nullable();
           $table->string('nb_enfant')->nullable();
           $table->string('father_name')->nullable();
           $table->string('father_prof')->nullable();
           $table->string('mother_name')->nullable();
           $table->string('mother_prof')->nullable();
           $table->string('parent_adresse')->nullable();
           $table->string('parent_tel')->nullable();
           $table->string('nationalite')->nullable();
           $table->string('nationalite')->nullable();
           $table->string('nationalite')->nullable();
           $table->string('nationalite')->nullable();
           $table->string('nationalite')->nullable();
           $table->string('nationalite')->nullable();
           $table->string('nationalite')->nullable();
           $table->string('nationalite')->nullable();
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
