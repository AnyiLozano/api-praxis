<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContentPage;

class TerapeuticNumberController extends Controller
{
    public function getTerapeuticNumberAssets()
    {
        $terapeutic_content_lavado = ContentPage::where("section", "LIKE", "%heridas-lavado%")->wherePageId(2)->whereStatusId(1)->get();
        $newArray = array(
            "lavado" => $terapeutic_content_lavado
        );

        return $this->response(true, ['type' => 'success', 'content' => 'Done.'], $newArray);
    }
}
