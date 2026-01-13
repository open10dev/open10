<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OPEN10</title>

    <!-- Fonts -->
    <link href="https://unpkg.com/@vercel/font@1.0.0/dist/geist-sans.css" rel="stylesheet">

    <style>
        :root {
            --bg: #f7f7f9;
            --text-primary: #111;
            --text-secondary: #555;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            background: var(--bg);
            font-family: "Geist Sans", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px 20px;
            color: var(--text-primary);
        }

        .container {
            width: 100%;
            max-width: 1200px;
            text-align: center;
        }

        /* ---------- HERO ---------- */

        .brand-title {
            font-size: clamp(56px, 10vw, 110px);
            font-weight: 700;
            letter-spacing: 0.08em;
            transform: skew(-8deg);
            margin-bottom: 24px;
        }

        .brand-title span {
            font-family: "Geist Sans", sans-serif;
            color: var(--text-primary);
        }

        .subtitle {
            max-width: 720px;
            margin: 0 auto 64px;
            font-size: 20px;
            font-style: italic;
            line-height: 1.6;
            color: var(--text-secondary);
        }

        /* ---------- BOXES ---------- */

        .boxes {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 28px;
            margin-bottom: 64px;
        }

        .box {
            border-radius: 22px;
            padding: 28px 26px 30px;
            text-align: left;
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.08);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .box:hover {
            transform: translateY(-6px);
            box-shadow: 0 28px 60px rgba(0, 0, 0, 0.12);
        }

        .icon {
            width: 44px;
            height: 44px;
            border-radius: 14px;
            background: rgba(255,255,255,0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .icon svg {
            width: 22px;
            height: 22px;
            stroke-width: 1.6;
        }

        .box h3 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .box p {
            font-size: 15px;
            line-height: 1.6;
            color: #333;
        }

        /* ---------- COLORS ---------- */

        .yellow { background: linear-gradient(135deg, #fff1b8, #fde68a); }
        .blue   { background: linear-gradient(135deg, #e0e7ff, #c7d2fe); }
        .green  { background: linear-gradient(135deg, #d1fae5, #a7f3d0); }
        .pink   { background: linear-gradient(135deg, #fce7f3, #fbcfe8); }

        /* ---------- FOOTER ---------- */

        footer {
            font-size: 16px;
            color: var(--text-secondary);
        }

        footer span {
            color: #e11d48;
        }

        /* ---------- RESPONSIVE ---------- */

        @media (max-width: 1024px) {
            .boxes {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .boxes {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <!-- HERO -->
    <h1 class="brand-title">
        <span>OPEN</span><span>10</span>
    </h1>

    <p class="subtitle">
        From development to deployment, we turn your open source stack,
        AI and IDP vision into a production reality.
    </p>

    <!-- BOXES -->
    <div class="boxes">

        <div class="box yellow">
            <div class="icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="#111">
                    <rect x="3" y="4" width="7" height="6" rx="2"/>
                    <rect x="14" y="4" width="7" height="5" rx="2"/>
                    <rect x="8" y="14" width="8" height="6" rx="2"/>
                </svg>
            </div>
            <h3>Development Foundations</h3>
            <p>
                Design and build modern products on an open-source stack
                with clean architecture and future-proof patterns.
            </p>
        </div>

        <div class="box blue">
            <div class="icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="#111">
                    <circle cx="12" cy="12" r="7"/>
                    <path d="M12 5v-2M12 21v-2M5 12H3M21 12h-2"/>
                </svg>
            </div>
            <h3>AI-Assisted Delivery</h3>
            <p>
                Embed AI into your pipelines with code generation,
                review, and copilots tuned to your domain.
            </p>
        </div>

        <div class="box green">
            <div class="icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="#111">
                    <rect x="3" y="4" width="6" height="5" rx="1.5"/>
                    <rect x="15" y="4" width="6" height="5" rx="1.5"/>
                    <rect x="9" y="14" width="6" height="5" rx="1.5"/>
                </svg>
            </div>
            <h3>Internal Developer Platforms</h3>
            <p>
                Build IDPs with golden paths, self-service environments,
                and paved roads for every service.
            </p>
        </div>

        <div class="box pink">
            <div class="icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="#111">
                    <path d="M12 3l7 3v6c0 4.4-2.7 8-7 9-4.3-1-7-4.6-7-9V6l7-3z"/>
                    <path d="M9 12l2 2 4-4"/>
                </svg>
            </div>
            <h3>Secured Operations</h3>
            <p>
                Automated deployments, observability, and guardrails
                for reliable, reversible releases.
            </p>
        </div>

    </div>

    <!-- FOOTER -->
    <footer>
        Developed with <span>❤</span> by OPEN10
    </footer>

</div>

</body>
</html>
