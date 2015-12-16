<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Functional\Spryker\Zed\Transfer\Business\Model;

use Spryker\Shared\Kernel\Messenger\MessengerInterface;
use Spryker\Zed\Transfer\Business\TransferBusinessFactory;

/**
 * @group Spryker
 * @group Zed
 * @group Transfer
 * @group Business
 * @group TransferBusinessFactory
 */
class TransferBusinessFactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @return TransferBusinessFactory
     */
    private function getBusinessFactory()
    {
        return new TransferBusinessFactory();
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject|MessengerInterface
     */
    private function getMessenger()
    {
        return $this->getMock('Spryker\Shared\Kernel\Messenger\MessengerInterface');
    }

    /**
     * @return void
     */
    public function testCreateTransferGeneratorShouldReturnFullyConfiguredInstance()
    {
        $transferGenerator = $this->getBusinessFactory()->createTransferGenerator(
            $this->getMessenger()
        );

        $this->assertInstanceOf('Spryker\Zed\Transfer\Business\Model\TransferGenerator', $transferGenerator);
    }

    /**
     * @return void
     */
    public function testCreateTransferCleanerShouldReturnFullyConfiguredInstance()
    {
        $transferCleaner = $this->getBusinessFactory()->createTransferCleaner();

        $this->assertInstanceOf('Spryker\Zed\Transfer\Business\Model\TransferCleaner', $transferCleaner);
    }

}
