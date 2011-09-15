<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * PHP version 5
 * @copyright  Liplex Webprogrammierung und -design Christian Kolb 2011
 * @author     Christian Kolb <info@liplex.de>
 * @license    MIT (see /LICENSE.txt for further information)
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_li_invoice']['toCustomer']       = array('Kunde', 'Bitte wählen Sie einen Kunden aus.');
$GLOBALS['TL_LANG']['tl_li_invoice']['toCategory']       = array('Rechnungskategorie', 'Bitte wählen Sie die Rechnungskategorie aus.');
$GLOBALS['TL_LANG']['tl_li_invoice']['title']            = array('Titel', 'Bitte geben Sie den Titel ein.');
$GLOBALS['TL_LANG']['tl_li_invoice']['alias']            = array('Alias', 'Bitte geben Sie den Alias ein.');
$GLOBALS['TL_LANG']['tl_li_invoice']['invoiceDate']      = array('Rechnungsdatum', 'Bitte geben Sie das Rechnungsdatum ein.');
$GLOBALS['TL_LANG']['tl_li_invoice']['performanceDate']  = array('Leistungsdatum', 'Bitte geben Sie das Leistungsdatum ein.');
$GLOBALS['TL_LANG']['tl_li_invoice']['price']            = array('Preis', 'Bitte geben Sie den Preis ein.');
$GLOBALS['TL_LANG']['tl_li_invoice']['file']             = array('Rechnung', 'Bitte wählen Sie die Rechnung aus.');
$GLOBALS['TL_LANG']['tl_li_invoice']['isOut']            = array('Ausgangsrechnung?', 'Ist die Rechnung eine Ausgangsrechnung?');
$GLOBALS['TL_LANG']['tl_li_invoice']['isSingular']       = array('Einmalige Rechnung?', 'Ist die Rechnung eine einmalige Rechnung?');
$GLOBALS['TL_LANG']['tl_li_invoice']['enableGeneration'] = array('Generierung aktivieren', 'Rechnungsgenerierung aktivieren.');
$GLOBALS['TL_LANG']['tl_li_invoice']['toTemplate']       = array('Rechnungstemplate', 'Bitte wählen Sie das Rechnungstemplate aus.');
$GLOBALS['TL_LANG']['tl_li_invoice']['toAddress']        = array('Rechnungsadresse', 'Bitte wählen Sie die Rechnungsadresse aus.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_li_invoice']['invoice_legend']    = 'Rechnung';
$GLOBALS['TL_LANG']['tl_li_invoice']['pdf_legend']        = 'PDF-Datei';
$GLOBALS['TL_LANG']['tl_li_invoice']['settings_legend']   = 'Einstellungen';
$GLOBALS['TL_LANG']['tl_li_invoice']['generation_legend'] = 'Generierung';

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_li_invoice']['income']               = 'Einnahme';
$GLOBALS['TL_LANG']['tl_li_invoice']['expense']              = 'Ausgabe';
$GLOBALS['TL_LANG']['tl_li_invoice']['tax_number']           = 'Steuernummer';
$GLOBALS['TL_LANG']['tl_li_invoice']['date']                 = 'Datum';
$GLOBALS['TL_LANG']['tl_li_invoice']['invoice_number']       = 'Rechnungs-Nr.';
$GLOBALS['TL_LANG']['tl_li_invoice']['introduction_male']    = 'Sehr geehrter Herr %s,<br />für Ihren Auftrag bedanke ich mich und berechne folgendes für meine Leistungen.';
$GLOBALS['TL_LANG']['tl_li_invoice']['introduction_female']  = 'Sehr geehrte Frau %s,<br />für Ihren Auftrag bedanke ich mich und berechne folgendes für meine Leistungen.';
$GLOBALS['TL_LANG']['tl_li_invoice']['position_quantity']    = 'Anzahl';
$GLOBALS['TL_LANG']['tl_li_invoice']['position_unit']        = 'Einheit';
$GLOBALS['TL_LANG']['tl_li_invoice']['position_label']       = 'Bezeichnung';
$GLOBALS['TL_LANG']['tl_li_invoice']['position_tax']         = 'Steuer';
$GLOBALS['TL_LANG']['tl_li_invoice']['position_unit_price']  = 'Einzelpreis';
$GLOBALS['TL_LANG']['tl_li_invoice']['position_total_price'] = 'Gesamtpreis';
$GLOBALS['TL_LANG']['tl_li_invoice']['service_remark']       = 'Das Rechnungsdatum entspricht dem Leistungsdatum.';
$GLOBALS['TL_LANG']['tl_li_invoice']['transfer_remark']      = 'Bitte überweisen Sie den Rechnungsbetrag innerhalb der nächsten 14 Tage auf das nachfolgende Konto.';
$GLOBALS['TL_LANG']['tl_li_invoice']['account_data']         = 'Kontodaten';
$GLOBALS['TL_LANG']['tl_li_invoice']['account_number']       = 'Kontonummer';
$GLOBALS['TL_LANG']['tl_li_invoice']['bank_code']            = 'BLZ';
$GLOBALS['TL_LANG']['tl_li_invoice']['bank']                 = 'Bank';
$GLOBALS['TL_LANG']['tl_li_invoice']['greeting']             = 'Mit freundlichen Grüßen<br />Christian Kolb';

$GLOBALS['TL_LANG']['tl_li_invoice']['total_netto']          = 'Rechnungsbetrag (netto)';
$GLOBALS['TL_LANG']['tl_li_invoice']['total_brutto']         = 'Rechnungsbetrag (brutto)';
$GLOBALS['TL_LANG']['tl_li_invoice']['tax']                  = 'Umsatzsteuer';

$GLOBALS['TL_LANG']['tl_li_invoice']['units']['unit']        = 'Stück';
$GLOBALS['TL_LANG']['tl_li_invoice']['units']['hour']        = 'Stunde';
$GLOBALS['TL_LANG']['tl_li_invoice']['units']['month']       = 'Monat';
$GLOBALS['TL_LANG']['tl_li_invoice']['units']['year']        = 'Jahr';

$GLOBALS['TL_LANG']['tl_li_invoice']['invoice_generation']   = 'Rechnungsgenerierung';
$GLOBALS['TL_LANG']['tl_li_invoice']['path_introduction']    = 'Die Rechnung wurde erfolgreich generiert und unter folgendem Pfad abgelegt';
$GLOBALS['TL_LANG']['tl_li_invoice']['path']                 = 'Pfad';
$GLOBALS['TL_LANG']['tl_li_invoice']['back_overview']        = 'Zurück zur Übersicht';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_li_invoice']['new']    = array('Neue Rechnung', 'Neue Rechnung erstellen');
$GLOBALS['TL_LANG']['tl_li_invoice']['edit']   = array('Rechnung editieren', 'Die Rechnung mit der ID %s editieren');
$GLOBALS['TL_LANG']['tl_li_invoice']['copy']   = array('Rechnung kopieren', 'Die Rechnung mit der ID %s kopieren');
$GLOBALS['TL_LANG']['tl_li_invoice']['delete'] = array('Rechnung löschen', 'Die Rechnung mit der ID %s löschen');
$GLOBALS['TL_LANG']['tl_li_invoice']['show']   = array('Rechnungdetails anzeigen', 'Die Details der Rechnung mit der ID %s anzeigen');

$GLOBALS['TL_LANG']['tl_li_invoice']['reminder'] = array('Rechnungserinnerungen', 'Rechnungserinnerungen verwalten');

?>