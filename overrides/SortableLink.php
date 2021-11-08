<?php
/**
 * Created by PhpStorm.
 * User: its
 * Date: 22.01.19
 * Time: 11:54
 */

namespace Overrides;

/**
 * Class SortableLink
 * Overrides for \Kyslik\ColumnSortable\SortableLink
 * Package https://github.com/Kyslik/column-sortable#blade-extension
 *
 * @package Overrides
 */
class SortableLink extends \Kyslik\ColumnSortable\SortableLink
{
    protected static $currentColumn;

    protected static $currentDirection;

    /**
     * @param array $parameters
     * @param bool $absolute
     *
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
     * @throws \Kyslik\ColumnSortable\Exceptions\ColumnSortableException
     */
    public static function url(string $sortColumn, string $direction = null, $absolute = true)
    {
        $parameters[] = $sortColumn;
        list($sortColumn, $sortParameter, $title, $queryParameters, $anchorAttributes) = self::parseParameters($parameters);

        $explodeResult    = self::explodeSortParameter($parameters[0]);
        $sortColumn       = (empty($explodeResult)) ? $parameters[0] : $explodeResult[1];
        $queryParameters  = (isset($parameters[2]) && is_array($parameters[2])) ? $parameters[2] : [];

        if (! in_array($direction, ['desc', 'asc'])) {
            list($icon, $direction) = self::determineDirection($sortColumn, $sortParameter);
        }

        $queryString = self::buildQueryString($queryParameters, $sortParameter, $direction);
        $urlPath = request()->path().'?'.$queryString;

        return $absolute ? url($urlPath) : $urlPath;
    }

    public static function currentColumn(string $column = null)
    {
        if ($column) {
            return request()->get('sort') == $column;
        }
        return request()->has('sort') && request()->get('sort');
    }

    public static function currentDirection(string $direction = null)
    {
        if ($direction) {
            return request()->get('direction') == $direction;
        }
        return request()->has('direction') && request()->get('direction');
    }

    public static function currentColumnDirection(string $column = null, string $direction = null)
    {
        if ($column && $direction) {
            return self::currentColumn($column) && self::currentDirection($direction);
        }

        return [self::currentColumn() => self::currentDirection()];
    }

    public static function urlWithoutSort($absolute = true)
    {
        $checkStrlenOrArray = function ($element) {
            return is_array($element) ? $element : strlen($element);
        };

        $persistParameters = array_filter(request()->except('sort', 'direction', 'page'), $checkStrlenOrArray);
        $queryString = http_build_query($persistParameters);

        $urlPath = request()->path(). ($queryString ? ('?' . $queryString) : '') ;

        return $absolute ? url($urlPath) : $urlPath;
    }

    /**
     * @param $queryParameters
     * @param $sortParameter
     * @param $direction
     *
     * @return string
     */
    private static function buildQueryString($queryParameters, $sortParameter, $direction)
    {
        $checkStrlenOrArray = function ($element) {
            return is_array($element) ? $element : strlen($element);
        };

        $persistParameters = array_filter(request()->except('sort', 'direction', 'page'), $checkStrlenOrArray);
        $queryString       = http_build_query(array_merge($queryParameters, $persistParameters, [
            'sort'      => $sortParameter,
            'direction' => $direction,
        ]));

        return $queryString;
    }

    /**
     * @param $sortColumn
     * @param $sortParameter
     *
     * @return array
     */
    private static function determineDirection($sortColumn, $sortParameter)
    {
        $icon = self::selectIcon($sortColumn);

        if (request()->get('sort') == $sortParameter && in_array(request()->get('direction'), ['asc', 'desc'])) {
            $icon      .= (request()->get('direction') === 'asc' ? config('columnsortable.asc_suffix', '-asc') :
                config('columnsortable.desc_suffix', '-desc'));
            $direction = request()->get('direction') === 'desc' ? 'asc' : 'desc';

            return [$icon, $direction];
        } else {
            $icon      = config('columnsortable.sortable_icon');
            $direction = config('columnsortable.default_direction_unsorted', 'asc');

            return [$icon, $direction];
        }
    }


    /**
     * @param $sortColumn
     *
     * @return string
     */
    private static function selectIcon($sortColumn)
    {
        $icon = config('columnsortable.default_icon_set');

        foreach (config('columnsortable.columns', []) as $value) {
            if (in_array($sortColumn, $value['rows'])) {
                $icon = $value['class'];
            }
        }

        return $icon;
    }
}