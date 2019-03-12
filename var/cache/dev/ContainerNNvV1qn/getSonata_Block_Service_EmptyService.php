<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.block.service.empty' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\BlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\BlockServiceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\AbstractBlockService.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\block-bundle\\src\\Block\\Service\\EmptyBlockService.php';

return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', ($this->privates['sonata.templating'] ?? $this->load('getSonata_TemplatingService.php')));
