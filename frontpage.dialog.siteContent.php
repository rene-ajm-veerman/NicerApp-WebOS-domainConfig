<?php
    require_once(dirname(__FILE__).'/../NicerAppWebOS/boot.php');
    global $naWebOS;
    global $naURLs;
    require_once(dirname(__FILE__).'/../NicerAppWebOS/businessLogic/vividUserInterface/v5.y.z/photoAlbum/4.0.0/functions.php');
    //$src = $naWebOS->codePath.'/../../domains/'.$naWebOS->domainFolder.'/domainConfig/pageHeader.php'; echo $src; var_dump(file_exists($src)); exit();
    require_once ($naWebOS->domainPath.'/domainConfig/pageHeader.php');
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

    <div class="naFrontpage_headerText naFrontpage_headerText_intro" style="max-width:1438px;width:fit-content;">
        <p>
        Discover an open-source CMS and WebOS that lets you create stunning apps over dynamic backgrounds.<br/>
        Perfect for all ages to learn, play, and innovate with!
        </p>
        <p style="padding:8px;border-radius:5px;margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0;text-shadow:0px 0px 3px rgba(255,255,255,1), 2px 2px 4px rgba(0,0,0,0.8)">Project status : <span id="siteLastModified"></span>.
        </p>
        <p style="padding:8px;border-radius:5px;margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0;text-shadow:0px 0px 3px rgba(255,255,255,1), 2px 2px 4px rgba(0,0,0,0.8)">
        Opensourced as <a href="https://github.com/rene-ajm-veerman/nicerApp-WebOS-MIT-5.10.z" class="nomod noPushState" target="naGithub">5.10.z on Github.com</a>,
        and available as <a href="https://nicer.app/downloads" class="nomod noPushState" target="naDownload">full package here</a>, <br/>
        and a live copy of the latest -not always stable- <a href="https://new.nicer.app" class="nomod noPushState" target="newNA">development version here</a>.
        </p>
        <p style="padding:8px;border-radius:5px;margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0;text-shadow:0px 0px 3px rgba(255,255,255,1), 2px 2px 4px rgba(0,0,0,0.8)">
        Bug-reports may be sent to <a href="mailto:rene.veerman.netherlands@gmail.com">rene.veerman.netherlands@gmail.com</a>, or to <a class="nomod noPushState" target="ghi" href="https://github.com/rene-ajm-veerman/NicerApp-WebOS-MIT-5.10.z/issues">https://github.com/rene-ajm-veerman/NicerApp-WebOS-MIT-5.10.z/issues</a>.
        </p>
    </div>



    <!--
    <div class="naFrontpage_headerText naFrontpage_headerText_recentAchievement">
        <p>
        As of 2026-June-14th, 03:38CEST, i have <a href="https://grok.com/share/c2hhcmQtMw_86e55166-637d-449b-8e27-8a7fb1a94e03" target="_new" class="nomod noPushState">quit all forms of smoking</a>, which will (hopefully) soon free up funds to advertise these websites of mine, resulting in a real chance to stress test the architecture under high workloads, and which will free me from my protective custody contract as well.
        </p>
    </div>
    -->
    <div class="naFrontpage_headerText naFrontpage_headerText_maintenance" style="max-width:1438px;width:fit-content;">
    <p>
    2026-06-20(Saturday) to 2026-06-21 : i <a href="https://x.com/ReneAjmVeerman/status/2068268475638743296" class="nomod noPushState" target="_new">Requested permission</a> to start on <a href="https://github.com/rene-ajm-veerman/NicerApp-WebOS-MIT-5.10.z/tree/main/NicerAppWebOS/businessLogic/concept%20-%20regionalCloud" class="nomod noPushState" target="_new">Regional Cloud</a>.<br/>
    </p>
    </div>


    <div class="naFrontpage_headerText naFrontpage_headerText_maintenance" style="max-width:1438px;width:fit-content;">
    <p>
    2026-June-14th, 01:24CEST:<br/>
    These webservers are in the process of undergoing a major version upgrade, of -primarily- the database business logic code.<br/>
    Services may go down temporarily on new.nicer.app for seemingly unexplainable reasons over the next few weeks.
    </p>
    </div>





    <h1 class="contentSectionTitle1">Free apps offered :</h1>

    <h3 class="contentSectionTitle3"><a href="https://said.by" class="contentSectionTitle3_a nomod noPushState" target="_new">Social Media features</a></h3>

    <div class="backdropped">
        <h2>Music</h2>
        <p class="backdropped" style="padding:10px">The music pages are viewable, downloadable, and hearable, but currently still only in their most basic form.<br/>Additional features are being worked on, including search and playlists.</p>

        <h3 class="contentSectionTitle3" style="margin-left:50px"><a href="/view/eyJcL05pY2VyQXBwV2ViT1NcL2FwcHNcL05pY2VyQXBwV2ViT1NcL2FwcGxpY2F0aW9uc1wvMkRcL211c2ljUGxheWVyLmZhbmN5LmxhdGVzdC4yRCI6eyJzZXQiOiJESiBGaXJlc25ha2UiLCJzZW9WYWx1ZSI6Im11c2ljLURKLXQxLUZpcmVzbmFrZSIsIndlYlJlbFBhdGgiOiJcL1wvXC9ESiBtaXhlc1wvREogRmlyZXNuYWtlXC9yZWxlYXNlZFwvIn19?idxStart=1400&pw=alwaysXMASzzz" class="contentSectionTitle3_a">2D-Fancy-UI : DJ FireSnake (aka Rene AJM Veerman or x.com @ReneAjmVeerman)</a>.</h3>
        <h3 class="contentSectionTitle3" style="margin-left:50px"><a href="https://nicer.app/music-2D-beatPulse?pw=alwaysXMASzzz&idxStart=1400" class="contentSectionTitle3_a">2D : index</a>.</h3>
        <h3 class="contentSectionTitle3" style="margin-left:50px"><a href="/3D" class="contentSectionTitle3_a">3D</a> (under construction).</h3>
    </div>

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
    
    <h3 class="contentSectionTitle3"><a href="https://zoned.at" target="zonedAt" class="contentSectionTitle3_a">URL redirection (on https://zoned.at)</a></h3>

    <h3 class="contentSectionTitle3"><a href="/wiki/frontpage" class="contentSectionTitle3_a">Wikipedia.org view</a></h3>

    <?php
    global $naLAN;
    if (true || $naLAN) {
    ?>
        <h3 class="contentSectionTitle3"><a href="/logs" class="contentSectionTitle3_a">View logs</a></h3>
    <?php
    }
    ?>

    <h3 class="contentSectionTitle3"><a href="<?php echo $naURLs['tarot'];?>" class="contentSectionTitle3_a">Tarot cardgame</a></h3>
    <?=naTarotDecksAlbum();?>

