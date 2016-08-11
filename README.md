##Sobre o projeto
**rafwell/laravel-municipios** é um pacote com models, migrations e seeds de ufs e municipios brasileiros para utilizar em sistemas feitos em Laravel > 5.

##Instalação
1. Adicione ao seu composer.json: ```"rafwell/laravel-municipios": "dev-master"``` e execute um ```composer update```.
2. Adicione ao seu ```app/config/app.php``` o seguinte provider:
    ```
    Rafwell\Municipios\RafwellMunicipiosServiceProvider::class
    ```
3. Execute: ```php artisan vendor:publish```. Isto criará no seu projeto dos models na pasta app: UF e Municipio, migrations para criar tabelas: ufs e municipios (com fk para a tabela ufs) e seeds para a carga de dados em ambas tabelas.
4. Execute os migrations para criar as tabelas: ```php artisan migrate```
5. Execute ```composer dumpautoload```.
6. Execute os seeds para dar carga nas tabelas: ```php artisan db:seed --class=insere_ufs``` e ```php artisan db:seed --class=insere_municipios```.

##Utilização
Após a configuração, adicione os models aos seus controllers e utilize como desejar.

##Observações
O id da tabela municipios é o código IBGE do município. A coluna uf é uma fk para a tabela municipios. Se encontrar algum município que não está no pacote, abra um Issue ou envie-nos um PR. :)
