
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="QUIZ BUDDY - The ultimate quiz experience with multiple categories and exciting challenges">
    <meta name="theme-color" content="#0e0a5f">
    <title>QUIZ BUDDY 2025 - Loading</title>
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Preload critical assets -->
    <link rel="preload" href="logo.svg" as="image" crossorigin>
    <link rel="preload" href="img.jpg" as="image">
    <link rel="preload" href="age.html" as="document">
    
    <!-- Font preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #0e0a5f;
            --primary-light: #282d93;
            --secondary: #e74c3c;
            --accent: #ff9800;
            --text: #ffffff;
            --background: #080630;
        }
        
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--background);
            color: var(--text);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
            position: relative;
        }
        
        body::after {
            background: url("img.jpg");
            content: "";
            position: fixed;
            z-index: 0;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0.05;
            background-size: cover;
        }
        
        /* Main container */
        .intro-container {
            position: relative;
            z-index: 1;
            text-align: center;
            width: 100%;
            max-width: 320px;
            padding: 2rem;
            animation: fadeIn 0.8s ease-out;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        
        /* Logo styles */
        .logo-container {
            position: relative;
            width: 150px;
            height: 150px;
            margin: 0 auto 1.5rem;
            animation: float 3s ease-in-out infinite;
        }
        
        .logo-circle {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-light), var(--primary));
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3rem;
            font-weight: 700;
            color: var(--text);
        }
        
        .logo-glow {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,152,0,0.3) 0%, rgba(255,152,0,0) 70%);
            animation: pulse 2s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.5;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.2;
            }
        }
        
        /* Title styles */
        .intro-message {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text);
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            letter-spacing: 1px;
        }
        
        .year-badge {
            display: inline-block;
            background-color: var(--accent);
            color: #000;
            font-size: 0.9rem;
            font-weight: 700;
            padding: 0.2rem 0.8rem;
            border-radius: 20px;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            animation: pulse-badge 2s infinite;
            position: relative;
        }
        
        .year-badge::before {
            content: "";
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            border-radius: 20px;
            background: linear-gradient(90deg, var(--accent), var(--secondary), var(--accent));
            z-index: -1;
            opacity: 0.5;
            animation: rotate 3s linear infinite;
        }
        
        @keyframes pulse-badge {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }
        
        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        
        /* Loading bar styles */
        .loading-container {
            position: relative;
            margin-top: 1rem;
        }
        
        .loading-bar {
            position: relative;
            width: 100%;
            height: 12px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .loading-progress {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, var(--secondary), var(--primary-light));
            border-radius: 10px;
            transition: width 0.3s ease;
        }
        
        .loading-progress::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 20px;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3));
            animation: shimmer 1s infinite;
        }
        
        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }
        
        .loading-text {
            margin-top: 1rem;
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.7);
            letter-spacing: 1px;
        }
        
        .loading-dots {
            display: inline-block;
            width: 20px;
            text-align: left;
        }
        
        .loading-dots::after {
            content: "";
            animation: dots 1.5s infinite;
        }
        
        @keyframes dots {
            0%, 20% {
                content: ".";
            }
            40% {
                content: "..";
            }
            60%, 100% {
                content: "...";
            }
        }
        
        .loading-percentage {
            position: absolute;
            top: -25px;
            right: 0;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--accent);
        }
        
        /* Dice decoration elements */
        .dice {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            z-index: -1;
        }
        
        .dice-1 {
            top: 10%;
            left: 10%;
            width: 60px;
            height: 60px;
            transform: rotate(15deg);
            animation: rotateSlow 30s linear infinite, float-dice 8s ease-in-out infinite;
        }
        
        .dice-2 {
            bottom: 15%;
            right: 10%;
            width: 50px;
            height: 50px;
            transform: rotate(-10deg);
            animation: rotateSlow 25s linear reverse infinite, float-dice 6s ease-in-out infinite 1s;
        }
        
        .dice-3 {
            top: 40%;
            right: 15%;
            width: 40px;
            height: 40px;
            transform: rotate(25deg);
            animation: rotateSlow 20s linear infinite, float-dice 7s ease-in-out infinite 0.5s;
        }
        
        .dice-4 {
            bottom: 30%;
            left: 15%;
            width: 45px;
            height: 45px;
            transform: rotate(-20deg);
            animation: rotateSlow 22s linear reverse infinite, float-dice 9s ease-in-out infinite 1.5s;
        }
        
        .dice-dot {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
        }
        
        /* Dice 1 dots */
        .dice-1 .dot-1 {
            top: 10px;
            left: 10px;
        }
        
        .dice-1 .dot-2 {
            top: 10px;
            right: 10px;
        }
        
        .dice-1 .dot-3 {
            top: 25px;
            left: 25px;
        }
        
        .dice-1 .dot-4 {
            bottom: 10px;
            left: 10px;
        }
        
        .dice-1 .dot-5 {
            bottom: 10px;
            right: 10px;
        }
        
        /* Dice 2 dots */
        .dice-2 .dot-1 {
            top: 10px;
            left: 10px;
        }
        
        .dice-2 .dot-2 {
            bottom: 10px;
            right: 10px;
        }
        
        /* Dice 3 dots */
        .dice-3 .dot-1 {
            top: 8px;
            left: 8px;
        }
        
        .dice-3 .dot-2 {
            top: 8px;
            right: 8px;
        }
        
        .dice-3 .dot-3 {
            bottom: 8px;
            left: 8px;
        }
        
        /* Dice 4 dots */
        .dice-4 .dot-1 {
            top: 10px;
            left: 10px;
        }
        
        .dice-4 .dot-2 {
            top: 10px;
            right: 10px;
        }
        
        .dice-4 .dot-3 {
            bottom: 10px;
            left: 10px;
        }
        
        .dice-4 .dot-4 {
            bottom: 10px;
            right: 10px;
        }
        
        @keyframes rotateSlow {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }
        
        @keyframes float-dice {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }
        
        /* Background particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            width: 3px;
            height: 3px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
        }
        
        /* Skip button */
        .skip-button {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.7);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.8rem;
            cursor: pointer;
            transition: all 0.2s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .skip-button:hover {
            background: rgba(255, 255, 255, 0.2);
            color: var(--text);
        }
        
        /* Tagline */
        .tagline {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.6);
            margin-top: 0.5rem;
            margin-bottom: 1rem;
            font-style: italic;
        }
        
        /* Responsive adjustments */
        @media (max-width: 480px) {
            .intro-container {
                padding: 1.5rem;
            }
            
            .logo-container {
                width: 120px;
                height: 120px;
            }
            
            .intro-message {
                font-size: 1.5rem;
            }
            
            .skip-button {
                bottom: 10px;
                right: 10px;
                padding: 6px 12px;
                font-size: 0.7rem;
            }
        }
        
        /* Fade out animation for page transition */
        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }
        
        .fade-out {
            animation: fadeOut 0.5s forwards;
        }
        
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 3000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>
    <div class="particles" id="particles"></div>
    
    <div class="dice dice-1">
        <div class="dice-dot dot-1"></div>
        <div class="dice-dot dot-2"></div>
        <div class="dice-dot dot-3"></div>
        <div class="dice-dot dot-4"></div>
        <div class="dice-dot dot-5"></div>
    </div>
    
    <div class="dice dice-2">
        <div class="dice-dot dot-1"></div>
        <div class="dice-dot dot-2"></div>
    </div>
    
    <div class="dice dice-3">
        <div class="dice-dot dot-1"></div>
        <div class="dice-dot dot-2"></div>
        <div class="dice-dot dot-3"></div>
    </div>
    
    <div class="dice dice-4">
        <div class="dice-dot dot-1"></div>
        <div class="dice-dot dot-2"></div>
        <div class="dice-dot dot-3"></div>
        <div class="dice-dot dot-4"></div>
    </div>
    
    <div class="intro-container" id="intro-container">
        <div class="logo-container">
            <div class="logo-glow"></div>
            <div class="logo-circle">QB</div>
        </div>
        
        <h1 class="intro-message">QUIZ BUDDY</h1>
        <div class="year-badge">2025</div>
        <p class="tagline">Test your knowledge, challenge your mind</p>
        
        <div class="loading-container">
            <div class="loading-percentage" id="loading-percentage">0%</div>
            <div class="loading-bar">
                <div class="loading-progress" id="loading-progress"></div>
            </div>
            <p class="loading-text">Loading your quiz experience<span class="loading-dots"></span></p>
        </div>
    </div>
    
    <button class="skip-button" id="skip-button">Skip Intro</button>
    
    <script>
        // Create background particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = Math.min(window.innerWidth / 3, 100); // Responsive particle count
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random position
                const x = Math.random() * 100;
                const y = Math.random() * 100;
                
                // Random size
                const size = Math.random() * 2 + 1;
                
                // Random opacity
                const opacity = Math.random() * 0.5 + 0.1;
                
                // Apply styles
                particle.style.left = `${x}%`;
                particle.style.top = `${y}%`;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.opacity = opacity;
                
                // Add to container
                particlesContainer.appendChild(particle);
                
                // Animate particle
                animateParticle(particle);
            }
        }
        
        // Animate a single particle
        function animateParticle(particle) {
            const duration = Math.random() * 30 + 10; // 10-40 seconds
            const xMove = Math.random() * 10 - 5; // -5 to 5
            const yMove = Math.random() * 10 - 5; // -5 to 5
            
            particle.style.transition = `transform ${duration}s linear`;
            particle.style.transform = `translate(${xMove}vw, ${yMove}vh)`;
            
            // Reset animation after completion
            setTimeout(() => {
                particle.style.transition = 'none';
                particle.style.transform = 'translate(0, 0)';
                
                // Start new animation
                setTimeout(() => {
                    animateParticle(particle);
                }, 50);
            }, duration * 1000);
        }
        
        // Preload assets for the next page
        function preloadAssets() {
            // Preload age.html
            const link = document.createElement('link');
            link.rel = 'preload';
            link.as = 'document';
            link.href = 'age.html';
            document.head.appendChild(link);
            
            // Preload images
            const images = [
                'img.jpg',
                'logo.svg',
                'background.jpg'
            ];
            
            images.forEach(src => {
                const img = new Image();
                img.src = src;
            });
        }
        
        // Navigate to the next page
        function navigateToNextPage() {
            // Fade out the container
            const introContainer = document.getElementById('intro-container');
            introContainer.classList.add('fade-out');
            
            // Redirect to age.html after fade out animation
            setTimeout(() => {
                window.location.href = 'age.html';
            }, 500);
        }
        
        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            // Create particles
            createParticles();
            
            // Preload assets
            preloadAssets();
            
            // Clear any previous verification data
            localStorage.removeItem('ageVerified');
            localStorage.removeItem('selectedCategory');
            
            // Set up skip button
            const skipButton = document.getElementById('skip-button');
            skipButton.addEventListener('click', navigateToNextPage);
            
            // Track loading progress
            let progress = 0;
            const progressBar = document.getElementById('loading-progress');
            const percentageText = document.getElementById('loading-percentage');
            
            // Simulate loading progress
            const interval = setInterval(() => {
                // Increment progress with variable speed (slower at start, faster at end)
                const increment = progress < 50 ? 1 : (progress < 80 ? 2 : 3);
                progress += increment;
                
                if (progress >= 100) {
                    clearInterval(interval);
                    progress = 100;
                    
                    // Update UI
                    progressBar.style.width = `${progress}%`;
                    percentageText.textContent = `${progress}%`;
                    
                    // Add a small delay after reaching 100% before redirecting
                    setTimeout(navigateToNextPage, 300);
                } else {
                    // Update UI
                    progressBar.style.width = `${progress}%`;
                    percentageText.textContent = `${progress}%`;
                }
            }, 30);
            
            // Fallback redirect after maximum time (2 seconds)
            setTimeout(() => {
                if (progress < 100) {
                    clearInterval(interval);
                    navigateToNextPage();
                }
            }, 2000);
        });
        
        // Handle visibility change to pause/resume animations when tab is inactive
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                // Page is hidden, consider pausing animations
                document.body.classList.add('paused');
            } else {
                // Page is visible again, resume animations
                document.body.classList.remove('paused');
            }
        });
    </script>
</body>
</html>