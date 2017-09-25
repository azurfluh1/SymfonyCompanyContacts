<?php

namespace AppBundle\Models;

class Company
{
    public function getCompanies($id)
    {
        if(!isset($id)){
            $id = 0;
        }
        return $id;
    }
}
