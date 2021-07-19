<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Branch::create([
            'name'=>'hielo',
            'introduction'=>'Fábrica de hielo Vimalca tiene 03 años de experiencia brindando servicio de calidad ubicada a 5 minutos del balneario Pimental en el Km 0.8 Carretera Santa Rosa – Pimentel, Santa Rosa, Perú.',
            'description'=>'Contamos maquinaria moderna y personal altamente capacitado en el rubro. El proceso de la fabricación de hielo inicia vertiendo agua en el molde de acero inoxidable en donde será transformado de forma líquida a sólida, esta transformación se realiza en una posa con una temperatura mínima de menos 14 grados y máxima de menos 15, posteriormente el puente grúa trasladará los moldes hacia la posa de congelamiento por un periodo de 14 a 16 horas. Una vez que terminó el proceso de congelamiento el personal calificado mediante el mecanismo del puente grúa realizará el traslado de los moldes hacia la poza de baño maría, donde se aplicará un leve apalancamiento hasta que la tonelada de hielo en bloque se desprenda del molde. Los bloques de hielo serán descargados y recibidos por el personal quien con las tenazas de acero inoxidable insertarán el hielo a la máquina trituradora para el proceso de molido y así llegará al transporte de manera óptima para su debido traslado.',
            'video'=>'https://www.youtube.com/watch?v=LXb3EKWsInQ',
            'image'=>'hielo.jpg',
            'resume'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos voluptatibus nam deserunt iusto perspiciatis et enim quod. Quos eaque ipsum ullam, fugit dolor aut explicabo, hic cumque impedit minima odio!',
        ]);
        Branch::create([
            'name'=>'grifo',
            'introduction'=>'La estación de servicios Vimalca, abanderados por Repsol fue inaugurada el 01 de febrero del 2021, la cual fue implementada con tecnología de punta y equipos modernos para brindar un mejor servicio, producto y atención al cliente.',
            'description'=>'Contamos con 4 surtidores en la venta de combustible de la mejor calidad para el abastecimiento: GLP, Gasolina 90, 95 Y petróleo: Diesel (db5) siendo los combustibles más usados dentro de la localidad. Brindamos servicio de crédito a empresas que trabajan con nosotros en los distintos rubros como pesca y transporte, así mismo tenemos el stock necesario de combustible para licitar con entidades del estado. Contamos con un Minimarket que atiende las 24 horas, cumpliendo con los protocolos sanitarios de atención al cliente ante el Covid, servicios higiénicos y Wifi. El Minimarket está abastecido con las mejores bebidas de prestigiosas marcas comerciales, en este espacio encontramos un ambiente acogedor y agradable para poder degustar lo que nos ofrece.',
            'video'=>'https://www.youtube.com/watch?v=LXb3EKWsInQ',
            'image'=>'grifo.jpg',
            'resume'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos voluptatibus nam deserunt iusto perspiciatis et enim quod. Quos eaque ipsum ullam, fugit dolor aut explicabo, hic cumque impedit minima odio!',
        ]);
        Branch::create([
            'name'=>'transporte',
            'introduction'=>'Pesca & Transporte Vimalca tiene 10 años de experiencia brindando un servicio de calidad en el rubro de recursos hidrobiológicos, teniendo posicionamiento en el mercado actual desde el año 2011.',
            'description'=>'Parte de las embarcaciones del Consorcio Vimalca están enfocadas a la pesca de consumo humano directo, donde se capturan especies principales siendo las más destacadas bonito, jurel, caballa y también algunas especies que estén permitidas según las tallas mínimas establecidas por el ministerio de producción. Dichas embarcaciones para pesca de consumo humano directo, cuentan con una bodega insulada con acero inoxidable y poliuretano (metal que se caracteriza para conservar la temperatura) en donde se almacena el pescado dentro de la embarcación, conservando la calidad del mismo. Antes de salir a realizar cada faena de pesca las embarcaciones llevan un aproximado de 10 toneladas de hielo para poder conservar la temperatura adecuada del recurso hidrobiológico. El hielo que se adquiere es producido por la misma empresa, la cual cuenta con las certificaciones correspondientes para brindar la mejor calidad de hielo, ya que el pescado conservado por este hielo, será para el consumo humano. Las embarcaciones pesqueras salen a faena de pesca llevando consigo una red, equipos y maquinaria implementada para realizar dichas actividades en el lapso de uno o dos días, las embarcaciones están retornando al muelle con el recurso hidrobiológico extraído (bonito, jurel y caballa), dicho recurso será desembarcado en un establecimiento pesquero (DPA), lugar en el cual ya se encuentra el personal calificado para realizar el manipuleo del pescado y pueda ser envasado en los camiones frigoríficos pertenecientes a la misma empresa y sea llevado al terminal pesquero para su venta al público.',
            'video'=>'https://www.youtube.com/watch?v=LXb3EKWsInQ',
            'image'=>'transporte.jpg',
            'resume'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos voluptatibus nam deserunt iusto perspiciatis et enim quod. Quos eaque ipsum ullam, fugit dolor aut explicabo, hic cumque impedit minima odio!',
        ]);
        Branch::create([
            'name'=>'agua',
            'introduction'=>'We are a Creative Agency & Startup Studio that provides Digital Products and Services turns to focus on client success. We specialize in user interface design, including front-end development which we consider to be an integral part.',
            'description'=>'We are a Creative Agency & Startup Studio that provides Digital Products and Services turns to focus on client success. We specialize in user interface design, including front-end development which we consider to be an integral part.',
            'video'=>'https://www.youtube.com/watch?v=LXb3EKWsInQ',
            'image'=>'agua.jpg',
            'resume'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos voluptatibus nam deserunt iusto perspiciatis et enim quod. Quos eaque ipsum ullam, fugit dolor aut explicabo, hic cumque impedit minima odio!',
        ]);
    }
}


