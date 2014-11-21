<?php
class CommentController extends BaseController {

    //app/controllers/CommentController.php

    public $restful = true;


    public function get_index() {
        return View::make('Comment.index');
    }
}
