<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categoria = new Categoria();
      $categoria->titulo = "Noticia";
      $categoria->save();

      $categoria = new Categoria();
      $categoria->titulo = "Artigo";
      $categoria->save();

      $categoria = new Categoria();
      $categoria->titulo = "Comunicado Clientes";
      $categoria->save();

      $categoria = new Categoria();
      $categoria->titulo = "Comunicado Funcionarios";
      $categoria->save();
    }
}
