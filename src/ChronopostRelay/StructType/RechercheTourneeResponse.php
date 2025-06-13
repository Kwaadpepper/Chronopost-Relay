<?php

declare(strict_types=1);

namespace ChronopostRelay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheTourneeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercheTourneeResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RechercheTourneeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostRelay\StructType\TourneeResult|null
     */
    protected ?\ChronopostRelay\StructType\TourneeResult $return = null;
    /**
     * Constructor method for rechercheTourneeResponse
     * @uses RechercheTourneeResponse::setReturn()
     * @param \ChronopostRelay\StructType\TourneeResult $return
     */
    public function __construct(?\ChronopostRelay\StructType\TourneeResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostRelay\StructType\TourneeResult|null
     */
    public function getReturn(): ?\ChronopostRelay\StructType\TourneeResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostRelay\StructType\TourneeResult $return
     * @return \ChronopostRelay\StructType\RechercheTourneeResponse
     */
    public function setReturn(?\ChronopostRelay\StructType\TourneeResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
