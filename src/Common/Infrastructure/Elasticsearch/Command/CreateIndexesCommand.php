<?php

namespace App\Common\Infrastructure\Elasticsearch\Command;

use App\Common\Infrastructure\Elasticsearch\ESManagementOperationsInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateIndexesCommand extends Command
{
    protected static $defaultName = 'es:create-indexes';

    protected ESManagementOperationsInterface $eSManagementOperations;

    protected array $indexes;

    public function __construct(ESManagementOperationsInterface $eSManagementOperationsInterface, array $indexes)
    {
        $this->eSManagementOperations = $eSManagementOperationsInterface;
        $this->indexes = $indexes;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Creates all indexes in Elasticsearch.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        foreach($this->indexes as $index) {
            $params = ['index' => $index];
            $response = $this->eSManagementOperations->create($params);
            $output->writeln(print_r($response, false));
        }

        return Command::SUCCESS;
    }
}