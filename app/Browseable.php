<?php

namespace App;

interface Browseable
{
    /**
     * @return string
     */
    public function getAction();

    /**
     * @return string
     */
    public function getParameterName();
}