<?php
namespace Aws\VPCLattice;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon VPC Lattice** service.
 * @method \Aws\Result batchUpdateRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchUpdateRuleAsync(array $args = [])
 * @method \Aws\Result createAccessLogSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccessLogSubscriptionAsync(array $args = [])
 * @method \Aws\Result createListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createListenerAsync(array $args = [])
 * @method \Aws\Result createResourceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceConfigurationAsync(array $args = [])
 * @method \Aws\Result createResourceGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createResourceGatewayAsync(array $args = [])
 * @method \Aws\Result createRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRuleAsync(array $args = [])
 * @method \Aws\Result createService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceAsync(array $args = [])
 * @method \Aws\Result createServiceNetwork(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceNetworkAsync(array $args = [])
 * @method \Aws\Result createServiceNetworkResourceAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceNetworkResourceAssociationAsync(array $args = [])
 * @method \Aws\Result createServiceNetworkServiceAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceNetworkServiceAssociationAsync(array $args = [])
 * @method \Aws\Result createServiceNetworkVpcAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createServiceNetworkVpcAssociationAsync(array $args = [])
 * @method \Aws\Result createTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTargetGroupAsync(array $args = [])
 * @method \Aws\Result deleteAccessLogSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccessLogSubscriptionAsync(array $args = [])
 * @method \Aws\Result deleteAuthPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAuthPolicyAsync(array $args = [])
 * @method \Aws\Result deleteListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteListenerAsync(array $args = [])
 * @method \Aws\Result deleteResourceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteResourceEndpointAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceEndpointAssociationAsync(array $args = [])
 * @method \Aws\Result deleteResourceGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourceGatewayAsync(array $args = [])
 * @method \Aws\Result deleteResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteResourcePolicyAsync(array $args = [])
 * @method \Aws\Result deleteRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRuleAsync(array $args = [])
 * @method \Aws\Result deleteService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceAsync(array $args = [])
 * @method \Aws\Result deleteServiceNetwork(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceNetworkAsync(array $args = [])
 * @method \Aws\Result deleteServiceNetworkResourceAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceNetworkResourceAssociationAsync(array $args = [])
 * @method \Aws\Result deleteServiceNetworkServiceAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceNetworkServiceAssociationAsync(array $args = [])
 * @method \Aws\Result deleteServiceNetworkVpcAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServiceNetworkVpcAssociationAsync(array $args = [])
 * @method \Aws\Result deleteTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTargetGroupAsync(array $args = [])
 * @method \Aws\Result deregisterTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterTargetsAsync(array $args = [])
 * @method \Aws\Result getAccessLogSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessLogSubscriptionAsync(array $args = [])
 * @method \Aws\Result getAuthPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthPolicyAsync(array $args = [])
 * @method \Aws\Result getListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getListenerAsync(array $args = [])
 * @method \Aws\Result getResourceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceConfigurationAsync(array $args = [])
 * @method \Aws\Result getResourceGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourceGatewayAsync(array $args = [])
 * @method \Aws\Result getResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getResourcePolicyAsync(array $args = [])
 * @method \Aws\Result getRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRuleAsync(array $args = [])
 * @method \Aws\Result getService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceAsync(array $args = [])
 * @method \Aws\Result getServiceNetwork(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceNetworkAsync(array $args = [])
 * @method \Aws\Result getServiceNetworkResourceAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceNetworkResourceAssociationAsync(array $args = [])
 * @method \Aws\Result getServiceNetworkServiceAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceNetworkServiceAssociationAsync(array $args = [])
 * @method \Aws\Result getServiceNetworkVpcAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceNetworkVpcAssociationAsync(array $args = [])
 * @method \Aws\Result getTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTargetGroupAsync(array $args = [])
 * @method \Aws\Result listAccessLogSubscriptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAccessLogSubscriptionsAsync(array $args = [])
 * @method \Aws\Result listListeners(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listListenersAsync(array $args = [])
 * @method \Aws\Result listResourceConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceConfigurationsAsync(array $args = [])
 * @method \Aws\Result listResourceEndpointAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceEndpointAssociationsAsync(array $args = [])
 * @method \Aws\Result listResourceGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceGatewaysAsync(array $args = [])
 * @method \Aws\Result listRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRulesAsync(array $args = [])
 * @method \Aws\Result listServiceNetworkResourceAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceNetworkResourceAssociationsAsync(array $args = [])
 * @method \Aws\Result listServiceNetworkServiceAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceNetworkServiceAssociationsAsync(array $args = [])
 * @method \Aws\Result listServiceNetworkVpcAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceNetworkVpcAssociationsAsync(array $args = [])
 * @method \Aws\Result listServiceNetworkVpcEndpointAssociations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceNetworkVpcEndpointAssociationsAsync(array $args = [])
 * @method \Aws\Result listServiceNetworks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServiceNetworksAsync(array $args = [])
 * @method \Aws\Result listServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listServicesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTargetGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetGroupsAsync(array $args = [])
 * @method \Aws\Result listTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTargetsAsync(array $args = [])
 * @method \Aws\Result putAuthPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAuthPolicyAsync(array $args = [])
 * @method \Aws\Result putResourcePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putResourcePolicyAsync(array $args = [])
 * @method \Aws\Result registerTargets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerTargetsAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAccessLogSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccessLogSubscriptionAsync(array $args = [])
 * @method \Aws\Result updateListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateListenerAsync(array $args = [])
 * @method \Aws\Result updateResourceConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceConfigurationAsync(array $args = [])
 * @method \Aws\Result updateResourceGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateResourceGatewayAsync(array $args = [])
 * @method \Aws\Result updateRule(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRuleAsync(array $args = [])
 * @method \Aws\Result updateService(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceAsync(array $args = [])
 * @method \Aws\Result updateServiceNetwork(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceNetworkAsync(array $args = [])
 * @method \Aws\Result updateServiceNetworkVpcAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceNetworkVpcAssociationAsync(array $args = [])
 * @method \Aws\Result updateTargetGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTargetGroupAsync(array $args = [])
 */
class VPCLatticeClient extends AwsClient {}
