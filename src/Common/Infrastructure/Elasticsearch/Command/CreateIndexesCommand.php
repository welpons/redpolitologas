<?php

namespace App\Common\Infrastructure\Elasticsearch\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateIndexesCommand extends Command
{
    protected static $defaultName = 'es:create-indexes';

    public function __construct(string $name = null)
    {
        parent::__construct($name);
    }

    protected function configure()
    {
        $this
            ->setDescription('Creates all indexes in Elasticsearch.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Whoa!');

        return Command::SUCCESS;


    }
}