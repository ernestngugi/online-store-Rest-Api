<?php
/**
 * Copyright 2016 - 2018, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2016 - 2018, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

namespace CakeDC\Api\Service\Extension;

use CakeDC\Api\Service\Action\Action;
use CakeDC\Api\Service\Action\Collection\AddEditAction;
use CakeDC\Api\Service\Action\Collection\DeleteAction;
use CakeDC\Api\Service\Service;
use Cake\Event\Event;
use Cake\Event\EventListenerInterface;

class CollectionExtension extends Extension implements EventListenerInterface
{
    /**
     * @var Service
     */
    protected $_service;

    /**
     * Returns a list of events this object is implementing. When the class is registered
     * in an event manager, each individual method will be associated with the respective event.
     *
     * @return array
     */
    public function implementedEvents()
    {
        return [
            'Service.beforeDispatch' => 'beforeProcess',
        ];
    }

    /**
     * before process
     *
     * @param Event $event An Event instance.
     * @return void
     */
    public function beforeProcess(Event $event)
    {
        $this->_service = $event->getData('service');
        $this->_service->mapAction('bulkAdd', AddEditAction::class, [
            'method' => ['POST'],
            'mapCors' => true,
            'path' => 'bulk'
        ]);
        $this->_service->mapAction('bulkEdit', AddEditAction::class, [
            'method' => ['PUT'],
            'mapCors' => true,
            'path' => 'bulk'
        ]);
        $this->_service->mapAction('bulkDelete', DeleteAction::class, [
            'method' => ['DELETE'],
            'mapCors' => true,
            'path' => 'bulk'
        ]);
    }
}
