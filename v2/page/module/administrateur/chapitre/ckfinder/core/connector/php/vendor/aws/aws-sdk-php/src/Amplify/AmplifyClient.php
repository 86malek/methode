<?php
namespace Aws\Amplify;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Amplify** service.
 * @method \Aws\Result createApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppAsync(array $args = [])
 * @method \Aws\Result createBackendEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBackendEnvironmentAsync(array $args = [])
 * @method \Aws\Result createBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBranchAsync(array $args = [])
 * @method \Aws\Result createDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeploymentAsync(array $args = [])
 * @method \Aws\Result createDomainAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAssociationAsync(array $args = [])
 * @method \Aws\Result createWebhook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWebhookAsync(array $args = [])
 * @method \Aws\Result deleteApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppAsync(array $args = [])
 * @method \Aws\Result deleteBackendEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBackendEnvironmentAsync(array $args = [])
 * @method \Aws\Result deleteBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBranchAsync(array $args = [])
 * @method \Aws\Result deleteDomainAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAssociationAsync(array $args = [])
 * @method \Aws\Result deleteJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteJobAsync(array $args = [])
 * @method \Aws\Result deleteWebhook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWebhookAsync(array $args = [])
 * @method \Aws\Result generateAccessLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateAccessLogsAsync(array $args = [])
 * @method \Aws\Result getApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAppAsync(array $args = [])
 * @method \Aws\Result getArtifactUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getArtifactUrlAsync(array $args = [])
 * @method \Aws\Result getBackendEnvironment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBackendEnvironmentAsync(array $args = [])
 * @method \Aws\Result getBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBranchAsync(array $args = [])
 * @method \Aws\Result getDomainAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainAssociationAsync(array $args = [])
 * @method \Aws\Result getJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getJobAsync(array $args = [])
 * @method \Aws\Result getWebhook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWebhookAsync(array $args = [])
 * @method \Aws\Result listApps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAppsAsync(array $args = [])
 * @method \Aws\Result listArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listArtifactsAsync(array $args = [])
 * @method \Aws\Result listBackendEnvironments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBackendEnvironmentsAsync(array $args = [])
 * @method \Aws\Result listBranches(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBranchesAsync(array $args = [])
 * @method \Aws\Result listDomainAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainAssociationsAsync(array $args = [])
 * @method \Aws\Result listJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listJobsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listWebhooks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWebhooksAsync(array $args = [])
 * @method \Aws\Result startDeployment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startDeploymentAsync(array $args = [])
 * @method \Aws\Result startJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startJobAsync(array $args = [])
 * @method \Aws\Result stopJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopJobAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAppAsync(array $args = [])
 * @method \Aws\Result updateBranch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBranchAsync(array $args = [])
 * @method \Aws\Result updateDomainAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainAssociationAsync(array $args = [])
 * @method \Aws\Result updateWebhook(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWebhookAsync(array $args = [])
 */
class AmplifyClient extends AwsClient {}
