#!/usr/bin/env python3
"""
Generate sparkling-grid.svg dari data kontribusi GitHub asli (tanpa layanan pihak ketiga).
Sumber data: https://github.com/users/<username>/contributions
(endpoint publik yang sama yang dipakai halaman profil GitHub sendiri, tidak perlu token).
"""
import os
import re
import sys
import urllib.request

USERNAME = os.environ.get("GH_USERNAME", "").strip()
OUTPUT_PATH = os.environ.get("OUTPUT_PATH", "sparkling-grid.svg")

if not USERNAME:
    sys.exit("GH_USERNAME env var kosong, tidak bisa lanjut.")

URL = f"https://github.com/users/{USERNAME}/contributions"

# GitHub Actions runner tidak butuh header khusus untuk endpoint publik ini,
# tapi tetap set User-Agent supaya tidak dianggap request aneh.
req = urllib.request.Request(URL, headers={"User-Agent": "contribution-svg-generator"})
with urllib.request.urlopen(req, timeout=30) as resp:
    html = resp.read().decode("utf-8")

cells = re.findall(
    r'<td[^>]*data-date="([^"]+)"[^>]*id="contribution-day-component-(\d+)-(\d+)"[^>]*data-level="(\d)"',
    html,
)

if not cells:
    sys.exit(f"Tidak ada data kontribusi ditemukan untuk user '{USERNAME}'. "
              f"Cek apakah username benar dan profilnya publik.")

COLORS = {
    "0": "#161b22",
    "1": "#0e4429",
    "2": "#006d32",
    "3": "#26a641",
    "4": "#39d353",
}

CELL, GAP = 11, 3
STEP = CELL + GAP
COLS = max(int(c) for _, _, c, _ in cells) + 1
ROWS = max(int(r) for _, r, _, _ in cells) + 1
GRID_W = COLS * STEP - GAP
GRID_H = ROWS * STEP - GAP
OFFSET_X = round((820 - GRID_W) / 2)
OFFSET_Y = round((130 - GRID_H) / 2)

rect_lines = []
for date, row, col, level in cells:
    x = OFFSET_X + int(col) * STEP
    y = OFFSET_Y + int(row) * STEP
    rect_lines.append(
        f'<rect x="{x}" y="{y}" width="{CELL}" height="{CELL}" rx="2" '
        f'fill="{COLORS[level]}"><title>{date}: level {level}</title></rect>'
    )
grid_rects = "\n      ".join(rect_lines)

SVG_TEMPLATE = f'''<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" viewBox="0 0 820 130" style="background: #0d1117; border-radius: 8px;">
  <style>
    @keyframes revealWidth {{
      0% {{ width: 0px; }}
      45%, 100% {{ width: 820px; }}
    }}
    @keyframes scanLine {{
      0% {{ transform: translateX(0px); opacity: 0; }}
      5% {{ opacity: 1; }}
      45% {{ transform: translateX(820px); opacity: 1; }}
      50%, 100% {{ transform: translateX(820px); opacity: 0; }}
    }}
    @keyframes sparkle {{
      0%, 100% {{ opacity: 0; transform: scale(0.2); }}
      50% {{ opacity: 1; transform: scale(1.6); }}
    }}
    .reveal-rect {{ animation: revealWidth 5s ease-in-out infinite; }}
    .scanner-line {{ animation: scanLine 5s ease-in-out infinite; }}
    .star {{ fill: #ffffff; opacity: 0; animation: sparkle 1.2s infinite ease-in-out; }}
    .s1 {{ animation-delay: 0.1s; }}
    .s2 {{ animation-delay: 0.3s; }}
    .s3 {{ animation-delay: 0.5s; }}
    .s4 {{ animation-delay: 0.2s; }}
    .s5 {{ animation-delay: 0.6s; }}
    .s6 {{ animation-delay: 0.4s; }}
  </style>
  <defs>
    <clipPath id="reveal-clip">
      <rect class="reveal-rect" x="0" y="0" width="0" height="130" />
    </clipPath>
    <linearGradient id="sparkleGlow" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" stop-color="#ffffff" stop-opacity="0" />
      <stop offset="50%" stop-color="#ffffff" stop-opacity="0.8" />
      <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
    </linearGradient>
  </defs>

  <rect width="820" height="130" fill="#0d1117" rx="8" />

  <g clip-path="url(#reveal-clip)">
      {grid_rects}
  </g>

  <g class="scanner-line">
    <rect x="-15" y="0" width="30" height="130" fill="url(#sparkleGlow)" />
    <line x1="0" y1="0" x2="0" y2="130" stroke="#ffffff" stroke-width="3.5" style="filter: drop-shadow(0 0 8px #ffffff);" />
    <circle cx="-6" cy="15" r="2.5" class="star s1" />
    <circle cx="8" cy="35" r="3.5" class="star s2" />
    <circle cx="-10" cy="60" r="2" class="star s3" />
    <circle cx="12" cy="85" r="3" class="star s4" />
    <circle cx="-5" cy="105" r="2.5" class="star s5" />
    <circle cx="7" cy="120" r="3.5" class="star s6" />
  </g>
</svg>
'''

with open(OUTPUT_PATH, "w") as f:
    f.write(SVG_TEMPLATE)

print(f"OK: {len(cells)} sel kontribusi user '{USERNAME}' ditulis ke {OUTPUT_PATH}")
