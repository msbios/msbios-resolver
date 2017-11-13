<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Resolver;

use MSBios\Resolver\Module;
use PHPUnit\Framework\TestCase;

/**
 * Class ModuleTest
 * @package MSBiosTest\Assetic
 */
class ModuleTest extends TestCase
{
    /**
     *
     */
    public function testCanBeCreate()
    {
        $this->assertEquals(Module::VERSION, '1.0.0');
    }
}
