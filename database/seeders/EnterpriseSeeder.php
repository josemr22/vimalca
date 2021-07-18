<?php

namespace Database\Seeders;

use App\Models\Enterprise;
use Illuminate\Database\Seeder;

class EnterpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Enterprise::create([
            'code'=>'quienes_somos',
            'one'=>'ConsorcioVimalcatiene10añosdeexperienciainiciandopropiamenteconlapescasupresenciaenelmercadoinicioenelaño2011.Debidoalanecesidaddecomercializarrecursoshidrobiológicosseempezóaadquirirunidadesfrigoríficasparaeltransportededichosrecursos(bonito,jurelycaballa).Comopartedelprocesodelaconversióndelrecursohidrobiológicoesnecesarioadherirlehieloalpescadoextraído,surgiendolanecesidaddelacreacióndeunaFábricadehieloparaabasteceralosfrigoríficosdelconsorcioyasímismoabasteceraterceros.Debidoaquelasembarcacionesyfrigoríficosnecesitandecombustibleparapodersetrasladar,seoptóporconstruirunaestacióndeservicios:“Grifo&MinimarketVimalca”abanderadosporREPSOL.',
            'two'=>'¿Quiénes Somos',
        ]);
        Enterprise::create([
            'code'=>'sobre_nosotros',
            'one'=>'ConsorcioVimalcatiene10añosdeexperienciainiciandopropiamenteconlapescasupresenciaenelmercadoinicioenelaño2011.',
            'two'=>'Sobre Nosotros',
        ]);
        Enterprise::create([
            'code'=>'mision',
            'one'=>'luctus massa ipsum at tempus eleifend congue lectus bibendum at tempus eleifend congue lectus bibendum at tempus eleifend congue lectus bibendum',
            'two'=>'Mision',
        ]);
        Enterprise::create([
            'code'=>'vision',
            'one'=>'luctus massa ipsum at tempus eleifend congue lectus bibendum at tempus eleifend congue lectus bibendum at tempus eleifend congue lectus bibendum',
            'two'=>'Vision',
        ]);
    }
}
