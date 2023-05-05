<?php

use Events\EventManager;
use Listeners\NotifyOrderIsInProgress;
use Listeners\NotifyUserOrderCancelled;
use Listeners\NotifyUserOrderCompleted;
use Listeners\NotifyUserRegistration;

require 'autoloader.php';

$eventManager = new EventManager;

$notifyUserRegistration = new NotifyUserRegistration();
$eventManager->subscribe(EventManager::REGISTRATION_EVENT, $notifyUserRegistration);

$notifyOrderIsInProgress = new NotifyOrderIsInProgress();
$eventManager->subscribe(EventManager::ORDER_IN_PROGRESS_EVENT, $notifyOrderIsInProgress);

// accidental mistake e.g.
$eventManager->subscribe(EventManager::ORDER_IN_PROGRESS_EVENT, $notifyUserRegistration);
$eventManager->unsubscribe(EventManager::ORDER_IN_PROGRESS_EVENT, $notifyUserRegistration);

$notifyOrderCancelled = new NotifyUserOrderCancelled();
$eventManager->subscribe(EventManager::ORDER_CANCELLED_EVENT, $notifyOrderCancelled);

$notifyOrderCompleted = new NotifyUserOrderCompleted();
$eventManager->subscribe(EventManager::ORDER_COMPLETED_EVENT, $notifyOrderCompleted);

$eventManager->notify(EventManager::REGISTRATION_EVENT, []);
$eventManager->notify(EventManager::ORDER_IN_PROGRESS_EVENT, []);
$eventManager->notify(EventManager::ORDER_CANCELLED_EVENT, []);
$eventManager->notify(EventManager::ORDER_COMPLETED_EVENT, []);
/*
Sending an email to user with his registration data...
Sending an email to user informing that his order is in progress...
Sending an email to user informing that his order has been cancelled...
Sending an email to user informing that his order has been completed...
*/
