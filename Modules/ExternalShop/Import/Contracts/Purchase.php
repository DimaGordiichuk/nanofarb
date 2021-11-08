<?php

namespace Modules\ExternalShop\Import\Contracts;

interface Purchase
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return string
     */
    public function getExternalId(): string;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return mixed
     */
    public function getSku();

    /**
     * @return int
     */
    public function getPrice(): int;

    /**
     * @return int
     */
    public function getQuantity(): int;

    /**
     * @return mixed
     */
    public function getUrl();

    /**
     * @return mixed
     */
    public function getImgUrl();
}