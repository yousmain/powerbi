<?php
namespace Microsoft\Azure\Management\StreamAnalytics\_2016_03_01;
final class Operations
{
    /**
     * @param \Microsoft\Rest\ClientInterface $_client
     */
    public function __construct(\Microsoft\Rest\ClientInterface $_client)
    {
        $this->_List_operation = $_client->createOperation('Operations_List');
    }
    /**
     * Lists all of the available Stream Analytics related operations.
     * @return array
     */
    public function list_()
    {
        return $this->_List_operation->call([]);
    }
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_List_operation;
}
