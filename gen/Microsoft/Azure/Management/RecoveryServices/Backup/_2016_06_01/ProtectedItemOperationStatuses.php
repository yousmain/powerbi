<?php
namespace Microsoft\Azure\Management\RecoveryServices\Backup\_2016_06_01;
final class ProtectedItemOperationStatuses
{
    /**
     * @param \Microsoft\Rest\ClientInterface $_client
     */
    public function __construct(\Microsoft\Rest\ClientInterface $_client)
    {
        $this->_Get_operation = $_client->createOperation('ProtectedItemOperationStatuses_Get');
    }
    /**
     * Gets the status of an operation such as triggering a backup or restore. The status can be: In progress, Completed, or Failed. You can refer to the OperationStatus enum for all the possible states of the operation. Some operations create jobs. This method returns the list of jobs associated with the operation.
     * @param string $vaultName
     * @param string $resourceGroupName
     * @param string $fabricName
     * @param string $containerName
     * @param string $protectedItemName
     * @param string $operationId
     * @return array
     */
    public function get(
        $vaultName,
        $resourceGroupName,
        $fabricName,
        $containerName,
        $protectedItemName,
        $operationId
    )
    {
        return $this->_Get_operation->call([
            'vaultName' => $vaultName,
            'resourceGroupName' => $resourceGroupName,
            'fabricName' => $fabricName,
            'containerName' => $containerName,
            'protectedItemName' => $protectedItemName,
            'operationId' => $operationId
        ]);
    }
    /**
     * @var \Microsoft\Rest\OperationInterface
     */
    private $_Get_operation;
}
