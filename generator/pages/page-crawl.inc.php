<?php // This file is protected by copyright law and provided under license. Reverse engineering of this file is strictly prohibited.




































































































$uRgsH40165710pFHYr=689550263;$JUgMG62720642PomKY=685282074;$BJZqG42912292Zuwdv=975640839;$sDZEH17303161efCdd=717720307;$ZgQhh67455750NZiiR=567114227;$uqYgd49932556BmgPV=679916351;$uvcfb46296081KdssK=712720429;$xvKbL93108826YMAwL=821620209;$BbSxY91933289zPZii=663209442;$aaQfp79331970feXYA=393581879;$UTwFN46867371ojMDy=668331268;$fqprM31101989hCOPO=644551361;$xthHG23598327akVYS=977835907;$bPqwx60918884JDzQz=825278656;$mlJWd44626160lZNHT=842473358;$eRjcU11282653qwfdj=186513763;$opHsD42450867BbaEY=511993622;$aNynB84693299fFPzm=976006684;$PfRbW39572449Skdpo=236146698;$ItZnY33650818AzGCx=446507416;$gHziL58490906ucyBm=264682586;$ukFIS60655212VqSll=845765961;$kAbUR31706238efMtS=847351288;$tTujC98206482GBymi=425532318;$JDroc71718445XykDb=235902801;$JbtWt78804627OvSqQ=434556488;$yXbMn21027526ZtwvT=678087128;$aeBJT24949646DKgwm=123588470;$EdZxN82133484hQOoQ=425654266;$lINuO49141540mrPGx=741378266;$szETl97536316gYxhb=727354218;$mnzBT83880310VKfWv=539675873;$LdHAz89736023kUbNO=833936982;$mFbbY61665955xVzQX=767231293;$XaJcG81232605gSyRx=995152558;$bZxZB94998475iBoqN=674794525;$pHJWU94526062HbThC=461750946;$UVQmZ26377868cqCkN=512115570;$DGqvl62116394XGodv=482482147;$gjqWI58304138bxAby=528944428;$wPDcK96503602Cqrqj=308096161;$Uwohm33277282WdgCI=975031098;$rPzLn40187683tvEET=188342987;$VRkXP63797302AecAS=102125579;$lrNWO95668641IfZkP=372972626;$byvKb82364197KSQEC=157977874;$PrAoT15446472ADfhD=112735077;$vZwMr21477966aVFji=393337982;$JVjAb92021180NfeCl=656380341;$uigVH83638611qRRoG=58955902;?><?php include yCwTqe5GDcta.'page-top.inc.php'; $Fpei00GZKLxgY3rk = $_REQUEST['crawl']; if($_GET['act']=='interrupt'){ m0HngeVPuiULaXDb(hE3J3lTm1xrJcz5CHD,''); echo '<h2>The "stop" signal has been sent to a crawler.</h2><a href="index.'.$cLhYAB9aL2j.'?op=crawl">Return to crawler page</a>'; }else if(file_exists($fn=fSB9ZrUIK4aICK6XAM.w7NW0sRCh2KBF74Bo)&&(time()-filemtime($fn)<10*60)){ $FAzOemScryy=true; $Fpei00GZKLxgY3rk = 1; } if($Fpei00GZKLxgY3rk){ if($FAzOemScryy) echo '<h4>Crawling already in progress.<br/>Last log access time: '.date('Y-m-d H:i:s',@filemtime($fn)).'<br><small><a href="index.'.$cLhYAB9aL2j.'?op=crawl&act=interrupt">Click here</a> to interrupt it.</small></h4>'; else { echo '<h4>Please wait. Sitemap generation in progress...</h4>'; if($_POST['bg']) echo '<div class="block2head">Please note! The script will run in the background until completion, even if browser window is closed.</div>'; } ?>
																									<script type="text/javascript">
																									var lastupdate = 0;
																									var framegotsome = false;
																									function QoPlLvVWe()
																									{
																									var cd = new Date();
																									if(!lastupdate)return false;
																									var df = (cd - lastupdate)/1000;
																									<?php if($grab_parameters['xs_autoresume']){?>
																									var re = document.getElementById('rlog');
																									re.innerHTML = 'Auto-restart monitoring: '+ cd + ' (' + Math.round(df) + ' second(s) since last update)';
																									var ifr = document.getElementById('cproc');
																									var frfr = window.frames['clog'];
																									
																									var doresume = (df >= <?php echo intval($grab_parameters['xs_autoresume']);?>);
																									if(typeof frfr != 'undefined') {
																									if( (typeof frfr.pageLoadCompleted != 'undefined') &&
																									!frfr.pageLoadCompleted) 
																									{
																									
																									framegotsome = true;
																									doresume = false;
																									}
																									
																									if(!frfr.document.getElementById('glog')) {	
																									
																									}
																									}
																									if(doresume)
																									{
																									var rle = document.getElementById('runlog');
																									lastupdate = cd;
																									if(rle)
																									{
																									rle.style.display  = '';
																									rle.innerHTML = cd + ': resuming generator ('+Math.round(df)+' seconds with no response)<br />' + rle.innerHTML;
																									}
																									var lc = ifr.src;
																									if(lc.indexOf('resume=1')<0)
																									lc = lc + '&resume=1';
																									ifr.src = lc;
																									}
																									<?php } ?>
																									}
																									window.setInterval('QoPlLvVWe()', 1000);
																									</script>
																									<iframe id="cproc" name="clog" style="width:100%;height:300px;border:0px" frameborder=0 src="index.<?php echo $cLhYAB9aL2j?>?op=crawlproc&bg=<?php echo $_POST['bg']?>&resume=<?php echo $_POST['resume']?>"></iframe>
																									<!--
																									<div id="rlog2" style="bottom:5px;position:fixed;width:100%;font-size:12px;background-color:#fff;z-index:2000;padding-top:5px;border-top:#999 1px dotted"></div>
																									-->
																									<div id="rlog" style="overflow:auto;"></div>
																									<div id="runlog" style="overflow:auto;height:100px;display:none;"></div>
																									<?php }else if(!$YIrFdD7SrWLpwW3) { ?>
																									<div id="sidenote">
																									<?php include yCwTqe5GDcta.'page-sitemap-detail.inc.php'; ?>
																									</div>
																									<div id="shifted">
																									<h2>Crawling</h2>
																									<form action="index.<?php echo $cLhYAB9aL2j?>?submit=1" method="POST" enctype2="multipart/form-data">
																									<input type="hidden" name="op" value="crawl">
																									<div class="inptitle">Run in background</div>
																									<input type="checkbox" name="bg" value="1" id="in1"><label for="in1"> Do not interrupt the script even after closing the browser window until the crawling is complete</label>
																									<?php if(@file_exists(fSB9ZrUIK4aICK6XAM.t_LlD5p6PQKvgvIZpP9)){ if(@file_exists(fSB9ZrUIK4aICK6XAM.UGhOmnuNjG2fj)){ $S6zsGHiQqbyS93wtuJ = @W4Xzu7_XRKxGlHA(pUvA4zhAkYZK2Nd8A(fSB9ZrUIK4aICK6XAM.UGhOmnuNjG2fj));; } if(!$S6zsGHiQqbyS93wtuJ){ $SQEm27RfvIaD6r = @W4Xzu7_XRKxGlHA(pUvA4zhAkYZK2Nd8A(fSB9ZrUIK4aICK6XAM.t_LlD5p6PQKvgvIZpP9)); $S6zsGHiQqbyS93wtuJ = $SQEm27RfvIaD6r['progpar']; } ?>
																									<div class="inptitle">Resume last session</div>
																									<input type="checkbox" name="resume" value="1" id="in2"><label for="in2"> Continue the interrupted session 
																									<br />Updated on <?php  $ED9J_RImHqcpoV = filemtime(fSB9ZrUIK4aICK6XAM.t_LlD5p6PQKvgvIZpP9); echo date('Y-m-d H:i:s',$ED9J_RImHqcpoV); if(time()-$ED9J_RImHqcpoV<600)echo ' ('.(time()-$ED9J_RImHqcpoV).' seconds ago) '; ?>, 
																									<?php echo	'Time elapsed: '.PvEr4n2DQ($S6zsGHiQqbyS93wtuJ[0]).',<br />Pages crawled: '.intval($S6zsGHiQqbyS93wtuJ[3]). ' ('.intval($S6zsGHiQqbyS93wtuJ[7]).' added in sitemap), '. 'Queued: '.$S6zsGHiQqbyS93wtuJ[2].', Depth level: '.$S6zsGHiQqbyS93wtuJ[5]. '<br />Current page: '.$S6zsGHiQqbyS93wtuJ[1].' ('.number_format($S6zsGHiQqbyS93wtuJ[10],1).')'; } ?>
																									</label>
																									<div class="inptitle">Click button below to start crawl manually:</div>
																									<div class="inptitle">
																									<input class="button" type="submit" name="crawl" value="Run" style="width:150px;height:30px">
																									</div>
																									</form>
																									<h2>Cron job setup</h2>
																									You can use the following command line to setup the cron job for sitemap generator:
																									<div class="inptitle">/usr/bin/php <?php echo dirname(dirname(__FILE__)).'/runcrawl.php'?></div>
																									</div>
																									<?php } include yCwTqe5GDcta.'page-bottom.inc.php'; 



































































































