<?php
    require_once(dirname(__FILE__).'/../NicerAppWebOS/boot.php');
    global $naWebOS;
    global $naURLs;
    //$src = $naWebOS->basePath.'/../../domains/'.$naWebOS->domainFolder.'/domainConfig/pageHeader.php'; echo $src; var_dump(file_exists($src)); exit();
    require_once ($naWebOS->basePath.'/../domains/'.$naWebOS->domainFolder.'/domainConfig/pageHeader.php');
?>
    <script type="text/javascript">
        //delete na.site.settings.current.app;
        //na.m.waitForCondition ('frontPage.dialog.siteContent.php : desktopIdle?', na.m.desktopIdle, function() {
            //na.d.s.visibleDivs.push('#siteToolbarLeft');
            //na.d.s.visibleDivs.push('#siteToolbarRight');
            //na.d.s.visibleDivs.push('#siteToolbarTop');
            //na.desktop.resize();
       // }, 100);
        $(document).ready(function() {
            na.d.s.visibleDivs = arrayRemove (na.d.s.visibleDivs, '#siteToolbarLeft');
            na.d.s.visibleDivs = arrayRemove (na.d.s.visibleDivs, '#siteToolbarRight');
            na.d.s.visibleDivs = arrayRemove (na.d.s.visibleDivs, '#siteToolbarThemeEditor');
            na.d.s.visibleDivs = arrayRemove (na.d.s.visibleDivs, '#siteToolbarTop');
        });
    </script>

    <div style="max-width:1000px;margin:8px;padding:8px;border-radius:5px;background:rgba(250, 233, 52,0.35);background:rgba(0,0,250,0.47);box-shadow:0px 0px 8px 4px rgba(0,0,0,0.631), 2px 2px 2px rgba(0,0,0,0.7);line-height:1.5em;">
        <p style="padding:8px;border-radius:5px;margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0;">
        Discover an open-source CMS and WebOS that lets you create stunning apps over dynamic backgrounds.<br/>
        Perfect for all ages to learn, play, and innovate!
        </p>
        <p style="padding:8px;border-radius:5px;margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0;">Project status : <span id="siteLastModified"></span>.
        </p>
        <p style="padding:8px;border-radius:5px;margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0;">
        Opensourced as <a href="https://github.com/rene-ajm-veerman/nicerApp-WebOS-5.10.z" class="nomod noPushState" target="naGithub">5.10.z on Github.com</a> (nearly fully stable),
        and available as <a href="https://nicer.app/downloads" class="nomod noPushState" target="naDownload">full package here</a>, <br/>
        and a live copy of the latest -not always stable- <a href="https://new.nicer.app" class="nomod noPushState" target="newNA">development version here</a>.
        </p>
        <p style="padding:8px;border-radius:5px;margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0;">
        Bug-reports may be sent to <a href="mailto:rene.veerman.netherlands@gmail.com">rene.veerman.netherlands@gmail.com</a>, or to <a class="nomod noPushState" target="ghi" href="https://github.com/rene-ajm-veerman/nicerApp-WebOS-5.10.z/issues">https://github.com/rene-ajm-veerman/nicerApp-WebOS-5.10.z/issues</a>.
        </p>
        <p style="padding:8px;border-radius:5px;margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0;">
        <a href="https://x.com/GavanPeacefan/status/2035972666054582497" class="nomod noPushState" target="naProject_dataPhoenix">Announcement : Requested permission</a> to start work on a <a href="https://grok.com/share/c2hhcmQtMw_db2daf9d-a33c-4581-99f6-0caf6ad64c06?rid=ac9f97b3-12d6-4b16-8ede-49e657b1156f" class="nomod noPushState" target="grok_discussion_naProject_dataPhoenix">new exciting set of software components named 'dataPhoenix'</a> (being worked on right now as 'uDB 2.0', 'universal database 2.0'), designed to greatly increase file security and speedy automatic file integrity recovery. Over a region's Wide Area Network.
        </p>
    </div>


    <h1 class="contentSectionTitle1">Free apps offered :</h1>

    <h3 class="contentSectionTitle3"><a href="https://said.by" class="contentSectionTitle3_a nomod noPushState" target="_new">Social Media features</a></h3>

    <div class="backdropped">
        <h2>Music</h2>
        <p class="backdropped" style="padding:10px">The music pages are viewable, downloadable, and hearable, but currently still only in their most basic form.<br/>Additional features are being worked on, including search and playlists.<br/>These pages will soon be used to expose only uploaded content (with optional plaintext password).<br/>I am legally bound to make my own music collection available only for myself, much to my chagrin,<br/>but fighting the lawyers and politicians is in this case counter-productive.</p>
        <p class="backdropped" style="padding:10px">I have dire public health reasons for hosting these files, but due to political sensitivities can no longer keep revealing these reasons publicly.<br/>
        So I'll just wait for the takedown messages to arrive by email to rene.veerman.netherlands@gmail.com</p>

        <h3 class="contentSectionTitle3" style="margin-left:50px"><a href="/view/eyJcL05pY2VyQXBwV2ViT1NcL2FwcHNcL05pY2VyQXBwV2ViT1NcL2FwcGxpY2F0aW9uc1wvMkRcL211c2ljUGxheWVyLmZhbmN5LmxhdGVzdC4yRCI6eyJzZXQiOiJESiBGaXJlc25ha2UiLCJzZW9WYWx1ZSI6Im11c2ljLURKLXQxLUZpcmVzbmFrZSIsIndlYlJlbFBhdGgiOiJcL1wvXC9ESiBtaXhlc1wvREogRmlyZXNuYWtlXC9yZWxlYXNlZFwvIn19?idxStart=1400&pw=alwaysXMASzzz" class="contentSectionTitle3_a">2D-Fancy-UI : DJ FireSnake (aka Rene AJM Veerman or x.com @Gavan1977)</a></h3>
        <h3 class="contentSectionTitle3" style="margin-left:50px"><a href="/music-2D-beatPulse?pw=alwaysXMASzzz&idxStart=1400" class="contentSectionTitle3_a">2D : index</a> (under repair)</h3>
        <h3 class="contentSectionTitle3" style="margin-left:50px"><a href="/3D" class="contentSectionTitle3_a">3D</a> (under construction)</h3>
    </div>

