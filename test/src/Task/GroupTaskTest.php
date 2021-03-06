<?php
/* (c) Anton Medvedev <anton@medv.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Deployer\Task;

class GroupTaskTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \RuntimeException
     */
    public function testGroupTask()
    {
        $context = $this->getMockBuilder('Deployer\Task\Context')->disableOriginalConstructor()->getMock();

        $task = new GroupTask('group', []);
        $task->run($context);
    }
}
