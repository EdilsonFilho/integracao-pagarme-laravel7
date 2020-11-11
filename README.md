# SEED PAGARME LARAVEL7 E ADMINLTE3
Criando o ambiente e o projeto:

## fork de um projeto já existente


### Preparando o ambiente
```
Criar o .env (copiar o .env.example)
Mudar as credenciais dos bancos de dados. 
atencao para:

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=seedpagarme
DB_USERNAME=seedpagarme
DB_PASSWORD=seedpagarme

REDIS_HOST=cache
REDIS_PASSWORD=null
REDIS_PORT=6379
```

### Crie uma seed para criar usuario administrador
```

        class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456789'),
            'is_admin' => true,
        ]);



        factory(App\User::class)->create([
            'name' => 'Usuario1',
            'email' => 'usuario1@gmail.com',
            'password' => bcrypt('123456789'),

            
        ]);
    }
}
```

### Crie uma chave para APP_KEY no .env
```
sudo docker exec -it seedpagarme-app bash
php artisan key:generate --show

e cole a chave no .env
```


### rode as migracoes e a seed


```
php artisan migrate --step --seed

```


### Coloque a API_Key do pagarme
`Crie uma conta no pagarme e gere uma apiKey e cole no projeto'`
 



