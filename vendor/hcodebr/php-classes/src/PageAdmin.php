<?php
/**
 * Created by PhpStorm.
 * User: kai
 * Date: 23/05/2018
 * Time: 15:37
 */

namespace Hcode;


class PageAdmin extends Page {

    public function __construct(array $opts = array(), $tpl_dir = "/views/admin/")
    {
        parent::__construct($opts, $tpl_dir);
    }

}