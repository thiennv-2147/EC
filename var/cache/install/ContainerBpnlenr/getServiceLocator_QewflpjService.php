<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.qewflpj' shared service.

return $this->services['service_locator.qewflpj'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['CsvType' => function () {
    $f = function (\Eccube\Entity\Master\CsvType $v) { return $v; }; return $f(${($_ = isset($this->services['autowired.Eccube\Entity\Master\CsvType']) ? $this->services['autowired.Eccube\Entity\Master\CsvType'] : ($this->services['autowired.Eccube\Entity\Master\CsvType'] = new \Eccube\Entity\Master\CsvType())) && false ?: '_'});
}]);
