<?php

declare(strict_types=1);

namespace App\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;

final class ApiListener implements EventSubscriberInterface
{
    public function onKernelRequest(RequestEvent $event): void
    {
        $event->getRequest()->setRequestFormat('json');
    }

    /**
     * @inheritDoc
     */
    public static function getSubscribedEvents()
    {
        return ['kernel.request' => 'onKernelRequest'];
    }
}
