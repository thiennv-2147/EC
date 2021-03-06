<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eccube\Command;

use Dotenv\Dotenv;
use Eccube\Util\StringUtil;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class InstallerCommand extends Command
{
    protected static $defaultName = 'eccube:install';

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var SymfonyStyle
     */
    protected $io;

    /**
     * @var string
     */
    protected $databaseUrl;

    public function __construct(ContainerInterface $container)
    {
        parent::__construct();

        $this->container = $container;
    }

    protected function configure()
    {
        $this
            ->setDescription('Install EC-CUBE');
    }

    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $this->io->title('EC-CUBE Installer Interactive Wizard');
        $this->io->text([
            'If you prefer to not use this interactive wizard, define the environment valiables as follows:',
            '',
            ' $ export APP_ENV=dev',
            ' $ export APP_DEBUG=1',
            ' $ export DATABASE_URL=database_url',
            ' $ export DATABASE_SERVER_VERSION=server_version',
            ' $ export MAILER_URL=mailer_url',
            ' $ export ECCUBE_AUTH_MAGIC=auth_magic',
            ' ... and more',
            ' $ php bin/console eccube:install --no-interaction',
            '',
        ]);

        // DATABASE_URL
        $databaseUrl = $this->container->getParameter('eccube_database_url');
        if (empty($databaseUrl)) {
            $databaseUrl = 'sqlite:///var/eccube.db';
        }
        $databaseUrl = $this->io->ask('Database Url', $databaseUrl);

        // DATABASE_SERVER_VERSION
        $databaseName = $this->getDatabaseName($databaseUrl);
        $serverVersion = $this->io->ask('Database Server version', 'auto');
        if ('auto' === $serverVersion) {
            $serverVersion = $this->getDatabaseServerVersion($databaseName);
        }

        // MAILER_URL
        $mailerUrl = $this->container->getParameter('eccube_mailer_url');
        if (empty($mailerUrl)) {
            $mailerUrl = 'null://localhost';
        }
        $mailerUrl = $this->io->ask('Mailer Url', $mailerUrl);

        // ECCUBE_AUTH_MAGIC
        $authMagic = $this->container->getParameter('eccube_auth_magic');
        if (empty($authMagic) || $authMagic === '<change.me>') {
            $authMagic = StringUtil::random();
        }
        $authMagic = $this->io->ask('Auth Magic', $authMagic);

        $this->io->caution('Execute the installation process. All data is initialized.');
        $question = new ConfirmationQuestion('Is it OK?');
        if (!$this->io->askQuestion($question)) {
            // `no`?????????????????????????????????????????????????????????????????????
            $this->setCode(function () {
                $this->io->success('EC-CUBE installation stopped.');
            });

            return;
        }

        $envParameters = [
            'APP_ENV' => 'dev',
            'APP_DEBUG' => '1',
            'DATABASE_URL' => $databaseUrl,
            'DATABASE_SERVER_VERSION' => $serverVersion,
            'MAILER_URL' => $mailerUrl,
            'ECCUBE_AUTH_MAGIC' => $authMagic,
            'ECCUBE_ADMIN_ROUTE' => 'admin',
            'ECCUBE_TEMPLATE_CODE' => 'default',
            'ECCUBE_LOCALE' => $this->container->getParameter('env(eccube_locale)'),
            'ECCUBE_TIMEZONE' => $this->container->getParameter('env(eccube_timezone)'),
            'ECCUBE_CURRENCY' => $this->container->getParameter('env(eccube_currency)')
        ];

        $envDir = $this->container->getParameter('kernel.project_dir');
        $envFile = $envDir.'/.env';
        $envDistFile = $envDir.'/.env.dist';

        $env = file_exists($envFile)
            ? file_get_contents($envFile)
            : file_get_contents($envDistFile);

        $env = StringUtil::replaceOrAddEnv($env, $envParameters);

        file_put_contents($envFile, $env);
    }

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $this->io = new SymfonyStyle($input, $output);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // Process????????????, APP_ENV/APP_DEBUG??????????????????????????????????????????????????????,
        // ???????????????.env?????????????????????????????????.
        if ($input->isInteractive()) {
            $envDir = $this->container->getParameter('kernel.project_dir');
            if (file_exists($envDir.'/.env')) {
                (new Dotenv($envDir))->overload();
            }
        }

        // ????????????????????????, container->getParameter('eccube_database_url')??????
        // ??????????????????????????????????????????, getenv()???????????????.
        $databaseUrl = getenv('DATABASE_URL');
        $databaseName = $this->getDatabaseName($databaseUrl);
        $ifNotExists = $databaseName === 'sqlite' ? '' : ' --if-not-exists';

        // ????????????????????????, ??????????????????, ?????????????????????????????????.
        $commands = [
            'doctrine:database:create'.$ifNotExists,
            'doctrine:schema:drop --force',
            'doctrine:schema:create',
            'eccube:fixtures:load',
            'cache:clear --no-warmup',
        ];

        // ?????????????????????????????????????????????????????????????????????.
        foreach ($commands as $command) {
            try {
                $this->io->text(sprintf('<info>Run %s</info>...', $command));
                $process = new Process('bin/console '.$command);
                $process->mustRun();
                $this->io->text($process->getOutput());
            } catch (ProcessFailedException $e) {
                $this->io->error($e->getMessage());

                return;
            }
        }

        $this->io->success('EC-CUBE installation successful.');
    }

    protected function getDatabaseName($databaseUrl)
    {
        if (0 === strpos($databaseUrl, 'sqlite')) {
            return 'sqlite';
        }
        if (0 === strpos($databaseUrl, 'postgres')) {
            return 'postgres';
        }
        if (0 === strpos($databaseUrl, 'mysql')) {
            return 'mysql';
        }

        throw new \LogicException(sprintf('Database Url %s is invalid.', $databaseUrl));
    }

    protected function getDatabaseServerVersion($databaseName)
    {
        $versions = [
            'sqlite' => 3,
            'postgres' => 9,
            'mysql' => 5,
        ];

        if (!isset($versions[$databaseName])) {
            throw new \LogicException(sprintf('Database Name %s is invalid.', $databaseName));
        }

        return $versions[$databaseName];
    }
}
