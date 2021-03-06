<?php

use Illuminate\Database\Seeder;
use App\Models\Shop\Attribute;

class ColorsValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attribute_interior = Attribute::where('slug', str_slug(Attribute::$purposes[Attribute::PURPOSE_TINTING_INTERIOR]))->first();
        $attribute_interior_id = $attribute_interior->id;

        $attribute_facade = Attribute::where('slug', str_slug(Attribute::$purposes[Attribute::PURPOSE_TINTING_FACADE]))->first();
        $attribute_facade_id = $attribute_facade->id;


        \DB::table('values')->insert(array(
            0 =>
                array(
                    'name' => 'GY 4001',
                    'value' => 'f2e8b0',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4001',
                ),
            1 =>
                array(
                    'name' => 'GY 4002',
                    'value' => 'ecce8b',
                    'markup' => '0.59',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4002',
                ),
            2 =>
                array(
                    'name' => 'GY 4003',
                    'value' => 'e3c277',
                    'markup' => '1.13',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4003',
                ),
            3 =>
                array(
                    'name' => 'GY 4004',
                    'value' => 'cdb170',
                    'markup' => '1.48',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4004',
                ),
            4 =>
                array(
                    'name' => 'GY 4005',
                    'value' => 'ccaf72',
                    'markup' => '0.83',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4005',
                ),
            5 =>
                array(
                    'name' => 'GG 4006',
                    'value' => 'b49850',
                    'markup' => '3.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4006',
                ),
            6 =>
                array(
                    'name' => 'GG 4007',
                    'value' => '9f8537',
                    'markup' => '4.53',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4007',
                ),
            7 =>
                array(
                    'name' => 'GG 4008',
                    'value' => '9d8637',
                    'markup' => '5.05',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4008',
                ),
            8 =>
                array(
                    'name' => 'GG 4009',
                    'value' => '8b7b3a',
                    'markup' => '4.67',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4009',
                ),
            9 =>
                array(
                    'name' => 'GG 4010',
                    'value' => '846f3e',
                    'markup' => '3.75',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4010',
                ),
            10 =>
                array(
                    'name' => 'GG 4011',
                    'value' => 'c6ab43',
                    'markup' => '4.53',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4011',
                ),
            11 =>
                array(
                    'name' => 'GG 4012',
                    'value' => 'ba992e',
                    'markup' => '5.11',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4012',
                ),
            12 =>
                array(
                    'name' => 'GG 4013',
                    'value' => 'b8932f',
                    'markup' => '4.76',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4013',
                ),
            13 =>
                array(
                    'name' => 'GG 4014',
                    'value' => 'b08a37',
                    'markup' => '4.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4014',
                ),
            14 =>
                array(
                    'name' => 'GG 4015',
                    'value' => '987c3b',
                    'markup' => '3.9',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4015',
                ),
            15 =>
                array(
                    'name' => 'GY 4016',
                    'value' => 'f3edc7',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4016',
                ),
            16 =>
                array(
                    'name' => 'GY 4017',
                    'value' => 'f3ebb6',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4017',
                ),
            17 =>
                array(
                    'name' => 'GY 4018',
                    'value' => 'ece7a6',
                    'markup' => '0.27',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4018',
                ),
            18 =>
                array(
                    'name' => 'GG 4019',
                    'value' => 'ddd873',
                    'markup' => '1.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4019',
                ),
            19 =>
                array(
                    'name' => 'GG 4020',
                    'value' => 'd5d159',
                    'markup' => '3.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4020',
                ),
            20 =>
                array(
                    'name' => 'GG 4021',
                    'value' => 'd7e8cf',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4021',
                ),
            21 =>
                array(
                    'name' => 'GG 4022',
                    'value' => 'd5e4c2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4022',
                ),
            22 =>
                array(
                    'name' => 'GG 4023',
                    'value' => 'd3e0b2',
                    'markup' => '0.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4023',
                ),
            23 =>
                array(
                    'name' => 'GG 4024',
                    'value' => 'bece87',
                    'markup' => '0.86',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4024',
                ),
            24 =>
                array(
                    'name' => 'GG 4025',
                    'value' => '87a848',
                    'markup' => '4.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4025',
                ),
            25 =>
                array(
                    'name' => 'GG 4026',
                    'value' => 'd6e7cb',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4026',
                ),
            26 =>
                array(
                    'name' => 'GG 4027',
                    'value' => 'd9e4bc',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4027',
                ),
            27 =>
                array(
                    'name' => 'GG 4028',
                    'value' => 'cfddaa',
                    'markup' => '0.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4028',
                ),
            28 =>
                array(
                    'name' => 'GG 4029',
                    'value' => 'b5c87b',
                    'markup' => '1.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4029',
                ),
            29 =>
                array(
                    'name' => 'GG 4030',
                    'value' => 'a2ba65',
                    'markup' => '2.04',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4030',
                ),
            30 =>
                array(
                    'name' => 'GG 4031',
                    'value' => 'a4bbaf',
                    'markup' => '0.33',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4031',
                ),
            31 =>
                array(
                    'name' => 'GG 4032',
                    'value' => 'a7c1b6',
                    'markup' => '0.31',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4032',
                ),
            32 =>
                array(
                    'name' => 'GG 4033',
                    'value' => '99beb5',
                    'markup' => '0.22',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4033',
                ),
            33 =>
                array(
                    'name' => 'GG 4034',
                    'value' => '95b8ae',
                    'markup' => '0.61',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4034',
                ),
            34 =>
                array(
                    'name' => 'GG 4035',
                    'value' => '83a69e',
                    'markup' => '0.48',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4035',
                ),
            35 =>
                array(
                    'name' => 'GG 4036',
                    'value' => '009593',
                    'markup' => '3.27',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4036',
                ),
            36 =>
                array(
                    'name' => 'GG 4037',
                    'value' => '008686',
                    'markup' => '3.76',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4037',
                ),
            37 =>
                array(
                    'name' => 'GG 4038',
                    'value' => '007272',
                    'markup' => '3.81',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4038',
                ),
            38 =>
                array(
                    'name' => 'GG 4039',
                    'value' => '186262',
                    'markup' => '3.35',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4039',
                ),
            39 =>
                array(
                    'name' => 'GG 4040',
                    'value' => '2d5755',
                    'markup' => '2.5',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4040',
                ),
            40 =>
                array(
                    'name' => 'GG 4041',
                    'value' => 'd2e2d5',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4041',
                ),
            41 =>
                array(
                    'name' => 'GG 4042',
                    'value' => '7ecbbc',
                    'markup' => '0.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4042',
                ),
            42 =>
                array(
                    'name' => 'GG 4043',
                    'value' => '86c3b6',
                    'markup' => '0.31',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4043',
                ),
            43 =>
                array(
                    'name' => 'GG 4044',
                    'value' => '8ebcb3',
                    'markup' => '0.3',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4044',
                ),
            44 =>
                array(
                    'name' => 'GG 4045',
                    'value' => 'c3ded2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4045',
                ),
            45 =>
                array(
                    'name' => 'GG 4046',
                    'value' => 'cbeade',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4046',
                ),
            46 =>
                array(
                    'name' => 'GG 4047',
                    'value' => 'c3eadd',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4047',
                ),
            47 =>
                array(
                    'name' => 'GG 4048',
                    'value' => 'bde4da',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4048',
                ),
            48 =>
                array(
                    'name' => 'GG 4049',
                    'value' => 'c2e4db',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4049',
                ),
            49 =>
                array(
                    'name' => 'GG 4050',
                    'value' => '77ceb9',
                    'markup' => '0.4',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4050',
                ),
            50 =>
                array(
                    'name' => 'GG 4051',
                    'value' => '73d2be',
                    'markup' => '0.33',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4051',
                ),
            51 =>
                array(
                    'name' => 'GG 4052',
                    'value' => '87d4c0',
                    'markup' => '0.28',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4052',
                ),
            52 =>
                array(
                    'name' => 'GG 4053',
                    'value' => '7fc6b5',
                    'markup' => '0.36',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4053',
                ),
            53 =>
                array(
                    'name' => 'GG 4054',
                    'value' => '8fc7b6',
                    'markup' => '0.52',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4054',
                ),
            54 =>
                array(
                    'name' => 'GG 4055',
                    'value' => 'cbeadb',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4055',
                ),
            55 =>
                array(
                    'name' => 'GG 4056',
                    'value' => 'bae3d2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4056',
                ),
            56 =>
                array(
                    'name' => 'GG 4057',
                    'value' => 'a9dac6',
                    'markup' => '0.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4057',
                ),
            57 =>
                array(
                    'name' => 'GG 4058',
                    'value' => '7bbfa3',
                    'markup' => '0.9',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4058',
                ),
            58 =>
                array(
                    'name' => 'GG 4059',
                    'value' => '388b6a',
                    'markup' => '3.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4059',
                ),
            59 =>
                array(
                    'name' => 'GG 4060',
                    'value' => 'c5e6d6',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4060',
                ),
            60 =>
                array(
                    'name' => 'GG 4061',
                    'value' => 'b5dcca',
                    'markup' => '0.15',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4061',
                ),
            61 =>
                array(
                    'name' => 'GG 4062',
                    'value' => 'a1d3bd',
                    'markup' => '0.29',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4062',
                ),
            62 =>
                array(
                    'name' => 'GG 4063',
                    'value' => '8ac4ad',
                    'markup' => '0.56',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4063',
                ),
            63 =>
                array(
                    'name' => 'GG 4064',
                    'value' => '5ca284',
                    'markup' => '1.45',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4064',
                ),
            64 =>
                array(
                    'name' => 'GG 4065',
                    'value' => '00866b',
                    'markup' => '4.02',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4065',
                ),
            65 =>
                array(
                    'name' => 'GG 4066',
                    'value' => '009777',
                    'markup' => '3.97',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4066',
                ),
            66 =>
                array(
                    'name' => 'GG 4067',
                    'value' => '008d68',
                    'markup' => '4.05',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4067',
                ),
            67 =>
                array(
                    'name' => 'GG 4068',
                    'value' => '1c7e61',
                    'markup' => '3.15',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4068',
                ),
            68 =>
                array(
                    'name' => 'GG 4069',
                    'value' => '2c715b',
                    'markup' => '3.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4069',
                ),
            69 =>
                array(
                    'name' => 'GG 4070',
                    'value' => '009a82',
                    'markup' => '3.74',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4070',
                ),
            70 =>
                array(
                    'name' => 'GG 4071',
                    'value' => '00a88c',
                    'markup' => '3.28',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4071',
                ),
            71 =>
                array(
                    'name' => 'GG 4072',
                    'value' => '158976',
                    'markup' => '3.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gg-4072',
                ),
            72 =>
                array(
                    'name' => 'GB 4073',
                    'value' => 'bededd',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4073',
                ),
            73 =>
                array(
                    'name' => 'GB 4074',
                    'value' => 'acd5d6',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4074',
                ),
            74 =>
                array(
                    'name' => 'GB 4075',
                    'value' => '96cbcf',
                    'markup' => '0.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4075',
                ),
            75 =>
                array(
                    'name' => 'GB 4076',
                    'value' => '7abcc1',
                    'markup' => '0.23',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4076',
                ),
            76 =>
                array(
                    'name' => 'GB 4077',
                    'value' => '48999d',
                    'markup' => '0.98',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4077',
                ),
            77 =>
                array(
                    'name' => 'GB 4078',
                    'value' => 'a9d6d9',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4078',
                ),
            78 =>
                array(
                    'name' => 'GB 4079',
                    'value' => '91cbcf',
                    'markup' => '0.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4079',
                ),
            79 =>
                array(
                    'name' => 'GB 4080',
                    'value' => '73bcc1',
                    'markup' => '0.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4080',
                ),
            80 =>
                array(
                    'name' => 'GB 4081',
                    'value' => '38999d',
                    'markup' => '1.1',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4081',
                ),
            81 =>
                array(
                    'name' => 'GB 4082',
                    'value' => '1e8589',
                    'markup' => '2.74',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4082',
                ),
            82 =>
                array(
                    'name' => 'GB 4083',
                    'value' => 'd4e4ed',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4083',
                ),
            83 =>
                array(
                    'name' => 'GB 4084',
                    'value' => 'c8e1ed',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4084',
                ),
            84 =>
                array(
                    'name' => 'GB 4085',
                    'value' => 'c5dbe2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4085',
                ),
            85 =>
                array(
                    'name' => 'GB 4086',
                    'value' => 'c4e1ed',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4086',
                ),
            86 =>
                array(
                    'name' => 'GB 4087',
                    'value' => '66c5e0',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4087',
                ),
            87 =>
                array(
                    'name' => 'GB 4088',
                    'value' => '74c1d4',
                    'markup' => '0.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4088',
                ),
            88 =>
                array(
                    'name' => 'GB 4089',
                    'value' => '82bac8',
                    'markup' => '0.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4089',
                ),
            89 =>
                array(
                    'name' => 'GB 4090',
                    'value' => '8fb9c1',
                    'markup' => '0.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4090',
                ),
            90 =>
                array(
                    'name' => 'GB 4091',
                    'value' => '8ac9d8',
                    'markup' => '0.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4091',
                ),
            91 =>
                array(
                    'name' => 'GB 4092',
                    'value' => 'ccecec',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4092',
                ),
            92 =>
                array(
                    'name' => 'GB 4093',
                    'value' => 'c2dfe3',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4093',
                ),
            93 =>
                array(
                    'name' => 'GB 4094',
                    'value' => 'bfe0e5',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4094',
                ),
            94 =>
                array(
                    'name' => 'GB 4095',
                    'value' => 'bee0e2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4095',
                ),
            95 =>
                array(
                    'name' => 'GB 4096',
                    'value' => 'b5e4ef',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4096',
                ),
            96 =>
                array(
                    'name' => 'GB 4097',
                    'value' => 'a5d5da',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4097',
                ),
            97 =>
                array(
                    'name' => 'GB 4098',
                    'value' => '9dd7df',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4098',
                ),
            98 =>
                array(
                    'name' => 'GB 4099',
                    'value' => 'a0d3dc',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4099',
                ),
            99 =>
                array(
                    'name' => 'GB 4100',
                    'value' => '98d7e4',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4100',
                ),
            100 =>
                array(
                    'name' => 'GB 4101',
                    'value' => '47a8d5',
                    'markup' => '0.65',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4101',
                ),
            101 =>
                array(
                    'name' => 'GB 4102',
                    'value' => '5ca5c6',
                    'markup' => '0.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4102',
                ),
            102 =>
                array(
                    'name' => 'GB 4103',
                    'value' => '4c9ec1',
                    'markup' => '0.67',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4103',
                ),
            103 =>
                array(
                    'name' => 'GB 4104',
                    'value' => '2d8ca5',
                    'markup' => '1.33',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4104',
                ),
            104 =>
                array(
                    'name' => 'GB 4105',
                    'value' => '5e9cb4',
                    'markup' => '0.77',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4105',
                ),
            105 =>
                array(
                    'name' => 'GB 4106',
                    'value' => '6ba3bb',
                    'markup' => '0.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4106',
                ),
            106 =>
                array(
                    'name' => 'GB 4107',
                    'value' => '18819c',
                    'markup' => '2.76',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4107',
                ),
            107 =>
                array(
                    'name' => 'GB 4108',
                    'value' => '0093b6',
                    'markup' => '1.29',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4108',
                ),
            108 =>
                array(
                    'name' => 'GB 4109',
                    'value' => '0099c6',
                    'markup' => '2.73',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4109',
                ),
            109 =>
                array(
                    'name' => 'GB 4110',
                    'value' => '008fbe',
                    'markup' => '2.98',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4110',
                ),
            110 =>
                array(
                    'name' => 'GB 4111',
                    'value' => '007fb3',
                    'markup' => '2.89',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4111',
                ),
            111 =>
                array(
                    'name' => 'GB 4112',
                    'value' => 'bdd3e1',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4112',
                ),
            112 =>
                array(
                    'name' => 'GB 4113',
                    'value' => 'a9c4db',
                    'markup' => '0.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4113',
                ),
            113 =>
                array(
                    'name' => 'GB 4114',
                    'value' => '93b2d2',
                    'markup' => '0.33',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4114',
                ),
            114 =>
                array(
                    'name' => 'GB 4115',
                    'value' => '678bb3',
                    'markup' => '1.76',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4115',
                ),
            115 =>
                array(
                    'name' => 'GB 4116',
                    'value' => '344e74',
                    'markup' => '4.57',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4116',
                ),
            116 =>
                array(
                    'name' => 'GB 4117',
                    'value' => 'b8ccdd',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4117',
                ),
            117 =>
                array(
                    'name' => 'GB 4118',
                    'value' => 'a2bbd5',
                    'markup' => '0.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4118',
                ),
            118 =>
                array(
                    'name' => 'GB 4119',
                    'value' => '8daaca',
                    'markup' => '0.59',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4119',
                ),
            119 =>
                array(
                    'name' => 'GB 4120',
                    'value' => '5e80a7',
                    'markup' => '2.01',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4120',
                ),
            120 =>
                array(
                    'name' => 'GB 4121',
                    'value' => '4a6b92',
                    'markup' => '3.49',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gb-4121',
                ),
            121 =>
                array(
                    'name' => 'GM 4122',
                    'value' => 'd3d3df',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4122',
                ),
            122 =>
                array(
                    'name' => 'GM 4123',
                    'value' => 'c8c4d5',
                    'markup' => '0.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4123',
                ),
            123 =>
                array(
                    'name' => 'GM 4124',
                    'value' => 'b4b4cc',
                    'markup' => '0.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4124',
                ),
            124 =>
                array(
                    'name' => 'GM 4125',
                    'value' => '8e8baa',
                    'markup' => '1.96',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4125',
                ),
            125 =>
                array(
                    'name' => 'GM 4126',
                    'value' => '4b475c',
                    'markup' => '5.77',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4126',
                ),
            126 =>
                array(
                    'name' => 'GM 4127',
                    'value' => 'd1cdd8',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4127',
                ),
            127 =>
                array(
                    'name' => 'GM 4128',
                    'value' => 'c2bece',
                    'markup' => '0.13',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4128',
                ),
            128 =>
                array(
                    'name' => 'GM 4129',
                    'value' => 'afaec2',
                    'markup' => '0.38',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4129',
                ),
            129 =>
                array(
                    'name' => 'GM 4130',
                    'value' => '9c9bb4',
                    'markup' => '0.52',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4130',
                ),
            130 =>
                array(
                    'name' => 'GM 4131',
                    'value' => '72708a',
                    'markup' => '2.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4131',
                ),
            131 =>
                array(
                    'name' => 'GM 4132',
                    'value' => '8a5e94',
                    'markup' => '4.87',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4132',
                ),
            132 =>
                array(
                    'name' => 'GM 4133',
                    'value' => '7d5684',
                    'markup' => '5.34',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4133',
                ),
            133 =>
                array(
                    'name' => 'GM 4134',
                    'value' => '735577',
                    'markup' => '4.95',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4134',
                ),
            134 =>
                array(
                    'name' => 'GM 4135',
                    'value' => '68526a',
                    'markup' => '4.84',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4135',
                ),
            135 =>
                array(
                    'name' => 'GM 4136',
                    'value' => '5e4e5f',
                    'markup' => '4.59',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4136',
                ),
            136 =>
                array(
                    'name' => 'GR 4137',
                    'value' => 'd9c4cb',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4137',
                ),
            137 =>
                array(
                    'name' => 'GR 4138',
                    'value' => 'cfb5bd',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4138',
                ),
            138 =>
                array(
                    'name' => 'GR 4139',
                    'value' => 'c1a4b0',
                    'markup' => '0.4',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4139',
                ),
            139 =>
                array(
                    'name' => 'GR 4140',
                    'value' => '997884',
                    'markup' => '1.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4140',
                ),
            140 =>
                array(
                    'name' => 'GR 4141',
                    'value' => '846471',
                    'markup' => '3.54',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4141',
                ),
            141 =>
                array(
                    'name' => 'GR 4142',
                    'value' => 'e7cdde',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4142',
                ),
            142 =>
                array(
                    'name' => 'GR 4143',
                    'value' => 'dab6c4',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4143',
                ),
            143 =>
                array(
                    'name' => 'GR 4144',
                    'value' => 'c7a0ac',
                    'markup' => '0.4',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4144',
                ),
            144 =>
                array(
                    'name' => 'GR 4145',
                    'value' => 'c8a1ac',
                    'markup' => '0.37',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4145',
                ),
            145 =>
                array(
                    'name' => 'GR 4146',
                    'value' => 'ba95a6',
                    'markup' => '0.72',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4146',
                ),
            146 =>
                array(
                    'name' => 'GR 4147',
                    'value' => 'e2cbd1',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4147',
                ),
            147 =>
                array(
                    'name' => 'GR 4148',
                    'value' => 'd8bfc7',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4148',
                ),
            148 =>
                array(
                    'name' => 'GR 4149',
                    'value' => 'ccacb7',
                    'markup' => '0.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4149',
                ),
            149 =>
                array(
                    'name' => 'GR 4150',
                    'value' => 'ad8593',
                    'markup' => '1.07',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4150',
                ),
            150 =>
                array(
                    'name' => 'GR 4151',
                    'value' => '6a4a52',
                    'markup' => '3.71',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4151',
                ),
            151 =>
                array(
                    'name' => 'GM 4152',
                    'value' => 'bdadcb',
                    'markup' => '0.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4152',
                ),
            152 =>
                array(
                    'name' => 'GM 4153',
                    'value' => 'b2a3bd',
                    'markup' => '0.61',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4153',
                ),
            153 =>
                array(
                    'name' => 'GM 4154',
                    'value' => 'b6a1c4',
                    'markup' => '0.69',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4154',
                ),
            154 =>
                array(
                    'name' => 'GM 4155',
                    'value' => 'c2add4',
                    'markup' => '0.47',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4155',
                ),
            155 =>
                array(
                    'name' => 'GM 4156',
                    'value' => 'b7a0cc',
                    'markup' => '0.73',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4156',
                ),
            156 =>
                array(
                    'name' => 'GR 4157',
                    'value' => 'eadddf',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4157',
                ),
            157 =>
                array(
                    'name' => 'GR 4158',
                    'value' => 'ebd7dd',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4158',
                ),
            158 =>
                array(
                    'name' => 'GR 4159',
                    'value' => 'ebd5da',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4159',
                ),
            159 =>
                array(
                    'name' => 'GR 4160',
                    'value' => 'e6d4d8',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4160',
                ),
            160 =>
                array(
                    'name' => 'GR 4161',
                    'value' => 'e9d6dc',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4161',
                ),
            161 =>
                array(
                    'name' => 'GM 4162',
                    'value' => 'a65b93',
                    'markup' => '5',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4162',
                ),
            162 =>
                array(
                    'name' => 'GM 4163',
                    'value' => '965585',
                    'markup' => '6.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4163',
                ),
            163 =>
                array(
                    'name' => 'GM 4164',
                    'value' => '825376',
                    'markup' => '5.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4164',
                ),
            164 =>
                array(
                    'name' => 'GM 4165',
                    'value' => '73506a',
                    'markup' => '5.36',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4165',
                ),
            165 =>
                array(
                    'name' => 'GM 4166',
                    'value' => '654d5e',
                    'markup' => '4.85',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gm-4166',
                ),
            166 =>
                array(
                    'name' => 'GR 4167',
                    'value' => 'e66d7c',
                    'markup' => '1.63',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4167',
                ),
            167 =>
                array(
                    'name' => 'GR 4168',
                    'value' => 'd06d7c',
                    'markup' => '1.85',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4168',
                ),
            168 =>
                array(
                    'name' => 'GR 4169',
                    'value' => 'b96e7c',
                    'markup' => '1.8',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4169',
                ),
            169 =>
                array(
                    'name' => 'GR 4170',
                    'value' => 'a46e7a',
                    'markup' => '1.91',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4170',
                ),
            170 =>
                array(
                    'name' => 'GR 4171',
                    'value' => '936e78',
                    'markup' => '1.71',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4171',
                ),
            171 =>
                array(
                    'name' => 'GR 4172',
                    'value' => 'de4f55',
                    'markup' => '3.27',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4172',
                ),
            172 =>
                array(
                    'name' => 'GR 4173',
                    'value' => 'd84851',
                    'markup' => '3.42',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4173',
                ),
            173 =>
                array(
                    'name' => 'GR 4174',
                    'value' => 'd44959',
                    'markup' => '3.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4174',
                ),
            174 =>
                array(
                    'name' => 'GR 4175',
                    'value' => 'd34a59',
                    'markup' => '3.85',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4175',
                ),
            175 =>
                array(
                    'name' => 'GR 4176',
                    'value' => 'be424d',
                    'markup' => '4.65',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4176',
                ),
            176 =>
                array(
                    'name' => 'GR 4177',
                    'value' => 'e1606c',
                    'markup' => '3.22',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4177',
                ),
            177 =>
                array(
                    'name' => 'GR 4178',
                    'value' => 'd9535a',
                    'markup' => '3.28',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4178',
                ),
            178 =>
                array(
                    'name' => 'GR 4179',
                    'value' => 'd25353',
                    'markup' => '4.06',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4179',
                ),
            179 =>
                array(
                    'name' => 'GR 4180',
                    'value' => 'ca5452',
                    'markup' => '4',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4180',
                ),
            180 =>
                array(
                    'name' => 'GR 4181',
                    'value' => 'c1454a',
                    'markup' => '4.53',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4181',
                ),
            181 =>
                array(
                    'name' => 'GR 4182',
                    'value' => 'fabdbf',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4182',
                ),
            182 =>
                array(
                    'name' => 'GR 4183',
                    'value' => 'f8acaf',
                    'markup' => '0.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4183',
                ),
            183 =>
                array(
                    'name' => 'GR 4184',
                    'value' => 'f4989c',
                    'markup' => '0.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4184',
                ),
            184 =>
                array(
                    'name' => 'GR 4185',
                    'value' => 'e87072',
                    'markup' => '1.53',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4185',
                ),
            185 =>
                array(
                    'name' => 'GR 4186',
                    'value' => 'c2403a',
                    'markup' => '4.66',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4186',
                ),
            186 =>
                array(
                    'name' => 'GR 4187',
                    'value' => 'c44d55',
                    'markup' => '4.42',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4187',
                ),
            187 =>
                array(
                    'name' => 'GR 4188',
                    'value' => 'ba4556',
                    'markup' => '5.47',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4188',
                ),
            188 =>
                array(
                    'name' => 'GR 4189',
                    'value' => 'bd4657',
                    'markup' => '5.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4189',
                ),
            189 =>
                array(
                    'name' => 'GR 4190',
                    'value' => 'a34756',
                    'markup' => '5.63',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4190',
                ),
            190 =>
                array(
                    'name' => 'GR 4191',
                    'value' => '9f4650',
                    'markup' => '5.59',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4191',
                ),
            191 =>
                array(
                    'name' => 'GR 4192',
                    'value' => 'b15f6a',
                    'markup' => '3.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4192',
                ),
            192 =>
                array(
                    'name' => 'GR 4193',
                    'value' => '8c4552',
                    'markup' => '6.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4193',
                ),
            193 =>
                array(
                    'name' => 'GR 4194',
                    'value' => '8c4553',
                    'markup' => '6.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4194',
                ),
            194 =>
                array(
                    'name' => 'GR 4195',
                    'value' => '804a52',
                    'markup' => '4.74',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4195',
                ),
            195 =>
                array(
                    'name' => 'GR 4196',
                    'value' => '754550',
                    'markup' => '4.75',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4196',
                ),
            196 =>
                array(
                    'name' => 'GR 4197',
                    'value' => 'ad4d54',
                    'markup' => '4.55',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4197',
                ),
            197 =>
                array(
                    'name' => 'GR 4198',
                    'value' => '9c534f',
                    'markup' => '3.32',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4198',
                ),
            198 =>
                array(
                    'name' => 'GR 4199',
                    'value' => 'a15454',
                    'markup' => '4.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4199',
                ),
            199 =>
                array(
                    'name' => 'GR 4200',
                    'value' => 'a75457',
                    'markup' => '4',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4200',
                ),
            200 =>
                array(
                    'name' => 'GR 4201',
                    'value' => 'a74756',
                    'markup' => '5.6',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4201',
                ),
            201 =>
                array(
                    'name' => 'GR 4202',
                    'value' => '964a52',
                    'markup' => '4.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4202',
                ),
            202 =>
                array(
                    'name' => 'GR 4203',
                    'value' => '9c535d',
                    'markup' => '3.86',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4203',
                ),
            203 =>
                array(
                    'name' => 'GR 4204',
                    'value' => '98535a',
                    'markup' => '4.22',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4204',
                ),
            204 =>
                array(
                    'name' => 'GR 4205',
                    'value' => '8e5253',
                    'markup' => '3.93',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4205',
                ),
            205 =>
                array(
                    'name' => 'GR 4206',
                    'value' => 'e4c7cf',
                    'markup' => '0.13',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4206',
                ),
            206 =>
                array(
                    'name' => 'GR 4207',
                    'value' => 'ddb8c4',
                    'markup' => '0.32',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4207',
                ),
            207 =>
                array(
                    'name' => 'GR 4208',
                    'value' => 'd3a5b5',
                    'markup' => '0.63',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4208',
                ),
            208 =>
                array(
                    'name' => 'GR 4209',
                    'value' => 'b37a8c',
                    'markup' => '2.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4209',
                ),
            209 =>
                array(
                    'name' => 'GR 4210',
                    'value' => '703e45',
                    'markup' => '8.3',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4210',
                ),
            210 =>
                array(
                    'name' => 'GR 4211',
                    'value' => 'e8c7cf',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4211',
                ),
            211 =>
                array(
                    'name' => 'GR 4212',
                    'value' => 'dfb4c0',
                    'markup' => '0.32',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4212',
                ),
            212 =>
                array(
                    'name' => 'GR 4213',
                    'value' => 'd6a3b2',
                    'markup' => '0.55',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4213',
                ),
            213 =>
                array(
                    'name' => 'GR 4214',
                    'value' => 'd67684',
                    'markup' => '1.62',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4214',
                ),
            214 =>
                array(
                    'name' => 'GR 4215',
                    'value' => '703e45',
                    'markup' => '7.68',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4215',
                ),
            215 =>
                array(
                    'name' => 'GR 4216',
                    'value' => 'f6b7bd',
                    'markup' => '0.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4216',
                ),
            216 =>
                array(
                    'name' => 'GR 4217',
                    'value' => 'da9197',
                    'markup' => '0.68',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4217',
                ),
            217 =>
                array(
                    'name' => 'GR 4218',
                    'value' => 'dd909a',
                    'markup' => '0.51',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4218',
                ),
            218 =>
                array(
                    'name' => 'GR 4219',
                    'value' => 'e38f9c',
                    'markup' => '0.56',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4219',
                ),
            219 =>
                array(
                    'name' => 'GR 4220',
                    'value' => 'f9c9c5',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4220',
                ),
            220 =>
                array(
                    'name' => 'GR 4221',
                    'value' => 'f1bab6',
                    'markup' => '0.15',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4221',
                ),
            221 =>
                array(
                    'name' => 'GR 4222',
                    'value' => 'eba7a3',
                    'markup' => '0.22',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4222',
                ),
            222 =>
                array(
                    'name' => 'GR 4223',
                    'value' => 'd17872',
                    'markup' => '1.27',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4223',
                ),
            223 =>
                array(
                    'name' => 'GR 4224',
                    'value' => 'c06660',
                    'markup' => '3.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4224',
                ),
            224 =>
                array(
                    'name' => 'GR 4225',
                    'value' => 'f0cbc7',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4225',
                ),
            225 =>
                array(
                    'name' => 'GR 4226',
                    'value' => 'f1beba',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4226',
                ),
            226 =>
                array(
                    'name' => 'GR 4227',
                    'value' => 'e3aaa6',
                    'markup' => '0.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4227',
                ),
            227 =>
                array(
                    'name' => 'GR 4228',
                    'value' => 'de9792',
                    'markup' => '0.43',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4228',
                ),
            228 =>
                array(
                    'name' => 'GR 4229',
                    'value' => 'c66e67',
                    'markup' => '1.85',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4229',
                ),
            229 =>
                array(
                    'name' => 'GR 4230',
                    'value' => 'bd544a',
                    'markup' => '3.94',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4230',
                ),
            230 =>
                array(
                    'name' => 'GR 4231',
                    'value' => 'b75547',
                    'markup' => '3.83',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4231',
                ),
            231 =>
                array(
                    'name' => 'GR 4232',
                    'value' => 'a9544b',
                    'markup' => '3.64',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4232',
                ),
            232 =>
                array(
                    'name' => 'GR 4233',
                    'value' => '96544c',
                    'markup' => '2.78',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4233',
                ),
            233 =>
                array(
                    'name' => 'GR 4234',
                    'value' => '8a5351',
                    'markup' => '3.11',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4234',
                ),
            234 =>
                array(
                    'name' => 'GR 4235',
                    'value' => 'f6c5c0',
                    'markup' => '0.13',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4235',
                ),
            235 =>
                array(
                    'name' => 'GR 4236',
                    'value' => 'eca29d',
                    'markup' => '0.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4236',
                ),
            236 =>
                array(
                    'name' => 'GR 4237',
                    'value' => 'd87870',
                    'markup' => '1.35',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4237',
                ),
            237 =>
                array(
                    'name' => 'GR 4238',
                    'value' => 'c2635e',
                    'markup' => '3.09',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4238',
                ),
            238 =>
                array(
                    'name' => 'GR 4239',
                    'value' => 'a84637',
                    'markup' => '3.92',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4239',
                ),
            239 =>
                array(
                    'name' => 'GR 4240',
                    'value' => 'edc9ce',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4240',
                ),
            240 =>
                array(
                    'name' => 'GR 4241',
                    'value' => 'e5b7c0',
                    'markup' => '0.23',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4241',
                ),
            241 =>
                array(
                    'name' => 'GR 4242',
                    'value' => 'dca5af',
                    'markup' => '0.48',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4242',
                ),
            242 =>
                array(
                    'name' => 'GR 4243',
                    'value' => 'c67c87',
                    'markup' => '1.84',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4243',
                ),
            243 =>
                array(
                    'name' => 'GR 4244',
                    'value' => '8e4548',
                    'markup' => '6.91',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4244',
                ),
            244 =>
                array(
                    'name' => 'GR 4245',
                    'value' => 'ebb9bc',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4245',
                ),
            245 =>
                array(
                    'name' => 'GR 4246',
                    'value' => 'eaa7ad',
                    'markup' => '0.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4246',
                ),
            246 =>
                array(
                    'name' => 'GR 4247',
                    'value' => 'd77c82',
                    'markup' => '1.8',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4247',
                ),
            247 =>
                array(
                    'name' => 'GR 4248',
                    'value' => 'ca676d',
                    'markup' => '3.1',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4248',
                ),
            248 =>
                array(
                    'name' => 'GR 4249',
                    'value' => '823634',
                    'markup' => '7.85',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4249',
                ),
            249 =>
                array(
                    'name' => 'GR 4250',
                    'value' => 'c3544d',
                    'markup' => '4.03',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4250',
                ),
            250 =>
                array(
                    'name' => 'GR 4251',
                    'value' => 'b45453',
                    'markup' => '4.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4251',
                ),
            251 =>
                array(
                    'name' => 'GR 4252',
                    'value' => 'ae5550',
                    'markup' => '3.66',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4252',
                ),
            252 =>
                array(
                    'name' => 'GR 4253',
                    'value' => 'b95457',
                    'markup' => '4.03',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4253',
                ),
            253 =>
                array(
                    'name' => 'GR 4254',
                    'value' => 'c2545b',
                    'markup' => '3.88',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4254',
                ),
            254 =>
                array(
                    'name' => 'GR 4255',
                    'value' => 'edbec9',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4255',
                ),
            255 =>
                array(
                    'name' => 'GR 4256',
                    'value' => 'e5acb9',
                    'markup' => '0.43',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4256',
                ),
            256 =>
                array(
                    'name' => 'GR 4257',
                    'value' => 'dc97a7',
                    'markup' => '0.79',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4257',
                ),
            257 =>
                array(
                    'name' => 'GR 4258',
                    'value' => 'c26979',
                    'markup' => '3.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4258',
                ),
            258 =>
                array(
                    'name' => 'GR 4259',
                    'value' => '8d3739',
                    'markup' => '7.94',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4259',
                ),
            259 =>
                array(
                    'name' => 'GR 4260',
                    'value' => 'f6c1cd',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4260',
                ),
            260 =>
                array(
                    'name' => 'GR 4261',
                    'value' => 'f3c2d3',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4261',
                ),
            261 =>
                array(
                    'name' => 'GR 4262',
                    'value' => 'f1b5ca',
                    'markup' => '0.23',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4262',
                ),
            262 =>
                array(
                    'name' => 'GR 4263',
                    'value' => 'eea8bf',
                    'markup' => '0.38',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4263',
                ),
            263 =>
                array(
                    'name' => 'GR 4264',
                    'value' => 'e78daa',
                    'markup' => '0.92',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4264',
                ),
            264 =>
                array(
                    'name' => 'GR 4265',
                    'value' => 'f6a8b7',
                    'markup' => '0.23',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4265',
                ),
            265 =>
                array(
                    'name' => 'GR 4266',
                    'value' => 'e4aaba',
                    'markup' => '0.27',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4266',
                ),
            266 =>
                array(
                    'name' => 'GR 4267',
                    'value' => 'e19daf',
                    'markup' => '0.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4267',
                ),
            267 =>
                array(
                    'name' => 'GR 4268',
                    'value' => 'dc90a3',
                    'markup' => '0.71',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4268',
                ),
            268 =>
                array(
                    'name' => 'GR 4269',
                    'value' => 'dd8ea2',
                    'markup' => '0.75',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4269',
                ),
            269 =>
                array(
                    'name' => 'GR 4270',
                    'value' => 'f3aabb',
                    'markup' => '0.27',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4270',
                ),
            270 =>
                array(
                    'name' => 'GR 4271',
                    'value' => 'ef9bae',
                    'markup' => '0.47',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4271',
                ),
            271 =>
                array(
                    'name' => 'GR 4272',
                    'value' => 'ec8da2',
                    'markup' => '0.75',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4272',
                ),
            272 =>
                array(
                    'name' => 'GR 4273',
                    'value' => 'e78a9f',
                    'markup' => '0.85',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4273',
                ),
            273 =>
                array(
                    'name' => 'GR 4274',
                    'value' => 'dcc3c9',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4274',
                ),
            274 =>
                array(
                    'name' => 'GR 4275',
                    'value' => 'e6ced6',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4275',
                ),
            275 =>
                array(
                    'name' => 'GR 4276',
                    'value' => 'ecced8',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4276',
                ),
            276 =>
                array(
                    'name' => 'GR 4277',
                    'value' => 'f3ccd9',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4277',
                ),
            277 =>
                array(
                    'name' => 'GR 4278',
                    'value' => 'f6b6c6',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4278',
                ),
            278 =>
                array(
                    'name' => 'GR 4279',
                    'value' => 'eeabac',
                    'markup' => '0.35',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4279',
                ),
            279 =>
                array(
                    'name' => 'GR 4280',
                    'value' => 'f1acb0',
                    'markup' => '0.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4280',
                ),
            280 =>
                array(
                    'name' => 'GR 4281',
                    'value' => 'e29b99',
                    'markup' => '0.34',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4281',
                ),
            281 =>
                array(
                    'name' => 'GR 4282',
                    'value' => 'e29ea6',
                    'markup' => '0.4',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4282',
                ),
            282 =>
                array(
                    'name' => 'GR 4283',
                    'value' => 'f29da7',
                    'markup' => '0.32',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4283',
                ),
            283 =>
                array(
                    'name' => 'GR 4284',
                    'value' => 'da9f9e',
                    'markup' => '0.51',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4284',
                ),
            284 =>
                array(
                    'name' => 'GR 4285',
                    'value' => 'dc9e9f',
                    'markup' => '0.55',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4285',
                ),
            285 =>
                array(
                    'name' => 'GR 4286',
                    'value' => 'd8a098',
                    'markup' => '0.42',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4286',
                ),
            286 =>
                array(
                    'name' => 'GR 4287',
                    'value' => 'e8abb9',
                    'markup' => '0.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4287',
                ),
            287 =>
                array(
                    'name' => 'GR 4288',
                    'value' => 'd9acb9',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4288',
                ),
            288 =>
                array(
                    'name' => 'GR 4289',
                    'value' => 'd39fae',
                    'markup' => '0.43',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4289',
                ),
            289 =>
                array(
                    'name' => 'GR 4290',
                    'value' => 'd29ead',
                    'markup' => '0.64',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4290',
                ),
            290 =>
                array(
                    'name' => 'GR 4291',
                    'value' => 'd2919d',
                    'markup' => '0.56',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4291',
                ),
            291 =>
                array(
                    'name' => 'GR 4292',
                    'value' => 'f4a9b1',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4292',
                ),
            292 =>
                array(
                    'name' => 'GR 4293',
                    'value' => 'ee8e99',
                    'markup' => '0.53',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4293',
                ),
            293 =>
                array(
                    'name' => 'GR 4294',
                    'value' => 'f38d9b',
                    'markup' => '0.53',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4294',
                ),
            294 =>
                array(
                    'name' => 'GR 4295',
                    'value' => 'f28995',
                    'markup' => '0.6',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4295',
                ),
            295 =>
                array(
                    'name' => 'GR 4296',
                    'value' => 'e99096',
                    'markup' => '0.5',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4296',
                ),
            296 =>
                array(
                    'name' => 'GR 4297',
                    'value' => 'f1cad0',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4297',
                ),
            297 =>
                array(
                    'name' => 'GR 4298',
                    'value' => 'ecbcc6',
                    'markup' => '0.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4298',
                ),
            298 =>
                array(
                    'name' => 'GR 4299',
                    'value' => 'e5a9b7',
                    'markup' => '0.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4299',
                ),
            299 =>
                array(
                    'name' => 'GR 4300',
                    'value' => 'd28190',
                    'markup' => '1.47',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4300',
                ),
            300 =>
                array(
                    'name' => 'GR 4301',
                    'value' => 'a74751',
                    'markup' => '5.7',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4301',
                ),
            301 =>
                array(
                    'name' => 'GR 4302',
                    'value' => 'f4968a',
                    'markup' => '0.54',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4302',
                ),
            302 =>
                array(
                    'name' => 'GR 4303',
                    'value' => 'f2897c',
                    'markup' => '0.8',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4303',
                ),
            303 =>
                array(
                    'name' => 'GR 4304',
                    'value' => 'ef7f7d',
                    'markup' => '0.94',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4304',
                ),
            304 =>
                array(
                    'name' => 'GR 4305',
                    'value' => 'e1544d',
                    'markup' => '3.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4305',
                ),
            305 =>
                array(
                    'name' => 'GR 4306',
                    'value' => 'e25b56',
                    'markup' => '3.13',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4306',
                ),
            306 =>
                array(
                    'name' => 'GR 4307',
                    'value' => 'ee6643',
                    'markup' => '3.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4307',
                ),
            307 =>
                array(
                    'name' => 'GR 4308',
                    'value' => 'e95f3d',
                    'markup' => '3.32',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4308',
                ),
            308 =>
                array(
                    'name' => 'GR 4309',
                    'value' => 'e75b39',
                    'markup' => '3.37',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4309',
                ),
            309 =>
                array(
                    'name' => 'GR 4310',
                    'value' => 'e35f4d',
                    'markup' => '3.3',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4310',
                ),
            310 =>
                array(
                    'name' => 'GR 4311',
                    'value' => 'ffd1c7',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4311',
                ),
            311 =>
                array(
                    'name' => 'GR 4312',
                    'value' => 'ffc3b7',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4312',
                ),
            312 =>
                array(
                    'name' => 'GR 4313',
                    'value' => 'ffb3a6',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4313',
                ),
            313 =>
                array(
                    'name' => 'GR 4314',
                    'value' => 'f88877',
                    'markup' => '0.83',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4314',
                ),
            314 =>
                array(
                    'name' => 'GR 4315',
                    'value' => 'e2533f',
                    'markup' => '3.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4315',
                ),
            315 =>
                array(
                    'name' => 'GR 4316',
                    'value' => 'fdd8c7',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4316',
                ),
            316 =>
                array(
                    'name' => 'GR 4317',
                    'value' => 'ffcbb8',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4317',
                ),
            317 =>
                array(
                    'name' => 'GR 4318',
                    'value' => 'ffbca5',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4318',
                ),
            318 =>
                array(
                    'name' => 'GR 4319',
                    'value' => 'ec633d',
                    'markup' => '3.37',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4319',
                ),
            319 =>
                array(
                    'name' => 'GR 4320',
                    'value' => 'f16b44',
                    'markup' => '3.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4320',
                ),
            320 =>
                array(
                    'name' => 'GR 4321',
                    'value' => 'fcd4cd',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4321',
                ),
            321 =>
                array(
                    'name' => 'GR 4322',
                    'value' => 'fbc8c1',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4322',
                ),
            322 =>
                array(
                    'name' => 'GR 4323',
                    'value' => 'fbbab3',
                    'markup' => '0.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4323',
                ),
            323 =>
                array(
                    'name' => 'GR 4324',
                    'value' => 'f08e84',
                    'markup' => '0.6',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4324',
                ),
            324 =>
                array(
                    'name' => 'GR 4325',
                    'value' => 'd3584b',
                    'markup' => '3.96',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4325',
                ),
            325 =>
                array(
                    'name' => 'GR 4326',
                    'value' => 'fec8bd',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4326',
                ),
            326 =>
                array(
                    'name' => 'GR 4327',
                    'value' => 'ffb9ac',
                    'markup' => '0.13',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4327',
                ),
            327 =>
                array(
                    'name' => 'GR 4328',
                    'value' => 'ffa799',
                    'markup' => '0.27',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4328',
                ),
            328 =>
                array(
                    'name' => 'GR 4329',
                    'value' => 'f68170',
                    'markup' => '1.06',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4329',
                ),
            329 =>
                array(
                    'name' => 'GR 4330',
                    'value' => 'f37866',
                    'markup' => '1.45',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4330',
                ),
            330 =>
                array(
                    'name' => 'GR 4331',
                    'value' => 'fdc8bd',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4331',
                ),
            331 =>
                array(
                    'name' => 'GR 4332',
                    'value' => 'fab7aa',
                    'markup' => '0.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4332',
                ),
            332 =>
                array(
                    'name' => 'GR 4333',
                    'value' => 'f8a698',
                    'markup' => '0.27',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4333',
                ),
            333 =>
                array(
                    'name' => 'GR 4334',
                    'value' => 'e47766',
                    'markup' => '1.41',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4334',
                ),
            334 =>
                array(
                    'name' => 'GR 4335',
                    'value' => 'b54532',
                    'markup' => '4.27',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4335',
                ),
            335 =>
                array(
                    'name' => 'GR 4336',
                    'value' => 'f7d2ce',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4336',
                ),
            336 =>
                array(
                    'name' => 'GR 4337',
                    'value' => 'f6c6c2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4337',
                ),
            337 =>
                array(
                    'name' => 'GR 4338',
                    'value' => 'f0b5b2',
                    'markup' => '0.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4338',
                ),
            338 =>
                array(
                    'name' => 'GR 4339',
                    'value' => 'eaa2a0',
                    'markup' => '0.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4339',
                ),
            339 =>
                array(
                    'name' => 'GR 4340',
                    'value' => 'a45048',
                    'markup' => '4.38',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4340',
                ),
            340 =>
                array(
                    'name' => 'GO 4341',
                    'value' => 'df7f68',
                    'markup' => '1.1',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4341',
                ),
            341 =>
                array(
                    'name' => 'GO 4342',
                    'value' => 'dc8f7d',
                    'markup' => '0.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4342',
                ),
            342 =>
                array(
                    'name' => 'GO 4343',
                    'value' => 'd2806b',
                    'markup' => '1.06',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4343',
                ),
            343 =>
                array(
                    'name' => 'GO 4344',
                    'value' => 'd47c64',
                    'markup' => '1.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4344',
                ),
            344 =>
                array(
                    'name' => 'GO 4345',
                    'value' => 'c67362',
                    'markup' => '2.64',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4345',
                ),
            345 =>
                array(
                    'name' => 'GR 4346',
                    'value' => 'f8cec5',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4346',
                ),
            346 =>
                array(
                    'name' => 'GR 4347',
                    'value' => 'f4c1b8',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4347',
                ),
            347 =>
                array(
                    'name' => 'GR 4348',
                    'value' => 'f1b2a8',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4348',
                ),
            348 =>
                array(
                    'name' => 'GR 4349',
                    'value' => 'e28c7f',
                    'markup' => '0.69',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4349',
                ),
            349 =>
                array(
                    'name' => 'GR 4350',
                    'value' => 'b35646',
                    'markup' => '4.06',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4350',
                ),
            350 =>
                array(
                    'name' => 'GR 4351',
                    'value' => 'f5c5bc',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4351',
                ),
            351 =>
                array(
                    'name' => 'GR 4352',
                    'value' => 'f3bbb1',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4352',
                ),
            352 =>
                array(
                    'name' => 'GR 4353',
                    'value' => 'eca89d',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4353',
                ),
            353 =>
                array(
                    'name' => 'GR 4354',
                    'value' => 'd47a6d',
                    'markup' => '1.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4354',
                ),
            354 =>
                array(
                    'name' => 'GR 4355',
                    'value' => 'a04635',
                    'markup' => '2.77',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4355',
                ),
            355 =>
                array(
                    'name' => 'GR 4356',
                    'value' => 'efb7b4',
                    'markup' => '0.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4356',
                ),
            356 =>
                array(
                    'name' => 'GR 4357',
                    'value' => 'e9aba5',
                    'markup' => '0.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4357',
                ),
            357 =>
                array(
                    'name' => 'GR 4358',
                    'value' => 'e9aca3',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4358',
                ),
            358 =>
                array(
                    'name' => 'GR 4359',
                    'value' => 'e3a097',
                    'markup' => '0.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4359',
                ),
            359 =>
                array(
                    'name' => 'GR 4360',
                    'value' => 'e1a195',
                    'markup' => '0.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4360',
                ),
            360 =>
                array(
                    'name' => 'GR 4361',
                    'value' => 'fad8cd',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4361',
                ),
            361 =>
                array(
                    'name' => 'GR 4362',
                    'value' => 'f9ccbf',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4362',
                ),
            362 =>
                array(
                    'name' => 'GR 4363',
                    'value' => 'f6beaf',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4363',
                ),
            363 =>
                array(
                    'name' => 'GR 4364',
                    'value' => 'f1ae9d',
                    'markup' => '0.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4364',
                ),
            364 =>
                array(
                    'name' => 'GR 4365',
                    'value' => 'e08670',
                    'markup' => '0.91',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4365',
                ),
            365 =>
                array(
                    'name' => 'GR 4366',
                    'value' => 'fccec5',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4366',
                ),
            366 =>
                array(
                    'name' => 'GR 4367',
                    'value' => 'fbc1b7',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4367',
                ),
            367 =>
                array(
                    'name' => 'GR 4368',
                    'value' => 'f8b1a5',
                    'markup' => '0.23',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4368',
                ),
            368 =>
                array(
                    'name' => 'GR 4369',
                    'value' => 'e69082',
                    'markup' => '0.54',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4369',
                ),
            369 =>
                array(
                    'name' => 'GR 4370',
                    'value' => 'bc503f',
                    'markup' => '3.88',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4370',
                ),
            370 =>
                array(
                    'name' => 'GR 4371',
                    'value' => 'fcd4cb',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4371',
                ),
            371 =>
                array(
                    'name' => 'GR 4372',
                    'value' => 'fdc9bf',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4372',
                ),
            372 =>
                array(
                    'name' => 'GR 4373',
                    'value' => 'fbb9ad',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4373',
                ),
            373 =>
                array(
                    'name' => 'GR 4374',
                    'value' => 'd15e4b',
                    'markup' => '3.74',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4374',
                ),
            374 =>
                array(
                    'name' => 'GR 4375',
                    'value' => 'c85947',
                    'markup' => '4.07',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gr-4375',
                ),
            375 =>
                array(
                    'name' => 'GO 4376',
                    'value' => 'e9765b',
                    'markup' => '2.92',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4376',
                ),
            376 =>
                array(
                    'name' => 'GO 4377',
                    'value' => 'e0725a',
                    'markup' => '3.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4377',
                ),
            377 =>
                array(
                    'name' => 'GO 4378',
                    'value' => 'd16852',
                    'markup' => '3.13',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4378',
                ),
            378 =>
                array(
                    'name' => 'GO 4379',
                    'value' => 'c36046',
                    'markup' => '3.52',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4379',
                ),
            379 =>
                array(
                    'name' => 'GO 4380',
                    'value' => 'be644c',
                    'markup' => '3.61',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4380',
                ),
            380 =>
                array(
                    'name' => 'GO 4381',
                    'value' => 'ffd1bf',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4381',
                ),
            381 =>
                array(
                    'name' => 'GO 4382',
                    'value' => 'ffc2ad',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4382',
                ),
            382 =>
                array(
                    'name' => 'GO 4383',
                    'value' => 'ffb299',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4383',
                ),
            383 =>
                array(
                    'name' => 'GO 4384',
                    'value' => 'fc8a6a',
                    'markup' => '0.99',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4384',
                ),
            384 =>
                array(
                    'name' => 'GO 4385',
                    'value' => 'f57857',
                    'markup' => '3.04',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4385',
                ),
            385 =>
                array(
                    'name' => 'GO 4386',
                    'value' => 'fcdfcd',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4386',
                ),
            386 =>
                array(
                    'name' => 'GO 4387',
                    'value' => 'ffd5be',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4387',
                ),
            387 =>
                array(
                    'name' => 'GO 4388',
                    'value' => 'ffc9ac',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4388',
                ),
            388 =>
                array(
                    'name' => 'GO 4389',
                    'value' => 'ff996d',
                    'markup' => '0.83',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4389',
                ),
            389 =>
                array(
                    'name' => 'GO 4390',
                    'value' => 'f77d49',
                    'markup' => '4.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4390',
                ),
            390 =>
                array(
                    'name' => 'GO 4391',
                    'value' => 'fbe3ca',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4391',
                ),
            391 =>
                array(
                    'name' => 'GO 4392',
                    'value' => 'ffceb3',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4392',
                ),
            392 =>
                array(
                    'name' => 'GO 4393',
                    'value' => 'ffc1a1',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4393',
                ),
            393 =>
                array(
                    'name' => 'GO 4394',
                    'value' => 'fd9a6d',
                    'markup' => '1.23',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4394',
                ),
            394 =>
                array(
                    'name' => 'GO 4395',
                    'value' => 'f68759',
                    'markup' => '1.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4395',
                ),
            395 =>
                array(
                    'name' => 'GO 4396',
                    'value' => 'fecebb',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4396',
                ),
            396 =>
                array(
                    'name' => 'GO 4397',
                    'value' => 'ffc1aa',
                    'markup' => '0.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4397',
                ),
            397 =>
                array(
                    'name' => 'GO 4398',
                    'value' => 'feb195',
                    'markup' => '0.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4398',
                ),
            398 =>
                array(
                    'name' => 'GO 4399',
                    'value' => 'f28b67',
                    'markup' => '1.08',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4399',
                ),
            399 =>
                array(
                    'name' => 'GO 4400',
                    'value' => 'e97b56',
                    'markup' => '2.74',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4400',
                ),
            400 =>
                array(
                    'name' => 'GO 4401',
                    'value' => 'f69479',
                    'markup' => '0.59',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4401',
                ),
            401 =>
                array(
                    'name' => 'GO 4402',
                    'value' => 'fb9578',
                    'markup' => '0.63',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4402',
                ),
            402 =>
                array(
                    'name' => 'GO 4403',
                    'value' => 'fe9174',
                    'markup' => '0.73',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4403',
                ),
            403 =>
                array(
                    'name' => 'GO 4404',
                    'value' => 'ea7d62',
                    'markup' => '1.52',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4404',
                ),
            404 =>
                array(
                    'name' => 'GO 4405',
                    'value' => 'e7826a',
                    'markup' => '1.34',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4405',
                ),
            405 =>
                array(
                    'name' => 'GO 4406',
                    'value' => 'ffd5c3',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4406',
                ),
            406 =>
                array(
                    'name' => 'GO 4407',
                    'value' => 'ffc8b3',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4407',
                ),
            407 =>
                array(
                    'name' => 'GO 4408',
                    'value' => 'ffbba2',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4408',
                ),
            408 =>
                array(
                    'name' => 'GO 4409',
                    'value' => 'e66d43',
                    'markup' => '4',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4409',
                ),
            409 =>
                array(
                    'name' => 'GO 4410',
                    'value' => 'db6640',
                    'markup' => '4.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4410',
                ),
            410 =>
                array(
                    'name' => 'GO 4411',
                    'value' => 'ffc6b4',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4411',
                ),
            411 =>
                array(
                    'name' => 'GO 4412',
                    'value' => 'ffb6a1',
                    'markup' => '0.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4412',
                ),
            412 =>
                array(
                    'name' => 'GO 4413',
                    'value' => 'f1896e',
                    'markup' => '1.01',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4413',
                ),
            413 =>
                array(
                    'name' => 'GO 4414',
                    'value' => 'e4785c',
                    'markup' => '1.69',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4414',
                ),
            414 =>
                array(
                    'name' => 'GO 4415',
                    'value' => 'ce6149',
                    'markup' => '3.69',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4415',
                ),
            415 =>
                array(
                    'name' => 'GO 4416',
                    'value' => 'fddcca',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4416',
                ),
            416 =>
                array(
                    'name' => 'GO 4417',
                    'value' => 'ffd4bf',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4417',
                ),
            417 =>
                array(
                    'name' => 'GO 4418',
                    'value' => 'ffc6ac',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4418',
                ),
            418 =>
                array(
                    'name' => 'GO 4419',
                    'value' => 'f8a27f',
                    'markup' => '0.48',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4419',
                ),
            419 =>
                array(
                    'name' => 'GO 4420',
                    'value' => 'dc7149',
                    'markup' => '2.83',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4420',
                ),
            420 =>
                array(
                    'name' => 'GO 4421',
                    'value' => 'ffd6be',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4421',
                ),
            421 =>
                array(
                    'name' => 'GO 4422',
                    'value' => 'ffc8ac',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4422',
                ),
            422 =>
                array(
                    'name' => 'GO 4423',
                    'value' => 'ffb998',
                    'markup' => '0.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4423',
                ),
            423 =>
                array(
                    'name' => 'GO 4424',
                    'value' => 'f49166',
                    'markup' => '1.05',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4424',
                ),
            424 =>
                array(
                    'name' => 'GO 4425',
                    'value' => 'd16134',
                    'markup' => '3.95',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4425',
                ),
            425 =>
                array(
                    'name' => 'GO 4426',
                    'value' => 'fbe2cd',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4426',
                ),
            426 =>
                array(
                    'name' => 'GO 4427',
                    'value' => 'fedcc0',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4427',
                ),
            427 =>
                array(
                    'name' => 'GO 4428',
                    'value' => 'ffd0b0',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4428',
                ),
            428 =>
                array(
                    'name' => 'GO 4429',
                    'value' => 'e48248',
                    'markup' => '3.56',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4429',
                ),
            429 =>
                array(
                    'name' => 'GO 4430',
                    'value' => 'da7b44',
                    'markup' => '3.48',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4430',
                ),
            430 =>
                array(
                    'name' => 'GO 4431',
                    'value' => 'fedcc0',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4431',
                ),
            431 =>
                array(
                    'name' => 'GO 4432',
                    'value' => 'ffd0ae',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4432',
                ),
            432 =>
                array(
                    'name' => 'GO 4433',
                    'value' => 'e27e41',
                    'markup' => '3.99',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4433',
                ),
            433 =>
                array(
                    'name' => 'GO 4434',
                    'value' => 'd9763c',
                    'markup' => '3.75',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4434',
                ),
            434 =>
                array(
                    'name' => 'GO 4435',
                    'value' => 'cf713a',
                    'markup' => '4.45',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4435',
                ),
            435 =>
                array(
                    'name' => 'GO 4436',
                    'value' => 'fbe3c7',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4436',
                ),
            436 =>
                array(
                    'name' => 'GO 4437',
                    'value' => 'fedbb6',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4437',
                ),
            437 =>
                array(
                    'name' => 'GO 4438',
                    'value' => 'f69848',
                    'markup' => '4.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4438',
                ),
            438 =>
                array(
                    'name' => 'GO 4439',
                    'value' => 'f08d3f',
                    'markup' => '4.62',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4439',
                ),
            439 =>
                array(
                    'name' => 'GO 4440',
                    'value' => 'e8883e',
                    'markup' => '4.56',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4440',
                ),
            440 =>
                array(
                    'name' => 'GO 4441',
                    'value' => 'fcd9b6',
                    'markup' => '0.13',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4441',
                ),
            441 =>
                array(
                    'name' => 'GO 4442',
                    'value' => 'ffcfa2',
                    'markup' => '0.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4442',
                ),
            442 =>
                array(
                    'name' => 'GO 4443',
                    'value' => 'fdb472',
                    'markup' => '1.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4443',
                ),
            443 =>
                array(
                    'name' => 'GO 4444',
                    'value' => 'e87d2d',
                    'markup' => '5.1',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4444',
                ),
            444 =>
                array(
                    'name' => 'GO 4445',
                    'value' => 'df772a',
                    'markup' => '3.46',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4445',
                ),
            445 =>
                array(
                    'name' => 'GO 4446',
                    'value' => 'fce3c9',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4446',
                ),
            446 =>
                array(
                    'name' => 'GO 4447',
                    'value' => 'fedcbe',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4447',
                ),
            447 =>
                array(
                    'name' => 'GO 4448',
                    'value' => 'ffd2ab',
                    'markup' => '0.15',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4448',
                ),
            448 =>
                array(
                    'name' => 'GO 4449',
                    'value' => 'fd9347',
                    'markup' => '4.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4449',
                ),
            449 =>
                array(
                    'name' => 'GO 4450',
                    'value' => 'fa8b44',
                    'markup' => '4.48',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4450',
                ),
            450 =>
                array(
                    'name' => 'GO 4451',
                    'value' => 'fcd9c4',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4451',
                ),
            451 =>
                array(
                    'name' => 'GO 4452',
                    'value' => 'fccfb5',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4452',
                ),
            452 =>
                array(
                    'name' => 'GO 4453',
                    'value' => 'fac2a2',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4453',
                ),
            453 =>
                array(
                    'name' => 'GO 4454',
                    'value' => 'f0a076',
                    'markup' => '0.59',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4454',
                ),
            454 =>
                array(
                    'name' => 'GO 4455',
                    'value' => 'd06c3d',
                    'markup' => '4.03',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4455',
                ),
            455 =>
                array(
                    'name' => 'GO 4456',
                    'value' => 'fde1c4',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4456',
                ),
            456 =>
                array(
                    'name' => 'GO 4457',
                    'value' => 'ffd9b5',
                    'markup' => '0.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4457',
                ),
            457 =>
                array(
                    'name' => 'GO 4458',
                    'value' => 'ffcda2',
                    'markup' => '0.22',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4458',
                ),
            458 =>
                array(
                    'name' => 'GO 4459',
                    'value' => 'fdad70',
                    'markup' => '1.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4459',
                ),
            459 =>
                array(
                    'name' => 'GO 4460',
                    'value' => 'f99d5a',
                    'markup' => '1.53',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4460',
                ),
            460 =>
                array(
                    'name' => 'GO 4461',
                    'value' => 'ffd5a4',
                    'markup' => '0.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4461',
                ),
            461 =>
                array(
                    'name' => 'GO 4462',
                    'value' => 'fbbe76',
                    'markup' => '1.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4462',
                ),
            462 =>
                array(
                    'name' => 'GO 4463',
                    'value' => 'f8a243',
                    'markup' => '4.5',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4463',
                ),
            463 =>
                array(
                    'name' => 'GO 4464',
                    'value' => 'e98a2c',
                    'markup' => '5.08',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4464',
                ),
            464 =>
                array(
                    'name' => 'GO 4465',
                    'value' => 'e48629',
                    'markup' => '5.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4465',
                ),
            465 =>
                array(
                    'name' => 'GO 4466',
                    'value' => 'fde3c0',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4466',
                ),
            466 =>
                array(
                    'name' => 'GO 4467',
                    'value' => 'fddfb7',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4467',
                ),
            467 =>
                array(
                    'name' => 'GO 4468',
                    'value' => 'ffd5a1',
                    'markup' => '0.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4468',
                ),
            468 =>
                array(
                    'name' => 'GO 4469',
                    'value' => 'ea9237',
                    'markup' => '4.81',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4469',
                ),
            469 =>
                array(
                    'name' => 'GO 4470',
                    'value' => 'ee983c',
                    'markup' => '4.68',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4470',
                ),
            470 =>
                array(
                    'name' => 'GO 4471',
                    'value' => 'fae3c4',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4471',
                ),
            471 =>
                array(
                    'name' => 'GO 4472',
                    'value' => 'fddeb9',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4472',
                ),
            472 =>
                array(
                    'name' => 'GO 4473',
                    'value' => 'fed9a7',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4473',
                ),
            473 =>
                array(
                    'name' => 'GO 4474',
                    'value' => 'fdbd72',
                    'markup' => '1.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4474',
                ),
            474 =>
                array(
                    'name' => 'GO 4475',
                    'value' => 'fbb05d',
                    'markup' => '2.06',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'go-4475',
                ),
            475 =>
                array(
                    'name' => 'GY 4476',
                    'value' => 'fbe7b7',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4476',
                ),
            476 =>
                array(
                    'name' => 'GY 4477',
                    'value' => 'ffe1a5',
                    'markup' => '0.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4477',
                ),
            477 =>
                array(
                    'name' => 'GY 4478',
                    'value' => 'fece76',
                    'markup' => '1.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4478',
                ),
            478 =>
                array(
                    'name' => 'GY 4479',
                    'value' => 'f0a323',
                    'markup' => '5.06',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4479',
                ),
            479 =>
                array(
                    'name' => 'GY 4480',
                    'value' => 'eb9f24',
                    'markup' => '5.04',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4480',
                ),
            480 =>
                array(
                    'name' => 'GY 4481',
                    'value' => 'ffdd7b',
                    'markup' => '0.94',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4481',
                ),
            481 =>
                array(
                    'name' => 'GY 4482',
                    'value' => 'ffd65b',
                    'markup' => '2.11',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4482',
                ),
            482 =>
                array(
                    'name' => 'GY 4483',
                    'value' => 'ffc800',
                    'markup' => '5.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4483',
                ),
            483 =>
                array(
                    'name' => 'GY 4484',
                    'value' => 'fdc100',
                    'markup' => '5.05',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4484',
                ),
            484 =>
                array(
                    'name' => 'GY 4485',
                    'value' => 'f5b517',
                    'markup' => '5.05',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4485',
                ),
            485 =>
                array(
                    'name' => 'GY 4486',
                    'value' => 'fce1b2',
                    'markup' => '0.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4486',
                ),
            486 =>
                array(
                    'name' => 'GY 4487',
                    'value' => 'fedba0',
                    'markup' => '0.31',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4487',
                ),
            487 =>
                array(
                    'name' => 'GY 4488',
                    'value' => 'ffc96f',
                    'markup' => '1.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4488',
                ),
            488 =>
                array(
                    'name' => 'GY 4489',
                    'value' => 'ffbe57',
                    'markup' => '1.07',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4489',
                ),
            489 =>
                array(
                    'name' => 'GY 4490',
                    'value' => 'ff9f0e',
                    'markup' => '4.83',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4490',
                ),
            490 =>
                array(
                    'name' => 'GY 4491',
                    'value' => 'fae5cb',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4491',
                ),
            491 =>
                array(
                    'name' => 'GY 4492',
                    'value' => 'fce1be',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4492',
                ),
            492 =>
                array(
                    'name' => 'GY 4493',
                    'value' => 'ffdbae',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4493',
                ),
            493 =>
                array(
                    'name' => 'GY 4494',
                    'value' => 'ffc583',
                    'markup' => '0.69',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4494',
                ),
            494 =>
                array(
                    'name' => 'GY 4495',
                    'value' => 'f8edc9',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4495',
                ),
            495 =>
                array(
                    'name' => 'GY 4496',
                    'value' => 'fae6bb',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4496',
                ),
            496 =>
                array(
                    'name' => 'GY 4497',
                    'value' => 'f9b63c',
                    'markup' => '4.55',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4497',
                ),
            497 =>
                array(
                    'name' => 'GY 4498',
                    'value' => 'f8b547',
                    'markup' => '4.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4498',
                ),
            498 =>
                array(
                    'name' => 'GY 4499',
                    'value' => 'f4ad39',
                    'markup' => '4.64',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4499',
                ),
            499 =>
                array(
                    'name' => 'GY 4500',
                    'value' => 'fbe5c1',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4500',
                ),
        ));
        \DB::table('values')->insert(array(
            0 =>
                array(
                    'name' => 'GY 4501',
                    'value' => 'feddb0',
                    'markup' => '0.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4501',
                ),
            1 =>
                array(
                    'name' => 'GY 4502',
                    'value' => 'ffd79e',
                    'markup' => '0.3',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4502',
                ),
            2 =>
                array(
                    'name' => 'GY 4503',
                    'value' => 'febe66',
                    'markup' => '1.71',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4503',
                ),
            3 =>
                array(
                    'name' => 'GY 4504',
                    'value' => 'fbb153',
                    'markup' => '3.52',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4504',
                ),
            4 =>
                array(
                    'name' => 'GY 4505',
                    'value' => 'f9e8ca',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4505',
                ),
            5 =>
                array(
                    'name' => 'GY 4506',
                    'value' => 'fce4b8',
                    'markup' => '0.13',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4506',
                ),
            6 =>
                array(
                    'name' => 'GY 4507',
                    'value' => 'ffdda9',
                    'markup' => '0.22',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4507',
                ),
            7 =>
                array(
                    'name' => 'GY 4508',
                    'value' => 'fcc473',
                    'markup' => '1.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4508',
                ),
            8 =>
                array(
                    'name' => 'GY 4509',
                    'value' => 'faba5c',
                    'markup' => '2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4509',
                ),
            9 =>
                array(
                    'name' => 'GY 4510',
                    'value' => 'fae5c2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4510',
                ),
            10 =>
                array(
                    'name' => 'GY 4511',
                    'value' => 'fce1b5',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4511',
                ),
            11 =>
                array(
                    'name' => 'GY 4512',
                    'value' => 'fddaa4',
                    'markup' => '0.23',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4512',
                ),
            12 =>
                array(
                    'name' => 'GY 4513',
                    'value' => 'fccf8d',
                    'markup' => '0.47',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4513',
                ),
            13 =>
                array(
                    'name' => 'GY 4514',
                    'value' => 'f4b55e',
                    'markup' => '2.08',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4514',
                ),
            14 =>
                array(
                    'name' => 'GY 4515',
                    'value' => 'fbe6ba',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4515',
                ),
            15 =>
                array(
                    'name' => 'GY 4516',
                    'value' => 'fedfa9',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4516',
                ),
            16 =>
                array(
                    'name' => 'GY 4517',
                    'value' => 'ffd893',
                    'markup' => '0.43',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4517',
                ),
            17 =>
                array(
                    'name' => 'GY 4518',
                    'value' => 'ffc865',
                    'markup' => '1.74',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4518',
                ),
            18 =>
                array(
                    'name' => 'GY 4519',
                    'value' => 'f6ab27',
                    'markup' => '4.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4519',
                ),
            19 =>
                array(
                    'name' => 'GY 4520',
                    'value' => 'f9ecc1',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4520',
                ),
            20 =>
                array(
                    'name' => 'GY 4521',
                    'value' => 'fbe8b1',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4521',
                ),
            21 =>
                array(
                    'name' => 'GY 4522',
                    'value' => 'ffd033',
                    'markup' => '4.51',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4522',
                ),
            22 =>
                array(
                    'name' => 'GY 4523',
                    'value' => 'faca29',
                    'markup' => '4.68',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4523',
                ),
            23 =>
                array(
                    'name' => 'GY 4524',
                    'value' => 'e6b12f',
                    'markup' => '4.81',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4524',
                ),
            24 =>
                array(
                    'name' => 'GY 4525',
                    'value' => 'faeaba',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4525',
                ),
            25 =>
                array(
                    'name' => 'GY 4526',
                    'value' => 'fbe4ac',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4526',
                ),
            26 =>
                array(
                    'name' => 'GY 4527',
                    'value' => 'fedc98',
                    'markup' => '0.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4527',
                ),
            27 =>
                array(
                    'name' => 'GY 4528',
                    'value' => 'fbc84a',
                    'markup' => '3.74',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4528',
                ),
            28 =>
                array(
                    'name' => 'GY 4529',
                    'value' => 'f1cb66',
                    'markup' => '1.8',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4529',
                ),
            29 =>
                array(
                    'name' => 'GY 4530',
                    'value' => 'f8eacd',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4530',
                ),
            30 =>
                array(
                    'name' => 'GY 4531',
                    'value' => 'fae8bf',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4531',
                ),
            31 =>
                array(
                    'name' => 'GY 4532',
                    'value' => 'fce2ae',
                    'markup' => '0.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4532',
                ),
            32 =>
                array(
                    'name' => 'GY 4533',
                    'value' => 'fadda0',
                    'markup' => '0.31',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4533',
                ),
            33 =>
                array(
                    'name' => 'GY 4534',
                    'value' => 'ebc76b',
                    'markup' => '1.64',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4534',
                ),
            34 =>
                array(
                    'name' => 'GY 4535',
                    'value' => 'f7edcc',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4535',
                ),
            35 =>
                array(
                    'name' => 'GY 4536',
                    'value' => 'faebbf',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4536',
                ),
            36 =>
                array(
                    'name' => 'GY 4537',
                    'value' => 'fbe7ae',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4537',
                ),
            37 =>
                array(
                    'name' => 'GY 4538',
                    'value' => 'fde39a',
                    'markup' => '0.33',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4538',
                ),
            38 =>
                array(
                    'name' => 'GY 4539',
                    'value' => 'fed864',
                    'markup' => '1.75',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4539',
                ),
            39 =>
                array(
                    'name' => 'GY 4540',
                    'value' => 'f8edc8',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4540',
                ),
            40 =>
                array(
                    'name' => 'GY 4541',
                    'value' => 'faebb9',
                    'markup' => '0.13',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4541',
                ),
            41 =>
                array(
                    'name' => 'GY 4542',
                    'value' => 'fbe8a5',
                    'markup' => '0.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4542',
                ),
            42 =>
                array(
                    'name' => 'GY 4543',
                    'value' => 'fde491',
                    'markup' => '0.51',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4543',
                ),
            43 =>
                array(
                    'name' => 'GY 4544',
                    'value' => 'f8d65a',
                    'markup' => '2.11',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4544',
                ),
            44 =>
                array(
                    'name' => 'GY 4545',
                    'value' => 'fedfa1',
                    'markup' => '0.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4545',
                ),
            45 =>
                array(
                    'name' => 'GY 4546',
                    'value' => 'ffe1a0',
                    'markup' => '0.29',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4546',
                ),
            46 =>
                array(
                    'name' => 'GY 4547',
                    'value' => 'fcd896',
                    'markup' => '0.37',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4547',
                ),
            47 =>
                array(
                    'name' => 'GY 4548',
                    'value' => 'feda94',
                    'markup' => '0.41',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4548',
                ),
            48 =>
                array(
                    'name' => 'GY 4549',
                    'value' => 'f2c170',
                    'markup' => '1.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4549',
                ),
            49 =>
                array(
                    'name' => 'GY 4550',
                    'value' => 'faecbf',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4550',
                ),
            50 =>
                array(
                    'name' => 'GY 4551',
                    'value' => 'fde8ad',
                    'markup' => '0.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4551',
                ),
            51 =>
                array(
                    'name' => 'GY 4552',
                    'value' => 'fde59c',
                    'markup' => '0.35',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4552',
                ),
            52 =>
                array(
                    'name' => 'GY 4553',
                    'value' => 'f4d368',
                    'markup' => '1.63',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4553',
                ),
            53 =>
                array(
                    'name' => 'GY 4554',
                    'value' => 'f0cb51',
                    'markup' => '3.47',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4554',
                ),
            54 =>
                array(
                    'name' => 'GY 4555',
                    'value' => 'f9d49e',
                    'markup' => '0.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4555',
                ),
            55 =>
                array(
                    'name' => 'GY 4556',
                    'value' => 'fad28e',
                    'markup' => '0.47',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4556',
                ),
            56 =>
                array(
                    'name' => 'GY 4557',
                    'value' => 'fcd896',
                    'markup' => '0.37',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4557',
                ),
            57 =>
                array(
                    'name' => 'GY 4558',
                    'value' => 'ffdc91',
                    'markup' => '0.47',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4558',
                ),
            58 =>
                array(
                    'name' => 'GY 4559',
                    'value' => 'ffd888',
                    'markup' => '0.61',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4559',
                ),
            59 =>
                array(
                    'name' => 'GY 4560',
                    'value' => 'f3e2ae',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4560',
                ),
            60 =>
                array(
                    'name' => 'GY 4561',
                    'value' => 'f1e2af',
                    'markup' => '0.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4561',
                ),
            61 =>
                array(
                    'name' => 'GY 4562',
                    'value' => 'f9e9ad',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4562',
                ),
            62 =>
                array(
                    'name' => 'GY 4563',
                    'value' => 'f1deae',
                    'markup' => '0.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4563',
                ),
            63 =>
                array(
                    'name' => 'GY 4564',
                    'value' => 'efdba1',
                    'markup' => '0.27',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4564',
                ),
            64 =>
                array(
                    'name' => 'GY 4565',
                    'value' => 'f1dba3',
                    'markup' => '0.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4565',
                ),
            65 =>
                array(
                    'name' => 'GY 4566',
                    'value' => 'fee4ae',
                    'markup' => '0.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4566',
                ),
            66 =>
                array(
                    'name' => 'GY 4567',
                    'value' => 'edd4a7',
                    'markup' => '0.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4567',
                ),
            67 =>
                array(
                    'name' => 'GY 4568',
                    'value' => 'ecd6a6',
                    'markup' => '0.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4568',
                ),
            68 =>
                array(
                    'name' => 'GY 4569',
                    'value' => 'f0d9a4',
                    'markup' => '0.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_interior_id,
                    'slug' => 'gy-4569',
                ),
            69 =>
                array(
                    'name' => 'DK 1001',
                    'value' => 'deddd8',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dk-1001',
                ),
            70 =>
                array(
                    'name' => 'DK 1003',
                    'value' => 'c6c6c3',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dk-1003',
                ),
            71 =>
                array(
                    'name' => 'DK 1002',
                    'value' => 'd2d2ce',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dk-1002',
                ),
            72 =>
                array(
                    'name' => 'DK 1004',
                    'value' => 'bbbbb9',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dk-1004',
                ),
            73 =>
                array(
                    'name' => 'DK 1005',
                    'value' => 'b1b1b0',
                    'markup' => '0.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dk-1005',
                ),
            74 =>
                array(
                    'name' => 'DK 1006',
                    'value' => 'a6a7a6',
                    'markup' => '0.28',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dk-1006',
                ),
            75 =>
                array(
                    'name' => 'DK 1007',
                    'value' => '9d9e9e',
                    'markup' => '0.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dk-1007',
                ),
            76 =>
                array(
                    'name' => 'DK 1008',
                    'value' => '8b8d8e',
                    'markup' => '0.76',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dk-1008',
                ),
            77 =>
                array(
                    'name' => 'DK 1009',
                    'value' => '7b7c7b',
                    'markup' => '3.02',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dk-1009',
                ),
            78 =>
                array(
                    'name' => 'DK 1010',
                    'value' => '737474',
                    'markup' => '2.7',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dk-1010',
                ),
            79 =>
                array(
                    'name' => 'DR 1011',
                    'value' => 'bb9173',
                    'markup' => '0.82',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1011',
                ),
            80 =>
                array(
                    'name' => 'DR 1012',
                    'value' => 'c09a7d',
                    'markup' => '0.94',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1012',
                ),
            81 =>
                array(
                    'name' => 'DR 1013',
                    'value' => 'b4967f',
                    'markup' => '0.84',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1013',
                ),
            82 =>
                array(
                    'name' => 'DR 1014',
                    'value' => 'a9927f',
                    'markup' => '0.61',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1014',
                ),
            83 =>
                array(
                    'name' => 'DR 1015',
                    'value' => '9f8875',
                    'markup' => '0.85',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1015',
                ),
            84 =>
                array(
                    'name' => 'DR 1016',
                    'value' => 'b08f7d',
                    'markup' => '0.63',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1016',
                ),
            85 =>
                array(
                    'name' => 'DR 1017',
                    'value' => 'ac8a79',
                    'markup' => '0.73',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1017',
                ),
            86 =>
                array(
                    'name' => 'DR 1018',
                    'value' => 'a68271',
                    'markup' => '0.85',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1018',
                ),
            87 =>
                array(
                    'name' => 'DR 1019',
                    'value' => '9e7a6a',
                    'markup' => '2.57',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1019',
                ),
            88 =>
                array(
                    'name' => 'DR 1020',
                    'value' => '987262',
                    'markup' => '2.54',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1020',
                ),
            89 =>
                array(
                    'name' => 'DR 1021',
                    'value' => 'd2af9e',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1021',
                ),
            90 =>
                array(
                    'name' => 'DR 1022',
                    'value' => 'cda695',
                    'markup' => '0.23',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1022',
                ),
            91 =>
                array(
                    'name' => 'DR 1023',
                    'value' => 'c69e8b',
                    'markup' => '0.32',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1023',
                ),
            92 =>
                array(
                    'name' => 'DR 1024',
                    'value' => 'be9482',
                    'markup' => '0.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1024',
                ),
            93 =>
                array(
                    'name' => 'DR 1025',
                    'value' => 'b88d77',
                    'markup' => '0.74',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1025',
                ),
            94 =>
                array(
                    'name' => 'DR 1026',
                    'value' => 'd8c1b4',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1026',
                ),
            95 =>
                array(
                    'name' => 'DR 1027',
                    'value' => 'd1b7aa',
                    'markup' => '0.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1027',
                ),
            96 =>
                array(
                    'name' => 'DR 1028',
                    'value' => 'caaea0',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1028',
                ),
            97 =>
                array(
                    'name' => 'DR 1029',
                    'value' => 'c3a698',
                    'markup' => '0.23',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1029',
                ),
            98 =>
                array(
                    'name' => 'DR 1030',
                    'value' => 'bb9d8e',
                    'markup' => '0.32',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1030',
                ),
            99 =>
                array(
                    'name' => 'DR 1031',
                    'value' => 'e4cab5',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1031',
                ),
            100 =>
                array(
                    'name' => 'DR 1032',
                    'value' => 'e4cbb7',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1032',
                ),
            101 =>
                array(
                    'name' => 'DR 1033',
                    'value' => 'e2c2b1',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1033',
                ),
            102 =>
                array(
                    'name' => 'DR 1034',
                    'value' => 'dec2b2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1034',
                ),
            103 =>
                array(
                    'name' => 'DR 1035',
                    'value' => 'd9b9a9',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1035',
                ),
            104 =>
                array(
                    'name' => 'DR 1036',
                    'value' => 'c57e6a',
                    'markup' => '0.87',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1036',
                ),
            105 =>
                array(
                    'name' => 'DR 1037',
                    'value' => 'c07b6a',
                    'markup' => '0.92',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1037',
                ),
            106 =>
                array(
                    'name' => 'DR 1038',
                    'value' => 'ba7a6b',
                    'markup' => '0.94',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1038',
                ),
            107 =>
                array(
                    'name' => 'DR 1039',
                    'value' => 'b2705f',
                    'markup' => '2.59',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1039',
                ),
            108 =>
                array(
                    'name' => 'DR 1040',
                    'value' => 'aa6a5d',
                    'markup' => '2.72',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1040',
                ),
            109 =>
                array(
                    'name' => 'DR 1041',
                    'value' => 'd58d71',
                    'markup' => '0.68',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1041',
                ),
            110 =>
                array(
                    'name' => 'DR 1042',
                    'value' => 'd1876b',
                    'markup' => '0.82',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1042',
                ),
            111 =>
                array(
                    'name' => 'DR 1043',
                    'value' => 'cb8065',
                    'markup' => '3.37',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1043',
                ),
            112 =>
                array(
                    'name' => 'DR 1044',
                    'value' => 'c4785d',
                    'markup' => '2.61',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1044',
                ),
            113 =>
                array(
                    'name' => 'DR 1045',
                    'value' => 'b1614c',
                    'markup' => '5.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1045',
                ),
            114 =>
                array(
                    'name' => 'DR 1046',
                    'value' => 'e1baa8',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1046',
                ),
            115 =>
                array(
                    'name' => 'DR 1047',
                    'value' => 'dcb19e',
                    'markup' => '0.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1047',
                ),
            116 =>
                array(
                    'name' => 'DR 1048',
                    'value' => 'd7a995',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1048',
                ),
            117 =>
                array(
                    'name' => 'DR 1049',
                    'value' => 'd3a08b',
                    'markup' => '0.3',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1049',
                ),
            118 =>
                array(
                    'name' => 'DR 1050',
                    'value' => 'cb9783',
                    'markup' => '0.4',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1050',
                ),
            119 =>
                array(
                    'name' => 'DR 1051',
                    'value' => 'eec4a6',
                    'markup' => '0.15',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1051',
                ),
            120 =>
                array(
                    'name' => 'DR 1052',
                    'value' => 'ecbd9b',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1052',
                ),
            121 =>
                array(
                    'name' => 'DR 1053',
                    'value' => 'ebbba0',
                    'markup' => '0.13',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1053',
                ),
            122 =>
                array(
                    'name' => 'DR 1054',
                    'value' => 'eab89c',
                    'markup' => '0.15',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1054',
                ),
            123 =>
                array(
                    'name' => 'DR 1055',
                    'value' => 'e7b599',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1055',
                ),
            124 =>
                array(
                    'name' => 'DR 1056',
                    'value' => 'e5ab94',
                    'markup' => '0.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1056',
                ),
            125 =>
                array(
                    'name' => 'DR 1057',
                    'value' => 'dfa18b',
                    'markup' => '0.28',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1057',
                ),
            126 =>
                array(
                    'name' => 'DR 1058',
                    'value' => 'da9982',
                    'markup' => '0.38',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1058',
                ),
            127 =>
                array(
                    'name' => 'DR 1059',
                    'value' => 'c88e75',
                    'markup' => '0.62',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1059',
                ),
            128 =>
                array(
                    'name' => 'DR 1060',
                    'value' => 'c2866d',
                    'markup' => '0.82',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1060',
                ),
            129 =>
                array(
                    'name' => 'DR 1061',
                    'value' => 'f5ddce',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1061',
                ),
            130 =>
                array(
                    'name' => 'DR 1062',
                    'value' => 'f2ccb9',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1062',
                ),
            131 =>
                array(
                    'name' => 'DR 1063',
                    'value' => 'ecbba7',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1063',
                ),
            132 =>
                array(
                    'name' => 'DR 1064',
                    'value' => 'ebb89f',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1064',
                ),
            133 =>
                array(
                    'name' => 'DR 1065',
                    'value' => 'e8b39e',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1065',
                ),
            134 =>
                array(
                    'name' => 'DR 1066',
                    'value' => 'daaca0',
                    'markup' => '0.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1066',
                ),
            135 =>
                array(
                    'name' => 'DR 1067',
                    'value' => 'c9978c',
                    'markup' => '0.33',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1067',
                ),
            136 =>
                array(
                    'name' => 'DR 1068',
                    'value' => 'c18d81',
                    'markup' => '0.46',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1068',
                ),
            137 =>
                array(
                    'name' => 'DR 1069',
                    'value' => 'cb8c7f',
                    'markup' => '0.73',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1069',
                ),
            138 =>
                array(
                    'name' => 'DR 1070',
                    'value' => 'b57b6d',
                    'markup' => '0.93',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1070',
                ),
            139 =>
                array(
                    'name' => 'DR 1071',
                    'value' => 'e2c2b8',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1071',
                ),
            140 =>
                array(
                    'name' => 'DR 1072',
                    'value' => 'e0c3ba',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1072',
                ),
            141 =>
                array(
                    'name' => 'DR 1073',
                    'value' => 'd8bcb2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1073',
                ),
            142 =>
                array(
                    'name' => 'DR 1074',
                    'value' => 'c19a90',
                    'markup' => '0.31',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1074',
                ),
            143 =>
                array(
                    'name' => 'DR 1075',
                    'value' => 'a17e77',
                    'markup' => '1.11',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1075',
                ),
            144 =>
                array(
                    'name' => 'DR 1076',
                    'value' => 'e2baaf',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1076',
                ),
            145 =>
                array(
                    'name' => 'DR 1077',
                    'value' => 'ebbdb2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1077',
                ),
            146 =>
                array(
                    'name' => 'DR 1078',
                    'value' => 'edc3b8',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1078',
                ),
            147 =>
                array(
                    'name' => 'DR 1079',
                    'value' => 'efccc1',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1079',
                ),
            148 =>
                array(
                    'name' => 'DR 1080',
                    'value' => 'f3dbd1',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dr-1080',
                ),
            149 =>
                array(
                    'name' => 'DO 1081',
                    'value' => 'b98e73',
                    'markup' => '0.75',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'do-1081',
                ),
            150 =>
                array(
                    'name' => 'DO 1082',
                    'value' => 'ca9673',
                    'markup' => '0.81',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'do-1082',
                ),
            151 =>
                array(
                    'name' => 'DO 1083',
                    'value' => 'cb9971',
                    'markup' => '0.95',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'do-1083',
                ),
            152 =>
                array(
                    'name' => 'DO 1084',
                    'value' => 'cd9e7b',
                    'markup' => '0.63',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'do-1084',
                ),
            153 =>
                array(
                    'name' => 'DO 1085',
                    'value' => 'd2a37d',
                    'markup' => '0.83',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'do-1085',
                ),
            154 =>
                array(
                    'name' => 'DY 1086',
                    'value' => 'f7e8cd',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1086',
                ),
            155 =>
                array(
                    'name' => 'DO 1087',
                    'value' => 'f7e1c9',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'do-1087',
                ),
            156 =>
                array(
                    'name' => 'DO 1088',
                    'value' => 'f6ddc2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'do-1088',
                ),
            157 =>
                array(
                    'name' => 'DO 1089',
                    'value' => 'f6dcbc',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'do-1089',
                ),
            158 =>
                array(
                    'name' => 'DO 1090',
                    'value' => 'f5d5b2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'do-1090',
                ),
            159 =>
                array(
                    'name' => 'DY 1091',
                    'value' => 'f4d0a0',
                    'markup' => '0.23',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1091',
                ),
            160 =>
                array(
                    'name' => 'DY 1092',
                    'value' => 'f4cc99',
                    'markup' => '0.3',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1092',
                ),
            161 =>
                array(
                    'name' => 'DY 1093',
                    'value' => 'f2c995',
                    'markup' => '0.34',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1093',
                ),
            162 =>
                array(
                    'name' => 'DY 1094',
                    'value' => 'ecbc80',
                    'markup' => '0.67',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1094',
                ),
            163 =>
                array(
                    'name' => 'DY 1095',
                    'value' => 'e7b16b',
                    'markup' => '2.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1095',
                ),
            164 =>
                array(
                    'name' => 'DY 1096',
                    'value' => 'eab982',
                    'markup' => '0.63',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1096',
                ),
            165 =>
                array(
                    'name' => 'DY 1097',
                    'value' => 'e4ab74',
                    'markup' => '0.96',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1097',
                ),
            166 =>
                array(
                    'name' => 'DO 1098',
                    'value' => 'e6ad7c',
                    'markup' => '0.69',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'do-1098',
                ),
            167 =>
                array(
                    'name' => 'DO 1099',
                    'value' => 'de9f72',
                    'markup' => '0.87',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'do-1099',
                ),
            168 =>
                array(
                    'name' => 'DO 1100',
                    'value' => 'd7936e',
                    'markup' => '0.88',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'do-1100',
                ),
            169 =>
                array(
                    'name' => 'DY 1101',
                    'value' => 'e0c197',
                    'markup' => '0.42',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1101',
                ),
            170 =>
                array(
                    'name' => 'DY 1102',
                    'value' => 'e0c294',
                    'markup' => '0.47',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1102',
                ),
            171 =>
                array(
                    'name' => 'DY 1103',
                    'value' => 'dfc091',
                    'markup' => '0.51',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1103',
                ),
            172 =>
                array(
                    'name' => 'DY 1104',
                    'value' => 'd0b279',
                    'markup' => '1.13',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1104',
                ),
            173 =>
                array(
                    'name' => 'DY 1105',
                    'value' => 'bea36e',
                    'markup' => '2.74',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1105',
                ),
            174 =>
                array(
                    'name' => 'DY 1106',
                    'value' => 'd1a972',
                    'markup' => '2.6',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1106',
                ),
            175 =>
                array(
                    'name' => 'DY 1107',
                    'value' => 'cba068',
                    'markup' => '2.74',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1107',
                ),
            176 =>
                array(
                    'name' => 'DY 1108',
                    'value' => 'c6a06c',
                    'markup' => '2.64',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1108',
                ),
            177 =>
                array(
                    'name' => 'DY 1109',
                    'value' => 'be9e71',
                    'markup' => '3.09',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1109',
                ),
            178 =>
                array(
                    'name' => 'DY 1110',
                    'value' => 'b79769',
                    'markup' => '2.74',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1110',
                ),
            179 =>
                array(
                    'name' => 'DY 1111',
                    'value' => 'dcbb8e',
                    'markup' => '0.56',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1111',
                ),
            180 =>
                array(
                    'name' => 'DY 1112',
                    'value' => 'cdb48e',
                    'markup' => '0.75',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1112',
                ),
            181 =>
                array(
                    'name' => 'DY 1113',
                    'value' => 'bfac8e',
                    'markup' => '0.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1113',
                ),
            182 =>
                array(
                    'name' => 'DY 1114',
                    'value' => 'a68e6b',
                    'markup' => '2.64',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1114',
                ),
            183 =>
                array(
                    'name' => 'DY 1115',
                    'value' => '97856b',
                    'markup' => '2.69',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1115',
                ),
            184 =>
                array(
                    'name' => 'DY 1116',
                    'value' => 'efe7d1',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1116',
                ),
            185 =>
                array(
                    'name' => 'DY 1117',
                    'value' => 'ede1c5',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1117',
                ),
            186 =>
                array(
                    'name' => 'DY 1118',
                    'value' => 'e9e2c8',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dy-1118',
                ),
            187 =>
                array(
                    'name' => 'DG 1119',
                    'value' => 'dbd5bc',
                    'markup' => '0.22',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1119',
                ),
            188 =>
                array(
                    'name' => 'DG 1120',
                    'value' => 'd7d1b8',
                    'markup' => '0.27',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1120',
                ),
            189 =>
                array(
                    'name' => 'DG 1121',
                    'value' => '9ca695',
                    'markup' => '1.49',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1121',
                ),
            190 =>
                array(
                    'name' => 'DG 1122',
                    'value' => '909b89',
                    'markup' => '2.99',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1122',
                ),
            191 =>
                array(
                    'name' => 'DG 1123',
                    'value' => '9ca198',
                    'markup' => '0.81',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1123',
                ),
            192 =>
                array(
                    'name' => 'DG 1124',
                    'value' => '989e95',
                    'markup' => '0.97',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1124',
                ),
            193 =>
                array(
                    'name' => 'DG 1125',
                    'value' => '8a8f86',
                    'markup' => '2.93',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1125',
                ),
            194 =>
                array(
                    'name' => 'DG 1126',
                    'value' => 'cdc9a7',
                    'markup' => '0.52',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1126',
                ),
            195 =>
                array(
                    'name' => 'DG 1127',
                    'value' => 'c9c5a0',
                    'markup' => '0.65',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1127',
                ),
            196 =>
                array(
                    'name' => 'DG 1128',
                    'value' => 'b2a982',
                    'markup' => '1.36',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1128',
                ),
            197 =>
                array(
                    'name' => 'DG 1129',
                    'value' => 'a79d72',
                    'markup' => '3.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1129',
                ),
            198 =>
                array(
                    'name' => 'DG 1130',
                    'value' => '9f9463',
                    'markup' => '3.35',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1130',
                ),
            199 =>
                array(
                    'name' => 'DG 1131',
                    'value' => 'c6d3bf',
                    'markup' => '0.38',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1131',
                ),
            200 =>
                array(
                    'name' => 'DG 1132',
                    'value' => 'bdcbb6',
                    'markup' => '0.54',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1132',
                ),
            201 =>
                array(
                    'name' => 'DG 1133',
                    'value' => 'b0c0a9',
                    'markup' => '0.9',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1133',
                ),
            202 =>
                array(
                    'name' => 'DG 1134',
                    'value' => 'abbba2',
                    'markup' => '1.23',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1134',
                ),
            203 =>
                array(
                    'name' => 'DG 1135',
                    'value' => '9bae92',
                    'markup' => '3.02',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1135',
                ),
            204 =>
                array(
                    'name' => 'DG 1136',
                    'value' => 'c1cbbb',
                    'markup' => '0.37',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1136',
                ),
            205 =>
                array(
                    'name' => 'DG 1137',
                    'value' => 'b2bdac',
                    'markup' => '0.86',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1137',
                ),
            206 =>
                array(
                    'name' => 'DG 1138',
                    'value' => 'abb8a6',
                    'markup' => '1.08',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1138',
                ),
            207 =>
                array(
                    'name' => 'DG 1139',
                    'value' => 'a2b099',
                    'markup' => '1.52',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1139',
                ),
            208 =>
                array(
                    'name' => 'DG 1140',
                    'value' => '9ca992',
                    'markup' => '1.73',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'dg-1140',
                ),
            209 =>
                array(
                    'name' => 'MG 2001',
                    'value' => '7e8f49',
                    'markup' => '8.3',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2001',
                ),
            210 =>
                array(
                    'name' => 'MG 2002',
                    'value' => '7c8d45',
                    'markup' => '8.48',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2002',
                ),
            211 =>
                array(
                    'name' => 'MG 2003',
                    'value' => '748147',
                    'markup' => '8.45',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2003',
                ),
            212 =>
                array(
                    'name' => 'MG 2004',
                    'value' => '777f55',
                    'markup' => '3.4',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2004',
                ),
            213 =>
                array(
                    'name' => 'MG 2005',
                    'value' => '6d7548',
                    'markup' => '8.34',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2005',
                ),
            214 =>
                array(
                    'name' => 'MG 2006',
                    'value' => 'e8e37e',
                    'markup' => '4.37',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2006',
                ),
            215 =>
                array(
                    'name' => 'MG 2007',
                    'value' => 'd6da7a',
                    'markup' => '4.74',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2007',
                ),
            216 =>
                array(
                    'name' => 'MG 2008',
                    'value' => 'd8db80',
                    'markup' => '4.36',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2008',
                ),
            217 =>
                array(
                    'name' => 'MG 2009',
                    'value' => 'cfd258',
                    'markup' => '6.34',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2009',
                ),
            218 =>
                array(
                    'name' => 'MG 2010',
                    'value' => 'c9cc48',
                    'markup' => '7.03',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2010',
                ),
            219 =>
                array(
                    'name' => 'MG 2011',
                    'value' => 'b6c250',
                    'markup' => '6.97',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2011',
                ),
            220 =>
                array(
                    'name' => 'MG 2012',
                    'value' => 'b5c14c',
                    'markup' => '7.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2012',
                ),
            221 =>
                array(
                    'name' => 'MG 2013',
                    'value' => 'bcc55b',
                    'markup' => '6.34',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2013',
                ),
            222 =>
                array(
                    'name' => 'MG 2014',
                    'value' => 'acbb5f',
                    'markup' => '8',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2014',
                ),
            223 =>
                array(
                    'name' => 'MG 2015',
                    'value' => '9fb264',
                    'markup' => '7.38',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2015',
                ),
            224 =>
                array(
                    'name' => 'MG 2016',
                    'value' => 'b4b25f',
                    'markup' => '7.6',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2016',
                ),
            225 =>
                array(
                    'name' => 'MG 2017',
                    'value' => 'abaf6f',
                    'markup' => '6.41',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2017',
                ),
            226 =>
                array(
                    'name' => 'MG 2018',
                    'value' => '9da260',
                    'markup' => '7.35',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2018',
                ),
            227 =>
                array(
                    'name' => 'MG 2019',
                    'value' => '9d9e6d',
                    'markup' => '6.48',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2019',
                ),
            228 =>
                array(
                    'name' => 'MG 2020',
                    'value' => '868951',
                    'markup' => '8.38',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2020',
                ),
            229 =>
                array(
                    'name' => 'MG 2021',
                    'value' => 'aab692',
                    'markup' => '2.23',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2021',
                ),
            230 =>
                array(
                    'name' => 'MG 2022',
                    'value' => 'a4b28d',
                    'markup' => '1.7',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2022',
                ),
            231 =>
                array(
                    'name' => 'MG 2023',
                    'value' => '9dab85',
                    'markup' => '3.76',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2023',
                ),
            232 =>
                array(
                    'name' => 'MG 2024',
                    'value' => '96a576',
                    'markup' => '5.33',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2024',
                ),
            233 =>
                array(
                    'name' => 'MG 2025',
                    'value' => '839067',
                    'markup' => '5.96',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2025',
                ),
            234 =>
                array(
                    'name' => 'MG 2026',
                    'value' => 'adc0af',
                    'markup' => '0.54',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2026',
                ),
            235 =>
                array(
                    'name' => 'MG 2027',
                    'value' => 'a9bdac',
                    'markup' => '0.75',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2027',
                ),
            236 =>
                array(
                    'name' => 'MG 2028',
                    'value' => 'a5baa7',
                    'markup' => '0.73',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2028',
                ),
            237 =>
                array(
                    'name' => 'MG 2029',
                    'value' => '9fb4a1',
                    'markup' => '0.91',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2029',
                ),
            238 =>
                array(
                    'name' => 'MG 2030',
                    'value' => '7b9880',
                    'markup' => '1.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2030',
                ),
            239 =>
                array(
                    'name' => 'MY 2031',
                    'value' => 'cc9f3d',
                    'markup' => '9.36',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2031',
                ),
            240 =>
                array(
                    'name' => 'MY 2032',
                    'value' => 'ce9f39',
                    'markup' => '8.8',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2032',
                ),
            241 =>
                array(
                    'name' => 'MY 2033',
                    'value' => 'c5983e',
                    'markup' => '7.83',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2033',
                ),
            242 =>
                array(
                    'name' => 'MY 2034',
                    'value' => 'b08f42',
                    'markup' => '9.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2034',
                ),
            243 =>
                array(
                    'name' => 'MY 2035',
                    'value' => '988247',
                    'markup' => '3.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2035',
                ),
            244 =>
                array(
                    'name' => 'MY 2036',
                    'value' => 'bb9d5c',
                    'markup' => '5.99',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2036',
                ),
            245 =>
                array(
                    'name' => 'MY 2037',
                    'value' => 'bb9b59',
                    'markup' => '6.28',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2037',
                ),
            246 =>
                array(
                    'name' => 'MY 2038',
                    'value' => 'bb9d58',
                    'markup' => '6.98',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2038',
                ),
            247 =>
                array(
                    'name' => 'MY 2039',
                    'value' => 'ba9c57',
                    'markup' => '6.91',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2039',
                ),
            248 =>
                array(
                    'name' => 'MY 2040',
                    'value' => 'bc9c55',
                    'markup' => '6.96',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2040',
                ),
            249 =>
                array(
                    'name' => 'MY 2041',
                    'value' => 'd5ad55',
                    'markup' => '6.65',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2041',
                ),
            250 =>
                array(
                    'name' => 'MY 2042',
                    'value' => 'd6ad52',
                    'markup' => '6.92',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2042',
                ),
            251 =>
                array(
                    'name' => 'MY 2043',
                    'value' => 'd0a754',
                    'markup' => '6.09',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2043',
                ),
            252 =>
                array(
                    'name' => 'MY 2044',
                    'value' => 'cca358',
                    'markup' => '4.97',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2044',
                ),
            253 =>
                array(
                    'name' => 'MY 2045',
                    'value' => 'c19444',
                    'markup' => '6.3',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2045',
                ),
            254 =>
                array(
                    'name' => 'MY 2046',
                    'value' => 'e0bd86',
                    'markup' => '0.59',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2046',
                ),
            255 =>
                array(
                    'name' => 'MY 2047',
                    'value' => 'dab67e',
                    'markup' => '0.76',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2047',
                ),
            256 =>
                array(
                    'name' => 'MY 2048',
                    'value' => 'd4af74',
                    'markup' => '1.01',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2048',
                ),
            257 =>
                array(
                    'name' => 'MY 2049',
                    'value' => 'cea96e',
                    'markup' => '2.63',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2049',
                ),
            258 =>
                array(
                    'name' => 'MY 2050',
                    'value' => 'd1aa6e',
                    'markup' => '2.61',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2050',
                ),
            259 =>
                array(
                    'name' => 'MY 2051',
                    'value' => 'eebf7c',
                    'markup' => '0.76',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2051',
                ),
            260 =>
                array(
                    'name' => 'MY 2052',
                    'value' => 'eab972',
                    'markup' => '1.01',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2052',
                ),
            261 =>
                array(
                    'name' => 'MY 2053',
                    'value' => 'e3aa54',
                    'markup' => '5.73',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2053',
                ),
            262 =>
                array(
                    'name' => 'MY 2054',
                    'value' => 'da9c4c',
                    'markup' => '4.5',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2054',
                ),
            263 =>
                array(
                    'name' => 'MY 2055',
                    'value' => 'd79c4e',
                    'markup' => '4.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2055',
                ),
            264 =>
                array(
                    'name' => 'MY 2056',
                    'value' => 'efbb4f',
                    'markup' => '7.86',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2056',
                ),
            265 =>
                array(
                    'name' => 'MY 2057',
                    'value' => 'f0ba4b',
                    'markup' => '8.72',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2057',
                ),
            266 =>
                array(
                    'name' => 'MY 2058',
                    'value' => 'e9b350',
                    'markup' => '7.4',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2058',
                ),
            267 =>
                array(
                    'name' => 'MY 2059',
                    'value' => 'e7b24f',
                    'markup' => '7.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2059',
                ),
            268 =>
                array(
                    'name' => 'MY 2060',
                    'value' => 'e6b14e',
                    'markup' => '7.48',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2060',
                ),
            269 =>
                array(
                    'name' => 'MY 2061',
                    'value' => 'ead485',
                    'markup' => '3.86',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2061',
                ),
            270 =>
                array(
                    'name' => 'MY 2062',
                    'value' => 'e4c257',
                    'markup' => '8.11',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2062',
                ),
            271 =>
                array(
                    'name' => 'MY 2063',
                    'value' => 'e2c14b',
                    'markup' => '8.79',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2063',
                ),
            272 =>
                array(
                    'name' => 'MY 2064',
                    'value' => 'dec350',
                    'markup' => '8.48',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2064',
                ),
            273 =>
                array(
                    'name' => 'MY 2065',
                    'value' => 'd9b938',
                    'markup' => '9.96',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2065',
                ),
            274 =>
                array(
                    'name' => 'MY 2066',
                    'value' => 'f9ec84',
                    'markup' => '4.28',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2066',
                ),
            275 =>
                array(
                    'name' => 'MY 2067',
                    'value' => 'fae973',
                    'markup' => '4.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2067',
                ),
            276 =>
                array(
                    'name' => 'MY 2068',
                    'value' => 'f8e974',
                    'markup' => '4.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2068',
                ),
            277 =>
                array(
                    'name' => 'MY 2069',
                    'value' => 'f9e23d',
                    'markup' => '6.98',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2069',
                ),
            278 =>
                array(
                    'name' => 'MY 2070',
                    'value' => 'fad438',
                    'markup' => '7.33',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'my-2070',
                ),
            279 =>
                array(
                    'name' => 'MG 2071',
                    'value' => 'd8dbac',
                    'markup' => '1.08',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2071',
                ),
            280 =>
                array(
                    'name' => 'MG 2072',
                    'value' => 'e0e0aa',
                    'markup' => '1.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2072',
                ),
            281 =>
                array(
                    'name' => 'MG 2073',
                    'value' => 'dfdfaa',
                    'markup' => '1.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2073',
                ),
            282 =>
                array(
                    'name' => 'MG 2074',
                    'value' => 'e3e3b5',
                    'markup' => '0.79',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2074',
                ),
            283 =>
                array(
                    'name' => 'MG 2075',
                    'value' => 'e6e7bd',
                    'markup' => '0.62',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2075',
                ),
            284 =>
                array(
                    'name' => 'MB 2076',
                    'value' => 'c7d1d6',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2076',
                ),
            285 =>
                array(
                    'name' => 'MB 2077',
                    'value' => 'c3c7ca',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2077',
                ),
            286 =>
                array(
                    'name' => 'MB 2078',
                    'value' => 'b5bdc3',
                    'markup' => '0.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2078',
                ),
            287 =>
                array(
                    'name' => 'MB 2079',
                    'value' => 'b1cad8',
                    'markup' => '0.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2079',
                ),
            288 =>
                array(
                    'name' => 'MB 2080',
                    'value' => 'acc4d0',
                    'markup' => '0.36',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2080',
                ),
            289 =>
                array(
                    'name' => 'MB 2081',
                    'value' => 'bccdcf',
                    'markup' => '0.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2081',
                ),
            290 =>
                array(
                    'name' => 'MB 2082',
                    'value' => 'b4c7cb',
                    'markup' => '0.27',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2082',
                ),
            291 =>
                array(
                    'name' => 'MB 2083',
                    'value' => 'adc2c7',
                    'markup' => '0.15',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2083',
                ),
            292 =>
                array(
                    'name' => 'MB 2084',
                    'value' => 'a5bdc7',
                    'markup' => '0.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2084',
                ),
            293 =>
                array(
                    'name' => 'MB 2085',
                    'value' => '9ab0bb',
                    'markup' => '0.35',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2085',
                ),
            294 =>
                array(
                    'name' => 'MG 2086',
                    'value' => 'a9bcb8',
                    'markup' => '0.52',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2086',
                ),
            295 =>
                array(
                    'name' => 'MG 2087',
                    'value' => 'a5b8b5',
                    'markup' => '0.59',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2087',
                ),
            296 =>
                array(
                    'name' => 'MG 2088',
                    'value' => '9eb3b0',
                    'markup' => '0.71',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2088',
                ),
            297 =>
                array(
                    'name' => 'MG 2089',
                    'value' => '8ea5a3',
                    'markup' => '0.79',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2089',
                ),
            298 =>
                array(
                    'name' => 'MG 2090',
                    'value' => '5e726f',
                    'markup' => '3.04',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mg-2090',
                ),
            299 =>
                array(
                    'name' => 'MB 2091',
                    'value' => '9cb6c1',
                    'markup' => '0.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2091',
                ),
            300 =>
                array(
                    'name' => 'MB 2092',
                    'value' => '8cabb9',
                    'markup' => '1.05',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2092',
                ),
            301 =>
                array(
                    'name' => 'MB 2093',
                    'value' => '8aa6ae',
                    'markup' => '0.91',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2093',
                ),
            302 =>
                array(
                    'name' => 'MB 2094',
                    'value' => '8aa1aa',
                    'markup' => '0.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2094',
                ),
            303 =>
                array(
                    'name' => 'MB 2095',
                    'value' => '72838a',
                    'markup' => '1.12',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2095',
                ),
            304 =>
                array(
                    'name' => 'MB 2096',
                    'value' => '92bed7',
                    'markup' => '0.3',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2096',
                ),
            305 =>
                array(
                    'name' => 'MB 2097',
                    'value' => '8cbad4',
                    'markup' => '0.38',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2097',
                ),
            306 =>
                array(
                    'name' => 'MB 2098',
                    'value' => '8cb5c7',
                    'markup' => '0.48',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2098',
                ),
            307 =>
                array(
                    'name' => 'MB 2099',
                    'value' => '557f93',
                    'markup' => '2.01',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2099',
                ),
            308 =>
                array(
                    'name' => 'MB 2100',
                    'value' => '4b6e7a',
                    'markup' => '2.79',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2100',
                ),
            309 =>
                array(
                    'name' => 'MB 2101',
                    'value' => '687e92',
                    'markup' => '2.7',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2101',
                ),
            310 =>
                array(
                    'name' => 'MB 2102',
                    'value' => '698094',
                    'markup' => '2.97',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2102',
                ),
            311 =>
                array(
                    'name' => 'MB 2103',
                    'value' => '667b8d',
                    'markup' => '2.67',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2103',
                ),
            312 =>
                array(
                    'name' => 'MB 2104',
                    'value' => '576e83',
                    'markup' => '4.98',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2104',
                ),
            313 =>
                array(
                    'name' => 'MB 2105',
                    'value' => '4c5a67',
                    'markup' => '5.55',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2105',
                ),
            314 =>
                array(
                    'name' => 'MB 2106',
                    'value' => '5b7378',
                    'markup' => '2.78',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2106',
                ),
            315 =>
                array(
                    'name' => 'MB 2107',
                    'value' => '59747d',
                    'markup' => '2.7',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2107',
                ),
            316 =>
                array(
                    'name' => 'MB 2108',
                    'value' => '576c76',
                    'markup' => '2.76',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2108',
                ),
            317 =>
                array(
                    'name' => 'MB 2109',
                    'value' => '586b72',
                    'markup' => '2.82',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2109',
                ),
            318 =>
                array(
                    'name' => 'MB 2110',
                    'value' => '596a6e',
                    'markup' => '2.87',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2110',
                ),
            319 =>
                array(
                    'name' => 'MB 2111',
                    'value' => '90c1e3',
                    'markup' => '0.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2111',
                ),
            320 =>
                array(
                    'name' => 'MB 2112',
                    'value' => '57a3d9',
                    'markup' => '0.7',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2112',
                ),
            321 =>
                array(
                    'name' => 'MB 2113',
                    'value' => '5ca6da',
                    'markup' => '0.68',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2113',
                ),
            322 =>
                array(
                    'name' => 'MB 2114',
                    'value' => '56a5da',
                    'markup' => '0.66',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2114',
                ),
            323 =>
                array(
                    'name' => 'MB 2115',
                    'value' => '58a4d9',
                    'markup' => '0.69',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'mb-2115',
                ),
            324 =>
                array(
                    'name' => 'SR 3001',
                    'value' => 'af8588',
                    'markup' => '2.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3001',
                ),
            325 =>
                array(
                    'name' => 'SR 3002',
                    'value' => 'ae8285',
                    'markup' => '2.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3002',
                ),
            326 =>
                array(
                    'name' => 'SR 3003',
                    'value' => 'a3888a',
                    'markup' => '0.99',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3003',
                ),
            327 =>
                array(
                    'name' => 'SR 3004',
                    'value' => '9c7e81',
                    'markup' => '2.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3004',
                ),
            328 =>
                array(
                    'name' => 'SR 3005',
                    'value' => '9a7e81',
                    'markup' => '2.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3005',
                ),
            329 =>
                array(
                    'name' => 'SR 3006',
                    'value' => 'a35f55',
                    'markup' => '3.08',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3006',
                ),
            330 =>
                array(
                    'name' => 'SR 3007',
                    'value' => 'a05c52',
                    'markup' => '4.59',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3007',
                ),
            331 =>
                array(
                    'name' => 'SR 3008',
                    'value' => 'a05b50',
                    'markup' => '4.22',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3008',
                ),
            332 =>
                array(
                    'name' => 'SR 3009',
                    'value' => '89564f',
                    'markup' => '4.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3009',
                ),
            333 =>
                array(
                    'name' => 'SR 3010',
                    'value' => '83534a',
                    'markup' => '4.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3010',
                ),
            334 =>
                array(
                    'name' => 'SR 3011',
                    'value' => 'c66c5c',
                    'markup' => '4.94',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3011',
                ),
            335 =>
                array(
                    'name' => 'SR 3012',
                    'value' => 'b9624f',
                    'markup' => '7.11',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3012',
                ),
            336 =>
                array(
                    'name' => 'SR 3013',
                    'value' => 'ba604f',
                    'markup' => '4.3',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3013',
                ),
            337 =>
                array(
                    'name' => 'SR 3014',
                    'value' => 'b45948',
                    'markup' => '4.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3014',
                ),
            338 =>
                array(
                    'name' => 'SR 3015',
                    'value' => 'b95645',
                    'markup' => '3.88',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3015',
                ),
            339 =>
                array(
                    'name' => 'SR 3016',
                    'value' => 'b7726d',
                    'markup' => '2.35',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3016',
                ),
            340 =>
                array(
                    'name' => 'SR 3017',
                    'value' => 'b56b66',
                    'markup' => '4.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3017',
                ),
            341 =>
                array(
                    'name' => 'SR 3018',
                    'value' => 'ac6760',
                    'markup' => '4.47',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3018',
                ),
            342 =>
                array(
                    'name' => 'SR 3019',
                    'value' => 'a5635a',
                    'markup' => '4.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3019',
                ),
            343 =>
                array(
                    'name' => 'SR 3020',
                    'value' => '9f6055',
                    'markup' => '4.28',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3020',
                ),
            344 =>
                array(
                    'name' => 'SR 3021',
                    'value' => 'ab7d7b',
                    'markup' => '2.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3021',
                ),
            345 =>
                array(
                    'name' => 'SR 3022',
                    'value' => 'a97a77',
                    'markup' => '2.22',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3022',
                ),
            346 =>
                array(
                    'name' => 'SR 3023',
                    'value' => 'a77776',
                    'markup' => '2.28',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3023',
                ),
            347 =>
                array(
                    'name' => 'SR 3024',
                    'value' => '9f6a67',
                    'markup' => '4.62',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3024',
                ),
            348 =>
                array(
                    'name' => 'SR 3025',
                    'value' => '99615e',
                    'markup' => '4.79',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3025',
                ),
            349 =>
                array(
                    'name' => 'SR 3026',
                    'value' => 'c1876b',
                    'markup' => '0.88',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3026',
                ),
            350 =>
                array(
                    'name' => 'SR 3027',
                    'value' => 'b97f63',
                    'markup' => '2.53',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3027',
                ),
            351 =>
                array(
                    'name' => 'SR 3028',
                    'value' => 'b07254',
                    'markup' => '3.07',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3028',
                ),
            352 =>
                array(
                    'name' => 'SR 3029',
                    'value' => 'a56249',
                    'markup' => '2.98',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3029',
                ),
            353 =>
                array(
                    'name' => 'SR 3030',
                    'value' => 'a6644a',
                    'markup' => '2.93',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3030',
                ),
            354 =>
                array(
                    'name' => 'S0 3031',
                    'value' => 'd08759',
                    'markup' => '6.42',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3031',
                ),
            355 =>
                array(
                    'name' => 'S0 3032',
                    'value' => 'cb7c53',
                    'markup' => '6.28',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3032',
                ),
            356 =>
                array(
                    'name' => 'S0 3033',
                    'value' => 'c87651',
                    'markup' => '7.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3033',
                ),
            357 =>
                array(
                    'name' => 'SR 3034',
                    'value' => 'b76548',
                    'markup' => '5.28',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3034',
                ),
            358 =>
                array(
                    'name' => 'S0 3035',
                    'value' => 'ae5d41',
                    'markup' => '5.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3035',
                ),
            359 =>
                array(
                    'name' => 'S0 3036',
                    'value' => 'f1c3a3',
                    'markup' => '0.15',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3036',
                ),
            360 =>
                array(
                    'name' => 'S0 3037',
                    'value' => 'e1a57f',
                    'markup' => '0.52',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3037',
                ),
            361 =>
                array(
                    'name' => 'S0 3038',
                    'value' => 'd39264',
                    'markup' => '2.7',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3038',
                ),
            362 =>
                array(
                    'name' => 'S0 3039',
                    'value' => 'd29163',
                    'markup' => '2.75',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3039',
                ),
            363 =>
                array(
                    'name' => 'S0 3040',
                    'value' => 'd49365',
                    'markup' => '2.68',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3040',
                ),
            364 =>
                array(
                    'name' => 'S0 3041',
                    'value' => 'f9e2d1',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3041',
                ),
            365 =>
                array(
                    'name' => 'S0 3042',
                    'value' => 'f7dac6',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3042',
                ),
            366 =>
                array(
                    'name' => 'S0 3043',
                    'value' => 'f8d2ba',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3043',
                ),
            367 =>
                array(
                    'name' => 'S0 3044',
                    'value' => 'b76548',
                    'markup' => '1.43',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3044',
                ),
            368 =>
                array(
                    'name' => 'S0 3045',
                    'value' => 'd98558',
                    'markup' => '5.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 's0-3045',
                ),
            369 =>
                array(
                    'name' => 'SY 3046',
                    'value' => 'f0e6cc',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3046',
                ),
            370 =>
                array(
                    'name' => 'SY 3047',
                    'value' => 'eed4af',
                    'markup' => '0.13',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3047',
                ),
            371 =>
                array(
                    'name' => 'SY 3048',
                    'value' => 'ecd2ab',
                    'markup' => '0.15',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3048',
                ),
            372 =>
                array(
                    'name' => 'SY 3049',
                    'value' => 'efd7b3',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3049',
                ),
            373 =>
                array(
                    'name' => 'SY 3050',
                    'value' => 'ead0a8',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3050',
                ),
            374 =>
                array(
                    'name' => 'SY 3051',
                    'value' => 'f8ecbd',
                    'markup' => '0.64',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3051',
                ),
            375 =>
                array(
                    'name' => 'SY 3052',
                    'value' => 'f8ecb4',
                    'markup' => '0.79',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3052',
                ),
            376 =>
                array(
                    'name' => 'SY 3053',
                    'value' => 'fbe9a1',
                    'markup' => '1.61',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3053',
                ),
            377 =>
                array(
                    'name' => 'SY 3054',
                    'value' => 'fde388',
                    'markup' => '3.45',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3054',
                ),
            378 =>
                array(
                    'name' => 'SY 3055',
                    'value' => 'fde384',
                    'markup' => '3.86',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3055',
                ),
            379 =>
                array(
                    'name' => 'SY 3056',
                    'value' => 'fce783',
                    'markup' => '4.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3056',
                ),
            380 =>
                array(
                    'name' => 'SY 3057',
                    'value' => 'fbe882',
                    'markup' => '4.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3057',
                ),
            381 =>
                array(
                    'name' => 'SY 3058',
                    'value' => 'fbe982',
                    'markup' => '4.27',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3058',
                ),
            382 =>
                array(
                    'name' => 'SY 3059',
                    'value' => 'fbe97b',
                    'markup' => '4.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3059',
                ),
            383 =>
                array(
                    'name' => 'SY 3060',
                    'value' => 'fae87d',
                    'markup' => '4.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3060',
                ),
            384 =>
                array(
                    'name' => 'SY 3061',
                    'value' => 'ffd14d',
                    'markup' => '8.23',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3061',
                ),
            385 =>
                array(
                    'name' => 'SY 3062',
                    'value' => 'ffcd3b',
                    'markup' => '8.65',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3062',
                ),
            386 =>
                array(
                    'name' => 'SY 3063',
                    'value' => 'ffcd26',
                    'markup' => '7.79',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3063',
                ),
            387 =>
                array(
                    'name' => 'SY 3064',
                    'value' => 'ffca00',
                    'markup' => '8.87',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3064',
                ),
            388 =>
                array(
                    'name' => 'SY 3065',
                    'value' => 'ffc900',
                    'markup' => '9.01',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3065',
                ),
            389 =>
                array(
                    'name' => 'SY 3066',
                    'value' => 'f5ecc6',
                    'markup' => '0.36',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3066',
                ),
            390 =>
                array(
                    'name' => 'SY 3067',
                    'value' => 'f9e7b8',
                    'markup' => '0.64',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3067',
                ),
            391 =>
                array(
                    'name' => 'SY 3068',
                    'value' => 'fbe4a7',
                    'markup' => '1.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3068',
                ),
            392 =>
                array(
                    'name' => 'SY 3069',
                    'value' => 'fcd67a',
                    'markup' => '4.71',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3069',
                ),
            393 =>
                array(
                    'name' => 'SY 3070',
                    'value' => 'f4ab20',
                    'markup' => '8.73',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3070',
                ),
            394 =>
                array(
                    'name' => 'SY 3071',
                    'value' => 'f8ebce',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3071',
                ),
            395 =>
                array(
                    'name' => 'SY 3072',
                    'value' => 'fae6c1',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3072',
                ),
            396 =>
                array(
                    'name' => 'SY 3073',
                    'value' => 'fce2b2',
                    'markup' => '0.78',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3073',
                ),
            397 =>
                array(
                    'name' => 'SY 3074',
                    'value' => 'fccd88',
                    'markup' => '3.6',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3074',
                ),
            398 =>
                array(
                    'name' => 'SY 3075',
                    'value' => 'f9a037',
                    'markup' => '8.03',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3075',
                ),
            399 =>
                array(
                    'name' => 'SY 3076',
                    'value' => 'f8edd2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3076',
                ),
            400 =>
                array(
                    'name' => 'SY 3077',
                    'value' => 'f9e9c8',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3077',
                ),
            401 =>
                array(
                    'name' => 'SY 3078',
                    'value' => 'fbe4b9',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3078',
                ),
            402 =>
                array(
                    'name' => 'SY 3079',
                    'value' => 'f9d293',
                    'markup' => '2.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3079',
                ),
            403 =>
                array(
                    'name' => 'SY 3080',
                    'value' => 'edad55',
                    'markup' => '8.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sy-3080',
                ),
            404 =>
                array(
                    'name' => 'SO 3081',
                    'value' => 'f9e6c7',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3081',
                ),
            405 =>
                array(
                    'name' => 'SO 3082',
                    'value' => 'fbe1ba',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3082',
                ),
            406 =>
                array(
                    'name' => 'SO 3083',
                    'value' => 'fcd9a9',
                    'markup' => '0.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3083',
                ),
            407 =>
                array(
                    'name' => 'SO 3084',
                    'value' => 'fcc07b',
                    'markup' => '4.79',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3084',
                ),
            408 =>
                array(
                    'name' => 'SO 3085',
                    'value' => 'f09236',
                    'markup' => '8.22',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3085',
                ),
            409 =>
                array(
                    'name' => 'SG 3086',
                    'value' => 'f4f1d1',
                    'markup' => '0.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3086',
                ),
            410 =>
                array(
                    'name' => 'SG 3087',
                    'value' => 'f5f1c7',
                    'markup' => '0.36',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3087',
                ),
            411 =>
                array(
                    'name' => 'SG 3088',
                    'value' => 'f5f0b8',
                    'markup' => '0.76',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3088',
                ),
            412 =>
                array(
                    'name' => 'SG 3089',
                    'value' => 'f7ee93',
                    'markup' => '2.73',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3089',
                ),
            413 =>
                array(
                    'name' => 'SG 3090',
                    'value' => 'f0e04f',
                    'markup' => '6.54',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3090',
                ),
            414 =>
                array(
                    'name' => 'SG 3091',
                    'value' => 'f1f2d2',
                    'markup' => '0.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3091',
                ),
            415 =>
                array(
                    'name' => 'SG 3092',
                    'value' => 'f3f2c7',
                    'markup' => '0.36',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3092',
                ),
            416 =>
                array(
                    'name' => 'SG 3093',
                    'value' => 'eff0b9',
                    'markup' => '0.71',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3093',
                ),
            417 =>
                array(
                    'name' => 'SG 3094',
                    'value' => 'e5e691',
                    'markup' => '2.89',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3094',
                ),
            418 =>
                array(
                    'name' => 'SG 3095',
                    'value' => 'cbcf52',
                    'markup' => '6.48',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3095',
                ),
            419 =>
                array(
                    'name' => 'SG 3096',
                    'value' => 'cfcc6b',
                    'markup' => '6.3',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3096',
                ),
            420 =>
                array(
                    'name' => 'SG 3097',
                    'value' => 'b4ae51',
                    'markup' => '8.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3097',
                ),
            421 =>
                array(
                    'name' => 'SG 3098',
                    'value' => 'b0a840',
                    'markup' => '9.7',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3098',
                ),
            422 =>
                array(
                    'name' => 'SG 3099',
                    'value' => '9d9955',
                    'markup' => '8.46',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3099',
                ),
            423 =>
                array(
                    'name' => 'SG 3100',
                    'value' => '868553',
                    'markup' => '3.7',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3100',
                ),
            424 =>
                array(
                    'name' => 'SG 3101',
                    'value' => 'b4b182',
                    'markup' => '4.4',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3101',
                ),
            425 =>
                array(
                    'name' => 'SG 3102',
                    'value' => 'b7b485',
                    'markup' => '1.5',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3102',
                ),
            426 =>
                array(
                    'name' => 'SG 3103',
                    'value' => 'bdb98c',
                    'markup' => '1.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3103',
                ),
            427 =>
                array(
                    'name' => 'SG 3104',
                    'value' => 'c4c29b',
                    'markup' => '1.75',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3104',
                ),
            428 =>
                array(
                    'name' => 'SG 3105',
                    'value' => 'c1bf9a',
                    'markup' => '0.79',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3105',
                ),
            429 =>
                array(
                    'name' => 'SG 3106',
                    'value' => 'baccc0',
                    'markup' => '0.52',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3106',
                ),
            430 =>
                array(
                    'name' => 'SG 3107',
                    'value' => 'a2b1a4',
                    'markup' => '0.93',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3107',
                ),
            431 =>
                array(
                    'name' => 'SG 3108',
                    'value' => '78887a',
                    'markup' => '1.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3108',
                ),
            432 =>
                array(
                    'name' => 'SG 3109',
                    'value' => '698b7d',
                    'markup' => '1.34',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3109',
                ),
            433 =>
                array(
                    'name' => 'SG 3110',
                    'value' => '587c6d',
                    'markup' => '3.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sg-3110',
                ),
            434 =>
                array(
                    'name' => 'SR 3111',
                    'value' => 'fad5d1',
                    'markup' => '0.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3111',
                ),
            435 =>
                array(
                    'name' => 'SR 3112',
                    'value' => 'fbcac7',
                    'markup' => '0.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3112',
                ),
            436 =>
                array(
                    'name' => 'SR 3113',
                    'value' => 'fabbb9',
                    'markup' => '0.5',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3113',
                ),
            437 =>
                array(
                    'name' => 'SR 3114',
                    'value' => 'efc6b9',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3114',
                ),
            438 =>
                array(
                    'name' => 'SR 3115',
                    'value' => 'c34a3a',
                    'markup' => '11.63',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3115',
                ),
            439 =>
                array(
                    'name' => 'SR 3116',
                    'value' => 'fcadac',
                    'markup' => '0.73',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3116',
                ),
            440 =>
                array(
                    'name' => 'SR 3117',
                    'value' => 'f8a4a3',
                    'markup' => '1.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3117',
                ),
            441 =>
                array(
                    'name' => 'SR 3118',
                    'value' => 'f99f9f',
                    'markup' => '1.45',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3118',
                ),
            442 =>
                array(
                    'name' => 'SR 3119',
                    'value' => 'fa9d9d',
                    'markup' => '1.34',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3119',
                ),
            443 =>
                array(
                    'name' => 'SR 3120',
                    'value' => 'f69797',
                    'markup' => '1.67',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3120',
                ),
            444 =>
                array(
                    'name' => 'SR 3121',
                    'value' => 'ec867f',
                    'markup' => '3.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3121',
                ),
            445 =>
                array(
                    'name' => 'SR 3122',
                    'value' => 'f37c76',
                    'markup' => '4.57',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3122',
                ),
            446 =>
                array(
                    'name' => 'SR 3123',
                    'value' => 'f17b78',
                    'markup' => '4.49',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3123',
                ),
            447 =>
                array(
                    'name' => 'SR 3124',
                    'value' => 'ee716a',
                    'markup' => '5.59',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3124',
                ),
            448 =>
                array(
                    'name' => 'SR 3125',
                    'value' => 'ec6961',
                    'markup' => '6.06',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3125',
                ),
            449 =>
                array(
                    'name' => 'SR 3126',
                    'value' => 'fdd0ce',
                    'markup' => '0.29',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3126',
                ),
            450 =>
                array(
                    'name' => 'SR 3127',
                    'value' => 'fec2c1',
                    'markup' => '0.32',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3127',
                ),
            451 =>
                array(
                    'name' => 'SR 3128',
                    'value' => 'eba8b0',
                    'markup' => '0.82',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3128',
                ),
            452 =>
                array(
                    'name' => 'SR 3129',
                    'value' => 'd17179',
                    'markup' => '3.16',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3129',
                ),
            453 =>
                array(
                    'name' => 'SR 3130',
                    'value' => 'd1737c',
                    'markup' => '2.97',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3130',
                ),
            454 =>
                array(
                    'name' => 'SR 3131',
                    'value' => 'f7d8d4',
                    'markup' => '0.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3131',
                ),
            455 =>
                array(
                    'name' => 'SR 3132',
                    'value' => 'f4cecc',
                    'markup' => '0.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3132',
                ),
            456 =>
                array(
                    'name' => 'SR 3133',
                    'value' => 'f1c0bd',
                    'markup' => '0.49',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3133',
                ),
            457 =>
                array(
                    'name' => 'SR 3134',
                    'value' => 'e49d9a',
                    'markup' => '1.92',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3134',
                ),
            458 =>
                array(
                    'name' => 'SR 3135',
                    'value' => 'bc655f',
                    'markup' => '5.65',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3135',
                ),
            459 =>
                array(
                    'name' => 'SR 3136',
                    'value' => 'b0494b',
                    'markup' => '4.96',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3136',
                ),
            460 =>
                array(
                    'name' => 'SR 3137',
                    'value' => 'aa4241',
                    'markup' => '6.6',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3137',
                ),
            461 =>
                array(
                    'name' => 'SR 3138',
                    'value' => 'fcdccf',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3138',
                ),
            462 =>
                array(
                    'name' => 'SR 3139',
                    'value' => 'fcd1c3',
                    'markup' => '0.37',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3139',
                ),
            463 =>
                array(
                    'name' => 'SR 3140',
                    'value' => 'fdc3b2',
                    'markup' => '0.68',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3140',
                ),
            464 =>
                array(
                    'name' => 'SR 3141',
                    'value' => 'f89f87',
                    'markup' => '2.96',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3141',
                ),
            465 =>
                array(
                    'name' => 'SR 3142',
                    'value' => 'e26136',
                    'markup' => '11.04',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3142',
                ),
            466 =>
                array(
                    'name' => 'SR 3143',
                    'value' => 'fbe1d3',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3143',
                ),
            467 =>
                array(
                    'name' => 'SR 3144',
                    'value' => 'f9d8c9',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3144',
                ),
            468 =>
                array(
                    'name' => 'SR 3145',
                    'value' => 'fdcebb',
                    'markup' => '0.49',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3145',
                ),
            469 =>
                array(
                    'name' => 'SR 3146',
                    'value' => 'f7ab90',
                    'markup' => '1.89',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3146',
                ),
            470 =>
                array(
                    'name' => 'SR 3147',
                    'value' => 'e56f44',
                    'markup' => '8.24',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3147',
                ),
            471 =>
                array(
                    'name' => 'SR 3148',
                    'value' => 'fdbea4',
                    'markup' => '1.03',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3148',
                ),
            472 =>
                array(
                    'name' => 'SR 3149',
                    'value' => 'fdb599',
                    'markup' => '1.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3149',
                ),
            473 =>
                array(
                    'name' => 'SR 3150',
                    'value' => 'f48a72',
                    'markup' => '5.22',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3150',
                ),
            474 =>
                array(
                    'name' => 'SR 3151',
                    'value' => 'f38369',
                    'markup' => '6.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3151',
                ),
            475 =>
                array(
                    'name' => 'SO 3152',
                    'value' => 'fdbe96',
                    'markup' => '1.95',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3152',
                ),
            476 =>
                array(
                    'name' => 'SO 3153',
                    'value' => 'f99e6c',
                    'markup' => '5.45',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3153',
                ),
            477 =>
                array(
                    'name' => 'SO 3154',
                    'value' => 'f89762',
                    'markup' => '6.07',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3154',
                ),
            478 =>
                array(
                    'name' => 'SO 3155',
                    'value' => 'f58b66',
                    'markup' => '5.87',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3155',
                ),
            479 =>
                array(
                    'name' => 'SO 3156',
                    'value' => 'f6ddce',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3156',
                ),
            480 =>
                array(
                    'name' => 'SO 3157',
                    'value' => 'f7d4c2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3157',
                ),
            481 =>
                array(
                    'name' => 'SO 3158',
                    'value' => 'f4c9b3',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3158',
                ),
            482 =>
                array(
                    'name' => 'SO 3159',
                    'value' => 'eaa888',
                    'markup' => '1.37',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3159',
                ),
            483 =>
                array(
                    'name' => 'SO 3160',
                    'value' => 'c66a41',
                    'markup' => '6.98',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'so-3160',
                ),
            484 =>
                array(
                    'name' => 'SR 3161',
                    'value' => 'eea69e',
                    'markup' => '1.54',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3161',
                ),
            485 =>
                array(
                    'name' => 'SR 3162',
                    'value' => 'ea9b96',
                    'markup' => '2.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3162',
                ),
            486 =>
                array(
                    'name' => 'SR 3163',
                    'value' => 'e89892',
                    'markup' => '2.45',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3163',
                ),
            487 =>
                array(
                    'name' => 'SR 3164',
                    'value' => 'e8938e',
                    'markup' => '2.67',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3164',
                ),
            488 =>
                array(
                    'name' => 'SR 3165',
                    'value' => 'db7c79',
                    'markup' => '2.22',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3165',
                ),
            489 =>
                array(
                    'name' => 'SR 3166',
                    'value' => 'd79793',
                    'markup' => '2.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3166',
                ),
            490 =>
                array(
                    'name' => 'SR 3167',
                    'value' => 'd7938f',
                    'markup' => '0.64',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3167',
                ),
            491 =>
                array(
                    'name' => 'SR 3168',
                    'value' => 'd3837e',
                    'markup' => '2.15',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3168',
                ),
            492 =>
                array(
                    'name' => 'SR 3169',
                    'value' => 'bf7877',
                    'markup' => '2.14',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3169',
                ),
            493 =>
                array(
                    'name' => 'SR 3170',
                    'value' => 'a26664',
                    'markup' => '4.8',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3170',
                ),
            494 =>
                array(
                    'name' => 'SR 3171',
                    'value' => 'dea8a1',
                    'markup' => '1.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3171',
                ),
            495 =>
                array(
                    'name' => 'SR 3172',
                    'value' => 'e0adab',
                    'markup' => '1.06',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3172',
                ),
            496 =>
                array(
                    'name' => 'SR 3173',
                    'value' => 'd4aba9',
                    'markup' => '0.33',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3173',
                ),
            497 =>
                array(
                    'name' => 'SR 3174',
                    'value' => 'c7a7a7',
                    'markup' => '0.34',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3174',
                ),
            498 =>
                array(
                    'name' => 'SR 3175',
                    'value' => 'a38383',
                    'markup' => '2.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sr-3175',
                ),
            499 =>
                array(
                    'name' => 'SM 3176',
                    'value' => '9668a3',
                    'markup' => '4.46',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3176',
                ),
        ));
        \DB::table('values')->insert(array(
            0 =>
                array(
                    'name' => 'SM 3177',
                    'value' => '93659f',
                    'markup' => '4.46',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3177',
                ),
            1 =>
                array(
                    'name' => 'SM 3178',
                    'value' => '856290',
                    'markup' => '4.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3178',
                ),
            2 =>
                array(
                    'name' => 'SM 3179',
                    'value' => '795f81',
                    'markup' => '4.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3179',
                ),
            3 =>
                array(
                    'name' => 'SM 3180',
                    'value' => '705c75',
                    'markup' => '4.46',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3180',
                ),
            4 =>
                array(
                    'name' => 'SM 3181',
                    'value' => '955888',
                    'markup' => '5.52',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3181',
                ),
            5 =>
                array(
                    'name' => 'SM 3182',
                    'value' => '935787',
                    'markup' => '5.68',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3182',
                ),
            6 =>
                array(
                    'name' => 'SM 3183',
                    'value' => '815578',
                    'markup' => '5.08',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3183',
                ),
            7 =>
                array(
                    'name' => 'SM 3184',
                    'value' => '71526c',
                    'markup' => '4.86',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3184',
                ),
            8 =>
                array(
                    'name' => 'SM 3185',
                    'value' => '644f60',
                    'markup' => '4.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3185',
                ),
            9 =>
                array(
                    'name' => 'SM 3186',
                    'value' => 'd6a0cc',
                    'markup' => '0.75',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3186',
                ),
            10 =>
                array(
                    'name' => 'SM 3187',
                    'value' => 'd49cc9',
                    'markup' => '0.87',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3187',
                ),
            11 =>
                array(
                    'name' => 'SM 3188',
                    'value' => 'b56fa7',
                    'markup' => '3.69',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3188',
                ),
            12 =>
                array(
                    'name' => 'SM 3189',
                    'value' => 'b069a1',
                    'markup' => '4.57',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3189',
                ),
            13 =>
                array(
                    'name' => 'SM 3190',
                    'value' => 'a4558d',
                    'markup' => '5.79',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3190',
                ),
            14 =>
                array(
                    'name' => 'SM 3191',
                    'value' => '8471ad',
                    'markup' => '3.57',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3191',
                ),
            15 =>
                array(
                    'name' => 'SM 3192',
                    'value' => '826eaa',
                    'markup' => '3.96',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3192',
                ),
            16 =>
                array(
                    'name' => 'SM 3193',
                    'value' => '7a63a0',
                    'markup' => '4.65',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3193',
                ),
            17 =>
                array(
                    'name' => 'SM 3194',
                    'value' => '7a6a99',
                    'markup' => '4.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3194',
                ),
            18 =>
                array(
                    'name' => 'SM 3195',
                    'value' => '72618f',
                    'markup' => '4.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sm-3195',
                ),
            19 =>
                array(
                    'name' => 'SB 3196',
                    'value' => '7792cb',
                    'markup' => '1.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sb-3196',
                ),
            20 =>
                array(
                    'name' => 'SB 3197',
                    'value' => '758fc8',
                    'markup' => '1.32',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sb-3197',
                ),
            21 =>
                array(
                    'name' => 'SB 3198',
                    'value' => '6e95cc',
                    'markup' => '1.11',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sb-3198',
                ),
            22 =>
                array(
                    'name' => 'SB 3199',
                    'value' => '5e88c5',
                    'markup' => '1.72',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sb-3199',
                ),
            23 =>
                array(
                    'name' => 'SB 3200',
                    'value' => '4d7bbd',
                    'markup' => '2.67',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'sb-3200',
                ),
            24 =>
                array(
                    'name' => 'ES 9100',
                    'value' => '0074b9',
                    'markup' => '3.47',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9100',
                ),
            25 =>
                array(
                    'name' => 'ES 9101',
                    'value' => '007cb8',
                    'markup' => '3.04',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9101',
                ),
            26 =>
                array(
                    'name' => 'ES 9102',
                    'value' => '72b2e1',
                    'markup' => '0.44',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9102',
                ),
            27 =>
                array(
                    'name' => 'ES 9103',
                    'value' => '92c2e4',
                    'markup' => '0.2',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9103',
                ),
            28 =>
                array(
                    'name' => 'ES 9104',
                    'value' => '415565',
                    'markup' => '4.74',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9104',
                ),
            29 =>
                array(
                    'name' => 'ES 9105',
                    'value' => '496576',
                    'markup' => '4.84',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9105',
                ),
            30 =>
                array(
                    'name' => 'ES 9106',
                    'value' => '7f98aa',
                    'markup' => '0.83',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9106',
                ),
            31 =>
                array(
                    'name' => 'ES 9107',
                    'value' => '89a7bc',
                    'markup' => '1.09',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9107',
                ),
            32 =>
                array(
                    'name' => 'ES 9108',
                    'value' => '268799',
                    'markup' => '2.69',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9108',
                ),
            33 =>
                array(
                    'name' => 'ES 9109',
                    'value' => '28899b',
                    'markup' => '2.69',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9109',
                ),
            34 =>
                array(
                    'name' => 'ES 9110',
                    'value' => '7fb7c5',
                    'markup' => '0.7',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9110',
                ),
            35 =>
                array(
                    'name' => 'ES 9111',
                    'value' => '87bdd1',
                    'markup' => '0.4',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9111',
                ),
            36 =>
                array(
                    'name' => 'ES 9112',
                    'value' => '4e7d79',
                    'markup' => '2.85',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9112',
                ),
            37 =>
                array(
                    'name' => 'ES 9113',
                    'value' => '518681',
                    'markup' => '1.65',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9113',
                ),
            38 =>
                array(
                    'name' => 'ES 9114',
                    'value' => '8eb2b1',
                    'markup' => '1.43',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9114',
                ),
            39 =>
                array(
                    'name' => 'ES 9115',
                    'value' => '90b8bf',
                    'markup' => '0.85',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9115',
                ),
            40 =>
                array(
                    'name' => 'ES 9116',
                    'value' => '4c8f88',
                    'markup' => '2.85',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9116',
                ),
            41 =>
                array(
                    'name' => 'ES 9117',
                    'value' => '7bb4b1',
                    'markup' => '1.46',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9117',
                ),
            42 =>
                array(
                    'name' => 'ES 9118',
                    'value' => '93c1bf',
                    'markup' => '0.79',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9118',
                ),
            43 =>
                array(
                    'name' => 'ES 9119',
                    'value' => '9dc7c5',
                    'markup' => '0.6',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9119',
                ),
            44 =>
                array(
                    'name' => 'ES 9120',
                    'value' => '416e5c',
                    'markup' => '3.06',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9120',
                ),
            45 =>
                array(
                    'name' => 'ES 9121',
                    'value' => '537e6a',
                    'markup' => '2.7',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9121',
                ),
            46 =>
                array(
                    'name' => 'ES 9122',
                    'value' => '8fb2a8',
                    'markup' => '1.5',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9122',
                ),
            47 =>
                array(
                    'name' => 'ES 9123',
                    'value' => '98b8ae',
                    'markup' => '1.17',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9123',
                ),
            48 =>
                array(
                    'name' => 'ES 9124',
                    'value' => '74886a',
                    'markup' => '4.29',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9124',
                ),
            49 =>
                array(
                    'name' => 'ES 9125',
                    'value' => '7a8c6f',
                    'markup' => '3.5',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9125',
                ),
            50 =>
                array(
                    'name' => 'ES 9126',
                    'value' => 'a0b4a1',
                    'markup' => '2.3',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9126',
                ),
            51 =>
                array(
                    'name' => 'ES 9127',
                    'value' => 'a8b9a6',
                    'markup' => '1.62',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9127',
                ),
            52 =>
                array(
                    'name' => 'ES 9128',
                    'value' => '89b899',
                    'markup' => '3.01',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9128',
                ),
            53 =>
                array(
                    'name' => 'ES 9129',
                    'value' => '94bc9f',
                    'markup' => '2.45',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9129',
                ),
            54 =>
                array(
                    'name' => 'ES 9130',
                    'value' => 'a8cab6',
                    'markup' => '1',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9130',
                ),
            55 =>
                array(
                    'name' => 'ES 9131',
                    'value' => 'b9d2b7',
                    'markup' => '0.9',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9131',
                ),
            56 =>
                array(
                    'name' => 'ES 9132',
                    'value' => '468d5c',
                    'markup' => '8.82',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9132',
                ),
            57 =>
                array(
                    'name' => 'ES 9133',
                    'value' => '4f9360',
                    'markup' => '8.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9133',
                ),
            58 =>
                array(
                    'name' => 'ES 9134',
                    'value' => '8ac09e',
                    'markup' => '2.06',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9134',
                ),
            59 =>
                array(
                    'name' => 'ES 9135',
                    'value' => '9dcaac',
                    'markup' => '1.01',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9135',
                ),
            60 =>
                array(
                    'name' => 'ES 9136',
                    'value' => '83805c',
                    'markup' => '3.57',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9136',
                ),
            61 =>
                array(
                    'name' => 'ES 9137',
                    'value' => '9f9965',
                    'markup' => '3.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9137',
                ),
            62 =>
                array(
                    'name' => 'ES 9138',
                    'value' => 'b7b894',
                    'markup' => '1.1',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9138',
                ),
            63 =>
                array(
                    'name' => 'ES 9139',
                    'value' => 'c8c198',
                    'markup' => '0.69',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9139',
                ),
            64 =>
                array(
                    'name' => 'ES 9140',
                    'value' => '6e6853',
                    'markup' => '2.35',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9140',
                ),
            65 =>
                array(
                    'name' => 'ES 9141',
                    'value' => '726b55',
                    'markup' => '4.33',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9141',
                ),
            66 =>
                array(
                    'name' => 'ES 9142',
                    'value' => '9d9888',
                    'markup' => '0.85',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9142',
                ),
            67 =>
                array(
                    'name' => 'ES 9143',
                    'value' => 'a29e90',
                    'markup' => '0.62',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9143',
                ),
            68 =>
                array(
                    'name' => 'ES 9144',
                    'value' => '605d53',
                    'markup' => '2.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9144',
                ),
            69 =>
                array(
                    'name' => 'ES 9145',
                    'value' => '8b877c',
                    'markup' => '0.96',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9145',
                ),
            70 =>
                array(
                    'name' => 'ES 9146',
                    'value' => '9a9b94',
                    'markup' => '0.65',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9146',
                ),
            71 =>
                array(
                    'name' => 'ES 9147',
                    'value' => 'a2a39c',
                    'markup' => '0.49',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9147',
                ),
            72 =>
                array(
                    'name' => 'ES 9148',
                    'value' => '484442',
                    'markup' => '2.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9148',
                ),
            73 =>
                array(
                    'name' => 'ES 9149',
                    'value' => '524e4c',
                    'markup' => '3.21',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9149',
                ),
            74 =>
                array(
                    'name' => 'ES 9150',
                    'value' => '818285',
                    'markup' => '1.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9150',
                ),
            75 =>
                array(
                    'name' => 'ES 9151',
                    'value' => '8c8d8f',
                    'markup' => '0.85',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9151',
                ),
            76 =>
                array(
                    'name' => 'ES 9152',
                    'value' => '45484e',
                    'markup' => '4.11',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9152',
                ),
            77 =>
                array(
                    'name' => 'ES 9153',
                    'value' => '50585d',
                    'markup' => '3.29',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9153',
                ),
            78 =>
                array(
                    'name' => 'ES 9154',
                    'value' => '82909b',
                    'markup' => '0.82',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9154',
                ),
            79 =>
                array(
                    'name' => 'ES 9155',
                    'value' => '8c9aa5',
                    'markup' => '0.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9155',
                ),
            80 =>
                array(
                    'name' => 'ES 9156',
                    'value' => 'edac52',
                    'markup' => '7.51',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9156',
                ),
            81 =>
                array(
                    'name' => 'ES 9157',
                    'value' => 'eeb055',
                    'markup' => '8.09',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9157',
                ),
            82 =>
                array(
                    'name' => 'ES 9158',
                    'value' => 'f7c786',
                    'markup' => '0.55',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9158',
                ),
            83 =>
                array(
                    'name' => 'ES 9159',
                    'value' => 'f5ca90',
                    'markup' => '0.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9159',
                ),
            84 =>
                array(
                    'name' => 'ES 9160',
                    'value' => 'f6cf7a',
                    'markup' => '4.69',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9160',
                ),
            85 =>
                array(
                    'name' => 'ES 9161',
                    'value' => 'f6d499',
                    'markup' => '1.84',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9161',
                ),
            86 =>
                array(
                    'name' => 'ES 9162',
                    'value' => 'f6d999',
                    'markup' => '1.96',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9162',
                ),
            87 =>
                array(
                    'name' => 'ES 9163',
                    'value' => 'f3dca3',
                    'markup' => '1.43',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9163',
                ),
            88 =>
                array(
                    'name' => 'ES 9164',
                    'value' => 'f6d135',
                    'markup' => '7.51',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9164',
                ),
            89 =>
                array(
                    'name' => 'ES 9165',
                    'value' => 'fae380',
                    'markup' => '4.36',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9165',
                ),
            90 =>
                array(
                    'name' => 'ES 9166',
                    'value' => 'f5df89',
                    'markup' => '3.47',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9166',
                ),
            91 =>
                array(
                    'name' => 'ES 9167',
                    'value' => 'f0e389',
                    'markup' => '3.65',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9167',
                ),
            92 =>
                array(
                    'name' => 'ES 9168',
                    'value' => 'f3e591',
                    'markup' => '2.78',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9168',
                ),
            93 =>
                array(
                    'name' => 'ES 9169',
                    'value' => 'f3e9a8',
                    'markup' => '1.26',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9169',
                ),
            94 =>
                array(
                    'name' => 'ES 9170',
                    'value' => 'f1e9ae',
                    'markup' => '1.02',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9170',
                ),
            95 =>
                array(
                    'name' => 'ES 9171',
                    'value' => 'f3db39',
                    'markup' => '7.33',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9171',
                ),
            96 =>
                array(
                    'name' => 'ES 9172',
                    'value' => 'f1d943',
                    'markup' => '6.96',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9172',
                ),
            97 =>
                array(
                    'name' => 'ES 9173',
                    'value' => 'f8ea82',
                    'markup' => '4.39',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9173',
                ),
            98 =>
                array(
                    'name' => 'ES 9174',
                    'value' => 'f6e98c',
                    'markup' => '3.25',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9174',
                ),
            99 =>
                array(
                    'name' => 'ES 9175',
                    'value' => '9b6e62',
                    'markup' => '2.59',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9175',
                ),
            100 =>
                array(
                    'name' => 'ES 9176',
                    'value' => 'a87a6f',
                    'markup' => '2.81',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9176',
                ),
            101 =>
                array(
                    'name' => 'ES 9177',
                    'value' => 'b59790',
                    'markup' => '0.46',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9177',
                ),
            102 =>
                array(
                    'name' => 'ES 9178',
                    'value' => 'b99e96',
                    'markup' => '0.29',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9178',
                ),
            103 =>
                array(
                    'name' => 'ES 9179',
                    'value' => '7e7bb6',
                    'markup' => '2.56',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9179',
                ),
            104 =>
                array(
                    'name' => 'ES 9180',
                    'value' => '9899c6',
                    'markup' => '0.96',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9180',
                ),
            105 =>
                array(
                    'name' => 'ES 9181',
                    'value' => 'c3c4df',
                    'markup' => '0.18',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9181',
                ),
            106 =>
                array(
                    'name' => 'ES 9182',
                    'value' => 'cccde2',
                    'markup' => '0',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9182',
                ),
            107 =>
                array(
                    'name' => 'ES 9183',
                    'value' => 'e57358',
                    'markup' => '6.73',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9183',
                ),
            108 =>
                array(
                    'name' => 'ES 9184',
                    'value' => 'f28e6c',
                    'markup' => '5.37',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9184',
                ),
            109 =>
                array(
                    'name' => 'ES 9185',
                    'value' => 'f7a899',
                    'markup' => '1.58',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9185',
                ),
            110 =>
                array(
                    'name' => 'ES 9186',
                    'value' => 'f7b5a3',
                    'markup' => '1.19',
                    'type' => 'interior',
                    'weight' => 0,
                    'attribute_id' => $attribute_facade_id,
                    'slug' => 'es-9186',
                ),
        ));

    }
}
