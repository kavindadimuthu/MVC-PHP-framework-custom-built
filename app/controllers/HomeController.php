<?php
class HomeController extends Controller {
    public function index() {
        $this->view('index');
    }
    public function about() {
        $this->view('about');
    }
}

