<?php

declare(strict_types=1);

namespace ChronopostRelay\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * recherchePointChronopostParCoordonneesGeographiquesResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:recherchePointChronopostParCoordonneesGeographiquesResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RecherchePointChronopostParCoordonneesGeographiquesResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostRelay\StructType\PointCHRResult|null
     */
    protected ?\ChronopostRelay\StructType\PointCHRResult $return = null;
    /**
     * Constructor method for
     * recherchePointChronopostParCoordonneesGeographiquesResponse
     * @uses RecherchePointChronopostParCoordonneesGeographiquesResponse::setReturn()
     * @param \ChronopostRelay\StructType\PointCHRResult $return
     */
    public function __construct(?\ChronopostRelay\StructType\PointCHRResult $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostRelay\StructType\PointCHRResult|null
     */
    public function getReturn(): ?\ChronopostRelay\StructType\PointCHRResult
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostRelay\StructType\PointCHRResult $return
     * @return \ChronopostRelay\StructType\RecherchePointChronopostParCoordonneesGeographiquesResponse
     */
    public function setReturn(?\ChronopostRelay\StructType\PointCHRResult $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
