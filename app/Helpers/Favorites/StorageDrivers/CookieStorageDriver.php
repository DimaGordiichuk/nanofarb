<?php
/**
 * Created by PhpStorm.
 * User: its
 * Date: 31.01.19
 * Time: 12:18
 */

namespace App\Helpers\Favorite\StorageDrivers;

class CookieStorageDriver implements FavoriteStorageDriver
{
    /** @var string */
    const COOKIE_NAME = 'favorites';

    const LIFETIME = 129600;

    /** @var array|null */
    protected $items = null;

    /**
     * CartCookieStorageDriver constructor.
     */
    public function __construct()
    {
        if ($this->items === null) {
            $cookie = \Cookie::get(self::COOKIE_NAME, '');

            try {
                $this->items = json_decode($cookie, true);
            } catch (\Exception $exception) {
                $this->items = [];
            }
        }
    }

    /**
     * Returns list of product ids
     *
     * @return int[]
     */
    public function get(): array
    {
        return $this->items ?? [];
    }

    /**
     * @param int $id
     */
    public function add(int $id): void
    {
        $this->items[$id] = $id;

        $this->updateCookies();
    }

    /**
     * @param int $id
     * @return bool
     */
    public function remove(int $id): bool
    {
        if (is_array($this->items) && ($index = array_search($id, $this->items)) !== false) {
            unset($this->items[$index]);
            $this->updateCookies();
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function clear(): bool
    {
        $this->items = [];
        $this->updateCookies();

        return true;
    }

    protected function updateCookies()
    {
        \Cookie::queue(self::COOKIE_NAME, json_encode($this->items), self::LIFETIME);
    }
}