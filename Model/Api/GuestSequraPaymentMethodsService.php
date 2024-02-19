<?php

namespace Sequra\Core\Model\Api;

use Sequra\Core\Api\GuestSequraPaymentMethodsInterface;

/**
 * Class GuestSequraPaymentMethodsService
 *
 * @package Sequra\Core\Model\Api
 */
class GuestSequraPaymentMethodsService implements GuestSequraPaymentMethodsInterface
{
    /**
     * @var FormValidationSequraPaymentMethodsService
     */
    private $paymentMethodsService;

    /**
     * GuestSequraPaymentMethodsService constructor.
     * @param FormValidationSequraPaymentMethodsService $paymentMethodsService
     */
    public function __construct(FormValidationSequraPaymentMethodsService $paymentMethodsService)
    {
        $this->paymentMethodsService = $paymentMethodsService;
    }

    public function getAvailablePaymentMethods(string $cartId, string $formKey): array
    {
        return $this->paymentMethodsService->getAvailablePaymentMethods($cartId, $formKey);
    }

    public function getForm(string $cartId, string $formKey): string
    {
        return $this->paymentMethodsService->getForm($cartId, $formKey);
    }
}
