{extends 'core\index.tpl'}

{block name = 'title'}SWHelper{/block}

{block name = 'body'}
<div id = "wrap">
	<div class="logoglowna">
		<div style="padding-top:80px;">
			<h1></h1>
			<br><span class="opisglowna"></span>
		</div>
	</div>
	<div id="cssmenu">
		<ul id = "up_0">


		</ul>
	</div>

	<div class="forumbg">
		<div class="inner"><span class="corners-top"><span></span></span>
			<table class="table1" cellspacing="1">
				<thead>
					<tr>
						<th style="text-align:left;" id = "container_title">
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="bg3">
						<td>
		</div>
						<div id = 'errors' style = 'padding-top:15px;padding-bottom:15px;'></div>
						<fieldset style="border: 2px solid #a29b9b; border-radius: 6px; padding: 4px 10px 12px; width: 90%;" class = "mymenu">
							<legend style="color: #FFF; font: italic bold 14px/24px Verdana,Helvetica,Arial,sans-serif;padding: 0px 8px;">
								<ul id = "up_1">
								</ul>
							</legend>
							<fieldset style="border: 2px solid #a29b9b; border-radius: 6px; padding: 4px 10px 12px; width: 90%;">
								<legend style="color: #FFF; font: italic bold 14px/24px Verdana,Helvetica,Arial,sans-serif;padding: 0px 8px;">
									<ul id = "up_2">
									</ul>
								</legend>
 							<div id = 'content'></div>
						</fieldset>
					</fieldset>

				</td>
			</tr>
		</tbody>
	</table>

	<span class="corners-bottom"><span></span></span></div>
	</div>

{* <div id = "up_0"></div>

  <div id = "up_1"></div>

  <div id = "up_2"></div>

  <div id = "content"></div>

  <div id = "down_2"></div>

  <div id = "down_1"></div>

  <div id = "down_0"></div>*}
{/block}

{block name = 'extras'}

{* js + css *}

<link href="http://shinobi-war.xaa.pl/styles/WoWWarlords/theme/print.css" rel="stylesheet" type="text/css" media="print" title="printonly" />
<link href="http://shinobi-war.xaa.pl/style.php?id=3&lang=pl" rel="stylesheet" type="text/css" media="screen, projection" />

<link href="http://shinobi-war.xaa.pl/styles/WoWWarlords/theme/normal.css" rel="stylesheet" type="text/css" title="A" />
<link href="http://shinobi-war.xaa.pl/styles/WoWWarlords/theme/medium.css" rel="alternate stylesheet" type="text/css" title="A+" />
<link href="http://shinobi-war.xaa.pl/styles/WoWWarlords/theme/large.css" rel="alternate stylesheet" type="text/css" title="A++" />

<link href="{$conf->action_root}css/style.css?v=3" rel="stylesheet" type="text/css" media="all"/>

{/block}

{block name = 'body-config'}id="phpbb" class="section-index ltr"{/block}
