<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        $petugas = factory(User::class)->create([
            'name'     => 'Joh Doe',
            'nuptk'    => '4234234235235',
            'email'    => 'admin@absensi.com',
            'phone'    => '+624324342345235',
            'address'  => 'Jl. Raya Bekasi',
            'gender'   => 'Lak-Laki',
            'religion' => 'islam',
            'password' => bcrypt('absensi'),
        ]);

        $petugas->assignRole('admin');

        $this->command->info('>_ Here is your admin details to login:');
        $this->command->warn($petugas->email);
        $this->command->warn('Password is "absensi"');

        // Siswa
        $anggota = factory(User::class)->create([
            'name'     => 'Taylor Otwell',
            'nisn'     => '4234234235235',
            'email'    => 'siswa@absensi.com',
            'phone'    => '+624324342345235',
            'address'  => 'Jl. Raya Bekasi',
            'gender'   => 'Lak-Laki',
            'religion' => 'islam',
            'password' => bcrypt('absensi'),
        ]);

        $anggota->assignRole('siswa');

        $this->command->info('>_ Here is your Siswa details to login:');
        $this->command->warn($anggota->email);
        $this->command->warn('Password is "absensi"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}
