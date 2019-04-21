<?php

/**
* This file is part of the phpBB Forum extension package
* IUM (Inactive User Manager).
*
* @copyright (c) 2016 by Andreas Kourtidis
* @license   GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the CREDITS.txt file.
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty( $lang) || !is_array($lang) )
{
	$lang = array();
}

$lang = array_merge(
		$lang, array(
	//
	'ACP_IUM'	=>	'IUM-Konfiguration',
	'ACP_IUM_LIST'	=>	'Inaktive Userliste',
	'ACP_IUM_TITLE'	=>	'IUM-Erweiterung',
	'ACP_IUM_TITLE2'	=> 'Inaktive Userliste',
	'ACP_IUM_APPROVAL_LIST'	=> 'Ignorieren/Löschen Bestätigungsliste',
	
	// ACP configuration page
	'ANDREASK_IUM_ENABLE'	=>	'Erweiterte Inaktive Nutzer-Erinnerung anschalten',
	'ANDREASK_IUM_INTERVAL'	=>	'Intervall',
	'ANDREASK_IUM_EMAIL_LIMIT'	=>	'E-Mail-Limit',
	'ANDREASK_IUM_TOP_USER_THREADS'	=>	'Die Topthemen des Nutzers mitsenden?',
	'ANDREASK_IUM_TOP_USER_THREADS_COUNT'	=>	'Wie viele Themen?',
	'ANDREASK_IUM_TOP_FORUM_THREADS'	=>	'Die Top-Themen des Forums mitschicken?',
	'ANDREASK_IUM_TOP_FORUM_THREADS_COUNT'	=>	'Wie viele Themen?',
	'ANDREASK_IUM_SELF_DELETE'	=>	'Der Nutzer ist in der Lage sich selbst zu löschen',
	'ANDREASK_IUM_DELETE_APPROVE'			=>	'Bestätigung für einen Selbstlöschungsantrag erforderlich?',
	'ANDREASK_IUM_KEEP_POSTS'				=>	'Die Beiträge des Nutzers behalten?',
	'ANDREASK_IUM_AUTO_DEL'					=>	'Nutzer automatisch löschen?',
	'ANDREASK_IUM_AUTO_DEL_DAYS'			=>	'Nach wie vielen Tagen?',
	'ANDREASK_IUM_TEST_EMAIL'				=>	'Test-E-Mail senden',
	'ANDREASK_IUM_INCLUDED_FORUMS'			=>	'Eingeschlossene Foren',
	'ANDREASK_IUM_EXCLUDE_FORUM'			=>	'Ausschliesen',
	'ANDREASK_IUM_GROUP_IGNORE'				=>	'Gruppen ignorieren',

	'ANDREASK_IUM_EXCLUDED_FORUMS'				=>	'Ausgeschlossene Foren',
	'ANDREASK_IUM_INCLUDE_FORUM'				=>	'Einbeziehen',
	'SELECT_A_FORUM'							=>	'Bitte wähle ein Forum aus',
	'EXCLUDED_EMPTY'							=>	'Keine ausgeschlossenen Foren ...',
	
	'IUM_IGNORE_GROUP_MANAGMENT'				=>	'Gruppenmanagement',
	'ANDREASK_IUM_UPDATE_IGNORE_LIST'			=>	'Ignorieren',
	
	// acp user overview add option
	'USER_ADMIN_ANDREASK_IUM_USERS_OVERVIEW_OPTION'	=>	'Erinnerung senden',

	// ACP configuration page Explanations
	'ANDREASK_IUM_ENABLE_EXPLAIN'	=>	'Wenn aktiviert, beginnt die Erweiterung damit E-Mails an "Schläfer" zu senden.',
	'ANDREASK_IUM_INTERVAL_EXPLAIN'	=>	'Der Zeitraum nachdem ein Benutzer als "Schläfer" angesehen wird. Empfohlen sind 30 Tage.',
	'ANDREASK_IUM_EMAIL_LIMIT_EXPLAIN'	=>	'Anzahl der Erinnerungen die <b>pro Tag</b> gesendet werden können. Empfohlen sind ~250. Aber überprüfe, ob die Zahl der E-Mails pro Tag bei deinem Provider in irgendeiner Form beschränkt ist.',
	'ANDREASK_IUM_TOP_USER_THREADS_EXPLAIN'	=>	'Wenn ausgewählt, dann wird die Mail die aktiven Topthemen des Benutzers seit seinem letzten Besuch enthalten.',
	'ANDREASK_IUM_TOP_USER_THREADS_COUNT_EXPLAIN'	=>	'Anzahl der Topthemen des Benutzers, die in der E-Mail enthalten sein sollten.',
	'ANDREASK_IUM_TOP_FORUM_THREADS_EXPLAIN'	=>	'Wenn aktiviert, wird die Mail die Topthemen des Forums seit seinem letzten Besuch enthalten.',
	'ANDREASK_IUM_TOP_FORUM_THREADS_COUNT_EXPLAIN'	=>	'Anzahl der Forum-Themen, die in der E-Mail enthalten sein sollen.',
	'ANDREASK_IUM_SELF_DELETE_EXPLAIN'	=>	'Wenn aktiviert, dann wird ein Link zur Seite "<strong>board_url/ium/{random_key}</strong>" in der E-Mail an den Benutzer enthalten sein, über den er seinen Zugang selbst löschen kann.',
	'ANDREASK_IUM_DELETE_APPROVE_EXPLAIN'	=>	'Wenn aktiviert, dann müssen alle Anfragen zur Selbstlöschung von einem Administrator geprüft werden.',
	'ANDREASK_IUM_KEEP_POSTS_EXPLAIN'	=>	'"Ja" wird den Zugang löschen, aber die Beiträge <strong>beibehalten</strong>, "Nein" wird die Beiträge des Nutzers ebenso löschen.',
	'ANDREASK_IUM_IGNORE_LIST_EXPLAIN'	=>	'Hier können die Benutzer auswählt werden, denen keine Erinnerungsmails gesendet oder von der Ausschlussliste gelöscht werden sollen..<br/><strong>Pro Zeile ein Nutzername.<br/>Hinweis:</strong> Die nachfolgenden Gruppen werden standardmäßig ignoriert: 1. Gäste, 4. Globale Moderatoren, 5. Administratoren and 6. Bots.',
	'ANDREASK_IUM_AUTO_DEL_EXPLAIN'			=>	'Benutzer werden automatisch gelöscht nach einer angegebenen Zahl von Tagen, wenn sie nicht nach drei Erinnerungen zurückkommen.',
	'ANDREASK_IUM_AUTO_DEL_DAYS_EXPLAIN'	=>	'Anzahl an Wartetagen bis ein Benutzer automatisch nach Ablauf der Wartefrist gelöscht wird.',
	'ANDREASK_IUM_TEST_EMAIL_EXPLAIN'		=>	'Eine Test-E-Mail wird gesendet an "%s"',
	'ANDREASK_IUM_INCLUDED_FORUMS_EXPLAIN'	=>	'Wählen Sie eine Kategorie oder Unterkategorie aus, die <strong>nicht</strong> an Benutzer gesendet werden sollen.',
	'ANDREASK_IUM_EXCLUDED_FORUMS_EXPLAIN'	=>	'Wählen Sie eine Kategorie oder Unterkategorie aus, die an Benutzer gesendet werden sollen.',
	'ANDREASK_IUM_IGNORE_GROUP_LIST_EXPLAIN'	=>	'Hier können Sie auswählen, welche Gruppe(n) von der Erweiterung ignoriert werden soll(en). Bitte beachten Sie, dass <b> Bots, Administratoren, Globale Moderatoren und Gäste </b> ignoriert werden, auch wenn sie hier nicht ausgewählt sind. Es wird jedoch empfohlen, auch hier diese Gruppen auszuwählen!',
	'ANDREASK_IUM_GROUP_IGNORE_EXPLAIN'		=>	'Halte die Strg-Taste (oder ⌘ für Mac) auf der Tastatur gedrückt, um mehrere Gruppen auszuwählen',

	
	// configuration page Legend
	'IUM_INACTIVE_USERS_EXPLAIN'	=>	'In dieser Liste kannst du die Benutzer sehen, die sich registriert haben, aber deren Zugänge inaktiv sind und diejenigen, die das Forum über einen definierten Zeitraum nicht besucht haben.',
	'ACP_IUM_SETTINGS'	=>	'Einstellungen Inaktive Benutzer-Erinnerung',
	'ACP_IUM_MAIL_SETTINGS'	=>	'Erinnerungseinstellungen',
	'ACP_IUM_MAIL_INCLUDE_SETTINGS'	=>	'Einstellungen für die Einfügung in die Erinnerung',
	'ACP_IUM_DANGER'	=>	'Gefahrenbereich',
	
	// configuration page
	'INACTIVE_MAIL_SENT_TO'			=>	'Eine Beispielmail für inaktive Benutzer wurde an "%s" gesendet',
	'SLEEPER_MAIL_SENT_TO'			=>	'Eine Beispielmail für schlafende Benutzer wurde an "%s" gesendet',
	'SEND_SLEEPER'					=>	'Sendet ein Beispiel für Schläfer',
	'SEND_INACTIVE'					=>	'Sendet ein Beispiel für inaktive Benutzer',
	'PLUS_SUBFORUMS'				=>	'+Unterforen',
	
	// Sort by, options for the inactive users list
	'ACP_IUM_INACTIVE'	=> array(
									0	=>	'Aktiv',
									1	=>	'Registriert nicht aktiviert',
									2	=>	'Profil gewechselt',
									3	=>	'Vom Administrator deaktiviert',
									4	=>	'Dauerhaft gesperrt',
									5	=>	'Zeitweilig gesperrt'),
	'NEVER_CONNECTED'	=>	'Der Benutzer hat sich nie angemeldet',
	
	// Inactive users list page
	'ACP_IUM_NODATE'	=>	'Der Benutzer ist <strong>nicht</strong> deaktiviert',
	'ACP_USERS_WITH_POSTS'	=>	'Zeige nur Benutzer mit Beiträgen',
	'LAST_SENT_REMINDER'	=>	'Letzte Erinnerung',
	'NO_REMINDER_COUNT'	=>	'Bisher keine Erinnerungen geschickt',
	'COUNT'	=>	'Anzahl der Erinnerungsmails',
	'NO_PREVIOUS_SENT_DATE'	=> 'Keine Erinnerungsmails geschickt',
	'REMINDER_DATE'	=>	'Letzte Erinnerung geschickt am',
	'NO_REMINDER_SENT_YET'	=>	'Noch keine Erinnerungsmails geschickt',	
	'IUM_INACTIVE_REASON'	=>	'Status',
	'TOTAL_USERS_WITH_DAY_AMOUNT'	=>	'<strong>%1$s</strong> Benutzer insgesamt <i> im gewählten Intervall</i> von "<strong>%2$s</strong>"',
	
	
	// Delete approval page
	'IGNORE_METHODES'	=>	'Ausschluss',	
	'IGNORE_METHODE'	=> array(
		0 =>	'Eingeschlossen',
		1 =>	'Automatisch',
		2	=>	'Vom Administrator ausgeschlossen',
	),
	'REQUEST_TYPE'			=>	'Löschantrag',
	'USER_SELECT'		=>	'Auswahl',
	'SELECT_AN_ACTION'		=>	'Aktion auswählen',	
	'SELECT_ACTION'			=>	'Bitte eine Aktion auswählen',
	
	
	'REGISTERED'			=>	'Registrierte Benutzer',
	'GUESTS'				=>	'Gäste',
	'REGISTERED_COPPA'		=>	'Registrierte COPPA-Benutzer',
	'GLOBAL_MODERATORS'		=>	'Globale Moderatoren',
	'BOTS'					=>	'Bots',
	'NEWLY_REGISTERED'		=>	'Kürzlich registrierte Benutzer',
	
 	'IGNORED_USERS_LIST'	=>	'Liste der ausgeschlossenen Benutzer',	
	'DONT_IGNORE'		=>	'Einschliessen',	
	'NOT_IGNORED'		=>	'Benutzer werden nicht mehr ignoriert.',

	'ACP_IUM_APPROVAL_LIST_TITLE'	=> 'Überprüfung der Löschanträge',
	'APPROVAL_LIST_PAGE_TITLE'	=> 'Überprüfung der Löschanträge',
	'IUM_APPROVAL_LIST_EXPLAIN'	=> 'Liste der Benutzer, die eine Löschung beantragt haben',
	'NO_REQUESTS'			=> 'Bisher keine Löschanträge',
	'NO_USER_SELECTED'		=>	'Keine Benutzer markiert.',
	'IUM_MANAGMENT'			=>	'Management der inaktiven Benutzer',
	'IGNORE_USER_LIST'		=>	'Benutzer ausschliessen',
	
	'ADD_IGNORE_USER'		=>	'Der Liste hinzufügen',
	'REMOVE_IGNORE_USER'	=>	'Von der Liste entfernen',
	'DELETED_SUCCESSFULLY'	=>	'Erfolgreich gelöscht.',
	
	'APPROVE'				=>	'Benutzer löschen',
	'NO_USER_TYPED'			=>	'Kein Benutzer eingegeben!',
	'USER_NOT_FOUND'		=>	'Benutzer %s nicht gefunden!',
	'RESET_REMINDERS'		=>	'Erfolgreich zurückgesetzt.',
	
	// Sort Lists
	'COUNT_BACK'	=>	'im Intervall <strong>VON</strong> Tagen/Monaten/Jahren und zurück',
	'ACP_DESCENDING'	=>	'Absteigend',
	'SORT_BY_SELECT'	=>	'Sortieren nach',
	'REQUEST_DATE'		=>	'Datum der Löschanforderung',
	'SELECT'	=>	'Wähle T/M/J',
	'THIRTY_DAYS'	=>	'dreißig Tage',
	'SIXTY_DAYS'	=>	'sechzig Tage',
	'NINETY_DAYS'	=>	'neunzig Tage',
	'FOUR_MONTHS'	=>	'vier Monate',
	'SIX_MONTHS'	=>	'sechs Monate',
	'NINE_MONTHS'	=>	'neun Monate',
	'ONE_YEAR'		=>	'ein Jahr',
	'TWO_YEARS'		=>	'zwei Jahre',
	'THREE_YEARS'	=>	'drei Jahre',
	'FIVE_YEARS'	=>	'fünf Jahre',
	'SEVEN_YEARS'	=>	'sieben Jahre',
	'DECADE'		=>'ein Jahrzehnt',

	// Log
	'SENT_REMINDER_TO_ADMIN'	=>	'Vorlage "%1$s" wurde an "%2$s" gesendet',
	'SENT_REMINDERS'			=>	'%s Erinnerung(en) wurden gesendet.',
	'USERS_DELETED'				=>	'"%1$s" Benutzer wurden gelöscht"<b>%2$s"</b>, Löschantrag: "<b>%3$s</b>"',
	'USER_DELETED'				=>	'Benutzer "<b>%1$s</b>" wurde gelöscht, Löschantrag: "<b>%2$s</b>"',
	'SOMETHING_WRONG'			=>	'Mit Ihrer Anfrage war etwas nicht in Ordnung. Die zum Löschen angeforderten Benutzer stimmten nicht mit den tatsächlichen Benutzern in der Datenbank überein!',
	'USER_SELF_DELETED'			=>	'Ein Benutzer hat sich selbst gelöscht. Konfiguration für Beiträge war auf "%s" eingestellt',
	'SENT_REMINDER_TO'			=>	'Eine Erinnerung wurde an Benutzer "%s" gesendet.',

	)

);
