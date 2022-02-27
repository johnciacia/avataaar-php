<?php

namespace Avataaar;

/**
 * 
 */
class AvataaarProvider extends \Faker\Provider\Base {    
    
    /**
     * 
     */
    public function avataaar(): string {
        return (new Avataaar())->url();
    }
}