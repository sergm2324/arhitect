<?php

require "AbstractFactory/factory/AbstractFactory.php";
require "AbstractFactory/factory/BrowseFactory.php";
require "AbstractFactory/factory/MacOsFactory.php";
require "AbstractFactory/factory/WindowFactory.php";

require "AbstractFactory/product/AbstractElement.php";
require "AbstractFactory/product/Button.php";
require "AbstractFactory/product/Label.php";
require "AbstractFactory/product/ModalForm.php";


function createElement (AbstractFactory $abstractFactory, string $element) {
    $myelement = $abstractFactory->createButton($element);
    $myelement->getRandomPicture();
    $myelement->render();
}

createElement(new BrowseFactory(),"Button");
createElement(new MacOsFactory(), "ModalForm");

