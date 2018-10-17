<?php

namespace briantweed\LaravelInterface\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;


class makeInterface extends GeneratorCommand
{

    protected $name = 'make:interface';
    protected $description = 'Create an interface';
    protected $type = 'Console command';


    protected function replaceClass($stub, $name)
    {
        $stub = parent::replaceClass($stub, $name);

        return str_replace('dummy:command', $this->option('command'), $stub);

    }


    protected function getStub()
    {
        return resource_path("stubs/interface.stub");
    }


    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Interfaces';
    }


    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the command.'],
        ];
    }


    protected function getOptions()
    {
        return [
            ['command', null, InputOption::VALUE_OPTIONAL, 'The terminal command that should be assigned.', 'command:name'],
        ];
    }

}}