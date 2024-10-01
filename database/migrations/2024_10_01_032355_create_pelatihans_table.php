<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelatihans', function (Blueprint $table) {
            $table->id(); // Kolom primary key
            $table->string('name'); // Nama pelatihan
            $table->string('position'); // Posisi/jabatan
            $table->string('LSP'); // Sertifikasi LSP
            $table->integer('Kuota'); // Kuota peserta
            $table->date('start_date'); // Tanggal mulai pelatihan
            $table->decimal('Harga', 10, 2); // Harga pelatihan (misal 500000.00)
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelatihans');
    }
}
