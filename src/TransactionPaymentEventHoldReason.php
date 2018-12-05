<?php

namespace Nzolt\NetSuite;

class TransactionPaymentEventHoldReason
{
    const __default = '_amountExceedsMaximumAllowedAmount';
    const _amountExceedsMaximumAllowedAmount = '_amountExceedsMaximumAllowedAmount';
    const _authorizationDecline = '_authorizationDecline';
    const _cardExpired = '_cardExpired';
    const _cardInvalid = '_cardInvalid';
    const _confirmationOfTheOperationIsPending = '_confirmationOfTheOperationIsPending';
    const _externalFraudRejection = '_externalFraudRejection';
    const _externalFraudReview = '_externalFraudReview';
    const _fatalError = '_fatalError';
    const _forwardedToPayerAuthentication = '_forwardedToPayerAuthentication';
    const _forwardRequested = '_forwardRequested';
    const _gatewayAsynchronousNotification = '_gatewayAsynchronousNotification';
    const _gatewayError = '_gatewayError';
    const _generalHold = '_generalHold';
    const _generalReject = '_generalReject';
    const _operationWasSuccessful = '_operationWasSuccessful';
    const _operationWasTerminated = '_operationWasTerminated';
    const _overridenBy = '_overridenBy';
    const _partnerDecline = '_partnerDecline';
    const _paymentDeviceWasPrimed = '_paymentDeviceWasPrimed';
    const _paymentOperationWasCanceled = '_paymentOperationWasCanceled';
    const _systemError = '_systemError';
    const _verbalAuthorizationRequested = '_verbalAuthorizationRequested';
    const _verificationRejection = '_verificationRejection';
    const _verificationRequired = '_verificationRequired';


}
