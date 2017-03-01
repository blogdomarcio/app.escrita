<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existe = Pagina::where('tipo','=','sobre')->count();
      if($existe){
        $paginaSobre = Pagina::where('tipo','=','sobre')->first();
      }else{
        $paginaSobre = new Pagina();
      }

      $paginaSobre->titulo = 'A Empresa';
      $paginaSobre->descricao = 'Descricao da Empresa';
      $paginaSobre->texto = 'texto da Empresa';
      $paginaSobre->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3849.3908440212604!2d-40.24668!3d-15.246467000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf299621a572220b!2sESCRITA+CONTABILIDADE!5e0!3m2!1spt-BR!2sbr!4v1485527623496" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
      $paginaSobre->imagem = 'img/logo.png';
      $paginaSobre->tipo = 'sobre';
      $paginaSobre->save();
      echo "Pagina Sobre Criada com sucesso!";




    $existe = Pagina::where('tipo','=','contato')->count();
    if($existe){
      $paginaContato = Pagina::where('tipo','=','contato')->first();
    }else{
      $paginaContato = new Pagina();
    }

    $paginaContato->titulo = 'Entre em contato';
    $paginaContato->descricao = 'Preencha o formulário';
    $paginaContato->texto = 'Observações';
    $paginaContato->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3849.3908440212604!2d-40.24668!3d-15.246467000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf299621a572220b!2sESCRITA+CONTABILIDADE!5e0!3m2!1spt-BR!2sbr!4v1485527623496" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
    $paginaContato->imagem = 'img/logo.png';
    $paginaContato->email = 'escrita@escritacontabilidade.com';
    $paginaContato->tipo = 'contato';
    $paginaContato->save();
    echo "Pagina Contato Criada com sucesso!";

    }
}
