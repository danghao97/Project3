<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->save('danghao2', 'danghaopro97@gmail.com', 'matkhau');
    }

    public function save($name, $email, $password) {
        $object = new \App\User();
        $object->name = $name;
        $object->email = $email;
        $object->password = bcrypt($password);
        $object->save();
    }
}
