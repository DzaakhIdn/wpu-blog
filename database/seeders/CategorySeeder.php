<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name_category' => 'Hewan Hewanan',
            'slug' => 'hewan-hewanan',
            'description' => 'Berisi kategori tantang berbagai macam artikel hewan yang lucu'
        ]);

        Category::create([
            'name_category' => 'Perfilman',
            'slug' => 'filem-filem',
            'description' => 'Berisi kategori tantang berbagai macam artikel filem yang sangat absolute cinema'
        ]);

        Category::create([
            'name_category' => 'Mobil Mobilan',
            'slug' => 'mobil-mobilan',
            'description' => 'Berisi kategori tantang berbagai macam artikel tentang mobil mobilan yang bikin kamu tercengang'
        ]);
    }
}
