<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Resolver;

use Zend\Stdlib\PriorityQueue;

/**
 * Class AbstractResolverManager
 * @package MSBios\Resolver
 */
abstract class AbstractResolverManager implements ResolverManagerInterface
{
    /**
     * @var PriorityQueue|ResolverInterface[]
     */
    protected $queue;

    /**
     * Constructor
     *
     * Instantiate the internal priority queue
     */
    public function __construct()
    {
        $this->queue = new PriorityQueue;
    }

    /**
     * <code>
     *     foreach ($this->queue as $resolver) {
     *         if ($resource = $resolver->resolve($arguments)) {
     *             return $resource;
     *         }
     *     }
     * </code>
     *
     * @param array ...$arguments
     * @return mixed
     */
    abstract public function resolve(...$arguments);

    /**
     * @inheritdoc
     *
     * @param ResolverInterface $resolver
     * @param int $priority
     * @return $this|mixed
     */
    public function attach(ResolverInterface $resolver, $priority = 1)
    {
        $this->queue->insert($resolver, $priority);
        return $this;
    }
}
