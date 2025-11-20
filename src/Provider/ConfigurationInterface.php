<?php

declare(strict_types=1);

namespace DH\Auditor\Provider;

interface ConfigurationInterface
{
    public function getExtraFields(): array;

    public function getAllFields(array $defaultTableOptions = []): array;

    public function getExtraIndices(): array;

    public function prepareExtraIndices(string $tablename): array;

    public function getAllIndices(string $tablename): array;
}
