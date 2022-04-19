<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Registry;
use Magento\Store\Api\WebsiteRepositoryInterface;
use Magento\TestFramework\Helper\Bootstrap;

$objectManager = Bootstrap::getObjectManager();
/** @var Registry $registry */
$registry = $objectManager->get(Registry::class);
/** @var CustomerRepositoryInterface $customerRepository */
$customerRepository = $objectManager->get(CustomerRepositoryInterface::class);
/** @var WebsiteRepositoryInterface $websiteRepository */
$websiteRepository = $objectManager->get(WebsiteRepositoryInterface::class);

$registry->unregister('isSecureArea');
$registry->register('isSecureArea', true);

try {
    $websiteId = $websiteRepository->get('second')->getId();
    $customer = $customerRepository->get('axl@rose.com', $websiteId);
    $customerRepository->delete($customer);
} catch (NoSuchEntityException $e) {
    //customer or website already deleted
}

$registry->unregister('isSecureArea');
$registry->register('isSecureArea', false);
