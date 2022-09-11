<?php
namespace Aws\Ssm;

use Aws\AwsClient;

/**
 * Amazon EC2 Simple Systems Manager client.
 *
 * @method \Aws\Result addTagsToResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsToResourceAsync(array $args = [])
 * @method \Aws\Result associateOpsItemRelatedItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateOpsItemRelatedItemAsync(array $args = [])
 * @method \Aws\Result cancelCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelCommandAsync(array $args = [])
 * @method \Aws\Result cancelMaintenanceWindowExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelMaintenanceWindowExecutionAsync(array $args = [])
 * @method \Aws\Result createActivation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createActivationAsync(array $args = [])
 * @method \Aws\Result createAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssociationAsync(array $args = [])
 * @method \Aws\Result createAssociationBatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAssociationBatchAsync(array $args = [])
 * @method \Aws\Result createDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDocumentAsync(array $args = [])
 * @method \Aws\Result createMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMaintenanceWindowAsync(array $args = [])
 * @method \Aws\Result createOpsItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOpsItemAsync(array $args = [])
 * @method \Aws\Result createOpsMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createOpsMetadataAsync(array $args = [])
 * @method \Aws\Result createPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPatchBaselineAsync(array $args = [])
 * @method \Aws\Result createResourceDataSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceDataSyncAsync(array $args = [])
 * @method \Aws\Result deleteActivation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteActivationAsync(array $args = [])
 * @method \Aws\Result deleteAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAssociationAsync(array $args = [])
 * @method \Aws\Result deleteDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDocumentAsync(array $args = [])
 * @method \Aws\Result deleteInventory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInventoryAsync(array $args = [])
 * @method \Aws\Result deleteMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMaintenanceWindowAsync(array $args = [])
 * @method \Aws\Result deleteOpsMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteOpsMetadataAsync(array $args = [])
 * @method \Aws\Result deleteParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteParameterAsync(array $args = [])
 * @method \Aws\Result deleteParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteParametersAsync(array $args = [])
 * @method \Aws\Result deletePatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePatchBaselineAsync(array $args = [])
 * @method \Aws\Result deleteResourceDataSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceDataSyncAsync(array $args = [])
 * @method \Aws\Result deregisterManagedInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterManagedInstanceAsync(array $args = [])
 * @method \Aws\Result deregisterPatchBaselineForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterPatchBaselineForPatchGroupAsync(array $args = [])
 * @method \Aws\Result deregisterTargetFromMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterTargetFromMaintenanceWindowAsync(array $args = [])
 * @method \Aws\Result deregisterTaskFromMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterTaskFromMaintenanceWindowAsync(array $args = [])
 * @method \Aws\Result describeActivations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeActivationsAsync(array $args = [])
 * @method \Aws\Result describeAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssociationAsync(array $args = [])
 * @method \Aws\Result describeAssociationExecutionTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssociationExecutionTargetsAsync(array $args = [])
 * @method \Aws\Result describeAssociationExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAssociationExecutionsAsync(array $args = [])
 * @method \Aws\Result describeAutomationExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAutomationExecutionsAsync(array $args = [])
 * @method \Aws\Result describeAutomationStepExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAutomationStepExecutionsAsync(array $args = [])
 * @method \Aws\Result describeAvailablePatches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAvailablePatchesAsync(array $args = [])
 * @method \Aws\Result describeDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDocumentAsync(array $args = [])
 * @method \Aws\Result describeDocumentPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDocumentPermissionAsync(array $args = [])
 * @method \Aws\Result describeEffectiveInstanceAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEffectiveInstanceAssociationsAsync(array $args = [])
 * @method \Aws\Result describeEffectivePatchesForPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEffectivePatchesForPatchBaselineAsync(array $args = [])
 * @method \Aws\Result describeInstanceAssociationsStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAssociationsStatusAsync(array $args = [])
 * @method \Aws\Result describeInstanceInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceInformationAsync(array $args = [])
 * @method \Aws\Result describeInstancePatchStates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancePatchStatesAsync(array $args = [])
 * @method \Aws\Result describeInstancePatchStatesForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancePatchStatesForPatchGroupAsync(array $args = [])
 * @method \Aws\Result describeInstancePatches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancePatchesAsync(array $args = [])
 * @method \Aws\Result describeInventoryDeletions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInventoryDeletionsAsync(array $args = [])
 * @method \Aws\Result describeMaintenanceWindowExecutionTaskInvocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowExecutionTaskInvocationsAsync(array $args = [])
 * @method \Aws\Result describeMaintenanceWindowExecutionTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowExecutionTasksAsync(array $args = [])
 * @method \Aws\Result describeMaintenanceWindowExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowExecutionsAsync(array $args = [])
 * @method \Aws\Result describeMaintenanceWindowSchedule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowScheduleAsync(array $args = [])
 * @method \Aws\Result describeMaintenanceWindowTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowTargetsAsync(array $args = [])
 * @method \Aws\Result describeMaintenanceWindowTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowTasksAsync(array $args = [])
 * @method \Aws\Result describeMaintenanceWindows(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowsAsync(array $args = [])
 * @method \Aws\Result describeMaintenanceWindowsForTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMaintenanceWindowsForTargetAsync(array $args = [])
 * @method \Aws\Result describeOpsItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeOpsItemsAsync(array $args = [])
 * @method \Aws\Result describeParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeParametersAsync(array $args = [])
 * @method \Aws\Result describePatchBaselines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePatchBaselinesAsync(array $args = [])
 * @method \Aws\Result describePatchGroupState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePatchGroupStateAsync(array $args = [])
 * @method \Aws\Result describePatchGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePatchGroupsAsync(array $args = [])
 * @method \Aws\Result describePatchProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePatchPropertiesAsync(array $args = [])
 * @method \Aws\Result describeSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSessionsAsync(array $args = [])
 * @method \Aws\Result disassociateOpsItemRelatedItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateOpsItemRelatedItemAsync(array $args = [])
 * @method \Aws\Result getAutomationExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAutomationExecutionAsync(array $args = [])
 * @method \Aws\Result getCalendarState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCalendarStateAsync(array $args = [])
 * @method \Aws\Result getCommandInvocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCommandInvocationAsync(array $args = [])
 * @method \Aws\Result getConnectionStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectionStatusAsync(array $args = [])
 * @method \Aws\Result getDefaultPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDefaultPatchBaselineAsync(array $args = [])
 * @method \Aws\Result getDeployablePatchSnapshotForInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDeployablePatchSnapshotForInstanceAsync(array $args = [])
 * @method \Aws\Result getDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDocumentAsync(array $args = [])
 * @method \Aws\Result getInventory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInventoryAsync(array $args = [])
 * @method \Aws\Result getInventorySchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInventorySchemaAsync(array $args = [])
 * @method \Aws\Result getMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowAsync(array $args = [])
 * @method \Aws\Result getMaintenanceWindowExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowExecutionAsync(array $args = [])
 * @method \Aws\Result getMaintenanceWindowExecutionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowExecutionTaskAsync(array $args = [])
 * @method \Aws\Result getMaintenanceWindowExecutionTaskInvocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowExecutionTaskInvocationAsync(array $args = [])
 * @method \Aws\Result getMaintenanceWindowTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getMaintenanceWindowTaskAsync(array $args = [])
 * @method \Aws\Result getOpsItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpsItemAsync(array $args = [])
 * @method \Aws\Result getOpsMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpsMetadataAsync(array $args = [])
 * @method \Aws\Result getOpsSummary(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOpsSummaryAsync(array $args = [])
 * @method \Aws\Result getParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParameterAsync(array $args = [])
 * @method \Aws\Result getParameterHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParameterHistoryAsync(array $args = [])
 * @method \Aws\Result getParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParametersAsync(array $args = [])
 * @method \Aws\Result getParametersByPath(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getParametersByPathAsync(array $args = [])
 * @method \Aws\Result getPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPatchBaselineAsync(array $args = [])
 * @method \Aws\Result getPatchBaselineForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPatchBaselineForPatchGroupAsync(array $args = [])
 * @method \Aws\Result getServiceSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceSettingAsync(array $args = [])
 * @method \Aws\Result labelParameterVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise labelParameterVersionAsync(array $args = [])
 * @method \Aws\Result listAssociationVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociationVersionsAsync(array $args = [])
 * @method \Aws\Result listAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociationsAsync(array $args = [])
 * @method \Aws\Result listCommandInvocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCommandInvocationsAsync(array $args = [])
 * @method \Aws\Result listCommands(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCommandsAsync(array $args = [])
 * @method \Aws\Result listComplianceItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComplianceItemsAsync(array $args = [])
 * @method \Aws\Result listComplianceSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComplianceSummariesAsync(array $args = [])
 * @method \Aws\Result listDocumentMetadataHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentMetadataHistoryAsync(array $args = [])
 * @method \Aws\Result listDocumentVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentVersionsAsync(array $args = [])
 * @method \Aws\Result listDocuments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDocumentsAsync(array $args = [])
 * @method \Aws\Result listInventoryEntries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInventoryEntriesAsync(array $args = [])
 * @method \Aws\Result listOpsItemEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOpsItemEventsAsync(array $args = [])
 * @method \Aws\Result listOpsItemRelatedItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOpsItemRelatedItemsAsync(array $args = [])
 * @method \Aws\Result listOpsMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOpsMetadataAsync(array $args = [])
 * @method \Aws\Result listResourceComplianceSummaries(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceComplianceSummariesAsync(array $args = [])
 * @method \Aws\Result listResourceDataSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceDataSyncAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result modifyDocumentPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyDocumentPermissionAsync(array $args = [])
 * @method \Aws\Result putComplianceItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putComplianceItemsAsync(array $args = [])
 * @method \Aws\Result putInventory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putInventoryAsync(array $args = [])
 * @method \Aws\Result putParameter(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putParameterAsync(array $args = [])
 * @method \Aws\Result registerDefaultPatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerDefaultPatchBaselineAsync(array $args = [])
 * @method \Aws\Result registerPatchBaselineForPatchGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerPatchBaselineForPatchGroupAsync(array $args = [])
 * @method \Aws\Result registerTargetWithMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTargetWithMaintenanceWindowAsync(array $args = [])
 * @method \Aws\Result registerTaskWithMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTaskWithMaintenanceWindowAsync(array $args = [])
 * @method \Aws\Result removeTagsFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsFromResourceAsync(array $args = [])
 * @method \Aws\Result resetServiceSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetServiceSettingAsync(array $args = [])
 * @method \Aws\Result resumeSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resumeSessionAsync(array $args = [])
 * @method \Aws\Result sendAutomationSignal(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendAutomationSignalAsync(array $args = [])
 * @method \Aws\Result sendCommand(array $args = [])
 * @method \GuzzleHttp\Promise\Promise sendCommandAsync(array $args = [])
 * @method \Aws\Result startAssociationsOnce(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startAssociationsOnceAsync(array $args = [])
 * @method \Aws\Result startAutomationExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startAutomationExecutionAsync(array $args = [])
 * @method \Aws\Result startChangeRequestExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startChangeRequestExecutionAsync(array $args = [])
 * @method \Aws\Result startSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startSessionAsync(array $args = [])
 * @method \Aws\Result stopAutomationExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopAutomationExecutionAsync(array $args = [])
 * @method \Aws\Result terminateSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateSessionAsync(array $args = [])
 * @method \Aws\Result unlabelParameterVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unlabelParameterVersionAsync(array $args = [])
 * @method \Aws\Result updateAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssociationAsync(array $args = [])
 * @method \Aws\Result updateAssociationStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAssociationStatusAsync(array $args = [])
 * @method \Aws\Result updateDocument(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentAsync(array $args = [])
 * @method \Aws\Result updateDocumentDefaultVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentDefaultVersionAsync(array $args = [])
 * @method \Aws\Result updateDocumentMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDocumentMetadataAsync(array $args = [])
 * @method \Aws\Result updateMaintenanceWindow(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMaintenanceWindowAsync(array $args = [])
 * @method \Aws\Result updateMaintenanceWindowTarget(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMaintenanceWindowTargetAsync(array $args = [])
 * @method \Aws\Result updateMaintenanceWindowTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMaintenanceWindowTaskAsync(array $args = [])
 * @method \Aws\Result updateManagedInstanceRole(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateManagedInstanceRoleAsync(array $args = [])
 * @method \Aws\Result updateOpsItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOpsItemAsync(array $args = [])
 * @method \Aws\Result updateOpsMetadata(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateOpsMetadataAsync(array $args = [])
 * @method \Aws\Result updatePatchBaseline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePatchBaselineAsync(array $args = [])
 * @method \Aws\Result updateResourceDataSync(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceDataSyncAsync(array $args = [])
 * @method \Aws\Result updateServiceSetting(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceSettingAsync(array $args = [])
 */
class SsmClient extends AwsClient {}
