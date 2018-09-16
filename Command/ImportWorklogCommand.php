<?php
/**
 * This file is part of jira-worklog-importer <https://github.com/roma-glushko/jira-worklog-importer>
 *
 * @author Roman Glushko <https://github.com/roma-glushko>
 */

declare(strict_types=1);

namespace JiraWorklogImporter\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ImportWorklogCommand
 */
class ImportWorklogCommand extends Command
{
    /**
     *
     */
    protected function configure()
    {
        // ...
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     *
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

    }

}