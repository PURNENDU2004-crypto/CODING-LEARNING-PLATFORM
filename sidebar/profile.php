<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akash1232 - Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: #e4e4e7;
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
            padding: 15px 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fbbf24;
        }

        nav {
            display: flex;
            gap: 30px;
        }

        nav a {
            color: #e4e4e7;
            text-decoration: none;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #fbbf24;
        }

        .profile-grid {
            display: grid;
            grid-template-columns: 350px 1fr;
            gap: 25px;
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 25px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(251, 191, 36, 0.2);
        }

        .profile-header {
            text-align: center;
        }

        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            font-weight: bold;
            color: #1a1a2e;
            box-shadow: 0 5px 20px rgba(251, 191, 36, 0.4);
        }

        .username {
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .user-id {
            color: #9ca3af;
            margin-bottom: 15px;
        }

        .rank {
            font-size: 18px;
            color: #10b981;
            margin-bottom: 20px;
        }

        .edit-btn {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: transform 0.2s;
        }

        .edit-btn:hover {
            transform: scale(1.05);
        }

        .stats-section h3 {
            margin-bottom: 20px;
            color: #fbbf24;
        }

        .stat-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 8px;
        }

        .stat-label {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .stat-icon {
            width: 20px;
            height: 20px;
        }

        .stat-value {
            font-weight: bold;
            color: #fbbf24;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .progress-ring {
            position: relative;
            width: 250px;
            height: 250px;
            margin: 0 auto;
        }

        .ring-background {
            fill: none;
            stroke: rgba(255, 255, 255, 0.1);
            stroke-width: 12;
        }

        .ring-progress {
            fill: none;
            stroke: url(#gradient);
            stroke-width: 12;
            stroke-linecap: round;
            transform: rotate(-90deg);
            transform-origin: center;
            transition: stroke-dashoffset 1s ease;
        }

        .ring-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .ring-number {
            font-size: 48px;
            font-weight: bold;
            color: #fbbf24;
        }

        .ring-label {
            font-size: 18px;
            color: #9ca3af;
        }

        .difficulty-badges {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .badge {
            text-align: center;
        }

        .badge-label {
            font-size: 14px;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .badge-value {
            font-size: 24px;
            font-weight: bold;
        }

        .easy { color: #10b981; }
        .medium { color: #fbbf24; }
        .hard { color: #ef4444; }

        .heatmap {
            margin-top: 20px;
        }

        .heatmap-grid {
            display: grid;
            grid-template-columns: repeat(52, 1fr);
            gap: 3px;
            margin-top: 15px;
        }

        .heatmap-cell {
            aspect-ratio: 1;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 2px;
            transition: all 0.3s;
        }

        .heatmap-cell:hover {
            transform: scale(1.2);
            background: #fbbf24 !important;
        }

        .months {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 12px;
            color: #9ca3af;
        }

        .tabs {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .tab {
            padding: 12px 20px;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            transition: all 0.3s;
        }

        .tab.active {
            color: #fbbf24;
            border-bottom-color: #fbbf24;
        }

        .no-submissions {
            text-align: center;
            padding: 60px;
            color: #9ca3af;
            font-size: 18px;
        }

        @media (max-width: 1024px) {
            .profile-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">⚡ CodeProfile</div>
            <nav>
                <a href="#">Explore</a>
                <a href="#">Problems</a>
                <a href="#">Contest</a>
                <a href="#">Discuss</a>
                <a href="#">Interview</a>
            </nav>
        </header>

        <div class="profile-grid">
            <div class="sidebar">
                <div class="card profile-header">
                    <div class="avatar">A</div>
                    <div class="username">Akash1232</div>
                    <div class="user-id">@Akash1232</div>
                    <div class="rank">Rank: ~5,000,000</div>
                    <button class="edit-btn">Edit Profile</button>
                </div>

                <div class="card stats-section">
                    <h3>Community Stats</h3>
                    <div class="stat-item">
                        <div class="stat-label">
                            <span>👁️</span>
                            <span>Views</span>
                        </div>
                        <div class="stat-value">0</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-label">
                            <span>✅</span>
                            <span>Solutions</span>
                        </div>
                        <div class="stat-value">0</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-label">
                            <span>💬</span>
                            <span>Discuss</span>
                        </div>
                        <div class="stat-value">0</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-label">
                            <span>⭐</span>
                            <span>Reputation</span>
                        </div>
                        <div class="stat-value">0</div>
                    </div>
                </div>

                <div class="card">
                    <h3 style="margin-bottom: 15px; color: #fbbf24;">Skills</h3>
                    <div class="stat-item">
                        <span>🔴 Advanced</span>
                    </div>
                    <div class="stat-item">
                        <span>🟡 Intermediate</span>
                    </div>
                </div>
            </div>

            <div class="main-content">
                <div class="card">
                    <div class="progress-ring">
                        <svg width="250" height="250">
                            <defs>
                                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#10b981;stop-opacity:1" />
                                    <stop offset="50%" style="stop-color:#fbbf24;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#ef4444;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <circle class="ring-background" cx="125" cy="125" r="100"/>
                            <circle class="ring-progress" cx="125" cy="125" r="100" 
                                    stroke-dasharray="628.3" stroke-dashoffset="628.3"/>
                        </svg>
                        <div class="ring-text">
                            <div class="ring-number">0<span style="font-size: 24px;">/3716</span></div>
                            <div class="ring-label">Solved</div>
                        </div>
                    </div>

                    <div class="difficulty-badges">
                        <div class="badge">
                            <div class="badge-label easy">Easy</div>
                            <div class="badge-value easy">0/907</div>
                        </div>
                        <div class="badge">
                            <div class="badge-label medium">Medium</div>
                            <div class="badge-value medium">0/1933</div>
                        </div>
                        <div class="badge">
                            <div class="badge-label hard">Hard</div>
                            <div class="badge-value hard">0/876</div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h3 style="margin-bottom: 10px;">0 submissions in the past one year</h3>
                    <div class="heatmap">
                        <div class="heatmap-grid" id="heatmap"></div>
                        <div class="months">
                            <span>Oct</span>
                            <span>Nov</span>
                            <span>Dec</span>
                            <span>Jan</span>
                            <span>Feb</span>
                            <span>Mar</span>
                            <span>Apr</span>
                            <span>May</span>
                            <span>Jun</span>
                            <span>Jul</span>
                            <span>Aug</span>
                            <span>Sep</span>
                            <span>Oct</span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="tabs">
                        <div class="tab active">Recent AC</div>
                        <div class="tab">List</div>
                        <div class="tab">Solutions</div>
                        <div class="tab">Discuss</div>
                    </div>
                    <div class="no-submissions">
                        <div style="font-size: 48px; margin-bottom: 15px;">📝</div>
                        <div>No recent submissions</div>
                        <div style="margin-top: 10px; font-size: 14px;">Start solving problems to see them here!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Generate heatmap cells
        const heatmap = document.getElementById('heatmap');
        for (let i = 0; i < 364; i++) {
            const cell = document.createElement('div');
            cell.className = 'heatmap-cell';
            heatmap.appendChild(cell);
        }

        // Animate tabs
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>