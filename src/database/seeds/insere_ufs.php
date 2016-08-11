<?php

use Illuminate\Database\Seeder;

class insere_ufs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('ufs')->insert(['uf'=>'AC', 'estado'=>'Acre']);
		DB::table('ufs')->insert(['uf'=>'AL', 'estado'=>'Alagoas']);
		DB::table('ufs')->insert(['uf'=>'AP', 'estado'=>'Amapá']);
		DB::table('ufs')->insert(['uf'=>'AM', 'estado'=>'Amazonas']);
		DB::table('ufs')->insert(['uf'=>'BA', 'estado'=>'Bahia']);
		DB::table('ufs')->insert(['uf'=>'CE', 'estado'=>'Ceará']);
		DB::table('ufs')->insert(['uf'=>'DF', 'estado'=>'Distrito Federal']);
		DB::table('ufs')->insert(['uf'=>'ES', 'estado'=>'Espírito Santo']);
		DB::table('ufs')->insert(['uf'=>'GO', 'estado'=>'Goiás']);
		DB::table('ufs')->insert(['uf'=>'MA', 'estado'=>'Maranhão']);
		DB::table('ufs')->insert(['uf'=>'MT', 'estado'=>'Mato Grosso']);
		DB::table('ufs')->insert(['uf'=>'MS', 'estado'=>'Mato Grosso do Sul']);
		DB::table('ufs')->insert(['uf'=>'MG', 'estado'=>'Minas Gerais']);
		DB::table('ufs')->insert(['uf'=>'PA', 'estado'=>'Pará']);
		DB::table('ufs')->insert(['uf'=>'PB', 'estado'=>'Paraíba']);
		DB::table('ufs')->insert(['uf'=>'PR', 'estado'=>'Paraná']);
		DB::table('ufs')->insert(['uf'=>'PE', 'estado'=>'Pernambuco']);
		DB::table('ufs')->insert(['uf'=>'PI', 'estado'=>'Piauí']);
		DB::table('ufs')->insert(['uf'=>'RJ', 'estado'=>'Rio de Janeiro']);
		DB::table('ufs')->insert(['uf'=>'RN', 'estado'=>'Rio Grande do Norte']);
		DB::table('ufs')->insert(['uf'=>'RS', 'estado'=>'Rio Grande do Sul']);
		DB::table('ufs')->insert(['uf'=>'RO', 'estado'=>'Rondônia']);
		DB::table('ufs')->insert(['uf'=>'RR', 'estado'=>'Roraima']);
		DB::table('ufs')->insert(['uf'=>'SC', 'estado'=>'Santa Catarina']);
		DB::table('ufs')->insert(['uf'=>'SP', 'estado'=>'São Paulo']);
		DB::table('ufs')->insert(['uf'=>'SE', 'estado'=>'Sergipe']);
		DB::table('ufs')->insert(['uf'=>'TO', 'estado'=>'Tocantins']);
    }
}
