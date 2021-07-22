<?php
// This file was auto-generated from sdk-root/src/data/appintegrations/2020-07-29/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-07-29', 'endpointPrefix' => 'app-integrations', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon AppIntegrations Service', 'serviceId' => 'AppIntegrations', 'signatureVersion' => 'v4', 'signingName' => 'app-integrations', 'uid' => 'appintegrations-2020-07-29', ], 'operations' => [ 'CreateEventIntegration' => [ 'name' => 'CreateEventIntegration', 'http' => [ 'method' => 'POST', 'requestUri' => '/eventIntegrations', ], 'input' => [ 'shape' => 'CreateEventIntegrationRequest', ], 'output' => [ 'shape' => 'CreateEventIntegrationResponse', ], 'errors' => [ [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'ResourceQuotaExceededException', ], [ 'shape' => 'DuplicateResourceException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DeleteEventIntegration' => [ 'name' => 'DeleteEventIntegration', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/eventIntegrations/{Name}', ], 'input' => [ 'shape' => 'DeleteEventIntegrationRequest', ], 'output' => [ 'shape' => 'DeleteEventIntegrationResponse', ], 'errors' => [ [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'GetEventIntegration' => [ 'name' => 'GetEventIntegration', 'http' => [ 'method' => 'GET', 'requestUri' => '/eventIntegrations/{Name}', ], 'input' => [ 'shape' => 'GetEventIntegrationRequest', ], 'output' => [ 'shape' => 'GetEventIntegrationResponse', ], 'errors' => [ [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListEventIntegrationAssociations' => [ 'name' => 'ListEventIntegrationAssociations', 'http' => [ 'method' => 'GET', 'requestUri' => '/eventIntegrations/{Name}/associations', ], 'input' => [ 'shape' => 'ListEventIntegrationAssociationsRequest', ], 'output' => [ 'shape' => 'ListEventIntegrationAssociationsResponse', ], 'errors' => [ [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListEventIntegrations' => [ 'name' => 'ListEventIntegrations', 'http' => [ 'method' => 'GET', 'requestUri' => '/eventIntegrations', ], 'input' => [ 'shape' => 'ListEventIntegrationsRequest', ], 'output' => [ 'shape' => 'ListEventIntegrationsResponse', ], 'errors' => [ [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'UpdateEventIntegration' => [ 'name' => 'UpdateEventIntegration', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/eventIntegrations/{Name}', ], 'input' => [ 'shape' => 'UpdateEventIntegrationRequest', ], 'output' => [ 'shape' => 'UpdateEventIntegrationResponse', ], 'errors' => [ [ 'shape' => 'InternalServiceError', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'AccessDeniedException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 403, ], 'exception' => true, ], 'Arn' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^arn:aws:[A-Za-z0-9][A-Za-z0-9_/.-]{0,62}:[A-Za-z0-9_/.-]{0,63}:[A-Za-z0-9_/.-]{0,63}:[A-Za-z0-9][A-Za-z0-9:_/+=,@.-]{0,1023}$', ], 'ClientAssociationMetadata' => [ 'type' => 'map', 'key' => [ 'shape' => 'NonBlankString', ], 'value' => [ 'shape' => 'NonBlankString', ], ], 'ClientId' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '.*', ], 'CreateEventIntegrationRequest' => [ 'type' => 'structure', 'required' => [ 'Name', 'EventFilter', 'EventBridgeBus', ], 'members' => [ 'Name' => [ 'shape' => 'Name', ], 'Description' => [ 'shape' => 'Description', ], 'EventFilter' => [ 'shape' => 'EventFilter', ], 'EventBridgeBus' => [ 'shape' => 'EventBridgeBus', ], 'ClientToken' => [ 'shape' => 'IdempotencyToken', 'idempotencyToken' => true, ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'CreateEventIntegrationResponse' => [ 'type' => 'structure', 'members' => [ 'EventIntegrationArn' => [ 'shape' => 'Arn', ], ], ], 'DeleteEventIntegrationRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'Name', ], ], ], 'DeleteEventIntegrationResponse' => [ 'type' => 'structure', 'members' => [], ], 'Description' => [ 'type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '.*', ], 'DuplicateResourceException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'EventBridgeBus' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^[a-zA-Z0-9\\/\\._\\-]+$', ], 'EventBridgeRuleName' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^[a-zA-Z0-9\\/\\._\\-]+$', ], 'EventFilter' => [ 'type' => 'structure', 'required' => [ 'Source', ], 'members' => [ 'Source' => [ 'shape' => 'Source', ], ], ], 'EventIntegration' => [ 'type' => 'structure', 'members' => [ 'EventIntegrationArn' => [ 'shape' => 'Arn', ], 'Name' => [ 'shape' => 'Name', ], 'Description' => [ 'shape' => 'Description', ], 'EventFilter' => [ 'shape' => 'EventFilter', ], 'EventBridgeBus' => [ 'shape' => 'EventBridgeBus', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'EventIntegrationAssociation' => [ 'type' => 'structure', 'members' => [ 'EventIntegrationAssociationArn' => [ 'shape' => 'Arn', ], 'EventIntegrationAssociationId' => [ 'shape' => 'UUID', ], 'EventIntegrationName' => [ 'shape' => 'Name', ], 'ClientId' => [ 'shape' => 'ClientId', ], 'EventBridgeRuleName' => [ 'shape' => 'EventBridgeRuleName', ], 'ClientAssociationMetadata' => [ 'shape' => 'ClientAssociationMetadata', ], ], ], 'EventIntegrationAssociationsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventIntegrationAssociation', ], 'max' => 50, 'min' => 1, ], 'EventIntegrationsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'EventIntegration', ], 'max' => 50, 'min' => 1, ], 'GetEventIntegrationRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'Name', ], ], ], 'GetEventIntegrationResponse' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'Name', ], 'Description' => [ 'shape' => 'Description', ], 'EventIntegrationArn' => [ 'shape' => 'Arn', ], 'EventBridgeBus' => [ 'shape' => 'EventBridgeBus', ], 'EventFilter' => [ 'shape' => 'EventFilter', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'IdempotencyToken' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '.*', ], 'InternalServiceError' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'InvalidRequestException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ListEventIntegrationAssociationsRequest' => [ 'type' => 'structure', 'required' => [ 'EventIntegrationName', ], 'members' => [ 'EventIntegrationName' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'Name', ], 'NextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListEventIntegrationAssociationsResponse' => [ 'type' => 'structure', 'members' => [ 'EventIntegrationAssociations' => [ 'shape' => 'EventIntegrationAssociationsList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListEventIntegrationsRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListEventIntegrationsResponse' => [ 'type' => 'structure', 'members' => [ 'EventIntegrations' => [ 'shape' => 'EventIntegrationsList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagMap', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ], 'Message' => [ 'type' => 'string', ], 'Name' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^[a-zA-Z0-9\\/\\._\\-]+$', ], 'NextToken' => [ 'type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '.*', ], 'NonBlankString' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '.*\\S.*', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'ResourceQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'Source' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^aws\\.partner\\/.*$', ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^(?!aws:)[a-zA-Z+-=._:/]+$', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 1, ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 200, 'min' => 1, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'UUID' => [ 'type' => 'string', 'pattern' => '[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}', ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateEventIntegrationRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'Name', 'location' => 'uri', 'locationName' => 'Name', ], 'Description' => [ 'shape' => 'Description', ], ], ], 'UpdateEventIntegrationResponse' => [ 'type' => 'structure', 'members' => [], ], ],];
