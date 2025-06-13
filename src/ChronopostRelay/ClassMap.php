<?php

declare(strict_types=1);

namespace ChronopostRelay;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'recherchePointChronopostInterParServiceAGL' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostInterParServiceAGL',
            'recherchePointChronopostInterParServiceAGLResponse' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostInterParServiceAGLResponse',
            'pointCHRResult' => '\\ChronopostRelay\\StructType\\PointCHRResult',
            'pointCHR' => '\\ChronopostRelay\\StructType\\PointCHR',
            'listeHoraireOuverturePourUnJour' => '\\ChronopostRelay\\StructType\\ListeHoraireOuverturePourUnJour',
            'horaireOuverture' => '\\ChronopostRelay\\StructType\\HoraireOuverture',
            'periodeFermeture' => '\\ChronopostRelay\\StructType\\PeriodeFermeture',
            'recherchePointChronopost' => '\\ChronopostRelay\\StructType\\RecherchePointChronopost',
            'recherchePointChronopostResponse' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostResponse',
            'recherchePointChronopostInterParService' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostInterParService',
            'recherchePointChronopostInterParServiceResponse' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostInterParServiceResponse',
            'rechercheBtParCodeproduitEtCodepostalEtDate' => '\\ChronopostRelay\\StructType\\RechercheBtParCodeproduitEtCodepostalEtDate',
            'rechercheBtParCodeproduitEtCodepostalEtDateResponse' => '\\ChronopostRelay\\StructType\\RechercheBtParCodeproduitEtCodepostalEtDateResponse',
            'bureauDeTabacAvecCoord' => '\\ChronopostRelay\\StructType\\BureauDeTabacAvecCoord',
            'bureauDeTabac' => '\\ChronopostRelay\\StructType\\BureauDeTabac',
            'rechercheBtParIdChronopostA2Pas' => '\\ChronopostRelay\\StructType\\RechercheBtParIdChronopostA2Pas',
            'rechercheBtParIdChronopostA2PasResponse' => '\\ChronopostRelay\\StructType\\RechercheBtParIdChronopostA2PasResponse',
            'rechercheTourneeParTypeTourneeEtPosteComptable' => '\\ChronopostRelay\\StructType\\RechercheTourneeParTypeTourneeEtPosteComptable',
            'rechercheTourneeParTypeTourneeEtPosteComptableResponse' => '\\ChronopostRelay\\StructType\\RechercheTourneeParTypeTourneeEtPosteComptableResponse',
            'tourneeCompleteResult' => '\\ChronopostRelay\\StructType\\TourneeCompleteResult',
            'tourneeComplete' => '\\ChronopostRelay\\StructType\\TourneeComplete',
            'tournee' => '\\ChronopostRelay\\StructType\\Tournee',
            'recherchePointChronopostParId' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostParId',
            'recherchePointChronopostParIdResponse' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostParIdResponse',
            'pointChronopost' => '\\ChronopostRelay\\StructType\\PointChronopost',
            'rechercheDetailPointChronopost' => '\\ChronopostRelay\\StructType\\RechercheDetailPointChronopost',
            'rechercheDetailPointChronopostResponse' => '\\ChronopostRelay\\StructType\\RechercheDetailPointChronopostResponse',
            'recherchePointChronopostParCoordonneesGeographiques' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostParCoordonneesGeographiques',
            'recherchePointChronopostParCoordonneesGeographiquesResponse' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostParCoordonneesGeographiquesResponse',
            'recherchePointChronopostInter' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostInter',
            'recherchePointChronopostInterResponse' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostInterResponse',
            'recherchePointRelaisParCoordonneesGeographiques' => '\\ChronopostRelay\\StructType\\RecherchePointRelaisParCoordonneesGeographiques',
            'recherchePointRelaisParCoordonneesGeographiquesResponse' => '\\ChronopostRelay\\StructType\\RecherchePointRelaisParCoordonneesGeographiquesResponse',
            'recherchePointChronopostAvecCoordParId' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostAvecCoordParId',
            'recherchePointChronopostAvecCoordParIdResponse' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostAvecCoordParIdResponse',
            'pointChronopostAvecCoord' => '\\ChronopostRelay\\StructType\\PointChronopostAvecCoord',
            'getAllChronopostAgences' => '\\ChronopostRelay\\StructType\\GetAllChronopostAgences',
            'getAllChronopostAgencesResponse' => '\\ChronopostRelay\\StructType\\GetAllChronopostAgencesResponse',
            'recherchePointRelaisParCoordonneesGeographiquesParService' => '\\ChronopostRelay\\StructType\\RecherchePointRelaisParCoordonneesGeographiquesParService',
            'recherchePointRelaisParCoordonneesGeographiquesParServiceResponse' => '\\ChronopostRelay\\StructType\\RecherchePointRelaisParCoordonneesGeographiquesParServiceResponse',
            'rechercheBtAvecPFParIdChronopostA2Pas' => '\\ChronopostRelay\\StructType\\RechercheBtAvecPFParIdChronopostA2Pas',
            'rechercheBtAvecPFParIdChronopostA2PasResponse' => '\\ChronopostRelay\\StructType\\RechercheBtAvecPFParIdChronopostA2PasResponse',
            'bureauDeTabacAvecPF' => '\\ChronopostRelay\\StructType\\BureauDeTabacAvecPF',
            'rechercheDetailPointChronopostInter' => '\\ChronopostRelay\\StructType\\RechercheDetailPointChronopostInter',
            'rechercheDetailPointChronopostInterResponse' => '\\ChronopostRelay\\StructType\\RechercheDetailPointChronopostInterResponse',
            'recherchePointChronopostParCoordonneesGeographiquesParService' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostParCoordonneesGeographiquesParService',
            'recherchePointChronopostParCoordonneesGeographiquesParServiceResponse' => '\\ChronopostRelay\\StructType\\RecherchePointChronopostParCoordonneesGeographiquesParServiceResponse',
            'rechercheBtAvecPFParCodeproduitEtCodepostalEtDate' => '\\ChronopostRelay\\StructType\\RechercheBtAvecPFParCodeproduitEtCodepostalEtDate',
            'rechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse' => '\\ChronopostRelay\\StructType\\RechercheBtAvecPFParCodeproduitEtCodepostalEtDateResponse',
            'rechercheTournee' => '\\ChronopostRelay\\StructType\\RechercheTournee',
            'rechercheTourneeResponse' => '\\ChronopostRelay\\StructType\\RechercheTourneeResponse',
            'tourneeResult' => '\\ChronopostRelay\\StructType\\TourneeResult',
        ];
    }
}
