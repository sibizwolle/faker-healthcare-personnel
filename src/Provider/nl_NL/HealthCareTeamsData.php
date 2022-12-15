<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker\Provider\nl_NL;

class HealthCareTeamsData
{

    /*
     *  Pay attention to the order in which your elements are set.
     *  This order will be used to generate the name.
     */
    public static array $locationNameElements = [
        'location',
        'place',
        'region',
        'prefix',
        'tree',
        'name',
        'suffix',
    ];

    public static array $locationCompositions = [
        'location place',
        'place region',
        'location tree',
        'prefix name-suffix',
        'location name-suffix',
        'prefix tree-suffix'
    ];

    public static array $locationPlaces = [
        'Vreeland ',
        'Schinveld ',
        'Utrecht ',
        'Heerenberg ',
        'Klundert ',
        'Waddinxveen ',
        'Hollum ',
        'Purmerend ',
        'Wierden ',
        'Kortenhoef ',
        'Amersfoort ',
        'Enschede ',
        'Leiden ',
        'Haarlem ',
    ];

    public static array $locationRegions = [
        'Noord',
        'Zuid',
        'Oost',
        'West',
        'Midden',
    ];

    public static array $locationTrees = [
        'Hulst',
        'Hazelaar',
        'Olijfboom',
        'Magnolia',
        'Waterwilg',
        'Zilverlinde',
        'Meidoorn',
        'Esdoorn',
        'Kastanje',
        'Vlier',
    ];

    public static array $locationPrefix = [
        'Nieuwe ',
        'Oude ',
        'Grote ',
        'Kleine ',
    ];

    public static array $locationNames = [
        'Mensinge',
        'Laar',
        'Nuwen',
        'Essen',
        'Vanen',
        'Wychen',
        'Doenrade',
        'Ooijen',
        'Horn',
        'Dussen',
    ];

    public static array $locationSuffix = [
        'hof',
        'haven',
        'vijver',
        'molen',
        'sluis',
        'schut',
        'water',
        'land',
        'burcht',
        'kerk',
    ];


    /*
     *  Pay attention to the order in which your elements are set.
     *  This order will be used to generate the name.
     */
    public static array $teamNameElements = [
        'prefix',
        'name',
        'disease',
        'care',
        'suffix',
    ];

    public static array $teamCompositions = [
        'disease care',
        'name suffix',
        'prefix name',
    ];

    public static array $teamDiseases = [
        'COPD ',
        'Endocrinologie ',
        'Dementie ',
        'KNO ',
        'Dermatologie ',
        'Oncologie ',
        'Gyneacologie ',
        'Fysiotherapie ',
        'Ergotherapie ',
        'Psychotherapie ',
        'Geriatrie '
    ];

    public static array $teamCare = [
        'Dagbehandeling',
        'Dagbesteding',
        'Opname',
        'Wijkverpleging',
        'Behandeling',
    ];

    public static array $teamNames = [
        'Huishoudelijke dienst ',
        'Receptie ',
        'Linnendienst ',
        'Voedingsdienst ',
        'Receptie ',
        'Applicatiebeheer ',
        'Informatievoorziening ',
        'HRM ',
        'Financien ',
        'Onderzoek ',
    ];

    public static array $teamSuffix = [
        '1',
        '2',
        '3',
        '4',
        '5',
        '1a',
        '2a',
        '3b',
        '4a',
        '5b',
    ];

    public static array $teamPrefix = [
        'Team ',
        'Managers ',
    ];

    /*
   *  Pay attention to the order in which your elements are set.
   *  This order will be used to generate the name.
   */
    public static array $functionGroupNameElements = [
        'name',

    ];

    public static array $functionGroupCompositions = [
        'name',
    ];

    public static array $functionGroupNames = [
        'Klantadministratie',
        'Receptie',
        'Facilitair',
        'HR / P&O',
        'ICT & ApplicatieBeheer',
        'Wasserij',
        'Bestuur',
        'Arts/specialist',
        'Verplegers',
        'Vrijwilligers',
        'Verzorgenden',
        'Stage / Opleidingsplaatsen',
        'Paramedisch',
    ];

    /*
    *  Pay attention to the order in which your elements are set.
    *  This order will be used to generate the name.
    */
    public static array $functionNameElements = [
        'prefix',
        'name',
    ];

    public static array $functionCompositions = [
        'name',
        'prefix name',
    ];

    public static array $functionNames = [
        'Basis Arts',
        'Arts',
        'Arts Specialist',
        'Secretaresse',
        'Vrijwilliger',
        'Voorman',
        'Verpleegkundige',
        'Wijkverpleegkundige',
        'Praktijkverpleegkundige',
        'Staf',
        'Verzorgende',
        'Receptioniste',
        'Gastvrouw',
        'Kok',
        'Sous chef',
        'Onderhoudstechnicus',
        'Magazijn',
        'Inkoper',
        'Psycholoog',
        'Diëtist',
        'Therapeut',
        'Applicatiebeheerder',
        'Begeleider',
        'Receptionist',
        'Inkoper',
        'Chaffeur',
    ];

    public static array $functionPrefix = [
        'Inval ',
        'Hoofd ',
        'Medewerker ',
        'Coordinator ',
        'Adviseur ',
        'Teamleider ',
        'Recruiter ',
        'Junior ',
        'Manager ',
        'Assistent ',
        'Stagiaire ',
        'Leerling ',
        'Regie ',
    ];

    /*
  *  Pay attention to the order in which your elements are set.
  *  This order will be used to generate the name.
  */
    public static array $specialisationGroupNameElements = [
        'name',
    ];

    public static array $specialisationGroupCompositions = [
        'name',
    ];

    public static array $specialisationGroupNames = [
        'Aandoening/ziektebeeld',
        'Zorg en Behandeling',
        'Welzijn',
        'Leren en werken',
        'Organisatie',
        'Overig',
    ];

    /*
  *  Pay attention to the order in which your elements are set.
  *  This order will be used to generate the name.
  */
    public static array $specialisationNameElements = [
        'name',
    ];

    public static array $specialisationCompositions = [
        'name',
    ];

    public static array $specialisationNames = [
        'Hartfalen',
        'Dementie',
        'Longaandoeningen',
        'Leren en werken',
        'Reuma',
        'Bloed prikken',
        'Manuele therapie',
        'Palliatieve zorg',
        'Multiculturele zorg',
        'Voeding',
        'Stagebegeleiding',
        'Salaris',
        'Coaching',
        'Arbeidsvoorwaarden',
        'Declaraties',
        'Wetgeving',
        'Klachten',
        'Gegevensbescherming',
        'Zorgadministratie',
        'Evenementen',
        'Intranet',
        'Veiligheid',
        'Website',
        'Duurzaamheid',
        'Dagbesteding',
    ];

    /*
  *  Pay attention to the order in which your elements are set.
  *  This order will be used to generate the name.
  */
    public static array $contractTypeNameElements = [
        'name',
        'suffix',
    ];

    public static array $contractTypeCompositions = [
        'name',
        'name suffix',
    ];

    public static array $contractTypeNames = [
        'Bepaalde tijd fulltime ',
        'Bepaalde tijd parttime ',
        'Onbepaalde tijd fulltime ',
        'Onbepaalde tijd parttime ',
        'Leerling BBL ',
        'Leerling BOL ',
        'Medewerker in opleiding ',
        'Uitzendkracht ',
        'Oproepkracht ',
        'ZZP-er ',
        'Externe ',
        'Vrijwilliger ',
    ];

    public static array $contractTypeSuffix = [
        'Contract',
    ];


}