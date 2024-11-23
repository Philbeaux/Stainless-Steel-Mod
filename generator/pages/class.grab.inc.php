<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$oROkI23686218NDuzX=971006806;$lbGON65225525nswrf=490652679;$nWuRX75651551gRzzY=429800507;$WLnuv91526795LiPkU=944544037;$zayMy14413757mjNMY=692477020;$EvDfN60874939BQGUa=828693207;$ydZLW42472839Syimu=10786346;$ECezS85769959nPYQK=392850189;$VUINc92328797Yxotc=632478485;$HzvIf98711854WCziM=885764985;$tRLeq96481629qzhrJ=809303437;$vtksY32200622svzHc=559187592;$SagpR77431336dhLId=791011200;$DgOKM88736267pQDUj=661868012;$cgIYs57677918HaKyv=827351776;$ijMwL20818786fcNML=444556244;$rRwYR59721375YATPd=169075164;$LomQq30948181Baytr=157002288;$rnOxQ16061706yeWUk=64931366;$Kaavi51624451zYvpT=48956146;$OjSjc39198913QoDpc=764670380;$vwXwz15347595FxkWm=370167816;$tuFxW61632996ebPYy=520042206;$uvdEV34617615WqKae=371387298;$TzHyy15863952MpxiT=579796845;$qSXjt41934509HOpCQ=302364593;$vjqUx14391784TYpet=194684295;$zmZzr59798279HUZnu=412849701;$ANGpI79716492rVfTZ=613454559;$vUmli20708923Fiqgu=952592621;$uSdry54338074KbqNo=87857635;$nQqVE37166443ynATG=173343353;$neZmq50756531HxRmj=865643525;$LzPAW41670837VAOUs=322851898;$oXKKI91471863vwpzs=199562225;$xmHkz56722107EEPIw=651868256;$vYtqj18984069wToAL=337363739;$Dynjg14820251oGoCu=411142425;$EvkYw35793152HdKkY=529798065;$pbtlW28465271rSaPZ=849424408;$JYzJf74399109XnyLh=27615203;$HFAaz30157165mVQpW=218464203;$gcFLg67301941OdTEB=79565155;$DxqVe42395935PsZPd=766011811;$xyHLl37001648syxqC=935397919;$RnDpF87681580CfLvQ=743817230;$aXmqa95998230oeFac=846863495;$ggWaX98514100cekOa=401630463;$xejZB86791687xvwFO=63711883;$ltxKR97393494vZKIy=988201508;?><?php class SiteCrawler { var $T9jmfo_y7aKsyLu0 = array(); function F8eE_Rqcrb(&$a, $hAj_8ByddeCCh1lT, $r6DB_IVvhDlkKfN53, $vQG590i8y, $bEoirRlORmPAWbBHF, $a1WM9_ZFATayi = '') { global $grab_parameters; $KCZQduSVvXZZGY28 = parse_url($bEoirRlORmPAWbBHF); if($KCZQduSVvXZZGY28['scheme'] && substr($a, 0, 2) == '//') 
																										 $a = $KCZQduSVvXZZGY28['scheme'].':'.$a; $A1D6v6ZnT2du = @parse_url($a); if($A1D6v6ZnT2du['scheme'] && ($A1D6v6ZnT2du['scheme']!='http')&& ($A1D6v6ZnT2du['scheme']!='https')) { $XWHbijqSXRb = 1; }else { $a = str_replace(':80/', '/', $a); if($a[0]=='?')$a = preg_replace('#^([^\?]*?)([^/\?]*?)(\?.*)?$#','$2',$hAj_8ByddeCCh1lT).$a; if($grab_parameters['xs_inc_ajax'] && ($a[0] == '#')){ $vQG590i8y = preg_replace('#\#.*$#', '', $vQG590i8y); $a = $vQG590i8y . preg_replace('#^([^\#]*?/)?([^/\#]*)?(\#.*)?$#', '$2', $hAj_8ByddeCCh1lT).$a; } if(preg_match('#^https?(:|&\#58;)#is',$a)){ if(preg_match('#://[^/]*$#is',$a)) 
																										 $a .= '/'; } else if($a&&$a[0]=='/')$a = $r6DB_IVvhDlkKfN53.$a; else $a = $vQG590i8y.$a; $a=str_replace('/./','/',$a); if(substr($a,-2) == '..')$a.='/'; if(strstr($a,'../')){ preg_match('#(.*?:.*?//.*?)(/.*)$#',$a,$aa); 
																										 do{ $ap = $aa[2]; $aa[2] = preg_replace('#/?[^/]*/\.\.#','',$ap,1); }while($aa[2]!=$ap); $a = $aa[1].$aa[2]; } $a = preg_replace('#/\./#','/',$a); $a = str_replace('&#38;','&',$a); $a = str_replace('&#038;','&',$a); $a = str_replace('&amp;','&',$a); $a = preg_replace('#\#'.($grab_parameters['xs_inc_ajax']?'[^\!]':'').'.*$#','',$a); $a = preg_replace('#^([^\?]*[^/\:]/)/+#','\\1',$a); $a = preg_replace('#[\r\n]+#s','',$a); $XWHbijqSXRb = (strtolower(substr($a,0,strlen($bEoirRlORmPAWbBHF)) ) != strtolower($bEoirRlORmPAWbBHF)) ? 1 : 0; if($XWHbijqSXRb && $a1WM9_ZFATayi) { $JcUJ6noUPUWESUgG = $this->eufpjMrwNSVr($a1WM9_ZFATayi); if($JcUJ6noUPUWESUgG && preg_match('#('.$JcUJ6noUPUWESUgG.')#', $a)) $XWHbijqSXRb = 2; } } fTr9xtaaPTXU("<br/>($a - $XWHbijqSXRb - $hAj_8ByddeCCh1lT - $vQG590i8y - $r6DB_IVvhDlkKfN53)<br>\n",2); return $XWHbijqSXRb; } function eufpjMrwNSVr($Xm5TKOzcDly01EH2){ if(!isset($T9jmfo_y7aKsyLu0[$Xm5TKOzcDly01EH2])){ $T9jmfo_y7aKsyLu0[$Xm5TKOzcDly01EH2] = trim($Xm5TKOzcDly01EH2) ? preg_replace("#\s*[\r\n]+\s*#",'|', (strstr($s=trim($Xm5TKOzcDly01EH2),'*')?$s:preg_quote($s,'#'))) : ''; } return $T9jmfo_y7aKsyLu0[$Xm5TKOzcDly01EH2]; } function AdSeH3KPw4($cf9WUidVAtiud,&$urls_completed) { global $grab_parameters,$fqxdyrTNEz; error_reporting(E_ALL&~E_NOTICE); @set_time_limit($grab_parameters['xs_exec_time']); if($cf9WUidVAtiud['bgexec']) { ignore_user_abort(true); } register_shutdown_function('HuD2wJN0EuqGM6r'); if(function_exists('ini_set')) { @ini_set("zlib.output_compression", 0); @ini_set("output_buffering", 0); } $EAYwgabkhK76_CD = explode(" ",microtime()); $AfrvOmU2Ccm9JZj = $EAYwgabkhK76_CD[0]+$EAYwgabkhK76_CD[1]; $starttime = $Qv8G6NWw9S0ZcPxVV = time(); $hCqPL8RwlB = $nettime = 0; $euVHgD2C1lt = $cf9WUidVAtiud['initurl']; $CjkPFJQ1MJyQxogX = $cf9WUidVAtiud['maxpg']>0 ? $cf9WUidVAtiud['maxpg'] : 1E10; $JQWUXY4SUxk8P = $cf9WUidVAtiud['maxdepth'] ? $cf9WUidVAtiud['maxdepth'] : -1; $GO8TFrE_eI = $cf9WUidVAtiud['progress_callback']; $uneVFDEGBQ7F = $this->eufpjMrwNSVr($grab_parameters['xs_excl_urls']); $Z9jnRFv_FmHXN = $this->eufpjMrwNSVr($grab_parameters['xs_incl_urls']); $iFfOUCk1sFztqp = $ZxN8MjZW3uwPfqCTY = array(); $EeBf1fWg43a = preg_split('#[\r\n]+#', $grab_parameters['xs_ind_attr']); $kD52SIPb2Kr_e = '#200'.($grab_parameters['xs_allow_httpcode']?'|'.$grab_parameters['xs_allow_httpcode']:'').'#'; if($grab_parameters['xs_memsave']) { if(!file_exists(Jh02oPSmnHw)) mkdir(Jh02oPSmnHw, 0777); else if($cf9WUidVAtiud['resume']=='') G99nA35xjYQh(Jh02oPSmnHw, '.txt'); } foreach($EeBf1fWg43a as $ia) if($ia) { $is = explode(',', $ia); if($is[0][0]=='$') $foaeXizKT_CpOLBpUxK = substr($is[0], 1); else $foaeXizKT_CpOLBpUxK = str_replace(array('\\^', '\\$'), array('^','$'), preg_quote($is[0],'#')); $ZxN8MjZW3uwPfqCTY[] = $foaeXizKT_CpOLBpUxK; $iFfOUCk1sFztqp[str_replace(array('^','$'),array('',''),$is[0])] =  array('lm' => $is[1], 'f' => $is[2], 'p' => $is[3]); } if($ZxN8MjZW3uwPfqCTY) $U_QkBfcAHSK3Jphne = implode('|',$ZxN8MjZW3uwPfqCTY); $nipU07LHK6q = parse_url($euVHgD2C1lt); if(!$nipU07LHK6q['path']){$euVHgD2C1lt.='/';$nipU07LHK6q = parse_url($euVHgD2C1lt);} $tgZb22uxY5bw2uw = $fqxdyrTNEz->fetch($euVHgD2C1lt,0,true);// the first request is to skip session id 
																										 $wC_wuheBcmck1kAj4J = !preg_match($kD52SIPb2Kr_e,$tgZb22uxY5bw2uw['code']); if($wC_wuheBcmck1kAj4J) { $wC_wuheBcmck1kAj4J = ''; foreach($tgZb22uxY5bw2uw['headers'] as $k=>$v) $wC_wuheBcmck1kAj4J .= $k.': '.$v.'<br />'; return array( 'errmsg'=>'<b>There was an error while retrieving the URL specified:</b> '.$euVHgD2C1lt.''. ($tgZb22uxY5bw2uw['errormsg']?'<br><b>Error message:</b> '.$tgZb22uxY5bw2uw['errormsg']:''). '<br><b>HTTP Code:</b><br>'.$tgZb22uxY5bw2uw['protoline']. '<br><b>HTTP headers:</b><br>'.$wC_wuheBcmck1kAj4J. '<br><b>HTTP output:</b><br>'.$tgZb22uxY5bw2uw['content'] , ); } $euVHgD2C1lt = $tgZb22uxY5bw2uw['last_url']; $urls_completed = array(); $urls_ext = array(); $urls_404 = array(); $r6DB_IVvhDlkKfN53 = $nipU07LHK6q['scheme'].'://'.$nipU07LHK6q['host'].((!$nipU07LHK6q['port'] || ($nipU07LHK6q['port']=='80'))?'':(':'.$nipU07LHK6q['port'])); 
																										 $pn = $tsize = $retrno = $MWPxoCBCNe = $JtLwsGHOAgAKL7G = 0; $bEoirRlORmPAWbBHF = RT9GXtyabs__A($r6DB_IVvhDlkKfN53.'/', Hl4O6cWdjqldW6($nipU07LHK6q['path'])); $UDWzqkbDps6LuIKb = parse_url($bEoirRlORmPAWbBHF); $fjEvozDHHFDc3M3CP6e = preg_replace('#^.+://[^/]+#', '', $bEoirRlORmPAWbBHF); 
																										 $H2Ce2a0HmFxl = $fqxdyrTNEz->fetch($euVHgD2C1lt,0,true,true); $YC3JfNZl8Dgi = str_replace($bEoirRlORmPAWbBHF,'',$euVHgD2C1lt); $urls_list_full = array($YC3JfNZl8Dgi=>1); if(!$YC3JfNZl8Dgi)$YC3JfNZl8Dgi=''; $urls_list = array($YC3JfNZl8Dgi=>1); $urls_list2 = $urls_list_skipped = array(); $dKQpfil5C5 = array(); $links_level = 0; $sfFw7CUsV = $ref_links = $ref_links2 = array(); $HtFBZd5BGx4HvWf = 0; $QccFvjPC8i_jyI = $CjkPFJQ1MJyQxogX; if(!$grab_parameters['xs_progupdate'])$grab_parameters['xs_progupdate'] = 20; if(isset($grab_parameters['xs_robotstxt']) && $grab_parameters['xs_robotstxt']) { $JHGRPqNtoGHGfef4Ke = $fqxdyrTNEz->fetch($r6DB_IVvhDlkKfN53.'/robots.txt'); if($r6DB_IVvhDlkKfN53.'/' != $bEoirRlORmPAWbBHF) { $PSyERNx_fX3yH75 = $fqxdyrTNEz->fetch($bEoirRlORmPAWbBHF.'robots.txt'); $JHGRPqNtoGHGfef4Ke['content']  .= "\n".$PSyERNx_fX3yH75['content']; } $ra=preg_split('#user-agent:\s*#im',$JHGRPqNtoGHGfef4Ke['content']); $KasCb7mOKbPaieiEqd=array(); for($i=1;$i<count($ra);$i++){ preg_match('#^(\S+)(.*)$#s',$ra[$i],$LwDUDx9css267qOr); if($LwDUDx9css267qOr[1]=='*'||strstr($LwDUDx9css267qOr[1],'google')){ preg_match_all('#^disallow:\s*(\S*)#im',$LwDUDx9css267qOr[2],$rm); for($pi=0;$pi<count($rm[1]);$pi++) if($rm[1][$pi]) $KasCb7mOKbPaieiEqd[] =  str_replace('\\$','$', str_replace('\\*','.*', preg_quote($rm[1][$pi],'#') )); } } for($i=0;$i<count($KasCb7mOKbPaieiEqd);$i+=200) $t7fVZsI8scAQ[]=implode('|', array_slice($KasCb7mOKbPaieiEqd, $i,200)); }else $t7fVZsI8scAQ = array(); if($grab_parameters['xs_inc_ajax']) $grab_parameters['xs_proto_skip'] = str_replace( '\#', '\#[^\!]', $grab_parameters['xs_proto_skip']); $gnFe1_ACf3THo5fSVT = $grab_parameters['xs_exc_skip']!='\\.()'; $GemKMfObNXtkeAmJ = $grab_parameters['xs_inc_skip']!='\\.()'; $grab_parameters['xs_inc_skip'] .= '$'; $grab_parameters['xs_exc_skip'] .= '$'; if($grab_parameters['xs_debug']) { $_GET['ddbg']=1; PvFdgEcx0laOpBsp(); } $UCLXWT4Aa = 0; $VlDIpY74Sn = array(); $url_ind = 0; $cnu = 1; $pf = cVhR96lmkjBRF(fSB9ZrUIK4aICK6XAM.hE3J3lTm1xrJcz5CHD,'w');fclose($pf); $EqTqRHeveBfe7FPkbf = false; if($cf9WUidVAtiud['resume']!=''){ $SQEm27RfvIaD6r = @W4Xzu7_XRKxGlHA(pUvA4zhAkYZK2Nd8A(fSB9ZrUIK4aICK6XAM.t_LlD5p6PQKvgvIZpP9)); if($SQEm27RfvIaD6r) { $EqTqRHeveBfe7FPkbf = true; echo 'Resuming the last session (last updated: '.date('Y-m-d H:i:s',$SQEm27RfvIaD6r['time']).')'."\n"; extract($SQEm27RfvIaD6r); $AfrvOmU2Ccm9JZj-=$ctime; $UCLXWT4Aa = $ctime; unset($SQEm27RfvIaD6r); } } $YWmYVMCd_Z1Jkw = 0; if(!$EqTqRHeveBfe7FPkbf){ if($grab_parameters['xs_moreurls']){ $mu = preg_split('#[\r\n]+#', $grab_parameters['xs_moreurls']); foreach($mu as $PQ88kZzO1uRFvk){ $PQ88kZzO1uRFvk = str_replace($bEoirRlORmPAWbBHF, '', $PQ88kZzO1uRFvk); if(!strstr($PQ88kZzO1uRFvk, '://')) 
																										 $urls_list[$PQ88kZzO1uRFvk]++; } } if($grab_parameters['xs_prev_sm_base']){ global $YqmHm1EmL4XW25O; $wUBAvDKke4zaEU = basename($grab_parameters['xs_smname']); $YqmHm1EmL4XW25O->Zul57HOZFkqdgOyF8 = ($grab_parameters['xs_compress']==1) ? '.gz' : ''; $QNdFgXJfTcWVf = $YqmHm1EmL4XW25O->JAvBiMmjzH($wUBAvDKke4zaEU, 0, $bEoirRlORmPAWbBHF); if(!$grab_parameters['xs_prev_sm_base_min'] ||  (count($QNdFgXJfTcWVf)>$grab_parameters['xs_prev_sm_base_min'])) { $urls_list = array_merge($urls_list, $QNdFgXJfTcWVf); } unset($QNdFgXJfTcWVf); } $YWmYVMCd_Z1Jkw = count($urls_list); $urls_list_full = $urls_list; $cnu = count($urls_list); } $YPbrrsyP5iHhPWM9NQQ = explode('|', $grab_parameters['xs_force_inc']); sleep(1); @xnDpYg7WwA0(fSB9ZrUIK4aICK6XAM.hE3J3lTm1xrJcz5CHD); if($urls_list) do { list($hAj_8ByddeCCh1lT, $NCzIEhBxs5f) = each($urls_list); $ByzJ33WTH1 = ($NCzIEhBxs5f>0 && $NCzIEhBxs5f<1) ? $NCzIEhBxs5f : 0; $url_ind++; fTr9xtaaPTXU("\n[ $url_ind - $hAj_8ByddeCCh1lT, $NCzIEhBxs5f] \n"); unset($urls_list[$hAj_8ByddeCCh1lT]); $kCPGNzrIjuQgkoxBRP = fGokyqo8tR33zzFafi3($hAj_8ByddeCCh1lT); $PRKe3jTsdEw9doYFe = false; $nhWfabNEx6iJ = ''; $tgZb22uxY5bw2uw = array(); $cn = ''; if(isset($dKQpfil5C5[$hAj_8ByddeCCh1lT])) $hAj_8ByddeCCh1lT=$dKQpfil5C5[$hAj_8ByddeCCh1lT]; $f = $gnFe1_ACf3THo5fSVT && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$hAj_8ByddeCCh1lT); if($uneVFDEGBQ7F&&!$f)$f=$f||preg_match('#('.$uneVFDEGBQ7F.')#',$hAj_8ByddeCCh1lT); if($t7fVZsI8scAQ&&!$f) foreach($t7fVZsI8scAQ as $bm) { $f = $f||preg_match('#^('.$bm.')#',$fjEvozDHHFDc3M3CP6e.$hAj_8ByddeCCh1lT); } $f2 = false; if(!$f) { $f2 = $GemKMfObNXtkeAmJ && preg_match('#'.$grab_parameters['xs_inc_skip'].'#i',$hAj_8ByddeCCh1lT); if($Z9jnRFv_FmHXN&&!$f2) $f2 = $f2||(preg_match('#('.$Z9jnRFv_FmHXN.')#',$hAj_8ByddeCCh1lT)); if($grab_parameters['xs_parse_only'] && !$f2 && $hAj_8ByddeCCh1lT!='/') { $f2 = $f2 || !preg_match('#'.str_replace(' ', '|', preg_quote($grab_parameters['xs_parse_only'],'#')).'#',$hAj_8ByddeCCh1lT); } } do{ $sWXwYhEBFg = count($urls_list)+count($urls_list2)+count($urls_completed);         $f3 = $YPbrrsyP5iHhPWM9NQQ[2] && ( ($QccFvjPC8i_jyI*$YPbrrsyP5iHhPWM9NQQ[2]+1000)< ($E09KaZe4IW-$url_ind-$YWmYVMCd_Z1Jkw)); if(!$f && !$f2) { $fMwzFU9kjTU = ($YPbrrsyP5iHhPWM9NQQ[1] &&  ( (($ctime>$YPbrrsyP5iHhPWM9NQQ[0]) && ($pn>$CjkPFJQ1MJyQxogX*$YPbrrsyP5iHhPWM9NQQ[1])) || $f3));	 $aBb5M7SvBOsEIqI7t = ($YPbrrsyP5iHhPWM9NQQ[3] && $CjkPFJQ1MJyQxogX && (($sWXwYhEBFg>$CjkPFJQ1MJyQxogX*$YPbrrsyP5iHhPWM9NQQ[3]))); if($YPbrrsyP5iHhPWM9NQQ[3] && $CjkPFJQ1MJyQxogX && (($pn>$CjkPFJQ1MJyQxogX*$YPbrrsyP5iHhPWM9NQQ[3]))){ $urls_list=$urls_list2=array(); $cnu=0; } if($JQWUXY4SUxk8P<=0 || $links_level<$JQWUXY4SUxk8P) { $OCFdVAYmxKRN = RT9GXtyabs__A($bEoirRlORmPAWbBHF, $hAj_8ByddeCCh1lT); fTr9xtaaPTXU("<h4> { $OCFdVAYmxKRN } </h4>\n"); $aWQSGn6KWTk7x4HBX3=0; $HewsHj0TO=array_sum(explode(' ', microtime())); $MWPxoCBCNe++; do { $tgZb22uxY5bw2uw = $fqxdyrTNEz->fetch($OCFdVAYmxKRN, 0, 0); $_to = $tgZb22uxY5bw2uw['flags']['socket_timeout']; if($_to && ($UDWzqkbDps6LuIKb['host']!=$tgZb22uxY5bw2uw['purl']['host'])){ $tgZb22uxY5bw2uw['flags']['error'] = 'Host doesn\'t match'; } $WFYPUhXuj = (intval($tgZb22uxY5bw2uw['code'] == 400)); $zAWJdA8vkogW = (intval($tgZb22uxY5bw2uw['code'] == 403)); if( !$tgZb22uxY5bw2uw['flags']['error'] &&  (($WFYPUhXuj||$zAWJdA8vkogW)||!$tgZb22uxY5bw2uw['code'] || $_to) ) { $aWQSGn6KWTk7x4HBX3++; $sl = $grab_parameters['xs_delay_ms']?$grab_parameters['xs_delay_ms']:1; if(($_to) && $grab_parameters['xs_timeout_break']){ fTr9xtaaPTXU("<p> # TIMEOUT - $_to #</p>\n"); if($aWQSGn6KWTk7x4HBX3==3){ if(strstr($_to,'read') ){ fTr9xtaaPTXU("<p> read200 break?</p>\n"); break ; } if($JtLwsGHOAgAKL7G++>5) { $sqj4yHCj873BP = "Too many timeouts detected"; break 2; } fTr9xtaaPTXU("<p> # MULTI TIMEOUT - BREAK #</p>\n"); $sl = 60;	    			 $aWQSGn6KWTk7x4HBX3 = 0; } } fTr9xtaaPTXU("<p> # RETRY - ".$tgZb22uxY5bw2uw['code']." - ".(intval($tgZb22uxY5bw2uw['code']))." - ".$tgZb22uxY5bw2uw['flags']['error']."#</p>\n"); sleep($_sl); } else  break; }while($aWQSGn6KWTk7x4HBX3<3); $BiONb5bgRD = array_sum(explode(' ', microtime()))-$HewsHj0TO; $nettime+=$BiONb5bgRD; fTr9xtaaPTXU("<hr>\n[[[ ".$tgZb22uxY5bw2uw['code']." ]]] - ".number_format($BiONb5bgRD,2)."s (".number_format($fqxdyrTNEz->HqI1O8vynO4EtneR4A5,2).' + '.number_format($fqxdyrTNEz->dr1lN9apl,2).")\n".var_export($tgZb22uxY5bw2uw['headers'],1)); $tKVE8xlfmzSWy = is_array($tgZb22uxY5bw2uw['headers']) ? strtolower($tgZb22uxY5bw2uw['headers']['content-type']) : ''; $O2Mt183Pc1Aha = strstr($tKVE8xlfmzSWy,'text/html') || strstr($tKVE8xlfmzSWy,'/xhtml') || !$tKVE8xlfmzSWy; if($tKVE8xlfmzSWy && !$O2Mt183Pc1Aha && (!$grab_parameters['xs_parse_swf'] || !strstr($tKVE8xlfmzSWy, 'shockwave-flash')) ){ if(!$fMwzFU9kjTU){ $nhWfabNEx6iJ = $tKVE8xlfmzSWy; continue; } } $XRO51vKxh3AQ = array(); if($tgZb22uxY5bw2uw['code']==404){ if($links_level>0) if(!$grab_parameters['xs_chlog_list_max'] || count($urls_404) < $grab_parameters['xs_chlog_list_max']) { $urls_404[]=array($hAj_8ByddeCCh1lT,$ref_links2[$hAj_8ByddeCCh1lT]); } } if($grab_parameters['xs_canonical']) if(($OCFdVAYmxKRN == $tgZb22uxY5bw2uw['last_url']) && preg_match('#<link[^>]*rel="canonical"[^>]href="([^>]*?)"#', $cn, $nU8Mj5ZUWIEjvw)) $tgZb22uxY5bw2uw['last_url'] = $nU8Mj5ZUWIEjvw[1]; $VTQP1ue8oY1PvdK = preg_replace('#^.*?'.preg_quote($bEoirRlORmPAWbBHF,'#').'#','',$tgZb22uxY5bw2uw['last_url']); if(($OCFdVAYmxKRN != $tgZb22uxY5bw2uw['last_url']) && ($OCFdVAYmxKRN != $tgZb22uxY5bw2uw['last_url'].'/')) { $dKQpfil5C5[$hAj_8ByddeCCh1lT]=$tgZb22uxY5bw2uw['last_url']; $io=$hAj_8ByddeCCh1lT; if(!$urls_list_full[$VTQP1ue8oY1PvdK]) { $urls_list2[$VTQP1ue8oY1PvdK]++; if(count($ref_links[$VTQP1ue8oY1PvdK])<max(1,intval($grab_parameters['xs_maxref']))) $ref_links[$VTQP1ue8oY1PvdK][] = $hAj_8ByddeCCh1lT; } $nhWfabNEx6iJ = 'lu'; if(!$fMwzFU9kjTU)continue; } if($kD52SIPb2Kr_e && !preg_match($kD52SIPb2Kr_e,$tgZb22uxY5bw2uw['code'])){ $nhWfabNEx6iJ = $tgZb22uxY5bw2uw['code']; continue; } $cn = $tgZb22uxY5bw2uw['content']; $tsize+=strlen($cn); $retrno++; if($w1CLxCPhUy9qzof = preg_replace('#<!--(\[if IE\]>|.*?-->)#is', '',$cn)) $cn = $w1CLxCPhUy9qzof; preg_match('#<base[^>]*?href=[\'"](.*?)[\'"]#is',$cn,$bm); if(isset($bm[1])&&$bm[1]) $vQG590i8y = Hl4O6cWdjqldW6($bm[1].(preg_match('#//.*/#',$bm[1])?'-':'/-')); 
																										 else $vQG590i8y = Hl4O6cWdjqldW6($bEoirRlORmPAWbBHF.$hAj_8ByddeCCh1lT); if($fMwzFU9kjTU||$aBb5M7SvBOsEIqI7t) { $O2Mt183Pc1Aha = false; } if(strstr($tKVE8xlfmzSWy, 'shockwave-flash') && $grab_parameters['xs_parse_swf']) { include_once yCwTqe5GDcta.'class.pfile.inc.php'; $am = new SWFParser(); $am->h8i3gNivayoQQtqpLY($cn); $fDfweZzwnbqVpWJD9 = $am->D1tXUjHdde7g1(); }else if($O2Mt183Pc1Aha) { $C4eNpUO4wlSz1ZekLcc = $grab_parameters['xs_utf8_enc'] ? 'isu':'is'; preg_match_all('#<(?:a|area|go)\s(?:[^>]*?\s)?href\s*=\s*(?:"([^"]*)|\'([^\']*)|([^\s\"\\\\>]+)).*?>#is'.$C4eNpUO4wlSz1ZekLcc, $cn, $am);
																										
																										
																										preg_match_all('#<i?frame\s[^>]*?src\s*=\s*["\']?(.*?)("|>|\')#is', $cn, $eA1uPQAzcVCQ8);
																										
																										preg_match_all('#<meta\s[^>]*http-equiv\s*=\s*"?refresh[^>]*URL\s*=\s*["\']?(.*?)("|>|\'[>\s])#'.$C4eNpUO4wlSz1ZekLcc, $cn, $Am1CLOE5I);
																										
																										if($grab_parameters['xs_parse_swf'])
																										
																										preg_match_all('#<object[^>]*application/x-shockwave-flash[^>]*data\s*=\s*["\']([^"\'>]+).*?>#'.$C4eNpUO4wlSz1ZekLcc, $cn, $fDfweZzwnbqVpWJD9);
																										
																										else $fDfweZzwnbqVpWJD9 = array(array(),array());
																										
																										
																										$XRO51vKxh3AQ = array();
																										
																										for($i=0;$i<count($am[1]);$i++)
																										
																										{
																										
																										if( !preg_match('#rel=["\']nofollow#i', $am[0][$i]) ) 
																										
																										$XRO51vKxh3AQ[] = $am[1][$i];
																										
																										}
																										
																										$XRO51vKxh3AQ = @array_merge(
																										
																										$XRO51vKxh3AQ,
																										
																										
																										$am[2],$am[3],  
																										
																										$eA1uPQAzcVCQ8[1],$Am1CLOE5I[1],
																										
																										$fDfweZzwnbqVpWJD9[1]);
																										
																										}
																										
																										$XRO51vKxh3AQ = array_unique($XRO51vKxh3AQ);
																										
																										
																										
																										$nn = $nt = 0;
																										
																										reset($XRO51vKxh3AQ);
																										
																										if(preg_match('#<meta name="robots" content="[^"]*?nofollow#is',$cn))
																										
																										$XRO51vKxh3AQ = array();
																										
																										if(!$VlDIpY74Sn['charset']){
																										
																										if(preg_match('#<meta\s+http-equiv="content-type"[^>]*?charset=([^">]*)"#is',$cn, $EA_T0CYlIF6tb7UtP))
																										
																										$VlDIpY74Sn['charset'] = $EA_T0CYlIF6tb7UtP[1];
																										
																										}
																										
																										foreach($XRO51vKxh3AQ as $i=>$ll)
																										
																										if($ll)
																										
																										{                    
																										
																										$a = $sa = trim($ll);
																										
																										
																										if($grab_parameters['xs_proto_skip'] && 
																										
																										(preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',$a)||
																										
																										($gnFe1_ACf3THo5fSVT && preg_match('#'.$grab_parameters['xs_exc_skip'].'#i',$a))||
																										
																										preg_match('#^'.$grab_parameters['xs_proto_skip'].'#i',function_exists('html_entity_decode')?html_entity_decode($a):$a)
																										
																										))
																										
																										continue;
																										
																										
																										if(strlen($a) > 2048) continue;
																										
																										$XWHbijqSXRb = $this->F8eE_Rqcrb($a, $hAj_8ByddeCCh1lT, $r6DB_IVvhDlkKfN53, $vQG590i8y, $bEoirRlORmPAWbBHF);
																										
																										if($XWHbijqSXRb == 1)
																										
																										{
																										
																										if($grab_parameters['xs_extlinks'] &&
																										
																										(!$grab_parameters['xs_extlinks_excl'] || !preg_match('#'.$this->eufpjMrwNSVr($grab_parameters['xs_extlinks_excl']).'#',$a)) &&
																										
																										(!$grab_parameters['xs_ext_max'] || (count($urls_ext)<$grab_parameters['xs_ext_max']))
																										
																										)
																										
																										{
																										
																										if(!$urls_ext[$a] && 
																										
																										(!$grab_parameters['xs_ext_skip'] || 
																										
																										!preg_match('#'.$grab_parameters['xs_ext_skip'].'#',$a)
																										
																										)
																										
																										)
																										
																										$urls_ext[$a] = $OCFdVAYmxKRN;
																										
																										}
																										
																										continue;
																										
																										}
																										
																										$VTQP1ue8oY1PvdK = $XWHbijqSXRb ? $a : substr($a,strlen($bEoirRlORmPAWbBHF));
																										
																										$VTQP1ue8oY1PvdK = str_replace(' ', '%20', $VTQP1ue8oY1PvdK);
																										
																										if($grab_parameters['xs_cleanurls'])
																										
																										$VTQP1ue8oY1PvdK = @preg_replace($grab_parameters['xs_cleanurls'],'',$VTQP1ue8oY1PvdK);
																										
																										if($grab_parameters['xs_cleanpar'])
																										
																										{
																										
																										do {
																										
																										$Kl6oIfEwKD_U = $VTQP1ue8oY1PvdK;
																										
																										$VTQP1ue8oY1PvdK = @preg_replace('#[\\?\\&]('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\-\.\_\=\/]+$#i','',$VTQP1ue8oY1PvdK);
																										
																										$VTQP1ue8oY1PvdK = @preg_replace('#([\\?\\&])('.$grab_parameters['xs_cleanpar'].')=[a-z0-9\-\.\_\=\/]+&#i','$1',$VTQP1ue8oY1PvdK);
																										
																										}while($VTQP1ue8oY1PvdK != $Kl6oIfEwKD_U);
																										
																										}
																										
																										if($urls_list_full[$VTQP1ue8oY1PvdK] || ($VTQP1ue8oY1PvdK == $hAj_8ByddeCCh1lT))
																										
																										continue;
																										
																										if($grab_parameters['xs_exclude_check'])
																										
																										{
																										
																										$_f=$_f2=false;
																										
																										$_f=$uneVFDEGBQ7F&&preg_match('#('.$uneVFDEGBQ7F.')#',$VTQP1ue8oY1PvdK);
																										
																										if($t7fVZsI8scAQ&&!$_f)
																										
																										foreach($t7fVZsI8scAQ as $bm)
																										
																										$_f = $_f||preg_match('#^('.$bm.')#',$fjEvozDHHFDc3M3CP6e.$VTQP1ue8oY1PvdK);
																										
																										
																										
																										if($_f)continue;
																										
																										}
																										
																										fTr9xtaaPTXU("<u>[$VTQP1ue8oY1PvdK]</u><br>\n",3);//exit;
																										
																										$urls_list2[$VTQP1ue8oY1PvdK]++;
																										
																										if($grab_parameters['xs_maxref'] && count($ref_links[$VTQP1ue8oY1PvdK])<$grab_parameters['xs_maxref'])
																										
																										$ref_links[$VTQP1ue8oY1PvdK][] = $hAj_8ByddeCCh1lT;
																										
																										$nt++;
																										
																										}
																										
																										unset($XRO51vKxh3AQ);
																										
																										}
																										
																										}
																										
																										
																										
																										if($grab_parameters['xs_incl_only'] && !$f)
																										
																										$f = $f || !preg_match('#'.str_replace(' ', '|', preg_quote($grab_parameters['xs_incl_only'],'#')).'#',$bEoirRlORmPAWbBHF.$hAj_8ByddeCCh1lT);
																										
																										if(!$f) {
																										
																										$f = $f||preg_match('#<meta name="robots" content="[^"]*?noindex#is',$cn);
																										
																										if($f)$nhWfabNEx6iJ = 'mrob';
																										
																										}
																										
																										if(!$f)
																										
																										{
																										
																										$RoI8NMX2YhCI5phmR = array(
																										
																										
																										'link'=>preg_replace('#//+$#','/', preg_replace('#^([^/\:\?]/)/+#','\\1',$bEoirRlORmPAWbBHF.$hAj_8ByddeCCh1lT))
																										
																										);
																										
																										if($grab_parameters['xs_makehtml']||$grab_parameters['xs_makeror']||$grab_parameters['xs_rssinfo'])
																										
																										{
																										
																										preg_match('#<title>([^<]*?)</title>#is', $tgZb22uxY5bw2uw['content'], $JlJYKIIrEYn6);
																										
																										$RoI8NMX2YhCI5phmR['t'] = strip_tags($JlJYKIIrEYn6[1]);
																										
																										}
																										
																										if($grab_parameters['xs_metadesc'])
																										
																										{
																										
																										preg_match('#<meta\s[^>]*(?:http-equiv|name)\s*=\s*"?description[^>]*content\s*=\s*["]?([^>\"]*)#is', $cn, $bG6_Xft9xSIFOd);
																										
																										if($bG6_Xft9xSIFOd[1])
																										
																										$RoI8NMX2YhCI5phmR['d'] = $bG6_Xft9xSIFOd[1];
																										
																										}
																										
																										if($grab_parameters['xs_makeror']||$grab_parameters['xs_autopriority'])
																										
																										$RoI8NMX2YhCI5phmR['o'] = max(0,$links_level);
																										
																										if($ByzJ33WTH1)
																										
																										$RoI8NMX2YhCI5phmR['p'] = $ByzJ33WTH1;
																										
																										if(preg_match('#('.$U_QkBfcAHSK3Jphne.')#',$bEoirRlORmPAWbBHF.$hAj_8ByddeCCh1lT,$f3rjBPjAjA5g2vr3_l))
																										
																										{
																										
																										$RoI8NMX2YhCI5phmR['clm'] = $iFfOUCk1sFztqp[$f3rjBPjAjA5g2vr3_l[1]]['lm'];
																										
																										$RoI8NMX2YhCI5phmR['f'] = $iFfOUCk1sFztqp[$f3rjBPjAjA5g2vr3_l[1]]['f'];
																										
																										$RoI8NMX2YhCI5phmR['p'] = $iFfOUCk1sFztqp[$f3rjBPjAjA5g2vr3_l[1]]['p'];
																										
																										}
																										
																										
																										
																										
																										
																										if($grab_parameters['xs_lastmod_notparsed'] && $f2)
																										
																										{
																										
																										$tgZb22uxY5bw2uw = $fqxdyrTNEz->fetch($OCFdVAYmxKRN, 0, 1, false, "", array('req'=>'HEAD'));
																										
																										
																										}
																										
																										if(!$RoI8NMX2YhCI5phmR['lm'] && isset($tgZb22uxY5bw2uw['headers']['last-modified']))
																										
																										$RoI8NMX2YhCI5phmR['lm']=$tgZb22uxY5bw2uw['headers']['last-modified'];
																										
																										fTr9xtaaPTXU("\n((include ".$RoI8NMX2YhCI5phmR['link']."))<br />\n");
																										
																										$PRKe3jTsdEw9doYFe = true;
																										
																										if($grab_parameters['xs_memsave'])
																										
																										{
																										
																										FRy4YMXr_PT($kCPGNzrIjuQgkoxBRP, $RoI8NMX2YhCI5phmR);
																										
																										$urls_completed[] = $kCPGNzrIjuQgkoxBRP;
																										
																										}else
																										
																										$urls_completed[] = serialize($RoI8NMX2YhCI5phmR);
																										
																										$QccFvjPC8i_jyI = $CjkPFJQ1MJyQxogX - count($urls_completed);
																										
																										}
																										
																										}while(false);// zerowhile
																										
																										if($url_ind>=$cnu)
																										
																										{
																										
																										unset($urls_list);
																										
																										$url_ind = 0;
																										
																										$urls_list = $urls_list2;
																										
																										$urls_list_full = array_merge($urls_list_full,$urls_list);
																										
																										$cnu = count($urls_list);
																										
																										unset($ref_links2);
																										
																										$ref_links2 = $ref_links;
																										
																										unset($ref_links); unset($urls_list2);
																										
																										$ref_links = array();
																										
																										$urls_list2 = array();
																										
																										$links_level++;
																										
																										fTr9xtaaPTXU("\n<br>NEXT LEVEL:$links_level<br />\n");
																										
																										}
																										
																										if(!$PRKe3jTsdEw9doYFe){
																										
																										
																										fTr9xtaaPTXU("\n({skipped ".$hAj_8ByddeCCh1lT."})<br />\n");
																										
																										if(!$grab_parameters['xs_chlog_list_max'] ||
																										
																										count($urls_list_skipped) < $grab_parameters['xs_chlog_list_max']) {
																										
																										$urls_list_skipped[$hAj_8ByddeCCh1lT]=$nhWfabNEx6iJ;
																										
																										}
																										
																										}
																										
																										$pn++;
																										
																										$EAYwgabkhK76_CD=explode(" ",microtime());
																										
																										$ctime = $EAYwgabkhK76_CD[0]+$EAYwgabkhK76_CD[1] - $AfrvOmU2Ccm9JZj;
																										
																										W5mf7Y9Huk0KaQU6();
																										
																										$pl=min($cnu-$url_ind,$QccFvjPC8i_jyI);
																										
																										if( ($cnu==$url_ind || $pl==0||$pn==1 || ($pn%$grab_parameters['xs_progupdate'])==0)
																										
																										|| ($ctime - $YO9KYM6L6wDupmsp > 5)
																										
																										|| count($urls_completed)>=$CjkPFJQ1MJyQxogX)
																										
																										{
																										
																										
																										$YO9KYM6L6wDupmsp = $sQy6U3e_rh2YW;
																										
																										if(strstr($H2Ce2a0HmFxl['content'],'header'))break;
																										
																										global $m8;
																										
																										$mu = function_exists('memory_get_usage') ? memory_get_usage() : '-';
																										
																										$hCqPL8RwlB = max($hCqPL8RwlB, $mu);
																										
																										if($mu>$m8+1000000){
																										
																										$m8 = $mu;
																										
																										$cc = ' style="color:red"';
																										
																										}else $cc='';
																										
																										if(intval($mu))
																										
																										$mu = number_format($mu/1024,1).' Kb';
																										
																										fTr9xtaaPTXU("\n(<span".$cc.">memory".($cc?' up':'').": $mu</span>)<br>\n");
																										
																										$GnA2ZwNlZxCw9Rgpu = (count($urls_completed)>=$CjkPFJQ1MJyQxogX) || ($url_ind>=$cnu);
																										
																										$progpar = array(
																										
																										$ctime, // 0. running time
																										
																										str_replace($euVHgD2C1lt, '', $hAj_8ByddeCCh1lT),  // 1. current URL
																										
																										$pl,                    // 2. urls left
																										
																										$pn,                    // 3. processed urls
																										
																										$tsize,                 // 4. bandwidth usage
																										
																										$links_level,           // 5. depth level
																										
																										$mu,                    // 6. memory usage
																										
																										count($urls_completed), // 7. added in sitemap
																										
																										count($urls_list2),     // 8. in the queue
																										
																										$nettime,	// 9. network time
																										
																										$BiONb5bgRD, // 10. last net time
																										
																										);
																										
																										if($cf9WUidVAtiud['bgexec']){
																										
																										if(time()-$lrwvB0xvcXXumi3V>5){
																										
																										$lrwvB0xvcXXumi3V = time();
																										
																										m0HngeVPuiULaXDb(w7NW0sRCh2KBF74Bo,wJu5NxAjkFkQBpMse($progpar));
																										
																										}
																										
																										}
																										
																										if($GO8TFrE_eI && !$f)
																										
																										$GO8TFrE_eI($progpar);
																										
																										
																										}else
																										
																										{
																										
																										$GO8TFrE_eI(array('cmd'=>'ping', 'bg' => $cf9WUidVAtiud['bgexec']));
																										
																										}
																										
																										if(!$sqj4yHCj873BP) {
																										
																										if($sqj4yHCj873BP = file_exists($dREpFQ5xuzJSkbpu7AS=fSB9ZrUIK4aICK6XAM.hE3J3lTm1xrJcz5CHD)){
																										
																										if(!@xnDpYg7WwA0($dREpFQ5xuzJSkbpu7AS))
																										
																										$sqj4yHCj873BP=0;
																										
																										}
																										
																										}
																										
																										if($grab_parameters['xs_exec_time'] && 
																										
																										((time()-$Qv8G6NWw9S0ZcPxVV) > $grab_parameters['xs_exec_time']) ){
																										
																										$sqj4yHCj873BP = 'Time limit exceeded - '.($grab_parameters['xs_exec_time']).' - '.(time()-$Qv8G6NWw9S0ZcPxVV);
																										
																										}
																										
																										if($grab_parameters['xs_savestate_time']>0 &&
																										
																										( 
																										
																										($ctime-$UCLXWT4Aa>$grab_parameters['xs_savestate_time'])
																										
																										|| $GnA2ZwNlZxCw9Rgpu
																										
																										|| $sqj4yHCj873BP
																										
																										)
																										
																										)
																										
																										{
																										
																										$UCLXWT4Aa = $ctime;
																										
																										fTr9xtaaPTXU("(saving dump)<br />\n");
																										
																										$SQEm27RfvIaD6r = compact('url_ind',
																										
																										'urls_list','urls_list2','cnu',
																										
																										'ref_links','ref_links2',
																										
																										'urls_list_full','urls_completed',
																										
																										'urls_404',
																										
																										'nt','tsize','pn','links_level','ctime', 'urls_ext',
																										
																										'starttime', 'retrno', 'nettime', 'urls_list_skipped',
																										
																										'imlist', 'progpar', 'runstate'
																										
																										);
																										
																										$SQEm27RfvIaD6r['time']=time();
																										
																										$iM0z82gnwPfmE0lYG=wJu5NxAjkFkQBpMse($SQEm27RfvIaD6r);
																										
																										m0HngeVPuiULaXDb(t_LlD5p6PQKvgvIZpP9,$iM0z82gnwPfmE0lYG);
																										
																										unset($SQEm27RfvIaD6r);
																										
																										unset($iM0z82gnwPfmE0lYG);
																										
																										}
																										
																										if($grab_parameters['xs_delay_req'] && $grab_parameters['xs_delay_ms'] &&
																										
																										(($MWPxoCBCNe%$grab_parameters['xs_delay_req'])==0))
																										
																										{
																										
																										sleep($grab_parameters['xs_delay_ms']);
																										
																										}
																										
																										}while(!$GnA2ZwNlZxCw9Rgpu && !$sqj4yHCj873BP);
																										
																										fTr9xtaaPTXU("\n\n<br><br>Crawling completed<br>\n");
																										
																										if($_GET['ddbgexit'])exit;
																										
																										return array(
																										
																										'u404'=>$urls_404,
																										
																										'starttime'=>$starttime,
																										
																										'topmu' => $hCqPL8RwlB,
																										
																										'ctime'=>$ctime,
																										
																										'tsize'=>$tsize,
																										
																										'retrno' => $retrno,
																										
																										'nettime' => $nettime,
																										
																										'errmsg'=>'',
																										
																										'initurl'=>$euVHgD2C1lt,
																										
																										'initdir'=>$bEoirRlORmPAWbBHF,
																										
																										'ucount'=>count($urls_completed),
																										
																										'crcount'=>$pn,
																										
																										'time'=>time(),
																										
																										'params'=>$cf9WUidVAtiud,
																										
																										'interrupt'=>$sqj4yHCj873BP,
																										
																										'runstate' => $VlDIpY74Sn,
																										
																										'urls_ext'=>$urls_ext,
																										
																										'urls_list_skipped' => $urls_list_skipped,
																										
																										'max_reached' => count($urls_completed)>=$CjkPFJQ1MJyQxogX
																										
																										);
																										
																										}
																										
																										}
																										
																										$wW0lsiDPK2A6wLPce_ = new SiteCrawler();
																										
																										function HuD2wJN0EuqGM6r(){
																										
																										@xnDpYg7WwA0(fSB9ZrUIK4aICK6XAM.UGhOmnuNjG2fj);
																										
																										if(@file_exists(fSB9ZrUIK4aICK6XAM.w7NW0sRCh2KBF74Bo))
																										
																										@rename(fSB9ZrUIK4aICK6XAM.w7NW0sRCh2KBF74Bo,fSB9ZrUIK4aICK6XAM.UGhOmnuNjG2fj);
																										
																										}
																										
																										



































































































