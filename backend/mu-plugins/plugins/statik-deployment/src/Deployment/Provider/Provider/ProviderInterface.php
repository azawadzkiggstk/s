<?php

declare(strict_types=1);

namespace Statik\Deploy\Deployment\Provider\Provider;

use Statik\Deploy\Deployment\Provider\Api\ApiInterface;
use Statik\Deploy\Deployment\Provider\Deployment\DeploymentInterface;
use Statik\Deploy\Deployment\Provider\Error\ApiRequestException;
use Statik\Deploy\Deployment\Provider\Error\ApiResponseException;
use Statik\Deploy\Deployment\Provider\Settings\SettingsInterface;

/**
 * Interface DriverInterface.
 *
 * The interface contains all required methods for use as a Provider in the plugin.
 */
interface ProviderInterface
{
    /**
     * That method allows a call API endpoint that triggers a deployment process.
     * Returns details about started process. Before the trigger in the database
     * is to save `Deploy in progress` value with the current timestamp.
     *
     * @throws ApiResponseException|ApiRequestException
     */
    public function create(
        string $name = null,
        bool $flushCache = false,
        bool $autoRelease = true,
        bool|int $preview = false,
        bool $useCredentials = false
    ): DeploymentInterface;

    /**
     * Gets from Provider API information about last triggered deployment.
     * That deployment could not by trigger by the plugin but eq. by the GIT
     * hook or manually. When deployment has finished status this method also
     * clear `Deploy in progress` value.
     *
     * @throws ApiResponseException|ApiRequestException
     */
    public function get(string $id): DeploymentInterface;

    /**
     * Get a list of the latest deployments.
     *
     * @throws ApiResponseException|ApiRequestException
     */
    public function fetch(int $perPage = 20, int $page = 1, bool|int $preview = false): array;

    /**
     * Switch the current live release.
     *
     * @throws ApiResponseException|ApiRequestException
     */
    public function rollback(string $id): bool;

    /**
     * Get API instance.
     */
    public function getApi(): ApiInterface;

    /**
     * Get Settings instance.
     */
    public function getSettings(): SettingsInterface;

    /**
     * Get Environment name.
     */
    public function getEnvironment(): ?string;

    /**
     * Get Frontend URL.
     */
    public function getFrontUrl(): ?string;
}
