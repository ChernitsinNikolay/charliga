<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная страница',
    'longtitle' => '',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<h1><i><em><p ALIGN=CENTER style="color:PURPLE">Мы рады приветствовать Вас на сайте студенческой CHEER лиги Санкт-Петербурга!</p></em></i></h1>
<br>
<font size="3" face="Arial"><br>При поддержке Российского союза молодежи и АСО России мы реализуем проект студенческой лиги по черлидингу и приглашаем Вас к участию в соревнованиях нашей лиги.</p>

<br><p>Идея студенческой CHEER лиги Санкт-Петербурга в том, чтобы объединить только  студенческие команды по черлидингу в соревнования, фестивали и выезды.</p>
<br><p>Осенью стартует первый соревновательный сезон этой лиги. В сезоне 2014-2015 мы планируем провести два турнира по черлидингу.</p>
<br><p>Правила соревнований будут приближены к правилам спортивного черлидинга, но ориентированы на уровень начинающих команд, также будет разделение на новичков и команд уже имеющих опыт в черлидинге. К судейству помимо спортивных судей будут привлечены представители разных сфер деятельности. А затем по окончанию сезона мы будем устраивать красочный фестиваль-концерт для студентов участников CHEER лиги с приглашением творческих коллективов Санкт-Петербурга и звезд Российской эстрады. Также в фестивале могут принять участие с показательными номерами команды по черлидингу, которые по итогам сезона покажут наилучшие результаты.</p>

<br><p>Команды смогут принимать участие в Городских мероприятиях, таких как: <em>день Молодежи, день Студента, Алые Паруса, день Города и д.р.</em></p>

<br>Мероприятиях, которые проводятся Российским Союзом Молодежи в Санкт-Петербурге и по всей России:
	
		<ol type="disc"><em>
			<li> Праздник посвященный 25 летию Российского Союза Молодежи (г. Москва)</li>
			<li> Студенческая Весна </li>
			<li> Студенческая Весна стран ШОС (г.Владивосток)</li>
			<li> образовательные форумы </li>
		</ol></em>
<br>А также мы планируем проводить выездные мероприятия для состава нашей лиги.
</p>
</font>',
    'richtext' => 1,
    'template' => 3,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1426867903,
    'editedby' => 1,
    'editedon' => 1428421277,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html>
<head>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<meta charset="utf-8" />

<title>Студенческая Cheer Лига - Главная страница</title>
<base href="http://charliga.ru/" />
<link rel="stylesheet" type="text/css" href="assets/templates/main_page/css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="assets/templates/main_page/css/main-block.css" media="all">

<!-- Begin #bottomMenu -->

<script type="text/javascript">

