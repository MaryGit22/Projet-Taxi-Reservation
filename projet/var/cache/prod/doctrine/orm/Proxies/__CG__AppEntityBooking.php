<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Booking extends \App\Entity\Booking implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'adulte' => [parent::class, 'adulte', null],
        "\0".parent::class."\0".'arrivee' => [parent::class, 'arrivee', null],
        "\0".parent::class."\0".'dateTime' => [parent::class, 'dateTime', null],
        "\0".parent::class."\0".'depart' => [parent::class, 'depart', null],
        "\0".parent::class."\0".'enfant' => [parent::class, 'enfant', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'services' => [parent::class, 'services', null],
        'adulte' => [parent::class, 'adulte', null],
        'arrivee' => [parent::class, 'arrivee', null],
        'dateTime' => [parent::class, 'dateTime', null],
        'depart' => [parent::class, 'depart', null],
        'enfant' => [parent::class, 'enfant', null],
        'id' => [parent::class, 'id', null],
        'services' => [parent::class, 'services', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
