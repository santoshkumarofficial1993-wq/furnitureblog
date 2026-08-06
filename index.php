<?php require __DIR__ . '/bujfys.php' ?>
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
