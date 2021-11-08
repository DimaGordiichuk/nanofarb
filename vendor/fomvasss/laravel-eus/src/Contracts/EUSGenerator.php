<?php
/**
 * Created by PhpStorm.
 * User: fomvasss
 * Date: 17.12.18
 * Time: 23:35
 */

namespace Fomvasss\LaravelEUS\Contracts;

use Illuminate\Database\Eloquent\Model;

interface EUSGenerator
{
    public function save();

    public function get();

    public function where(array $params);

    public function setRawStr(string $rawStr = null);

    public function setEntity(Model $entity);

    public function setFieldName(string $fieldNameForUniqueStr);

    public function setModelPrimaryKey(string $modelPrimaryKey);

    public function setSlugSeparator(string $separator);

    public function setAllowedSeparator(string $separator);
}