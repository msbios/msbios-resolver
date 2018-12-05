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
     * @param mixed ...$arguments
     * @return mixed
     */
    public function resolve(...$arguments);
}
