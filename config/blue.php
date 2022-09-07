<?php

class blue{
    public $titolo;
    public $image;

    public function __construct($_titolo,$_image) {
        $this->titolo = $_titolo;
        $this->image = $_image;
    }
}

return [
    new blue("Digital comics", "-comics-digital-comics.png"),
    new blue("DC Merchandise", "-comics-merchandise.png"),
    new blue("subscription", "-comics-subscriptions.png"),
    new blue("Comics shop locator", "-comics-shop-locator.png"),
    new blue("DC power visa", "-dc-power-visa.svg"),
];

