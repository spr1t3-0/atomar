<?php 

Class Pages extends Controller {

    public function index() {
        return $this->render(["title" => "it works"], 'example/content');
    }


}