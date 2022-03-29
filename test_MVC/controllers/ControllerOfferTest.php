<?php

Class ControllerOfferTest
{
    public function __construct()
    {
        $a=new OfferManager();
        $a->GetOffers();
    }
}