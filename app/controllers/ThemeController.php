<?php
class ThemeController extends BaseController
{

    public function getIndex()
    {
        return View::make("theme.theme1.index");
    }
}