<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.dumper.xliff' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Dumper\\DumperInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Dumper\\FileDumper.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\translation\\Dumper\\XliffFileDumper.php';

return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();