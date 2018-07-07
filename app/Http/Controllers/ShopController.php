<?php

namespace OSC\Http\Controllers;

use Illuminate\Http\Request;
use OSC\Core\OSCOM;
use OSC\Core\Registry;

class ShopController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Leave it to OSC for now. TODO: routes setup.
        // OSCOM::setSite('Admin');

        OSCOM::initialize();
        $OSCOM_Template = Registry::get('Template');

        echo $OSCOM_Template->getContent();

        //  Testing Blade
        //  return view('main');

    }
}
?>
