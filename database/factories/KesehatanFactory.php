<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kesehatan>
 */
class KesehatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => $this->faker->unique()->safeEmail(), // Email acak yang unik
            'nama_pemohon' => $this->faker->name(), // Nama pemohon acak
            'telepon' => $this->faker->phoneNumber(), // Nomor telepon acak
            'nama_rekomendasi' => $this->faker->name(), // Nama rekomendasi acak
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']), // Jenis kelamin acak
            'tempat_lahir' => $this->faker->city(), // Tempat lahir acak
            'nik' => $this->faker->unique()->numerify('320###########'), // NIK acak
            'nomor_kk' => $this->faker->unique()->numerify('3201##########'), // Nomor KK acak
            'alamat' => $this->faker->address(), // Alamat acak
            'kelurahan' => $this->faker->word(), // Kelurahan acak
            'kecamatan' => $this->faker->word(), // Kecamatan acak
            'nomor_sktm' => 'SKTM-' . $this->faker->year() . '-' . $this->faker->unique()->randomNumber(3), // Nomor SKTM acak
            'sktm' => 'berkas/sktm-' . $this->faker->uuid() . '.pdf', // PDF SKTM acak
            'kartu_keluarga' => 'berkas/kk-' . $this->faker->uuid() . '.pdf', // PDF kartu keluarga acak
            'form_layanan' => 'berkas/form-layanan-' . $this->faker->uuid() . '.pdf', // PDF form layanan acak
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
