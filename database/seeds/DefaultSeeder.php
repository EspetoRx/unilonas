<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Permissions
        Permission::create(['name' => 'gerenciar publicações']);
        Permission::create(['name' => 'gerenciar usuários']);
        Permission::create(['name' => 'gerenciar roles']);
        Permission::create(['name' => 'gerenciar permissões']);

        // Roles
        $role = Role::create(['name' => 'administrador']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'moderador']);
        $role->givePermissionTo(['gerenciar publicações', 'gerenciar usuários']);

        $role = Role::create(['name' => 'autor']);
        $role->givePermissionTo(['gerenciar publicações']);

        $role = Role::create(['name' => 'usuário']);

        // Users
        $admin = App\User::create([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => bcrypt('senha')
        ]);
        $admin_role = Role::findByName('administrador');
        $admin->assignRole($admin_role);

        $moderator = App\User::create([
            'name' => 'Moderador',
            'email' => 'moderador@example.com',
            'password' => bcrypt('senha')
        ]);
        $moderator_role = Role::findByName('moderador');
        $moderator->assignRole($moderator_role);

        $author = App\User::create([
            'name' => 'Autor',
            'email' => 'autor@example.com',
            'password' => bcrypt('senha')
        ]);
        $author_role = Role::findByName('autor');
        $author->assignRole($author_role);

        $user = App\User::create([
            'name' => 'Usuário',
            'email' => 'usuario@example.com',
            'password' => bcrypt('senha')
        ]);
        $user_role = Role::findByName('usuário');
        $user->assignRole($user_role);

        // Categories
        $uncategorized = App\Category::create([
            'name' => 'Descategorizado',
            'description' => 'Categoria padrão'
        ]);

        // Tags
        $tag = App\Tag::create([
            'name' => 'Novidades',
            'description' => 'Uma tag simples'
        ]);

    }
}
