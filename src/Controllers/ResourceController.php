<?php

namespace 0notole\Vault\Controllers;

use Illuminate\Http\Request;
use Validator;

class ResourceController extends Controller {

    /**
     * CONSTRUCTOR
     */
    public function __construct ()
    {
        $this->middleware('admin');
    }


}
