<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->getForm_RegistryService()), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 2 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 3 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 4 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFormType', 5 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\FileUploadType', 6 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFiltersFormType', 7 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminAutocompleteType', 8 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminBatchFormType', 9 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminDividerType', 10 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminSectionType', 11 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminGroupType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EasyAdminExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser', 2 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Guesser\\MissingDoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? ($this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL))));

$instance->setName('debug:form');

return $instance;