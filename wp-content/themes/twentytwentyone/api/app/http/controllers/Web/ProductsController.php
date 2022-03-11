<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContentPage;

class ProductsController extends Controller
{
    public function productsAssets()
    {
        $productsContent = array(
            "epiprot" => $this->epiprotContent(),
            "bulcosan" => $this->bulcosanContent(),
            "proctokinasa" => $this->proctokinasaContent(),
        );

        return $this->response(true, ['type' => 'success', 'content' => 'Done.'], $productsContent);
    }

    public function epiprotContent()
    {
        $principal_banner = ContentPage::where("section", "Epiprot")->whereStatusId(1)->first();
        $background_description = ContentPage::where("section", "products_background")->whereStatusId(1)->first();
        $title_description = ContentPage::where("section", "Product_Epiprot")->whereStatusId(1)->first();
        $text_description = ContentPage::where("section", "producto_epiprot_texto_1")->whereStatusId(1)->first();
        $title_composition = ContentPage::where("section", "producto_titulo-2")->whereStatusId(1)->first();
        $text_composition = ContentPage::where("section", "Producto_text_1")->whereStatusId(1)->first();
        $image_composition = ContentPage::where("section", "producto_imagen-1")->whereStatusId(1)->first();
        $fuente_background = ContentPage::where("section", "products_background_0")->whereStatusId(1)->first();
        $fuente_title = ContentPage::where("section", "producto_titulo-3")->whereStatusId(1)->first();
        $fuente_text = ContentPage::where("section", "product_text-3")->whereStatusId(1)->first();
        $fuente_image = ContentPage::where("section", "producto_imagen-2")->whereStatusId(1)->first();
        $contraindicaciones = ContentPage::where("section", "producto-imagen-3")->whereStatusId(1)->first();
        $precauciones = ContentPage::where("section", "producto-imagen-4")->whereStatusId(1)->first();
        $info_prescribir = ContentPage::where("section", "producto-imagene-4")->whereStatusId(1)->first();
        $info_prescribir_image = ContentPage::where("section", "producto-imagen-5")->whereStatusId(1)->first();
        $categoria_text = ContentPage::where("section", "product_text-41")->whereStatusId(1)->first();
        $table_category = ContentPage::where("section", "producto-imagen-6")->whereStatusId(1)->first();
        $table_category_text = ContentPage::where("section", "producto-imagen-7")->whereStatusId(1)->first();
        $table_category_para = ContentPage::where("section", "product_text-5")->whereStatusId(1)->first();
        $indications_text = ContentPage::where("section", "producto-imagen-8")->whereStatusId(1)->first();
        $indications_image = ContentPage::where("section", "producto-imagen-9")->whereStatusId(1)->first();
        $aplicacion_title = ContentPage::where("section", "producto_titulo-5")->whereStatusId(1)->first();
        $aplicacion_text = ContentPage::where("section", "product_text-6")->whereStatusId(1)->first();
        $aplicacion_image = ContentPage::where("section", "producto-imagen-10")->whereStatusId(1)->first();
        $aplicacion_para = ContentPage::where("section", "product_text-7")->whereStatusId(1)->first();
        $conditions = ContentPage::where("section", "LIKE", "%imagen-part%")->whereStatusId(1)->get();
        $almacenamiento = ContentPage::where("section", "producto-imagen-13")->whereStatusId(1)->first();
        $almacenamiento2 = ContentPage::where("section", "producto-imagen-133")->whereStatusId(1)->first();
        $final = ContentPage::where("section", "LIKE", "%producto-imagen-final%")->whereStatusId(1)->get();

        $epiprotArray = array(
            "principal_banner" => $principal_banner,
            "background_description" => $background_description,
            "title_description" => $title_description,
            "text_description" => $text_description,
            "title_composition" => $title_composition,
            "text_composition" => $text_composition,
            "image_composition" => $image_composition,
            "fuente_background" => $fuente_background,
            "fuente_title" => $fuente_title,
            "fuente_text" => $fuente_text,
            "fuente_image" => $fuente_image,
            "contraindicaciones" => $contraindicaciones,
            "precauciones" => $precauciones,
            "info_prescribir" => $info_prescribir,
            "info_prescribir_image" => $info_prescribir_image,
            "categoria_text" => $categoria_text,
            "table_category" => $table_category,
            "table_category_text" => $table_category_text,
            "table_category_para" => $table_category_para,
            "indications_text" => $indications_text,
            "indications_image" => $indications_image,
            "aplicacion_title" => $aplicacion_title,
            "aplicacion_text" => $aplicacion_text,
            "aplicacion_image" => $aplicacion_image,
            "aplicacion_para" => $aplicacion_para,
            "conditions" => $conditions,
            "almacenamiento" => $almacenamiento,
            "almacenamiento2" => $almacenamiento2,
            "final" => $final
        );

        return $epiprotArray;
    }

