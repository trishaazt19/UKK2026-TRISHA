<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        
        User::create([
            'name' => 'Admin',
            'email' => 'admin@perpus.test',
            'password' => Hash::make('password'),
            'role' => 'admin', 
        ]);
        User::create([
            'name' => 'Yuki',
            'email' => 'siswa@perpus.test',
            'password' => Hash::make('Yuki123'),
            'role' => 'siswa',
        ]);
        User::create([
            'name' => 'Sakir',
            'email' => 'siswa2@perpus.test',
            'password' => Hash::make('Kira208'),
            'role' => 'siswa', 
        ]);

        // Data Buku
        Book::create([
            'title' => 'Ayat-Ayat Cinta',
            'author' => 'Habiburrahman El Shirazy',
            'publisher' => 'Republika',
            'year' => 2004,
            'stock' => 5,
        ]);
        Book::create([
            'title' => 'Home Sweet Loan',
            'author' => 'Almira Bastari',
            'publisher' => 'Gramedia',
            'year' => 2022,
            'stock' => 4,
        ]);
        Book::create([
            'title' => 'Dilan',
            'author' => 'Pidi Baiq',
            'publisher' => 'Pastel Books',
            'year' => 2014,
            'stock' => 3,
        ]);
        Book::create([
            'title' => 'Hujan',
            'author' => 'Tere Liye',
            'publisher' => 'Gramedia Pustaka Utama',
            'year' => 2016,
            'stock' => 6,
        ]);
    }
}