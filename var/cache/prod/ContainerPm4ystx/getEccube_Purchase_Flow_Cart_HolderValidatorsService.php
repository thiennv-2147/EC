<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'eccube.purchase.flow.cart.holder_validators' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\Collection.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\collections\\lib\\Doctrine\\Common\\Collections\\ArrayCollection.php';

return $this->services['eccube.purchase.flow.cart.holder_validators'] = new \Doctrine\Common\Collections\ArrayCollection([0 => ${($_ = isset($this->services['Eccube\Service\PurchaseFlow\Processor\EmptyItemsValidator']) ? $this->services['Eccube\Service\PurchaseFlow\Processor\EmptyItemsValidator'] : $this->load('getEmptyItemsValidatorService.php')) && false ?: '_'}]);
