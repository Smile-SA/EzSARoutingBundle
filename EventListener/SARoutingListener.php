<?php

namespace Smile\EzSARoutingBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class SARoutingListener implements EventSubscriberInterface
{
    /**
     * Link Event with REQUEST Kernel Event Dispatcher
     *
     * @return array list of event dispatcher linked
     */
    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::REQUEST => array('onRequest', 200)
        );
    }

    public function onRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();
    }
}
