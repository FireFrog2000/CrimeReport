<?php

class UserController extends BaseController
{

    public function getProfile()
    {
        return View::make('user.profile');
    }

}