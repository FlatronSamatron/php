<?php

namespace App;

class ToasterPro extends Toaster
{
    public function __construct()
    {
        parent::__construct();
        $this->size = 4;
    }

    public function toastBagel(): void
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1).': Toasting '.$slice.' with bagel';
            echo '<br/>';
        }
    }
}