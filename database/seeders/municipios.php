<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class municipios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([

		            ['estado_id' => 1, 'municipio' => 'Aguascalientes'] , ['estado_id' => 1, 'municipio' => 
            'Asientos'] , ['estado_id' => 1, 'municipio' => 'Calvillo'] , ['estado_id' => 1, 'municipio' => 'Cosío'] , 
            ['estado_id' => 1, 'municipio' => 'Jesús María'] , ['estado_id' => 1, 'municipio' => 'Pabellón De Arteaga'] , 
            ['estado_id' => 1, 'municipio' => 'Rincón De Romos'] , ['estado_id' => 1, 'municipio' => 'San José De Gracia'] 
            , ['estado_id' => 1, 'municipio' => 'Tepezalá'] , ['estado_id' => 1, 'municipio' => 'El Llano'] , ['estado_id' 
            => 1, 'municipio' => 'San Francisco De Los Romo'] , ['estado_id' => 2, 'municipio' => 'Ensenada'] , 
            ['estado_id' => 2, 'municipio' => 'Mexicali'] , ['estado_id' => 2, 'municipio' => 'Tecate'] , ['estado_id' => 
            2, 'municipio' => 'Tijuana'] , ['estado_id' => 2, 'municipio' => 'Playas De Rosarito'] , ['estado_id' => 3, 
            'municipio' => 'Comondú'] , ['estado_id' => 3, 'municipio' => 'Mulegé'] , ['estado_id' => 3, 'municipio' => 
            'La Paz'] , ['estado_id' => 3, 'municipio' => 'Los Cabos'] , ['estado_id' => 3, 'municipio' => 'Loreto'] , 
            ['estado_id' => 4, 'municipio' => 'Calkiní'] , ['estado_id' => 4, 'municipio' => 'Campeche'] , ['estado_id' => 
            4, 'municipio' => 'Carmen'] , ['estado_id' => 4, 'municipio' => 'Champotón'] , ['estado_id' => 4, 'municipio' 
            => 'Hecelchakán'] , ['estado_id' => 4, 'municipio' => 'Hopelchén'] , ['estado_id' => 4, 'municipio' => 
            'Palizada'] , ['estado_id' => 4, 'municipio' => 'Tenabo'] , ['estado_id' => 4, 'municipio' => 'Escárcega'] , 
            ['estado_id' => 4, 'municipio' => 'Calakmul'] , ['estado_id' => 4, 'municipio' => 'Candelaria'] , ['estado_id' 
            => 5, 'municipio' => 'Acacoyagua'] , ['estado_id' => 5, 'municipio' => 'Acala'] , ['estado_id' => 5, 
            'municipio' => 'Acapetahua'] , ['estado_id' => 5, 'municipio' => 'Altamirano'] , ['estado_id' => 5, 
            'municipio' => 'Amatán'] , ['estado_id' => 5, 'municipio' => 'Amatenango De La Frontera'] , ['estado_id' => 5, 
            'municipio' => 'Amatenango Del Valle'] , ['estado_id' => 5, 'municipio' => 'Angel Albino Corzo'] , 
            ['estado_id' => 5, 'municipio' => 'Arriaga'] , ['estado_id' => 5, 'municipio' => 'Bejucal De Ocampo'] , 
            ['estado_id' => 5, 'municipio' => 'Bella Vista'] , ['estado_id' => 5, 'municipio' => 'Berriozábal'] , 
            ['estado_id' => 5, 'municipio' => 'Bochil'] , ['estado_id' => 5, 'municipio' => 'El Bosque'] , ['estado_id' => 
            5, 'municipio' => 'Cacahoatán'] , ['estado_id' => 5, 'municipio' => 'Catazajá'] , ['estado_id' => 5, 
            'municipio' => 'Cintalapa'] , ['estado_id' => 5, 'municipio' => 'Coapilla'] , ['estado_id' => 5, 'municipio' 
            => 'Comitán De Domínguez'] , ['estado_id' => 5, 'municipio' => 'La Concordia'] , ['estado_id' => 5, 
            'municipio' => 'Copainalá'] , ['estado_id' => 5, 'municipio' => 'Chalchihuitán'] , ['estado_id' => 5, 
            'municipio' => 'Chamula'] , ['estado_id' => 5, 'municipio' => 'Chanal'] , ['estado_id' => 5, 'municipio' => 
            'Chapultenango'] , ['estado_id' => 5, 'municipio' => 'Chenalhó'] , ['estado_id' => 5, 'municipio' => 'Chiapa 
            De Corzo'] , ['estado_id' => 5, 'municipio' => 'Chiapilla'] , ['estado_id' => 5, 'municipio' => 'Chicoasén'] , 
            ['estado_id' => 5, 'municipio' => 'Chicomuselo'] , ['estado_id' => 5, 'municipio' => 'Chilón'] , ['estado_id' 
            => 5, 'municipio' => 'Escuintla'] , ['estado_id' => 5, 'municipio' => 'Francisco León'] , ['estado_id' => 5, 
            'municipio' => 'Frontera Comalapa'] , ['estado_id' => 5, 'municipio' => 'Frontera Hidalgo'] , ['estado_id' => 
            5, 'municipio' => 'La Grandeza'] , ['estado_id' => 5, 'municipio' => 'Huehuetán'] , ['estado_id' => 5, 
            'municipio' => 'Huixtán'] , ['estado_id' => 5, 'municipio' => 'Huitiupán'] , ['estado_id' => 5, 'municipio' => 
            'Huixtla'] , ['estado_id' => 5, 'municipio' => 'La Independencia'] , ['estado_id' => 5, 'municipio' => 
            'Ixhuatán'] , ['estado_id' => 5, 'municipio' => 'Ixtacomitán'] , ['estado_id' => 5, 'municipio' => 'Ixtapa'] , 
            ['estado_id' => 5, 'municipio' => 'Ixtapangajoya'] , ['estado_id' => 5, 'municipio' => 'Jiquipilas'] , 
            ['estado_id' => 5, 'municipio' => 'Jitotol'] , ['estado_id' => 5, 'municipio' => 'Juárez'] , ['estado_id' => 
            5, 'municipio' => 'Larráinzar'] , ['estado_id' => 5, 'municipio' => 'La Libertad'] , ['estado_id' => 5, 
            'municipio' => 'Mapastepec'] , ['estado_id' => 5, 'municipio' => 'Las Margaritas'] , ['estado_id' => 5, 
            'municipio' => 'Mazapa De Madero'] , ['estado_id' => 5, 'municipio' => 'Mazatán'] , ['estado_id' => 5, 
            'municipio' => 'Metapa'] , ['estado_id' => 5, 'municipio' => 'Mitontic'] , ['estado_id' => 5, 'municipio' => 
            'Motozintla'] , ['estado_id' => 5, 'municipio' => 'Nicolás Ruíz'] , ['estado_id' => 5, 'municipio' => 
            'Ocosingo'] , ['estado_id' => 5, 'municipio' => 'Ocotepec'] , ['estado_id' => 5, 'municipio' => 'Ocozocoautla 
            De Espinosa'] , ['estado_id' => 5, 'municipio' => 'Ostuacán'] , ['estado_id' => 5, 'municipio' => 
            'Osumacinta'] , ['estado_id' => 5, 'municipio' => 'Oxchuc'] , ['estado_id' => 5, 'municipio' => 'Palenque'] , 
            ['estado_id' => 5, 'municipio' => 'Pantelhó'] , ['estado_id' => 5, 'municipio' => 'Pantepec'] , ['estado_id' 
            => 5, 'municipio' => 'Pichucalco'] , ['estado_id' => 5, 'municipio' => 'Pijijiapan'] , ['estado_id' => 5, 
            'municipio' => 'El Porvenir'] , ['estado_id' => 5, 'municipio' => 'Villa Comaltitlán'] , ['estado_id' => 5, 
            'municipio' => 'Pueblo Nuevo Solistahuacán'] , ['estado_id' => 5, 'municipio' => 'Rayón'] , ['estado_id' => 5, 
            'municipio' => 'Reforma'] , ['estado_id' => 5, 'municipio' => 'Las Rosas'] , ['estado_id' => 5, 'municipio' => 
            'Sabanilla'] , ['estado_id' => 5, 'municipio' => 'Salto De Agua'] , ['estado_id' => 5, 'municipio' => 'San 
            Cristóbal De Las Casas'] , ['estado_id' => 5, 'municipio' => 'San Fernando'] , ['estado_id' => 5, 'municipio' 
            => 'Siltepec'] , ['estado_id' => 5, 'municipio' => 'Simojovel'] , ['estado_id' => 5, 'municipio' => 'Sitalá'] 
            , ['estado_id' => 5, 'municipio' => 'Socoltenango'] , ['estado_id' => 5, 'municipio' => 'Solosuchiapa'] , 
            ['estado_id' => 5, 'municipio' => 'Soyaló'] , ['estado_id' => 5, 'municipio' => 'Suchiapa'] , ['estado_id' => 
            5, 'municipio' => 'Suchiate'] , ['estado_id' => 5, 'municipio' => 'Sunuapa'] , ['estado_id' => 5, 'municipio' 
            => 'Tapachula'] , ['estado_id' => 5, 'municipio' => 'Tapalapa'] , ['estado_id' => 5, 'municipio' => 
            'Tapilula'] , ['estado_id' => 5, 'municipio' => 'Tecpatán'] , ['estado_id' => 5, 'municipio' => 'Tenejapa'] , 
            ['estado_id' => 5, 'municipio' => 'Teopisca'] , ['estado_id' => 5, 'municipio' => 'Tila'] , ['estado_id' => 5, 
            'municipio' => 'Tonalá'] , ['estado_id' => 5, 'municipio' => 'Totolapa'] , ['estado_id' => 5, 'municipio' => 
            'La Trinitaria'] , ['estado_id' => 5, 'municipio' => 'Tumbalá'] , ['estado_id' => 5, 'municipio' => 'Tuxtla 
            Gutiérrez'] , ['estado_id' => 5, 'municipio' => 'Tuxtla Chico'] , ['estado_id' => 5, 'municipio' => 
            'Tuzantán'] , ['estado_id' => 5, 'municipio' => 'Tzimol'] , ['estado_id' => 5, 'municipio' => 'Unión Juárez'] 
            , ['estado_id' => 5, 'municipio' => 'Venustiano Carranza'] , ['estado_id' => 5, 'municipio' => 'Villa Corzo'] 
            , ['estado_id' => 5, 'municipio' => 'Villaflores'] , ['estado_id' => 5, 'municipio' => 'Yajalón'] , 
            ['estado_id' => 5, 'municipio' => 'San Lucas'] , ['estado_id' => 5, 'municipio' => 'Zinacantán'] , 
            ['estado_id' => 5, 'municipio' => 'San Juan Cancuc'] , ['estado_id' => 5, 'municipio' => 'Aldama'] , 
            ['estado_id' => 5, 'municipio' => 'Benemérito De Las Américas'] , ['estado_id' => 5, 'municipio' => 'Maravilla 
            Tenejapa'] , ['estado_id' => 5, 'municipio' => 'Marqués De Comillas'] , ['estado_id' => 5, 'municipio' => 
            'Montecristo De Guerrero'] , ['estado_id' => 5, 'municipio' => 'San Andrés Duraznal'] , ['estado_id' => 5, 
            'municipio' => 'Santiago El Pinar'] , ['estado_id' => 6, 'municipio' => 'Ahumada'] , ['estado_id' => 6, 
            'municipio' => 'Aldama'] , ['estado_id' => 6, 'municipio' => 'Allende'] , ['estado_id' => 6, 'municipio' => 
            'Aquiles Serdán'] , ['estado_id' => 6, 'municipio' => 'Ascensión'] , ['estado_id' => 6, 'municipio' => 
            'Bachíniva'] , ['estado_id' => 6, 'municipio' => 'Balleza'] , ['estado_id' => 6, 'municipio' => 'Batopilas'] , 
            ['estado_id' => 6, 'municipio' => 'Bocoyna'] , ['estado_id' => 6, 'municipio' => 'Buenaventura'] , 
            ['estado_id' => 6, 'municipio' => 'Camargo'] , ['estado_id' => 6, 'municipio' => 'Carichí'] , ['estado_id' => 
            6, 'municipio' => 'Casas Grandes'] , ['estado_id' => 6, 'municipio' => 'Coronado'] , ['estado_id' => 6, 
            'municipio' => 'Coyame Del Sotol'] , ['estado_id' => 6, 'municipio' => 'La Cruz'] , ['estado_id' => 6, 
            'municipio' => 'Cuauhtémoc'] , ['estado_id' => 6, 'municipio' => 'Cusihuiriachi'] , ['estado_id' => 6, 
            'municipio' => 'Chihuahua'] , ['estado_id' => 6, 'municipio' => 'Chínipas'] , ['estado_id' => 6, 'municipio' 
            => 'Delicias'] , ['estado_id' => 6, 'municipio' => 'Dr. Belisario Domínguez'] , ['estado_id' => 6, 'municipio' 
            => 'Galeana'] , ['estado_id' => 6, 'municipio' => 'Santa Isabel'] , ['estado_id' => 6, 'municipio' => 'Gómez 
            Farías'] , ['estado_id' => 6, 'municipio' => 'Gran Morelos'] , ['estado_id' => 6, 'municipio' => 'Guachochi'] 
            , ['estado_id' => 6, 'municipio' => 'Guadalupe'] , ['estado_id' => 6, 'municipio' => 'Guadalupe Y Calvo'] , 
            ['estado_id' => 6, 'municipio' => 'Guazapares'] , ['estado_id' => 6, 'municipio' => 'Guerrero'] , ['estado_id' 
            => 6, 'municipio' => 'Hidalgo Del Parral'] , ['estado_id' => 6, 'municipio' => 'Huejotitán'] , ['estado_id' => 
            6, 'municipio' => 'Ignacio Zaragoza'] , ['estado_id' => 6, 'municipio' => 'Janos'] , ['estado_id' => 6, 
            'municipio' => 'Jiménez'] , ['estado_id' => 6, 'municipio' => 'Juárez'] , ['estado_id' => 6, 'municipio' => 
            'Julimes'] , ['estado_id' => 6, 'municipio' => 'López'] , ['estado_id' => 6, 'municipio' => 'Madera'] , 
            ['estado_id' => 6, 'municipio' => 'Maguarichi'] , ['estado_id' => 6, 'municipio' => 'Manuel Benavides'] , 
            ['estado_id' => 6, 'municipio' => 'Matachí'] , ['estado_id' => 6, 'municipio' => 'Matamoros'] , ['estado_id' 
            => 6, 'municipio' => 'Meoqui'] , ['estado_id' => 6, 'municipio' => 'Morelos'] , ['estado_id' => 6, 'municipio' 
            => 'Moris'] , ['estado_id' => 6, 'municipio' => 'Namiquipa'] , ['estado_id' => 6, 'municipio' => 'Nonoava'] , 
            ['estado_id' => 6, 'municipio' => 'Nuevo Casas Grandes'] , ['estado_id' => 6, 'municipio' => 'Ocampo'] , 
            ['estado_id' => 6, 'municipio' => 'Ojinaga'] , ['estado_id' => 6, 'municipio' => 'Praxedis G. Guerrero'] , 
            ['estado_id' => 6, 'municipio' => 'Riva Palacio'] , ['estado_id' => 6, 'municipio' => 'Rosales'] , 
            ['estado_id' => 6, 'municipio' => 'Rosario'] , ['estado_id' => 6, 'municipio' => 'San Francisco De Borja'] , 
            ['estado_id' => 6, 'municipio' => 'San Francisco De Conchos'] , ['estado_id' => 6, 'municipio' => 'San 
            Francisco Del Oro'] , ['estado_id' => 6, 'municipio' => 'Santa Bárbara'] , ['estado_id' => 6, 'municipio' => 
            'Satevó'] , ['estado_id' => 6, 'municipio' => 'Saucillo'] , ['estado_id' => 6, 'municipio' => 'Temósachic'] , 
            ['estado_id' => 6, 'municipio' => 'El Tule'] , ['estado_id' => 6, 'municipio' => 'Urique'] , ['estado_id' => 
            6, 'municipio' => 'Uruachi'] , ['estado_id' => 6, 'municipio' => 'Valle De Zaragoza'] , ['estado_id' => 7, 
            'municipio' => 'Azcapotzalco'] , ['estado_id' => 7, 'municipio' => 'Coyoacán'] , ['estado_id' => 7, 
            'municipio' => 'Cuajimalpa De Morelos'] , ['estado_id' => 7, 'municipio' => 'Gustavo A. Madero'] , 
            ['estado_id' => 7, 'municipio' => 'Iztacalco'] , ['estado_id' => 7, 'municipio' => 'Iztapalapa'] , 
            ['estado_id' => 7, 'municipio' => 'La Magdalena Contreras'] , ['estado_id' => 7, 'municipio' => 'Milpa Alta'] 
            , ['estado_id' => 7, 'municipio' => 'Álvaro Obregón'] , ['estado_id' => 7, 'municipio' => 'Tláhuac'] , 
            ['estado_id' => 7, 'municipio' => 'Tlalpan'] , ['estado_id' => 7, 'municipio' => 'Xochimilco'] , ['estado_id' 
            => 7, 'municipio' => 'Benito Juárez'] , ['estado_id' => 7, 'municipio' => 'Cuauhtémoc'] , ['estado_id' => 7, 
            'municipio' => 'Miguel Hidalgo'] , ['estado_id' => 7, 'municipio' => 'Venustiano Carranza'] , ['estado_id' => 
            8, 'municipio' => 'Abasolo'] , ['estado_id' => 8, 'municipio' => 'Acuña'] , ['estado_id' => 8, 'municipio' => 
            'Allende'] , ['estado_id' => 8, 'municipio' => 'Arteaga'] , ['estado_id' => 8, 'municipio' => 'Candela'] , 
            ['estado_id' => 8, 'municipio' => 'Castaños'] , ['estado_id' => 8, 'municipio' => 'Cuatro Ciénegas'] , 
            ['estado_id' => 8, 'municipio' => 'Escobedo'] , ['estado_id' => 8, 'municipio' => 'Francisco I. Madero'] , 
            ['estado_id' => 8, 'municipio' => 'Frontera'] , ['estado_id' => 8, 'municipio' => 'General Cepeda'] , 
            ['estado_id' => 8, 'municipio' => 'Guerrero'] , ['estado_id' => 8, 'municipio' => 'Hidalgo'] , ['estado_id' => 
            8, 'municipio' => 'Jiménez'] , ['estado_id' => 8, 'municipio' => 'Juárez'] , ['estado_id' => 8, 'municipio' => 
            'Lamadrid'] , ['estado_id' => 8, 'municipio' => 'Matamoros'] , ['estado_id' => 8, 'municipio' => 'Monclova'] , 
            ['estado_id' => 8, 'municipio' => 'Morelos'] , ['estado_id' => 8, 'municipio' => 'Múzquiz'] , ['estado_id' => 
            8, 'municipio' => 'Nadadores'] , ['estado_id' => 8, 'municipio' => 'Nava'] , ['estado_id' => 8, 'municipio' => 
            'Ocampo'] , ['estado_id' => 8, 'municipio' => 'Parras'] , ['estado_id' => 8, 'municipio' => 'Piedras Negras'] 
            , ['estado_id' => 8, 'municipio' => 'Progreso'] , ['estado_id' => 8, 'municipio' => 'Ramos Arizpe'] , 
            ['estado_id' => 8, 'municipio' => 'Sabinas'] , ['estado_id' => 8, 'municipio' => 'Sacramento'] , ['estado_id' 
            => 8, 'municipio' => 'Saltillo'] , ['estado_id' => 8, 'municipio' => 'San Buenaventura'] , ['estado_id' => 8, 
            'municipio' => 'San Juan De Sabinas'] , ['estado_id' => 8, 'municipio' => 'San Pedro'] , ['estado_id' => 8, 
            'municipio' => 'Sierra Mojada'] , ['estado_id' => 8, 'municipio' => 'Torreón'] , ['estado_id' => 8, 
            'municipio' => 'Viesca'] , ['estado_id' => 8, 'municipio' => 'Villa Unión'] , ['estado_id' => 8, 'municipio' 
            => 'Zaragoza'] , ['estado_id' => 9, 'municipio' => 'Armería'] , ['estado_id' => 9, 'municipio' => 'Colima'] , 
            ['estado_id' => 9, 'municipio' => 'Comala'] , ['estado_id' => 9, 'municipio' => 'Coquimatlán'] , ['estado_id' 
            => 9, 'municipio' => 'Cuauhtémoc'] , ['estado_id' => 9, 'municipio' => 'Ixtlahuacán'] , ['estado_id' => 9, 
            'municipio' => 'Manzanillo'] , ['estado_id' => 9, 'municipio' => 'Minatitlán'] , ['estado_id' => 9, 
            'municipio' => 'Tecomán'] , ['estado_id' => 9, 'municipio' => 'Villa De Álvarez'] , ['estado_id' => 10, 
            'municipio' => 'Canatlán'] , ['estado_id' => 10, 'municipio' => 'Canelas'] , ['estado_id' => 10, 'municipio' 
            => 'Coneto De Comonfort'] , ['estado_id' => 10, 'municipio' => 'Cuencamé'] , ['estado_id' => 10, 'municipio' 
            => 'Durango'] , ['estado_id' => 10, 'municipio' => 'General Simón Bolívar'] , ['estado_id' => 10, 'municipio' 
            => 'Gómez Palacio'] , ['estado_id' => 10, 'municipio' => 'Guadalupe Victoria'] , ['estado_id' => 10, 
            'municipio' => 'Guanaceví'] , ['estado_id' => 10, 'municipio' => 'Hidalgo'] , ['estado_id' => 10, 'municipio' 
            => 'Indé'] , ['estado_id' => 10, 'municipio' => 'Lerdo'] , ['estado_id' => 10, 'municipio' => 'Mapimí'] , 
            ['estado_id' => 10, 'municipio' => 'Mezquital'] , ['estado_id' => 10, 'municipio' => 'Nazas'] , ['estado_id' 
            => 10, 'municipio' => 'Nombre De Dios'] , ['estado_id' => 10, 'municipio' => 'Ocampo'] , ['estado_id' => 10, 
            'municipio' => 'El Oro'] , ['estado_id' => 10, 'municipio' => 'Otáez'] , ['estado_id' => 10, 'municipio' => 
            'Pánuco De Coronado'] , ['estado_id' => 10, 'municipio' => 'Peñón Blanco'] , ['estado_id' => 10, 'municipio' 
            => 'Poanas'] , ['estado_id' => 10, 'municipio' => 'Pueblo Nuevo'] , ['estado_id' => 10, 'municipio' => 
            'Rodeo'] , ['estado_id' => 10, 'municipio' => 'San Bernardo'] , ['estado_id' => 10, 'municipio' => 'San 
            Dimas'] , ['estado_id' => 10, 'municipio' => 'San Juan De Guadalupe'] , ['estado_id' => 10, 'municipio' => 
            'San Juan Del Río'] , ['estado_id' => 10, 'municipio' => 'San Luis Del Cordero'] , ['estado_id' => 10, 
            'municipio' => 'San Pedro Del Gallo'] , ['estado_id' => 10, 'municipio' => 'Santa Clara'] , ['estado_id' => 
            10, 'municipio' => 'Santiago Papasquiaro'] , ['estado_id' => 10, 'municipio' => 'Súchil'] , ['estado_id' => 
            10, 'municipio' => 'Tamazula'] , ['estado_id' => 10, 'municipio' => 'Tepehuanes'] , ['estado_id' => 10, 
            'municipio' => 'Tlahualilo'] , ['estado_id' => 10, 'municipio' => 'Topia'] , ['estado_id' => 10, 'municipio' 
            => 'Vicente Guerrero'] , ['estado_id' => 10, 'municipio' => 'Nuevo Ideal'] , ['estado_id' => 11, 'municipio' 
            => 'Abasolo'] , ['estado_id' => 11, 'municipio' => 'Acámbaro'] , ['estado_id' => 11, 'municipio' => 'San 
            Miguel De Allende'] , ['estado_id' => 11, 'municipio' => 'Apaseo El Alto'] , ['estado_id' => 11, 'municipio' 
            => 'Apaseo El Grande'] , ['estado_id' => 11, 'municipio' => 'Atarjea'] , ['estado_id' => 11, 'municipio' => 
            'Celaya'] , ['estado_id' => 11, 'municipio' => 'Manuel Doblado'] , ['estado_id' => 11, 'municipio' => 
            'Comonfort'] , ['estado_id' => 11, 'municipio' => 'Coroneo'] , ['estado_id' => 11, 'municipio' => 'Cortazar'] 
            , ['estado_id' => 11, 'municipio' => 'Cuerámaro'] , ['estado_id' => 11, 'municipio' => 'Doctor Mora'] , 
            ['estado_id' => 11, 'municipio' => 'Dolores Hidalgo Cuna De La Independencia Nacional'] , ['estado_id' => 11, 
            'municipio' => 'Guanajuato'] , ['estado_id' => 11, 'municipio' => 'Huanímaro'] , ['estado_id' => 11, 
            'municipio' => 'Irapuato'] , ['estado_id' => 11, 'municipio' => 'Jaral Del Progreso'] , ['estado_id' => 11, 
            'municipio' => 'Jerécuaro'] , ['estado_id' => 11, 'municipio' => 'León'] , ['estado_id' => 11, 'municipio' => 
            'Moroleón'] , ['estado_id' => 11, 'municipio' => 'Ocampo'] , ['estado_id' => 11, 'municipio' => 'Pénjamo'] , 
            ['estado_id' => 11, 'municipio' => 'Pueblo Nuevo'] , ['estado_id' => 11, 'municipio' => 'Purísima Del Rincón'] 
            , ['estado_id' => 11, 'municipio' => 'Romita'] , ['estado_id' => 11, 'municipio' => 'Salamanca'] , 
            ['estado_id' => 11, 'municipio' => 'Salvatierra'] , ['estado_id' => 11, 'municipio' => 'San Diego De La 
            Unión'] , ['estado_id' => 11, 'municipio' => 'San Felipe'] , ['estado_id' => 11, 'municipio' => 'San Francisco 
            Del Rincón'] , ['estado_id' => 11, 'municipio' => 'San José Iturbide'] , ['estado_id' => 11, 'municipio' => 
            'San Luis De La Paz'] , ['estado_id' => 11, 'municipio' => 'Santa Catarina'] , ['estado_id' => 11, 'municipio' 
            => 'Santa Cruz De Juventino Rosas'] , ['estado_id' => 11, 'municipio' => 'Santiago Maravatío'] , ['estado_id' 
            => 11, 'municipio' => 'Silao De La Victoria'] , ['estado_id' => 11, 'municipio' => 'Tarandacuao'] , 
            ['estado_id' => 11, 'municipio' => 'Tarimoro'] , ['estado_id' => 11, 'municipio' => 'Tierra Blanca'] , 
            ['estado_id' => 11, 'municipio' => 'Uriangato'] , ['estado_id' => 11, 'municipio' => 'Valle De Santiago'] , 
            ['estado_id' => 11, 'municipio' => 'Victoria'] , ['estado_id' => 11, 'municipio' => 'Villagrán'] , 
            ['estado_id' => 11, 'municipio' => 'Xichú'] , ['estado_id' => 11, 'municipio' => 'Yuriria'] , ['estado_id' => 
            12, 'municipio' => 'Acapulco De Juárez'] , ['estado_id' => 12, 'municipio' => 'Ahuacuotzingo'] , ['estado_id' 
            => 12, 'municipio' => 'Ajuchitlán Del Progreso'] , ['estado_id' => 12, 'municipio' => 'Alcozauca De Guerrero'] 
            , ['estado_id' => 12, 'municipio' => 'Alpoyeca'] , ['estado_id' => 12, 'municipio' => 'Apaxtla'] , 
            ['estado_id' => 12, 'municipio' => 'Arcelia'] , ['estado_id' => 12, 'municipio' => 'Atenango Del Río'] , 
            ['estado_id' => 12, 'municipio' => 'Atlamajalcingo Del Monte'] , ['estado_id' => 12, 'municipio' => 
            'Atlixtac'] , ['estado_id' => 12, 'municipio' => 'Atoyac De Álvarez'] , ['estado_id' => 12, 'municipio' => 
            'Ayutla De Los Libres'] , ['estado_id' => 12, 'municipio' => 'Azoyú'] , ['estado_id' => 12, 'municipio' => 
            'Benito Juárez'] , ['estado_id' => 12, 'municipio' => 'Buenavista De Cuéllar'] , ['estado_id' => 12, 
            'municipio' => 'Coahuayutla De José María Izazaga'] , ['estado_id' => 12, 'municipio' => 'Cocula'] , 
            ['estado_id' => 12, 'municipio' => 'Copala'] , ['estado_id' => 12, 'municipio' => 'Copalillo'] , ['estado_id' 
            => 12, 'municipio' => 'Copanatoyac'] , ['estado_id' => 12, 'municipio' => 'Coyuca De Benítez'] , ['estado_id' 
            => 12, 'municipio' => 'Coyuca De Catalán'] , ['estado_id' => 12, 'municipio' => 'Cuajinicuilapa'] , 
            ['estado_id' => 12, 'municipio' => 'Cualác'] , ['estado_id' => 12, 'municipio' => 'Cuautepec'] , ['estado_id' 
            => 12, 'municipio' => 'Cuetzala Del Progreso'] , ['estado_id' => 12, 'municipio' => 'Cutzamala De Pinzón'] , 
            ['estado_id' => 12, 'municipio' => 'Chilapa De Álvarez'] , ['estado_id' => 12, 'municipio' => 'Chilpancingo De 
            Los Bravo'] , ['estado_id' => 12, 'municipio' => 'Florencio Villarreal'] , ['estado_id' => 12, 'municipio' => 
            'General Canuto A. Neri'] , ['estado_id' => 12, 'municipio' => 'General Heliodoro Castillo'] , ['estado_id' => 
            12, 'municipio' => 'Huamuxtitlán'] , ['estado_id' => 12, 'municipio' => 'Huitzuco De Los Figueroa'] , 
            ['estado_id' => 12, 'municipio' => 'Iguala De La Independencia'] , ['estado_id' => 12, 'municipio' => 
            'Igualapa'] , ['estado_id' => 12, 'municipio' => 'Ixcateopan De Cuauhtémoc'] , ['estado_id' => 12, 'municipio' 
            => 'Zihuatanejo De Azueta'] , ['estado_id' => 12, 'municipio' => 'Juan R. Escudero'] , ['estado_id' => 12, 
            'municipio' => 'Leonardo Bravo'] , ['estado_id' => 12, 'municipio' => 'Malinaltepec'] , ['estado_id' => 12, 
            'municipio' => 'Mártir De Cuilapan'] , ['estado_id' => 12, 'municipio' => 'Metlatónoc'] , ['estado_id' => 12, 
            'municipio' => 'Mochitlán'] , ['estado_id' => 12, 'municipio' => 'Olinalá'] , ['estado_id' => 12, 'municipio' 
            => 'Ometepec'] , ['estado_id' => 12, 'municipio' => 'Pedro Ascencio Alquisiras'] , ['estado_id' => 12, 
            'municipio' => 'Petatlán'] , ['estado_id' => 12, 'municipio' => 'Pilcaya'] , ['estado_id' => 12, 'municipio' 
            => 'Pungarabato'] , ['estado_id' => 12, 'municipio' => 'Quechultenango'] , ['estado_id' => 12, 'municipio' => 
            'San Luis Acatlán'] , ['estado_id' => 12, 'municipio' => 'San Marcos'] , ['estado_id' => 12, 'municipio' => 
            'San Miguel Totolapan'] , ['estado_id' => 12, 'municipio' => 'Taxco De Alarcón'] , ['estado_id' => 12, 
            'municipio' => 'Tecoanapa'] , ['estado_id' => 12, 'municipio' => 'Técpan De Galeana'] , ['estado_id' => 12, 
            'municipio' => 'Teloloapan'] , ['estado_id' => 12, 'municipio' => 'Tepecoacuilco De Trujano'] , ['estado_id' 
            => 12, 'municipio' => 'Tetipac'] , ['estado_id' => 12, 'municipio' => 'Tixtla De Guerrero'] , ['estado_id' => 
            12, 'municipio' => 'Tlacoachistlahuaca'] , ['estado_id' => 12, 'municipio' => 'Tlacoapa'] , ['estado_id' => 
            12, 'municipio' => 'Tlalchapa'] , ['estado_id' => 12, 'municipio' => 'Tlalixtaquilla De Maldonado'] , 
            ['estado_id' => 12, 'municipio' => 'Tlapa De Comonfort'] , ['estado_id' => 12, 'municipio' => 'Tlapehuala'] , 
            ['estado_id' => 12, 'municipio' => 'La Unión De Isidoro Montes De Oca'] , ['estado_id' => 12, 'municipio' => 
            'Xalpatláhuac'] , ['estado_id' => 12, 'municipio' => 'Xochihuehuetlán'] , ['estado_id' => 12, 'municipio' => 
            'Xochistlahuaca'] , ['estado_id' => 12, 'municipio' => 'Zapotitlán Tablas'] , ['estado_id' => 12, 'municipio' 
            => 'Zirándaro'] , ['estado_id' => 12, 'municipio' => 'Zitlala'] , ['estado_id' => 12, 'municipio' => 'Eduardo 
            Neri'] , ['estado_id' => 12, 'municipio' => 'Acatepec'] , ['estado_id' => 12, 'municipio' => 'Marquelia'] , 
            ['estado_id' => 12, 'municipio' => 'Cochoapa El Grande'] , ['estado_id' => 12, 'municipio' => 'José Joaquín De 
            Herrera'] , ['estado_id' => 12, 'municipio' => 'Juchitán'] , ['estado_id' => 12, 'municipio' => 'Iliatenco'] , 
            ['estado_id' => 13, 'municipio' => 'Acatlán'] , ['estado_id' => 13, 'municipio' => 'Acaxochitlán'] , 
            ['estado_id' => 13, 'municipio' => 'Actopan'] , ['estado_id' => 13, 'municipio' => 'Agua Blanca De Iturbide'] 
            , ['estado_id' => 13, 'municipio' => 'Ajacuba'] , ['estado_id' => 13, 'municipio' => 'Alfajayucan'] , 
            ['estado_id' => 13, 'municipio' => 'Almoloya'] , ['estado_id' => 13, 'municipio' => 'Apan'] , ['estado_id' => 
            13, 'municipio' => 'El Arenal'] , ['estado_id' => 13, 'municipio' => 'Atitalaquia'] , ['estado_id' => 13, 
            'municipio' => 'Atlapexco'] , ['estado_id' => 13, 'municipio' => 'Atotonilco El Grande'] , ['estado_id' => 13, 
            'municipio' => 'Atotonilco De Tula'] , ['estado_id' => 13, 'municipio' => 'Calnali'] , ['estado_id' => 13, 
            'municipio' => 'Cardonal'] , ['estado_id' => 13, 'municipio' => 'Cuautepec De Hinojosa'] , ['estado_id' => 13, 
            'municipio' => 'Chapantongo'] , ['estado_id' => 13, 'municipio' => 'Chapulhuacán'] , ['estado_id' => 13, 
            'municipio' => 'Chilcuautla'] , ['estado_id' => 13, 'municipio' => 'Eloxochitlán'] , ['estado_id' => 13, 
            'municipio' => 'Emiliano Zapata'] , ['estado_id' => 13, 'municipio' => 'Epazoyucan'] , ['estado_id' => 13, 
            'municipio' => 'Francisco I. Madero'] , ['estado_id' => 13, 'municipio' => 'Huasca De Ocampo'] , ['estado_id' 
            => 13, 'municipio' => 'Huautla'] , ['estado_id' => 13, 'municipio' => 'Huazalingo'] , ['estado_id' => 13, 
            'municipio' => 'Huehuetla'] , ['estado_id' => 13, 'municipio' => 'Huejutla De Reyes'] , ['estado_id' => 13, 
            'municipio' => 'Huichapan'] , ['estado_id' => 13, 'municipio' => 'Ixmiquilpan'] , ['estado_id' => 13, 
            'municipio' => 'Jacala De Ledezma'] , ['estado_id' => 13, 'municipio' => 'Jaltocán'] , ['estado_id' => 13, 
            'municipio' => 'Juárez Hidalgo'] , ['estado_id' => 13, 'municipio' => 'Lolotla'] , ['estado_id' => 13, 
            'municipio' => 'Metepec'] , ['estado_id' => 13, 'municipio' => 'San Agustín Metzquititlán'] , ['estado_id' => 
            13, 'municipio' => 'Metztitlán'] , ['estado_id' => 13, 'municipio' => 'Mineral Del Chico'] , ['estado_id' => 
            13, 'municipio' => 'Mineral Del Monte'] , ['estado_id' => 13, 'municipio' => 'La Misión'] , ['estado_id' => 
            13, 'municipio' => 'Mixquiahuala De Juárez'] , ['estado_id' => 13, 'municipio' => 'Molango De Escamilla'] , 
            ['estado_id' => 13, 'municipio' => 'Nicolás Flores'] , ['estado_id' => 13, 'municipio' => 'Nopala De 
            Villagrán'] , ['estado_id' => 13, 'municipio' => 'Omitlán De Juárez'] , ['estado_id' => 13, 'municipio' => 
            'San Felipe Orizatlán'] , ['estado_id' => 13, 'municipio' => 'Pacula'] , ['estado_id' => 13, 'municipio' => 
            'Pachuca De Soto'] , ['estado_id' => 13, 'municipio' => 'Pisaflores'] , ['estado_id' => 13, 'municipio' => 
            'Progreso De Obregón'] , ['estado_id' => 13, 'municipio' => 'Mineral De La Reforma'] , ['estado_id' => 13, 
            'municipio' => 'San Agustín Tlaxiaca'] , ['estado_id' => 13, 'municipio' => 'San Bartolo Tutotepec'] , 
            ['estado_id' => 13, 'municipio' => 'San Salvador'] , ['estado_id' => 13, 'municipio' => 'Santiago De Anaya'] , 
            ['estado_id' => 13, 'municipio' => 'Santiago Tulantepec De Lugo Guerrero'] , ['estado_id' => 13, 'municipio' 
            => 'Singuilucan'] , ['estado_id' => 13, 'municipio' => 'Tasquillo'] , ['estado_id' => 13, 'municipio' => 
            'Tecozautla'] , ['estado_id' => 13, 'municipio' => 'Tenango De Doria'] , ['estado_id' => 13, 'municipio' => 
            'Tepeapulco'] , ['estado_id' => 13, 'municipio' => 'Tepehuacán De Guerrero'] , ['estado_id' => 13, 'municipio' 
            => 'Tepeji Del Río De Ocampo'] , ['estado_id' => 13, 'municipio' => 'Tepetitlán'] , ['estado_id' => 13, 
            'municipio' => 'Tetepango'] , ['estado_id' => 13, 'municipio' => 'Villa De Tezontepec'] , ['estado_id' => 13, 
            'municipio' => 'Tezontepec De Aldama'] , ['estado_id' => 13, 'municipio' => 'Tianguistengo'] , ['estado_id' => 
            13, 'municipio' => 'Tizayuca'] , ['estado_id' => 13, 'municipio' => 'Tlahuelilpan'] , ['estado_id' => 13, 
            'municipio' => 'Tlahuiltepa'] , ['estado_id' => 13, 'municipio' => 'Tlanalapa'] , ['estado_id' => 13, 
            'municipio' => 'Tlanchinol'] , ['estado_id' => 13, 'municipio' => 'Tlaxcoapan'] , ['estado_id' => 13, 
            'municipio' => 'Tolcayuca'] , ['estado_id' => 13, 'municipio' => 'Tula De Allende'] , ['estado_id' => 13, 
            'municipio' => 'Tulancingo De Bravo'] , ['estado_id' => 13, 'municipio' => 'Xochiatipan'] , ['estado_id' => 
            13, 'municipio' => 'Xochicoatlán'] , ['estado_id' => 13, 'municipio' => 'Yahualica'] , ['estado_id' => 13, 
            'municipio' => 'Zacualtipán De Ángeles'] , ['estado_id' => 13, 'municipio' => 'Zapotlán De Juárez'] , 
            ['estado_id' => 13, 'municipio' => 'Zempoala'] , ['estado_id' => 13, 'municipio' => 'Zimapán'] , ['estado_id' 
            => 14, 'municipio' => 'Acatic'] , ['estado_id' => 14, 'municipio' => 'Acatlán De Juárez'] , ['estado_id' => 
            14, 'municipio' => 'Ahualulco De Mercado'] , ['estado_id' => 14, 'municipio' => 'Amacueca'] , ['estado_id' => 
            14, 'municipio' => 'Amatitán'] , ['estado_id' => 14, 'municipio' => 'Ameca'] , ['estado_id' => 14, 'municipio' 
            => 'San Juanito De Escobedo'] , ['estado_id' => 14, 'municipio' => 'Arandas'] , ['estado_id' => 14, 
            'municipio' => 'El Arenal'] , ['estado_id' => 14, 'municipio' => 'Atemajac De Brizuela'] , ['estado_id' => 14, 
            'municipio' => 'Atengo'] , ['estado_id' => 14, 'municipio' => 'Atenguillo'] , ['estado_id' => 14, 'municipio' 
            => 'Atotonilco El Alto'] , ['estado_id' => 14, 'municipio' => 'Atoyac'] , ['estado_id' => 14, 'municipio' => 
            'Autlán De Navarro'] , ['estado_id' => 14, 'municipio' => 'Ayotlán'] , ['estado_id' => 14, 'municipio' => 
            'Ayutla'] , ['estado_id' => 14, 'municipio' => 'La Barca'] , ['estado_id' => 14, 'municipio' => 'Bolaños'] , 
            ['estado_id' => 14, 'municipio' => 'Cabo Corrientes'] , ['estado_id' => 14, 'municipio' => 'Casimiro 
            Castillo'] , ['estado_id' => 14, 'municipio' => 'Cihuatlán'] , ['estado_id' => 14, 'municipio' => 'Zapotlán El 
            Grande'] , ['estado_id' => 14, 'municipio' => 'Cocula'] , ['estado_id' => 14, 'municipio' => 'Colotlán'] , 
            ['estado_id' => 14, 'municipio' => 'Concepción De Buenos Aires'] , ['estado_id' => 14, 'municipio' => 
            'Cuautitlán De García Barragán'] , ['estado_id' => 14, 'municipio' => 'Cuautla'] , ['estado_id' => 14, 
            'municipio' => 'Cuquío'] , ['estado_id' => 14, 'municipio' => 'Chapala'] , ['estado_id' => 14, 'municipio' => 
            'Chimaltitán'] , ['estado_id' => 14, 'municipio' => 'Chiquilistlán'] , ['estado_id' => 14, 'municipio' => 
            'Degollado'] , ['estado_id' => 14, 'municipio' => 'Ejutla'] , ['estado_id' => 14, 'municipio' => 'Encarnación 
            De Díaz'] , ['estado_id' => 14, 'municipio' => 'Etzatlán'] , ['estado_id' => 14, 'municipio' => 'El Grullo'] , 
            ['estado_id' => 14, 'municipio' => 'Guachinango'] , ['estado_id' => 14, 'municipio' => 'Guadalajara'] , 
            ['estado_id' => 14, 'municipio' => 'Hostotipaquillo'] , ['estado_id' => 14, 'municipio' => 'Huejúcar'] , 
            ['estado_id' => 14, 'municipio' => 'Huejuquilla El Alto'] , ['estado_id' => 14, 'municipio' => 'La Huerta'] , 
            ['estado_id' => 14, 'municipio' => 'Ixtlahuacán De Los Membrillos'] , ['estado_id' => 14, 'municipio' => 
            'Ixtlahuacán Del Río'] , ['estado_id' => 14, 'municipio' => 'Jalostotitlán'] , ['estado_id' => 14, 'municipio' 
            => 'Jamay'] , ['estado_id' => 14, 'municipio' => 'Jesús María'] , ['estado_id' => 14, 'municipio' => 'Jilotlán 
            De Los Dolores'] , ['estado_id' => 14, 'municipio' => 'Jocotepec'] , ['estado_id' => 14, 'municipio' => 
            'Juanacatlán'] , ['estado_id' => 14, 'municipio' => 'Juchitlán'] , ['estado_id' => 14, 'municipio' => 'Lagos 
            De Moreno'] , ['estado_id' => 14, 'municipio' => 'El Limón'] , ['estado_id' => 14, 'municipio' => 'Magdalena'] 
            , ['estado_id' => 14, 'municipio' => 'Santa María Del Oro'] , ['estado_id' => 14, 'municipio' => 'La 
            Manzanilla De La Paz'] , ['estado_id' => 14, 'municipio' => 'Mascota'] , ['estado_id' => 14, 'municipio' => 
            'Mazamitla'] , ['estado_id' => 14, 'municipio' => 'Mexticacán'] , ['estado_id' => 14, 'municipio' => 
            'Mezquitic'] , ['estado_id' => 14, 'municipio' => 'Mixtlán'] , ['estado_id' => 14, 'municipio' => 'Ocotlán'] , 
            ['estado_id' => 14, 'municipio' => 'Ojuelos De Jalisco'] , ['estado_id' => 14, 'municipio' => 'Pihuamo'] , 
            ['estado_id' => 14, 'municipio' => 'Poncitlán'] , ['estado_id' => 14, 'municipio' => 'Puerto Vallarta'] , 
            ['estado_id' => 14, 'municipio' => 'Villa Purificación'] , ['estado_id' => 14, 'municipio' => 'Quitupan'] , 
            ['estado_id' => 14, 'municipio' => 'El Salto'] , ['estado_id' => 14, 'municipio' => 'San Cristóbal De La 
            Barranca'] , ['estado_id' => 14, 'municipio' => 'San Diego De Alejandría'] , ['estado_id' => 14, 'municipio' 
            => 'San Juan De Los Lagos'] , ['estado_id' => 14, 'municipio' => 'San Julián'] , ['estado_id' => 14, 
            'municipio' => 'San Marcos'] , ['estado_id' => 14, 'municipio' => 'San Martín De Bolaños'] , ['estado_id' => 
            14, 'municipio' => 'San Martín Hidalgo'] , ['estado_id' => 14, 'municipio' => 'San Miguel El Alto'] , 
            ['estado_id' => 14, 'municipio' => 'Gómez Farías'] , ['estado_id' => 14, 'municipio' => 'San Sebastián Del 
            Oeste'] , ['estado_id' => 14, 'municipio' => 'Santa María De Los Ángeles'] , ['estado_id' => 14, 'municipio' 
            => 'Sayula'] , ['estado_id' => 14, 'municipio' => 'Tala'] , ['estado_id' => 14, 'municipio' => 'Talpa De 
            Allende'] , ['estado_id' => 14, 'municipio' => 'Tamazula De Gordiano'] , ['estado_id' => 14, 'municipio' => 
            'Tapalpa'] , ['estado_id' => 14, 'municipio' => 'Tecalitlán'] , ['estado_id' => 14, 'municipio' => 
            'Tecolotlán'] , ['estado_id' => 14, 'municipio' => 'Techaluta De Montenegro'] , ['estado_id' => 14, 
            'municipio' => 'Tenamaxtlán'] , ['estado_id' => 14, 'municipio' => 'Teocaltiche'] , ['estado_id' => 14, 
            'municipio' => 'Teocuitatlán De Corona'] , ['estado_id' => 14, 'municipio' => 'Tepatitlán De Morelos'] , 
            ['estado_id' => 14, 'municipio' => 'Tequila'] , ['estado_id' => 14, 'municipio' => 'Teuchitlán'] , 
            ['estado_id' => 14, 'municipio' => 'Tizapán El Alto'] , ['estado_id' => 14, 'municipio' => 'Tlajomulco De 
            Zúñiga'] , ['estado_id' => 14, 'municipio' => 'San Pedro Tlaquepaque'] , ['estado_id' => 14, 'municipio' => 
            'Tolimán'] , ['estado_id' => 14, 'municipio' => 'Tomatlán'] , ['estado_id' => 14, 'municipio' => 'Tonalá'] , 
            ['estado_id' => 14, 'municipio' => 'Tonaya'] , ['estado_id' => 14, 'municipio' => 'Tonila'] , ['estado_id' => 
            14, 'municipio' => 'Totatiche'] , ['estado_id' => 14, 'municipio' => 'Tototlán'] , ['estado_id' => 14, 
            'municipio' => 'Tuxcacuesco'] , ['estado_id' => 14, 'municipio' => 'Tuxcueca'] , ['estado_id' => 14, 
            'municipio' => 'Tuxpan'] , ['estado_id' => 14, 'municipio' => 'Unión De San Antonio'] , ['estado_id' => 14, 
            'municipio' => 'Unión De Tula'] , ['estado_id' => 14, 'municipio' => 'Valle De Guadalupe'] , ['estado_id' => 
            14, 'municipio' => 'Valle De Juárez'] , ['estado_id' => 14, 'municipio' => 'San Gabriel'] , ['estado_id' => 
            14, 'municipio' => 'Villa Corona'] , ['estado_id' => 14, 'municipio' => 'Villa Guerrero'] , ['estado_id' => 
            14, 'municipio' => 'Villa Hidalgo'] , ['estado_id' => 14, 'municipio' => 'Cañadas De Obregón'] , ['estado_id' 
            => 14, 'municipio' => 'Yahualica De González Gallo'] , ['estado_id' => 14, 'municipio' => 'Zacoalco De 
            Torres'] , ['estado_id' => 14, 'municipio' => 'Zapopan'] , ['estado_id' => 14, 'municipio' => 'Zapotiltic'] , 
            ['estado_id' => 14, 'municipio' => 'Zapotitlán De Vadillo'] , ['estado_id' => 14, 'municipio' => 'Zapotlán Del 
            Rey'] , ['estado_id' => 14, 'municipio' => 'Zapotlanejo'] , ['estado_id' => 14, 'municipio' => 'San Ignacio 
            Cerro Gordo'] , ['estado_id' => 15, 'municipio' => 'Acambay De Ruíz Castañeda'] , ['estado_id' => 15, 
            'municipio' => 'Acolman'] , ['estado_id' => 15, 'municipio' => 'Aculco'] , ['estado_id' => 15, 'municipio' => 
            'Almoloya De Alquisiras'] , ['estado_id' => 15, 'municipio' => 'Almoloya De Juárez'] , ['estado_id' => 15, 
            'municipio' => 'Almoloya Del Río'] , ['estado_id' => 15, 'municipio' => 'Amanalco'] , ['estado_id' => 15, 
            'municipio' => 'Amatepec'] , ['estado_id' => 15, 'municipio' => 'Amecameca'] , ['estado_id' => 15, 'municipio' 
            => 'Apaxco'], ['estado_id' => 15, 'municipio' => 'Atenco'] , ['estado_id' => 15, 'municipio' => 'Atizapán'] , 
            ['estado_id' => 15, 'municipio' => 'Atizapán De Zaragoza'] , ['estado_id' => 15, 'municipio' => 'Atlacomulco'] 
            , ['estado_id' => 15, 'municipio' => 'Atlautla'] , ['estado_id' => 15, 'municipio' => 'Axapusco'] , 
            ['estado_id' => 15, 'municipio' => 'Ayapango'] , ['estado_id' => 15, 'municipio' => 'Calimaya'] , ['estado_id' 
            => 15, 'municipio' => 'Capulhuac'] , ['estado_id' => 15, 'municipio' => 'Coacalco De Berriozábal'] , 
            ['estado_id' => 15, 'municipio' => 'Coatepec Harinas'] , ['estado_id' => 15, 'municipio' => 'Cocotitlán'] , 
            ['estado_id' => 15, 'municipio' => 'Coyotepec'] , ['estado_id' => 15, 'municipio' => 'Cuautitlán'] , 
            ['estado_id' => 15, 'municipio' => 'Chalco'] , ['estado_id' => 15, 'municipio' => 'Chapa De Mota'] , 
            ['estado_id' => 15, 'municipio' => 'Chapultepec'] , ['estado_id' => 15, 'municipio' => 'Chiautla'] , 
            ['estado_id' => 15, 'municipio' => 'Chicoloapan'] , ['estado_id' => 15, 'municipio' => 'Chiconcuac'] , 
            ['estado_id' => 15, 'municipio' => 'Chimalhuacán'] , ['estado_id' => 15, 'municipio' => 'Donato Guerra'] , 
            ['estado_id' => 15, 'municipio' => 'Ecatepec De Morelos'] , ['estado_id' => 15, 'municipio' => 'Ecatzingo'] , 
            ['estado_id' => 15, 'municipio' => 'Huehuetoca'] , ['estado_id' => 15, 'municipio' => 'Hueypoxtla'] , 
            ['estado_id' => 15, 'municipio' => 'Huixquilucan'] , ['estado_id' => 15, 'municipio' => 'Isidro Fabela'] , 
            ['estado_id' => 15, 'municipio' => 'Ixtapaluca'] , ['estado_id' => 15, 'municipio' => 'Ixtapan De La Sal'] , 
            ['estado_id' => 15, 'municipio' => 'Ixtapan Del Oro'] , ['estado_id' => 15, 'municipio' => 'Ixtlahuaca'] , 
            ['estado_id' => 15, 'municipio' => 'Xalatlaco'] , ['estado_id' => 15, 'municipio' => 'Jaltenco'] , 
            ['estado_id' => 15, 'municipio' => 'Jilotepec'] , ['estado_id' => 15, 'municipio' => 'Jilotzingo'] , 
            ['estado_id' => 15, 'municipio' => 'Jiquipilco'] , ['estado_id' => 15, 'municipio' => 'Jocotitlán'] , 
            ['estado_id' => 15, 'municipio' => 'Joquicingo'] , ['estado_id' => 15, 'municipio' => 'Juchitepec'] , 
            ['estado_id' => 15, 'municipio' => 'Lerma'] , ['estado_id' => 15, 'municipio' => 'Malinalco'] , ['estado_id' 
            => 15, 'municipio' => 'Melchor Ocampo'] , ['estado_id' => 15, 'municipio' => 'Metepec'] , ['estado_id' => 15, 
            'municipio' => 'Mexicaltzingo'] , ['estado_id' => 15, 'municipio' => 'Morelos'] , ['estado_id' => 15, 
            'municipio' => 'Naucalpan De Juárez'] , ['estado_id' => 15, 'municipio' => 'Nezahualcóyotl'] , ['estado_id' => 
            15, 'municipio' => 'Nextlalpan'] , ['estado_id' => 15, 'municipio' => 'Nicolás Romero'] , ['estado_id' => 15, 
            'municipio' => 'Nopaltepec'] , ['estado_id' => 15, 'municipio' => 'Ocoyoacac'] , ['estado_id' => 15, 
            'municipio' => 'Ocuilan'] , ['estado_id' => 15, 'municipio' => 'El Oro'] , ['estado_id' => 15, 'municipio' => 
            'Otumba'] , ['estado_id' => 15, 'municipio' => 'Otzoloapan'] , ['estado_id' => 15, 'municipio' => 
            'Otzolotepec'] , ['estado_id' => 15, 'municipio' => 'Ozumba'] , ['estado_id' => 15, 'municipio' => 
            'Papalotla'] , ['estado_id' => 15, 'municipio' => 'La Paz'] , ['estado_id' => 15, 'municipio' => 'Polotitlán'] 
            , ['estado_id' => 15, 'municipio' => 'Rayón'] , ['estado_id' => 15, 'municipio' => 'San Antonio La Isla'] , 
            ['estado_id' => 15, 'municipio' => 'San Felipe Del Progreso'] , ['estado_id' => 15, 'municipio' => 'San Martín 
            De Las Pirámides'] , ['estado_id' => 15, 'municipio' => 'San Mateo Atenco'] , ['estado_id' => 15, 'municipio' 
            => 'San Simón De Guerrero'] , ['estado_id' => 15, 'municipio' => 'Santo Tomás'] , ['estado_id' => 15, 
            'municipio' => 'Soyaniquilpan De Juárez'] , ['estado_id' => 15, 'municipio' => 'Sultepec'] , ['estado_id' => 
            15, 'municipio' => 'Tecámac'] , ['estado_id' => 15, 'municipio' => 'Tejupilco'] , ['estado_id' => 15, 
            'municipio' => 'Temamatla'] , ['estado_id' => 15, 'municipio' => 'Temascalapa'] , ['estado_id' => 15, 
            'municipio' => 'Temascalcingo'] , ['estado_id' => 15, 'municipio' => 'Temascaltepec'] , ['estado_id' => 15, 
            'municipio' => 'Temoaya'] , ['estado_id' => 15, 'municipio' => 'Tenancingo'] , ['estado_id' => 15, 'municipio' 
            => 'Tenango Del Aire'] , ['estado_id' => 15, 'municipio' => 'Tenango Del Valle'] , ['estado_id' => 15, 
            'municipio' => 'Teoloyucan'] , ['estado_id' => 15, 'municipio' => 'Teotihuacán'] , ['estado_id' => 15, 
            'municipio' => 'Tepetlaoxtoc'] , ['estado_id' => 15, 'municipio' => 'Tepetlixpa'] , ['estado_id' => 15, 
            'municipio' => 'Tepotzotlán'] , ['estado_id' => 15, 'municipio' => 'Tequixquiac'] , ['estado_id' => 15, 
            'municipio' => 'Texcaltitlán'] , ['estado_id' => 15, 'municipio' => 'Texcalyacac'] , ['estado_id' => 15, 
            'municipio' => 'Texcoco'] , ['estado_id' => 15, 'municipio' => 'Tezoyuca'] , ['estado_id' => 15, 'municipio' 
            => 'Tianguistenco'] , ['estado_id' => 15, 'municipio' => 'Timilpan'] , ['estado_id' => 15, 'municipio' => 
            'Tlalmanalco'] , ['estado_id' => 15, 'municipio' => 'Tlalnepantla De Baz'] , ['estado_id' => 15, 'municipio' 
            => 'Tlatlaya'] , ['estado_id' => 15, 'municipio' => 'Toluca'] , ['estado_id' => 15, 'municipio' => 'Tonatico'] 
            , ['estado_id' => 15, 'municipio' => 'Tultepec'] , ['estado_id' => 15, 'municipio' => 'Tultitlán'] , 
            ['estado_id' => 15, 'municipio' => 'Valle De Bravo'] , ['estado_id' => 15, 'municipio' => 'Villa De Allende'] 
            , ['estado_id' => 15, 'municipio' => 'Villa Del Carbón'] , ['estado_id' => 15, 'municipio' => 'Villa 
            Guerrero'] , ['estado_id' => 15, 'municipio' => 'Villa Victoria'] , ['estado_id' => 15, 'municipio' => 
            'Xonacatlán'] , ['estado_id' => 15, 'municipio' => 'Zacazonapan'] , ['estado_id' => 15, 'municipio' => 
            'Zacualpan'] , ['estado_id' => 15, 'municipio' => 'Zinacantepec'] , ['estado_id' => 15, 'municipio' => 
            'Zumpahuacán'] , ['estado_id' => 15, 'municipio' => 'Zumpango'] , ['estado_id' => 15, 'municipio' => 
            'Cuautitlán Izcalli'] , ['estado_id' => 15, 'municipio' => 'Valle De Chalco Solidaridad'] , ['estado_id' => 
            15, 'municipio' => 'Luvianos'] , ['estado_id' => 15, 'municipio' => 'San José Del Rincón'] , ['estado_id' => 
            15, 'municipio' => 'Tonanitla'] , ['estado_id' => 16, 'municipio' => 'Acuitzio'] , ['estado_id' => 16, 
            'municipio' => 'Aguililla'] , ['estado_id' => 16, 'municipio' => 'Álvaro Obregón'] , ['estado_id' => 16, 
            'municipio' => 'Angamacutiro'] , ['estado_id' => 16, 'municipio' => 'Angangueo'] , ['estado_id' => 16, 
            'municipio' => 'Apatzingán'] , ['estado_id' => 16, 'municipio' => 'Aporo'] , ['estado_id' => 16, 'municipio' 
            => 'Aquila'] , ['estado_id' => 16, 'municipio' => 'Ario'] , ['estado_id' => 16, 'municipio' => 'Arteaga'] , 
            ['estado_id' => 16, 'municipio' => 'Briseñas'] , ['estado_id' => 16, 'municipio' => 'Buenavista'] , 
            ['estado_id' => 16, 'municipio' => 'Carácuaro'] , ['estado_id' => 16, 'municipio' => 'Coahuayana'] , 
            ['estado_id' => 16, 'municipio' => 'Coalcomán De Vázquez Pallares'] , ['estado_id' => 16, 'municipio' => 
            'Coeneo'] , ['estado_id' => 16, 'municipio' => 'Contepec'] , ['estado_id' => 16, 'municipio' => 'Copándaro'] , 
            ['estado_id' => 16, 'municipio' => 'Cotija'] , ['estado_id' => 16, 'municipio' => 'Cuitzeo'] , ['estado_id' => 
            16, 'municipio' => 'Charapan'] , ['estado_id' => 16, 'municipio' => 'Charo'] , ['estado_id' => 16, 'municipio' 
            => 'Chavinda'] , ['estado_id' => 16, 'municipio' => 'Cherán'] , ['estado_id' => 16, 'municipio' => 
            'Chilchota'] , ['estado_id' => 16, 'municipio' => 'Chinicuila'] , ['estado_id' => 16, 'municipio' => 
            'Chucándiro'] , ['estado_id' => 16, 'municipio' => 'Churintzio'] , ['estado_id' => 16, 'municipio' => 
            'Churumuco'] , ['estado_id' => 16, 'municipio' => 'Ecuandureo'] , ['estado_id' => 16, 'municipio' => 'Epitacio 
            Huerta'] , ['estado_id' => 16, 'municipio' => 'Erongarícuaro'] , ['estado_id' => 16, 'municipio' => 'Gabriel 
            Zamora'] , ['estado_id' => 16, 'municipio' => 'Hidalgo'] , ['estado_id' => 16, 'municipio' => 'La Huacana'] , 
            ['estado_id' => 16, 'municipio' => 'Huandacareo'] , ['estado_id' => 16, 'municipio' => 'Huaniqueo'] , 
            ['estado_id' => 16, 'municipio' => 'Huetamo'] , ['estado_id' => 16, 'municipio' => 'Huiramba'] , ['estado_id' 
            => 16, 'municipio' => 'Indaparapeo'] , ['estado_id' => 16, 'municipio' => 'Irimbo'] , ['estado_id' => 16, 
            'municipio' => 'Ixtlán'] , ['estado_id' => 16, 'municipio' => 'Jacona'] , ['estado_id' => 16, 'municipio' => 
            'Jiménez'] , ['estado_id' => 16, 'municipio' => 'Jiquilpan'] , ['estado_id' => 16, 'municipio' => 'Juárez'] , 
            ['estado_id' => 16, 'municipio' => 'Jungapeo'] , ['estado_id' => 16, 'municipio' => 'Lagunillas'] , 
            ['estado_id' => 16, 'municipio' => 'Madero'] , ['estado_id' => 16, 'municipio' => 'Maravatío'] , ['estado_id' 
            => 16, 'municipio' => 'Marcos Castellanos'] , ['estado_id' => 16, 'municipio' => 'Lázaro Cárdenas'] , 
            ['estado_id' => 16, 'municipio' => 'Morelia'] , ['estado_id' => 16, 'municipio' => 'Morelos'] , ['estado_id' 
            => 16, 'municipio' => 'Múgica'] , ['estado_id' => 16, 'municipio' => 'Nahuatzen'] , ['estado_id' => 16, 
            'municipio' => 'Nocupétaro'] , ['estado_id' => 16, 'municipio' => 'Nuevo Parangaricutiro'] , ['estado_id' => 
            16, 'municipio' => 'Nuevo Urecho'] , ['estado_id' => 16, 'municipio' => 'Numarán'] , ['estado_id' => 16, 
            'municipio' => 'Ocampo'] , ['estado_id' => 16, 'municipio' => 'Pajacuarán'] , ['estado_id' => 16, 'municipio' 
            => 'Panindícuaro'] , ['estado_id' => 16, 'municipio' => 'Parácuaro'] , ['estado_id' => 16, 'municipio' => 
            'Paracho'] , ['estado_id' => 16, 'municipio' => 'Pátzcuaro'] , ['estado_id' => 16, 'municipio' => 
            'Penjamillo'] , ['estado_id' => 16, 'municipio' => 'Peribán'] , ['estado_id' => 16, 'municipio' => 'La 
            Piedad'] , ['estado_id' => 16, 'municipio' => 'Purépero'] , ['estado_id' => 16, 'municipio' => 'Puruándiro'] , 
            ['estado_id' => 16, 'municipio' => 'Queréndaro'] , ['estado_id' => 16, 'municipio' => 'Quiroga'] , 
            ['estado_id' => 16, 'municipio' => 'Cojumatlán De Régules'] , ['estado_id' => 16, 'municipio' => 'Los Reyes'] 
            , ['estado_id' => 16, 'municipio' => 'Sahuayo'] , ['estado_id' => 16, 'municipio' => 'San Lucas'] , 
            ['estado_id' => 16, 'municipio' => 'Santa Ana Maya'] , ['estado_id' => 16, 'municipio' => 'Salvador 
            Escalante'] , ['estado_id' => 16, 'municipio' => 'Senguio'] , ['estado_id' => 16, 'municipio' => 'Susupuato'] 
            , ['estado_id' => 16, 'municipio' => 'Tacámbaro'] , ['estado_id' => 16, 'municipio' => 'Tancítaro'] , 
            ['estado_id' => 16, 'municipio' => 'Tangamandapio'] , ['estado_id' => 16, 'municipio' => 'Tangancícuaro'] , 
            ['estado_id' => 16, 'municipio' => 'Tanhuato'] , ['estado_id' => 16, 'municipio' => 'Taretan'] , ['estado_id' 
            => 16, 'municipio' => 'Tarímbaro'] , ['estado_id' => 16, 'municipio' => 'Tepalcatepec'] , ['estado_id' => 16, 
            'municipio' => 'Tingambato'] , ['estado_id' => 16, 'municipio' => 'Tingüindín'] , ['estado_id' => 16, 
            'municipio' => 'Tiquicheo De Nicolás Romero'] , ['estado_id' => 16, 'municipio' => 'Tlalpujahua'] , 
            ['estado_id' => 16, 'municipio' => 'Tlazazalca'] , ['estado_id' => 16, 'municipio' => 'Tocumbo'] , 
            ['estado_id' => 16, 'municipio' => 'Tumbiscatío'] , ['estado_id' => 16, 'municipio' => 'Turicato'] , 
            ['estado_id' => 16, 'municipio' => 'Tuxpan'] , ['estado_id' => 16, 'municipio' => 'Tuzantla'] , ['estado_id' 
            => 16, 'municipio' => 'Tzintzuntzan'] , ['estado_id' => 16, 'municipio' => 'Tzitzio'] , ['estado_id' => 16, 
            'municipio' => 'Uruapan'] , ['estado_id' => 16, 'municipio' => 'Venustiano Carranza'] , ['estado_id' => 16, 
            'municipio' => 'Villamar'] , ['estado_id' => 16, 'municipio' => 'Vista Hermosa'] , ['estado_id' => 16, 
            'municipio' => 'Yurécuaro'] , ['estado_id' => 16, 'municipio' => 'Zacapu'] , ['estado_id' => 16, 'municipio' 
            => 'Zamora'] , ['estado_id' => 16, 'municipio' => 'Zináparo'] , ['estado_id' => 16, 'municipio' => 
            'Zinapécuaro'] , ['estado_id' => 16, 'municipio' => 'Ziracuaretiro'] , ['estado_id' => 16, 'municipio' => 
            'Zitácuaro'] , ['estado_id' => 16, 'municipio' => 'José Sixto Verduzco'] , ['estado_id' => 17, 'municipio' => 
            'Amacuzac'] , ['estado_id' => 17, 'municipio' => 'Atlatlahucan'] , ['estado_id' => 17, 'municipio' => 
            'Axochiapan'] , ['estado_id' => 17, 'municipio' => 'Ayala'] , ['estado_id' => 17, 'municipio' => 'Coatlán Del 
            Río'] , ['estado_id' => 17, 'municipio' => 'Cuautla'] , ['estado_id' => 17, 'municipio' => 'Cuernavaca'] , 
            ['estado_id' => 17, 'municipio' => 'Emiliano Zapata'] , ['estado_id' => 17, 'municipio' => 'Huitzilac'] , 
            ['estado_id' => 17, 'municipio' => 'Jantetelco'] , ['estado_id' => 17, 'municipio' => 'Jiutepec'] , 
            ['estado_id' => 17, 'municipio' => 'Jojutla'] , ['estado_id' => 17, 'municipio' => 'Jonacatepec De Leandro 
            Valle'] , ['estado_id' => 17, 'municipio' => 'Mazatepec'] , ['estado_id' => 17, 'municipio' => 'Miacatlán'] , 
            ['estado_id' => 17, 'municipio' => 'Ocuituco'] , ['estado_id' => 17, 'municipio' => 'Puente De Ixtla'] , 
            ['estado_id' => 17, 'municipio' => 'Temixco'] , ['estado_id' => 17, 'municipio' => 'Tepalcingo'] , 
            ['estado_id' => 17, 'municipio' => 'Tepoztlán'] , ['estado_id' => 17, 'municipio' => 'Tetecala'] , 
            ['estado_id' => 17, 'municipio' => 'Tetela Del Volcán'] , ['estado_id' => 17, 'municipio' => 'Tlalnepantla'] , 
            ['estado_id' => 17, 'municipio' => 'Tlaltizapán De Zapata'] , ['estado_id' => 17, 'municipio' => 
            'Tlaquiltenango'] , ['estado_id' => 17, 'municipio' => 'Tlayacapan'] , ['estado_id' => 17, 'municipio' => 
            'Totolapan'] , ['estado_id' => 17, 'municipio' => 'Xochitepec'] , ['estado_id' => 17, 'municipio' => 
            'Yautepec'] , ['estado_id' => 17, 'municipio' => 'Yecapixtla'] , ['estado_id' => 17, 'municipio' => 
            'Zacatepec'] , ['estado_id' => 17, 'municipio' => 'Zacualpan De Amilpas'] , ['estado_id' => 17, 'municipio' => 
            'Temoac'] , ['estado_id' => 18, 'municipio' => 'Acaponeta'] , ['estado_id' => 18, 'municipio' => 'Ahuacatlán'] 
            , ['estado_id' => 18, 'municipio' => 'Amatlán De Cañas'] , ['estado_id' => 18, 'municipio' => 'Compostela'] , 
            ['estado_id' => 18, 'municipio' => 'Huajicori'] , ['estado_id' => 18, 'municipio' => 'Ixtlán Del Río'] , 
            ['estado_id' => 18, 'municipio' => 'Jala'] , ['estado_id' => 18, 'municipio' => 'Xalisco'] , ['estado_id' => 
            18, 'municipio' => 'Del Nayar'] , ['estado_id' => 18, 'municipio' => 'Rosamorada'] , ['estado_id' => 18, 
            'municipio' => 'Ruíz'] , ['estado_id' => 18, 'municipio' => 'San Blas'] , ['estado_id' => 18, 'municipio' => 
            'San Pedro Lagunillas'] , ['estado_id' => 18, 'municipio' => 'Santa María Del Oro'] , ['estado_id' => 18, 
            'municipio' => 'Santiago Ixcuintla'] , ['estado_id' => 18, 'municipio' => 'Tecuala'] , ['estado_id' => 18, 
            'municipio' => 'Tepic'] , ['estado_id' => 18, 'municipio' => 'Tuxpan'] , ['estado_id' => 18, 'municipio' => 
            'La Yesca'] , ['estado_id' => 18, 'municipio' => 'Bahía De Banderas'] , ['estado_id' => 19, 'municipio' => 
            'Abasolo'] , ['estado_id' => 19, 'municipio' => 'Agualeguas'] , ['estado_id' => 19, 'municipio' => 'Los 
            Aldamas'] , ['estado_id' => 19, 'municipio' => 'Allende'] , ['estado_id' => 19, 'municipio' => 'Anáhuac'] , 
            ['estado_id' => 19, 'municipio' => 'Apodaca'] , ['estado_id' => 19, 'municipio' => 'Aramberri'] , ['estado_id' 
            => 19, 'municipio' => 'Bustamante'] , ['estado_id' => 19, 'municipio' => 'Cadereyta Jiménez'] , ['estado_id' 
            => 19, 'municipio' => 'El Carmen'] , ['estado_id' => 19, 'municipio' => 'Cerralvo'] , ['estado_id' => 19, 
            'municipio' => 'Ciénega De Flores'] , ['estado_id' => 19, 'municipio' => 'China'] , ['estado_id' => 19, 
            'municipio' => 'Doctor Arroyo'] , ['estado_id' => 19, 'municipio' => 'Doctor Coss'] , ['estado_id' => 19, 
            'municipio' => 'Doctor González'] , ['estado_id' => 19, 'municipio' => 'Galeana'] , ['estado_id' => 19, 
            'municipio' => 'García'] , ['estado_id' => 19, 'municipio' => 'San Pedro Garza García'] , ['estado_id' => 19, 
            'municipio' => 'General Bravo'] , ['estado_id' => 19, 'municipio' => 'General Escobedo'] , ['estado_id' => 19, 
            'municipio' => 'General Terán'] , ['estado_id' => 19, 'municipio' => 'General Treviño'] , ['estado_id' => 19, 
            'municipio' => 'General Zaragoza'] , ['estado_id' => 19, 'municipio' => 'General Zuazua'] , ['estado_id' => 
            19, 'municipio' => 'Guadalupe'] , ['estado_id' => 19, 'municipio' => 'Los Herreras'] , ['estado_id' => 19, 
            'municipio' => 'Higueras'] , ['estado_id' => 19, 'municipio' => 'Hualahuises'] , ['estado_id' => 19, 
            'municipio' => 'Iturbide'] , ['estado_id' => 19, 'municipio' => 'Juárez'] , ['estado_id' => 19, 'municipio' => 
            'Lampazos De Naranjo'] , ['estado_id' => 19, 'municipio' => 'Linares'] , ['estado_id' => 19, 'municipio' => 
            'Marín'] , ['estado_id' => 19, 'municipio' => 'Melchor Ocampo'] , ['estado_id' => 19, 'municipio' => 'Mier Y 
            Noriega'] , ['estado_id' => 19, 'municipio' => 'Mina'] , ['estado_id' => 19, 'municipio' => 'Montemorelos'] , 
            ['estado_id' => 19, 'municipio' => 'Monterrey'] , ['estado_id' => 19, 'municipio' => 'Parás'] , ['estado_id' 
            => 19, 'municipio' => 'Pesquería'] , ['estado_id' => 19, 'municipio' => 'Los Ramones'] , ['estado_id' => 19, 
            'municipio' => 'Rayones'] , ['estado_id' => 19, 'municipio' => 'Sabinas Hidalgo'] , ['estado_id' => 19, 
            'municipio' => 'Salinas Victoria'] , ['estado_id' => 19, 'municipio' => 'San Nicolás De Los Garza'] , 
            ['estado_id' => 19, 'municipio' => 'Hidalgo'] , ['estado_id' => 19, 'municipio' => 'Santa Catarina'] , 
            ['estado_id' => 19, 'municipio' => 'Santiago'] , ['estado_id' => 19, 'municipio' => 'Vallecillo'] , 
            ['estado_id' => 19, 'municipio' => 'Villaldama'] , ['estado_id' => 20, 'municipio' => 'Abejones'] , 
            ['estado_id' => 20, 'municipio' => 'Acatlán De Pérez Figueroa'] , ['estado_id' => 20, 'municipio' => 'Asunción 
            Cacalotepec'] , ['estado_id' => 20, 'municipio' => 'Asunción Cuyotepeji'] , ['estado_id' => 20, 'municipio' => 
            'Asunción Ixtaltepec'] , ['estado_id' => 20, 'municipio' => 'Asunción Nochixtlán'] , ['estado_id' => 20, 
            'municipio' => 'Asunción Ocotlán'] , ['estado_id' => 20, 'municipio' => 'Asunción Tlacolulita'] , ['estado_id' 
            => 20, 'municipio' => 'Ayotzintepec'] , ['estado_id' => 20, 'municipio' => 'El Barrio De La Soledad'] , 
            ['estado_id' => 20, 'municipio' => 'Calihualá'] , ['estado_id' => 20, 'municipio' => 'Candelaria Loxicha'] , 
            ['estado_id' => 20, 'municipio' => 'Ciénega De Zimatlán'] , ['estado_id' => 20, 'municipio' => 'Ciudad 
            Ixtepec'] , ['estado_id' => 20, 'municipio' => 'Coatecas Altas'] , ['estado_id' => 20, 'municipio' => 
            'Coicoyán De Las Flores'] , ['estado_id' => 20, 'municipio' => 'La Compañía'] , ['estado_id' => 20, 
            'municipio' => 'Concepción Buenavista'] , ['estado_id' => 20, 'municipio' => 'Concepción Pápalo'] , 
            ['estado_id' => 20, 'municipio' => 'Constancia Del Rosario'] , ['estado_id' => 20, 'municipio' => 'Cosolapa'] 
            , ['estado_id' => 20, 'municipio' => 'Cosoltepec'] , ['estado_id' => 20, 'municipio' => 'Cuilápam De 
            Guerrero'] , ['estado_id' => 20, 'municipio' => 'Cuyamecalco Villa De Zaragoza'] , ['estado_id' => 20, 
            'municipio' => 'Chahuites'] , ['estado_id' => 20, 'municipio' => 'Chalcatongo De Hidalgo'] , ['estado_id' => 
            20, 'municipio' => 'Chiquihuitlán De Benito Juárez'] , ['estado_id' => 20, 'municipio' => 'Heroica Ciudad De 
            Ejutla De Crespo'] , ['estado_id' => 20, 'municipio' => 'Eloxochitlán De Flores Magón'] , ['estado_id' => 20, 
            'municipio' => 'El Espinal'] , ['estado_id' => 20, 'municipio' => 'Tamazulápam Del Espíritu Santo'] , 
            ['estado_id' => 20, 'municipio' => 'Fresnillo De Trujano'] , ['estado_id' => 20, 'municipio' => 'Guadalupe 
            Etla'] , ['estado_id' => 20, 'municipio' => 'Guadalupe De Ramírez'] , ['estado_id' => 20, 'municipio' => 
            'Guelatao De Juárez'] , ['estado_id' => 20, 'municipio' => 'Guevea De Humboldt'] , ['estado_id' => 20, 
            'municipio' => 'Mesones Hidalgo'] , ['estado_id' => 20, 'municipio' => 'Villa Hidalgo'] , ['estado_id' => 20, 
            'municipio' => 'Heroica Ciudad De Huajuapan De León'] , ['estado_id' => 20, 'municipio' => 'Huautepec'] , 
            ['estado_id' => 20, 'municipio' => 'Huautla De Jiménez'] , ['estado_id' => 20, 'municipio' => 'Ixtlán De 
            Juárez'] , ['estado_id' => 20, 'municipio' => 'Heroica Ciudad De Juchitán De Zaragoza'] , ['estado_id' => 20, 
            'municipio' => 'Loma Bonita'] , ['estado_id' => 20, 'municipio' => 'Magdalena Apasco'] , ['estado_id' => 20, 
            'municipio' => 'Magdalena Jaltepec'] , ['estado_id' => 20, 'municipio' => 'Santa Magdalena Jicotlán'] , 
            ['estado_id' => 20, 'municipio' => 'Magdalena Mixtepec'] , ['estado_id' => 20, 'municipio' => 'Magdalena 
            Ocotlán'] , ['estado_id' => 20, 'municipio' => 'Magdalena Peñasco'] , ['estado_id' => 20, 'municipio' => 
            'Magdalena Teitipac'] , ['estado_id' => 20, 'municipio' => 'Magdalena Tequisistlán'] , ['estado_id' => 20, 
            'municipio' => 'Magdalena Tlacotepec'] , ['estado_id' => 20, 'municipio' => 'Magdalena Zahuatlán'] , 
            ['estado_id' => 20, 'municipio' => 'Mariscala De Juárez'] , ['estado_id' => 20, 'municipio' => 'Mártires De 
            Tacubaya'] , ['estado_id' => 20, 'municipio' => 'Matías Romero Avendaño'] , ['estado_id' => 20, 'municipio' => 
            'Mazatlán Villa De Flores'] , ['estado_id' => 20, 'municipio' => 'Miahuatlán De Porfirio Díaz'] , ['estado_id' 
            => 20, 'municipio' => 'Mixistlán De La Reforma'] , ['estado_id' => 20, 'municipio' => 'Monjas'] , ['estado_id' 
            => 20, 'municipio' => 'Natividad'] , ['estado_id' => 20, 'municipio' => 'Nazareno Etla'] , ['estado_id' => 20, 
            'municipio' => 'Nejapa De Madero'] , ['estado_id' => 20, 'municipio' => 'Ixpantepec Nieves'] , ['estado_id' => 
            20, 'municipio' => 'Santiago Niltepec'] , ['estado_id' => 20, 'municipio' => 'Oaxaca De Juárez'] , 
            ['estado_id' => 20, 'municipio' => 'Ocotlán De Morelos'] , ['estado_id' => 20, 'municipio' => 'La Pe'] , 
            ['estado_id' => 20, 'municipio' => 'Pinotepa De Don Luis'] , ['estado_id' => 20, 'municipio' => 'Pluma 
            Hidalgo'] , ['estado_id' => 20, 'municipio' => 'San José Del Progreso'] , ['estado_id' => 20, 'municipio' => 
            'Putla Villa De Guerrero'] , ['estado_id' => 20, 'municipio' => 'Santa Catarina Quioquitani'] , ['estado_id' 
            => 20, 'municipio' => 'Reforma De Pineda'] , ['estado_id' => 20, 'municipio' => 'La Reforma'] , ['estado_id' 
            => 20, 'municipio' => 'Reyes Etla'] , ['estado_id' => 20, 'municipio' => 'Rojas De Cuauhtémoc'] , ['estado_id' 
            => 20, 'municipio' => 'Salina Cruz'] , ['estado_id' => 20, 'municipio' => 'San Agustín Amatengo'] , 
            ['estado_id' => 20, 'municipio' => 'San Agustín Atenango'] , ['estado_id' => 20, 'municipio' => 'San Agustín 
            Chayuco'] , ['estado_id' => 20, 'municipio' => 'San Agustín De Las Juntas'] , ['estado_id' => 20, 'municipio' 
            => 'San Agustín Etla'] , ['estado_id' => 20, 'municipio' => 'San Agustín Loxicha'] , ['estado_id' => 20, 
            'municipio' => 'San Agustín Tlacotepec'] , ['estado_id' => 20, 'municipio' => 'San Agustín Yatareni'] , 
            ['estado_id' => 20, 'municipio' => 'San Andrés Cabecera Nueva'] , ['estado_id' => 20, 'municipio' => 'San 
            Andrés Dinicuiti'] , ['estado_id' => 20, 'municipio' => 'San Andrés Huaxpaltepec'] , ['estado_id' => 20, 
            'municipio' => 'San Andrés Huayápam'] , ['estado_id' => 20, 'municipio' => 'San Andrés Ixtlahuaca'] , 
            ['estado_id' => 20, 'municipio' => 'San Andrés Lagunas'] , ['estado_id' => 20, 'municipio' => 'San Andrés 
            Nuxiño'] , ['estado_id' => 20, 'municipio' => 'San Andrés Paxtlán'] , ['estado_id' => 20, 'municipio' => 'San 
            Andrés Sinaxtla'] , ['estado_id' => 20, 'municipio' => 'San Andrés Solaga'] , ['estado_id' => 20, 'municipio' 
            => 'San Andrés Teotilálpam'] , ['estado_id' => 20, 'municipio' => 'San Andrés Tepetlapa'] , ['estado_id' => 
            20, 'municipio' => 'San Andrés Yaá'] , ['estado_id' => 20, 'municipio' => 'San Andrés Zabache'] , ['estado_id' 
            => 20, 'municipio' => 'San Andrés Zautla'] , ['estado_id' => 20, 'municipio' => 'San Antonino Castillo 
            Velasco'] , ['estado_id' => 20, 'municipio' => 'San Antonino El Alto'] , ['estado_id' => 20, 'municipio' => 
            'San Antonino Monte Verde'] , ['estado_id' => 20, 'municipio' => 'San Antonio Acutla'] , ['estado_id' => 20, 
            'municipio' => 'San Antonio De La Cal'] , ['estado_id' => 20, 'municipio' => 'San Antonio Huitepec'] , 
            ['estado_id' => 20, 'municipio' => 'San Antonio Nanahuatípam'] , ['estado_id' => 20, 'municipio' => 'San 
            Antonio Sinicahua'] , ['estado_id' => 20, 'municipio' => 'San Antonio Tepetlapa'] , ['estado_id' => 20, 
            'municipio' => 'San Baltazar Chichicápam'] , ['estado_id' => 20, 'municipio' => 'San Baltazar Loxicha'] , 
            ['estado_id' => 20, 'municipio' => 'San Baltazar Yatzachi El Bajo'] , ['estado_id' => 20, 'municipio' => 'San 
            Bartolo Coyotepec'] , ['estado_id' => 20, 'municipio' => 'San Bartolomé Ayautla'] , ['estado_id' => 20, 
            'municipio' => 'San Bartolomé Loxicha'] , ['estado_id' => 20, 'municipio' => 'San Bartolomé Quialana'] , 
            ['estado_id' => 20, 'municipio' => 'San Bartolomé Yucuañe'] , ['estado_id' => 20, 'municipio' => 'San 
            Bartolomé Zoogocho'] , ['estado_id' => 20, 'municipio' => 'San Bartolo Soyaltepec'] , ['estado_id' => 20, 
            'municipio' => 'San Bartolo Yautepec'] , ['estado_id' => 20, 'municipio' => 'San Bernardo Mixtepec'] , 
            ['estado_id' => 20, 'municipio' => 'San Blas Atempa'] , ['estado_id' => 20, 'municipio' => 'San Carlos 
            Yautepec'] , ['estado_id' => 20, 'municipio' => 'San Cristóbal Amatlán'] , ['estado_id' => 20, 'municipio' => 
            'San Cristóbal Amoltepec'] , ['estado_id' => 20, 'municipio' => 'San Cristóbal Lachirioag'] , ['estado_id' => 
            20, 'municipio' => 'San Cristóbal Suchixtlahuaca'] , ['estado_id' => 20, 'municipio' => 'San Dionisio Del 
            Mar'] , ['estado_id' => 20, 'municipio' => 'San Dionisio Ocotepec'] , ['estado_id' => 20, 'municipio' => 'San 
            Dionisio Ocotlán'] , ['estado_id' => 20, 'municipio' => 'San Esteban Atatlahuca'] , ['estado_id' => 20, 
            'municipio' => 'San Felipe Jalapa De Díaz'] , ['estado_id' => 20, 'municipio' => 'San Felipe Tejalápam'] , 
            ['estado_id' => 20, 'municipio' => 'San Felipe Usila'] , ['estado_id' => 20, 'municipio' => 'San Francisco 
            Cahuacuá'] , ['estado_id' => 20, 'municipio' => 'San Francisco Cajonos'] , ['estado_id' => 20, 'municipio' => 
            'San Francisco Chapulapa'] , ['estado_id' => 20, 'municipio' => 'San Francisco Chindúa'] , ['estado_id' => 20, 
            'municipio' => 'San Francisco Del Mar'] , ['estado_id' => 20, 'municipio' => 'San Francisco Huehuetlán'] , 
            ['estado_id' => 20, 'municipio' => 'San Francisco Ixhuatán'] , ['estado_id' => 20, 'municipio' => 'San 
            Francisco Jaltepetongo'] , ['estado_id' => 20, 'municipio' => 'San Francisco Lachigoló'] , ['estado_id' => 20, 
            'municipio' => 'San Francisco Logueche'] , ['estado_id' => 20, 'municipio' => 'San Francisco Nuxaño'] , 
            ['estado_id' => 20, 'municipio' => 'San Francisco Ozolotepec'] , ['estado_id' => 20, 'municipio' => 'San 
            Francisco Sola'] , ['estado_id' => 20, 'municipio' => 'San Francisco Telixtlahuaca'] , ['estado_id' => 20, 
            'municipio' => 'San Francisco Teopan'] , ['estado_id' => 20, 'municipio' => 'San Francisco Tlapancingo'] , 
            ['estado_id' => 20, 'municipio' => 'San Gabriel Mixtepec'] , ['estado_id' => 20, 'municipio' => 'San Ildefonso 
            Amatlán'] , ['estado_id' => 20, 'municipio' => 'San Ildefonso Sola'] , ['estado_id' => 20, 'municipio' => 'San 
            Ildefonso Villa Alta'] , ['estado_id' => 20, 'municipio' => 'San Jacinto Amilpas'] , ['estado_id' => 20, 
            'municipio' => 'San Jacinto Tlacotepec'] , ['estado_id' => 20, 'municipio' => 'San Jerónimo Coatlán'] , 
            ['estado_id' => 20, 'municipio' => 'San Jerónimo Silacayoapilla'] , ['estado_id' => 20, 'municipio' => 'San 
            Jerónimo Sosola'] , ['estado_id' => 20, 'municipio' => 'San Jerónimo Taviche'] , ['estado_id' => 20, 
            'municipio' => 'San Jerónimo Tecóatl'] , ['estado_id' => 20, 'municipio' => 'San Jorge Nuchita'] , 
            ['estado_id' => 20, 'municipio' => 'San José Ayuquila'] , ['estado_id' => 20, 'municipio' => 'San José 
            Chiltepec'] , ['estado_id' => 20, 'municipio' => 'San José Del Peñasco'] , ['estado_id' => 20, 'municipio' => 
            'San José Estancia Grande'] , ['estado_id' => 20, 'municipio' => 'San José Independencia'] , ['estado_id' => 
            20, 'municipio' => 'San José Lachiguiri'] , ['estado_id' => 20, 'municipio' => 'San José Tenango'] , 
            ['estado_id' => 20, 'municipio' => 'San Juan Achiutla'] , ['estado_id' => 20, 'municipio' => 'San Juan 
            Atepec'] , ['estado_id' => 20, 'municipio' => 'Ánimas Trujano'] , ['estado_id' => 20, 'municipio' => 'San Juan 
            Bautista Atatlahuca'] , ['estado_id' => 20, 'municipio' => 'San Juan Bautista Coixtlahuaca'] , ['estado_id' => 
            20, 'municipio' => 'San Juan Bautista Cuicatlán'] , ['estado_id' => 20, 'municipio' => 'San Juan Bautista 
            Guelache'] , ['estado_id' => 20, 'municipio' => 'San Juan Bautista Jayacatlán'] , ['estado_id' => 20, 
            'municipio' => 'San Juan Bautista Lo De Soto'] , ['estado_id' => 20, 'municipio' => 'San Juan Bautista 
            Suchitepec'] , ['estado_id' => 20, 'municipio' => 'San Juan Bautista Tlacoatzintepec'] , ['estado_id' => 20, 
            'municipio' => 'San Juan Bautista Tlachichilco'] , ['estado_id' => 20, 'municipio' => 'San Juan Bautista 
            Tuxtepec'] , ['estado_id' => 20, 'municipio' => 'San Juan Cacahuatepec'] , ['estado_id' => 20, 'municipio' => 
            'San Juan Cieneguilla'] , ['estado_id' => 20, 'municipio' => 'San Juan Coatzóspam'] , ['estado_id' => 20, 
            'municipio' => 'San Juan Colorado'] , ['estado_id' => 20, 'municipio' => 'San Juan Comaltepec'] , ['estado_id' 
            => 20, 'municipio' => 'San Juan Cotzocón'] , ['estado_id' => 20, 'municipio' => 'San Juan Chicomezúchil'] , 
            ['estado_id' => 20, 'municipio' => 'San Juan Chilateca'] , ['estado_id' => 20, 'municipio' => 'San Juan Del 
            Estado'] , ['estado_id' => 20, 'municipio' => 'San Juan Del Río'] , ['estado_id' => 20, 'municipio' => 'San 
            Juan Diuxi'] , ['estado_id' => 20, 'municipio' => 'San Juan Evangelista Analco'] , ['estado_id' => 20, 
            'municipio' => 'San Juan Guelavía'] , ['estado_id' => 20, 'municipio' => 'San Juan Guichicovi'] , ['estado_id' 
            => 20, 'municipio' => 'San Juan Ihualtepec'] , ['estado_id' => 20, 'municipio' => 'San Juan Juquila Mixes'] , 
            ['estado_id' => 20, 'municipio' => 'San Juan Juquila Vijanos'] , ['estado_id' => 20, 'municipio' => 'San Juan 
            Lachao'] , ['estado_id' => 20, 'municipio' => 'San Juan Lachigalla'] , ['estado_id' => 20, 'municipio' => 'San 
            Juan Lajarcia'] , ['estado_id' => 20, 'municipio' => 'San Juan Lalana'] , ['estado_id' => 20, 'municipio' => 
            'San Juan De Los Cués'] , ['estado_id' => 20, 'municipio' => 'San Juan Mazatlán'] , ['estado_id' => 20, 
            'municipio' => 'San Juan Mixtepec'] , ['estado_id' => 20, 'municipio' => 'San Juan Mixtepec'] , ['estado_id' 
            => 20, 'municipio' => 'San Juan Ñumí'] , ['estado_id' => 20, 'municipio' => 'San Juan Ozolotepec'] , 
            ['estado_id' => 20, 'municipio' => 'San Juan Petlapa'] , ['estado_id' => 20, 'municipio' => 'San Juan 
            Quiahije'] , ['estado_id' => 20, 'municipio' => 'San Juan Quiotepec'] , ['estado_id' => 20, 'municipio' => 
            'San Juan Sayultepec'] , ['estado_id' => 20, 'municipio' => 'San Juan Tabaá'] , ['estado_id' => 20, 
            'municipio' => 'San Juan Tamazola'] , ['estado_id' => 20, 'municipio' => 'San Juan Teita'] , ['estado_id' => 
            20, 'municipio' => 'San Juan Teitipac'] , ['estado_id' => 20, 'municipio' => 'San Juan Tepeuxila'] , 
            ['estado_id' => 20, 'municipio' => 'San Juan Teposcolula'] , ['estado_id' => 20, 'municipio' => 'San Juan 
            Yaeé'] , ['estado_id' => 20, 'municipio' => 'San Juan Yatzona'] , ['estado_id' => 20, 'municipio' => 'San Juan 
            Yucuita'] , ['estado_id' => 20, 'municipio' => 'San Lorenzo'] , ['estado_id' => 20, 'municipio' => 'San 
            Lorenzo Albarradas'] , ['estado_id' => 20, 'municipio' => 'San Lorenzo Cacaotepec'] , ['estado_id' => 20, 
            'municipio' => 'San Lorenzo Cuaunecuiltitla'] , ['estado_id' => 20, 'municipio' => 'San Lorenzo Texmelúcan'] , 
            ['estado_id' => 20, 'municipio' => 'San Lorenzo Victoria'] , ['estado_id' => 20, 'municipio' => 'San Lucas 
            Camotlán'] , ['estado_id' => 20, 'municipio' => 'San Lucas Ojitlán'] , ['estado_id' => 20, 'municipio' => 'San 
            Lucas Quiaviní'] , ['estado_id' => 20, 'municipio' => 'San Lucas Zoquiápam'] , ['estado_id' => 20, 'municipio' 
            => 'San Luis Amatlán'] , ['estado_id' => 20, 'municipio' => 'San Marcial Ozolotepec'] , ['estado_id' => 20, 
            'municipio' => 'San Marcos Arteaga'] , ['estado_id' => 20, 'municipio' => 'San Martín De Los Cansecos'] , 
            ['estado_id' => 20, 'municipio' => 'San Martín Huamelúlpam'] , ['estado_id' => 20, 'municipio' => 'San Martín 
            Itunyoso'] , ['estado_id' => 20, 'municipio' => 'San Martín Lachilá'] , ['estado_id' => 20, 'municipio' => 
            'San Martín Peras'] , ['estado_id' => 20, 'municipio' => 'San Martín Tilcajete'] , ['estado_id' => 20, 
            'municipio' => 'San Martín Toxpalan'] , ['estado_id' => 20, 'municipio' => 'San Martín Zacatepec'] , 
            ['estado_id' => 20, 'municipio' => 'San Mateo Cajonos'] , ['estado_id' => 20, 'municipio' => 'Capulálpam De 
            Méndez'] , ['estado_id' => 20, 'municipio' => 'San Mateo Del Mar'] , ['estado_id' => 20, 'municipio' => 'San 
            Mateo Yoloxochitlán'] , ['estado_id' => 20, 'municipio' => 'San Mateo Etlatongo'] , ['estado_id' => 20, 
            'municipio' => 'San Mateo Nejápam'] , ['estado_id' => 20, 'municipio' => 'San Mateo Peñasco'] , ['estado_id' 
            => 20, 'municipio' => 'San Mateo Piñas'] , ['estado_id' => 20, 'municipio' => 'San Mateo Río Hondo'] , 
            ['estado_id' => 20, 'municipio' => 'San Mateo Sindihui'] , ['estado_id' => 20, 'municipio' => 'San Mateo 
            Tlapiltepec'] , ['estado_id' => 20, 'municipio' => 'San Melchor Betaza'] , ['estado_id' => 20, 'municipio' => 
            'San Miguel Achiutla'] , ['estado_id' => 20, 'municipio' => 'San Miguel Ahuehuetitlán'] , ['estado_id' => 20, 
            'municipio' => 'San Miguel Aloápam'] , ['estado_id' => 20, 'municipio' => 'San Miguel Amatitlán'] , 
            ['estado_id' => 20, 'municipio' => 'San Miguel Amatlán'] , ['estado_id' => 20, 'municipio' => 'San Miguel 
            Coatlán'] , ['estado_id' => 20, 'municipio' => 'San Miguel Chicahua'] , ['estado_id' => 20, 'municipio' => 
            'San Miguel Chimalapa'] , ['estado_id' => 20, 'municipio' => 'San Miguel Del Puerto'] , ['estado_id' => 20, 
            'municipio' => 'San Miguel Del Río'] , ['estado_id' => 20, 'municipio' => 'San Miguel Ejutla'] , ['estado_id' 
            => 20, 'municipio' => 'San Miguel El Grande'] , ['estado_id' => 20, 'municipio' => 'San Miguel Huautla'] , 
            ['estado_id' => 20, 'municipio' => 'San Miguel Mixtepec'] , ['estado_id' => 20, 'municipio' => 'San Miguel 
            Panixtlahuaca'] , ['estado_id' => 20, 'municipio' => 'San Miguel Peras'] , ['estado_id' => 20, 'municipio' => 
            'San Miguel Piedras'] , ['estado_id' => 20, 'municipio' => 'San Miguel Quetzaltepec'] , ['estado_id' => 20, 
            'municipio' => 'San Miguel Santa Flor'] , ['estado_id' => 20, 'municipio' => 'Villa Sola De Vega'] , 
            ['estado_id' => 20, 'municipio' => 'San Miguel Soyaltepec'] , ['estado_id' => 20, 'municipio' => 'San Miguel 
            Suchixtepec'] , ['estado_id' => 20, 'municipio' => 'Villa Talea De Castro'] , ['estado_id' => 20, 'municipio' 
            => 'San Miguel Tecomatlán'] , ['estado_id' => 20, 'municipio' => 'San Miguel Tenango'] , ['estado_id' => 20, 
            'municipio' => 'San Miguel Tequixtepec'] , ['estado_id' => 20, 'municipio' => 'San Miguel Tilquiápam'] , 
            ['estado_id' => 20, 'municipio' => 'San Miguel Tlacamama'] , ['estado_id' => 20, 'municipio' => 'San Miguel 
            Tlacotepec'] , ['estado_id' => 20, 'municipio' => 'San Miguel Tulancingo'] , ['estado_id' => 20, 'municipio' 
            => 'San Miguel Yotao'] , ['estado_id' => 20, 'municipio' => 'San Nicolás'] , ['estado_id' => 20, 'municipio' 
            => 'San Nicolás Hidalgo'] , ['estado_id' => 20, 'municipio' => 'San Pablo Coatlán'] , ['estado_id' => 20, 
            'municipio' => 'San Pablo Cuatro Venados'] , ['estado_id' => 20, 'municipio' => 'San Pablo Etla'] , 
            ['estado_id' => 20, 'municipio' => 'San Pablo Huitzo'] , ['estado_id' => 20, 'municipio' => 'San Pablo 
            Huixtepec'] , ['estado_id' => 20, 'municipio' => 'San Pablo Macuiltianguis'] , ['estado_id' => 20, 'municipio' 
            => 'San Pablo Tijaltepec'] , ['estado_id' => 20, 'municipio' => 'San Pablo Villa De Mitla'] , ['estado_id' => 
            20, 'municipio' => 'San Pablo Yaganiza'] , ['estado_id' => 20, 'municipio' => 'San Pedro Amuzgos'] , 
            ['estado_id' => 20, 'municipio' => 'San Pedro Apóstol'] , ['estado_id' => 20, 'municipio' => 'San Pedro 
            Atoyac'] , ['estado_id' => 20, 'municipio' => 'San Pedro Cajonos'] , ['estado_id' => 20, 'municipio' => 'San 
            Pedro Coxcaltepec Cántaros'] , ['estado_id' => 20, 'municipio' => 'San Pedro Comitancillo'] , ['estado_id' => 
            20, 'municipio' => 'San Pedro El Alto'] , ['estado_id' => 20, 'municipio' => 'San Pedro Huamelula'] , 
            ['estado_id' => 20, 'municipio' => 'San Pedro Huilotepec'] , ['estado_id' => 20, 'municipio' => 'San Pedro 
            Ixcatlán'] , ['estado_id' => 20, 'municipio' => 'San Pedro Ixtlahuaca'] , ['estado_id' => 20, 'municipio' => 
            'San Pedro Jaltepetongo'] , ['estado_id' => 20, 'municipio' => 'San Pedro Jicayán'] , ['estado_id' => 20, 
            'municipio' => 'San Pedro Jocotipac'] , ['estado_id' => 20, 'municipio' => 'San Pedro Juchatengo'] , 
            ['estado_id' => 20, 'municipio' => 'San Pedro Mártir'] , ['estado_id' => 20, 'municipio' => 'San Pedro Mártir 
            Quiechapa'] , ['estado_id' => 20, 'municipio' => 'San Pedro Mártir Yucuxaco'] , ['estado_id' => 20, 
            'municipio' => 'San Pedro Mixtepec'] , ['estado_id' => 20, 'municipio' => 'San Pedro Mixtepec'] , ['estado_id' 
            => 20, 'municipio' => 'San Pedro Molinos'] , ['estado_id' => 20, 'municipio' => 'San Pedro Nopala'] , 
            ['estado_id' => 20, 'municipio' => 'San Pedro Ocopetatillo'] , ['estado_id' => 20, 'municipio' => 'San Pedro 
            Ocotepec'] , ['estado_id' => 20, 'municipio' => 'San Pedro Pochutla'] , ['estado_id' => 20, 'municipio' => 
            'San Pedro Quiatoni'] , ['estado_id' => 20, 'municipio' => 'San Pedro Sochiápam'] , ['estado_id' => 20, 
            'municipio' => 'San Pedro Tapanatepec'] , ['estado_id' => 20, 'municipio' => 'San Pedro Taviche'] , 
            ['estado_id' => 20, 'municipio' => 'San Pedro Teozacoalco'] , ['estado_id' => 20, 'municipio' => 'San Pedro 
            Teutila'] , ['estado_id' => 20, 'municipio' => 'San Pedro Tidaá'] , ['estado_id' => 20, 'municipio' => 'San 
            Pedro Topiltepec'] , ['estado_id' => 20, 'municipio' => 'San Pedro Totolápam'] , ['estado_id' => 20, 
            'municipio' => 'Villa De Tututepec'] , ['estado_id' => 20, 'municipio' => 'San Pedro Yaneri'] , ['estado_id' 
            => 20, 'municipio' => 'San Pedro Yólox'] , ['estado_id' => 20, 'municipio' => 'San Pedro Y San Pablo Ayutla'] 
            , ['estado_id' => 20, 'municipio' => 'Villa De Etla'] , ['estado_id' => 20, 'municipio' => 'San Pedro Y San 
            Pablo Teposcolula'] , ['estado_id' => 20, 'municipio' => 'San Pedro Y San Pablo Tequixtepec'] , ['estado_id' 
            => 20, 'municipio' => 'San Pedro Yucunama'] , ['estado_id' => 20, 'municipio' => 'San Raymundo Jalpan'] , 
            ['estado_id' => 20, 'municipio' => 'San Sebastián Abasolo'] , ['estado_id' => 20, 'municipio' => 'San 
            Sebastián Coatlán'] , ['estado_id' => 20, 'municipio' => 'San Sebastián Ixcapa'] , ['estado_id' => 20, 
            'municipio' => 'San Sebastián Nicananduta'] , ['estado_id' => 20, 'municipio' => 'San Sebastián Río Hondo'] , 
            ['estado_id' => 20, 'municipio' => 'San Sebastián Tecomaxtlahuaca'] , ['estado_id' => 20, 'municipio' => 'San 
            Sebastián Teitipac'] , ['estado_id' => 20, 'municipio' => 'San Sebastián Tutla'] , ['estado_id' => 20, 
            'municipio' => 'San Simón Almolongas'] , ['estado_id' => 20, 'municipio' => 'San Simón Zahuatlán'] , 
            ['estado_id' => 20, 'municipio' => 'Santa Ana'] , ['estado_id' => 20, 'municipio' => 'Santa Ana 
            Ateixtlahuaca'] , ['estado_id' => 20, 'municipio' => 'Santa Ana Cuauhtémoc'] , ['estado_id' => 20, 'municipio' 
            => 'Santa Ana Del Valle'] , ['estado_id' => 20, 'municipio' => 'Santa Ana Tavela'] , ['estado_id' => 20, 
            'municipio' => 'Santa Ana Tlapacoyan'] , ['estado_id' => 20, 'municipio' => 'Santa Ana Yareni'] , ['estado_id' 
            => 20, 'municipio' => 'Santa Ana Zegache'] , ['estado_id' => 20, 'municipio' => 'Santa Catalina Quierí'] , 
            ['estado_id' => 20, 'municipio' => 'Santa Catarina Cuixtla'] , ['estado_id' => 20, 'municipio' => 'Santa 
            Catarina Ixtepeji'] , ['estado_id' => 20, 'municipio' => 'Santa Catarina Juquila'] , ['estado_id' => 20, 
            'municipio' => 'Santa Catarina Lachatao'] , ['estado_id' => 20, 'municipio' => 'Santa Catarina Loxicha'] , 
            ['estado_id' => 20, 'municipio' => 'Santa Catarina Mechoacán'] , ['estado_id' => 20, 'municipio' => 'Santa 
            Catarina Minas'] , ['estado_id' => 20, 'municipio' => 'Santa Catarina Quiané'] , ['estado_id' => 20, 
            'municipio' => 'Santa Catarina Tayata'] , ['estado_id' => 20, 'municipio' => 'Santa Catarina Ticuá'] , 
            ['estado_id' => 20, 'municipio' => 'Santa Catarina Yosonotú'] , ['estado_id' => 20, 'municipio' => 'Santa 
            Catarina Zapoquila'] , ['estado_id' => 20, 'municipio' => 'Santa Cruz Acatepec'] , ['estado_id' => 20, 
            'municipio' => 'Santa Cruz Amilpas'] , ['estado_id' => 20, 'municipio' => 'Santa Cruz De Bravo'] , 
            ['estado_id' => 20, 'municipio' => 'Santa Cruz Itundujia'] , ['estado_id' => 20, 'municipio' => 'Santa Cruz 
            Mixtepec'] , ['estado_id' => 20, 'municipio' => 'Santa Cruz Nundaco'] , ['estado_id' => 20, 'municipio' => 
            'Santa Cruz Papalutla'] , ['estado_id' => 20, 'municipio' => 'Santa Cruz Tacache De Mina'] , ['estado_id' => 
            20, 'municipio' => 'Santa Cruz Tacahua'] , ['estado_id' => 20, 'municipio' => 'Santa Cruz Tayata'] , 
            ['estado_id' => 20, 'municipio' => 'Santa Cruz Xitla'] , ['estado_id' => 20, 'municipio' => 'Santa Cruz 
            Xoxocotlán'] , ['estado_id' => 20, 'municipio' => 'Santa Cruz Zenzontepec'] , ['estado_id' => 20, 'municipio' 
            => 'Santa Gertrudis'] , ['estado_id' => 20, 'municipio' => 'Santa Inés Del Monte'] , ['estado_id' => 20, 
            'municipio' => 'Santa Inés Yatzeche'] , ['estado_id' => 20, 'municipio' => 'Santa Lucía Del Camino'] , 
            ['estado_id' => 20, 'municipio' => 'Santa Lucía Miahuatlán'] , ['estado_id' => 20, 'municipio' => 'Santa Lucía 
            Monteverde'] , ['estado_id' => 20, 'municipio' => 'Santa Lucía Ocotlán'] , ['estado_id' => 20, 'municipio' => 
            'Santa María Alotepec'] , ['estado_id' => 20, 'municipio' => 'Santa María Apazco'] , ['estado_id' => 20, 
            'municipio' => 'Santa María La Asunción'] , ['estado_id' => 20, 'municipio' => 'Heroica Ciudad De Tlaxiaco'] , 
            ['estado_id' => 20, 'municipio' => 'Ayoquezco De Aldama'] , ['estado_id' => 20, 'municipio' => 'Santa María 
            Atzompa'] , ['estado_id' => 20, 'municipio' => 'Santa María Camotlán'] , ['estado_id' => 20, 'municipio' => 
            'Santa María Colotepec'] , ['estado_id' => 20, 'municipio' => 'Santa María Cortijo'] , ['estado_id' => 20, 
            'municipio' => 'Santa María Coyotepec'] , ['estado_id' => 20, 'municipio' => 'Santa María Chachoápam'] , 
            ['estado_id' => 20, 'municipio' => 'Villa De Chilapa De Díaz'] , ['estado_id' => 20, 'municipio' => 'Santa 
            María Chilchotla'] , ['estado_id' => 20, 'municipio' => 'Santa María Chimalapa'] , ['estado_id' => 20, 
            'municipio' => 'Santa María Del Rosario'] , ['estado_id' => 20, 'municipio' => 'Santa María Del Tule'] , 
            ['estado_id' => 20, 'municipio' => 'Santa María Ecatepec'] , ['estado_id' => 20, 'municipio' => 'Santa María 
            Guelacé'] , ['estado_id' => 20, 'municipio' => 'Santa María Guienagati'] , ['estado_id' => 20, 'municipio' => 
            'Santa María Huatulco'] , ['estado_id' => 20, 'municipio' => 'Santa María Huazolotitlán'] , ['estado_id' => 
            20, 'municipio' => 'Santa María Ipalapa'] , ['estado_id' => 20, 'municipio' => 'Santa María Ixcatlán'] , 
            ['estado_id' => 20, 'municipio' => 'Santa María Jacatepec'] , ['estado_id' => 20, 'municipio' => 'Santa María 
            Jalapa Del Marqués'] , ['estado_id' => 20, 'municipio' => 'Santa María Jaltianguis'] , ['estado_id' => 20, 
            'municipio' => 'Santa María Lachixío'] , ['estado_id' => 20, 'municipio' => 'Santa María Mixtequilla'] , 
            ['estado_id' => 20, 'municipio' => 'Santa María Nativitas'] , ['estado_id' => 20, 'municipio' => 'Santa María 
            Nduayaco'] , ['estado_id' => 20, 'municipio' => 'Santa María Ozolotepec'] , ['estado_id' => 20, 'municipio' => 
            'Santa María Pápalo'] , ['estado_id' => 20, 'municipio' => 'Santa María Peñoles'] , ['estado_id' => 20, 
            'municipio' => 'Santa María Petapa'] , ['estado_id' => 20, 'municipio' => 'Santa María Quiegolani'] , 
            ['estado_id' => 20, 'municipio' => 'Santa María Sola'] , ['estado_id' => 20, 'municipio' => 'Santa María 
            Tataltepec'] , ['estado_id' => 20, 'municipio' => 'Santa María Tecomavaca'] , ['estado_id' => 20, 'municipio' 
            => 'Santa María Temaxcalapa'] , ['estado_id' => 20, 'municipio' => 'Santa María Temaxcaltepec'] , ['estado_id' 
            => 20, 'municipio' => 'Santa María Teopoxco'] , ['estado_id' => 20, 'municipio' => 'Santa María Tepantlali'] , 
            ['estado_id' => 20, 'municipio' => 'Santa María Texcatitlán'] , ['estado_id' => 20, 'municipio' => 'Santa 
            María Tlahuitoltepec'] , ['estado_id' => 20, 'municipio' => 'Santa María Tlalixtac'] , ['estado_id' => 20, 
            'municipio' => 'Santa María Tonameca'] , ['estado_id' => 20, 'municipio' => 'Santa María Totolapilla'] , 
            ['estado_id' => 20, 'municipio' => 'Santa María Xadani'] , ['estado_id' => 20, 'municipio' => 'Santa María 
            Yalina'] , ['estado_id' => 20, 'municipio' => 'Santa María Yavesía'] , ['estado_id' => 20, 'municipio' => 
            'Santa María Yolotepec'] , ['estado_id' => 20, 'municipio' => 'Santa María Yosoyúa'] , ['estado_id' => 20, 
            'municipio' => 'Santa María Yucuhiti'] , ['estado_id' => 20, 'municipio' => 'Santa María Zacatepec'] , 
            ['estado_id' => 20, 'municipio' => 'Santa María Zaniza'] , ['estado_id' => 20, 'municipio' => 'Santa María 
            Zoquitlán'] , ['estado_id' => 20, 'municipio' => 'Santiago Amoltepec'] , ['estado_id' => 20, 'municipio' => 
            'Santiago Apoala'] , ['estado_id' => 20, 'municipio' => 'Santiago Apóstol'] , ['estado_id' => 20, 'municipio' 
            => 'Santiago Astata'] , ['estado_id' => 20, 'municipio' => 'Santiago Atitlán'] , ['estado_id' => 20, 
            'municipio' => 'Santiago Ayuquililla'] , ['estado_id' => 20, 'municipio' => 'Santiago Cacaloxtepec'] , 
            ['estado_id' => 20, 'municipio' => 'Santiago Camotlán'] , ['estado_id' => 20, 'municipio' => 'Santiago 
            Comaltepec'] , ['estado_id' => 20, 'municipio' => 'Santiago Chazumba'] , ['estado_id' => 20, 'municipio' => 
            'Santiago Choápam'] , ['estado_id' => 20, 'municipio' => 'Santiago Del Río'] , ['estado_id' => 20, 'municipio' 
            => 'Santiago Huajolotitlán'] , ['estado_id' => 20, 'municipio' => 'Santiago Huauclilla'] , ['estado_id' => 20, 
            'municipio' => 'Santiago Ihuitlán Plumas'] , ['estado_id' => 20, 'municipio' => 'Santiago Ixcuintepec'] , 
            ['estado_id' => 20, 'municipio' => 'Santiago Ixtayutla'] , ['estado_id' => 20, 'municipio' => 'Santiago 
            Jamiltepec'] , ['estado_id' => 20, 'municipio' => 'Santiago Jocotepec'] , ['estado_id' => 20, 'municipio' => 
            'Santiago Juxtlahuaca'] , ['estado_id' => 20, 'municipio' => 'Santiago Lachiguiri'] , ['estado_id' => 20, 
            'municipio' => 'Santiago Lalopa'] , ['estado_id' => 20, 'municipio' => 'Santiago Laollaga'] , ['estado_id' => 
            20, 'municipio' => 'Santiago Laxopa'] , ['estado_id' => 20, 'municipio' => 'Santiago Llano Grande'] , 
            ['estado_id' => 20, 'municipio' => 'Santiago Matatlán'] , ['estado_id' => 20, 'municipio' => 'Santiago 
            Miltepec'] , ['estado_id' => 20, 'municipio' => 'Santiago Minas'] , ['estado_id' => 20, 'municipio' => 
            'Santiago Nacaltepec'] , ['estado_id' => 20, 'municipio' => 'Santiago Nejapilla'] , ['estado_id' => 20, 
            'municipio' => 'Santiago Nundiche'] , ['estado_id' => 20, 'municipio' => 'Santiago Nuyoó'] , ['estado_id' => 
            20, 'municipio' => 'Santiago Pinotepa Nacional'] , ['estado_id' => 20, 'municipio' => 'Santiago 
            Suchilquitongo'] , ['estado_id' => 20, 'municipio' => 'Santiago Tamazola'] , ['estado_id' => 20, 'municipio' 
            => 'Santiago Tapextla'] , ['estado_id' => 20, 'municipio' => 'Villa Tejúpam De La Unión'] , ['estado_id' => 
            20, 'municipio' => 'Santiago Tenango'] , ['estado_id' => 20, 'municipio' => 'Santiago Tepetlapa'] , 
            ['estado_id' => 20, 'municipio' => 'Santiago Tetepec'] , ['estado_id' => 20, 'municipio' => 'Santiago 
            Texcalcingo'] , ['estado_id' => 20, 'municipio' => 'Santiago Textitlán'] , ['estado_id' => 20, 'municipio' => 
            'Santiago Tilantongo'] , ['estado_id' => 20, 'municipio' => 'Santiago Tillo'] , ['estado_id' => 20, 
            'municipio' => 'Santiago Tlazoyaltepec'] , ['estado_id' => 20, 'municipio' => 'Santiago Xanica'] , 
            ['estado_id' => 20, 'municipio' => 'Santiago Xiacuí'] , ['estado_id' => 20, 'municipio' => 'Santiago 
            Yaitepec'] , ['estado_id' => 20, 'municipio' => 'Santiago Yaveo'] , ['estado_id' => 20, 'municipio' => 
            'Santiago Yolomécatl'] , ['estado_id' => 20, 'municipio' => 'Santiago Yosondúa'] , ['estado_id' => 20, 
            'municipio' => 'Santiago Yucuyachi'] , ['estado_id' => 20, 'municipio' => 'Santiago Zacatepec'] , ['estado_id' 
            => 20, 'municipio' => 'Santiago Zoochila'] , ['estado_id' => 20, 'municipio' => 'Nuevo Zoquiápam'] , 
            ['estado_id' => 20, 'municipio' => 'Santo Domingo Ingenio'] , ['estado_id' => 20, 'municipio' => 'Santo 
            Domingo Albarradas'] , ['estado_id' => 20, 'municipio' => 'Santo Domingo Armenta'] , ['estado_id' => 20, 
            'municipio' => 'Santo Domingo Chihuitán'] , ['estado_id' => 20, 'municipio' => 'Santo Domingo De Morelos'] , 
            ['estado_id' => 20, 'municipio' => 'Santo Domingo Ixcatlán'] , ['estado_id' => 20, 'municipio' => 'Santo 
            Domingo Nuxaá'] , ['estado_id' => 20, 'municipio' => 'Santo Domingo Ozolotepec'] , ['estado_id' => 20, 
            'municipio' => 'Santo Domingo Petapa'] , ['estado_id' => 20, 'municipio' => 'Santo Domingo Roayaga'] , 
            ['estado_id' => 20, 'municipio' => 'Santo Domingo Tehuantepec'] , ['estado_id' => 20, 'municipio' => 'Santo 
            Domingo Teojomulco'] , ['estado_id' => 20, 'municipio' => 'Santo Domingo Tepuxtepec'] , ['estado_id' => 20, 
            'municipio' => 'Santo Domingo Tlatayápam'] , ['estado_id' => 20, 'municipio' => 'Santo Domingo Tomaltepec'] , 
            ['estado_id' => 20, 'municipio' => 'Santo Domingo Tonalá'] , ['estado_id' => 20, 'municipio' => 'Santo Domingo 
            Tonaltepec'] , ['estado_id' => 20, 'municipio' => 'Santo Domingo Xagacía'] , ['estado_id' => 20, 'municipio' 
            => 'Santo Domingo Yanhuitlán'] , ['estado_id' => 20, 'municipio' => 'Santo Domingo Yodohino'] , ['estado_id' 
            => 20, 'municipio' => 'Santo Domingo Zanatepec'] , ['estado_id' => 20, 'municipio' => 'Santos Reyes Nopala'] , 
            ['estado_id' => 20, 'municipio' => 'Santos Reyes Pápalo'] , ['estado_id' => 20, 'municipio' => 'Santos Reyes 
            Tepejillo'] , ['estado_id' => 20, 'municipio' => 'Santos Reyes Yucuná'] , ['estado_id' => 20, 'municipio' => 
            'Santo Tomás Jalieza'] , ['estado_id' => 20, 'municipio' => 'Santo Tomás Mazaltepec'] , ['estado_id' => 20, 
            'municipio' => 'Santo Tomás Ocotepec'] , ['estado_id' => 20, 'municipio' => 'Santo Tomás Tamazulapan'] , 
            ['estado_id' => 20, 'municipio' => 'San Vicente Coatlán'] , ['estado_id' => 20, 'municipio' => 'San Vicente 
            Lachixío'] , ['estado_id' => 20, 'municipio' => 'San Vicente Nuñú'] , ['estado_id' => 20, 'municipio' => 
            'Silacayoápam'] , ['estado_id' => 20, 'municipio' => 'Sitio De Xitlapehua'] , ['estado_id' => 20, 'municipio' 
            => 'Soledad Etla'] , ['estado_id' => 20, 'municipio' => 'Villa De Tamazulápam Del Progreso'] , ['estado_id' => 
            20, 'municipio' => 'Tanetze De Zaragoza'] , ['estado_id' => 20, 'municipio' => 'Taniche'] , ['estado_id' => 
            20, 'municipio' => 'Tataltepec De Valdés'] , ['estado_id' => 20, 'municipio' => 'Teococuilco De Marcos Pérez'] 
            , ['estado_id' => 20, 'municipio' => 'Teotitlán De Flores Magón'] , ['estado_id' => 20, 'municipio' => 
            'Teotitlán Del Valle'] , ['estado_id' => 20, 'municipio' => 'Teotongo'] , ['estado_id' => 20, 'municipio' => 
            'Tepelmeme Villa De Morelos'] , ['estado_id' => 20, 'municipio' => 'Heroica Villa Tezoatlán De Segura Y Luna, 
            Cuna De La Independencia De Oaxaca'] , ['estado_id' => 20, 'municipio' => 'San Jerónimo Tlacochahuaya'] , 
            ['estado_id' => 20, 'municipio' => 'Tlacolula De Matamoros'] , ['estado_id' => 20, 'municipio' => 'Tlacotepec 
            Plumas'] , ['estado_id' => 20, 'municipio' => 'Tlalixtac De Cabrera'] , ['estado_id' => 20, 'municipio' => 
            'Totontepec Villa De Morelos'] , ['estado_id' => 20, 'municipio' => 'Trinidad Zaachila'] , ['estado_id' => 20, 
            'municipio' => 'La Trinidad Vista Hermosa'] , ['estado_id' => 20, 'municipio' => 'Unión Hidalgo'] , 
            ['estado_id' => 20, 'municipio' => 'Valerio Trujano'] , ['estado_id' => 20, 'municipio' => 'San Juan Bautista 
            Valle Nacional'] , ['estado_id' => 20, 'municipio' => 'Villa Díaz Ordaz'] , ['estado_id' => 20, 'municipio' => 
            'Yaxe'] , ['estado_id' => 20, 'municipio' => 'Magdalena Yodocono De Porfirio Díaz'] , ['estado_id' => 20, 
            'municipio' => 'Yogana'] , ['estado_id' => 20, 'municipio' => 'Yutanduchi De Guerrero'] , ['estado_id' => 20, 
            'municipio' => 'Villa De Zaachila'] , ['estado_id' => 20, 'municipio' => 'San Mateo Yucutindoo'] , 
            ['estado_id' => 20, 'municipio' => 'Zapotitlán Lagunas'] , ['estado_id' => 20, 'municipio' => 'Zapotitlán 
            Palmas'] , ['estado_id' => 20, 'municipio' => 'Santa Inés De Zaragoza'] , ['estado_id' => 20, 'municipio' => 
            'Zimatlán De Álvarez'] , ['estado_id' => 21, 'municipio' => 'Acajete'] , ['estado_id' => 21, 'municipio' => 
            'Acateno'] , ['estado_id' => 21, 'municipio' => 'Acatlán'] , ['estado_id' => 21, 'municipio' => 'Acatzingo'] , 
            ['estado_id' => 21, 'municipio' => 'Acteopan'] , ['estado_id' => 21, 'municipio' => 'Ahuacatlán'] , 
            ['estado_id' => 21, 'municipio' => 'Ahuatlán'] , ['estado_id' => 21, 'municipio' => 'Ahuazotepec'] , 
            ['estado_id' => 21, 'municipio' => 'Ahuehuetitla'] , ['estado_id' => 21, 'municipio' => 'Ajalpan'] , 
            ['estado_id' => 21, 'municipio' => 'Albino Zertuche'] , ['estado_id' => 21, 'municipio' => 'Aljojuca'] , 
            ['estado_id' => 21, 'municipio' => 'Altepexi'] , ['estado_id' => 21, 'municipio' => 'Amixtlán'] , ['estado_id' 
            => 21, 'municipio' => 'Amozoc'] , ['estado_id' => 21, 'municipio' => 'Aquixtla'] , ['estado_id' => 21, 
            'municipio' => 'Atempan'] , ['estado_id' => 21, 'municipio' => 'Atexcal'] , ['estado_id' => 21, 'municipio' => 
            'Atlixco'] , ['estado_id' => 21, 'municipio' => 'Atoyatempan'] , ['estado_id' => 21, 'municipio' => 'Atzala'] 
            , ['estado_id' => 21, 'municipio' => 'Atzitzihuacán'] , ['estado_id' => 21, 'municipio' => 'Atzitzintla'] , 
            ['estado_id' => 21, 'municipio' => 'Axutla'] , ['estado_id' => 21, 'municipio' => 'Ayotoxco De Guerrero'] , 
            ['estado_id' => 21, 'municipio' => 'Calpan'] , ['estado_id' => 21, 'municipio' => 'Caltepec'] , ['estado_id' 
            => 21, 'municipio' => 'Camocuautla'] , ['estado_id' => 21, 'municipio' => 'Caxhuacan'] , ['estado_id' => 21, 
            'municipio' => 'Coatepec'] , ['estado_id' => 21, 'municipio' => 'Coatzingo'] , ['estado_id' => 21, 'municipio' 
            => 'Cohetzala'] , ['estado_id' => 21, 'municipio' => 'Cohuecan'] , ['estado_id' => 21, 'municipio' => 
            'Coronango'] , ['estado_id' => 21, 'municipio' => 'Coxcatlán'] , ['estado_id' => 21, 'municipio' => 
            'Coyomeapan'] , ['estado_id' => 21, 'municipio' => 'Coyotepec'] , ['estado_id' => 21, 'municipio' => 
            'Cuapiaxtla De Madero'] , ['estado_id' => 21, 'municipio' => 'Cuautempan'] , ['estado_id' => 21, 'municipio' 
            => 'Cuautinchán'] , ['estado_id' => 21, 'municipio' => 'Cuautlancingo'] , ['estado_id' => 21, 'municipio' => 
            'Cuayuca De Andrade'] , ['estado_id' => 21, 'municipio' => 'Cuetzalan Del Progreso'] , ['estado_id' => 21, 
            'municipio' => 'Cuyoaco'] , ['estado_id' => 21, 'municipio' => 'Chalchicomula De Sesma'] , ['estado_id' => 21, 
            'municipio' => 'Chapulco'] , ['estado_id' => 21, 'municipio' => 'Chiautla'] , ['estado_id' => 21, 'municipio' 
            => 'Chiautzingo'] , ['estado_id' => 21, 'municipio' => 'Chiconcuautla'] , ['estado_id' => 21, 'municipio' => 
            'Chichiquila'] , ['estado_id' => 21, 'municipio' => 'Chietla'] , ['estado_id' => 21, 'municipio' => 
            'Chigmecatitlán'] , ['estado_id' => 21, 'municipio' => 'Chignahuapan'] , ['estado_id' => 21, 'municipio' => 
            'Chignautla'] , ['estado_id' => 21, 'municipio' => 'Chila'] , ['estado_id' => 21, 'municipio' => 'Chila De La 
            Sal'] , ['estado_id' => 21, 'municipio' => 'Honey'] , ['estado_id' => 21, 'municipio' => 'Chilchotla'] , 
            ['estado_id' => 21, 'municipio' => 'Chinantla'] , ['estado_id' => 21, 'municipio' => 'Domingo Arenas'] , 
            ['estado_id' => 21, 'municipio' => 'Eloxochitlán'] , ['estado_id' => 21, 'municipio' => 'Epatlán'] , 
            ['estado_id' => 21, 'municipio' => 'Esperanza'] , ['estado_id' => 21, 'municipio' => 'Francisco Z. Mena'] , 
            ['estado_id' => 21, 'municipio' => 'General Felipe Ángeles'] , ['estado_id' => 21, 'municipio' => 'Guadalupe'] 
            , ['estado_id' => 21, 'municipio' => 'Guadalupe Victoria'] , ['estado_id' => 21, 'municipio' => 'Hermenegildo 
            Galeana'] , ['estado_id' => 21, 'municipio' => 'Huaquechula'] , ['estado_id' => 21, 'municipio' => 
            'Huatlatlauca'] , ['estado_id' => 21, 'municipio' => 'Huauchinango'] , ['estado_id' => 21, 'municipio' => 
            'Huehuetla'] , ['estado_id' => 21, 'municipio' => 'Huehuetlán El Chico'] , ['estado_id' => 21, 'municipio' => 
            'Huejotzingo'] , ['estado_id' => 21, 'municipio' => 'Hueyapan'] , ['estado_id' => 21, 'municipio' => 
            'Hueytamalco'] , ['estado_id' => 21, 'municipio' => 'Hueytlalpan'] , ['estado_id' => 21, 'municipio' => 
            'Huitzilan De Serdán'] , ['estado_id' => 21, 'municipio' => 'Huitziltepec'] , ['estado_id' => 21, 'municipio' 
            => 'Atlequizayan'] , ['estado_id' => 21, 'municipio' => 'Ixcamilpa De Guerrero'] , ['estado_id' => 21, 
            'municipio' => 'Ixcaquixtla'] , ['estado_id' => 21, 'municipio' => 'Ixtacamaxtitlán'] , ['estado_id' => 21, 
            'municipio' => 'Ixtepec'] , ['estado_id' => 21, 'municipio' => 'Izúcar De Matamoros'] , ['estado_id' => 21, 
            'municipio' => 'Jalpan'] , ['estado_id' => 21, 'municipio' => 'Jolalpan'] , ['estado_id' => 21, 'municipio' => 
            'Jonotla'] , ['estado_id' => 21, 'municipio' => 'Jopala'] , ['estado_id' => 21, 'municipio' => 'Juan C. 
            Bonilla'] , ['estado_id' => 21, 'municipio' => 'Juan Galindo'] , ['estado_id' => 21, 'municipio' => 'Juan N. 
            Méndez'] , ['estado_id' => 21, 'municipio' => 'Lafragua'] , ['estado_id' => 21, 'municipio' => 'Libres'] , 
            ['estado_id' => 21, 'municipio' => 'La Magdalena Tlatlauquitepec'] , ['estado_id' => 21, 'municipio' => 
            'Mazapiltepec De Juárez'] , ['estado_id' => 21, 'municipio' => 'Mixtla'] , ['estado_id' => 21, 'municipio' => 
            'Molcaxac'] , ['estado_id' => 21, 'municipio' => 'Cañada Morelos'] , ['estado_id' => 21, 'municipio' => 
            'Naupan'] , ['estado_id' => 21, 'municipio' => 'Nauzontla'] , ['estado_id' => 21, 'municipio' => 'Nealtican'] 
            , ['estado_id' => 21, 'municipio' => 'Nicolás Bravo'] , ['estado_id' => 21, 'municipio' => 'Nopalucan'] , 
            ['estado_id' => 21, 'municipio' => 'Ocotepec'] , ['estado_id' => 21, 'municipio' => 'Ocoyucan'] , ['estado_id' 
            => 21, 'municipio' => 'Olintla'] , ['estado_id' => 21, 'municipio' => 'Oriental'] , ['estado_id' => 21, 
            'municipio' => 'Pahuatlán'] , ['estado_id' => 21, 'municipio' => 'Palmar De Bravo'] , ['estado_id' => 21, 
            'municipio' => 'Pantepec'] , ['estado_id' => 21, 'municipio' => 'Petlalcingo'] , ['estado_id' => 21, 
            'municipio' => 'Piaxtla'] , ['estado_id' => 21, 'municipio' => 'Puebla'] , ['estado_id' => 21, 'municipio' => 
            'Quecholac'] , ['estado_id' => 21, 'municipio' => 'Quimixtlán'] , ['estado_id' => 21, 'municipio' => 'Rafael 
            Lara Grajales'] , ['estado_id' => 21, 'municipio' => 'Los Reyes De Juárez'] , ['estado_id' => 21, 'municipio' 
            => 'San Andrés Cholula'] , ['estado_id' => 21, 'municipio' => 'San Antonio Cañada'] , ['estado_id' => 21, 
            'municipio' => 'San Diego La Mesa Tochimiltzingo'] , ['estado_id' => 21, 'municipio' => 'San Felipe 
            Teotlalcingo'] , ['estado_id' => 21, 'municipio' => 'San Felipe Tepatlán'] , ['estado_id' => 21, 'municipio' 
            => 'San Gabriel Chilac'] , ['estado_id' => 21, 'municipio' => 'San Gregorio Atzompa'] , ['estado_id' => 21, 
            'municipio' => 'San Jerónimo Tecuanipan'] , ['estado_id' => 21, 'municipio' => 'San Jerónimo Xayacatlán'] , 
            ['estado_id' => 21, 'municipio' => 'San José Chiapa'] , ['estado_id' => 21, 'municipio' => 'San José 
            Miahuatlán'] , ['estado_id' => 21, 'municipio' => 'San Juan Atenco'] , ['estado_id' => 21, 'municipio' => 'San 
            Juan Atzompa'] , ['estado_id' => 21, 'municipio' => 'San Martín Texmelucan'] , ['estado_id' => 21, 'municipio' 
            => 'San Martín Totoltepec'] , ['estado_id' => 21, 'municipio' => 'San Matías Tlalancaleca'] , ['estado_id' => 
            21, 'municipio' => 'San Miguel Ixitlán'] , ['estado_id' => 21, 'municipio' => 'San Miguel Xoxtla'] , 
            ['estado_id' => 21, 'municipio' => 'San Nicolás Buenos Aires'] , ['estado_id' => 21, 'municipio' => 'San 
            Nicolás De Los Ranchos'] , ['estado_id' => 21, 'municipio' => 'San Pablo Anicano'] , ['estado_id' => 21, 
            'municipio' => 'San Pedro Cholula'] , ['estado_id' => 21, 'municipio' => 'San Pedro Yeloixtlahuaca'] , 
            ['estado_id' => 21, 'municipio' => 'San Salvador El Seco'] , ['estado_id' => 21, 'municipio' => 'San Salvador 
            El Verde'] , ['estado_id' => 21, 'municipio' => 'San Salvador Huixcolotla'] , ['estado_id' => 21, 'municipio' 
            => 'San Sebastián Tlacotepec'] , ['estado_id' => 21, 'municipio' => 'Santa Catarina Tlaltempan'] , 
            ['estado_id' => 21, 'municipio' => 'Santa Inés Ahuatempan'] , ['estado_id' => 21, 'municipio' => 'Santa Isabel 
            Cholula'] , ['estado_id' => 21, 'municipio' => 'Santiago Miahuatlán'] , ['estado_id' => 21, 'municipio' => 
            'Huehuetlán El Grande'] , ['estado_id' => 21, 'municipio' => 'Santo Tomás Hueyotlipan'] , ['estado_id' => 21, 
            'municipio' => 'Soltepec'] , ['estado_id' => 21, 'municipio' => 'Tecali De Herrera'] , ['estado_id' => 21, 
            'municipio' => 'Tecamachalco'] , ['estado_id' => 21, 'municipio' => 'Tecomatlán'] , ['estado_id' => 21, 
            'municipio' => 'Tehuacán'] , ['estado_id' => 21, 'municipio' => 'Tehuitzingo'] , ['estado_id' => 21, 
            'municipio' => 'Tenampulco'] , ['estado_id' => 21, 'municipio' => 'Teopantlán'] , ['estado_id' => 21, 
            'municipio' => 'Teotlalco'] , ['estado_id' => 21, 'municipio' => 'Tepanco De López'] , ['estado_id' => 21, 
            'municipio' => 'Tepango De Rodríguez'] , ['estado_id' => 21, 'municipio' => 'Tepatlaxco De Hidalgo'] , 
            ['estado_id' => 21, 'municipio' => 'Tepeaca'] , ['estado_id' => 21, 'municipio' => 'Tepemaxalco'] , 
            ['estado_id' => 21, 'municipio' => 'Tepeojuma'] , ['estado_id' => 21, 'municipio' => 'Tepetzintla'] , 
            ['estado_id' => 21, 'municipio' => 'Tepexco'] , ['estado_id' => 21, 'municipio' => 'Tepexi De Rodríguez'] , 
            ['estado_id' => 21, 'municipio' => 'Tepeyahualco'] , ['estado_id' => 21, 'municipio' => 'Tepeyahualco De 
            Cuauhtémoc'] , ['estado_id' => 21, 'municipio' => 'Tetela De Ocampo'] , ['estado_id' => 21, 'municipio' => 
            'Teteles De Avila Castillo'] , ['estado_id' => 21, 'municipio' => 'Teziutlán'] , ['estado_id' => 21, 
            'municipio' => 'Tianguismanalco'] , ['estado_id' => 21, 'municipio' => 'Tilapa'] , ['estado_id' => 21, 
            'municipio' => 'Tlacotepec De Benito Juárez'] , ['estado_id' => 21, 'municipio' => 'Tlacuilotepec'] , 
            ['estado_id' => 21, 'municipio' => 'Tlachichuca'] , ['estado_id' => 21, 'municipio' => 'Tlahuapan'] , 
            ['estado_id' => 21, 'municipio' => 'Tlaltenango'] , ['estado_id' => 21, 'municipio' => 'Tlanepantla'] , 
            ['estado_id' => 21, 'municipio' => 'Tlaola'] , ['estado_id' => 21, 'municipio' => 'Tlapacoya'] , ['estado_id' 
            => 21, 'municipio' => 'Tlapanalá'] , ['estado_id' => 21, 'municipio' => 'Tlatlauquitepec'] , ['estado_id' => 
            21, 'municipio' => 'Tlaxco'] , ['estado_id' => 21, 'municipio' => 'Tochimilco'] , ['estado_id' => 21, 
            'municipio' => 'Tochtepec'] , ['estado_id' => 21, 'municipio' => 'Totoltepec De Guerrero'] , ['estado_id' => 
            21, 'municipio' => 'Tulcingo'] , ['estado_id' => 21, 'municipio' => 'Tuzamapan De Galeana'] , ['estado_id' => 
            21, 'municipio' => 'Tzicatlacoyan'] , ['estado_id' => 21, 'municipio' => 'Venustiano Carranza'] , ['estado_id' 
            => 21, 'municipio' => 'Vicente Guerrero'] , ['estado_id' => 21, 'municipio' => 'Xayacatlán De Bravo'] , 
            ['estado_id' => 21, 'municipio' => 'Xicotepec'] , ['estado_id' => 21, 'municipio' => 'Xicotlán'] , 
            ['estado_id' => 21, 'municipio' => 'Xiutetelco'] , ['estado_id' => 21, 'municipio' => 'Xochiapulco'] , 
            ['estado_id' => 21, 'municipio' => 'Xochiltepec'] , ['estado_id' => 21, 'municipio' => 'Xochitlán De Vicente 
            Suárez'] , ['estado_id' => 21, 'municipio' => 'Xochitlán Todos Santos'] , ['estado_id' => 21, 'municipio' => 
            'Yaonáhuac'] , ['estado_id' => 21, 'municipio' => 'Yehualtepec'] , ['estado_id' => 21, 'municipio' => 
            'Zacapala'] , ['estado_id' => 21, 'municipio' => 'Zacapoaxtla'] , ['estado_id' => 21, 'municipio' => 
            'Zacatlán'] , ['estado_id' => 21, 'municipio' => 'Zapotitlán'] , ['estado_id' => 21, 'municipio' => 
            'Zapotitlán De Méndez'] , ['estado_id' => 21, 'municipio' => 'Zaragoza'] , ['estado_id' => 21, 'municipio' => 
            'Zautla'] , ['estado_id' => 21, 'municipio' => 'Zihuateutla'] , ['estado_id' => 21, 'municipio' => 
            'Zinacatepec'] , ['estado_id' => 21, 'municipio' => 'Zongozotla'] , ['estado_id' => 21, 'municipio' => 
            'Zoquiapan'] , ['estado_id' => 21, 'municipio' => 'Zoquitlán'] , ['estado_id' => 22, 'municipio' => 'Amealco 
            De Bonfil'] , ['estado_id' => 22, 'municipio' => 'Pinal De Amoles'] , ['estado_id' => 22, 'municipio' => 
            'Arroyo Seco'] , ['estado_id' => 22, 'municipio' => 'Cadereyta De Montes'] , ['estado_id' => 22, 'municipio' 
            => 'Colón'] , ['estado_id' => 22, 'municipio' => 'Corregidora'] , ['estado_id' => 22, 'municipio' => 'Ezequiel 
            Montes'] , ['estado_id' => 22, 'municipio' => 'Huimilpan'] , ['estado_id' => 22, 'municipio' => 'Jalpan De 
            Serra'] , ['estado_id' => 22, 'municipio' => 'Landa De Matamoros'] , ['estado_id' => 22, 'municipio' => 'El 
            Marqués'] , ['estado_id' => 22, 'municipio' => 'Pedro Escobedo'] , ['estado_id' => 22, 'municipio' => 
            'Peñamiller'] , ['estado_id' => 22, 'municipio' => 'Querétaro'] , ['estado_id' => 22, 'municipio' => 'San 
            Joaquín'] , ['estado_id' => 22, 'municipio' => 'San Juan Del Río'] , ['estado_id' => 22, 'municipio' => 
            'Tequisquiapan'] , ['estado_id' => 22, 'municipio' => 'Tolimán'] , ['estado_id' => 23, 'municipio' => 
            'Cozumel'] , ['estado_id' => 23, 'municipio' => 'Felipe Carrillo Puerto'] , ['estado_id' => 23, 'municipio' => 
            'Isla Mujeres'] , ['estado_id' => 23, 'municipio' => 'Othón P. Blanco'] , ['estado_id' => 23, 'municipio' => 
            'Benito Juárez'] , ['estado_id' => 23, 'municipio' => 'José María Morelos'] , ['estado_id' => 23, 'municipio' 
            => 'Lázaro Cárdenas'] , ['estado_id' => 23, 'municipio' => 'Solidaridad'] , ['estado_id' => 23, 'municipio' => 
            'Tulum'] , ['estado_id' => 23, 'municipio' => 'Bacalar'] , ['estado_id' => 23, 'municipio' => 'Puerto 
            Morelos'] , ['estado_id' => 24, 'municipio' => 'Ahualulco'] , ['estado_id' => 24, 'municipio' => 'Alaquines'] 
            , ['estado_id' => 24, 'municipio' => 'Aquismón'] , ['estado_id' => 24, 'municipio' => 'Armadillo De Los 
            Infante'] , ['estado_id' => 24, 'municipio' => 'Cárdenas'] , ['estado_id' => 24, 'municipio' => 'Catorce'] , 
            ['estado_id' => 24, 'municipio' => 'Cedral'] , ['estado_id' => 24, 'municipio' => 'Cerritos'] , ['estado_id' 
            => 24, 'municipio' => 'Cerro De San Pedro'] , ['estado_id' => 24, 'municipio' => 'Ciudad Del Maíz'] , 
            ['estado_id' => 24, 'municipio' => 'Ciudad Fernández'] , ['estado_id' => 24, 'municipio' => 'Tancanhuitz'] , 
            ['estado_id' => 24, 'municipio' => 'Ciudad Valles'] , ['estado_id' => 24, 'municipio' => 'Coxcatlán'] , 
            ['estado_id' => 24, 'municipio' => 'Charcas'] , ['estado_id' => 24, 'municipio' => 'Ebano'] , ['estado_id' => 
            24, 'municipio' => 'Guadalcázar'] , ['estado_id' => 24, 'municipio' => 'Huehuetlán'] , ['estado_id' => 24, 
            'municipio' => 'Lagunillas'] , ['estado_id' => 24, 'municipio' => 'Matehuala'] , ['estado_id' => 24, 
            'municipio' => 'Mexquitic De Carmona'] , ['estado_id' => 24, 'municipio' => 'Moctezuma'] , ['estado_id' => 24, 
            'municipio' => 'Rayón'] , ['estado_id' => 24, 'municipio' => 'Rioverde'] , ['estado_id' => 24, 'municipio' => 
            'Salinas'] , ['estado_id' => 24, 'municipio' => 'San Antonio'] , ['estado_id' => 24, 'municipio' => 'San Ciro 
            De Acosta'] , ['estado_id' => 24, 'municipio' => 'San Luis Potosí'] , ['estado_id' => 24, 'municipio' => 'San 
            Martín Chalchicuautla'] , ['estado_id' => 24, 'municipio' => 'San Nicolás Tolentino'] , ['estado_id' => 24, 
            'municipio' => 'Santa Catarina'] , ['estado_id' => 24, 'municipio' => 'Santa María Del Río'] , ['estado_id' => 
            24, 'municipio' => 'Santo Domingo'] , ['estado_id' => 24, 'municipio' => 'San Vicente Tancuayalab'] , 
            ['estado_id' => 24, 'municipio' => 'Soledad De Graciano Sánchez'] , ['estado_id' => 24, 'municipio' => 
            'Tamasopo'] , ['estado_id' => 24, 'municipio' => 'Tamazunchale'] , ['estado_id' => 24, 'municipio' => 
            'Tampacán'] , ['estado_id' => 24, 'municipio' => 'Tampamolón Corona'] , ['estado_id' => 24, 'municipio' => 
            'Tamuín'] , ['estado_id' => 24, 'municipio' => 'Tanlajás'] , ['estado_id' => 24, 'municipio' => 'Tanquián De 
            Escobedo'] , ['estado_id' => 24, 'municipio' => 'Tierra Nueva'] , ['estado_id' => 24, 'municipio' => 
            'Vanegas'] , ['estado_id' => 24, 'municipio' => 'Venado'] , ['estado_id' => 24, 'municipio' => 'Villa De 
            Arriaga'] , ['estado_id' => 24, 'municipio' => 'Villa De Guadalupe'] , ['estado_id' => 24, 'municipio' => 
            'Villa De La Paz'] , ['estado_id' => 24, 'municipio' => 'Villa De Ramos'] , ['estado_id' => 24, 'municipio' => 
            'Villa De Reyes'] , ['estado_id' => 24, 'municipio' => 'Villa Hidalgo'] , ['estado_id' => 24, 'municipio' => 
            'Villa Juárez'] , ['estado_id' => 24, 'municipio' => 'Axtla De Terrazas'] , ['estado_id' => 24, 'municipio' => 
            'Xilitla'] , ['estado_id' => 24, 'municipio' => 'Zaragoza'] , ['estado_id' => 24, 'municipio' => 'Villa De 
            Arista'] , ['estado_id' => 24, 'municipio' => 'Matlapa'] , ['estado_id' => 24, 'municipio' => 'El Naranjo'] , 
            ['estado_id' => 25, 'municipio' => 'Ahome'] , ['estado_id' => 25, 'municipio' => 'Angostura'] , ['estado_id' 
            => 25, 'municipio' => 'Badiraguato'] , ['estado_id' => 25, 'municipio' => 'Concordia'] , ['estado_id' => 25, 
            'municipio' => 'Cosalá'] , ['estado_id' => 25, 'municipio' => 'Culiacán'] , ['estado_id' => 25, 'municipio' => 
            'Choix'] , ['estado_id' => 25, 'municipio' => 'Elota'] , ['estado_id' => 25, 'municipio' => 'Escuinapa'] , 
            ['estado_id' => 25, 'municipio' => 'El Fuerte'] , ['estado_id' => 25, 'municipio' => 'Guasave'] , ['estado_id' 
            => 25, 'municipio' => 'Mazatlán'] , ['estado_id' => 25, 'municipio' => 'Mocorito'] , ['estado_id' => 25, 
            'municipio' => 'Rosario'] , ['estado_id' => 25, 'municipio' => 'Salvador Alvarado'] , ['estado_id' => 25, 
            'municipio' => 'San Ignacio'] , ['estado_id' => 25, 'municipio' => 'Sinaloa'] , ['estado_id' => 25, 
            'municipio' => 'Navolato'] , ['estado_id' => 26, 'municipio' => 'Aconchi'] , ['estado_id' => 26, 'municipio' 
            => 'Agua Prieta'] , ['estado_id' => 26, 'municipio' => 'Alamos'] , ['estado_id' => 26, 'municipio' => 'Altar'] 
            , ['estado_id' => 26, 'municipio' => 'Arivechi'] , ['estado_id' => 26, 'municipio' => 'Arizpe'] , ['estado_id' 
            => 26, 'municipio' => 'Atil'] , ['estado_id' => 26, 'municipio' => 'Bacadéhuachi'] , ['estado_id' => 26, 
            'municipio' => 'Bacanora'] , ['estado_id' => 26, 'municipio' => 'Bacerac'] , ['estado_id' => 26, 'municipio' 
            => 'Bacoachi'] , ['estado_id' => 26, 'municipio' => 'Bácum'] , ['estado_id' => 26, 'municipio' => 'Banámichi'] 
            , ['estado_id' => 26, 'municipio' => 'Baviácora'] , ['estado_id' => 26, 'municipio' => 'Bavispe'] , 
            ['estado_id' => 26, 'municipio' => 'Benjamín Hill'] , ['estado_id' => 26, 'municipio' => 'Caborca'] , 
            ['estado_id' => 26, 'municipio' => 'Cajeme'] , ['estado_id' => 26, 'municipio' => 'Cananea'] , ['estado_id' => 
            26, 'municipio' => 'Carbó'] , ['estado_id' => 26, 'municipio' => 'La Colorada'] , ['estado_id' => 26, 
            'municipio' => 'Cucurpe'] , ['estado_id' => 26, 'municipio' => 'Cumpas'] , ['estado_id' => 26, 'municipio' => 
            'Divisaderos'] , ['estado_id' => 26, 'municipio' => 'Empalme'] , ['estado_id' => 26, 'municipio' => 
            'Etchojoa'] , ['estado_id' => 26, 'municipio' => 'Fronteras'] , ['estado_id' => 26, 'municipio' => 'Granados'] 
            , ['estado_id' => 26, 'municipio' => 'Guaymas'] , ['estado_id' => 26, 'municipio' => 'Hermosillo'] , 
            ['estado_id' => 26, 'municipio' => 'Huachinera'] , ['estado_id' => 26, 'municipio' => 'Huásabas'] , 
            ['estado_id' => 26, 'municipio' => 'Huatabampo'] , ['estado_id' => 26, 'municipio' => 'Huépac'] , ['estado_id' 
            => 26, 'municipio' => 'Imuris'] , ['estado_id' => 26, 'municipio' => 'Magdalena'] , ['estado_id' => 26, 
            'municipio' => 'Mazatán'] , ['estado_id' => 26, 'municipio' => 'Moctezuma'] , ['estado_id' => 26, 'municipio' 
            => 'Naco'] , ['estado_id' => 26, 'municipio' => 'Nácori Chico'] , ['estado_id' => 26, 'municipio' => 'Nacozari 
            De García'] , ['estado_id' => 26, 'municipio' => 'Navojoa'] , ['estado_id' => 26, 'municipio' => 'Nogales'], 
            ['estado_id' => 26, 'municipio' => 'Onavas'] , ['estado_id' => 26, 'municipio' => 'Opodepe'] , ['estado_id' => 
            26, 'municipio' => 'Oquitoa'] , ['estado_id' => 26, 'municipio' => 'Pitiquito'] , ['estado_id' => 26, 
            'municipio' => 'Puerto Peñasco'] , ['estado_id' => 26, 'municipio' => 'Quiriego'] , ['estado_id' => 26, 
            'municipio' => 'Rayón'] , ['estado_id' => 26, 'municipio' => 'Rosario'] , ['estado_id' => 26, 'municipio' => 
            'Sahuaripa'] , ['estado_id' => 26, 'municipio' => 'San Felipe De Jesús'] , ['estado_id' => 26, 'municipio' => 
            'San Javier'] , ['estado_id' => 26, 'municipio' => 'San Luis Río Colorado'] , ['estado_id' => 26, 'municipio' 
            => 'San Miguel De Horcasitas'] , ['estado_id' => 26, 'municipio' => 'San Pedro De La Cueva'] , ['estado_id' => 
            26, 'municipio' => 'Santa Ana'] , ['estado_id' => 26, 'municipio' => 'Santa Cruz'] , ['estado_id' => 26, 
            'municipio' => 'Sáric'] , ['estado_id' => 26, 'municipio' => 'Soyopa'] , ['estado_id' => 26, 'municipio' => 
            'Suaqui Grande'] , ['estado_id' => 26, 'municipio' => 'Tepache'] , ['estado_id' => 26, 'municipio' => 
            'Trincheras'] , ['estado_id' => 26, 'municipio' => 'Tubutama'] , ['estado_id' => 26, 'municipio' => 'Ures'] , 
            ['estado_id' => 26, 'municipio' => 'Villa Hidalgo'] , ['estado_id' => 26, 'municipio' => 'Villa Pesqueira'] , 
            ['estado_id' => 26, 'municipio' => 'Yécora'] , ['estado_id' => 26, 'municipio' => 'General Plutarco Elías 
            Calles'] , ['estado_id' => 26, 'municipio' => 'Benito Juárez'] , ['estado_id' => 26, 'municipio' => 'San 
            Ignacio Río Muerto'] , ['estado_id' => 27, 'municipio' => 'Balancán'] , ['estado_id' => 27, 'municipio' => 
            'Cárdenas'] , ['estado_id' => 27, 'municipio' => 'Centla'] , ['estado_id' => 27, 'municipio' => 'Centro'] , 
            ['estado_id' => 27, 'municipio' => 'Comalcalco'] , ['estado_id' => 27, 'municipio' => 'Cunduacán'] , 
            ['estado_id' => 27, 'municipio' => 'Emiliano Zapata'] , ['estado_id' => 27, 'municipio' => 'Huimanguillo'] , 
            ['estado_id' => 27, 'municipio' => 'Jalapa'] , ['estado_id' => 27, 'municipio' => 'Jalpa De Méndez'] , 
            ['estado_id' => 27, 'municipio' => 'Jonuta'] , ['estado_id' => 27, 'municipio' => 'Macuspana'] , ['estado_id' 
            => 27, 'municipio' => 'Nacajuca'] , ['estado_id' => 27, 'municipio' => 'Paraíso'] , ['estado_id' => 27, 
            'municipio' => 'Tacotalpa'] , ['estado_id' => 27, 'municipio' => 'Teapa'] , ['estado_id' => 27, 'municipio' => 
            'Tenosique'] , ['estado_id' => 28, 'municipio' => 'Abasolo'] , ['estado_id' => 28, 'municipio' => 'Aldama'] , 
            ['estado_id' => 28, 'municipio' => 'Altamira'] , ['estado_id' => 28, 'municipio' => 'Antiguo Morelos'] , 
            ['estado_id' => 28, 'municipio' => 'Burgos'] , ['estado_id' => 28, 'municipio' => 'Bustamante'] , ['estado_id' 
            => 28, 'municipio' => 'Camargo'] , ['estado_id' => 28, 'municipio' => 'Casas'] , ['estado_id' => 28, 
            'municipio' => 'Ciudad Madero'] , ['estado_id' => 28, 'municipio' => 'Cruillas'] , ['estado_id' => 28, 
            'municipio' => 'Gómez Farías'] , ['estado_id' => 28, 'municipio' => 'González'] , ['estado_id' => 28, 
            'municipio' => 'Güémez'] , ['estado_id' => 28, 'municipio' => 'Guerrero'] , ['estado_id' => 28, 'municipio' => 
            'Gustavo Díaz Ordaz'] , ['estado_id' => 28, 'municipio' => 'Hidalgo'] , ['estado_id' => 28, 'municipio' => 
            'Jaumave'] , ['estado_id' => 28, 'municipio' => 'Jiménez'] , ['estado_id' => 28, 'municipio' => 'Llera'] , 
            ['estado_id' => 28, 'municipio' => 'Mainero'] , ['estado_id' => 28, 'municipio' => 'El Mante'] , ['estado_id' 
            => 28, 'municipio' => 'Matamoros'] , ['estado_id' => 28, 'municipio' => 'Méndez'] , ['estado_id' => 28, 
            'municipio' => 'Mier'] , ['estado_id' => 28, 'municipio' => 'Miguel Alemán'] , ['estado_id' => 28, 'municipio' 
            => 'Miquihuana'] , ['estado_id' => 28, 'municipio' => 'Nuevo Laredo'] , ['estado_id' => 28, 'municipio' => 
            'Nuevo Morelos'] , ['estado_id' => 28, 'municipio' => 'Ocampo'] , ['estado_id' => 28, 'municipio' => 
            'Padilla'] , ['estado_id' => 28, 'municipio' => 'Palmillas'] , ['estado_id' => 28, 'municipio' => 'Reynosa'] , 
            ['estado_id' => 28, 'municipio' => 'Río Bravo'] , ['estado_id' => 28, 'municipio' => 'San Carlos'] , 
            ['estado_id' => 28, 'municipio' => 'San Fernando'] , ['estado_id' => 28, 'municipio' => 'San Nicolás'] , 
            ['estado_id' => 28, 'municipio' => 'Soto La Marina'] , ['estado_id' => 28, 'municipio' => 'Tampico'] , 
            ['estado_id' => 28, 'municipio' => 'Tula'] , ['estado_id' => 28, 'municipio' => 'Valle Hermoso'] , 
            ['estado_id' => 28, 'municipio' => 'Victoria'] , ['estado_id' => 28, 'municipio' => 'Villagrán'] , 
            ['estado_id' => 28, 'municipio' => 'Xicoténcatl'] , ['estado_id' => 29, 'municipio' => 'Amaxac De Guerrero'] , 
            ['estado_id' => 29, 'municipio' => 'Apetatitlán De Antonio Carvajal'] , ['estado_id' => 29, 'municipio' => 
            'Atlangatepec'] , ['estado_id' => 29, 'municipio' => 'Atltzayanca'] , ['estado_id' => 29, 'municipio' => 
            'Apizaco'] , ['estado_id' => 29, 'municipio' => 'Calpulalpan'] , ['estado_id' => 29, 'municipio' => 'El Carmen 
            Tequexquitla'] , ['estado_id' => 29, 'municipio' => 'Cuapiaxtla'] , ['estado_id' => 29, 'municipio' => 
            'Cuaxomulco'] , ['estado_id' => 29, 'municipio' => 'Chiautempan'] , ['estado_id' => 29, 'municipio' => 'Muñoz 
            De Domingo Arenas'] , ['estado_id' => 29, 'municipio' => 'Españita'] , ['estado_id' => 29, 'municipio' => 
            'Huamantla'] , ['estado_id' => 29, 'municipio' => 'Hueyotlipan'] , ['estado_id' => 29, 'municipio' => 
            'Ixtacuixtla De Mariano Matamoros'] , ['estado_id' => 29, 'municipio' => 'Ixtenco'] , ['estado_id' => 29, 
            'municipio' => 'Mazatecochco De José María Morelos'] , ['estado_id' => 29, 'municipio' => 'Contla De Juan 
            Cuamatzi'] , ['estado_id' => 29, 'municipio' => 'Tepetitla De Lardizábal'] , ['estado_id' => 29, 'municipio' 
            => 'Sanctórum De Lázaro Cárdenas'] , ['estado_id' => 29, 'municipio' => 'Nanacamilpa De Mariano Arista'] , 
            ['estado_id' => 29, 'municipio' => 'Acuamanala De Miguel Hidalgo'] , ['estado_id' => 29, 'municipio' => 
            'Natívitas'] , ['estado_id' => 29, 'municipio' => 'Panotla'] , ['estado_id' => 29, 'municipio' => 'San Pablo 
            Del Monte'] , ['estado_id' => 29, 'municipio' => 'Santa Cruz Tlaxcala'] , ['estado_id' => 29, 'municipio' => 
            'Tenancingo'] , ['estado_id' => 29, 'municipio' => 'Teolocholco'] , ['estado_id' => 29, 'municipio' => 
            'Tepeyanco'] , ['estado_id' => 29, 'municipio' => 'Terrenate'] , ['estado_id' => 29, 'municipio' => 'Tetla De 
            La Solidaridad'] , ['estado_id' => 29, 'municipio' => 'Tetlatlahuca'] , ['estado_id' => 29, 'municipio' => 
            'Tlaxcala'] , ['estado_id' => 29, 'municipio' => 'Tlaxco'] , ['estado_id' => 29, 'municipio' => 'Tocatlán'] , 
            ['estado_id' => 29, 'municipio' => 'Totolac'] , ['estado_id' => 29, 'municipio' => 'Ziltlaltépec De Trinidad 
            Sánchez Santos'] , ['estado_id' => 29, 'municipio' => 'Tzompantepec'] , ['estado_id' => 29, 'municipio' => 
            'Xaloztoc'] , ['estado_id' => 29, 'municipio' => 'Xaltocan'] , ['estado_id' => 29, 'municipio' => 'Papalotla 
            De Xicohténcatl'] , ['estado_id' => 29, 'municipio' => 'Xicohtzinco'] , ['estado_id' => 29, 'municipio' => 
            'Yauhquemehcan'] , ['estado_id' => 29, 'municipio' => 'Zacatelco'] , ['estado_id' => 29, 'municipio' => 
            'Benito Juárez'] , ['estado_id' => 29, 'municipio' => 'Emiliano Zapata'] , ['estado_id' => 29, 'municipio' => 
            'Lázaro Cárdenas'] , ['estado_id' => 29, 'municipio' => 'La Magdalena Tlaltelulco'] , ['estado_id' => 29, 
            'municipio' => 'San Damián Texóloc'] , ['estado_id' => 29, 'municipio' => 'San Francisco Tetlanohcan'] , 
            ['estado_id' => 29, 'municipio' => 'San Jerónimo Zacualpan'] , ['estado_id' => 29, 'municipio' => 'San José 
            Teacalco'] , ['estado_id' => 29, 'municipio' => 'San Juan Huactzinco'] , ['estado_id' => 29, 'municipio' => 
            'San Lorenzo Axocomanitla'] , ['estado_id' => 29, 'municipio' => 'San Lucas Tecopilco'] , ['estado_id' => 29, 
            'municipio' => 'Santa Ana Nopalucan'] , ['estado_id' => 29, 'municipio' => 'Santa Apolonia Teacalco'] , 
            ['estado_id' => 29, 'municipio' => 'Santa Catarina Ayometla'] , ['estado_id' => 29, 'municipio' => 'Santa Cruz 
            Quilehtla'] , ['estado_id' => 29, 'municipio' => 'Santa Isabel Xiloxoxtla'] , ['estado_id' => 30, 'municipio' 
            => 'Acajete'] , ['estado_id' => 30, 'municipio' => 'Acatlán'] , ['estado_id' => 30, 'municipio' => 'Acayucan'] 
            , ['estado_id' => 30, 'municipio' => 'Actopan'] , ['estado_id' => 30, 'municipio' => 'Acula'] , ['estado_id' 
            => 30, 'municipio' => 'Acultzingo'] , ['estado_id' => 30, 'municipio' => 'Camarón De Tejeda'] , ['estado_id' 
            => 30, 'municipio' => 'Alpatláhuac'] , ['estado_id' => 30, 'municipio' => 'Alto Lucero De Gutiérrez Barrios'] 
            , ['estado_id' => 30, 'municipio' => 'Altotonga'] , ['estado_id' => 30, 'municipio' => 'Alvarado'] , 
            ['estado_id' => 30, 'municipio' => 'Amatitlán'] , ['estado_id' => 30, 'municipio' => 'Naranjos Amatlán'] , 
            ['estado_id' => 30, 'municipio' => 'Amatlán De Los Reyes'] , ['estado_id' => 30, 'municipio' => 'Angel R. 
            Cabada'] , ['estado_id' => 30, 'municipio' => 'La Antigua'] , ['estado_id' => 30, 'municipio' => 'Apazapan'] , 
            ['estado_id' => 30, 'municipio' => 'Aquila'] , ['estado_id' => 30, 'municipio' => 'Astacinga'] , ['estado_id' 
            => 30, 'municipio' => 'Atlahuilco'] , ['estado_id' => 30, 'municipio' => 'Atoyac'] , ['estado_id' => 30, 
            'municipio' => 'Atzacan'] , ['estado_id' => 30, 'municipio' => 'Atzalan'] , ['estado_id' => 30, 'municipio' => 
            'Tlaltetela'] , ['estado_id' => 30, 'municipio' => 'Ayahualulco'] , ['estado_id' => 30, 'municipio' => 
            'Banderilla'] , ['estado_id' => 30, 'municipio' => 'Benito Juárez'] , ['estado_id' => 30, 'municipio' => 'Boca 
            Del Río'] , ['estado_id' => 30, 'municipio' => 'Calcahualco'] , ['estado_id' => 30, 'municipio' => 'Camerino 
            Z. Mendoza'] , ['estado_id' => 30, 'municipio' => 'Carrillo Puerto'] , ['estado_id' => 30, 'municipio' => 
            'Catemaco'] , ['estado_id' => 30, 'municipio' => 'Cazones De Herrera'] , ['estado_id' => 30, 'municipio' => 
            'Cerro Azul'] , ['estado_id' => 30, 'municipio' => 'Citlaltépetl'] , ['estado_id' => 30, 'municipio' => 
            'Coacoatzintla'] , ['estado_id' => 30, 'municipio' => 'Coahuitlán'] , ['estado_id' => 30, 'municipio' => 
            'Coatepec'] , ['estado_id' => 30, 'municipio' => 'Coatzacoalcos'] , ['estado_id' => 30, 'municipio' => 
            'Coatzintla'] , ['estado_id' => 30, 'municipio' => 'Coetzala'] , ['estado_id' => 30, 'municipio' => 'Colipa'] 
            , ['estado_id' => 30, 'municipio' => 'Comapa'] , ['estado_id' => 30, 'municipio' => 'Córdoba'] , ['estado_id' 
            => 30, 'municipio' => 'Cosamaloapan De Carpio'] , ['estado_id' => 30, 'municipio' => 'Cosautlán De Carvajal'] 
            , ['estado_id' => 30, 'municipio' => 'Coscomatepec'] , ['estado_id' => 30, 'municipio' => 'Cosoleacaque'] , 
            ['estado_id' => 30, 'municipio' => 'Cotaxtla'] , ['estado_id' => 30, 'municipio' => 'Coxquihui'] , 
            ['estado_id' => 30, 'municipio' => 'Coyutla'] , ['estado_id' => 30, 'municipio' => 'Cuichapa'] , ['estado_id' 
            => 30, 'municipio' => 'Cuitláhuac'] , ['estado_id' => 30, 'municipio' => 'Chacaltianguis'] , ['estado_id' => 
            30, 'municipio' => 'Chalma'] , ['estado_id' => 30, 'municipio' => 'Chiconamel'] , ['estado_id' => 30, 
            'municipio' => 'Chiconquiaco'] , ['estado_id' => 30, 'municipio' => 'Chicontepec'] , ['estado_id' => 30, 
            'municipio' => 'Chinameca'] , ['estado_id' => 30, 'municipio' => 'Chinampa De Gorostiza'] , ['estado_id' => 
            30, 'municipio' => 'Las Choapas'] , ['estado_id' => 30, 'municipio' => 'Chocamán'] , ['estado_id' => 30, 
            'municipio' => 'Chontla'] , ['estado_id' => 30, 'municipio' => 'Chumatlán'] , ['estado_id' => 30, 'municipio' 
            => 'Emiliano Zapata'] , ['estado_id' => 30, 'municipio' => 'Espinal'] , ['estado_id' => 30, 'municipio' => 
            'Filomeno Mata'] , ['estado_id' => 30, 'municipio' => 'Fortín'] , ['estado_id' => 30, 'municipio' => 
            'Gutiérrez Zamora'] , ['estado_id' => 30, 'municipio' => 'Hidalgotitlán'] , ['estado_id' => 30, 'municipio' => 
            'Huatusco'] , ['estado_id' => 30, 'municipio' => 'Huayacocotla'] , ['estado_id' => 30, 'municipio' => 
            'Hueyapan De Ocampo'] , ['estado_id' => 30, 'municipio' => 'Huiloapan De Cuauhtémoc'] , ['estado_id' => 30, 
            'municipio' => 'Ignacio De La Llave'] , ['estado_id' => 30, 'municipio' => 'Ilamatlán'] , ['estado_id' => 30, 
            'municipio' => 'Isla'] , ['estado_id' => 30, 'municipio' => 'Ixcatepec'] , ['estado_id' => 30, 'municipio' => 
            'Ixhuacán De Los Reyes'] , ['estado_id' => 30, 'municipio' => 'Ixhuatlán Del Café'] , ['estado_id' => 30, 
            'municipio' => 'Ixhuatlancillo'] , ['estado_id' => 30, 'municipio' => 'Ixhuatlán Del Sureste'] , ['estado_id' 
            => 30, 'municipio' => 'Ixhuatlán De Madero'] , ['estado_id' => 30, 'municipio' => 'Ixmatlahuacan'] , 
            ['estado_id' => 30, 'municipio' => 'Ixtaczoquitlán'] , ['estado_id' => 30, 'municipio' => 'Jalacingo'] , 
            ['estado_id' => 30, 'municipio' => 'Xalapa'] , ['estado_id' => 30, 'municipio' => 'Jalcomulco'] , ['estado_id' 
            => 30, 'municipio' => 'Jáltipan'] , ['estado_id' => 30, 'municipio' => 'Jamapa'] , ['estado_id' => 30, 
            'municipio' => 'Jesús Carranza'] , ['estado_id' => 30, 'municipio' => 'Xico'] , ['estado_id' => 30, 
            'municipio' => 'Jilotepec'] , ['estado_id' => 30, 'municipio' => 'Juan Rodríguez Clara'] , ['estado_id' => 30, 
            'municipio' => 'Juchique De Ferrer'] , ['estado_id' => 30, 'municipio' => 'Landero Y Coss'] , ['estado_id' => 
            30, 'municipio' => 'Lerdo De Tejada'] , ['estado_id' => 30, 'municipio' => 'Magdalena'] , ['estado_id' => 30, 
            'municipio' => 'Maltrata'] , ['estado_id' => 30, 'municipio' => 'Manlio Fabio Altamirano'] , ['estado_id' => 
            30, 'municipio' => 'Mariano Escobedo'] , ['estado_id' => 30, 'municipio' => 'Martínez De La Torre'] , 
            ['estado_id' => 30, 'municipio' => 'Mecatlán'] , ['estado_id' => 30, 'municipio' => 'Mecayapan'] , 
            ['estado_id' => 30, 'municipio' => 'Medellín De Bravo'] , ['estado_id' => 30, 'municipio' => 'Miahuatlán'] , 
            ['estado_id' => 30, 'municipio' => 'Las Minas'] , ['estado_id' => 30, 'municipio' => 'Minatitlán'] , 
            ['estado_id' => 30, 'municipio' => 'Misantla'] , ['estado_id' => 30, 'municipio' => 'Mixtla De Altamirano'] , 
            ['estado_id' => 30, 'municipio' => 'Moloacán'] , ['estado_id' => 30, 'municipio' => 'Naolinco'] , ['estado_id' 
            => 30, 'municipio' => 'Naranjal'] , ['estado_id' => 30, 'municipio' => 'Nautla'] , ['estado_id' => 30, 
            'municipio' => 'Nogales'] , ['estado_id' => 30, 'municipio' => 'Oluta'] , ['estado_id' => 30, 'municipio' => 
            'Omealca'] , ['estado_id' => 30, 'municipio' => 'Orizaba'] , ['estado_id' => 30, 'municipio' => 'Otatitlán'] , 
            ['estado_id' => 30, 'municipio' => 'Oteapan'] , ['estado_id' => 30, 'municipio' => 'Ozuluama De Mascareñas'] , 
            ['estado_id' => 30, 'municipio' => 'Pajapan'] , ['estado_id' => 30, 'municipio' => 'Pánuco'] , ['estado_id' => 
            30, 'municipio' => 'Papantla'] , ['estado_id' => 30, 'municipio' => 'Paso Del Macho'] , ['estado_id' => 30, 
            'municipio' => 'Paso De Ovejas'] , ['estado_id' => 30, 'municipio' => 'La Perla'] , ['estado_id' => 30, 
            'municipio' => 'Perote'] , ['estado_id' => 30, 'municipio' => 'Platón Sánchez'] , ['estado_id' => 30, 
            'municipio' => 'Playa Vicente'] , ['estado_id' => 30, 'municipio' => 'Poza Rica De Hidalgo'] , ['estado_id' => 
            30, 'municipio' => 'Las Vigas De Ramírez'] , ['estado_id' => 30, 'municipio' => 'Pueblo Viejo'] , ['estado_id' 
            => 30, 'municipio' => 'Puente Nacional'] , ['estado_id' => 30, 'municipio' => 'Rafael Delgado'] , ['estado_id' 
            => 30, 'municipio' => 'Rafael Lucio'] , ['estado_id' => 30, 'municipio' => 'Los Reyes'] , ['estado_id' => 30, 
            'municipio' => 'Río Blanco'] , ['estado_id' => 30, 'municipio' => 'Saltabarranca'] , ['estado_id' => 30, 
            'municipio' => 'San Andrés Tenejapan'] , ['estado_id' => 30, 'municipio' => 'San Andrés Tuxtla'] , 
            ['estado_id' => 30, 'municipio' => 'San Juan Evangelista'] , ['estado_id' => 30, 'municipio' => 'Santiago 
            Tuxtla'] , ['estado_id' => 30, 'municipio' => 'Sayula De Alemán'] , ['estado_id' => 30, 'municipio' => 
            'Soconusco'] , ['estado_id' => 30, 'municipio' => 'Sochiapa'] , ['estado_id' => 30, 'municipio' => 'Soledad 
            Atzompa'] , ['estado_id' => 30, 'municipio' => 'Soledad De Doblado'] , ['estado_id' => 30, 'municipio' => 
            'Soteapan'] , ['estado_id' => 30, 'municipio' => 'Tamalín'] , ['estado_id' => 30, 'municipio' => 'Tamiahua'] , 
            ['estado_id' => 30, 'municipio' => 'Tampico Alto'] , ['estado_id' => 30, 'municipio' => 'Tancoco'] , 
            ['estado_id' => 30, 'municipio' => 'Tantima'] , ['estado_id' => 30, 'municipio' => 'Tantoyuca'] , ['estado_id' 
            => 30, 'municipio' => 'Tatatila'] , ['estado_id' => 30, 'municipio' => 'Castillo De Teayo'] , ['estado_id' => 
            30, 'municipio' => 'Tecolutla'] , ['estado_id' => 30, 'municipio' => 'Tehuipango'] , ['estado_id' => 30, 
            'municipio' => 'Álamo Temapache'] , ['estado_id' => 30, 'municipio' => 'Tempoal'] , ['estado_id' => 30, 
            'municipio' => 'Tenampa'] , ['estado_id' => 30, 'municipio' => 'Tenochtitlán'] , ['estado_id' => 30, 
            'municipio' => 'Teocelo'] , ['estado_id' => 30, 'municipio' => 'Tepatlaxco'] , ['estado_id' => 30, 'municipio' 
            => 'Tepetlán'] , ['estado_id' => 30, 'municipio' => 'Tepetzintla'] , ['estado_id' => 30, 'municipio' => 
            'Tequila'] , ['estado_id' => 30, 'municipio' => 'José Azueta'] , ['estado_id' => 30, 'municipio' => 
            'Texcatepec'] , ['estado_id' => 30, 'municipio' => 'Texhuacán'] , ['estado_id' => 30, 'municipio' => 
            'Texistepec'] , ['estado_id' => 30, 'municipio' => 'Tezonapa'] , ['estado_id' => 30, 'municipio' => 'Tierra 
            Blanca'] , ['estado_id' => 30, 'municipio' => 'Tihuatlán'] , ['estado_id' => 30, 'municipio' => 'Tlacojalpan'] 
            , ['estado_id' => 30, 'municipio' => 'Tlacolulan'] , ['estado_id' => 30, 'municipio' => 'Tlacotalpan'] , 
            ['estado_id' => 30, 'municipio' => 'Tlacotepec De Mejía'] , ['estado_id' => 30, 'municipio' => 'Tlachichilco'] 
            , ['estado_id' => 30, 'municipio' => 'Tlalixcoyan'] , ['estado_id' => 30, 'municipio' => 'Tlalnelhuayocan'] , 
            ['estado_id' => 30, 'municipio' => 'Tlapacoyan'] , ['estado_id' => 30, 'municipio' => 'Tlaquilpa'] , 
            ['estado_id' => 30, 'municipio' => 'Tlilapan'] , ['estado_id' => 30, 'municipio' => 'Tomatlán'] , ['estado_id' 
            => 30, 'municipio' => 'Tonayán'] , ['estado_id' => 30, 'municipio' => 'Totutla'] , ['estado_id' => 30, 
            'municipio' => 'Tuxpan'] , ['estado_id' => 30, 'municipio' => 'Tuxtilla'] , ['estado_id' => 30, 'municipio' => 
            'Ursulo Galván'] , ['estado_id' => 30, 'municipio' => 'Vega De Alatorre'] , ['estado_id' => 30, 'municipio' => 
            'Veracruz'] , ['estado_id' => 30, 'municipio' => 'Villa Aldama'] , ['estado_id' => 30, 'municipio' => 
            'Xoxocotla'] , ['estado_id' => 30, 'municipio' => 'Yanga'] , ['estado_id' => 30, 'municipio' => 'Yecuatla'] , 
            ['estado_id' => 30, 'municipio' => 'Zacualpan'] , ['estado_id' => 30, 'municipio' => 'Zaragoza'] , 
            ['estado_id' => 30, 'municipio' => 'Zentla'] , ['estado_id' => 30, 'municipio' => 'Zongolica'] , ['estado_id' 
            => 30, 'municipio' => 'Zontecomatlán De López Y Fuentes'] , ['estado_id' => 30, 'municipio' => 'Zozocolco De 
            Hidalgo'] , ['estado_id' => 30, 'municipio' => 'Agua Dulce'] , ['estado_id' => 30, 'municipio' => 'El Higo'] , 
            ['estado_id' => 30, 'municipio' => 'Nanchital De Lázaro Cárdenas Del Río'] , ['estado_id' => 30, 'municipio' 
            => 'Tres Valles'] , ['estado_id' => 30, 'municipio' => 'Carlos A. Carrillo'] , ['estado_id' => 30, 'municipio' 
            => 'Tatahuicapan De Juárez'] , ['estado_id' => 30, 'municipio' => 'Uxpanapa'] , ['estado_id' => 30, 
            'municipio' => 'San Rafael'] , ['estado_id' => 30, 'municipio' => 'Santiago Sochiapan'] , ['estado_id' => 31, 
            'municipio' => 'Abalá'] , ['estado_id' => 31, 'municipio' => 'Acanceh'] , ['estado_id' => 31, 'municipio' => 
            'Akil'] , ['estado_id' => 31, 'municipio' => 'Baca'] , ['estado_id' => 31, 'municipio' => 'Bokobá'] , 
            ['estado_id' => 31, 'municipio' => 'Buctzotz'] , ['estado_id' => 31, 'municipio' => 'Cacalchén'] , 
            ['estado_id' => 31, 'municipio' => 'Calotmul'] , ['estado_id' => 31, 'municipio' => 'Cansahcab'] , 
            ['estado_id' => 31, 'municipio' => 'Cantamayec'] , ['estado_id' => 31, 'municipio' => 'Celestún'] , 
            ['estado_id' => 31, 'municipio' => 'Cenotillo'] , ['estado_id' => 31, 'municipio' => 'Conkal'] , ['estado_id' 
            => 31, 'municipio' => 'Cuncunul'] , ['estado_id' => 31, 'municipio' => 'Cuzamá'] , ['estado_id' => 31, 
            'municipio' => 'Chacsinkín'] , ['estado_id' => 31, 'municipio' => 'Chankom'] , ['estado_id' => 31, 'municipio' 
            => 'Chapab'] , ['estado_id' => 31, 'municipio' => 'Chemax'] , ['estado_id' => 31, 'municipio' => 'Chicxulub 
            Pueblo'] , ['estado_id' => 31, 'municipio' => 'Chichimilá'] , ['estado_id' => 31, 'municipio' => 
            'Chikindzonot'] , ['estado_id' => 31, 'municipio' => 'Chocholá'] , ['estado_id' => 31, 'municipio' => 
            'Chumayel'] , ['estado_id' => 31, 'municipio' => 'Dzán'] , ['estado_id' => 31, 'municipio' => 'Dzemul'] , 
            ['estado_id' => 31, 'municipio' => 'Dzidzantún'] , ['estado_id' => 31, 'municipio' => 'Dzilam De Bravo'] , 
            ['estado_id' => 31, 'municipio' => 'Dzilam González'] , ['estado_id' => 31, 'municipio' => 'Dzitás'] , 
            ['estado_id' => 31, 'municipio' => 'Dzoncauich'] , ['estado_id' => 31, 'municipio' => 'Espita'] , ['estado_id' 
            => 31, 'municipio' => 'Halachó'] , ['estado_id' => 31, 'municipio' => 'Hocabá'] , ['estado_id' => 31, 
            'municipio' => 'Hoctún'] , ['estado_id' => 31, 'municipio' => 'Homún'] , ['estado_id' => 31, 'municipio' => 
            'Huhí'] , ['estado_id' => 31, 'municipio' => 'Hunucmá'] , ['estado_id' => 31, 'municipio' => 'Ixil'] , 
            ['estado_id' => 31, 'municipio' => 'Izamal'] , ['estado_id' => 31, 'municipio' => 'Kanasín'] , ['estado_id' => 
            31, 'municipio' => 'Kantunil'] , ['estado_id' => 31, 'municipio' => 'Kaua'] , ['estado_id' => 31, 'municipio' 
            => 'Kinchil'] , ['estado_id' => 31, 'municipio' => 'Kopomá'] , ['estado_id' => 31, 'municipio' => 'Mama'] , 
            ['estado_id' => 31, 'municipio' => 'Maní'] , ['estado_id' => 31, 'municipio' => 'Maxcanú'] , ['estado_id' => 
            31, 'municipio' => 'Mayapán'] , ['estado_id' => 31, 'municipio' => 'Mérida'] , ['estado_id' => 31, 'municipio' 
            => 'Mocochá'] , ['estado_id' => 31, 'municipio' => 'Motul'] , ['estado_id' => 31, 'municipio' => 'Muna'] , 
            ['estado_id' => 31, 'municipio' => 'Muxupip'] , ['estado_id' => 31, 'municipio' => 'Opichén'] , ['estado_id' 
            => 31, 'municipio' => 'Oxkutzcab'] , ['estado_id' => 31, 'municipio' => 'Panabá'] , ['estado_id' => 31, 
            'municipio' => 'Peto'] , ['estado_id' => 31, 'municipio' => 'Progreso'] , ['estado_id' => 31, 'municipio' => 
            'Quintana Roo'] , ['estado_id' => 31, 'municipio' => 'Río Lagartos'] , ['estado_id' => 31, 'municipio' => 
            'Sacalum'] , ['estado_id' => 31, 'municipio' => 'Samahil'] , ['estado_id' => 31, 'municipio' => 'Sanahcat'] , 
            ['estado_id' => 31, 'municipio' => 'San Felipe'] , ['estado_id' => 31, 'municipio' => 'Santa Elena'] , 
            ['estado_id' => 31, 'municipio' => 'Seyé'] , ['estado_id' => 31, 'municipio' => 'Sinanché'] , ['estado_id' => 
            31, 'municipio' => 'Sotuta'] , ['estado_id' => 31, 'municipio' => 'Sucilá'] , ['estado_id' => 31, 'municipio' 
            => 'Sudzal'] , ['estado_id' => 31, 'municipio' => 'Suma'] , ['estado_id' => 31, 'municipio' => 'Tahdziú'] , 
            ['estado_id' => 31, 'municipio' => 'Tahmek'] , ['estado_id' => 31, 'municipio' => 'Teabo'] , ['estado_id' => 
            31, 'municipio' => 'Tecoh'] , ['estado_id' => 31, 'municipio' => 'Tekal De Venegas'] , ['estado_id' => 31, 
            'municipio' => 'Tekantó'] , ['estado_id' => 31, 'municipio' => 'Tekax'] , ['estado_id' => 31, 'municipio' => 
            'Tekit'] , ['estado_id' => 31, 'municipio' => 'Tekom'] , ['estado_id' => 31, 'municipio' => 'Telchac Pueblo'] 
            , ['estado_id' => 31, 'municipio' => 'Telchac Puerto'] , ['estado_id' => 31, 'municipio' => 'Temax'] , 
            ['estado_id' => 31, 'municipio' => 'Temozón'] , ['estado_id' => 31, 'municipio' => 'Tepakán'] , ['estado_id' 
            => 31, 'municipio' => 'Tetiz'] , ['estado_id' => 31, 'municipio' => 'Teya'] , ['estado_id' => 31, 'municipio' 
            => 'Ticul'] , ['estado_id' => 31, 'municipio' => 'Timucuy'] , ['estado_id' => 31, 'municipio' => 'Tinum'] , 
            ['estado_id' => 31, 'municipio' => 'Tixcacalcupul'] , ['estado_id' => 31, 'municipio' => 'Tixkokob'] , 
            ['estado_id' => 31, 'municipio' => 'Tixmehuac'] , ['estado_id' => 31, 'municipio' => 'Tixpéhual'] , 
            ['estado_id' => 31, 'municipio' => 'Tizimín'] , ['estado_id' => 31, 'municipio' => 'Tunkás'] , ['estado_id' => 
            31, 'municipio' => 'Tzucacab'] , ['estado_id' => 31, 'municipio' => 'Uayma'] , ['estado_id' => 31, 'municipio' 
            => 'Ucú'] , ['estado_id' => 31, 'municipio' => 'Umán'] , ['estado_id' => 31, 'municipio' => 'Valladolid'] , 
            ['estado_id' => 31, 'municipio' => 'Xocchel'] , ['estado_id' => 31, 'municipio' => 'Yaxcabá'] , ['estado_id' 
            => 31, 'municipio' => 'Yaxkukul'] , ['estado_id' => 31, 'municipio' => 'Yobaín'] , ['estado_id' => 32, 
            'municipio' => 'Apozol'] , ['estado_id' => 32, 'municipio' => 'Apulco'] , ['estado_id' => 32, 'municipio' => 
            'Atolinga'] , ['estado_id' => 32, 'municipio' => 'Benito Juárez'] , ['estado_id' => 32, 'municipio' => 
            'Calera'] , ['estado_id' => 32, 'municipio' => 'Cañitas De Felipe Pescador'] , ['estado_id' => 32, 'municipio' 
            => 'Concepción Del Oro'] , ['estado_id' => 32, 'municipio' => 'Cuauhtémoc'] , ['estado_id' => 32, 'municipio' 
            => 'Chalchihuites'] , ['estado_id' => 32, 'municipio' => 'Fresnillo'] , ['estado_id' => 32, 'municipio' => 
            'Trinidad García De La Cadena'] , ['estado_id' => 32, 'municipio' => 'Genaro Codina'] , ['estado_id' => 32, 
            'municipio' => 'General Enrique Estrada'] , ['estado_id' => 32, 'municipio' => 'General Francisco R. Murguía'] 
            , ['estado_id' => 32, 'municipio' => 'El Plateado De Joaquín Amaro'] , ['estado_id' => 32, 'municipio' => 
            'General Pánfilo Natera'] , ['estado_id' => 32, 'municipio' => 'Guadalupe'] , ['estado_id' => 32, 'municipio' 
            => 'Huanusco'] , ['estado_id' => 32, 'municipio' => 'Jalpa'] , ['estado_id' => 32, 'municipio' => 'Jerez'] , 
            ['estado_id' => 32, 'municipio' => 'Jiménez Del Teul'] , ['estado_id' => 32, 'municipio' => 'Juan Aldama'] , 
            ['estado_id' => 32, 'municipio' => 'Juchipila'] , ['estado_id' => 32, 'municipio' => 'Loreto'] , ['estado_id' 
            => 32, 'municipio' => 'Luis Moya'] , ['estado_id' => 32, 'municipio' => 'Mazapil'] , ['estado_id' => 32, 
            'municipio' => 'Melchor Ocampo'] , ['estado_id' => 32, 'municipio' => 'Mezquital Del Oro'] , ['estado_id' => 
            32, 'municipio' => 'Miguel Auza'] , ['estado_id' => 32, 'municipio' => 'Momax'] , ['estado_id' => 32, 
            'municipio' => 'Monte Escobedo'] , ['estado_id' => 32, 'municipio' => 'Morelos'] , ['estado_id' => 32, 
            'municipio' => 'Moyahua De Estrada'] , ['estado_id' => 32, 'municipio' => 'Nochistlán De Mejía'] , 
            ['estado_id' => 32, 'municipio' => 'Noria De Ángeles'] , ['estado_id' => 32, 'municipio' => 'Ojocaliente'] , 
            ['estado_id' => 32, 'municipio' => 'Pánuco'] , ['estado_id' => 32, 'municipio' => 'Pinos'] , ['estado_id' => 
            32, 'municipio' => 'Río Grande'] , ['estado_id' => 32, 'municipio' => 'Sain Alto'] , ['estado_id' => 32, 
            'municipio' => 'El Salvador'] , ['estado_id' => 32, 'municipio' => 'Sombrerete'] , ['estado_id' => 32, 
            'municipio' => 'Susticacán'] , ['estado_id' => 32, 'municipio' => 'Tabasco'] , ['estado_id' => 32, 'municipio' 
            => 'Tepechitlán'] , ['estado_id' => 32, 'municipio' => 'Tepetongo'] , ['estado_id' => 32, 'municipio' => 'Teúl 
            De González Ortega'] , ['estado_id' => 32, 'municipio' => 'Tlaltenango De Sánchez Román'] , ['estado_id' => 
            32, 'municipio' => 'Valparaíso'] , ['estado_id' => 32, 'municipio' => 'Vetagrande'] , ['estado_id' => 32, 
            'municipio' => 'Villa De Cos'] , ['estado_id' => 32, 'municipio' => 'Villa García'] , ['estado_id' => 32, 
            'municipio' => 'Villa González Ortega'] , ['estado_id' => 32, 'municipio' => 'Villa Hidalgo'] , ['estado_id' 
            => 32, 'municipio' => 'Villanueva'] , ['estado_id' => 32, 'municipio' => 'Zacatecas'] , ['estado_id' => 32, 
            'municipio' => 'Trancoso'], ['estado_id' => 32, 'municipio' => 'Santa María De La Paz']
        ]);
    }
}