$(function() {
			//We initially hide the all dropdown menus
			$(\'#dropdown_nav li\').find(\'.sub_nav\').hide();

			//When hovering over the main nav link we find the dropdown menu to the corresponding link.
			$(\'#dropdown_nav li\').hover(function() {
				//Find a child of \'this\' with a class of .sub_nav and make the beauty fadeIn.
				$(this).find(\'.sub_nav\').fadeIn(400);
			}, function() {
				//Do the same again, only fadeOut this time.
				$(this).find(\'.sub_nav\').fadeOut(100);
			});
		});

</script>

</head>
<body>
<!-- Начало хидер -->
<header class="header">

<div id="headerInner">
<!--
<nav class="topMenuRight">
      
    <ul>
    <li><a href="#">Страница 1</a></li>
    <li><a href="#">Страница 2</a></li>
    <li><a href="#">Страница 3</a></li>
    <li><a href="#">Страница 4</a></li>
    </ul>
    
</nav> 
-->

<!--
<div class="share-new">

<a class="icon-twitter" href="#" title="Следить в Twitter!" target="_blank"></a>
<a class="icon-rss" href="#" title="Подписаться на rss"  target="_blank"></a>
<a class="icon-mail" href="#" title="Подписаться по e-mail"  target="_blank"></a>

</div>

-->


<div class="logo">
<a href="#"><img src="assets/templates/main_page/images/logo.png" alt="Блог" /></a>
</div>

<!-- Начало #bottomMenu -->
<nav class="bottomMenu">
[[!Wayfinder? &startId=`0` &outerTpl=`MainMenuOuterTpl`]]
		<!--FIXME OLD<ul class="top-menu" id="dropdown_nav">
			<li><a href="/home/">Главная страница</a></li>
			<li class="active"><a>О нас</a></li>
			<li><a href="/teams/">Команды</a></li>
			<li><a href="/news/">Новости</a></li>
			<li><a href="/foto/">Фотоальбом</a></li>
			<li><a href="/video/">Видеоархив</a></li>
			<li><a href="/contact/">Контакты</a></li>
	<!--<li><a href="Home">Главная страница</a></li>
			 <ul class="sub_nav"> 
				<li><a href="#">Подменю #1</a></li>
				<li><a href="#">Подменю #2</a></li>
				<li><a href="#">Подменю #3</a></li>
				<li><a href="#">Подменю #4</a></li>
			</ul>
	-->
		</ul>-->
</nav><!-- конец #bottomMenu -->

</div>
</header><!-- Конец хидер -->
<!--
<div id="lpblock">

<h2>Последние записи</h2>

</div>
-->

<!-- начало врапер -->

<section id="wrapper">
<div id="middle">
<div id="content">
<div id="colLeft">


<div class="demo">
<input type="radio" name="odin" id="vkl1"/>
<input type="radio" name="odin" id="vkl2"/>
<input type="radio" name="odin" id="vkl3"/>
<input type="radio" name="odin" id="vkl4"/>
<input type="radio" name="odin" id="vkl5"/>
<input type="radio" name="odin" id="vkl6"/>
<input type="radio" name="odin" id="vkl7"/>
<input type="radio" name="odin" id="vkl8"/>
<input type="radio" name="odin" id="vkl9"/>
<input type="radio" name="odin" id="vkl10" checked="checked"/>

<label for="vkl1"><img src="assets/templates/main_page/images/slayd1.png"/></label>
<label for="vkl2"><img src="assets/templates/main_page/images/slayd2.png"/></label>
<label for="vkl3"><img src="assets/templates/main_page/images/slayd3.png"/></label>
<label for="vkl4"><img src="assets/templates/main_page/images/slayd4.png"/></label>
<label for="vkl5"><img src="assets/templates/main_page/images/slayd5.png"/></label>
<label for="vkl6"><img src="assets/templates/main_page/images/slayd6.png"/></label>
<label for="vkl7"><img src="assets/templates/main_page/images/slayd7.png"/></label>
<label for="vkl8"><img src="assets/templates/main_page/images/slayd8.png"/></label>
<label for="vkl9"><img src="assets/templates/main_page/images/slayd9.png"/></label>
<label for="vkl10"><img src="assets/templates/main_page/images/slayd10.png"/></label>
</div>

<br>
<div class="Myframe">
<h1><i><em><p ALIGN=CENTER style="color:PURPLE">Мы рады приветствовать Вас на сайте студенческой CHEER лиги Санкт-Петербурга!</p></em></i></h1>
<br>
<font size="3" face="Arial"><br>При поддержке Российского союза молодежи и АСО России мы реализуем проект студенческой лиги по черлидингу и приглашаем Вас к участию в соревнованиях нашей лиги.</p>

<br><p>Идея студенческой CHEER лиги Санкт-Петербурга в том, чтобы объединить только  студенческие команды по черлидингу в соревнования, фестивали и выезды.</p>
<br><p>Осенью стартует первый соревновательный сезон этой лиги. В сезоне 2014-2015 мы планируем провести два турнира по черлидингу.</p>
<br><p>Правила соревнований будут приближены к правилам спортивного черлидинга, но ориентированы на уровень начинающих команд, также будет разделение на новичков и команд уже имеющих опыт в черлидинге. К судейству помимо спортивных судей будут привлечены представители разных сфер деятельности. А затем по окончанию сезона мы будем устраивать красочный фестиваль-концерт для студентов участников CHEER лиги с приглашением творческих коллективов Санкт-Петербурга и звезд Российской эстрады. Также в фестивале могут принять участие с показательными номерами команды по черлидингу, которые по итогам сезона покажут наилучшие результаты.</p>

<br><p>Команды смогут принимать участие в Городских мероприятиях, таких как: <em>день Молодежи, день Студента, Алые Паруса, день Города и д.р.</em></p>

<br>Мероприятиях, которые проводятся Российским Союзом Молодежи в Санкт-Петербурге и по всей России:
	
		<ol type="disc"><em>
			<li> Праздник посвященный 25 летию Российского Союза Молодежи (г. Москва)</li>
			<li> Студенческая Весна </li>
			<li> Студенческая Весна стран ШОС (г.Владивосток)</li>
			<li> образовательные форумы </li>
		</ol></em>
<br>А также мы планируем проводить выездные мероприятия для состава нашей лиги.
</p>
</font>
</div>
<!-- Начало .postBox -->
<!--<article class="postBox">

<div class="postThumb"><a href="#"><img width="800" height="300" src="images/tumb.png"/></a></div>

<h2><a href="#">Скачать бесплатно 15 HTML5 и CSS3 шаблонов</a></h2> 

<div class="info"> 
Александр // <a href="#">Метки: метка, метка 2</a> // Апр.10.2012. // Комментариев: <a href="#">238</a>
</div>

<div class="textPreview">

<p>Приветствую Вас, уважаемые читатели блога. Сегодня спешу представить Вам очередную бесплатную подборку шаблонов на CSS3 и HTML5, а также здесь есть несколько шаблонов с большими и встроенными JQuery слайдерами изображений. В общем, я надеюсь, что Вы здесь найдёте то что Вам нужно. Наслаждайтесь.</p>
</div>

<div class="more-link"><a href="#">Далее</a></div>

</article>
<!-- Конец .postBox -->

<!--<div class="raz"></div>

<!-- Начало .postBox -->
<!--<article class="postBox">

<div class="postThumb"><a href="#"><img width="800" height="300" src="images/tumb.png"/></a></div>

<h2><a href="#">Скачать бесплатно 15 HTML5 и CSS3 шаблонов</a></h2> 

<div class="info"> 
Александр // <a href="#">Метки: метка, метка 2</a> // Апр.10.2012. // Комментариев: <a href="#">238</a>
</div>

<div class="textPreview">

<p>Приветствую Вас, уважаемые читатели блога. Сегодня спешу представить Вам очередную бесплатную подборку шаблонов на CSS3 и HTML5, а также здесь есть несколько шаблонов с большими и встроенными JQuery слайдерами изображений. В общем, я надеюсь, что Вы здесь найдёте то что Вам нужно. Наслаждайтесь.</p>
</div>

<div class="more-link"><a href="#">Далее</a></div>

</article>
<!-- Конец .postBox -->
<!--<div class="raz"></div>

<!-- Начало .postBox -->
<!--<article class="postBox">

<div class="postThumb"><a href="#"><img width="800" height="300" src="images/tumb.png"/></a></div>

<h2><a href="#">Скачать бесплатно 15 HTML5 и CSS3 шаблонов</a></h2> 

<div class="info"> 
Александр // <a href="#">Метки: метка, метка 2</a> // Апр.10.2012. // Комментариев: <a href="#">238</a>
</div>

<div class="textPreview">

<p>Приветствую Вас, уважаемые читатели блога. Сегодня спешу представить Вам очередную бесплатную подборку шаблонов на CSS3 и HTML5, а также здесь есть несколько шаблонов с большими и встроенными JQuery слайдерами изображений. В общем, я надеюсь, что Вы здесь найдёте то что Вам нужно. Наслаждайтесь.</p>
</div>

<div class="more-link"><a href="#">Далее</a></div>

</article>
<!-- Конец .postBox -->

<!--<div class="raz"></div>

<!-- Начало .postBox -->
<!--<article class="postBox">

<div class="postThumb"><a href="#"><img width="800" height="300" src="images/tumb.png"/></a></div>

<h2><a href="#">Скачать бесплатно 15 HTML5 и CSS3 шаблонов</a></h2> 

<div class="info"> 
Александр // <a href="#">Метки: метка, метка 2</a> // Апр.10.2012. // Комментариев: <a href="#">238</a>
</div>

<div class="textPreview">

<p>Приветствую Вас, уважаемые читатели блога. Сегодня спешу представить Вам очередную бесплатную подборку шаблонов на CSS3 и HTML5, а также здесь есть несколько шаблонов с большими и встроенными JQuery слайдерами изображений. В общем, я надеюсь, что Вы здесь найдёте то что Вам нужно. Наслаждайтесь.</p>
</div>

<div class="more-link"><a href="#">Далее</a></div>

</article>
<!-- Конец .postBox -->

<!--<div class="raz"></div>-->

</div><!-- Конец коллефт -->

<aside id="colRight">

<form  method="get" action="/search" target="_blank">
<input name="q" id="form-query" value="" placeholder="Поиск..."> 
<input id="form-querysub" type=submit value="">
</form>

<div class="rightBox">

<h2>Новости</h2>		
<ul>
				
<li><a href="http://beloweb.ru/novichkam/plavnaya-animatsiya-obektov-tolko-s-pomoshhyu-css.html" title="Плавная анимация объектов только с помощью CSS (5 примеров)">Плавная анимация объектов только с помощью CSS (5 примеров)</a></li>
				
                                <li><a href="http://beloweb.ru/shablonyi/skachat-besplatno-15-html5-i-css3-shablonov-dlya-vashih-novyih-idey-i-veb-proektov.html" title="Скачать бесплатно 15 HTML5 и CSS3 шаблонов для Ваших новых идей и веб &#8211; проектов">Скачать бесплатно 15 HTML5 и CSS3 шаблонов для Ваших новых идей и веб &#8211; проектов</a></li>
				
                                <li><a href="http://beloweb.ru/javascript-jquery/besplatnyie-vsplyivayushhie-i-modalnyie-okna-s-ispolzovaniem-css3-ijquery.html" title="Бесплатные всплывающие и модальные окна с использованием CSS3 и JQuery">Бесплатные всплывающие и модальные окна с использованием CSS3 и JQuery</a></li>
				<li><a href="http://beloweb.ru/dizayn-sayta/500-besplatnyih-photoshop-figur-dlya-vashih-novyih-proektov.html" title="500+ бесплатных Photoshop фигур (Shapes) для Ваших новых проектов">500+ бесплатных Photoshop фигур (Shapes) для Ваших новых проектов</a></li>
				<li><a href="http://beloweb.ru/dizayn-sayta/besplatnyie-psd-i-css3-menyu-dlya-vashego-veb-proekta.html" title="Бесплатные PSD и CSS3 меню для Вашего веб проекта">Бесплатные PSD и CSS3 меню для Вашего веб проекта</a></li>
				<li><a href="http://beloweb.ru/shablonyi/besplatnyie-css-i-xhtml-shablonyi-s-tyomnyim-dizaynom-dlya-vashih-proektov.html" title="Бесплатные CSS и xHTML шаблоны с тёмным дизайном для Ваших проектов">Бесплатные CSS и xHTML шаблоны с тёмным дизайном для Ваших проектов</a></li>
				</ul>
                      </div>

<div class="rightBox">

<h2>Ближайшие события</h2>		
<ul>
				
<li><a href="http://beloweb.ru/novichkam/plavnaya-animatsiya-obektov-tolko-s-pomoshhyu-css.html" title="Плавная анимация объектов только с помощью CSS (5 примеров)">Плавная анимация объектов только с помощью CSS (5 примеров)</a></li>
				
                                <li><a href="http://beloweb.ru/shablonyi/skachat-besplatno-15-html5-i-css3-shablonov-dlya-vashih-novyih-idey-i-veb-proektov.html" title="Скачать бесплатно 15 HTML5 и CSS3 шаблонов для Ваших новых идей и веб &#8211; проектов">Скачать бесплатно 15 HTML5 и CSS3 шаблонов для Ваших новых идей и веб &#8211; проектов</a></li>
				
                                <li><a href="http://beloweb.ru/javascript-jquery/besplatnyie-vsplyivayushhie-i-modalnyie-okna-s-ispolzovaniem-css3-ijquery.html" title="Бесплатные всплывающие и модальные окна с использованием CSS3 и JQuery">Бесплатные всплывающие и модальные окна с использованием CSS3 и JQuery</a></li>
				<li><a href="http://beloweb.ru/dizayn-sayta/500-besplatnyih-photoshop-figur-dlya-vashih-novyih-proektov.html" title="500+ бесплатных Photoshop фигур (Shapes) для Ваших новых проектов">500+ бесплатных Photoshop фигур (Shapes) для Ваших новых проектов</a></li>
				<li><a href="http://beloweb.ru/dizayn-sayta/besplatnyie-psd-i-css3-menyu-dlya-vashego-veb-proekta.html" title="Бесплатные PSD и CSS3 меню для Вашего веб проекта">Бесплатные PSD и CSS3 меню для Вашего веб проекта</a></li>
				<li><a href="http://beloweb.ru/interesno/primeryi-igr-kotoryie-sdelannyie-s-pomoshhyu-html5-canvas.html" title="Примеры игр которые сделанные с помощью html5 canvas">Примеры игр которые сделанные с помощью html5 canvas</a></li>
				<li><a href="http://beloweb.ru/shablonyi/besplatnyie-css-i-xhtml-shablonyi-s-tyomnyim-dizaynom-dlya-vashih-proektov.html" title="Бесплатные CSS и xHTML шаблоны с тёмным дизайном для Ваших проектов">Бесплатные CSS и xHTML шаблоны с тёмным дизайном для Ваших проектов</a></li>
				</ul>
			

                      </div>


</aside><!-- Конец колрайт -->
</div><!-- Конец контент -->
</div><!-- Конец мидл -->
</section><!-- Конец врапер -->

<!-- Начало футер -->

<footer id="footer">
<div id="footerInner">


<footer id="footer">
<div id="footerInner">

<div id="footerlogo1">
<a href="#"><img src="assets/templates/main_page/images/sp1.png" alt="Блог" /></a>
</div>
<div id="footerlogo2">
<a href="#"><img src="assets/templates/main_page/images/sp2.png" alt="Блог" /></a>
</div>
<div id="footerlogo3">
<a href="#"><img src="assets/templates/main_page/images/sp3.png" alt="Блог" /></a>
</div>
<div id="footerlogo4">
<a href="#"><img src="assets/templates/main_page/images/sp4.png" alt="Блог" /></a>
</div>
<div id="footerlogo5">
<a href="#"><img src="assets/templates/main_page/images/sp5.png" alt="Блог" /></a>
</div>

<!--
<nav class="footernav">
      
    <ul>
    <li><a href="#">Страница 1</a></li>
    <li><a href="#">Страница 2</a></li>
    <li><a href="#">Страница 3</a></li>
    <li><a href="#">Страница 4</a></li>
    </ul>
    
</nav> 
-->
</div><!-- Конец футериннер -->
</footer>
<!-- Конец футер -->
</body>
</html>
',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Главная страница',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
    ),
    'modSnippet' => 
    array (
      'Wayfinder' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Wayfinder',
          'description' => 'Wayfinder for MODx Revolution 2.0.0-beta-5 and later.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'activeParentRowTpl' => 
            array (
              'name' => 'activeParentRowTpl',
              'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area_trans' => '',
            ),
            'cacheResults' => 
            array (
              'name' => 'cacheResults',
              'desc' => 'prop_wayfinder.cacheResults_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Cache the generated menu to the MODX Resource cache. Setting this to 1 will speed up the loading of your menus.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'prop_wayfinder.cacheTime_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'The number of seconds to store the cached menu, if cacheResults is 1. Set to 0 to store indefinitely until cache is manually cleared.',
              'area_trans' => '',
            ),
            'categoryFoldersTpl' => 
            array (
              'name' => 'categoryFoldersTpl',
              'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for category folders. Category folders are determined by setting the template to blank or by setting the link attributes field to rel="category".',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_wayfinder.contexts_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Specify the contexts for the Resources that will be loaded in this menu. Useful when used with startId at 0 to show all first-level items. Note: This will increase load times a bit, but if you set cacheResults to 1, that will offset the load time.',
              'area_trans' => '',
            ),
            'cssTpl' => 
            array (
              'name' => 'cssTpl',
              'desc' => 'prop_wayfinder.cssTpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'This parameter allows for a chunk containing a link to a style sheet or style information to be inserted into the head section of the generated page.',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_wayfinder.debug_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'With the debug parameter set to 1, Wayfinder will output information on how each Resource was processed.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'prop_wayfinder.displayStart_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area_trans' => '',
            ),
            'excludeDocs' => 
            array (
              'name' => 'excludeDocs',
              'desc' => 'prop_wayfinder.excludeDocs_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Acts as a filter and will remove the documents specified in this parameter from the output. The startId is still required.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'prop_wayfinder.firstClass_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area_trans' => '',
            ),
            'fullLink' => 
            array (
              'name' => 'fullLink',
              'desc' => 'prop_wayfinder.fullLink_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'If set to 1, will display the entire, absolute URL in the link. (It is recommended to use scheme instead.)',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'prop_wayfinder.hereClass_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'prop_wayfinder.hereId_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area_trans' => '',
            ),
            'hereTpl' => 
            array (
              'name' => 'hereTpl',
              'desc' => 'prop_wayfinder.hereTpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'prop_wayfinder.hideSubMenus_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the Wayfinder output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area_trans' => '',
            ),
            'ignoreHidden' => 
            array (
              'name' => 'ignoreHidden',
              'desc' => 'prop_wayfinder.ignoreHidden_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'The ignoreHidden parameter allows Wayfinder to ignore the display in menu flag that can be set for each document. With this parameter set to 1, all Resources will be displayed regardless of the Display in Menu flag.',
              'area_trans' => '',
            ),
            'includeDocs' => 
            array (
              'name' => 'includeDocs',
              'desc' => 'prop_wayfinder.includeDocs_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Acts as a filter and will limit the output to only the documents specified in this parameter. The startId is still required.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'prop_wayfinder.innerClass_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the inner template.',
              'area_trans' => '',
            ),
            'innerHereTpl' => 
            array (
              'name' => 'innerHereTpl',
              'desc' => 'prop_wayfinder.innerHereTpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area_trans' => '',
            ),
            'innerRowTpl' => 
            array (
              'name' => 'innerRowTpl',
              'desc' => 'prop_wayfinder.innerRowTpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the row items in a subfolder.',
              'area_trans' => '',
            ),
            'innerTpl' => 
            array (
              'name' => 'innerTpl',
              'desc' => 'prop_wayfinder.innerTpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area_trans' => '',
            ),
            'jsTpl' => 
            array (
              'name' => 'jsTpl',
              'desc' => 'prop_wayfinder.jsTpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'This parameter allows for a chunk containing some Javascript to be inserted into the head section of the generated page.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'prop_wayfinder.lastClass_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'prop_wayfinder.level_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'prop_wayfinder.levelClass_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc if you specified "level").',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_wayfinder.limit_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Causes Wayfinder to only process the number of items specified per level.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'prop_wayfinder.outerClass_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the outer template.',
              'area_trans' => '',
            ),
            'outerTpl' => 
            array (
              'name' => 'outerTpl',
              'desc' => 'prop_wayfinder.outerTpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "<ul>[[+wf.wrapper]]</ul>" is assumed.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'prop_wayfinder.parentClass_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area_trans' => '',
            ),
            'parentRowHereTpl' => 
            array (
              'name' => 'parentRowHereTpl',
              'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area_trans' => '',
            ),
            'parentRowTpl' => 
            array (
              'name' => 'parentRowTpl',
              'desc' => 'prop_wayfinder.parentRowTpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area_trans' => '',
            ),
            'permissions' => 
            array (
              'name' => 'permissions',
              'desc' => 'prop_wayfinder.permissions_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'list',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Will check for a permission on the Resource. Defaults to "list" - set to blank to skip normal permissions checks.',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'prop_wayfinder.ph_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'To display send the output of Wayfinder to a placeholder set the ph parameter equal to the name of the desired placeholder. All output including the debugging (if on) will be sent to the placeholder specified.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'prop_wayfinder.previewunpublished_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'prop_wayfinder.rowClass_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'CSS class denoting each output row.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'prop_wayfinder.rowIdPrefix_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'If set, Wayfinder will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area_trans' => '',
            ),
            'rowTpl' => 
            array (
              'name' => 'rowTpl',
              'desc' => 'prop_wayfinder.rowTpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the regular row items.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'prop_wayfinder.scheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'Relative',
                  'value' => '',
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'Absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'Full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Determines how URLs are generated for each link. Set to "abs" to show the absolute URL, "full" to show the full URL, and blank to use the relative URL. Defaults to relative.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'prop_wayfinder.selfClass_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'CSS class for the current item.',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_wayfinder.sortBy_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Sorts the output by any of the Resource fields on a level by level basis. This means that each submenu will be sorted independently of all other submenus at the same level. Random will sort the output differently every time the page is loaded if the snippet is called uncached.',
              'area_trans' => '',
            ),
            'sortOrder' => 
            array (
              'name' => 'sortOrder',
              'desc' => 'prop_wayfinder.sortOrder_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'Ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'Descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Allows the menu to be sorted in either ascending or descending order.',
              'area_trans' => '',
            ),
            'startItemTpl' => 
            array (
              'name' => 'startItemTpl',
              'desc' => 'prop_wayfinder.startItemTpl_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'prop_wayfinder.templates_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Optional. A comma-separated list of Template IDs to restrict selected Resources to.',
              'area_trans' => '',
            ),
            'textOfLinks' => 
            array (
              'name' => 'textOfLinks',
              'desc' => 'prop_wayfinder.textOfLinks_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menutitle',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'This field will be inserted into the linktext placeholder.',
              'area_trans' => '',
            ),
            'titleOfLinks' => 
            array (
              'name' => 'titleOfLinks',
              'desc' => 'prop_wayfinder.titleOfLinks_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'pagetitle',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'This field will be inserted into the linktitle placeholder.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => ' If WebLinks are used in the output, Wayfinder will output the link specified in the WebLink instead of the normal MODx link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'prop_wayfinder.webLinkClass_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'CSS class for weblink items.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_wayfinder.where_desc',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'area' => '',
              'desc_trans' => 'Optional. A JSON object for where conditions for all items selected in the menu.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);