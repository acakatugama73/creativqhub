<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreativqHub Florist - Fresh Flowers & Arrangements | Local Flower Delivery</title>
    <meta name="description" content="CreativqHub Florist offers beautiful fresh flower arrangements, bouquets, and floral designs for all occasions. Professional florists serving the community with quality blooms and personalized service. Click here to continue exploring our floral collections and discover the perfect flowers for your special moments.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #2c3e50;
            background-color: #fefefe;
        }

        .nav-container-x7k9 {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-m4p2 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-section-q8w1 {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .nav-menu-r5t3 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-item-b9x7 a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-item-b9x7 a:hover {
            color: #f1c40f;
        }

        .hero-section-d6n8 {
            background: linear-gradient(rgba(46, 204, 113, 0.8), rgba(39, 174, 96, 0.8)), url('https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }

        .hero-content-l3k5 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-z9m4 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle-p7q2 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-w8v6 {
            background: #f39c12;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-weight: bold;
        }

        .cta-button-w8v6:hover {
            background: #e67e22;
            transform: translateY(-2px);
        }

        .section-container-j4h9 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .about-section-k2n7 {
            background: #ecf0f1;
            padding: 5rem 0;
        }

        .about-content-f8s3 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-y5r1 {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image-t9w4 {
            text-align: center;
        }

        .about-image-t9w4 img {
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .section-title-u6p8 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #27ae60;
            position: relative;
        }

        .section-title-u6p8::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: #f39c12;
            margin: 1rem auto;
            border-radius: 2px;
        }

        .services-grid-a3x9 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-card-h7k2 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .service-card-h7k2:hover {
            transform: translateY(-5px);
        }

        .service-icon-m9q4 {
            font-size: 3rem;
            color: #27ae60;
            margin-bottom: 1rem;
        }

        .service-title-n5w7 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .history-section-c8v1 {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            padding: 5rem 0;
        }

        .timeline-container-x4j6 {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline-item-q7n3 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .timeline-year-s2k8 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #f1c40f;
            margin-bottom: 0.5rem;
        }

        .reviews-section-p4m9 {
            background: #f8f9fa;
            padding: 5rem 0;
        }

        .reviews-grid-l6t5 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .review-card-e9r2 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            position: relative;
        }

        .review-stars-w3q7 {
            color: #f39c12;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-text-b8n4 {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .review-author-k5x1 {
            font-weight: bold;
            color: #27ae60;
        }

        .specialty-section-v7h3 {
            padding: 5rem 0;
            background: linear-gradient(45deg, #e8f5e8, #f0f8f0);
        }

        .specialty-grid-d2p6 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .specialty-item-j9w5 {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .specialty-item-j9w5:hover {
            transform: scale(1.05);
        }

        .specialty-emoji-r4t8 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .process-section-n6k9 {
            background: #2c3e50;
            color: white;
            padding: 5rem 0;
        }

        .process-steps-m1q3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .process-step-y8s7 {
            text-align: center;
            padding: 2rem;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .step-number-z3f4 {
            background: #f39c12;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        .footer-section-a5g8 {
            background: #1a252f;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content-h2j7 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section-title-k9p4 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #27ae60;
        }

        .footer-link-x7m2 {
            color: #bdc3c7;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .footer-link-x7m2:hover {
            color: #f39c12;
        }

        .phone-link-q4w9 {
            color: #f39c12;
            text-decoration: none;
            font-weight: bold;
        }

        .copyright-bar-s6n1 {
            background: #16202b;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
            color: #7f8c8d;
        }

        .modal-overlay-t8r5 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-f3k7 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-b9x4 {
            position: absolute;
            top: 10px;
            right: 15px;
            background: none;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: #7f8c8d;
        }

        .continue-link-p7q8 {
            background: linear-gradient(45deg, #e74c3c, #c0392b);
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .continue-link-p7q8:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(231, 76, 60, 0.4);
        }

        .gallery-section-w5n2 {
            padding: 5rem 0;
            background: #fafafa;
        }

        .gallery-grid-m8k4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .gallery-item-j6p9 {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .gallery-item-j6p9:hover {
            transform: scale(1.03);
        }

        .gallery-item-j6p9 img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .care-tips-section-r3v7 {
            background: linear-gradient(135deg, #8e44ad, #9b59b6);
            color: white;
            padding: 5rem 0;
        }

        .tips-grid-l4s8 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .tip-card-x9h2 {
            background: rgba(255,255,255,0.15);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
        }

        .tip-icon-q5m6 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .nav-menu-r5t3 {
                display: none;
            }
            
            .hero-title-z9m4 {
                font-size: 2.5rem;
            }
            
            .about-content-f8s3 {
                grid-template-columns: 1fr;
            }
            
            .section-container-j4h9 {
                padding: 2rem 1rem;
            }
        }
    </style>
</head>
<body>
    <nav class="nav-container-x7k9">
        <div class="nav-wrapper-m4p2">
            <a href="#home" class="logo-section-q8w1">CreativqHub Florist</a>
            <ul class="nav-menu-r5t3">
                <li class="nav-item-b9x7"><a href="#home">Home</a></li>
                <li class="nav-item-b9x7"><a href="#about">About Us</a></li>
                <li class="nav-item-b9x7"><a href="#services">Services</a></li>
                <li class="nav-item-b9x7"><a href="#history">Our Story</a></li>
                <li class="nav-item-b9x7"><a href="#specialties">Specialties</a></li>
                <li class="nav-item-b9x7"><a href="#process">Our Process</a></li>
                <li class="nav-item-b9x7"><a href="#gallery">Gallery</a></li>
                <li class="nav-item-b9x7"><a href="#care-tips">Care Tips</a></li>
                <li class="nav-item-b9x7"><a href="#reviews">Reviews</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-d6n8">
        <div class="hero-content-l3k5">
            <h1 class="hero-title-z9m4">Beautiful Blooms for Every Occasion</h1>
            <p class="hero-subtitle-p7q2">Creating stunning floral arrangements that bring joy and beauty to your special moments</p>
            <a href="#about" class="cta-button-w8v6">Discover Our Story</a>
        </div>
    </section>

    <section id="about" class="about-section-k2n7">
        <div class="section-container-j4h9">
            <h2 class="section-title-u6p8">About CreativqHub Florist</h2>
            <div class="about-content-f8s3">
                <div class="about-text-y5r1">
                    <p>Welcome to CreativqHub Florist, where passion meets petals in perfect harmony. Our dedicated team of skilled florists has been serving the community for over two decades, creating breathtaking floral arrangements that capture the essence of every special moment.</p>
                    
                    <p>We believe that flowers have the unique power to express emotions, celebrate milestones, and bring comfort during difficult times. Each arrangement we create is carefully crafted with fresh, high-quality blooms sourced from trusted local and international growers.</p>
                    
                    <a href="#services" class="continue-link-p7q8">Click here to continue exploring our services</a>
                    
                    <p>Our commitment to excellence extends beyond just creating beautiful arrangements. We pride ourselves on providing personalized service, understanding each customer's unique needs, and delivering exceptional results that exceed expectations every time.</p>
                </div>
                <div class="about-image-t9w4">
                    <img src="https://images.pexels.com/photos/1375849/pexels-photo-1375849.jpeg" alt="Professional florist arranging flowers">
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section-container-j4h9">
        <h2 class="section-title-u6p8">Our Services</h2>
        <div class="services-grid-a3x9">
            <div class="service-card-h7k2">
                <div class="service-icon-m9q4">💐</div>
                <h3 class="service-title-n5w7">Wedding Arrangements</h3>
                <p>Transform your special day with our exquisite wedding floral designs. From bridal bouquets to ceremony decorations, we create magical moments with fresh, beautiful blooms that perfectly complement your vision.</p>
            </div>
            <div class="service-card-h7k2">
                <div class="service-icon-m9q4">🎉</div>
                <h3 class="service-title-n5w7">Event Florals</h3>
                <p>Make your celebrations unforgettable with our stunning event arrangements. Whether it's a birthday party, anniversary, or corporate gathering, our creative designs add elegance and charm to any occasion.</p>
            </div>
            <div class="service-card-h7k2">
                <div class="service-icon-m9q4">🏠</div>
                <h3 class="service-title-n5w7">Home Decorations</h3>
                <p>Brighten your living space with our beautiful home floral arrangements. Our seasonal designs and custom creations bring natural beauty and fresh fragrance to every room in your home.</p>
            </div>
            <div class="service-card-h7k2">
                <div class="service-icon-m9q4">💝</div>
                <h3 class="service-title-n5w7">Gift Bouquets</h3>
                <p>Express your feelings with our thoughtfully designed gift bouquets. Perfect for birthdays, anniversaries, or just because moments, each arrangement is crafted to convey your heartfelt message.</p>
            </div>
            <div class="service-card-h7k2">
                <div class="service-icon-m9q4">🌿</div>
                <h3 class="service-title-n5w7">Plant Care Services</h3>
                <p>Keep your plants healthy and thriving with our expert care services. We provide maintenance, repotting, and consultation to ensure your green companions flourish year-round.</p>
            </div>
            <div class="service-card-h7k2">
                <div class="service-icon-m9q4">🚚</div>
                <h3 class="service-title-n5w7">Same-Day Delivery</h3>
                <p>Need flowers fast? Our reliable same-day delivery service ensures your arrangements arrive fresh and on time. We cover the entire metropolitan area with our efficient delivery network.</p>
            </div>
        </div>
    </section>

    <section id="history" class="history-section-c8v1">
        <div class="section-container-j4h9">
            <h2 class="section-title-u6p8" style="color: white;">Our Journey Through Time</h2>
            <div class="timeline-container-x4j6">
                <div class="timeline-item-q7n3">
                    <div class="timeline-year-s2k8">1998</div>
                    <h3>The Beginning</h3>
                    <p>CreativqHub Florist opened its doors as a small family-owned flower shop with a simple mission: to bring joy through beautiful flowers. Our founder, Maria Rodriguez, started with just three employees and a passion for floral artistry.</p>
                </div>
                <div class="timeline-item-q7n3">
                    <div class="timeline-year-s2k8">2003</div>
                    <h3>Expanding Horizons</h3>
                    <p>We expanded our services to include wedding planning and large-scale event decorations. This growth allowed us to serve more customers and take on bigger, more creative projects that challenged our artistic abilities.</p>
                </div>
                <div class="timeline-item-q7n3">
                    <div class="timeline-year-s2k8">2010</div>
                    <h3>Digital Innovation</h3>
                    <p>Embracing technology, we launched our online ordering system and began offering virtual consultations. This innovation helped us reach customers beyond our local area and provide convenient service options.</p>
                </div>
                <div class="timeline-item-q7n3">
                    <div class="timeline-year-s2k8">2018</div>
                    <h3>Sustainable Practices</h3>
                    <p>We implemented eco-friendly practices, partnering with local organic growers and using biodegradable packaging. Our commitment to sustainability reflects our care for both our customers and the environment.</p>
                </div>
                <div class="timeline-item-q7n3">
                    <div class="timeline-year-s2k8">2023</div>
                    <h3>Community Recognition</h3>
                    <p>Awarded "Best Local Florist" by the Chamber of Commerce for the fifth consecutive year. Today, we continue to serve our community with the same passion and dedication that started our journey 25 years ago.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="specialties" class="specialty-section-v7h3">
        <div class="section-container-j4h9">
            <h2 class="section-title-u6p8">Our Specialties</h2>
            <div class="specialty-grid-d2p6">
                <div class="specialty-item-j9w5">
                    <div class="specialty-emoji-r4t8">🌹</div>
                    <h3>Rose Arrangements</h3>
                    <p>Expert in creating stunning rose bouquets and arrangements using the finest varieties. From classic red roses to unique rainbow collections, we master the art of rose presentation.</p>
                </div>
                <div class="specialty-item-j9w5">
                    <div class="specialty-emoji-r4t8">🌺</div>
                    <h3>Tropical Designs</h3>
                    <p>Bringing exotic beauty with our tropical flower arrangements. Featuring birds of paradise, orchids, and other exotic blooms that add vibrant colors and unique textures to any space.</p>
                </div>
                <div class="specialty-item-j9w5">
                    <div class="specialty-emoji-r4t8">🌸</div>
                    <h3>Seasonal Collections</h3>
                    <p>Celebrating each season with specially curated arrangements. Spring tulips, summer sunflowers, autumn chrysanthemums, and winter evergreens - we capture the essence of every season.</p>
                </div>
                <div class="specialty-item-j9w5">
                    <div class="specialty-emoji-r4t8">🎨</div>
                    <h3>Custom Artistry</h3>
                    <p>Creating one-of-a-kind arrangements tailored to your specific vision. Our artists work closely with you to design unique pieces that perfectly match your style and preferences.</p>
                </div>
                <div class="specialty-item-j9w5">
                    <div class="specialty-emoji-r4t8">🌿</div>
                    <h3>Greenery Designs</h3>
                    <p>Specializing in lush greenery arrangements and living walls. Perfect for modern spaces, our green designs bring natural tranquility and air-purifying benefits to your environment.</p>
                </div>
                <div class="specialty-item-j9w5">
                    <div class="specialty-emoji-r4t8">💐</div>
                    <h3>Bridal Expertise</h3>
                    <p>Dedicated bridal consultation services with over 500 successful weddings completed. We understand the importance of your special day and create floral magic that exceeds expectations.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#process" class="continue-link-p7q8">Click here to continue learning about our process</a>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-n6k9">
        <div class="section-container-j4h9">
            <h2 class="section-title-u6p8" style="color: white;">Our Creative Process</h2>
            <div class="process-steps-m1q3">
                <div class="process-step-y8s7">
                    <div class="step-number-z3f4">1</div>
                    <h3>Consultation</h3>
                    <p>We begin with a detailed consultation to understand your vision, preferences, and the occasion. This personal touch ensures every arrangement reflects your unique style.</p>
                </div>
                <div class="process-step-y8s7">
                    <div class="step-number-z3f4">2</div>
                    <h3>Design Planning</h3>
                    <p>Our expert florists create a custom design plan, selecting the perfect flowers, colors, and arrangements that align with your requirements and budget.</p>
                </div>
                <div class="process-step-y8s7">
                    <div class="step-number-z3f4">3</div>
                    <h3>Fresh Selection</h3>
                    <p>We carefully source the freshest, highest-quality flowers from our trusted network of local and international growers, ensuring peak beauty and longevity.</p>
                </div>
                <div class="process-step-y8s7">
                    <div class="step-number-z3f4">4</div>
                    <h3>Artistic Creation</h3>
                    <p>Our skilled artisans craft your arrangement with meticulous attention to detail, combining technical expertise with creative flair to bring your vision to life.</p>
                </div>
                <div class="process-step-y8s7">
                    <div class="step-number-z3f4">5</div>
                    <h3>Quality Check</h3>
                    <p>Every arrangement undergoes a thorough quality inspection to ensure it meets our high standards before being prepared for delivery or pickup.</p>
                </div>
                <div class="process-step-y8s7">
                    <div class="step-number-z3f4">6</div>
                    <h3>Timely Delivery</h3>
                    <p>We provide reliable, punctual delivery service, ensuring your flowers arrive fresh and beautiful at the perfect moment for your special occasion.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery-section-w5n2">
        <div class="section-container-j4h9">
            <h2 class="section-title-u6p8">Our Floral Gallery</h2>
            <p style="text-align: center; font-size: 1.1rem; margin-bottom: 2rem;">Explore our collection of beautiful arrangements and get inspired for your next floral creation</p>
            <div class="gallery-grid-m8k4">
                <div class="gallery-item-j6p9">
                    <img src="https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg" alt="Elegant wedding bouquet">
                </div>
                <div class="gallery-item-j6p9">
                    <img src="https://images.pexels.com/photos/1375849/pexels-photo-1375849.jpeg" alt="Colorful spring arrangement">
                </div>
                <div class="gallery-item-j6p9">
                    <img src="https://images.pexels.com/photos/1166209/pexels-photo-1166209.jpeg" alt="Tropical flower display">
                </div>
                <div class="gallery-item-j6p9">
                    <img src="https://images.pexels.com/photos/1024960/pexels-photo-1024960.jpeg" alt="Rose garden arrangement">
                </div>
                <div class="gallery-item-j6p9">
                                        <img src="https://images.pexels.com/photos/1408221/pexels-photo-1408221.jpeg" alt="Sunflower centerpiece">
                </div>
                <div class="gallery-item-j6p9">
                    <img src="https://images.pexels.com/photos/931177/pexels-photo-931177.jpeg" alt="Mixed seasonal bouquet">
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#care-tips" class="continue-link-p7q8">Click here to continue to our care tips</a>
            </div>
        </div>
    </section>

    <section id="care-tips" class="care-tips-section-r3v7">
        <div class="section-container-j4h9">
            <h2 class="section-title-u6p8" style="color: white;">Flower Care Tips</h2>
            <p style="text-align: center; font-size: 1.1rem; margin-bottom: 2rem; opacity: 0.9;">Learn how to keep your flowers fresh and beautiful for longer with our expert advice</p>
            <div class="tips-grid-l4s8">
                <div class="tip-card-x9h2">
                    <div class="tip-icon-q5m6">💧</div>
                    <h3>Proper Hydration</h3>
                    <p>Change the water every 2-3 days and trim stems at an angle under running water. Use clean, lukewarm water and add flower food to extend the life of your blooms.</p>
                </div>
                <div class="tip-card-x9h2">
                    <div class="tip-icon-q5m6">✂️</div>
                    <h3>Regular Trimming</h3>
                    <p>Cut stems at a 45-degree angle every few days to improve water absorption. Remove any wilted leaves or flowers to prevent bacteria growth and maintain freshness.</p>
                </div>
                <div class="tip-card-x9h2">
                    <div class="tip-icon-q5m6">🌡️</div>
                    <h3>Temperature Control</h3>
                    <p>Keep flowers away from direct sunlight, heating vents, and drafts. Cool temperatures help preserve freshness and extend the life of your arrangements.</p>
                </div>
                <div class="tip-card-x9h2">
                    <div class="tip-icon-q5m6">🧼</div>
                    <h3>Clean Vases</h3>
                    <p>Always use a clean vase and wash it thoroughly between arrangements. Bacteria from dirty containers can significantly reduce flower longevity.</p>
                </div>
                <div class="tip-card-x9h2">
                    <div class="tip-icon-q5m6">🌿</div>
                    <h3>Leaf Management</h3>
                    <p>Remove leaves that would sit below the waterline to prevent bacterial growth. Keep upper leaves clean and mist lightly to maintain humidity.</p>
                </div>
                <div class="tip-card-x9h2">
                    <div class="tip-icon-q5m6">⏰</div>
                    <h3>Daily Maintenance</h3>
                    <p>Check your arrangements daily, removing spent blooms and adjusting stems as needed. A few minutes of daily care can double the life of your flowers.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-p4m9">
        <div class="section-container-j4h9">
            <h2 class="section-title-u6p8">What Our Customers Say</h2>
            <div class="reviews-grid-l6t5">
                <div class="review-card-e9r2">
                    <div class="review-stars-w3q7">★★★★★</div>
                    <p class="review-text-b8n4">"CreativqHub Florist made my wedding absolutely magical! The bridal bouquet was beyond my dreams, and the ceremony decorations were breathtaking. Maria and her team understood my vision perfectly and delivered exceptional quality. I couldn't have asked for better service!"</p>
                    <div class="review-author-k5x1">- Sarah Mitchell</div>
                </div>
                <div class="review-card-e9r2">
                    <div class="review-stars-w3q7">★★★★★</div>
                    <p class="review-text-b8n4">"I've been ordering from CreativqHub for over five years, and they never disappoint. Their seasonal arrangements brighten up my home, and the flowers always last much longer than expected. The staff is knowledgeable and always helps me choose the perfect blooms."</p>
                    <div class="review-author-k5x1">- Robert Chen</div>
                </div>
                <div class="review-card-e9r2">
                    <div class="review-stars-w3q7">★★★★★</div>
                    <p class="review-text-b8n4">"The same-day delivery service saved my anniversary! I forgot to order flowers in advance, but CreativqHub came through with a stunning arrangement that arrived within hours. My wife was thrilled, and I was grateful for their reliable service."</p>
                    <div class="review-author-k5x1">- Michael Thompson</div>
                </div>
                <div class="review-card-e9r2">
                    <div class="review-stars-w3q7">★★★★★</div>
                    <p class="review-text-b8n4">"As an event planner, I work with many florists, but CreativqHub stands out for their creativity and professionalism. They consistently deliver stunning arrangements that exceed client expectations. Their attention to detail is remarkable."</p>
                    <div class="review-author-k5x1">- Jennifer Adams</div>
                </div>
                <div class="review-card-e9r2">
                    <div class="review-stars-w3q7">★★★★★</div>
                    <p class="review-text-b8n4">"The tropical arrangements from CreativqHub transformed our corporate office space. The vibrant colors and exotic flowers create a welcoming atmosphere that our clients and employees love. Excellent quality and service every time."</p>
                    <div class="review-author-k5x1">- David Rodriguez</div>
                </div>
                <div class="review-card-e9r2">
                    <div class="review-stars-w3q7">★★★★★</div>
                    <p class="review-text-b8n4">"I ordered a sympathy arrangement during a difficult time, and the compassionate service I received was touching. The arrangement was beautiful and appropriate, and the delivery was handled with such care and respect."</p>
                    <div class="review-author-k5x1">- Lisa Parker</div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#home" class="continue-link-p7q8">Click here to continue to the top</a>
            </div>
        </div>
    </section>

    <footer class="footer-section-a5g8">
        <div class="footer-content-h2j7">
            <div>
                <h3 class="footer-section-title-k9p4">Contact Information</h3>
                <p>📍 1247 Blossom Avenue<br>Garden District, FL 33156</p>
                <p>📧 info@creativqhub.com</p>
                <p>📞 <a href="tel:+1-555-FLOWERS" class="phone-link-q4w9">+1 (555) 356-9377</a></p>
                <p>🕒 Mon-Sat: 8AM-7PM<br>Sunday: 10AM-5PM</p>
            </div>
            <div>
                <h3 class="footer-section-title-k9p4">Quick Links</h3>
                <a href="#about" class="footer-link-x7m2">About Us</a>
                <a href="#services" class="footer-link-x7m2">Our Services</a>
                <a href="#gallery" class="footer-link-x7m2">Gallery</a>
                <a href="#care-tips" class="footer-link-x7m2">Care Tips</a>
                <a href="#reviews" class="footer-link-x7m2">Customer Reviews</a>
            </div>
            <div>
                <h3 class="footer-section-title-k9p4">Services</h3>
                <a href="#services" class="footer-link-x7m2">Wedding Florals</a>
                <a href="#services" class="footer-link-x7m2">Event Decorations</a>
                <a href="#services" class="footer-link-x7m2">Same-Day Delivery</a>
                <a href="#services" class="footer-link-x7m2">Custom Arrangements</a>
                <a href="#services" class="footer-link-x7m2">Plant Care Services</a>
            </div>
            <div>
                <h3 class="footer-section-title-k9p4">Legal</h3>
                <a href="#" class="footer-link-x7m2" onclick="openModal('privacy')">Privacy Policy</a>
                <a href="#" class="footer-link-x7m2" onclick="openModal('terms')">Terms of Service</a>
                <p style="margin-top: 1rem; color: #7f8c8d;">Follow us on social media for daily floral inspiration and seasonal tips!</p>
            </div>
        </div>
        <div class="copyright-bar-s6n1">
            <p>© 2023 CreativqHub Florist. All rights reserved. | Bringing beauty to life through flowers since 1998</p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-t8r5">
        <div class="modal-content-f3k7">
            <button class="modal-close-b9x4" onclick="closeModal('privacy')">×</button>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2023</p>
            
            <h3>Information We Collect</h3>
            <p>CreativqHub Florist collects information you provide directly to us, such as when you create an account, make a purchase, or contact us for support. This may include your name, email address, phone number, billing and delivery addresses, and payment information.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, process transactions, send you technical notices and support messages, and communicate with you about products, services, and promotional offers.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted partners who assist us in operating our website and conducting our business.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Contact Us</h3>
            <p>If you have any questions about this Privacy Policy, please contact us at info@creativqhub.com or call <a href="tel:+1-555-FLOWERS" class="phone-link-q4w9">+1 (555) 356-9377</a>.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-t8r5">
        <div class="modal-content-f3k7">
            <button class="modal-close-b9x4" onclick="closeModal('terms')">×</button>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2023</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using CreativqHub Florist's services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
            
            <h3>Service Description</h3>
            <p>CreativqHub Florist provides floral arrangement services, including custom bouquets, event decorations, and delivery services. We reserve the right to modify or discontinue services at any time without notice.</p>
            
            <h3>Orders and Payment</h3>
            <p>All orders are subject to acceptance and availability. Payment is required at the time of order placement. We accept major credit cards and electronic payments. Prices are subject to change without notice.</p>
            
            <h3>Delivery Policy</h3>
            <p>We strive to deliver orders on time, but delivery times are estimates only. We are not liable for delays caused by weather, traffic, or other circumstances beyond our control. Same-day delivery is available for orders placed before 2 PM.</p>
            
            <h3>Limitation of Liability</h3>
            <p>CreativqHub Florist shall not be liable for any indirect, incidental, special, or consequential damages arising from the use of our services. Our liability is limited to the purchase price of the products or services.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at info@creativqhub.com or <a href="tel:+1-555-FLOWERS" class="phone-link-q4w9">+1 (555) 356-9377</a>.</p>
        </div>
    </div>

    <script>
        function openModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
        }

        function closeModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay-t8r5')) {
                event.target.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav-container-x7k9');
            if (window.scrollY > 100) {
                nav.style.background = 'linear-gradient(135deg, #229954, #27ae60)';
            } else {
                nav.style.background = 'linear-gradient(135deg, #27ae60, #2ecc71)';
            }
        });

        // Add animation to service cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe service cards and other elements
        document.querySelectorAll('.service-card-h7k2, .specialty-item-j9w5, .review-card-e9r2').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Add hover effects to gallery items
        document.querySelectorAll('.gallery-item-j6p9').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05) rotate(1deg)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) rotate(0deg)';
            });
        });

        // Add click tracking for continue buttons
        document.querySelectorAll('.continue-link-p7q8').forEach(button => {
            button.addEventListener('click', function() {
                console.log('Continue button clicked:', this.textContent);
            });
        });

        // Add dynamic year to copyright
        document.addEventListener('DOMContentLoaded', function() {
            const currentYear = new Date().getFullYear();
            const copyrightText = document.querySelector('.copyright-bar-s6n1 p');
            if (copyrightText) {
                copyrightText.innerHTML = copyrightText.innerHTML.replace('2023', currentYear);
            }
        });

        // Add form validation for contact interactions
        function validatePhoneClick() {
            console.log('Phone number clicked for call');
            return true;
        }

        // Add phone click tracking
        document.querySelectorAll('.phone-link-q4w9').forEach(link => {
            link.addEventListener('click', validatePhoneClick);
        });

        // Add seasonal greeting based on current date
        function addSeasonalGreeting() {
            const month = new Date().getMonth();
            let greeting = '';
            
            if (month >= 2 && month <= 4) {
                greeting = 'Spring into beauty with our fresh seasonal arrangements! 🌸';
            } else if (month >= 5 && month <= 7) {
                greeting = 'Summer blooms are here! Brighten your days with vibrant colors! ☀️';
            } else if (month >= 8 && month <= 10) {
                greeting = 'Fall in love with our autumn collection! 🍂';
            } else {
                greeting = 'Winter wonderland awaits with our festive arrangements! ❄️';
            }
            
            const heroSubtitle = document.querySelector('.hero-subtitle-p7q2');
            if (heroSubtitle) {
                heroSubtitle.innerHTML += '<br><small style="font-size: 0.9em; margin-top: 1rem; display: block;">' + greeting + '</small>';
            }
        }

        // Initialize seasonal greeting
        addSeasonalGreeting();

        // Add loading optimization
        document.addEventListener('DOMContentLoaded', function() {
            // Lazy load images
            const images = document.querySelectorAll('img');
            images.forEach(img => {
                img.loading = 'lazy';
            });
            
            // Preload critical CSS
            const criticalCSS = document.createElement('style');
            criticalCSS.textContent = `
                .nav-container-x7k9 { will-change: background; }
                .service-card-h7k2 { will-change: transform; }
                .gallery-item-j6p9 { will-change: transform; }
            `;
            document.head.appendChild(criticalCSS);
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>


