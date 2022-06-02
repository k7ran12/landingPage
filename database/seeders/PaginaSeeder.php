<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaginaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paginas')->insert([
            'sec1_logo' => 'images/startup/logonetflix.png',
            'sec1_bannerimagen' => '../images/agency/bg-intro-agency.jpg',
            'sec1_url_facebook' => 'https://www.facebook.com/',
            'sec1_url_twitter' => 'https://twitter.com/home?lang=es',
            'sec1_url_instagram' => 'https://www.instagram.com/',
            'sec1_titulo' => '¡Crea como nunca antes!',
            'sec1_subtitulo' => 'Puedes crear posibilidades ilimitadas con nuestro nuevo artículo.',
            'sec1_titulo_video' => 'Video',
            'sec1_subtitulo_video' => 'Ver video de la empresa',
            'sec1_url_video' => 'https://www.youtube.com/embed/yWtDXksBJmU?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com',
            'sec2_titulo' => 'Hacemos productos increíbles',
            'sec2_subtitulo' => 'Puedes crear posibilidades ilimitadas con nuestro nuevo artículo.',
            'sec2_card1_imagen' => '../images/agency/image-box-1.png',
            'sec2_card1_titulo' => 'Adaptable',
            'sec2_card1_subtitulo' => 'Funciona bien y todo el mundo puede crear una página de aterrizaje atractiva',
            'sec2_card2_imagen' => '../images/agency/image-box-2.png',
            'sec2_card2_titulo' => 'Soporte 24/7',
            'sec2_card2_subtitulo' => 'Aute nostrud amet sit occaecat amet nostrud',
            'sec2_card3_imagen' => '../images/agency/image-box-3.png',
            'sec2_card3_titulo' => 'Alta calidad',
            'sec2_card3_subtitulo' => 'Id ut do enim incididunt ullamco proident',
            'sec3_titulo' => 'Descubre las mejores características',
            'sec3_subtitulo' => 'Puedes crear posibilidades ilimitadas con nuestro nuevo artículo.',
            'sec3_card1_titulo' => '¡Hacemos los temas más avanzados!',
            'sec3_card1_subtitulo' => 'Lorem Ipsum has been the industrys standard dummy text ever since when an unknown printer took a galley',
            'sec3_card2_titulo' => 'Herramientas de velocidad',
            'sec3_card2_subtitulo' => 'Lorem Ipsum has been the industrys standard dummy text ever since',
            'sec3_card3_titulo' => 'Completamente adaptable',
            'sec3_card3_subtitulo' => 'Lorem Ipsum has been the industrys standard dummy text ever since',
            'sec4_titulo' => 'Conoce Nuestra Nueva Colección',
            'sec4_subtitulo' => 'Puedes crear posibilidades ilimitadas con nuestro nuevo artículo.',
            'sec4_card1_titulo' => '¡Nueva sección de elementos!',
            'sec4_card1_subtitulo' => 'Lorem Ipsum has been the industry standard dummy text ever since when an unknown printer took a galley',
            'sec4_card1_imagen' => 'images/agency/showcase-image-1.jpg',
            'sec4_card2_titulo' => '¡Comienza tu propia Landing Page ahora!',
            'sec4_card2_subtitulo' => 'Lorem Ipsum has been the industry standard dummy text ever since when an unknown printer took a galley.',
            'sec4_card2_imagen' => 'images/agency/showcase-image-2.jpg',
            'sec5_titulo' => 'Hacer negocios más fáciles',
            'sec5_subtitulo' => 'Puedes crear posibilidades ilimitadas con nuestro nuevo artículo.',
            'sec5_card1_imagen' => 'images/agency/circle-image-1.jpg',
            'sec5_card1_titulo' => 'Obtenga actualizaciones instantáneas',
            'sec5_card1_subtitulo' => 'Le proporcionamos una gestión completa de usuarios.',
            'sec5_card2_imagen' => 'images/agency/circle-image-2.jpg',
            'sec5_card2_titulo' => 'Mejorar los ingresos',
            'sec5_card2_subtitulo' => 'Le proporcionamos una gestión completa de usuarios.',
            'sec6_titulo' => 'Conoce Nuestra Nueva Colección',
            'sec6_subtitulo' => 'Puedes crear posibilidades ilimitadas con nuestro nuevo artículo.',
            'sec6_url_mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31212.439327975233!2d-77.03338401745563!3d-12.074114836268988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f619ee3ec7%3A0x14206cb9cc452e4a!2sLima!5e0!3m2!1ses-419!2spe!4v1652281117406!5m2!1ses-419!2spe',
            'sec6_celular' => '+51 990 029 445',
            'sec6_email' => 'antoniovalverdecristian96@gmail.com',
            'sec6_direccion' => '1260 Miraflores - LIMA (511) 610-9800 Anexo 260',
        ]);
    }
}
