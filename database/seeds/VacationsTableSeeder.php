<?php

use App\Vacation;
use Illuminate\Database\Seeder;

class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vacations = [
            [
            'destination' => 'Barcellona',
            'img' => 'https://a.cdn-hotels.com/gdcs/production81/d1983/1441d9b5-d0e6-4230-9923-646d58ba66d8.jpg?impolicy=fcrop&w=800&h=533&q=medium',
            'package_type' => 'tutto incluso',
            'is_available' => 1,
            'start_vacation' => '28-06-2022',
            'end_vacation' => '1-7-2022',
            'transport_type' => 'aereo',
            'transport_company' => 'NoSfracell airlines',
            'price' => 500,
            'hotel' => 'Hotel quattro stagioni più una',
            'rooms' => 2,
            'customers' => 2,
            'vacation_notes' => 'Scopri come viaggiare senza piensieri'
            ],
            [
                'destination' => 'Londra',
                'img' => 'https://static2-viaggi.corriereobjects.it/wp-content/uploads/2021/12/dove-fare-il-tampone-londra-regno-unito-iStock-1265900812-1080x720.jpeg?v=457152',
                'package_type' => 'mezza pensione',
                'is_available' => 1,
                'start_vacation' => '11-07-2022',
                'end_vacation' => '20-07-2022',
                'transport_type' => 'nave',
                'transport_company' => 'Titanic',
                'price' => 970,
                'hotel' => 'Hotel Buckingham Palace',
                'rooms' => 3,
                'customers' => 1,
                'vacation_notes' => 'Il bel tempo sarà la costante del tuo viaggio'
                ],
                [
                    'destination' => 'Napoli',
                    'img' => 'https://www.campania.info/wp-content/uploads/sites/111/napoli-vomero.jpg',
                    'package_type' => 'scoperta partenopea',
                    'is_available' => 1,
                    'start_vacation' => '11-07-2022',
                    'end_vacation' => '20-07-2022',
                    'transport_type' => 'elicottero',
                    'transport_company' => 'Jamme jamme airline',
                    'price' => 450,
                    'hotel' => 'Pulcinella Hotel',
                    'rooms' => 4,
                    'customers' => 3,
                    'vacation_notes' => 'Immergiti nella magia del golfo più bello del mondo'
                    ],
        ];

        foreach ($vacations as $vacation) {
            $new_vacation = new Vacation();
            $new_vacation->destination = $vacation['destination'];
            $new_vacation->img = $vacation['img'];
            $new_vacation->package_type = $vacation['package_type'];
            $new_vacation->is_available = $vacation['is_available'];
            $new_vacation->start_vacation = $vacation['start_vacation'];
            $new_vacation->end_vacation = $vacation['end_vacation'];
            $new_vacation->transport_type = $vacation['transport_type'];
            $new_vacation->transport_company = $vacation['transport_company'];
            $new_vacation->price = $vacation['price'];
            $new_vacation->hotel = $vacation['hotel'];
            $new_vacation->rooms = $vacation['rooms'];
            $new_vacation->customers = $vacation['customers'];
            $new_vacation->vacation_notes = $vacation['vacation_notes'];
            $new_vacation->save();



        }
    }
}