<?php
    global $naLAN;
    if ($naLAN) {
?>
    <h3 class="contentSectionTitle3"><a href="/logs" class="contentSectionTitle3_a">View logs</a></h3>


<?php } ?>

    <h2 id="h3_news" class="contentSectionTitle2">News</h2>
    <ul class="index" style="margin-block-end:33px;">
        <li><a href="<?php echo $naURLs['newsHeadlines_englishNews'];?>" class="contentSectionTitle3_a">English News</a></li>
        <li><a href="<?php echo $naURLs['newsHeadlines_englishNews_worldHeadlines'];?>" class="contentSectionTitle3_a">English News : World Headlines only</a></li>
        <li><a href="/business-news" class="contentSectionTitle3_a">English Business News</a></li>
        <li><a href="<?php echo $naURLs['newsHeadlines_nederlandsNieuws'];?>" class="contentSectionTitle3_a">Nederlands Nieuws</a></li>
        <li><a href="<?php echo $naURLs['newsHeadlines_nederlandsNieuws_wereldNieuws'];?>" class="contentSectionTitle3_a">Nederlands Nieuws : Internationale Headlines</a></li>
        <li><a href="/actualit%C3%A9s-fran%C3%A7aises" class="contentSectionTitle3_a">Actualités françaises</a></li>
        <li><a href="<?php echo $naURLs['newsHeadlines_deutscheNachrichten'];?>" class="contentSectionTitle3_a">Deutsche Nachrichten</a></li>
        <li><a href="<?php echo $naURLs['newsHeadlines_arabic'];?>" class="contentSectionTitle3_a">Arabic Business News (in English)</a></li>
    </ul>
    
    <h3 class="contentSectionTitle3"><a href="<?php echo $naURLs['tarot'];?>" class="contentSectionTitle3_a">Tarot cardgame</a></h3>

    <h3 class="contentSectionTitle3"><a href="https://zoned.at" target="zonedAt" class="contentSectionTitle3_a">URL redirection (on https://zoned.at)</a></h3>

    <h3 class="contentSectionTitle3"><a href="/wiki/frontpage" class="contentSectionTitle3_a">Wikipedia.org view</a></h3>

