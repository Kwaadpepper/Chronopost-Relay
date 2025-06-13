<?php

declare(strict_types=1);

namespace ChronopostRelay\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Recherche ServiceType
 * @subpackage Services
 */
class Recherche extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * recherchePointChronopostInterParServiceAGL
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RecherchePointChronopostInterParServiceAGL $parameters
     * @return \ChronopostRelay\StructType\RecherchePointChronopostInterParServiceAGLResponse|bool
     */
    public function recherchePointChronopostInterParServiceAGL(\ChronopostRelay\StructType\RecherchePointChronopostInterParServiceAGL $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostInterParServiceAGL = $this->getSoapClient()->__soapCall('recherchePointChronopostInterParServiceAGL', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostInterParServiceAGL;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named recherchePointChronopost
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RecherchePointChronopost $parameters
     * @return \ChronopostRelay\StructType\RecherchePointChronopostResponse|bool
     */
    public function recherchePointChronopost(\ChronopostRelay\StructType\RecherchePointChronopost $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopost = $this->getSoapClient()->__soapCall('recherchePointChronopost', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopost;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostInterParService
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RecherchePointChronopostInterParService $parameters
     * @return \ChronopostRelay\StructType\RecherchePointChronopostInterParServiceResponse|bool
     */
    public function recherchePointChronopostInterParService(\ChronopostRelay\StructType\RecherchePointChronopostInterParService $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostInterParService = $this->getSoapClient()->__soapCall('recherchePointChronopostInterParService', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostInterParService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheBtParCodeproduitEtCodepostalEtDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RechercheBtParCodeproduitEtCodepostalEtDate $parameters
     * @return \ChronopostRelay\StructType\RechercheBtParCodeproduitEtCodepostalEtDateResponse|bool
     */
    public function rechercheBtParCodeproduitEtCodepostalEtDate(\ChronopostRelay\StructType\RechercheBtParCodeproduitEtCodepostalEtDate $parameters)
    {
        try {
            $this->setResult($resultRechercheBtParCodeproduitEtCodepostalEtDate = $this->getSoapClient()->__soapCall('rechercheBtParCodeproduitEtCodepostalEtDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtParCodeproduitEtCodepostalEtDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercheBtParIdChronopostA2Pas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RechercheBtParIdChronopostA2Pas $parameters
     * @return \ChronopostRelay\StructType\RechercheBtParIdChronopostA2PasResponse|bool
     */
    public function rechercheBtParIdChronopostA2Pas(\ChronopostRelay\StructType\RechercheBtParIdChronopostA2Pas $parameters)
    {
        try {
            $this->setResult($resultRechercheBtParIdChronopostA2Pas = $this->getSoapClient()->__soapCall('rechercheBtParIdChronopostA2Pas', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtParIdChronopostA2Pas;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheTourneeParTypeTourneeEtPosteComptable
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RechercheTourneeParTypeTourneeEtPosteComptable $parameters
     * @return \ChronopostRelay\StructType\RechercheTourneeParTypeTourneeEtPosteComptableResponse|bool
     */
    public function rechercheTourneeParTypeTourneeEtPosteComptable(\ChronopostRelay\StructType\RechercheTourneeParTypeTourneeEtPosteComptable $parameters)
    {
        try {
            $this->setResult($resultRechercheTourneeParTypeTourneeEtPosteComptable = $this->getSoapClient()->__soapCall('rechercheTourneeParTypeTourneeEtPosteComptable', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheTourneeParTypeTourneeEtPosteComptable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named recherchePointChronopostParId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RecherchePointChronopostParId $parameters
     * @return \ChronopostRelay\StructType\RecherchePointChronopostParIdResponse|bool
     */
    public function recherchePointChronopostParId(\ChronopostRelay\StructType\RecherchePointChronopostParId $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostParId = $this->getSoapClient()->__soapCall('recherchePointChronopostParId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostParId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercheDetailPointChronopost
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RechercheDetailPointChronopost $parameters
     * @return \ChronopostRelay\StructType\RechercheDetailPointChronopostResponse|bool
     */
    public function rechercheDetailPointChronopost(\ChronopostRelay\StructType\RechercheDetailPointChronopost $parameters)
    {
        try {
            $this->setResult($resultRechercheDetailPointChronopost = $this->getSoapClient()->__soapCall('rechercheDetailPointChronopost', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheDetailPointChronopost;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostParCoordonneesGeographiques
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RecherchePointChronopostParCoordonneesGeographiques $parameters
     * @return \ChronopostRelay\StructType\RecherchePointChronopostParCoordonneesGeographiquesResponse|bool
     */
    public function recherchePointChronopostParCoordonneesGeographiques(\ChronopostRelay\StructType\RecherchePointChronopostParCoordonneesGeographiques $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostParCoordonneesGeographiques = $this->getSoapClient()->__soapCall('recherchePointChronopostParCoordonneesGeographiques', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostParCoordonneesGeographiques;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named recherchePointChronopostInter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RecherchePointChronopostInter $parameters
     * @return \ChronopostRelay\StructType\RecherchePointChronopostInterResponse|bool
     */
    public function recherchePointChronopostInter(\ChronopostRelay\StructType\RecherchePointChronopostInter $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostInter = $this->getSoapClient()->__soapCall('recherchePointChronopostInter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostInter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointRelaisParCoordonneesGeographiques
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RecherchePointRelaisParCoordonneesGeographiques $parameters
     * @return \ChronopostRelay\StructType\RecherchePointRelaisParCoordonneesGeographiquesResponse|bool
     */
    public function recherchePointRelaisParCoordonneesGeographiques(\ChronopostRelay\StructType\RecherchePointRelaisParCoordonneesGeographiques $parameters)
    {
        try {
            $this->setResult($resultRecherchePointRelaisParCoordonneesGeographiques = $this->getSoapClient()->__soapCall('recherchePointRelaisParCoordonneesGeographiques', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointRelaisParCoordonneesGeographiques;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostAvecCoordParId
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RecherchePointChronopostAvecCoordParId $parameters
     * @return \ChronopostRelay\StructType\RecherchePointChronopostAvecCoordParIdResponse|bool
     */
    public function recherchePointChronopostAvecCoordParId(\ChronopostRelay\StructType\RecherchePointChronopostAvecCoordParId $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostAvecCoordParId = $this->getSoapClient()->__soapCall('recherchePointChronopostAvecCoordParId', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostAvecCoordParId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointRelaisParCoordonneesGeographiquesParService
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RecherchePointRelaisParCoordonneesGeographiquesParService $parameters
     * @return \ChronopostRelay\StructType\RecherchePointRelaisParCoordonneesGeographiquesParServiceResponse|bool
     */
    public function recherchePointRelaisParCoordonneesGeographiquesParService(\ChronopostRelay\StructType\RecherchePointRelaisParCoordonneesGeographiquesParService $parameters)
    {
        try {
            $this->setResult($resultRecherchePointRelaisParCoordonneesGeographiquesParService = $this->getSoapClient()->__soapCall('recherchePointRelaisParCoordonneesGeographiquesParService', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointRelaisParCoordonneesGeographiquesParService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheBtAvecPFParIdChronopostA2Pas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RechercheBtAvecPFParIdChronopostA2Pas $parameters
     * @return \ChronopostRelay\StructType\RechercheBtAvecPFParIdChronopostA2PasResponse|bool
     */
    public function rechercheBtAvecPFParIdChronopostA2Pas(\ChronopostRelay\StructType\RechercheBtAvecPFParIdChronopostA2Pas $parameters)
    {
        try {
            $this->setResult($resultRechercheBtAvecPFParIdChronopostA2Pas = $this->getSoapClient()->__soapCall('rechercheBtAvecPFParIdChronopostA2Pas', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtAvecPFParIdChronopostA2Pas;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheDetailPointChronopostInter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RechercheDetailPointChronopostInter $parameters
     * @return \ChronopostRelay\StructType\RechercheDetailPointChronopostInterResponse|bool
     */
    public function rechercheDetailPointChronopostInter(\ChronopostRelay\StructType\RechercheDetailPointChronopostInter $parameters)
    {
        try {
            $this->setResult($resultRechercheDetailPointChronopostInter = $this->getSoapClient()->__soapCall('rechercheDetailPointChronopostInter', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheDetailPointChronopostInter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * recherchePointChronopostParCoordonneesGeographiquesParService
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RecherchePointChronopostParCoordonneesGeographiquesParService $parameters
     * @return \ChronopostRelay\StructType\RecherchePointChronopostParCoordonneesGeographiquesParServiceResponse|bool
     */
    public function recherchePointChronopostParCoordonneesGeographiquesParService(\ChronopostRelay\StructType\RecherchePointChronopostParCoordonneesGeographiquesParService $parameters)
    {
        try {
            $this->setResult($resultRecherchePointChronopostParCoordonneesGeographiquesParService = $this->getSoapClient()->__soapCall('recherchePointChronopostParCoordonneesGeographiquesParService', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRecherchePointChronopostParCoordonneesGeographiquesParService;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * rechercheBtAvecPFParCodeproduitEtCodepostalEtDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RechercheBtAvecPFParCodeproduitEtCodepostalEtDate $parameters
     * @return \ChronopostRelay\StructType\RechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse|bool
     */
    public function rechercheBtAvecPFParCodeproduitEtCodepostalEtDate(\ChronopostRelay\StructType\RechercheBtAvecPFParCodeproduitEtCodepostalEtDate $parameters)
    {
        try {
            $this->setResult($resultRechercheBtAvecPFParCodeproduitEtCodepostalEtDate = $this->getSoapClient()->__soapCall('rechercheBtAvecPFParCodeproduitEtCodepostalEtDate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheBtAvecPFParCodeproduitEtCodepostalEtDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named rechercheTournee
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostRelay\StructType\RechercheTournee $parameters
     * @return \ChronopostRelay\StructType\RechercheTourneeResponse|bool
     */
    public function rechercheTournee(\ChronopostRelay\StructType\RechercheTournee $parameters)
    {
        try {
            $this->setResult($resultRechercheTournee = $this->getSoapClient()->__soapCall('rechercheTournee', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultRechercheTournee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ChronopostRelay\StructType\RechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse|\ChronopostRelay\StructType\RechercheBtAvecPFParIdChronopostA2PasResponse|\ChronopostRelay\StructType\RechercheBtParCodeproduitEtCodepostalEtDateResponse|\ChronopostRelay\StructType\RechercheBtParIdChronopostA2PasResponse|\ChronopostRelay\StructType\RechercheDetailPointChronopostInterResponse|\ChronopostRelay\StructType\RechercheDetailPointChronopostResponse|\ChronopostRelay\StructType\RecherchePointChronopostAvecCoordParIdResponse|\ChronopostRelay\StructType\RecherchePointChronopostInterParServiceAGLResponse|\ChronopostRelay\StructType\RecherchePointChronopostInterParServiceResponse|\ChronopostRelay\StructType\RecherchePointChronopostInterResponse|\ChronopostRelay\StructType\RecherchePointChronopostParCoordonneesGeographiquesParServiceResponse|\ChronopostRelay\StructType\RecherchePointChronopostParCoordonneesGeographiquesResponse|\ChronopostRelay\StructType\RecherchePointChronopostParIdResponse|\ChronopostRelay\StructType\RecherchePointChronopostResponse|\ChronopostRelay\StructType\RecherchePointRelaisParCoordonneesGeographiquesParServiceResponse|\ChronopostRelay\StructType\RecherchePointRelaisParCoordonneesGeographiquesResponse|\ChronopostRelay\StructType\RechercheTourneeParTypeTourneeEtPosteComptableResponse|\ChronopostRelay\StructType\RechercheTourneeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
