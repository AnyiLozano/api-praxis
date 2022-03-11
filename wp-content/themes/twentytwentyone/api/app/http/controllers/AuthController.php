<?php

namespace App\Http\Controllers;

require dirname(__DIR__, 2) . "/Models/User.php";

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register($request)
    {
        global $wpdb;

        $status = false;
        $result = null;
        $wpdb->query("START TRANSACTION");
        try {
            $user = new User();
            $user->uid = $request["name"].$request["last_name"];
            $user->fullname = $request["name"]. " " .$request["last_name"];
            $user->email = $request["email"];
            $user->phone = $request["phone"];
            $user->password = $request["password"];
            $user->username = $request["username"];
            $user->profession = $request["profession"];
            $user->status_id = 2;
            $user->save();

            $status = true;
            $wpdb->query("COMMIT");
        } catch (\Throwable $th) {
            $result = $th->getMessage();
            $wpdb->query("ROLLBACK");
        }if($status){
            return $this->response($status, ["type" => "success", "content" => "Done."], $user);
        }else{
            return $this->response($status, ["type" => "error", "content" => "Error."], $result);
        }
    }
}