    public function bulcosanContent()
    {
        $banner_principal = ContentPage::where("section", "products_banner_3")->whereStatusId(1)->first();
        $background_description = ContentPage::where("section", "vulcosan_imagen_1")->whereStatusId(1)->first();
        $vulcosan_titulo_1 = ContentPage::where("section", "vulcosan_titulo_1")->whereStatusId(1)->first();
        $vulcosan_text_1 = ContentPage::where("section", "vulcosan_texto_1")->whereStatusId(1)->first();
        $indicaciones = ContentPage::where("section", "vulcosa_imagen_2")->whereStatusId(1)->first();
        $indicaciones_image = ContentPage::where("section", "vulcosa_imagen_3")->whereStatusId(1)->first();
        $caracteristicas = ContentPage::where("section", "vulcosa_imagen_5")->whereStatusId(1)->first();
        $caracteristicas_image = ContentPage::where("section", "vulcosa_imagen_6")->whereStatusId(1)->first();
        $caracteristicas_background = ContentPage::where("section", "vulcosa_imagen_4")->whereStatusId(1)->first();
        $ventajas = ContentPage::where("section", "vulcosa_imagen_7")->whereStatusId(1)->first();
        $ventajas_imagen = ContentPage::where("section", "vulcosa_imagen_8")->whereStatusId(1)->first();
        $aplicacion_title = ContentPage::where("section", "vulcosan_titulo_2")->whereStatusId(1)->first();
        $aplicacion_image = ContentPage::where("section", "vulcosa_imagen_9")->whereStatusId(1)->first();
        $facil_title = ContentPage::where("section", "vulcosan_titulo_3")->whereStatusId(1)->first();
        $facil_image = ContentPage::where("section", "vulcosa_imagen_10")->whereStatusId(1)->first();
        $facil_image2 = ContentPage::where("section", "vulcosa_imagen_11")->whereStatusId(1)->first();
        $references = ContentPage::where("section", "vulcosa_imagen_12")->whereStatusId(1)->first();
        $consiguelo = ContentPage::where("section", "vulcosan_texto_2")->whereStatusId(1)->first();
        $cruz = ContentPage::where("section", "vulcosa_imagen_13")->whereStatusId(1)->first();


        $bulcosanArray = array(
            "banner_principal" => $banner_principal,
            "background_description" => $background_description,
            "vulcosan_titulo_1" => $vulcosan_titulo_1,
            "vulcosan_texto_1" => $vulcosan_text_1,
            "indicaciones" => $indicaciones,
            "indicaciones_image" => $indicaciones_image,
            "caracteristicas" => $caracteristicas,
            "caracteristicas_image" => $caracteristicas_image,
            "caracteristicas_background" => $caracteristicas_background,
            "ventajas" => $ventajas,
            "ventajas_imagen" => $ventajas_imagen,
            "aplicacion_title" => $aplicacion_title,
            "aplicacion_image" => $aplicacion_image,
            "facil_title" => $facil_title,
            "facil_image" => $facil_image,
            "facil_image2" => $facil_image2,
            "references" => $references,
            "consiguelo" => $consiguelo,
            "cruz" => $cruz
        );
        return $bulcosanArray;
    }

    public function proctokinasaContent()
    {
        $banner_principal = ContentPage::where("section", "protokinasa_banner_4")->whereStatusId(1)->first();
        $background_description = ContentPage::where("section", "protokinasa_baclkground_1")->whereStatusId(1)->first();
        $vulcosan_text_1 = ContentPage::where("section", "Protokinasa_texto_1")->whereStatusId(1)->first();
        $preImage = ContentPage::where("section", "protokinasa_image_4")->whereStatusId(1)->first();
        $references = ContentPage::where("section", "protokinasa_image_5")->whereStatusId(1)->first();
        $newArray = array(
            array(
                "title" => ContentPage::where("section", "protokinasa_titulo_1")->whereStatusId(1)->first()["content"],
                "text" => ContentPage::where("section", "Protokinasa_texto_2")->whereStatusId(1)->first()["content"],
                "image" => ContentPage::where("section", "protokinasa_image_1")->whereStatusId(1)->first()["content"]
            ),
            array(
                "title" => ContentPage::where("section", "protokinasa_titulo_2")->whereStatusId(1)->first()["content"],
                "text" => ContentPage::where("section", "Protokinasa_texto_3")->whereStatusId(1)->first()["content"],
                "image" => ContentPage::where("section", "protokinasa_image_3")->whereStatusId(1)->first()["content"]
            ),
            array(
                "title" => "Ventajas",
                "text" => ContentPage::where("section", "Protokinasa_texto_4")->whereStatusId(1)->first()["content"],
                "image" => ContentPage::where("section", "protokinasa_image_2")->whereStatusId(1)->first()["content"]
            ),
        );


        $bulcosanArray = array(
            "banner_principal" => $banner_principal,
            "background_description" => $background_description,
            "vulcosan_texto_1" => $vulcosan_text_1,
            "content" => $newArray,
            "preImage" => $preImage,
            "references" => $references
        );
        return $bulcosanArray;
    }
}
