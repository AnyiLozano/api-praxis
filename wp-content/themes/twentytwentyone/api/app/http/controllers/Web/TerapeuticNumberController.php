<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContentPage;

class TerapeuticNumberController extends Controller
{
    public function getTerapeuticNumberAssets()
    {
        $banner = ContentPage::where("section", "Heridas_banner_1")->wherePageId(2)->whereStatusId(1)->first();
        $background_description = ContentPage::where("section", "background")->wherePageId(2)->whereStatusId(1)->first();
        $description = ContentPage::where("section", "Heridas-text-description")->wherePageId(2)->whereStatusId(1)->first();
        $background_p = ContentPage::where("section", "background-heridas-2")->wherePageId(2)->whereStatusId(1)->first();
        $wounds1 = ContentPage::where("section", "LIKE","%Herida1%")->wherePageId(2)->whereStatusId(1)->get();
        $wounds2 = ContentPage::where("section", "LIKE","%Herida2%")->wherePageId(2)->whereStatusId(1)->get();
        $clasification = ContentPage::where("section", "clasificacion-heridas")->wherePageId(2)->whereStatusId(1)->first();
        $wound_type_description = ContentPage::where("section", "heridas-type")->wherePageId(2)->whereStatusId(1)->first();
        $recomendation_wounds = ContentPage::where("section", "Heridas-recomendation")->wherePageId(2)->whereStatusId(1)->first();
        $remembers_wounds = ContentPage::where("section", "heridas-recordatorio")->wherePageId(2)->whereStatusId(1)->first();
        $terapeutic_content_lavado = ContentPage::where("section", "LIKE", "%heridas-lavado-%")->wherePageId(2)->whereStatusId(1)->get();
        $aux_person = ContentPage::where("section", "persona_herida")->wherePageId(2)->whereStatusId(1)->first();
        $references = ContentPage::where("section", "referencias_banner")->wherePageId(2)->whereStatusId(1)->first();
        $tabs = ContentPage::where("section", "LIKE", "%Heridas-tipo%")->wherePageId(2)->whereStatusId(1)->get();
        $quiq_wounds = ContentPage::where("section", "quirurgicas")->wherePageId(2)->whereStatusId(1)->first();
        $quirurgicas_1 = ContentPage::where("section", "quirurgicas_1")->wherePageId(2)->whereStatusId(1)->first();
        $caracteristicas_cuadro = ContentPage::where("section", "caracteristicas_cuadro")->wherePageId(2)->whereStatusId(1)->first();
        
        $newArray = array(
            "principal_banner" => $banner,
            "background_description" => $background_description,
            "description" => $description,
            "background_p" => $background_p,
            "wounds1" => $wounds1,
            "wounds2" => $wounds2,
            "clasification" => $clasification,
            "recomendation_wounds" => $recomendation_wounds,
            "remembers_wounds" => $remembers_wounds,
            "wound_type_description" => $wound_type_description,
            "lavado" => $terapeutic_content_lavado,
            "references" => $references,
            "aux_person" => $aux_person,
            "tabs" => $tabs,
            "quiq_wounds" => $quiq_wounds,
            "quirurgicas_1" => $quirurgicas_1,
            "caracteristicas_cuadro" => $caracteristicas_cuadro
        );

        return $this->response(true, ['type' => 'success', 'content' => 'Done.'], $newArray);
    }
}
