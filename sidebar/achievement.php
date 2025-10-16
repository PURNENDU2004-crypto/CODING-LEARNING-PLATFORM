<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements - Akash1232</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #e2e8f0;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        header {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            padding: 20px 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .page-title {
            font-size: 32px;
            font-weight: bold;
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stats-overview {
            display: flex;
            gap: 30px;
            font-size: 14px;
        }

        .stat {
            text-align: center;
        }

        .stat-value {
            font-size: 24px;
            font-weight: bold;
            color: #fbbf24;
        }

        .stat-label {
            color: #94a3b8;
            margin-top: 5px;
        }

        .filters {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 25px;
            color: #e2e8f0;
            cursor: pointer;
            transition: all 0.3s;
        }

        .filter-btn:hover, .filter-btn.active {
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            border-color: #fbbf24;
            color: #0f172a;
            transform: translateY(-2px);
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
        }

        .achievement-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .achievement-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(251, 191, 36, 0.3);
        }

        .achievement-card.locked {
            opacity: 0.5;
        }

        .achievement-card.locked .badge-icon {
            filter: grayscale(100%);
        }

        .badge-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            border-radius: 50%;
            position: relative;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .badge-glow {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            opacity: 0.5;
            filter: blur(15px);
        }

        .gold { background: linear-gradient(135deg, #fbbf24, #f59e0b); }
        .silver { background: linear-gradient(135deg, #cbd5e1, #94a3b8); }
        .bronze { background: linear-gradient(135deg, #f97316, #c2410c); }
        .platinum { background: linear-gradient(135deg, #a78bfa, #7c3aed); }
        .diamond { background: linear-gradient(135deg, #06b6d4, #0891b2); }

        .achievement-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .achievement-desc {
            color: #94a3b8;
            text-align: center;
            font-size: 14px;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .achievement-progress {
            margin-top: 15px;
        }

        .progress-label {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            margin-bottom: 8px;
            color: #94a3b8;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #10b981, #fbbf24);
            border-radius: 10px;
            transition: width 1s ease;
        }

        .unlock-date {
            text-align: center;
            font-size: 12px;
            color: #10b981;
            margin-top: 10px;
        }

        .locked-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(239, 68, 68, 0.2);
            color: #ef4444;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: bold;
        }

        .unlocked-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(16, 185, 129, 0.2);
            color: #10b981;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: bold;
        }

        .category-section {
            margin-bottom: 50px;
        }

        .category-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            padding-left: 10px;
            border-left: 4px solid #fbbf24;
        }

        @media (max-width: 768px) {
            .achievements-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-overview {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="header-content">
                <div>
                    <div class="page-title">🏆 Achievements</div>
                    <p style="color: #94a3b8; margin-top: 8px;">Unlock badges by completing challenges</p>
                </div>
                <div class="stats-overview">
                    <div class="stat">
                        <div class="stat-value">12</div>
                        <div class="stat-label">Total Badges</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">4</div>
                        <div class="stat-label">Unlocked</div>
                    </div>
                    <div class="stat">
                        <div class="stat-value">33%</div>
                        <div class="stat-label">Completion</div>
                    </div>
                </div>
            </div>
        </header>

        <div class="filters">
            <button class="filter-btn active">All</button>
            <button class="filter-btn">Unlocked</button>
            <button class="filter-btn">Locked</button>
            <button class="filter-btn">Problem Solving</button>
            <button class="filter-btn">Contests</button>
            <button class="filter-btn">Community</button>
        </div>

        <div class="category-section">
            <h2 class="category-title">Problem Solving</h2>
            <div class="achievements-grid">
                <div class="achievement-card">
                    <div class="unlocked-badge">✓ UNLOCKED</div>
                    <div class="badge-icon bronze">
                        <div class="badge-glow bronze"></div>
                        🎯
                    </div>
                    <div class="achievement-title">First Blood</div>
                    <div class="achievement-desc">Solve your first problem on the platform</div>
                    <div class="achievement-progress">
                        <div class="progress-label">
                            <span>Progress</span>
                            <span>1/1</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="unlock-date">Unlocked on Jan 15, 2025</div>
                </div>

                <div class="achievement-card locked">
                    <div class="locked-badge">🔒 LOCKED</div>
                    <div class="badge-icon silver">
                        <div class="badge-glow silver"></div>
                        ⚡
                    </div>
                    <div class="achievement-title">Speed Demon</div>
                    <div class="achievement-desc">Solve 10 problems in a single day</div>
                    <div class="achievement-progress">
                        <div class="progress-label">
                            <span>Progress</span>
                            <span>0/10</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 0%"></div>
                        </div>
                    </div>
                </div>

                <div class="achievement-card">
                    <div class="unlocked-badge">✓ UNLOCKED</div>
                    <div class="badge-icon gold">
                        <div class="badge-glow gold"></div>
                        🌟
                    </div>
                    <div class="achievement-title">Century Club</div>
                    <div class="achievement-desc">Solve 100 problems successfully</div>
                    <div class="achievement-progress">
                        <div class="progress-label">
                            <span>Progress</span>
                            <span>100/100</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="unlock-date">Unlocked on Feb 28, 2025</div>
                </div>

                <div class="achievement-card locked">
                    <div class="locked-badge">🔒 LOCKED</div>
                    <div class="badge-icon platinum">
                        <div class="badge-glow platinum"></div>
                        🎖️
                    </div>
                    <div class="achievement-title">Problem Master</div>
                    <div class="achievement-desc">Solve 500 problems across all difficulties</div>
                    <div class="achievement-progress">
                        <div class="progress-label">
                            <span>Progress</span>
                            <span>100/500</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 20%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="category-section">
            <h2 class="category-title">Contest Achievements</h2>
            <div class="achievements-grid">
                <div class="achievement-card">
                    <div class="unlocked-badge">✓ UNLOCKED</div>
                    <div class="badge-icon bronze">
                        <div class="badge-glow bronze"></div>
                        🏁
                    </div>
                    <div class="achievement-title">Contest Beginner</div>
                    <div class="achievement-desc">Participate in your first contest</div>
                    <div class="achievement-progress">
                        <div class="progress-label">
                            <span>Progress</span>
                            <span>1/1</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="unlock-date">Unlocked on Mar 10, 2025</div>
                </div>

                <div class="achievement-card locked">
                    <div class="locked-badge">🔒 LOCKED</div>
                    <div class="badge-icon gold">
                        <div class="badge-glow gold"></div>
                        👑
                    </div>
                    <div class="achievement-title">Top 100</div>
                    <div class="achievement-desc">Finish in top 100 in any contest</div>
                    <div class="achievement-progress">
                        <div class="progress-label">
                            <span>Progress</span>
                            <span>0/1</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 0%"></div>
                        </div>
                    </div>
                </div>

                <div class="achievement-card locked">
                    <div class="locked-badge">🔒 LOCKED</div>
                    <div class="badge-icon diamond">
                        <div class="badge-glow diamond"></div>
                        💎
                    </div>
                    <div class="achievement-title">Contest Legend</div>
                    <div class="achievement-desc">Participate in 50 contests</div>
                    <div class="achievement-progress">
                        <div class="progress-label">
                            <span>Progress</span>
                            <span>1/50</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 2%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="category-section">
            <h2 class="category-title">Community Achievements</h2>
            <div class="achievements-grid">
                <div class="achievement-card">
                    <div class="unlocked-badge">✓ UNLOCKED</div>
                    <div class="badge-icon silver">
                        <div class="badge-glow silver"></div>
                        💬
                    </div>
                    <div class="achievement-title">Helpful Member</div>
                    <div class="achievement-desc">Post your first solution or discussion</div>
                    <div class="achievement-progress">
                        <div class="progress-label">
                            <span>Progress</span>
                            <span>1/1</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 100%"></div>
                        </div>
                    </div>
                    <div class="unlock-date">Unlocked on Jan 20, 2025</div>
                </div>

                <div class="achievement-card locked">
                    <div class="locked-badge">🔒 LOCKED</div>
                    <div class="badge-icon gold">
                        <div class="badge-glow gold"></div>
                        🔥
                    </div>
                    <div class="achievement-title">Streak Master</div>
                    <div class="achievement-desc">Maintain a 30-day solving streak</div>
                    <div class="achievement-progress">
                        <div class="progress-label">
                            <span>Progress</span>
                            <span>7/30</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 23%"></div>
                        </div>
                    </div>
                </div>

                <div class="achievement-card locked">
                    <div class="locked-badge">🔒 LOCKED</div>
                    <div class="badge-icon platinum">
                        <div class="badge-glow platinum"></div>
                        ⭐
                    </div>
                    <div class="achievement-title">Community Star</div>
                    <div class="achievement-desc">Get 100 upvotes on your posts</div>
                    <div class="achievement-progress">
                        <div class="progress-label">
                            <span>Progress</span>
                            <span>15/100</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 15%"></div>
                        </div>
                    </div>
                </div>

                <div class="achievement-card locked">
                    <div class="locked-badge">🔒 LOCKED</div>
                    <div class="badge-icon diamond">
                        <div class="badge-glow diamond"></div>
                        🌈
                    </div>
                    <div class="achievement-title">Year of Code</div>
                    <div class="achievement-desc">Solve at least 1 problem every day for a year</div>
                    <div class="achievement-progress">
                        <div class="progress-label">
                            <span>Progress</span>
                            <span>7/365</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 2%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>