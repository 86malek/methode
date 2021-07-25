<?php
// This file was auto-generated from sdk-root/src/data/migrationhub-config/2019-06-30/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2019-06-30', 'endpointPrefix' => 'migrationhub-config', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'AWS Migration Hub Config', 'serviceId' => 'MigrationHub Config', 'signatureVersion' => 'v4', 'signingName' => 'mgh', 'targetPrefix' => 'AWSMigrationHubMultiAccountService', 'uid' => 'migrationhub-config-2019-06-30', ], 'operations' => [ 'CreateHomeRegionControl' => [ 'name' => 'CreateHomeRegionControl', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateHomeRegionControlRequest', ], 'output' => [ 'shape' => 'CreateHomeRegionControlResult', ], 'errors' => [ [ 'shape' => 'InternalServerError', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'DryRunOperation', ], [ 'shape' => 'InvalidInputException', ], ], ], 'DescribeHomeRegionControls' => [ 'name' => 'DescribeHomeRegionControls', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeHomeRegionControlsRequest', ], 'output' => [ 'shape' => 'DescribeHomeRegionControlsResult', ], 'errors' => [ [ 'shape' => 'InternalServerError', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InvalidInputException', ], ], ], 'GetHomeRegion' => [ 'name' => 'GetHomeRegion', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetHomeRegionRequest', ], 'output' => [ 'shape' => 'GetHomeRegionResult', ], 'errors' => [ [ 'shape' => 'InternalServerError', ], [ 'shape' => 'ServiceUnavailableException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InvalidInputException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ControlId' => [ 'type' => 'string', 'max' => 50, 'min' => 1, 'pattern' => '^hrc-[a-z0-9]{12}$', ], 'CreateHomeRegionControlRequest' => [ 'type' => 'structure', 'required' => [ 'HomeRegion', 'Target', ], 'members' => [ 'HomeRegion' => [ 'shape' => 'HomeRegion', ], 'Target' => [ 'shape' => 'Target', ], 'DryRun' => [ 'shape' => 'DryRun', ], ], ], 'CreateHomeRegionControlResult' => [ 'type' => 'structure', 'members' => [ 'HomeRegionControl' => [ 'shape' => 'HomeRegionControl', ], ], ], 'DescribeHomeRegionControlsMaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'DescribeHomeRegionControlsRequest' => [ 'type' => 'structure', 'members' => [ 'ControlId' => [ 'shape' => 'ControlId', ], 'HomeRegion' => [ 'shape' => 'HomeRegion', ], 'Target' => [ 'shape' => 'Target', ], 'MaxResults' => [ 'shape' => 'DescribeHomeRegionControlsMaxResults', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'DescribeHomeRegionControlsResult' => [ 'type' => 'structure', 'members' => [ 'HomeRegionControls' => [ 'shape' => 'HomeRegionControls', ], 'NextToken' => [ 'shape' => 'Token', ], ], ], 'DryRun' => [ 'type' => 'boolean', ], 'DryRunOperation' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ErrorMessage' => [ 'type' => 'string', ], 'GetHomeRegionRequest' => [ 'type' => 'structure', 'members' => [], ], 'GetHomeRegionResult' => [ 'type' => 'structure', 'members' => [ 'HomeRegion' => [ 'shape' => 'HomeRegion', ], ], ], 'HomeRegion' => [ 'type' => 'string', 'max' => 50, 'min' => 1, 'pattern' => '^([a-z]+)-([a-z]+)-([0-9]+)$', ], 'HomeRegionControl' => [ 'type' => 'structure', 'members' => [ 'ControlId' => [ 'shape' => 'ControlId', ], 'HomeRegion' => [ 'shape' => 'HomeRegion', ], 'Target' => [ 'shape' => 'Target', ], 'RequestedTime' => [ 'shape' => 'RequestedTime', ], ], ], 'HomeRegionControls' => [ 'type' => 'list', 'member' => [ 'shape' => 'HomeRegionControl', ], 'max' => 100, ], 'InternalServerError' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'fault' => true, ], 'InvalidInputException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'RequestedTime' => [ 'type' => 'timestamp', ], 'RetryAfterSeconds' => [ 'type' => 'integer', ], 'ServiceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'fault' => true, ], 'Target' => [ 'type' => 'structure', 'required' => [ 'Type', ], 'members' => [ 'Type' => [ 'shape' => 'TargetType', ], 'Id' => [ 'shape' => 'TargetId', ], ], ], 'TargetId' => [ 'type' => 'string', 'max' => 12, 'min' => 12, 'pattern' => '^\\d{12}$', ], 'TargetType' => [ 'type' => 'string', 'enum' => [ 'ACCOUNT', ], ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], 'RetryAfterSeconds' => [ 'shape' => 'RetryAfterSeconds', ], ], 'exception' => true, ], 'Token' => [ 'type' => 'string', 'max' => 2048, 'min' => 0, 'pattern' => '^[a-zA-Z0-9\\/\\+\\=]{0,2048}$', ], ],];
