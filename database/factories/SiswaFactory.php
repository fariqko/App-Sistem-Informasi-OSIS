<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $kelasList = Kelas::all();
        $kelasRandom = $kelasList->random();

        $tanggal_lahir = $this->faker->dateTimeBetween('-17 years', '-14 years');
        $password_default = $tanggal_lahir->format('Ymd');

        $user = User::create([
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make($password_default), 
        ]);

        return [
            'user_id' => $user->id,
            'nama' => $user->name,
            'nis' => $this->faker->unique()->numerify('102102####'),
            'kelas_id' => $kelasRandom->id,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'tanggal_lahir' => $tanggal_lahir,
        ];
    }
}
