<!DOCTYPE html>
<html lang="en">
<?php require($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php'); 
$seo_url = $_SERVER['REQUEST_URI'];
$seo_urlArr = explode("/",$seo_url);
if($seo_urlArr[2]!=''){
	$showAll = 0;
	$mypost = get_page_by_path($seo_urlArr[2], '', 'post');
	
	$h_title = $mypost->post_title;
	$h_time = $mypost->post_date;
	$h_post_content = nl2br($mypost->post_content);
	
	 $url_img = wp_get_attachment_url( get_post_thumbnail_id($mypost->ID), '' ); 
	
	$can_url = 'https://www.nextbrick.com/blog/'.$seo_urlArr[2].'/';
	
	//$yoast_meta = get_post_meta($mypost->ID, '_yoast_wpseo_metadesc', true);
	//if ($yoast_meta) { 
		//echo $yoast_meta;
	//}
	
$allMetaDesc = array();
$allMetaDesc['solr-performance'] = 'Let’s face reality. You must have received the alert of slow queries some time. We are here to assist you in learning about the issue’s root cause and the ways of fixing it. However, before getting into fixing the query, it’s better to understand its intensity.&nbsp; So, let’s analyze both the logs and metrics andRead More';
$allMetaDesc['salesforce-communities'] = 'Salesforce community is an online platform that allows companies to expand their business by connecting their partners, customers, and employees with each other. With the help of this community, anyone can ask questions from other community members and find the answers to his question. No matter you are operating a small or large business. ButRead More';
$allMetaDesc['what-are-apache-solr-and-its-advantages'] = 'Apache Solr can be defined as a code layer which covers Lucene and that transforms the same into a search platform used for the creation of search applications. Apache Solr features several capabilities which can spin the core search-capability and then turn the same into Full-fledged search applications. It offers users the chance to makeRead More';
$allMetaDesc['elastic-search-important-features-a-business-should-know-about'] = 'Elastic search is a search engine, which is open-source, is broadly distributed over the internet, is fast and scalable, and a great big–data solution with analytics of the database. The search result of ElasticSearch is very fast because rather than searching the text or keyword, it searches the index of the file. It searches theRead More';
$allMetaDesc['elasticsearch-monitoring-tools'] = 'Keeping a regular check is the most vital aspect of working with a system, and troubleshooting the issues and further fixing them is equally important. And the monitoring tools are your saviors at working on a system and monitoring it to ensure the accurate system operation. Search engine boosts various&nbsp; applications; Elasticsearch monitoring is anRead More';
$allMetaDesc['how-to-effectively-leverage-salesforce-community-cloud'] = 'Salesforce community cloud is a collaborative platform enabling companies to create branded community spaces or portals for their different users so they can easily connect, work together, perform, and complete tasks. This CRM platform can be customized and its functions can be adjusted to different requirements or preferences.&nbsp; To build effective synergy between the differentRead More';
$allMetaDesc['top-7-elasticsearch-metrics-to-monitor'] = 'With regards to utilizing Elasticsearch, there are huge loads of measurements to follow. It is better to investigate 7 Elasticsearch measurements to watch to be more concise. This ought to be useful to anybody new to Elasticsearch, and experienced clients. So, these are the top 7 Elasticsearch metrics to monitor.&nbsp; Leading Elasticsearch Metrics to Monitor:&nbsp;Read More';
$allMetaDesc['how-the-salesforce-community-cloud-helps-your-business-grow'] = 'Salesforce has arisen as the most trusted and generally utilized client relationship with the executives programming apparatus across the globe. Despite the enormous achievement, the interest for any showcasing device which is just serving one fringe for example the CRM can’t develop past a specific breaking point. So, here is how the salesforce community cloudRead More';
$allMetaDesc['five-advantages-you-will-get-in-running-elastic-stack-on-cloud'] = 'We will talk about Elastic Stack here that is an open-source tool, and every user can download it on any platform and use it according to his/her convenience. A few words about Elastic Stack: An Elastic Stack is a free-to-use digital platfrom that has a bunch of technical features. It offers an Elasticsearch, Logstash, andRead More';
$allMetaDesc['how-to-migrate-to-solr-cloud-from-solr-master-slave'] = 'Lots of organizations search for fault-oriented solutions at a high level and this depends on the different parts of the infrastructure. The solr support is known to be one of the most mature solutions for all types of search and this is being available for a decade. This search solution is based on conventional master-slaveRead More';
$allMetaDesc['what-are-the-top-solr-metrics-to-monitor'] = 'One of the advanced platforms for enterprise search is Solr and it includes a developer API as well as instrumentation for making the collection of the detailed performance-oriented metrics across the life-cycle of the Solr service as well as its multiple components. It makes the application of Lucene Java search library at the base for Read More';
$allMetaDesc['apache-solr-monitoring-with-nextbrick'] = 'An open-source search server, Apache Solr is a Lucene full-text search engine and it has the latest features like indexing, exploring multiple websites, and delivering suggestions for relevant content according to the search query’s taxonomy. Furthermore, it can instantly search out documents and email attachments.';
$allMetaDesc['what-is-common-between-solr-elasticsearch'] = 'When it comes to search for relevance similarity, Lucene offers a plethora of options for configuring similarity and in the same connection, Solr and Elasticsearch hold the same qualities. The base of relevancy scores like document-query similarity is accomplished by this relevancy. The key factors of relevancy account are field boosts, re-ranking, and function scoring.Read More';
$allMetaDesc['how-to-increase-conversions-with-autocomplete-search-improvements'] = 'Autocomplete can be defined as a unique feature within Google Search which is specially designed to support it to be faster for completing searches which user just begin to type. Autocomplete feature will be available almost anywhere, where you will see a Google search box, even in the Google home page, iOS and Android app for Google';
$allMetaDesc['differences-between-artificial-intelligence-and-machine-learning'] = 'Artificial Intelligence is something which refers to the technology. This is the technique which has been used by the person so that they can easily complete all the complex task easily. Artificial Intelligence also deals with computer systems that can mimic humans. It is the ability of the computer to function like a human brain.Read More';
$allMetaDesc['enhance-the-customer-experience-with-al-powered-search'] = 'All the people have reported that the customer experience is considered as one of the most essential things for them. It is believed that most of the retail focuses on the customer experience so as to increase the goodwill in the market. Through the data, one can know that around 26 percent of retail’s primeRead More';
$allMetaDesc['major-role-of-search-in-intelligent-machining'] = 'The industrial revolution has bought a lot of changes in the life of people. The manufacturing level has increased with the increase in time along with the machine intelligence. As artificial intelligence, as well as digital manufacturing, has increased and lead to publications like Atlantic to ask that if the machines can do all theRead More';
$allMetaDesc['solr-vs-elasticsearch-which-is-the-better-search-platform'] = 'One of the common questions among professionals dealing with huge amount of data is usually about which search platform to use. Is it Solr or Elasticsearch that suits your requirements? Don’t be confused anymore. Check out how to scale the better and easier option by analysing the significant differences between Solr and Elasticsearch search engines.Read More';
$allMetaDesc['differences-between-apache-solr-and-apache-lucene'] = 'With the world turning digital, massive amounts of data is being generated and churned into the Web every minute. As a result, data professionals are always on lookout for dynamic platforms that can offer improved search engine features. Apache Solr is one of the most trending web server application that facilitates searching web content inRead More';
$allMetaDesc['how-does-big-data-ecosystem-work'] = 'Before knowing how Big Data Ecosystem works, it is important to know what Big Data is. In simple words, Big Data can be explained as a field that deals with extremely large data sets that can’t be arranged or analyzed by traditional methods. Big Data is used in the fields like health, internal security, energy,Read More';

$h_metadesc = '';
	if(array_key_exists($seo_urlArr[2],$allMetaDesc)){
		$h_metadesc = $allMetaDesc[$seo_urlArr[2]];
	}
}else{
	$showAll = 1;
	$h_title = "Blog for Solr, ElasticSearch, Lucence, Apache";
	$can_url = 'https://www.nextbrick.com/blog/';
	
	$h_metadesc = 'This Nextbrick blog is a complete guide for various tech topics like Solr, ElasticSearch, Lucence, Apache and more. Read and find the solutions!';
}


?>
<head>
    <meta charset="UTF-8">
	<base href="https://www.nextbrick.com/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $h_title;?> - Nextbrick, Inc</title>
    <!-- This site is optimized with the Yoast SEO plugin v13.1 - https://yoast.com/wordpress/plugins/seo/ -->
	<meta name="description" content="<?php echo $h_metadesc;?>">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <link rel="canonical" href="<?php echo $can_url?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo $h_title;?> - Nextbrick, Inc" />
    <meta property="og:description"
        content="<?php echo $h_metadesc;?>" />
    <meta property="og:url" content="<?php echo $can_url?>" />
    <meta property="og:site_name" content="Nextbrick, Inc" />
    <meta property="og:image" content="./assets/img/cvs-pharmacy-logo.png" />
    <meta property="og:image:secure_url"
        content="./assets/img/cvs-pharmacy-logo.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description"
        content="<?php echo $h_metadesc;?>" />
    <meta name="twitter:title" content="<?php echo $h_title;?> - Nextbrick, Inc" />
    <meta name="twitter:image" content="./assets/img/cvs-pharmacy-logo.png" />
   
    <!-- / Yoast SEO plugin. -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134752872-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-134752872-1');
        gtag('config', 'AW-762133543');
    </script>
	<link rel="icon" type="image/png" href="./favicon.png"/>
	<style>
	.btn-filled {
    -webkit-filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    background: -webkit-gradient(linear, left top, right top, from(#756f97), to(#00aedc));
    background: linear-gradient(90deg, #756f97 0%, #00aedc 100%);
    border-radius: 90px;
    border: none;
    padding: 8px 20px;
    color: #fff;
}
.owl-carousel .owl-item img {
    display: block;
    width: 100%;
    height: 120px;
}
.card-body a {
    position: relative;
    bottom: 0px;
}.card-body > ul li {
    padding-bottom: 10px;
    font-size: 16px;
}</style>
</head>

<body>
    <!-- Header Starts -->
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top pt-3 pb-3 navbar-light">
            <div class="container-fluid">
                <div class="col-md-3 p-0">
                    <a class="navbar-brand py-0" href="./">
                        <img class="white" src="./assets/img/logo.svg" alt="Nextbrick logo">
                        <img class="black" src="./assets/img/logo.svg" alt="Nextbrick    logo">
                    </a>
                </div>
                <div class="menu-btn" data-toggle="collapse" data-target="#navbarCollapse">
                    <div class="menu-btn__burger"></div>
                </div>
                <div class="col-md-9 pr-0 justify-content-end contact-row">
                    <div class="col-md-12 p-0 collapse navbar-collapse navContent tabs" id="navbarCollapse">
                        <div class="d-flex navigation align-items-center justify-content-end">
                            <div class="col navList navbar-collapse" id="navbar">
                                <ul id="autoNav" class="navbar-nav ml-auto nav justify-content-end -primary ">
                                    <li class="nav-item"><a class="nav-link" href="./">Home</a></li>
                                    <li class="nav-item hasMenu dropdown megamenu-li"><a
                                            class="nav-link dropdown-toggle" id="aboutMenu" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" href="#">About</a>

                                        <div class="dropdown-menu megamenu smallNav" aria-labelledby="aboutMenu">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-12">
                                                    <a class="dropdown-item" href="value-proposition">Value Proposition</a>
                                                    <a class="dropdown-item" href="leadership">Leadership</a>
                                                    <a class="dropdown-item" href="quality">Quality</a>
                                                    <a class="dropdown-item" href="press">Press</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item hasMenu dropdown megamenu-li megamenu-dropdown"><a
                                            class="nav-link dropdown-toggle" id="servicesMenu" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" href="#">Services</a>
                                        <div class="dropdown-menu megamenu col-lg-12" aria-labelledby="servicesMenu">
                                            <div class="row">
                                                <div class="col-sm-2 col-lg-2">
                                                    <a class="dropdown-item" href="search">
                                                        <h4>Search</h4>
                                                    </a>
                                                    <a class="dropdown-item" href="solr">Solr</a>
                                                    <a class="dropdown-item" href="elastic-search">Elastic Search</a>
                                                    <a class="dropdown-item" href="lucidworks-fusion">Lucidworks Fusion</a>
                                                    <a class="dropdown-item" href="algolia">Algolia</a>
                                                    <a class="dropdown-item" href="sinequa">Sinequa</a>
                                                    <a class="dropdown-item" href="coveo">Coveo</a>
                                                    <a class="dropdown-item" href="microfocus-idol">Microfocus Idol</a>
                                                </div>
                                                <div class="col-sm-3 col-lg-3">
                                                    <a class="dropdown-item" href="content-management">
                                                        <h4>Content Management</h4>
                                                    </a>
                                                    <a class="dropdown-item"
                                                        href="salesforce-community-cloud-consulting">Salesforce
                                                        community cloud</a>
                                                    <a class="dropdown-item" href="adobe-experience-manager">Adobe Experience Manager</a>
                                                    <a class="dropdown-item" href="sitecore">Sitecore</a>
                                                    <a class="dropdown-item" href="opentext">Opentext</a>
                                                    <a class="dropdown-item" href="drupal">Drupal</a>
                                                </div>
                                                <div class="col-sm-2 col-lg-2">
                                                    <a class="dropdown-item" href="data-engineering">
                                                        <h4>Data Engineering</h4>
                                                    </a>
                                                    <a class="dropdown-item" href="database">Database</a>
                                                    <a class="dropdown-item" href="kafka">Kafka</a>
                                                    <a class="dropdown-item" href="spark">Spark</a>
                                                    <a class="dropdown-item" href="cloud">Cloud</a>
                                                    <a class="dropdown-item" href="data-science">Data Science/AI</a>
                                                </div>
                                                <div class="col-sm-2 col-lg-3">
                                                    <a class="dropdown-item" href="software-product-development">
                                                        <h4>Software Product Development</h4>
                                                    </a>

                                                </div>
                                                <div class="col-sm-2 col-lg-2">
                                                    <a class="dropdown-item" href="emerging-technologies">
                                                        <h4>Emerging Technologies</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="customers">Customers</a></li>
                                    <li class="nav-item"><a class="nav-link" href="partners">Partners</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog/">Blog</a></li>

                                </ul>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-end">
                                    <a class="contactUs" href="contact-us">
                                        Contact Us
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>
    <!-- Header End -->

    <!-- Hero Section Start -->
    <section class="heroSection hero section" id="homeSlider">
        <div class="slider-wrapper">
            <div class="slider inner-page">
                <div class="slides-container">
                    <div class="slide-wrapper">
                        <div class="slide" data-order="1">
                            <img src="./assets/img/sliderImg/slide1.jpg" alt="<?php echo $h_title;?>" />
                            <div class="slide-content">
                                <div class="container">
                                    <div class="col-lg-7 pr-0">
                                        <h1><?php echo substr($h_title,0,45); if(strlen($h_title)>45){echo '..';}?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
	
	<?php if($showAll==1){?>
	<?php 
	$mypost = get_page_by_path('what-are-apache-solr-and-its-advantages', '', 'post');
	query_posts('showposts=50'); 
	if (have_posts()) : while (have_posts()) : the_post(); 
	?>
	
    <section class="es-solution service-content bg-white" style="padding:10px 0;">
        <div class="container">
            <div class="card border-0 horizontal-card">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card-body">
						   <a href="<?php the_permalink();?>" target="_self" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a><br>
                            <small>Posted on <?php the_time('l jS F, Y') ?></small>
                            <h5 class="card-title" style="font-size: 40px;line-height: 42px;"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
				<hr>
            </div>
        </div>
    </section>
	<?php endwhile; else: echo "no posts"; endif; ?><br><?php wp_reset_query(); ?>
	
	<?php } ?>
	
	<?php if($showAll==0){?>
	<section class="es-solution service-content bg-white">
        <div class="container">
            <div class="card border-0 horizontal-card">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
					<img class="card-img" src="<?php echo $url_img ?>" alt="<?php echo $h_title;?>">
                        <div class="card-body">
                            <small><?php echo date('l jS F, Y',strtotime($h_time)); ?></small>
                            <h5 class="card-title"><?php echo $h_title;?></h5>
							
							<p class="card-text">
							<?php echo $h_post_content;?> 
							</p>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	

	<section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <h3> Related articles </h3>
                </div>
                <div class="col-md-9 col-lg-9">
                    <div class="owl-carousel owl-theme blog-carousel">
					<?php 
						$mypost = get_page_by_path('what-are-apache-solr-and-its-advantages', '', 'post');
						query_posts('showposts=10'); 
						if (have_posts()) : while (have_posts()) : the_post(); 
						?>
                        <div class="carditem">
                            <div class="card">
                                <?php the_post_thumbnail(); ?>
                                <div class="card-body">
                                    <small><em><?php the_time('l jS F, Y') ?></em></small>
                                    <h5 class="card-title"><?php the_title(); ?></h5><br><br>
                                    <a href="<?php the_permalink();?>" class="btn btn-primary" target="_self">Learn more</a>
                                </div>
                            </div>
                        </div>
						<?php endwhile; else: echo "no posts"; endif; ?><br><?php wp_reset_query(); ?>

                    </div>
                </div>
            </div>

        </div>
    </section>
	
	<?php } ?>
	<!-- Footer start -->
    <footer>
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="700">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 pr-5">
                            <h3 class="contactTitle">
                                Contact Us
                            </h3>
                            <div class="contactDetail">
                                51 E campbell Ave. #400A,<br>
                                Campbell, CA, 95008<br><br>
								<img src="assets/img/phone.png" alt="Phone" width="24" />&nbsp;&nbsp; +14084090256 <br>
								<img src="assets/img/email.png" alt="Email"  width="24" />&nbsp;&nbsp; info@nextbrickinc.com
                            </div>
                            <a class="contactBtn" href="contact-us">Contact Us</a>
                           <!-- <h3>Follow us</h3>
                            <ul class="socialLinks">
                                <li>
                                    <a href="#">
                                        <img src="assets/img/insta.png" alt="Insta" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/linkedIn.png" alt="linkedin" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="assets/img/fb.png" alt="fb" />
                                    </a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="col-md-2">
                            <ul class="list">
                                <li>
                                    <a href="./">Home</a>
                                </li>
                                <li>
                                    <a href="about">About</a>
                                </li>
                                <li>
                                    <a href="customers">Customers</a>
                                </li>
                                <li>
                                    <a href="partners">Partners</a>
                                </li>
                                <li>
                                    <a href="blog/">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3>Services</h3>
                            <ul class="list">
                                <li>
                                    <a href="content-management">Content Management</a>
                                </li>
                                <li>
                                    <a href="search">Search</a>
                                </li>
                                <li>
                                    <a href="bigdata">Bigdata</a>
                                </li>
                                <li>
                                    <a href="cloud">Cloud</a>
                                </li>
                                <li>
                                    <a href="offshore-development">Offshore Development</a>
                                </li>
                                <li>
                                    <a href="emerging-technologies">Emerging Technologies</a>
                                </li>
                                <li>
                                    <a href="application-development">Application Development</a>
                                </li>
                                <li>
                                    <a href="software-product-development">Software Product Development</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-0">
                        </div>
                        <div class="col-md-3 terms mr-0 pr-0">
                            <ul class="list">
                                <li>
                                    <a href="terms">Terms of Use</a> <span style="color:#fff;">|</span> <a href="privacy-policy">Privacy Policy</a>
                                </li>
                                <li>
                                    &nbsp;
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
<!-- Footer End -->

    <script type="text/javascript" src="./assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
    <script type="text/javascript" src="./assets/js/slider.js"></script>
    <script type="text/javascript" src="./assets/js/app.js"></script>
    <script type="text/javascript" src="./assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="./assets/js/aos.js"></script>
    <script type="text/javascript" src="./assets/js/contact.js"></script>

</body>

</html>