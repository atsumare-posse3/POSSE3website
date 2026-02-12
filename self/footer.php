    </main>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-brand">
                    <p class="footer-logo">POSSE <span>5th Generation</span></p>
                    <p class="footer-tagline">次世代のエンジニアを目指して</p>
                </div>
                <div class="footer-links">
                    <a href="#">GitHub</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 POSSE 5期生. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <style>
        .footer {
            background: linear-gradient(135deg, #0d47a1 0%, #1a237e 100%);
            color: #ffffff;
            padding: 40px 20px 20px;
            margin-top: auto;
        }
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 24px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .footer-brand {
            text-align: left;
        }
        .footer-logo {
            font-size: 1.25rem;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .footer-logo span {
            color: #90caf9;
            font-weight: normal;
        }
        .footer-tagline {
            font-size: 0.85rem;
            color: #b3e5fc;
            margin-top: 8px;
        }
        .footer-links {
            display: flex;
            gap: 24px;
        }
        .footer-links a {
            color: #b3e5fc;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }
        .footer-links a:hover {
            color: #ffffff;
        }
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            font-size: 0.8rem;
            color: #90caf9;
        }
        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                gap: 24px;
                text-align: center;
            }
            .footer-brand {
                text-align: center;
            }
        }
    </style>
</body>
</html>
