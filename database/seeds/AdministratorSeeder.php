<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new App\User;
        $administrator->username = "administrator";
        $administrator->name = "Site administrator";
        $administrator->email = "admin@toko-andi.rpl";
        $administrator->roles = json_encode(["admin"]);
        $administrator->password = \Hash::make("andi");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->phone = "081224204657";
        $administrator->address = "petakan";
        $administrator->save();

        $this->command->info("User admin berhasil di insert");
    }
}
