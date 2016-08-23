<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('TabelaFuncionarioSeeder');
    }


class TabelaFuncionarioSeeder extends Seeder {

    public function run()
    {
        $usuarios = Funcionario::get();

        if($usuarios->count() == 0) {
            Usuario::create(array(
                'email' => 'seu@email.com',
                'senha' => Hash::make('admin'),
                'nome'  => 'Seu Nome',
                'tipo'  => 'admin'
            ));
        }
    }

}
}
