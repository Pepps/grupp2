<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
        $categories = array(
            #1
            'Bygg och Anläggning',
            #SUB CATEGORIES FOR ID 1
                'Anläggning (mark, väg, vatten)',
                'Arkitektur',
                'Bergteknik',
                'Fastighetsförvaltning',
                'Övrigt',
            #2
            'Data och IT',
            #SUB CATEGORIES FOR ID 2
                'Databaser',
                'Datoranvändning',
                'Multimedia/data',
                'Programmeringsteknik',
                'Spelutveckling',
                'Systemvetenskap',
                'Webbdesign',
                'Övrigt',
            #3
            'Ekonomi och Marknadsföring',
            #SUB CATEGORIES FOR ID 3
                'Administration',
                'Ekonomi',
                'Försäljning',
                'Förvaltning',
                'Logistik',
                'Management och ledarskap',
                'Marknadsföring',
                'Nationalekonomi',
                'Redovisning',
                'Övrigt',
            #4
            'Frisk- och skönhetsvård',
            #SUB CATEGORIES FOR ID 4
                'Friskvård och hälsopedagogik',
                'Massage',
            #5
            'Hantverk',
            #SUB CATEGORIES FOR ID 5
                'Konsthantverk',
                'Textilhantverk',
                'Trähantverk',
            #6
            'Hotell, restaurang och turism',
            #SUB CATEGORIES FOR ID 6
                'Eventproduktion',
                'Hotell',
                'Kost',
                'Ledarskap inom turism',
                'Restaurang och storhushåll',
                'Turism och resor',
            #7
            'Information och media',
            #SUB CATEGORIES FOR ID 7
                'Bibliotek och informationsvetenskap',
                'Grafisk design',
                'Journalistik',
                'Kommunikationsvetenskap',
                'Medieproduktion',
                'Multimedia/Information',
                'TV och radioproduktion',
            #8
            'Konstnärliga utbildningar',
            #SUB CATEGORIES FOR ID 8
                'Bild och form',
                'Dans',
                'Design/konst',
                'Film',
                'Foto',
                'Inredningsarkitektur',
                'Keramik och glas',
                'Musik',
                'Sång',
                'Teater (drama)',
            #9
            'Kultur och humanism',
            #SUB CATEGORIES FOR ID 9
                'Arkeologi',
                'Filosofi',
                'Historia',
                'Internationellt',
                'Konstvetenskap',
                'Kulturvetenskap',
                'Litteraturvetenskap',
                'Religionsvetenskap',
            #10
            'Medicin och vård',
            #SUB CATEGORIES FOR ID 10
                'Biomedicin',
                'Dietist',
                'Hälsa och samhälle',
                'Hälso- och sjukvårdadministration',
                'Läkare',
                'Medicin',
                'Omvårdnad',
                'Psykoterapi',
                'Sjukgymnastik och rehabilitering',
                'Sjuksköterska',
                'Tal och hörsel',
                'Tandvård',
                'Veterinär',
            #11
            'Naturbruk',
            #SUB CATEGORIES FOR ID 11
                'Djurvård och hästhållning',
                'Lant- och skogsbruk',
                'Trädgård',
            #12
            'Naturvetenskap',
            #SUB CATEGORIES FOR ID 12
                'Biologi',
                'Farmakologi',
                'Fysik',
                'Geografi',
                'Geovetenskap',
                'Kemi',
                'Matematik',
                'Miljö',
            #13
            'Samhällsvetenskap och juridik',
            #SUB CATEGORIES FOR ID 13
                'Bistånd och U-länder',
                'Juridik',
                'Psykologi',
                'Samhällsvetenskap',
                'Socialt inriktade',
                'utbildningar',
                'Sociologi',
                'Statistik',
                'Statsvetenskap',
            #14
            'Språk',
            #SUB CATEGORIES FOR ID 14
                'Arabiska',
                'Engelska',
                'Finska',
                'Franska',
                'Grekiska',
                'Italienska',
                'Japanska',
                'Kinesiska',
                'Klassiska språk',
                'Lingvistik & Allmänspråkvetenskap',
                'Portugisiska',
                'Ryska',
                'Spanska',
                'Svenska',
                'Teckenspråk',
                'Tyska',
                'Översättare',
                'Övriga nordiska språk',
            #15
            'Säkerhet och räddningstjänst',
            #SUB CATEGORIES FOR ID 15
                'Polis',
            #16
            'Teknik',
            #SUB CATEGORIES FOR ID 16
                'Arkitektur',
                'Byggnadsteknik',
                'Datateknik',
                'Design och produktutveckling',
                'Elektroteknik',
                'Farkostteknik',
                'Industriell ekonomi',
                'Information- och kommunikationsteknik',
                'Kemiteknik',
                'Lantmäteriteknik',
                'Ljudteknik',
                'Maskinteknik',
                'Materialteknik',
                'Medicinsk',
                'teknik',
                'Miljö och energiteknik',
                'Rymdteknik',
                'Samhällsbyggnadsteknik',
                'Teknisk fysik',

            #17
            'Tillverkning och underhållning',
            #SUB CATEGORIES FOR ID 17
                'El',
                'Fastighetsskötsel',
                'Fordon',
                'Grafisk',
                'processteknik',
                'Industri och produktion',
                'Kyl- och VVS',
                'teknik',
                'Livsmedel',
                'Papper',
                'Svetsteknik',
                'Textil',
                'Trä/tillverkning och underhåll',
            #18
            'Transport',
            #SUB CATEGORIES FOR ID 18
                'Flyg',
                'Järnväg',
                'Sjöfart',
                'Transportlogistik',

            #19
            'Undervising och idrott',
            #SUB CATEGORIES FOR ID 19
                'Idrott',
                'Lärare',
                'Pedagogik',
                'Specialpedagog',
                'Studie- och yrkesvägledare'
            );

       Category::create(array(
        'title' => $categories[$i]),
        'sub_id' => ,
        );
	}

}
