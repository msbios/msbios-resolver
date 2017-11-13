<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Resolver;

/**
 * Interface ResolverManagerInterface
 * @package MSBios\Resolver
 */
interface ResolverManagerInterface extends ResolverInterface
{
    /**
     * @param ResolverInterface $resolver
     * @param int $priority
     * @return mixed
     */
    public function attach(ResolverInterface $resolver, $priority = 1);
}
