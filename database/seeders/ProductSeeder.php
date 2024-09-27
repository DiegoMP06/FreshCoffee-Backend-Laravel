<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' =>  "Café Caramel con Chocolate",
                'price' => 59.9,
                'image' => "cafe_01.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Café Frio con Chocolate Grande",
                'price' => 49.9,
                'image' => "cafe_02.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Latte Frio con Chocolate Grande",
                'price' => 54.9,
                'image' => "cafe_03.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Latte Frio con Chocolate Grande",
                'price' => 54.9,
                'image' => "cafe_04.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Malteada Fria con Chocolate Grande",
                'price' => 54.9,
                'image' => "cafe_05.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Café Mocha Caliente Chico",
                'price' => 39.9,
                'image' => "cafe_06.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Café Mocha Caliente Grande con Chocolate",
                'price' => 59.9,
                'image' => "cafe_07.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Café Caliente Capuchino Grande",
                'price' => 59.9,
                'image' => "cafe_08.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Café Mocha Caliente Mediano",
                'price' => 49.9,
                'image' => "cafe_09.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Café Mocha Frio con Caramelo Mediano",
                'price' => 49.9,
                'image' => "cafe_10.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Café Mocha Frio con Chocolate Mediano",
                'price' => 49.9,
                'image' => "cafe_11.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Café Espresso",
                'price' => 29.9,
                'image' => "cafe_12.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Café Capuchino Grande con Caramelo",
                'price' => 59.9,
                'image' => "cafe_13.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Café Caramelo Grande",
                'price' => 59.9,
                'image' => "cafe_14.jpg",
                'category_id' => 1,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Paquete de 3 donas de Chocolate",
                'price' => 39.9,
                'image' => "donas_01.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Paquete de 3 donas Glaseadas",
                'price' => 39.9,
                'image' => "donas_02.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Dona de Fresa",
                'price' => 19.9,
                'image' => "donas_03.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Dona con Galleta de Chocolate",
                'price' => 19.9,
                'image' => "donas_04.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Dona glass con Chispas Sabor Fresa",
                'price' => 19.9,
                'image' => "donas_05.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Dona glass con Chocolate",
                'price' => 19.9,
                'image' => "donas_06.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Dona de Chocolate con MÁS Chocolate",
                'price' => 19.9,
                'image' => "donas_07.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Paquete de 3 donas de Chocolate",
                'price' => 39.9,
                'image' => "donas_08.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Paquete de 3 donas con Vainilla y Chocolate",
                'price' => 39.9,
                'image' => "donas_09.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Paquete de 6 Donas",
                'price' => 69.9,
                'image' => "donas_10.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Paquete de 3 Variadas",
                'price' => 39.9,
                'image' => "donas_11.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Dona Natural con Chocolate",
                'price' => 19.9,
                'image' => "donas_12.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Paquete de 3 Donas de Chocolate con Chispas",
                'price' => 39.9,
                'image' => "donas_13.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Dona Chocolate y Coco",
                'price' => 19.9,
                'image' => "donas_14.jpg",
                'category_id' => 4,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Paquete Galletas de Chocolate",
                'price' => 29.9,
                'image' => "galletas_01.jpg",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Paquete Galletas de Chocolate y Avena",
                'price' => 39.9,
                'image' => "galletas_02.jpg",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Paquete de Muffins de Vainilla",
                'price' => 39.9,
                'image' => "galletas_03.jpg",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Paquete de 4 Galletas de Avena",
                'price' => 24.9,
                'image' => "galletas_04.jpg",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Galletas de Mantequilla Variadas",
                'price' => 39.9,
                'image' => "galletas_05.jpg",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Galletas de sabores frutales",
                'price' => 39.9,
                'image' => "galletas_06.jpg",
                'category_id' => 6,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Hamburguesa Sencilla",
                'price' => 59.9,
                'image' => "hamburguesas_01.jpg",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Hamburguesa de Pollo",
                'price' => 59.9,
                'image' => "hamburguesas_02.jpg",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Hamburguesa de Pollo y Chili",
                'price' => 59.9,
                'image' => "hamburguesas_03.jpg",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Hamburguesa Queso y Pepinos",
                'price' => 59.9,
                'image' => "hamburguesas_04.jpg",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Hamburguesa Cuarto de Libra",
                'price' => 59.9,
                'image' => "hamburguesas_05.jpg",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Hamburguesa Doble Queso",
                'price' => 69.9,
                'image' => "hamburguesas_06.jpg",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Hot Dog Especial",
                'price' => 49.9,
                'image' => "hamburguesas_07.jpg",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Paquete 2 Hot Dogs",
                'price' => 69.9,
                'image' => "hamburguesas_08.jpg",
                'category_id' => 2,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "4 Rebanadas de Pay de Queso",
                'price' => 69.9,
                'image' => "pastel_01.jpg",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Waffle Especial",
                'price' => 49.9,
                'image' => "pastel_02.jpg",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Croissants De la casa",
                'price' => 39.9,
                'image' => "pastel_03.jpg",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Pay de Queso",
                'price' => 19.9,
                'image' => "pastel_04.jpg",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Pastel de Chocolate",
                'price' => 29.9,
                'image' => "pastel_05.jpg",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Rebanada Pastel de Chocolate",
                'price' => 29.9,
                'image' => "pastel_06.jpg",
                'category_id' => 5,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Pizza Spicy con Doble Queso",
                'price' => 69.9,
                'image' => "pizzas_01.jpg",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Pizza Jamón y Queso",
                'price' => 69.9,
                'image' => "pizzas_02.jpg",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Pizza Doble Queso",
                'price' => 69.9,
                'image' => "pizzas_03.jpg",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Pizza Especial de la Casa",
                'price' => 69.9,
                'image' => "pizzas_04.jpg",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Pizza Chorizo",
                'price' => 69.9,
                'image' => "pizzas_05.jpg",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Pizza Hawaiana",
                'price' => 69.9,
                'image' => "pizzas_06.jpg",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Pizza Tocino",
                'price' => 69.9,
                'image' => "pizzas_07.jpg",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Pizza Vegetales y Queso",
                'price' => 69.9,
                'image' => "pizzas_08.jpg",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Pizza Pepperoni y Queso",
                'price' => 69.9,
                'image' => "pizzas_09.jpg",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Pizza Aceitunas y Queso",
                'price' => 69.9,
                'image' => "pizzas_10.jpg",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' =>  "Pizza Queso, Jamón y Champiñones",
                'price' => 69.9,
                'image' => "pizzas_11.jpg",
                'category_id' => 3,
                'available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('products')->insert($data);

        foreach($data as $product) {
            $file = File::get(public_path("/img/{$product['image']}"));
            if($file)
                Storage::put("products/{$product['image']}", $file);
        }
    }
}