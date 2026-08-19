#!/bin/bash
# Oct 1 — Holiday Security post
export PATH="/usr/local/bin:/usr/bin:/bin"
/usr/bin/python3 /Users/michaelrodriguez/Git_Projects/powertech-groupv2/scripts/publish-blog-post.py \
  "blog-fire-sprinkler-chicago" \
  "blog-holiday-security-chicago" \
  "navy" \
  "Security Tips" \
  "November 2026" \
  "Holiday Security for Chicago Retail: Protect Your Business During the Most Vulnerable Weeks of the Year" \
  "Retail theft and break-ins spike sharply during the holiday season. Here is what Chicago business owners can do right now to protect inventory, staff, and their bottom line." \
  >> /tmp/ptg-publish.log 2>&1
