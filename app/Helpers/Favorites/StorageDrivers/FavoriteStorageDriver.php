<?php
/**
 * Created by PhpStorm.
 * User: its
 * Date: 31.01.19
 * Time: 12:02
 */

namespace App\Helpers\Favorite\StorageDrivers;

interface FavoriteStorageDriver
{
    /**
     * @return array
     */
    public function get(): array;

    /**
     * @param int $id
     */
    public function add(int $id): void;

    /**
     * @param int $id
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * @return bool
     */
    public function clear(): bool;
}