<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $manufacturers = [
            ['naziv_proizvodaca' => 'Mercedes'],
            ['naziv_proizvodaca' => 'BMW'],
            ['naziv_proizvodaca' => 'Audi']
        ];
        DB::table('manufacturers')->insert($manufacturers);
        
        $numbers = [
            ['fiksni' => '070 882 150', 'mobilni' => '091 888 999', 'sluzbeni' => '091 778 999', 'napomena' => 'ne zovi na fiksni poslije 18h'],
            ['fiksni' => '385 555 222', 'mobilni' => '091 888 999', 'sluzbeni' => '091 858 999', 'napomena' => 'iskljucivo zvati na ovaj broj'],
            ['fiksni' => '333 666 999', 'mobilni' => '091 888 999', 'sluzbeni' => '091 238 999', 'napomena' => 'ne odgovaram na pozive nakon 15h jer me boli pimpy za vas']
     
        ];
        DB::table('numbers')->insert($numbers);

        $users = [
            ['ime' => 'Joza', 'prezime' => 'Petrovic', 'naziv_racuna' => 'radovanbacadaske', 'email_privatni' => 'joza@gmail.com', 'email_sluzbeni' => 'sjoza@gmail.com', 'lozinka' => 'LOZINKA'],
            ['ime' => 'Stevo', 'prezime' => 'Priprka', 'naziv_racuna' => 'stevoizprnjavora', 'email_privatni' => 'stevo@gmail.com', 'email_sluzbeni' => 'sstevo@gmail.com', 'lozinka' => 'LOZINKA'],
            ['ime' => 'Mufljuz', 'prezime' => 'Mustafic', 'naziv_racuna' => 'ugalabugala', 'email_privatni' => 'ugala@gmail.com', 'email_sluzbeni' => 'sugala@gmail.com', 'lozinka' => 'LOZINKA'],
     
        ];
        DB::table('users')->insert($users);

        $addresses = [
            ['adresa' => 'kravarsko', 'user_id'=> 1],
            ['adresa' => 'donja priprka', 'user_id'=> 2],
            ['adresa' => 'modrici', 'user_id'=> 3]
     
        ];
        DB::table('addresses')->insert($addresses);

        $types = [
            ['naziv_modela' => 'C-klasa', 'godina_proizvodnje' => 2011, 'broj_sjedala' => 4, 'snaga' => 306, 'obujam_motora' => 3500, 'vrsta_motora' => 'V', 'boja' => 'crna', 'prijedeni_km' => 180000, 'vrsta_mjenjaca' => 'automatski', 'manufacturers_id' => 1],
            ['naziv_modela' => 'serija 3', 'godina_proizvodnje' => 2013, 'broj_sjedala' => 4, 'snaga' => 245, 'obujam_motora' => 3000, 'vrsta_motora' => 'redni', 'boja' => 'crvena', 'prijedeni_km' => 200000, 'vrsta_mjenjaca' => 'rucni', 'manufacturers_id' => 2],
            ['naziv_modela' => 'A4', 'godina_proizvodnje' => 2015, 'broj_sjedala' => 4, 'snaga' => 245, 'obujam_motora' => 3000, 'vrsta_motora' => 'V', 'boja' => 'plava', 'prijedeni_km' => 250000, 'vrsta_mjenjaca' => 'automatski', 'manufacturers_id' => 3]
     
        ];
        DB::table('types')->insert($types);

        $owners = [
            ['kolicina_vlasnika' => 1, 'user_id' => 1, 'type_id' => 1],
            ['kolicina_vlasnika' => 2, 'user_id' => 2, 'type_id' => 2],
            ['kolicina_vlasnika' => 3, 'user_id' => 3, 'type_id' => 3]
     
        ];
        DB::table('owners')->insert($owners);
    }   
}
