<?php

use Illuminate\Database\Seeder;
use App\Support\Facades\Configuracao;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuracao::createNewConfig('site', 'titulo', 'Painel CMS');
        Configuracao::createNewConfig('site', 'descricao', '');
        Configuracao::createNewConfig('site', 'palavras_chave', '');
        Configuracao::createNewConfig('site', 'logo', '');
        Configuracao::createNewConfig('site', 'favicon', '');

        Configuracao::createNewConfig('contato', 'email', 'contato@mail.com');

        Configuracao::createNewConfig('endereco', 'google_maps', ''); // Colocar o iframe do mapa
    }
}
