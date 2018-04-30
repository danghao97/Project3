<?php

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
        //
    }

    public function save($name, $email, $password)
    {
        $object = new \App\User();
        $object->name = $name;
        $object->email = $email;
        $object->password = bcrypt($password);
        $object->save();
    }
}
