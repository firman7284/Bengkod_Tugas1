public function up(): void
{
    Schema::create('periksa', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_daftar_poli')->constrained('daftar_poli')->cascadeOnDelete();
        $table->dateTime('tgl_periksa');
        $table->text('catatan')->nullable();
        $table->integer('biaya_periksa');
        $table->timestamps();
    });
}
