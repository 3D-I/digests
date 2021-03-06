<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2016 Mark D. Hamill (mark@phpbbservices.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'DIGESTS_ALL_FORUMS'				=> 'Alle zugriffsberechtigten Themenbereiche auswählen',
	'DIGESTS_AUTHOR'					=> 'Autor',
	'DIGESTS_BAD_SEND_HOUR'				=> 'Die eingegebene Sendezeit von %s ist ungültig. Sie lautet %s. Der Wert sollte jedoch >= 0 und < 24 liegen.',
	'DIGESTS_BLOCK_IMAGES'				=> 'Grafiken nicht einbinden',
	'DIGESTS_BLOCK_IMAGES_EXPLAIN'		=> 'Unterdrückt die Anzeige von Grafiken innerhalb deiner eMail-Zusammenfassungen. Dazu zählen auch Smilies und angehängte Bilddateien, sowohl in Forumsbeiträgen, als auch in Privaten Nachrichten. Das kann gerade bei langsamen Internetverbindungen sinnvoll sein, wenn Traffic-Reduzierung erreicht werden soll oder wenn es sich um ein sehr aktives Forum handelt, in dem viele Bilder gesendet werden. Reine Text-Zusammenfassungen enthalten grundsätzlich keine Grafiken.',
	'DIGESTS_BOARD_LIMIT'				=> '%s (Board limit)',
	'DIGESTS_BY'						=> 'Von',
	'DIGESTS_CLOSED_QUOTE'				=> '"',
	'DIGESTS_COUNT_LIMIT'				=> 'Höchstzahl von Beiträgen innerhalb einer Zusammenfassung',
	'DIGESTS_COUNT_LIMIT_EXPLAIN'		=> 'Gib einen Wert >0 ein, um die Anzahl der in einer Zusammenfassung angezeigten Beiträge zu begrenzen.',
	'DIGESTS_DAILY'						=> 'Tägliche Zusammenfassung',
	'DIGESTS_DATE'						=> 'Datum',
	'DIGESTS_DISABLED_MESSAGE'			=> 'Zum Aktivieren der eMail-Zusammenfassung bitte die gewünschte Art und das Layout der Zusammenfassung auswählen.',
	'DIGESTS_DISCLAIMER'				=> 'Diese eMail-Zusammenfassung wird auf eigenen Wunsch an dich, als registrierten Teilnehmer von \'<a href="%s">%s</a>\' versandt. Du kannst dein Abonnement jederzeit ändern oder löschen, indem du deinen forum&apos;s <a href="%sucp.%s">Persönlichen Bereich</a> aufrufst und dort bei den Einstellungen der email-Zusammenfassung entsprechende Änderungen vornimmst. . Bei Problemen oder über das Forum nicht lösbaren Fragen (Themenbereich \"Technische Fragen\") kannst du dich ggf. auch direkt an  <a href="mailto:%s?subject=Digests">%s webmaster</a> wenden.',
	'DIGESTS_EXPLANATION'				=> 'Bei den eMail-Zusammenfassungen handelt es sich um eine automatisierte, regelmäßig per Email versandte Zusammenfassung der im Forum veröffentlichten Beiträge. Die Zusammenfassungen können täglich, wöchtlich oder einmal im Monat erzeugt werden. Du kannst dabei individuell die einzelnen Themenbereiche auswählen, die du erhalten möchtest oder dir standardmäßig alle Themenbereiche, zu denen du Zugang hast, zusammenfassen lassen. Auf dieser Seite kannst du auch jederzeit dein Abonnement ganz beenden. Viele Teilnehmer schätzen diese Form des regelmäßigen Überblicks über die Aktivitäten im Forum sehr. Wir empfehlen deshalb die Aktivierung dieser Funktion.',
	'DIGESTS_FILTER_ERROR'				=> 'Der Digest Mailer wurde mit einem ungültigen user_digest_filter_type = %s aufgerufen',
	'DIGESTS_FILTER_FOES'				=> 'Beiträge von \'ignorierten Mitgliedern\' entfernen',
	'DIGESTS_FILTER_TYPE'				=> 'Vorauswahl',
	'DIGESTS_FORMAT_FOOTER' 			=> 'Zusammenfassungsformat:',
	'DIGESTS_FORMAT_HTML'				=> 'HTML',
	'DIGESTS_FORMAT_HTML_EXPLAIN'		=> 'HTML liefert grafisch formatierte Zusammenfassungen mit BBCode und Signaturen (wenn zugelassen). Auch Formatvorlagen (Stylesheets) werden mit eingebunden, wenn dein eMail-Program das ermöglicht.',
	'DIGESTS_FORMAT_HTML_CLASSIC'		=> 'HTML mit klassischem Tabellen-Layout',
	'DIGESTS_FORMAT_HTML_CLASSIC_EXPLAIN'	=> 'Ähnlich wie HTML. Die Beitragstexte werden jedoch als Tabelle angezeigt',
	'DIGESTS_FORMAT_PLAIN'				=> 'Reines HTML',
	'DIGESTS_FORMAT_PLAIN_EXPLAIN'		=> 'Reines HTML verwendet weder Formatvorlagen noch Farben',
	'DIGESTS_FORMAT_PLAIN_CLASSIC'		=> 'Reines HTML mit klassischem Tabellen-Layout',
	'DIGESTS_FORMAT_PLAIN_CLASSIC_EXPLAIN'	=> 'Ähnlich wie reines HTML. Die Beitragstexte werden jedoch als Tabelle angezeigt',
	'DIGESTS_FORMAT_STYLING'			=> 'Layout der Zusammenfassung',
	'DIGESTS_FORMAT_STYLING_EXPLAIN'	=> 'Bitte beachte, dass das von deinem Email-Programm erzeugte Layout stark von der verwendeten Software und von deren Konfiguration abhängen kann. Um Erläuterungen zu den einzelnen Formatierungsarten zu erhalten, kannst du den Cursor über die entsprechenden Möglichkeiten bewegen.',
	'DIGESTS_FORMAT_TEXT'				=> 'Nur Text',
	'DIGESTS_FORMAT_TEXT_EXPLAIN'		=> 'Es wird kein HTML angezeigt, nur die reine, unformatierte Textinformation.',
	'DIGESTS_FORUMS_WANTED'				=> 'Gewählte Themenbereiche',
	'DIGESTS_FREQUENCY'					=> 'Gewählte Zusammenfassungsart',
	'DIGESTS_FREQUENCY_EXPLAIN'			=> 'Wöchentliche Zusammenfassungen werden immer %s erzeugt. Monatliche Zusammenfassungen werden jeweils am ersten Tag des Monats versandt. Der Wochentag wird auf der Basis der aktuellen Zeit (UTC) bereichnet.',
	'DIGESTS_FREQUENCY_SHORT'			=> 'Zusammenfassungsart',
	'DIGESTS_INTRODUCTION' 				=> 'hier kommt deine persönliche Zusammenfassung der neuesten Beiträge von \'%s\'. Vielleicht findest du darin auch ein Thema, an dem du dich gerne beteiligen möchtest.',
	'DIGESTS_JUMP_TO_MSG'				=> 'Nachrichten-Nr.', 
	'DIGESTS_JUMP_TO_POST'				=> 'Beitrags-Nr.', 
	'DIGESTS_LASTVISIT_RESET'			=> 'Gespeicherten Zeitpunkt des letzten Forumsbesuches beim Versand der Zusammenfassung aktualisieren',
	'DIGESTS_LASTVISIT_RESET_EXPLAIN'	=> 'Beim Aktivieren dieser Option werden alle Beiträge, die vor dem Versandzeitpunkt veröffentlicht worden sind, evtl. als gelesen markiert. Das bedeuted, dass aus Sicht der Forumssoftware diese Beiträge von dir bereits gelesen worden sind, obwohl du die Zusammenfassungsemail vielleicht noch gar nicht wirklich gelesen hast.',
	'DIGESTS_LINK'						=> 'Link',
	'DIGESTS_MAIL_FREQUENCY' 			=> 'Versandfrequenz',
	'DIGESTS_MARK_READ'					=> 'Beiträge als gelesen markieren, wenn sie in der Zusammenfassung aufgeführt werden',
	'DIGESTS_MAX_DISPLAY_WORDS'			=> 'Maximal angezeigte Wortanzahl in den Beiträgen',
	'DIGESTS_MAX_DISPLAY_WORDS_EXPLAIN'	=> 'Um Ausgabefehler beim Kürzen eines Beitrags zu vermeiden, muss die HTML-Formatierung ganz entfernt werden. Um den kompletten Text anzuzeigen, bitte das Feld leer lassen. Wenn die &quot;Keine Beitragsinhalte anzeigen&quot;-Option mit ausgewählt wurde, wird dieses Feld nicht berücksichtigt.',
	'DIGESTS_MAX_SIZE'					=> 'Maximal angezeigte Wortanzahl in den Beiträgen',
	'DIGESTS_MAX_WORDS_NOTIFIER'		=> '... ',
	'DIGESTS_MIN_SIZE'					=> 'Mindestwortanzahl, um in die Zusammenstellung aufgenommen zu werden.',
	'DIGESTS_MIN_SIZE_EXPLAIN'			=> 'Wenn das Feld leer gelassen oder auf 0 gesetzt wird, werden Beiträge in jeder beliebigen Länge mit aufgenommen.',
	'DIGESTS_MONTHLY'					=> 'Monatliche Zusammenfassung',
	'DIGESTS_NEW'						=> 'Neue Beiträge',
	'DIGESTS_NEW_POSTS_ONLY'			=> 'Zeige nur neu veröffentlichte Beiträge',
	'DIGESTS_NEW_POSTS_ONLY_EXPLAIN'	=> 'Durch diese Option werden alle Beiträge herausgefiltert, die vor dem Zeitpunkt deines letzten Forumsbesuches veröffentlicht worden sind. Wenn du das Forum viel besuchst und dort direkt die Beiträge liest, können dir dadurch wichtige Beiträge in der Zusammenfassung fehlen. Außerdem kannst du unter Umständen auch Beiträge aus den Themenbereichen verpassen, die du noch nicht besucht hast.',
	'DIGESTS_NO_BOOKMARKED_POSTS'		=> 'Es gibt keine neuen abonnierten Beiträge.',
	'DIGESTS_NO_CONSTRAINT'				=> 'Ohne Beschränkung',
	'DIGESTS_NO_FORUMS_CHECKED' 		=> 'Mindestens ein Themenbereich muss ausgewählt sein',
	'DIGESTS_NO_LIMIT'					=> 'Ohne Beschränkung',
	'DIGESTS_NO_POSTS'					=> 'Es gibt keine neuen Beiträge.',
	'DIGESTS_NO_POST_TEXT'				=> 'Keine Beitragsinhalte anzeigen',
	'DIGESTS_NO_PRIVATE_MESSAGES'		=> 'Es gibt weder neue, noch ungelesene Private Nachrichten.',
	'DIGESTS_NO_TIMEZONE'				=> 'In deinem Profil muss eine <a href="%s">Zeitzone/a> angegeben sein, um Zusammenfassungen erhalten zu können.',
	'DIGESTS_NONE'						=> 'Keine eMail-Zusammenfassung',
	'DIGESTS_ON'						=> 'aktiviert',
	'DIGESTS_OPEN_QUOTE'				=> '"',
	'DIGESTS_POST_IMAGE_TEXT'			=> '<br />(Grafik zum vergrößern anklicken.)',
	'DIGESTS_POST_TEXT'					=> 'Beitragstext', 
	'DIGESTS_POST_TIME'					=> 'Veröffentlichungszeitpunkt', 
	'DIGESTS_POST_SIGNATURE_DELIMITER'	=> '<br />____________________<br />', // Place here whatever code (make sure it is valid HTML) you want to use to distinguish the end of a post from the beginning of the signature line
	'DIGESTS_POSTED_TO_THE_TOPIC'		=> 'Thema',
	'DIGESTS_POSTS_TYPE_ANY'			=> 'Alle Beiträge',
	'DIGESTS_POSTS_TYPE_FIRST'			=> 'Nur den ersten Beitrag eines Themas anzeigen',
	'DIGESTS_POWERED_BY'				=> 'phpbbservices.com',
	'DIGESTS_POWERED_BY_TEXT'			=> 'Digests extension for phpBB 3.1 created by',
	'DIGESTS_PRIVATE_MESSAGES_IN_DIGEST'	=> 'Meine ungelesenen Privaten Nachrichten mit anzeigen',
	'DIGESTS_PUBLISH_DATE'				=> 'Persönliche Zusammenfassung für %s vom %s',
	'DIGESTS_REGISTER'					=> 'Emfange regelmäßig eMail-Zusammenstellungen',
	'DIGESTS_REGISTER_EXPLAIN'			=> 'Die Standardvorgaben des Forums werden hier zunächst verwendet. Du kannst jedoch nach Abschluss der Registrierung noch individuelle Einstellungen im Persönlichen Bereich vornehmen und dort ggf.auch die eMail-Zusammenstellungen wieder abbestellen.',
	'DIGESTS_REMOVE_YOURS'				=> 'Entferne eigene Beiträge',
	'DIGESTS_REPLY'						=> 'Antwort',
	'DIGESTS_ROBOT'						=> 'Robot',
	'DIGESTS_SALUTATION' 				=> 'Hallo',
	'DIGESTS_SELECT_FORUMS'				=> 'Schließe Beiträge aus diesen Themenbereichen ein',
	'DIGESTS_SELECT_FORUMS_EXPLAIN'		=> 'Beachte, dass hier nur die Kategorien- und Themenbereiche aufgeführt werden, für die du auch eine Leseberechtigung hast. Die Themenbereichsselektion kann nicht verwendet werden, wenn du dich in der Vorauswahl für "Nur Lesezeichenthemen" entschieden hast. Passwortgeschützte Themenbereiche können nicht selektiert werden. Es muss mindestens ein Themenbereich ausgewählt werden.<br /><br />Fettgedruckte Themenbereiche werden aufgrund der Boardeinstellungen immer mit ausgegeben. Sie lassen sich nicht abwählen. Durchgestrichene Themenbereiche werden durch administrative Vorgaben immer ganz von der Wiedergabe in eMail-Zusammenfassungen ausgeschlossen. Sie lassen sich nicht selektieren.',
	'DIGESTS_SEND_HOUR' 				=> 'Sendeuhrzeit',
	'DIGESTS_SEND_HOUR_EXPLAIN'			=> 'Die Sendeuhrzeit gibt die jeweilige Stunde für die im Profil ausgewählte Zeitzone an, während der deine Zusammenfassung regelmäßig versandt werden soll.',
	'DIGESTS_SEND_IF_NO_NEW_MESSAGES'	=> 'Zusammenfassung auch ohne neue Beiträge versenden:',
	'DIGESTS_SEND_ON_NO_POSTS'	 		=> 'Zusammenfassung auch versenden, wenn es keine neuen Beiträge gibt',
	'DIGESTS_SENDER'	 				=> 'Absender',
	'DIGESTS_SENT_TO'					=> 'gesendet an',
	'DIGESTS_SENT_YOU_A_MESSAGE'		=> 'hat dir eine neue Private Nachricht mit folgendem Betreff gesendet:',
	'DIGESTS_SHOW_ATTACHMENTS' 			=> 'Zeige Datei-Anhänge',
	'DIGESTS_SHOW_ATTACHMENTS_EXPLAIN'	=> 'Wenn diese Option aktiviert ist, werden angehängte Grafiken in der Zusammenfassung jeweils am Ende des entsprechenden Beitrages oder der Privaten Nachricht mit eingefügt. Andere Dateien erscheinen in form eines Links (nur bei HTML-Zusammenfassungen). Auf den BBCode [img]-Tag hat das keinen Einfluss.',
	'DIGESTS_SHOW_NEW_POSTS_ONLY' 		=> 'Nur neue Beiträge anzeigen',
	'DIGESTS_SHOW_PMS' 					=> 'Meine Privaten Nachrichten anzeigen',
	'DIGESTS_SIZE_ERROR'				=> 'Dieser Wert muss angegeben werden. Es wird eine positive, ganze Zahl benötigt, die kleiner als oder gleich dem vom Administrator vorgegebene Maximalwert %s ist. Wenn dieser Wert auf Null steht, wurde keine Einschränkung vorgegeben.',
	'DIGESTS_SIZE_ERROR_MIN'			=> 'Hier muss entweder ein ganzzahliger Wert oder gar nichts stehen. Wenn der Wert Null ist, gibt es keine Einschränkung.',
	'DIGESTS_SKIP'						=> 'Zum Inhalt springen',
	'DIGESTS_SORT_BY'					=> 'Sortierreihenfolge',
	'DIGESTS_SORT_BY_EXPLAIN'			=> 'Die Beiträge werden immer wie auf der Übersichtsseite des Forums nach Kategorien und Themenbereichen angeordnet. Die Sortierkriterien beziehen sich nur auf die Sortierung innerhalb der Themenbereiche und Themen. Traditionelle Reihenfolge ist seit langem das Erstellungsdatum des Themas (absteigend) und dann innerhalb des Themas nach Erstellungszeitpunkt (aufsteigend).',
	'DIGESTS_SORT_FORUM_TOPIC'			=> 'Traditionelle Reihenfolge',
	'DIGESTS_SORT_FORUM_TOPIC_DESC'		=> 'Traditionelle Reihenfolge -> im Thema neueste Beiträge zuerst',
	'DIGESTS_SORT_POST_DATE'			=> 'älteste Beiträe zuerst',
	'DIGESTS_SORT_POST_DATE_DESC'		=> 'neueste Beiträe zuerst',
	'DIGESTS_SORT_USER_ORDER'			=> 'Standardeinstellung des Boards verwenden',
	'DIGESTS_SUBJECT_TITLE'				=> '%s - %s',
	'DIGESTS_TITLE'						=> 'Zusammenfassung',
	'DIGESTS_TOC'						=> 'Inhaltsverzeichnis',
	'DIGESTS_TOC_EXPLAIN'				=> 'Wenn das Board sehr aktiv ist, kann es sinnvoll sein, ein Inhaltsverzeichnis in die zusammenfassung zu integrieren. In HTML-Zusammenfassungen enthält das Inhaltsverzeichnis anklickbare Links zum entsprechenden Beitrag oder zur privaten Nachricht innerhalb der Zusammenfassung.',
	'DIGESTS_UNKNOWN'					=> 'Unbekannt',
	'DIGESTS_UNREAD'					=> 'Ungelesen',
	'DIGESTS_UPDATED'					=> 'Einstellung gespeichert',
	'DIGESTS_USE_BOOKMARKS'				=> 'Nur Lesezeichenthemen',
	'DIGESTS_WEEKDAY' => array(
		0	=> 'Sonntag',
		1 	=> 'Montag',
		2	=> 'Dienstag',
		3	=> 'Mittwoch',
		4	=> 'Donnerstag',
		5	=> 'Freitag',
		6	=> 'Samstag'),
	'DIGESTS_WEEKLY'					=> 'Wöchentliche Zusammenfassung',
	'DIGESTS_YOU_HAVE_PRIVATE_MESSAGES' => '%s hat Private Nachrichten erhalten',
	'DIGESTS_YOUR_DIGEST_OPTIONS' 		=> '%s\'s persönliche Einstellungen:',
	'UCP_DIGESTS'						=> 'eMail-Zusammenfassungen',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA'	=> 'Weitere Optionen',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA_OPTIONS'	=> 'Weitere Optionen',
	'UCP_DIGESTS_BASICS'				=> 'Grundeinstellungen',
	'UCP_DIGESTS_BASICS_OPTIONS'				=> 'Grundeinstellungen',
	'UCP_DIGESTS_FORUMS_SELECTION'		=> 'Themenbereichsauswahl',
	'UCP_DIGESTS_FORUMS_SELECTION_OPTIONS'		=> 'Themenbereichsauswahl',
	'UCP_DIGESTS_MODE_ERROR'			=> 'Fehlerhafter Zusammenfassungsmodus-Aufruf von %s',
	'UCP_DIGESTS_POST_FILTERS'			=> 'Beitragsfilter',
	'UCP_DIGESTS_POST_FILTERS_OPTIONS'			=> 'Beitragsfilter',
				
));
