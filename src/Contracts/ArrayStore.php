<?php

declare(strict_types=1);

namespace Saloon\Contracts;

interface ArrayStore
{
    /**
     * Retrieve all the items.
     *
     * @return array
     */
    public function all(): array;

    /**
     * Retrieve a single item.
     *
     * @param string $key
     * @param mixed|null $default
     * @return mixed
     */
    public function get(string $key, mixed $default = null): mixed;

    /**
     * Overwrite the entire repository's contents.
     *
     * @param array $data
     * @return ArrayStore
     */
    public function set(array $data): static;

    /**
     * Merge in other arrays.
     *
     * @param mixed ...$arrays
     * @return ArrayStore
     */
    public function merge(...$arrays): static;

    /**
     * Add an item to the repository.
     *
     * @param string $key
     * @param mixed $value
     * @return ArrayStore
     */
    public function add(string $key, mixed $value): static;

    /**
     * Remove an item from the store.
     *
     * @param string $key
     * @return ArrayStore
     */
    public function remove(string $key): static;

    /**
     * Determine if the store is empty
     *
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Determine if the store is not empty
     *
     * @return bool
     */
    public function isNotEmpty(): bool;
}
