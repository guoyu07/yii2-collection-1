<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\collection;

/**
 * Interface Arrayable
 * @package xutl\collection
 * @see \Illuminate\Contracts\Support\Arrayable
 */
interface Arrayable
{
    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray();
}
