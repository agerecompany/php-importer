<?php
/**
 * Filter Interface
 *
 * @category Agere
 * @package Agere_Importer
 * @author Popov Sergiy <popov@agere.com.ua>
 * @datetime: 13.05.2016 13:38
 */
namespace Agere\Importer\Helper;

interface FilterInterface
{
    /**
     * Filter value
     *
     * @param $value
     * @return mixed
     */
    public function filter($value);
}