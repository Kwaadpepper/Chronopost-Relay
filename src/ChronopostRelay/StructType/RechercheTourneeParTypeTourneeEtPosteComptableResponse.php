<?php

declare(strict_types=1);

namespace ChronopostRelay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercheTourneeParTypeTourneeEtPosteComptableResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercheTourneeParTypeTourneeEtPosteComptableResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RechercheTourneeParTypeTourneeEtPosteComptableResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostRelay\StructType\TourneeCompleteResult|null
     */
    protected ?\ChronopostRelay\StructType\TourneeCompleteResult $return = null;
    /**
     * Constructor method for rechercheTourneeParTypeTourneeEtPosteComptableResponse
     * @uses RechercheTourneeParTypeTourneeEtPosteComptableResponse::setReturn()
     * @param \ChronopostRelay\StructType\TourneeCompleteResult $return
     */
    public function __construct(?\ChronopostRelay\StructType\TourneeCompleteResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostRelay\StructType\TourneeCompleteResult|null
     */
    public function getReturn(): ?\ChronopostRelay\StructType\TourneeCompleteResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostRelay\StructType\TourneeCompleteResult $return
     * @return \ChronopostRelay\StructType\RechercheTourneeParTypeTourneeEtPosteComptableResponse
     */
    public function setReturn(?\ChronopostRelay\StructType\TourneeCompleteResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
