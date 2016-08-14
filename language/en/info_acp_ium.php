<?php
/**
*
* @package phpBB Extension - Advanced Inactive User Manager
* @copyright (c) 2013 phpBB Group
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
    // Sort by, options for the inactive users list
        'ACP_IUM_TITLE'        =>  'IUM extension',
        'ACP_IUM'              =>  'IUM configuration',
        'ACP_IUM_LIST'         =>  'Inactive Users List',
        'ACP_IUM_INACTIVE'       =>  [  0   =>  'Is Active',
                                        1   =>  'Registration pre-activation',
                                        2   =>  'Profile change',
                                        3   =>  'Admin deactivated',
                                        4   =>  'Permanently Banned',
                                        5   =>  'Temporarily Banned'],
		'NEVER_CONNECTED'		=> 'User never connected',

    // Inactive users list
    'ACP_IUM_NODATE'        =>  'User is <strong>not</strong> disabled',
    'ACP_USERS_WITH_POSTS'  =>  'Show only users with posts',
    'LAST_SENT_REMINDER'    =>  'Previous Reminder',
    'NO_REMINDER_COUNT'     =>  'No reminders sent yet',
    'COUNT'                 =>  'Reminders Count',
    'NO_PREVIOUS_SENT_DATE' =>  'Not sent any reminders yet',
    'REMINDER_DATE'         =>  'Last Reminder Sent',
    'NO_REMINDER_SENT_YET'  =>  'Not sent any reminders yet',

    // ACP Settings
	'ANDREASK_IUM_ENABLE'       				=>  'Enable Advanced Inactive User Manager?',
	'ANDREASK_IUM_INTERVAL'             		=>  'Interval',
	'ANDREASK_IUM_EMAIL_LIMIT'					=>	'Limit E-mails',
	'ANDREASK_IUM_TOP_USER_THREADS'             =>  'Include user top threads?',
	'ANDREASK_IUM_TOP_USER_THREADS_COUNT'       =>  'How many threads?',
	'ANDREASK_IUM_TOP_FORUM_THREADS'          	=>  'Include forum top threads?',
	'ANDREASK_IUM_TOP_FORUM_THREADS_COUNT'    	=>  'How many threads?',
	'ANDREASK_IUM_SELF_DELETE'  				=> 	'User self delete',

	// ACP Explanations
	'ANDREASK_IUM_ENABLE_EXPLAIN'                   =>  'If enabled, the extension will start sending reminders to "sleepers". FOR NOW NON OF THESE CONFIGURATIONS ARE ACTIVE/WORKING <strong>EXT UNDER DEVELOPMENT</strong>',
	'ANDREASK_IUM_INTERVAL_EXPLAIN'                 =>  'It is the interval of days back to count to consider a user a "sleeper". Recommended is 30 days',
	'ANDREASK_IUM_EMAIL_LIMIT_EXPLAIN'				=>	'Amount of the reminders that can be sent per day. Recommended is ~250. But do check with your host for any limit of e-mails per day',
	'ANDREASK_IUM_TOP_USER_THREADS_EXPLAIN'         =>  'If enabled, mail will include users top active threads since users last visit.',
	'ANDREASK_IUM_TOP_USER_THREADS_COUNT_EXPLAIN'   =>  'Amount of user\'s top threads that should be included in e-mail',
	'ANDREASK_IUM_TOP_FORUM_THREADS_EXPLAIN'        =>  'If enabled, mail will include forum top threads since users last visit',
	'ANDREASK_IUM_TOP_FORUM_THREADS_COUNT_EXPLAIN'  =>  'Amount of forum threads that should be included in e-mail',
	'ANDREASK_IUM_SELF_DELETE_EXPLAIN'              =>  'If enabled, the user will be able to remove himself from the board.',

	// Legend
	'ACP_IUM_SETTINGS'              =>  'Inactive User Manager Settings',
	'ACP_IUM_MAIL_SETTINGS'         =>  'Reminder Settings',
	'ACP_IUM_MAIL_INCLUDE_SETTINGS'	=>  'Reminder Include Settings',
	'ACP_IUM_DANGER'				=>  'Danger Area',

));
