<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.category_delete_mode' shared service.

return $this->services['prestashop.core.form.choice_provider.category_delete_mode'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CategoryDeleteModeChoiceProvider(($this->services['translator'] ?? $this->getTranslatorService()));
