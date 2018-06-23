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
	    OSCOM::setSite('Shop');

	    OSCOM::initialize();

	    $OSCOM_Template = Registry::get('Template');

	    echo $OSCOM_Template->getContent();

	}
}
?>
