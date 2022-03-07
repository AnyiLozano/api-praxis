<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContentPage;
use stdClass;

class HomeController extends Controller
{
    public function getLogo()
    {
        $custom_logo_id = get_theme_mod("custom_logo");
        $image = wp_get_attachment_image_src($custom_logo_id);

        return $this->response(true, ['type' => 'success', 'content' => 'Done.'], ['logo' => $image[0]]);
    }

    public function getMenus()
    {
        $menus = wp_get_nav_menu_items("primary-menu");
        $newMenu = [];
        foreach($menus as $value){
            $obj = new stdClass();
            $obj->text = $value->post_title;
            $obj->path = $value->url;

            array_push($newMenu, $obj);
        }

        // return $menus;
        return $this->response(true, ['type' => 'success', 'content' => 'Done.'], $newMenu);
    }

    public function getHomeAssets()
    {
        return $this->response(true, ['type' => 'success', 'content' => 'Done.'], ContentPage::wherePageId(1)->whereStatusId(1)->get());
    }
}
