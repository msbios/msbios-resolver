<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resolver;

/**
 * Interface ResolverInterface
 * @package MSBios\Resolver
 */
interface ResolverInterface
{
    /**
     * @param array ...$arguments
     * @return mixed
     */
    public function resolve(array ...$arguments);
}
