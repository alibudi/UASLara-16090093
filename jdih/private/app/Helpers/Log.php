<?php
namespace App\Helpers;

use App\LogModel;

class Log
{
    public function log($id_user = nll,$act)
    {
        LogModel::record(
        $id_user,
        $act);
    }
    public static function instance()
{
    return new Log();
}
}


?>