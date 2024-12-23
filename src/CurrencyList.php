<?php

namespace Hracik\CurrencyList;

use Symfony\Component\Intl\Currencies;

class CurrencyList
{

	const EXCLUDE = [
		'ARA', //Argentine austral,1991
		'ATS', //Austrian schilling,2002
		'BEF', //Belgian franc,2002
		'BOP', //Bolivian Peso,1986
		'BOV', //Bolivian Mvdol, is not considered a standard currency
		'BGL', //Bulgarian lev
		'BGM', //Bulgarian lev
		'CLE', //Chilean Peso,1975
		'CNX', //Chinese dollar
		'COU', //It is a unit of account in Colombia
		'CSK', //Czechoslovak koruna,1993
        'CUC', //Cuban Convertible Peso
		'CYP', //Cypriot pound,2008
		'DDM', //East German mark
		'NLG', //Dutch guilder,2002
		'XEU', //European currency unit
		'ECS', //Ecuadorian sucre,2000
		'ECV', //Ecuadorian unit of value
		'EEK', //Estonian kroon,2011
		'ERN', //Eritrean nakfa,2016
		'FIM', //Finnish markka,2002
		'FRF', //French franc,2002
		'XFU', //UIC Franc,2013
		'XFO', //French gold franc,2003
		'GEK', //Georgian kupon larit
		'GQE', //Equatorial Guinean ekwele,1985
		'GWP', //Guinea-Bissau peso,1997
		'DEM', //German mark,2002
		'GRD', //Greek Drachma,2001
		'HRD', //Croatian dinar,1994
		'IEP', //Irish Pound,2002
		'ITL', //Italian Lira,2002
		'GNS', //Guinean syli,1985
		'ILP', //Israeli pound,1980
		'LVL', //Latvian Rouble,1993
		'LVR', //Latvian Lats,2014
		'LUL',
		'LUC',
		'LUF',
		'CHE',
		'CHW',
		'MDC', //Moldovan coupon,1993
		'MGF', //Malagasy franc,2005
		'MTL', //Maltese lira,2009
		'MTP', //Maltese Pound,1983
		'MXV', //is not considered a standard currency
		'MAF', //Moroccan franc,1974
		'MZE', //Mozambican escudo,1980
		'LTL', //Lithuanian litas,2015
		'LTT', //Lithuanian talonas,1993
		'PEI', //Peruvian inti,1991
		'PTE', //Portuguese escudo,2002
		'GWE', //Portuguese Guinean escudo,1975
		'XRE', //RINET funds,1999
		'SKK', //Slovak koruna,2009
		'SIT', //Slovenian tolar,2007
		'SUR', //Soviet ruble,1992
		'ESP', //Spanish Peseta,2002
		'SRG', //Surinamese guilder,2004
		'TJR', //Tajikistani Ruble,2000
		'UAK', //Ukrainian karbovanets,1996
		'UYW', //Uruguay Unidad Previsional, is not considered a standard currency
		'YDD', //Yemeni dinar,1990
	];


	public static function get(): array
	{
		$currencies = array_filter(Currencies::getNames(), function ($name, $code) {
			//not used currencies have some other information in brackets (), e.g. years of usage
			if (strpos($name, '(') !== false) {
				return false;
			}

			//manually created list of currencies to exclude
			if (in_array($code, self::EXCLUDE)) {
				return false;
			}

			return true;
		}, ARRAY_FILTER_USE_BOTH);

		ksort($currencies);
		return $currencies;
	}

}
