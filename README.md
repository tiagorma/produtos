<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## Sobre

Projeto academico:
- DESENVOLVIMENTO WEB FULL STACK
- Projeto Full Stack - Unidade 4 :: Atividade 4


## Ambiente

- PHP v8.2.4
- Laravel v9.52.4
- Composer
- MySQL
- Bootstrap 5


## Propósito

Sistema para Listar, Cadastrar, Remover, Atualizar, conforme proposto na atividade.


## Live Demo

[https://loja.tyyago.com.br/produtos](https://loja.tyyago.com.br/produtos).

### Rotas

  - GET|HEAD        / ......................................
  - POST            _ignition/execute-solution ........ ignition.executeSolution › Spatie\LaravelIgnition › ExecuteSolutionController
  - GET|HEAD        _ignition/health-check .......... ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckController
  - POST            _ignition/update-config .......... ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigController
  - GET|HEAD        api/user .....................
  - GET|HEAD        produtos ......produtos.index › ProdutoController@index
  - POST            produtos ........produtos.store › ProdutoController@store
  - GET|HEAD        produtos/create .......produtos.create › ProdutoController@create
  - GET|HEAD        produtos/{produto} .......produtos.show › ProdutoController@show
  - PUT|PATCH       produtos/{produto} .......produtos.update › ProdutoController@update
  - DELETE          produtos/{produto} ........produtos.destroy › ProdutoController@destroy
  - GET|HEAD        produtos/{produto}/edit .......produtos.edit › ProdutoController@edit
  - GET|HEAD        sanctum/csrf-cookie ......... sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show

Showing [13] routes
