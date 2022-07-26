

<?php $elearning_logos= array("header" => "logo-dark.svg", "footer" => "logo-light.svg");

$elearning_hero="image-hero-mobile.png";

$elearning_font="Plus Jakarta Sans";

$elearning_icons = array(
"Business" => "icon-business.svg",
"Animation" => "icon-animation.svg",
"Crypto" => "icon-crypto.svg",
"Design" => "icon-design.svg",
"Photography" => "icon-photography.svg");
?>


<!doctype html>
<html>
<head>
    <title>Example Domain</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--CSS------>
<link href="elearning.css" rel="stylesheet">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=<?php echo $elearning_font;?>'> 
    <!--JAVASCRIPT-->
    <script type="module" src="elearning.js"></script>
</head>

<body>
<header class='elearning--header' id=''>
  <div class='elearning--header-subcontainer' id=''>
    <img id='' class='elearning--logo' src=<?php echo $elearning_logos["header"]; ?>>
    <button type='button' class='elearning--get-started-button' id=''>
      <span class='elearning--get-started-button-text' id=''>Get Started</span>
    </button>
  </div>  
</header>

<div class='elearning-sidebar' id=''>
  <div class='mobile-horizontal-centering elearning-sidebar--subcontainer' id=''>
     <h1 class='elearning-sidebar--h1' id=''>Maximize skill,
minimize budget</h1>
     <p class='elearning-sidebar--text' id=''>Our modern courses across a range of in-demand skills will give you the knowledge you need to live the life you want.</p>
     <button type='button' class='elearning--get-started-button' id=''>
       <span class='elearning--get-started-button-text' id=''>Get Started</span>
     </button> 
   </div>
<!----------------hero image------------>
<picture class=''>
<!------for browsers that support webp image formats----->
<source class='' media='(max-width: 767px)'
srcset='image-hero-mobile.webp,
image-hero-mobile2.webp 2x' sizes='' type='image/webp'>

<source class='' media='(min-width: 768px) and (max-width: 1439px)'
srcset='image-hero-tablet.webp,
image-hero-tablet2.webp 2x' sizes='' type='image/webp'>

<source class='' media='(min-width: 1440px)'
srcset='image-hero-desktop.webp,
image-hero-desktop2.webp 2x' sizes='' type='image/webp'>


<!-------------fallback png image format-------------------------->
<source class='' media='(max-width: 767px)'
srcset='image-hero-mobile.png,
image-hero-mobile2.png 2x' sizes='' type='image/png'>

<source class='' media='(min-width: 768px) and (max-width: 1439px)'
srcset='image-hero-tablet.png,
image-hero-tablet2.png 2x' sizes='' type='png'>

<source class='' media='(min-width: 1440px)'
srcset='image-hero-desktop.png,
image-hero-desktop2.png 2x' sizes='' type='png'>

<img id='' class='elearning--hero-image' src='image-hero-desktop.png'>

</picture> 
</div>

<div class='elearning-courses' id=''>
  <header class='mobile-horizontal-centering elearning-courses--header' id=''>
    <span class='elearning-courses--header-text' id=''>Check out our most popular courses!</span>
  </header>  
  
  <div class='mobile-horizontal-centering elearning-courses-sidebar' id=''>
    <img id='' class='elearning-courses-sidebar--icon' src=<?php echo  $elearning_icons["Animation"];?>> 
    <h2 class='elearning-courses-sidebar--category' id=''>Animation</h2>
    <p class='elearning-courses-sidebar--description' id=''>Learn the latest animation techniques to create stunning motion design and captivate your audience.</p>
    <a href='' class='elearning-courses-sidebar--get-started-link' id=''>Get Started</a> 
  </div>

  <div class='mobile-horizontal-centering elearning-courses-sidebar' id=''>
    <img id='' class='elearning-courses-sidebar--icon' src=<?php echo  $elearning_icons["Design"];?>> 
    <h2 class='elearning-courses-sidebar--category' id=''>Design</h2>
    <p class='elearning-courses-sidebar--description' id=''>Create beautiful, usable interfaces to help shape the future of how the web looks.</p>
    <a href='' class='elearning-courses-sidebar--get-started-link' id=''>Get Started</a> 
  </div>

  <div class='mobile-horizontal-centering elearning-courses-sidebar' id=''>
    <img id='' class='elearning-courses-sidebar--icon' src=<?php echo  $elearning_icons["Photography"];?>> 
    <h2 class='elearning-courses-sidebar--category' id=''>Photography</h2>
    <p class='elearning-courses-sidebar--description' id=''>Explore critical fundamentals like lighting, composition, and focus to capture exceptional photos.</p>
    <a href='' class='elearning-courses-sidebar--get-started-link' id=''>Get Started</a> 
  </div>

  <div class='mobile-horizontal-centering elearning-courses-sidebar' id=''>
    <img id='' class='elearning-courses-sidebar--icon' src=<?php echo  $elearning_icons["Crypto"];?>> 
    <h2 class='elearning-courses-sidebar--category' id=''>Crypto</h2>
    <p class='elearning-courses-sidebar--description' id=''>All you need to know to get started investing in crypto. Go from beginner to advanced with this 54 hour course.</p>
    <a href='' class='elearning-courses-sidebar--get-started-link' id=''>Get Started</a> 
  </div>

  <div class='mobile-horizontal-centering elearning-courses-sidebar' id=''>
    <img id='' class='elearning-courses-sidebar--icon' src=<?php echo  $elearning_icons["Business"];?>> 
    <h2 class='elearning-courses-sidebar--category' id=''>Business</h2>
    <p class='elearning-courses-sidebar--description' id=''>A step-by-step playbook to help you start, scale, and sustain your business without outside investment.</p>
    <a href='' class='elearning-courses-sidebar--get-started-link' id=''>Get Started</a> 
  </div> 
</div> 

<footer class='elearning-footer' id=''>
  <div class='elearning-footer--subcontainer mobile-horizontal-centering' id=''>
    <img id='' class='elearning--logo' src=<?php echo $elearning_logos["footer"]; ?>>
    <button type='button' class='elearning--get-started-button' id=''>
      <span class='elearning--get-started-button-text' id=''>Get Started</span>
    </button>
  </div>  
</footer> 

</body>
</html>
