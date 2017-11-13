<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBiosTest\Resolver;

use MSBios\Resolver\AbstractResolverManager;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractResolverManagerTest
 * @package MSBiosTest\Resolver
 */
class AbstractResolverManagerTest extends TestCase
{
    /**
     *
     */
    public function testCanBeCreateManager()
    {
        /** @var PHPUnit_Framework_MockObject_MockBuilder */
        $mockManager = $this->getMockBuilder(AbstractResolverManager::class);
    }
}
