#!/usr/bin/php
<?php

require_once('config.php');

$host = get_dbhost($hosts);
$sag = new Sag($host);
$myip4 = get_ip(4);

/*$g = json_decode('{
   "sip line{ACCOUNT} auth name": {
       "value": " {SIPAUTHNAME}"
   }}');
print_r($g);
sleep(888);
*/

$in = 

'

%SRV_{ACCOUNT}_SIP_UA_DATA_DOMAIN%:""
%SRV_{ACCOUNT}_SIP_URI_DOMAIN_CONFIG%:2
%SRV_{ACCOUNT}_SIP_UA_DATA_SERVER_PORT%:{PROXY_PORT}
%SRV_{ACCOUNT}_SIP_UA_DATA_SERVER_TYPE%:0
%SRV_{ACCOUNT}_SIP_UA_DATA_SERVER_IS_LOCAL%:1
%SRV_{ACCOUNT}_SIP_UA_DATA_REREG_TIME%:{Phone_Reregister_Prov}
%SRV_{ACCOUNT}_SIP_UA_DATA_PROXY_ADDR%:""
%SRV_{ACCOUNT}_DTMF_SIGNALLING%:1
%SRV_{ACCOUNT}_SIP_UA_CODEC_PRIORITY%:0, 1, 2, 4, 255
%SUBSCR_{ACCOUNT}_SIP_UA_DATA_SIP_NAME%:""
%SUBSCR_{ACCOUNT}_UA_DATA_DISP_NAME%:""
%SUBSCR_{ACCOUNT}_SIP_UA_DATA_SIP_NAME_ALIAS%:""
%SUBSCR_{ACCOUNT}_SIP_UA_DATA_VOICE_MAILBOX_NAME%:""
%SUBSCR_{ACCOUNT}_SIP_UA_DATA_VOICE_MAILBOX_NUMBER%:""
%SUBSCR_{ACCOUNT}_UA_DATA_AUTH_NAME%:""
%SUBSCR_{ACCOUNT}_UA_DATA_AUTH_PASS%:""
%CLIR_CODE_ENABLE_UA_{ACCOUNT}%:0
%CLIR_PREFIX_UA_{ACCOUNT}%:""
%SRV_{ACCOUNT}_SIP_UA_DATA_PROXY_PORT%:{PROXY_PORT}
%HANDSET_{ACCOUNT_2}_NAME%:""
%HANDSET_{ACCOUNT_2}_CW%:1
%HANDSET_{ACCOUNT_2}_DND%:0
%FWD_ON_BUSY_ACT_{ACCOUNT_2}%:""
%FWD_ON_BUSY_DEACT_{ACCOUNT_2}%:""
%FWD_ON_NO_ANSWER_ACT_{ACCOUNT_2}%:""
%FWD_ON_NO_ANSWER_DEACT_{ACCOUNT_2}%:""
%FWD_UNCOND_ACT_{ACCOUNT_2}%:"61*"
%FWD_UNCOND_DEACT_{ACCOUNT_2}%:""
%DECT_SUBS_{ACCOUNT_2}%:0, 0, 0, 0, 0

';

$out = plain2json($in, ':');

echo $out;



?>