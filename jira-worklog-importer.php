<?php
/**
 * This file is part of jira-worklog-importer <https://github.com/roma-glushko/jira-worklog-importer>
 *
 * @author Roman Glushko <https://github.com/roma-glushko>
 */
// https://confluence.atlassian.com/cloud/api-tokens-938839638.html

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use JiraWorklogImporter\Command\ImportWorklogCommand;
use Symfony\Component\Console\Application;

use JiraRestApi\Auth\AuthService;
use JiraRestApi\Project\ProjectService;
use JiraRestApi\JiraException;

try {
    $auth = new AuthService();

    echo $auth->login();
} catch (JiraException $e) {
    print("Error Occured! " . $e->getMessage());
}


//$application = new Application();

//$application->add(new ImportWorklogCommand());

//$application->run();