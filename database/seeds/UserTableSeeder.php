<?php
    use App\User;
    use App\Role;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Ali Rehman';
        $user->email = 'alirehman41f@gmail.com';
        $user->password = bcrypt('fcbarcelona');
        $user->save();
        $user->roles()->attach(Role::where('name', 'admin')->first());

        $admin = new User;
        $admin->name = 'Neo Ighodaro';
        $admin->email = 'neo@creativitykills.co';
        $admin->password = bcrypt('fcbarcelona');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'user')->first());
    }
}
