<?php

namespace 0notole\Vault\Controllers;

class MainController extends Controller {

    public function __construct () {
        $this->middleware('admin', ['except' => ['pass']]);
    }

    /**
     * Dashboard
     * @return [type] [description]
     */
    public function index () {

    }


}
